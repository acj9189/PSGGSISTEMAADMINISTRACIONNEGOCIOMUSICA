<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionRepuestos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tRepuestos', function (Blueprint $table) {

           //$table->integer('id')->length(100)->unsigned();
            $table->increments('idRe');
            $table->string('nombre', 100);
            $table->integer('costo_unidad');
            $table->string('descripcion', 400);
           // $table->primary('id');
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
        Schema::dropIfExists('migraciontRepuestos');
    }
}
