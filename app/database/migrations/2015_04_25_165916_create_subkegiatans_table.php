<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubkegiatansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subkegiatan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('indikator_id');
			$table->char('nama_kegiatan');
			$table->text('keterangan');
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
		Schema::drop('subkegiatan');
	}

}
