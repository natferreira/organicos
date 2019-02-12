<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoTable extends Migration
{
    public function up()
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->increments('Id');
            //-----------------------------------------------------------------
            $table->integer('CodigoUf')->nullable();
            $table->string('Nome', 50)->nullable();
            $table->char('Uf', '2')->nullable();
            $table->integer('Regiao')->nullable();
            //-----------------------------------------------------------------
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('estado');
    }
}
