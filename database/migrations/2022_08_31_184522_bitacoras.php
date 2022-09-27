<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bitacoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('folio');
            $table->string('nombre');
            $table->string('dependecia');
            $table->string('nombre_sistema');
            $table->string('descripcion');
            $table->string('cobertura');
            $table->string('ambiente_servidor');
            $table->string('ambiente_web');
            $table->string('compatibilidad_servidor');
            $table->string('compatibilidad_web');
            $table->string('desarrollado');
            $table->string('id_responsable');
            $table->string('nombre_em_responsable');
            $table->string('categoria');
            $table->string('perfil');
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
        //
    }
}
