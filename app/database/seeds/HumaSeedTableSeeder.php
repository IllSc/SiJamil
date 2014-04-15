<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class HumaSeedTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1) as $index)
		{
			User::create(
				array(
    
    'name' => $faker->firstName,
    'role' => 'Humas',
    'password' => '234')
			);
		}
	}

}