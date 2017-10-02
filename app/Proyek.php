<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Proyek extends Model
{
    protected $table='proyek';
    protected $fillable=['nama_proyek',
					    'id_pelanggan',
					    'tgl_mulai',
					    'tgl_selesai',
					    'status_pembayaran',
					    'status_proyek',
					    'keterangan',
					    'tahun',
					    'spk',
					    'nilai_proyek',
					    'id_grup',
					    'profit'];
	protected $primaryKey = 'id_proyek';

	/**
	 *
	 * Relashit
	 *
	 */
	
	public function grup(){
		return $this->belongsTo('App\Group','id_grup');
	}

	public function client(){
		return $this->belongsTo('App\Pelanggan','id_pelanggan');
	}
	public function details(){
		return $this->hasMany('App\DetailProyek','id_proyek');
	}
	public function files(){
		return $this->hasMany('App\FileProyek','id_proyek');
	}
	/**
	 *
	 * Asesor
	 *
	 */
	
	public function formatRupiah($angka){
		$jadi = "Rp " . number_format($angka,2,',','.');
		return $jadi;
	}
	public function getFormatRupiahNilaiAttribute(){
			return $this->formatRupiah($this->nilai_proyek);
	}
	public function getFormatRupiahProfitAttribute(){
			return $this->formatRupiah($this->profit);
	}
	public function getNilaiOperasionalAttribute(){
		$nilai = $this->details->sum('nilai');
		return $this->formatRupiah($nilai);
	}

	public function getStatusPembayaranTextAttribute(){
		if($this->status_pembayaran=="2"){
			return "Belum Lunas";
		}else{
			return "Lunas";
		}
	}
	
}
