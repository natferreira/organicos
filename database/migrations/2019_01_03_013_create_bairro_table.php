<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBairroTable extends Migration
{
    public function up()
    {
        Schema::create('bairro', function (Blueprint $table) {
            $table->increments('Id');
            //-----------------------------------------------------------------
            $table->char('Codigo', '10')->nullable();
            $table->string('Nome')->nullable();
            $table->char('Uf', '2')->nullable();
            //-----------------------------------------------------------------
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('bairro');
    }
}
