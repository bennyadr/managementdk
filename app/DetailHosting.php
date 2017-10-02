<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailHosting extends Model
{
    protected $table = 'detail_hosting';
    protected $primaryKey = 'id_detail_hosting';
    protected $fillable = ['id_detail_hosting','awal_daftar','tgl_selesai','id_pelanggan_hosting'];



    /**
     *
     * Relashit
     *
     */
    public function hosting(){
    	return $this->belongsTo('App\PelangganHosting','id_pelanggan_hosting');
    }
    
}
