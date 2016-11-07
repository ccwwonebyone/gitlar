<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlDreamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dream', function(Blueprint $table)
		{
			$table->integer('ID')->primary();
			$table->string('Group')->nullable();
			$table->string('Title')->nullable();
			$table->text('Detail')->nullable();
			$table->string('Url')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dream');
	}

}
