<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRenstrasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('renstras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->text('rencana_strategis');
			$table->text('rencana_kegiatan');
			$table->integer('indikator');
			$table->integer('realisasi');
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
		Schema::drop('renstras');
	}

}
