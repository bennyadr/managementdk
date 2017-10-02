<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    
    protected $table ='pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = ['nama',
    					   'alamat',
    					   'email',
    					   'telp',
    					   'hp',
                           'fax',
    					   'tahun',
    					   'lokasi',
    					   'perwakilan',
    					   'jabatan',
                           'inputed_by'];

}
