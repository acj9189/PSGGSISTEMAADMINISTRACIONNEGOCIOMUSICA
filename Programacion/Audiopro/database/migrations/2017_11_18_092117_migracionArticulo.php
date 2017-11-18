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
            //$table->increments('id');
            $table->integer('numero_Serie', 100);
            $table->string('marca', 100);
            $table->string('modelo', 10);
            $table->string('estado', 10);
           // $table->primary(['marca','modelo']);
            //$table->primary('marca');
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
