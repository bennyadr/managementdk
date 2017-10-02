<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    
    protected $table = 'paket_hosting';
    protected $fillable = ['nama_paket'];
    protected $primaryKey = 'id_paket';
}
