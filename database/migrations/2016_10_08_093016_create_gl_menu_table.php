<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gl_menu', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 10);
			$table->string('url')->nullable();
			$table->string('icon')->nullable();
			$table->integer('order')->nullable();
			$table->integer('belong')->default(1);
			$table->string('table')->nullable();
			$table->integer('pid')->default(0);
			$table->integer('is_show')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gl_menu');
	}

}
