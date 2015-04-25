<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BirosTableSeeder extends Seeder {

	public function run()
	{
		Biro::create([
			'nama'	=> 'Bidang Pencegahan',
		]);

		Biro::create([
			'nama'	=> 'Bidang Penanganan Laporan',
		]);

		Biro::create([
			'nama'	=> 'Biro UMUM',
		]);

		Biro::create([
			'nama'	=> 'Biro PPK',
		]);

		Biro::create([
			'nama'	=> 'Biro ASIL',
		]);
	}

}