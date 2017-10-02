<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PelangganHosting;
use App\DetailHosting;
class HostingController extends Controller
{
    public function index(){
    	$data = PelangganHosting::select('perwakilan','nama','domain','id_pelanggan_hosting','status_hosting')->get();
    	return View('hosting.index',compact('data'));
    }
    /**
     *
     * Add page
     *
     */
    
    public function create(){
    	return View('hosting.add');
    }
    /**
     *
     * Save to database
     *
     */
    public function store(Request $request){
    		$data = $request->all();
    		$data['tahun'] = date('Y');
    		$data['inputed_by'] = "admin";

            $save = PelangganHosting::create($data);
            Alert()->success(strtoupper($request->nama),'Berhasil di Simpan');
            return Redirect('hosting');
    }   
    /**
     *
     * Edit Page
     *
     */
    public function edit($id){
        $data = PelangganHosting::find($id);
        return View('hosting.edit',compact('data'));
    }
    /**
     *
     *  Update
     *
     */
    public function update(Request $request,$id){
         $PelangganHosting = PelangganHosting::find($id);
         $PelangganHosting -> update($request->all());
        Alert()->success(strtoupper($PelangganHosting->nama),'Berhasil di Update');
        return Redirect('hosting');
    }
    
	/**
	     *
	     * Destroy
	     *
	     */
	public function destroy($id){
        $grup = PelangganHosting::find($id);
        $grup->delete();
        Alert()->success(strtoupper($grup->nama),'Berhasil di Hapus');
        return Redirect('hosting');
	}
	/**
	 *
	 * show Detail
	 *
	 */
	public function show($id){
		$data = PelangganHosting::with('details')->where('id_pelanggan_hosting',$id)->get();
        return View('hosting.detail.index',compact('data'));
	}
    /**
     *
     * create Detail
     *
     */
    public function createDetail($id){
        $data = PelangganHosting::find($id);
        return View('hosting.detail.add',compact('id','data'));
    }
    /**
     *
     * Store Detail
     *
     */
    public function storeDetail(Request $request){
        $this->validate($request,['awal_daftar'=>'required|date',
                                  'tgl_selesai'=>'required|date']);
        $detail = DetailHosting::create($request->all());
        Alert()->success('Detail Hosting Berhasil di Simpan');
        return Redirect('hosting/detail/'.$request->id_pelanggan_hosting);
    }
    /**
     *
     * Edit Page
     *
     */
    public function editDetail($id){
        $data = DetailHosting::find($id);
        return View('hosting.detail.edit',compact('data'));
    }
    /**
     *
     * Update Detail
     *
     */
    public function updateDetail(Request $request, $id){
          $this->validate($request,['awal_daftar'=>'required|date',
                                  'tgl_selesai'=>'required|date']);
           $data = DetailHosting::find($id);
           $data->update($request->all());
          Alert()->success('Detail Hosting Berhasil di Update');
          return Redirect('hosting/detail/'.$data->hosting->id_pelanggan_hosting);

    }
    /**
     *
     * delete detail
     *
     */
    
    public function destroyDetail($id){
        $detail = DetailHosting::find($id);
        $detail->delete();
        Alert()->success(strtoupper('Data Berhasil di hapus'));
        return Redirect()->back();
    }
    
    
	/**
     *
     * Change Status
     *
     */
    public function changeStatus($id){
        $data = PelangganHosting::find($id);
        if($data->status_hosting == true ){
            $data->update(['status_hosting'=>0]);
        }else{
            $data->update(['status_hosting'=>1]);
        }
         Alert()->success(strtoupper($data->nama),'Status di Ubah');
        return Redirect('hosting');
    }
    
	        
    
}
