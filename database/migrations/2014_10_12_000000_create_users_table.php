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
            $table->string('email', 150)->unique()->nullable();
            $table->string('password');
            $table->string('gender');
            $table->string('nationality');
            $table->string('address');
            $table->string('mobile');
            $table->integer('party_id')->unsigned()->nullable();
            $table->dateTime('leads_start_date');
            $table->dateTime('leads_end_date');
            $table->string('position');
            $table->foreign('party_id')->references('id')->on('client_base_companies');
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
