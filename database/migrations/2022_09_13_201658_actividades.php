<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Actividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('detalle');
            $table->bigInteger('responsables_id')->unsigned();
            $table->bigInteger('estados_actividades_id')->unsigned();
            $table->bigInteger('categorias_id')->unsigned();
            $table->timestamps();
            $table->foreign('responsables_id')->references('id')->on('responsables')->onDelete("cascade");
            $table->foreign('estados_actividades_id')->references('id')->on('estados_actividades')->onDelete("cascade");
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete("cascade");
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
