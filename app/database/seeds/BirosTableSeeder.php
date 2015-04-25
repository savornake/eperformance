<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BirosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Biro::create([
			'name'	=> 'Biro Umum'
		]);

		Biro::create([
			'name'			=> 'Biro PPK',
			'description'	=> 'Biro Perencanaan Pengawasan dan Keuangan'
		]);

		Biro::create([
			'name'			=> 'Biro ASIL',
		]);

		Biro::create([
			'name'	=> 'Bidang Pencegahan'
		]);

		Biro::create([
			'name'	=> 'Bidang Penanganan Laporan'
		]);
	}

}