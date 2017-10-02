<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyek;
use App\Server;
use App\PelangganHosting;
class DashboardController extends Controller
{
    public function index(){
    	$server = Server::count();
        $proyek = Proyek::select('profit','tahun')->groupBy('tahun')->get();
        $PelangganHosting = PelangganHosting::get()->take(5);
        $data = Proyek::orderBy('created_at')->get();	
        //http://stackoverflow.com/questions/40917189/laravel-syntax-error-or-access-violation-1055-error
    	return View('dashboard.index',compact('server','proyek','data','PelangganHosting'));
    }
}
