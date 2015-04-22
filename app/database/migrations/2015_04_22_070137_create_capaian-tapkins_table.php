<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCapaianTapkinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('capaian-tapkins', function(Blueprint $table)
		{
			$table->integer('sasaran_id');
			$table->text('indikator_kinerja');
			$table->integer('target');
			$table->integer('waktu_penyelesaian');
			$table->text('keterangan');
			$table->increments('id');
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
		Schema::drop('capaian-tapkins');
	}

}
