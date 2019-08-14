<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $table = 'customer';
	protected $fillable = array('id_customer', 'nm_customer', 'alamat_customer', 'kota','no_tlp','email');


	public function transaksi() {
		return $this->hasMany('App\Transaksi', 'id_customer');
	}
}
