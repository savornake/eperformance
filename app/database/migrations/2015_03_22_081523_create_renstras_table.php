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
			$table->text('tujuan');
			$table->text('sasaran_strategis');
			$table->text('indikator');
			$table->text('program_kegiatan');
			$table->text('sub_kegiatan');
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
