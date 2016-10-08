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
		Schema::create('gl_company', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('name')->nullable();
			$table->char('tel', 20)->nullable();
			$table->char('address')->nullable();
			$table->char('qq')->nullable();
			$table->char('weixin')->nullable();
			$table->char('sina')->nullable();
			$table->char('belong')->nullable();
			$table->date('create_time')->nullable();
			$table->text('recommend', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gl_company');
	}

}
