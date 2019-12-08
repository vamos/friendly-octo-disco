<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('quiz_tnum')->unsigned()->default(0);
            $table->integer('quiz_success')->unsigned()->default(0);
            $table->integer('dd_tnum')->unsigned()->default(0);
            $table->integer('dd_success')->unsigned()->default(0);
            $table->integer('time_tnum')->unsigned()->default(0);
            $table->integer('time_success')->unsigned()->default(0);
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
        Schema::dropIfExists('users');
    }
}
