<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FormTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Form::create([
				array(
				'email' => $faker->safeEmail,
				'tanggal' => $faker->date(),
				'jam_peminjaman' => $faker->time(),
				'keperluan' => $faker->sentence($nbWords = 6),
				'fasilitas' => $faker->sentence($nbWords = 2),
				'jumlah_peserta' => 59,
				'status' => 'disamakan',
				'id_peminjam' => 5,
				'id_ruangan' => 2)

			]);
		}
	}

}