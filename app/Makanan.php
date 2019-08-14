<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table = 'makanan';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('id_supplier', 'nm_makanan', 'harga_makanan', 'stok_makanan');


	public function supplier() {
		return $this->belongsTo('App\Supplier', 'id_supplier');
	}

	public function transaksi() {
		return $this->hasMany('App\Transaksi', 'id_supplier');
	}
}
