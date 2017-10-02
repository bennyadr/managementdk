<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyek;
use PDF;
use App\PelangganHosting;
use App\Pelanggan;
class ReportController extends Controller
{
    //
      public function __construct(){
        $this->middleware('role:pm');
      }
      public function indexProject(){
    	  $project = Proyek::selectRaw('tahun,profit,sum(profit) as keuntungan')->groupBy('tahun')->get()->toArray();
         
    	  return View('report.project.index',compact('project','sercust','hostcustYear'));
  		}
  		public function reportProyek(Request $request){
    	$year = $request->get('tahun');
        if($year == ""){
            $data = Proyek::get();
        }else{
           $data = Proyek::where('tahun','LIKE','%'.$year.'%')->where('status_proyek','selesai')->get();

        }
    	 $pdf = PDF::loadView('reportTemplate.report_project', compact('data','year'));
		    return $pdf->download('report_project.pdf');
      }

      /**
       *
       * Report Hosting
       *
       */
      public function indexHosting(){
         $hostcustYear = PelangganHosting::selectRaw('tahun,count(*) as jumlah')->groupBy('tahun')->get();
       
         return View('report.hostcust.index',compact('hostcustYear'));

      }
      public function reportHosting(Request $request){
        $year = $request->get('tahun');
        if($year != "all"){
          $data = PelangganHosting::where('tahun',$year)->get();
         
        }else{
          $data = PelangganHosting::get();

        }

        $pdf = PDF::loadView('reportTemplate.report_hostcust_year', compact('data','year'));
        return $pdf->download('report_hosting.pdf');
      }

    /**
           *
           * Report Pelanggan
           *
           */
      public function indexPelanggan(){
          $customer = Pelanggan::selectRaw('tahun,count(*) as countcustomer')->groupBy('tahun')->get();
           return View('report.customer.index',compact('customer'));
      }
      public function reportPelanggan(Request $request){
            $year = $request->get('tahun');
            if($year != "all"){
              $data = Pelanggan::where('tahun',$year)->get();
         
            }else{
              $data = Pelanggan::get();

             }
            $pdf = PDF::loadView('reportTemplate.report_customer', compact('data','year'));
            return $pdf->download('report_pelanggan.pdf');
      }

                
}
