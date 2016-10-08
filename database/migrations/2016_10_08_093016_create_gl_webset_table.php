<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlWebsetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webset', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('menu-belong')->nullable();
			$table->string('menu-header')->nullable();
			$table->string('menu-middle')->nullable();
			$table->string('menu-footer')->nullable();
			$table->string('background')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gl_webset');
	}

}
