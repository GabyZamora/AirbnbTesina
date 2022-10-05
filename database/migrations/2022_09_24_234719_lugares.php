<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lugares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreLugar');
            $table->bigInteger('idCategoria')->unsigned();
            $table->bigInteger('idMunicipio')->unsigned();
            $table->bigInteger('idDepartamento')->unsigned();
            $table->point('latitud');
            $table->point('longitud');
            $table->string('Descripcion');
            $table->boolean('mascotas');
            $table->string('Imagen');
            $table->decimal('precio');
            $table->string('numHuesped');
            $table->timestamps();
            $table->foreign('idCategoria')->references('id')->on('categorias')->onDelete("cascade");
            $table->foreign('idMunicipio')->references('id')->on('municipios')->onDelete("cascade");
            $table->foreign('idDepartamento')->references('id')->on('departamentos')->onDelete("cascade");
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
    }
}
