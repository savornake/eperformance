<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		Sentry::createUser(array(
		    'email'    => 'admin@eperformance.go.id',
		    'password' => 'nimda',
		    'activated' => true,
		));
	}

}