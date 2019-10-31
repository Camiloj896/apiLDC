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
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('rol');
            $table->unsignedInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('manager');
            $table->string('Fname',25);
            $table->string('Lname',25);
            $table->string('Email',100)->unique();
            $table->string('Area',25);
            $table->string('Pass',25);
            $table->string('ForgotPass',25);
            $table->string('Cargo',25);
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
