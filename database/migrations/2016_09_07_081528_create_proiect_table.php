<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProiectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gl_project', function (Blueprint $table) {
            $table->increments('id',8);
            $table->char('title',255);
            $table->text('content',20);
            $table->char('img', 255);
            $table->char('url',255)->nullable();
            $table->datetime('create_time');
            $table->tinyInteger('is_show')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gl_project');
    }
}
