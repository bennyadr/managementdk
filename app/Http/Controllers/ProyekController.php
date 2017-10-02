<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Proyek;
use App\DetailProyek;
use PDF;
use File;
class ProyekController extends Controller
{
    /**
     *
     * Wedus98 
     *
     */
    
    public function index(){
        $data = proyek::all();
    	return View('proyek.index',compact('data'));
    }
    /**
     *
     * Add page
     *
     */
    
    public function create(){
    	return View('proyek.add');
    }
    /**
     *
     * Save to database
     *
     */
    public function store(Request $request){

            $save = proyek::create($request->all());
            Alert()->success(strtoupper($request->nama_proyek),'Berhasil di Simpan');
            return Redirect('proyek');
    }   
    /**
     *
     * Edit Page
     *
     */
    public function edit($id){
        $data = proyek::find($id);
        return View('proyek.edit',compact('data'));
    }
    /**
     *
     *  Update
     *
     */
    public function update(Request $request,$id){
         $proyek = proyek::find($id);
          $proyek -> update($request->all());
        return Redirect('proyek');
    }
    
	/**
	     *
	     * Destroy
	     *
	     */
	public function destroy($id){
        $grup = proyek::find($id);
        $grup->details()->delete();
        foreach($grup->files as $deleteImg){
        $path     = public_path() . DIRECTORY_SEPARATOR . 'files' .  DIRECTORY_SEPARATOR . $deleteImg->nama_file;
          File::delete($path);
          }
        $grup->files()->delete();

        $grup->delete();

          Alert()->success(strtoupper($grup->nama_proyek),'Berhasil di Hapus');
          return Redirect('proyek');
	}
    /**
     *
     * Detail
     *f
     */
    public function detail($id){
        $data = Proyek::with('client','grup','details')->where('id_proyek',$id)->get();
        return View('proyek.detail.index',compact('data'));
    }

    /**
     *
     * Add Detail
     *
     */
    public function createDetail($id){
        $data = Proyek::find($id);
        return View('proyek.detail.add',compact('id','data'));
    }

    /**
     *
     * save detail
     *
     */
    public function storeDetail(Request $request){
        $this->validate($request,
                        ['tgl'=>'required'],
                        ['tgl.required'=>'Tanggal Harus di isi']);
        $detail = DetailProyek::create($request->all());
        //hitung profit
             $cost = $detail->nilai;
             $contract = $detail->project->nilai_proyek;
             $profit = $contract - $cost;
             $detail->project->update(['profit'=>$profit]);
             Alert()->success(strtoupper($request->deskripsi),'Berhasil di Tambahkan');
             return Redirect('proyek/detail/'.$request->id_proyek);
        // $detail = DetailProyek::create();
    }
    /**
     *
     * Edit Detail
     *
     */
    public function editDetail($id){
        $data = DetailProyek::find($id);
        $nilaiSebelum = $data->nilai;
        return View('proyek.detail.edit',compact('data','id_proyek','nilaiSebelum'));
    }
    /**
     *
     * UpdateDetail
     *
     */
    public function updateDetail(Request $request,$id){

         $data = $request->except('nilaiSebelum','nilai');
               $detail = DetailProyek::find($id);
               $nilaiSebelum = $request->get('nilaiSebelum');
               $newnilai = $request->get('nilai');
            if($detail->project->profit > 0){
                if($nilaiSebelum == $newnilai){
                     $detail ->update($data);
                 }else{
                    $data['nilai']=$newnilai;
                    $detail ->update($data);
                    //hitung update profit
                    //perbandingan data lama dan baru 
                    //jika data lama tidak sama dengan data baru maka update data
                    $cost = $detail->nilai;
                    $contract = $detail->project->nilai_proyek;
             
                    $profit = $contract - $cost;
                    $detail->project->update(['profit'=>$profit]);
                 }
            }else{
                Alert()->success(strtoupper($request->deskripsi),'Profit Limit');
                 return Redirect('proyek/detail/'.$detail->project->id_proyek);
            }
               
             Alert()->success(strtoupper($request->deskripsi),'Berhasil di Update');
             return Redirect('proyek/detail/'.$detail->project->id_proyek);
    }
    /**
     *
     * Destroy Detail
     *
     */
    public function destroyDetail($id){
        $detail = DetailProyek::find($id);
        $cost = $detail->nilai;
        $contract = $detail->project->profit;
        $profit = $contract + $cost;
        $detail->project->update(['profit'=>$profit]);
        $detail->delete();
        Alert()->success(strtoupper($detail->deskripsi),'Berhasil di hapus');
        return Redirect()->back();
    }
    /**
     *
     * Format Indo
     *
     */
    
     public function createDateIndo($value){
        //http://jagowebdev.com/format-tanggal-indonesia-dengan-php/
        $bulan = array (1 =>   'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember'
            );
         $split = explode('-', $value);
         return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }
    /**
     *
     * Print Penagihan
     *
     */
    
     public function print(Request $request){
      $id = $request->get('id');
      $status = $request->get('status');
      if($status == 'selesai'){
         $data = Proyek::with('client')->where('id_proyek',$id)->where('status_proyek',$status)->first();
         $printDate = $this->createDateIndo(date('Y-m-d'));
        // $cust = Customer::select('address','company_name')->where('company_name',$d['agency'])->get();
        $pdf = PDF::loadView('proyek.suratpenagihan.penagihan', compact('data','cust','printDate'))->setPaper('a4');
 
        return $pdf->download('surat_penagihan.pdf');
      }
       
         return Redirect('/proyek');
    }
    
    
    
    
	        
}
