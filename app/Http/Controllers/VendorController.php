<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use Alert;
class VendorController extends Controller
{
    public function index(){
        $data = vendor::all();
    	return View('vendorDk.index',compact('data'));
    }
    /**
     *
     * Add page
     *
     */
    
    public function create(){
    	return View('vendorDk.add');
    }
    /**
     *
     * Save to database
     *
     */
    public function store(Request $request){

            $save = vendor::create($request->all());
            Alert()->success(strtoupper($request->nama_vendor),'Berhasil di Simpan');
            return Redirect('vendor');
    }   
    /**
     *
     * Edit Page
     *
     */
    public function edit($id){
        $data = vendor::find($id);
        return View('vendorDk.edit',compact('data'));
    }
    /**
     *
     *  Update
     *
     */
    public function update(Request $request,$id){
         $vendor = vendor::find($id);
          $vendor -> update($request->all());
        return Redirect('vendor');
    }
    
	/**
	     *
	     * Destroy
	     *
	     */
	public function destroy($id){
        $grup = vendor::find($id);
        $grup->delete();
          Alert()->success(strtoupper($grup->nama_vendor),'Berhasil di Hapus');
          return Redirect('vendor');
	}
}
