<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([

			]);
		}*/

		Sentry::createUser(array(
		    'email'    => 'admin@eperformance.go.id',
		    'password' => 'nimda',
		    'activated' => true,
		));
	}

}