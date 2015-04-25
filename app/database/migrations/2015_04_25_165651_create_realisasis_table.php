<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRealisasisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('realisasi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tapkin_id');
			$table->enum('waktu', [1,2,3,4]);
			$table->text('uraian');
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
		Schema::drop('realisasi');
	}

}
