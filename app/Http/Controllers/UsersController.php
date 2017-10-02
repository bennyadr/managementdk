<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    
    public function __construct(){
        $this->middleware('role:pm');
    }
    public function index(){
    	$data = User::all();
    	return View('pengguna.index',compact('data'));
    }
    public function edit($id){
    	$user = User::findOrfail($id);
    	return View('pengguna.edit',compact('user'));
    }
     public function updateUser(Request $request,$id){
        $this->validate($request,
            ['name' => 'required|max:255',
            'email' => 'required|email|max:255',
           ]);
        $data = $request->all();
        $user = User::find($id);
        $user ->update($data);
        Alert()->success(strtoupper($request->get('name')),'Berhasil di Update');
        return Redirect('pengguna');
    }
    public function delete(Request $request,$id){

    	$user = User::findOrfail($id);
    	$user->delete();
    	 Alert()->success(strtoupper($request->get('name')),'Berhasil di Hapus');
        return Redirect('pengguna');

    }
}
