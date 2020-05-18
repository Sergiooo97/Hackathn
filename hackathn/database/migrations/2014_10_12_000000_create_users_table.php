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
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('rol');
            $table->string('carrera');
            $table->string('semestre');
            $table->integer('matricula');
            //$table->foreign('matricula')->references('avatar')->on('avatar_models');
            $table->string('equipoName');
            $table->integer('equipoNumber');
            $table->string('email')->unique();
            $table->string('avatar');
            $table->string('proyectoName')->null();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
