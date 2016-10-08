<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('city', function(Blueprint $table)
		{
			$table->bigInteger('CityID')->primary();
			$table->string('CityName', 50)->nullable();
			$table->string('ZipCode', 50)->nullable();
			$table->bigInteger('ProvinceID')->nullable();
			$table->dateTime('DateCreated')->nullable();
			$table->dateTime('DateUpdated')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gl_city');
	}

}
