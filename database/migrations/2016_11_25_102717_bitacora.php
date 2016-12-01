<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bitacora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //esquema de la tabla bitacora
          Schema::create('bitacora', function (Blueprint $table) {
            $table->increments('id_bitacora');
            $table->string('usuario');
            $table->string('transaccion_realizada');
            $table->datetime('fecha_hora_transaccion');
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
         Schema::drop('bitacora');
    }
}
