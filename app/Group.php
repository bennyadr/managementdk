<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    
    protected $table = 'grup';
    protected $fillable = ['nama_grup'];
    protected $primaryKey = 'id_grup';
}
