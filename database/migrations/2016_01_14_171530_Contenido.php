<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contenido extends Migration
{
    public function up()
    {
        Schema::create('contenidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('contenido');
            $table->string('tipo_contenido');
            $table->string('thumbnail');
            $table->string('target_usuario');
            $table->string('target_grado');
            $table->string('target_seccion');
            $table->string('target_ficha');
            $table->string('PDFthumbnail');
            $table->string('PDFTipo');
            
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('contenidos');
    }
}