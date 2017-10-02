<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';
    protected $fillable = ['nama_vendor','no_hp','id_vendor','perwakilan','alamat'];
    protected $primaryKey = 'id_vendor';
}
