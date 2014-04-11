<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenyetujuiForm extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menyetujui_form', function(Blueprint $table) {
			$table->integer('id_form')->unsigned();
			$table->foreign('id_form')->references('id')->on('forms');

			
		});
	}
	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menyetujui_form');
	}

}
