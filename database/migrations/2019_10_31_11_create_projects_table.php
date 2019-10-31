<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pcomision_id');
            $table->foreign('pcomision_id')->references('id')->on('pais_comision');
            $table->unsignedInteger('metodologia_id');
            $table->foreign('metodologia_id')->references('id')->on('metodologia');
            $table->unsignedInteger('solucion_id');
            $table->foreign('solucion_id')->references('id')->on('solucion');
            $table->unsignedInteger('plataforma_id');
            $table->foreign('plataforma_id')->references('id')->on('plataforma');
            $table->unsignedInteger('estatus_id');
            $table->foreign('estatus_id')->references('id')->on('estatus');
            $table->unsignedInteger('tipore_id');
            $table->foreign('tipore_id')->references('id')->on('tipo_recoleccion');
            $table->unsignedInteger('fentrega_id');
            $table->foreign('fentrega_id')->references('id')->on('frecuencia_entrega');
            $tabla->string('Jobnumber', 20);
            $tabla->integer('Jobnumber_LDCG');
            $tabla->string('Pname', 30);
            $tabla->string('Cliente', 25);
            $tabla->boolean('KantarProject');
            $tabla->text('Link_KP');
            $tabla->string('Qlib_uso', 25);
            $tabla->text('Qlib_Link');
            $tabla->string('Qlib_NA', 25);
            $tabla->boolean('Qlib_Metadata');
            $tabla->string('Qlib_porqueM', 30);
            $tabla->boolean('Qlib_Web');
            $tabla->string('Qlib_porqueW', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
