<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class IsianTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2) as $index)
		{
			$form = new Isian;
			$form->email = $faker->email;
			$form->tanggal = $faker->date;
			$form->email = $faker->safeEmail;
				$form->tanggal = $faker->date();
				$form->jam_peminjaman  = $faker->time();
				$form->keperluan  = $faker->sentence($nbWords = 6);
				$form->fasilitas  = $faker->sentence($nbWords = 2);
				$form->jumlah_peserta  = 59;
				$form->status  = 'Humas';
				$form->id_peminjam  = 5;
				$form->id_ruangan  = 2;
			$form->save();
		}
	}

}