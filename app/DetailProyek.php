<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailProyek extends Model
{
    protected $table = 'detail_proyek';
    protected $fillable =['deskripsi','id_proyek','keterangan','nilai','tgl','id_vendor'];
    protected $primaryKey = 'id_detail_proyek';


    /**
     *
     * relashit
     *
     */
    public function project(){
    	return $this->belongsTo('App\Proyek','id_proyek');
    }
    public function vendor(){
        return $this->belongsTo('App\Vendor','id_vendor');
    }
    public function formatRupiah($angka){
         $jadi = "Rp " . number_format($angka,2,',','.');
        return $jadi;
    }
    public function getFormatRupiahNilaiAttribute(){
            return $this->formatRupiah($this->nilai);
    }
    
        public function getNilaiOperasionalAttribute(){
        $nilai = $this->groupBy('id_proyek')->selectRaw('nilai,sum(nilai) as nilaiOperasional')->get();
        return $this->formatRupiah($nilai);
    }
}
