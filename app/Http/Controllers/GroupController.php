<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Alert;
class GroupController extends Controller
{
    /**
     *
     * Wedus98 
     *
     */
    
    public function index(){
        $data = Group::all();
    	return View('group.index',compact('data'));
    }
    /**
     *
     * Add page
     *
     */
    
    public function create(){
    	return View('group.add');
    }
    /**
     *
     * Save to database
     *
     */
    public function store(Request $request){

            $save = Group::create($request->all());
            Alert()->success(strtoupper($request->nama_grup),'Berhasil di Simpan');
            return Redirect('group');
    }   
    /**
     *
     * Edit Page
     *
     */
    public function edit($id){
        $data = Group::find($id);
        return View('group.edit',compact('data'));
    }
    /**
     *
     *  Update
     *
     */
    public function update(Request $request,$id){
         $group = Group::find($id);
          $group -> update($request->all());
        return Redirect('group');
    }
    
	/**
	     *
	     * Destroy
	     *
	     */
	public function destroy($id){
        $grup = Group::find($id);
        $grup->delete();
          Alert()->success(strtoupper($grup->nama_grup),'Berhasil di Hapus');
          return Redirect('group');
	}
	        

    
}
