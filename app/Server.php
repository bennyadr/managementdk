<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $table ='server';
    protected $primaryKey = 'id_server';
    protected $fillable = ['nama_pelanggan','nama_perangkat','username','password','informasi'];


    // public function pelanggan(){
    // 	return $this->belongsTo('App\Pelanggan','id_pelanggan');
    // }
}
