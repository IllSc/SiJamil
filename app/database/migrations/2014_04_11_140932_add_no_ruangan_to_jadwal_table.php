<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddNoRuanganToJadwalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jadwal', function(Blueprint $table) {
			$table->string('no_ruangan');
			$table->foreign('no_ruangan')->references('nomor_ruangan')->on('ruangan');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('jadwal', function(Blueprint $table) {
			$table->dropColumn('no_ruangan');
		});
	}

}
