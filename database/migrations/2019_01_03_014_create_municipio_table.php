<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipioTable extends Migration
{
    public function up()
    {
        Schema::create('municipio', function (Blueprint $table) {
            $table->increments('Id');
            //-----------------------------------------------------------------
            $table->integer('Codigo')->nullable();
            $table->string('Nome')->nullable();
            $table->char('Uf', '2')->nullable();
            //-----------------------------------------------------------------
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('municipio');
    }
}
