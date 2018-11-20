<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Createfinal1sTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Documento')->unique();
            $table->string('Correo');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Solicitud');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('final1s');
    }
}
