<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('name')->nullable();
			$table->char('address')->nullable();
			$table->char('belong')->nullable();
			$table->date('create_time')->nullable();
			$table->text('recommend', 65535)->nullable();
			$table->char('background')->nullable();
			$table->char('web')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company');
	}

}
