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
            $table->increments('tid', 100)->primary();
            $table->string('tcode');
            $table->string('tname');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('zone');
            $table->unsignedBigInteger('rid');
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
