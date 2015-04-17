<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRasgosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rasgos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->longText('desc');
			$table->integer('max')->default(6);
			$table->integer('avg')->default(5);
			$table->integer('min')->default(4);
			$table->longText('max_desc');
			$table->longText('avg_desc');
			$table->longText('min_desc');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rasgos');
	}

}
