<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('user_name');
            $table->string('password');
            $table->string('email');
            $table->integer('phone');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('passport');
            $table->datetime('birth_day');
            $table->integer('gender');
            $table->integer('marriage');
            $table->string('job');
            $table->string('country');
            $table->string('city');
            $table->string('district');
            $table->string('address');
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
        Schema::dropIfExists('users');
    }
}
