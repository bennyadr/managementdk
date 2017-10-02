<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;
use Alert;
class ServerController extends Controller
{
     public function index(){
        $data = server::all();
    	return View('server.index',compact('data'));
    }
    /**
     *
     * Add page
     *
     */
    
    public function create(){
    	return View('server.add');
    }
    /**
     *
     * Save to database
     *
     */
    public function store(Request $request){

            $save = server::create($request->all());
            Alert()->success("data Server",'Berhasil di Simpan');
            return Redirect('server');
    }   
    /**
     *
     * Edit Page
     *
     */
    public function edit($id){
        $data = server::find($id);
        return View('server.edit',compact('data'));
    }
    /**
     *
     *  Update
     *
     */
    public function update(Request $request,$id){
         $server = server::find($id);
          $server -> update($request->all());
        return Redirect('server');
    }
    
	/**
	     *
	     * Destroy
	     *
	     */
	public function destroy($id){
        $grup = server::find($id);
        $grup->delete();
          Alert()->success("Data Server",'Berhasil di Hapus');
          return Redirect('server');
	}
    /**
     *
     * Detail Server
     *
     */
    public function detail($id){
        $data = Server::find($id);
        return View('server.detail',compact('data'));
    }
}
