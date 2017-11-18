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
            $table->increments('id', 100);
            $table->string('nombre', 100);
            $table->string('costo_Unidad', 100);
            $table->string('descripcion', 400);
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
        Schema::dropIfExists('migraciontRepuestos');
    }
}
