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
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id',8);
            $table->char('name',255)->nullable();
            $table->char('tel',20)->nullable();
            $table->char('address', 255)->nullable();
            $table->char('qq',255)->nullable();
            $table->char('weixin',255)->nullable();
            $table->char('sina',255)->nullable();
            $table->char('belong',255)->nullable();
            $table->date('create_time')->nullable();
            $table->text('recommend')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
