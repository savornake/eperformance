<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRinciansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rincian', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('anggaran_id');
			$table->enum('bulan', [1,2,3,4,5,6,7,8,9,10,11,12]);
			$table->integer('rencana');  // duit
			$table->integer('sasaran'); // duit
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
		Schema::drop('rincian');
	}

}
