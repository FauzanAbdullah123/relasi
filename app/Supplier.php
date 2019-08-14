<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suplier';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('id_supplier', 'nm_supplier', 'kota_supplier', 'alamat_supplier', 'no_tlp_supplier');

	public function Makanan() {
		return $this->hasMany('App\Makanan', 'id_supplier');
    }
    
    public function Minuman() {
		return $this->hasMany('App\Minuman', 'id_supplier');
	}
}
