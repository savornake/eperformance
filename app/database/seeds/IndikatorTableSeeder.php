<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class IndikatorTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$sasarans = Sasaran::all();

		foreach ($sasarans as $sasaran) {
			$indikators = [];
			for ($i=0; $i < rand(5,10); $i++) { 
				$indikator = new Indikator([
					'indikator_kinerja'		=> 'Indikator ' . $faker->text,
					'target'				=> 'Indikator ' . $faker->randomElement([10,20,30,40,50,60,70,80,90,100]),
					'waktu_penyelesaian'	=> 'Indikator ' . $faker->randomElement([1,2,3,4]),
					'keterangan'			=> 'Indikator ' . $faker->text,

				]);

				array_push($indikators, $indikator);
			}

			$indikator = $sasaran->indikator()->saveMany($indikators);
		}
	}

}