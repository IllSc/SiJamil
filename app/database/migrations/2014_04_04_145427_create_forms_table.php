<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forms', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_peminjam');
			$table->string('email',99);
			$table->date('tanggal');
			$table->time('jam_peminjaman');
			$table->string('keperluan');
			$table->string('fasilitas');
			$table->integer('jumlah_peserta');
			$table->string('status');
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
		Schema::drop('forms');
	}

}
