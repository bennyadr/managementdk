<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use Alert;
class PelangganController extends Controller
{
    /**
     *
     * Wedus98 
     *
     */
    
    public function index(){
        $data = pelanggan::all();
    	return View('pelanggan.index',compact('data'));
    }
    /**
     *
     * Add page
     *
     */
    
    public function create(){
    	return View('pelanggan.add');
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

            $save = pelanggan::create($data);
            Alert()->success(strtoupper($request->nama),'Berhasil di Simpan');
            return Redirect('pelanggan');
    }   
    /**
     *
     * Edit Page
     *
     */
    public function edit($id){
        $data = pelanggan::find($id);
        return View('pelanggan.edit',compact('data'));
    }
    /**
     *
     *  Update
     *
     */
    public function update(Request $request,$id){
         $pelanggan = pelanggan::find($id);
          $pelanggan -> update($request->all());
        return Redirect('pelanggan');
    }
    
	/**
	     *
	     * Destroy
	     *
	     */
	public function destroy($id){
        $grup = pelanggan::find($id);
        $grup->delete();
          Alert()->success(strtoupper($grup->nama),'Berhasil di Hapus');
          return Redirect('pelanggan');
	}
	/**
	 *
	 * show Detail
	 *
	 */
	public function show($id){
		$pelanggan = Pelanggan::find($id);
        return View('pelanggan.detail',compact('pelanggan'));
	}
	
	        

    
}
