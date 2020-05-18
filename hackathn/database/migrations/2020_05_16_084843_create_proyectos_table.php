<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('proyectoName');
            $table->integer('equipoNumber');
            $table->string('modifico')->nullable();
            //categorias->
            $table->string('categoria');
            $table->string('problematica');
            $table->string('innovacion');
            //canvas->
            $table->string('propuestaValor');
            $table->string('canalesDistribucion');
            $table->string('segmentoMercado');
            $table->string('recusosClave');
            $table->string('sociosClave');
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
        Schema::dropIfExists('proyectos');
    }
}
