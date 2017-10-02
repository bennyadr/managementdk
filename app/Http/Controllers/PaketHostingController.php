<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use Alert;
class PaketHostingController extends Controller
{
    /**
     *
     * Paket Hosting @wedus98
     *
     */

     public function index(){
        $data = paket::all();
    	return View('paket.index',compact('data'));
    }
    /**
     *
     * Add page
     *
     */
    
    public function create(){
    	return View('paket.add');
    }
    /**
     *
     * Save to database
     *
     */
    public function store(Request $request){

            $save = paket::create($request->all());
            Alert()->success(strtoupper($request->nama_paket),'Berhasil di Simpan');
            return Redirect('paket');
    }   
    /**
     *
     * Edit Page
     *
     */
    public function edit($id){
        $data = paket::find($id);
        return View('paket.edit',compact('data'));
    }
    /**
     *
     *  Update
     *
     */
    public function update(Request $request,$id){
         $paket = paket::find($id);
          $paket -> update($request->all());
        return Redirect('paket');
    }
    
	/**
	     *
	     * Destroy
	     *
	     */
	public function destroy($id){
        $grup = paket::find($id);
        $grup->delete();
          Alert()->success(strtoupper($grup->nama_paket),'Berhasil di Hapus');
          return Redirect('paket');
	}
	        

}
