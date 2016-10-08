<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGlProvinceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gl_province', function(Blueprint $table)
		{
			$table->bigInteger('ProvinceID')->primary();
			$table->string('ProvinceName', 50)->nullable();
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
		Schema::drop('gl_province');
	}

}
