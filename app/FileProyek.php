<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileProyek extends Model
{
    protected $table = 'file_proyek';
    protected $primaryKey = 'id_file_proyek';
    protected $fillable =['nama_file','id_file_proyek','id_proyek'];

    /**
     *
     * Relashit
     *
     */
 	public function proyek(){
 		return $this->belongsTo('App\Proyek','id_proyek');
 	}   
}
