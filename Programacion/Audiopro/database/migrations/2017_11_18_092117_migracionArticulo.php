<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionArticulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tArticulo', function (Blueprint $table) {

            $table->increments('idA');
            //$table->integer('id')->length(100)->unsigned();
            $table->string('numero_Serie', 100);
            $table->string('marca', 100);
            $table->string('modelo', 10);
            $table->string('estado', 10);
            $table->string('descripcion', 100);
            $table->string('problema_reportado', 100);
            $table->string('tipo_Servicio',10);
            $table->date('fecha_Ingreso');
            $table->date('fecha_Salida');
            //$table->primary('id');
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
        Schema::dropIfExists('migraciontArticulo');
    }
}
