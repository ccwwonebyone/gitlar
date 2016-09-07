<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCompanyInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gl_company', function (Blueprint $table) {
            $table->increments('id',8);
            $table->char('name',255);
            $table->char('tel',20);
            $table->char('address', 255);
            $table->char('qq',255)->nullable();
            $table->char('weixin',255)->nullable('');
            $table->char('sina',255)->nullable();
            $table->char('belong',255)->nullable();
            $table->date('create_time')->nullable();
            $table->text('recommend')->nullable();
            $table->softDeletes();
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
