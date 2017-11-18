<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionOrden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tOrden', function (Blueprint $table) {
            $table->increments('id', 100);
            $table->date('fecha_Inicio_Diagnostico');
            $table->date('fecha_Fin_Diagnostico');
            $table->date('fecha_Inicio_Reparacion');
            $table->date('fecha_Fin_Reparacion');
            $table->string('novedades', 500);
            $table->string('cedula_Cliente', 100);
            $table->foreign('cedula_Cliente')->references('cedula')->on('tCliente');
           // $table->string('marca_Articulo', 100);
           // $table->string('modelo_Articulo', 10);
           // $table->foreign('marca_Articulo')->references('marca')->on('tArticulo');
            //$table->foreign('modelo_Articulo')->references('modelo')->on('tArticulo');
            //$table->integer('id_Lista_Repuestos', 100)->unsigned();;
            //$table->foreign('id_Lista_Repuestos')->references('id')->on('tListaRespuestos');
            $table->timestamps();
           // $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('migraciontOrden');
    }
}
