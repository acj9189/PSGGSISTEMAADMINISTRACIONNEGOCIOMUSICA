<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tCliente', function (Blueprint $table) {

            $table->increments('idC');
            $table->string('cedula', 100);

            $table->string('nombre_Completo',100);
            $table->string('telefono_Contacto',100);
            $table->string('email',100)->unique();
            $table->timestamps();

          //  $table->primary('cedula');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('migraciontCliente');
    }
}
