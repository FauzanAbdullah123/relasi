<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    protected $table = 'minuman';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('id_supplier', 'nm_minuman', 'harga_minuman', 'stok_minuman');


	public function supplier() {
		return $this->belongsTo('App\Supplier', 'id_supplier');
	}

	public function transaksi() {
		return $this->hasMany('App\Transaksi', 'id_supplier');
	}
}
