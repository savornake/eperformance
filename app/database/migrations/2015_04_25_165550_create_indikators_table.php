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
		Schema::create('indikator', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent_id');
			$table->char('tipe', 100);
			$table->text('indikator_kinerja');
			$table->integer('target');
			$table->enum('waktu', [1,2,3,4]);  // triwulan
			$table->text('kegiatan');
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
		Schema::drop('indikator');
	}

}
