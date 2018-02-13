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

            $table->increments('numero_orden');
            $table->integer('idCliente')->unsigned();
            $table->foreign('idCliente')->references('idC')->on('tCliente');

            $table->integer('idArticulo')->unsigned();
            $table->foreign('idArticulo')->references('idA')->on('tArticulo');

            $table->integer('idListaRepuesto')->unsigned();
            $table->foreign('idListaRepuesto')->references('idLR')->on('tListaRepuestos');

            $table->date('fecha_Fin_Diagnostico');
            $table->date('fecha_Inicio_Reparacion');
            $table->date('fecha_Fin_Reparacion');
            $table->string('descripcion_Diagnostico', 500);
            $table->string('notas', 500);
            $table->integer('costo_Reparacion',500);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tOrden');
    }
}
