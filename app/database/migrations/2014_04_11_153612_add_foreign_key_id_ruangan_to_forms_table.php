<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeyIdRuanganToFormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forms', function(Blueprint $table) {
			$table->integer('id_ruangan')->unsigned();
			$table->foreign('id_ruangan')->references('id')->on('ruangan');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forms', function(Blueprint $table) {
			$table->dropColumn('id_ruangan');
		});
	}

}
