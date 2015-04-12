<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndikatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('indikators', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sasaran_id');
			$table->timestamps();
			$table->text('indikator_kinerja');
			$table->integer('target');
			$table->integer('waktu_penyelesaian');
			$table->text('keterangan');
			$table->integer('sasaran_id');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('indikators');
	}

}
