<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;
use App\mahasiswa_hobi;

class RelasiSeeder extends Seeder {

	public function run() {

		DB::table('mahasiswa')->delete();
		DB::table('wali')->delete();

		/***********************************
		 *** SIAPKAN SEEDER DOSEN DISINI ***
		 ***********************************/
		DB::table('dosen')->delete();

		# Tambahkan data dosen
		$dosen = Dosen::create(array(
			'nama' => 'Yulianto',
			'nipd' => '1234567890'));

		$this->command->info('Data dosen telah diisi!');


        
        # Kemudian tambahkan nilai id_dosen ditiap record mahasiswa 
		
		$novay = Mahasiswa::create(array(
			'nama' => 'Noviyanto Rachmadi',
            'nim'  => '1015015072',
            'id_dosen' => $dosen->id));

		$dije = Mahasiswa::create(array(
			'nama' => 'Djaffar',
            'nim'  => '1015015088',
            'id_dosen' => $dosen->id));

		$ayu = Mahasiswa::create(array(
			'nama' => 'Puji Rahayu',
            'nim'  => '1015015078',
            'id_dosen' => $dosen->id));

		$this->command->info('Mahasiswa telah diisi!');

		DB::table('hobi')->delete();
		DB::table('mahasiswa_hobi')->delete();

		# Isi tabel hobi
		$mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
		$baca_buku = Hobi::create(array('hobi' => 'Baca Buku'));

		# Hubungkan Mahasiswa dengan Hobinya masing-masing
		$novay->hobi()->attach($mandi_hujan->id);
		$novay->hobi()->attach($baca_buku->id);
		$dije->hobi()->attach($mandi_hujan->id);
		$ayu->hobi()->attach($baca_buku->id);

		# Tampilkan pesan ini bila berhasil diisi
		$this->command->info('Mahasiswa beserta Hobi telah diisi!');



	
		Wali::create(array(
			'nama'  => 'Achmad S',
			'id_mahasiswa' => $novay->id
		));
	
		Wali::create(array(
			'nama'  => 'Entahlah',
			'id_mahasiswa' => $dije->id
		));
	
		Wali::create(array(
			'nama'  => 'Arianto',
			'id_mahasiswa' => $ayu->id
		));

		$this->command->info('Data mahasiswa dan wali telah diisi!');

    }
}
