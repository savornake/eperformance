<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiroSasaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('biro_sasaran', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('biro_id')->unsigned()->index();
			$table->foreign('biro_id')->references('id')->on('biros')->onDelete('cascade');
			$table->integer('sasaran_id')->unsigned()->index();
			$table->foreign('sasaran_id')->references('id')->on('sasarans')->onDelete('cascade');
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
		Schema::drop('biro_sasaran');
	}

}
