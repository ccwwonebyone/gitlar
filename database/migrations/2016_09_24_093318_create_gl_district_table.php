<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlDistrictTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gl_district', function(Blueprint $table)
		{
			$table->bigInteger('DistrictID')->primary();
			$table->string('DistrictName', 50)->nullable();
			$table->bigInteger('CityID')->nullable();
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
		Schema::drop('gl_district');
	}

}
