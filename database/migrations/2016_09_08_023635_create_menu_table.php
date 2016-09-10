<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id',8);
            $table->string('name', 10);
            $table->string('url',255)->nullable();
            $table->string('icon',255)->nullable();
            $table->integer('order')->nullable();
            $table->integer('belong')->default(1);
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
        Schema::dropIfExists('menu');
    }
}
