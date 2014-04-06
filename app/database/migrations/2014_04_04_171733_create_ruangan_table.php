<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRuanganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ruangan', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nomor_ruangan');
			$table->integer('kapasitas');
			$table->string('fasilitas');
			$table->integer('lantai');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ruangan');
	}

}
