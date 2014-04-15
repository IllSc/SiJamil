<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$user = new User;
		$user->name = $faker->userName;
		$user->role = 'Perlengkapan';
		$user->password = Hash::make('123');
		$user->save();

		$user = new User;
		$user->name = $faker->userName;
		$user->role = 'Mahalum';
		$user->password = Hash::make('123');
		$user->save();


		
	}

}