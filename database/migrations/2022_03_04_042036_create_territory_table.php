<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerritoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('territory', function (Blueprint $table) {
            $table->increments('tid');
            $table->string('tcode');
            $table->string('tname');
            $table->bigInteger('zid')->unsigned();
            $table->integer('rid')->unsigned();
            $table->foreign('zid')->references('id')->on('zone');
            $table->foreign('rid')->references('rid')->on('region');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('territory');
    }
}
