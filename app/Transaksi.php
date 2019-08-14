<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('id_customer','id_minuman','id_makanan','jmlh_makanan', 'jmlh_minuman', 'ttl_harga','tgl_pesan','tgl_kirim','alamat_tujuan','kota_tujuan');


	public function customer() {
		return $this->belongsTo('App\Customer', 'id_customer');
	}

	public function minuman() {
		return $this->belongsTo('App\Minuman', 'id_minuman');
	}

	public function makanan() {
		return $this->belongsTo('App\Makanan', 'id_makanan');
	}
}
