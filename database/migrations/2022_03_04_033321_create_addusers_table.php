<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addusers', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('name');
            $table->string('nic');
            $table->string('adress');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('uname');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('addusers');
    }
}
