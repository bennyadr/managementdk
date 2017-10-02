<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelangganHosting extends Model
{
   	protected $fillable = ['id_pelanggan_hosting','nama','alamat','hp','telp','fax','domain','perwakilan','jabatan','tahun','status_hosting','inputed_by','email','id_paket'];
   	protected $table = 'Pelanggan_hosting';
   	protected $primaryKey ='id_pelanggan_hosting';


   	/**
   	 *
   	 * Relashit
   	 *
   	 */
   	public function details(){
   		return $this->hasMany('App\DetailHosting','id_pelanggan_hosting');
   	}
      public function paket(){
         return $this->belongsTo('App\Paket','id_paket');
      }
      /**
       *
       * assesor
       *
       */
      public function getStatusTextAttribute(){
         if($this->status_hosting == 1){
            return "Aktif";
         }else{
            return "Tidak Aktif";
         }
      }
      
   	
}
