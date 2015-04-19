<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SasaranTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Sasaran::create([
				'sasaran'	=> 'Sasaran Strategis '.$faker->sentence(5),
				'deskripsi'	=> 'Sasaran Strategis '.$faker->text
			]);
		}
	}

}