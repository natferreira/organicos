<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('rua');
            $table->unsignedInteger('bairro_id');
            $table->unsignedInteger('cidade_id');
            $table->integer('numero');
            $table->string('complemento');
            $table->unsignedInteger('estado_id');
            //----------------------------------------------------
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            //----------------------------------------------------
            $table->foreign('bairro_id')
                ->references('id')
                ->on('bairros')
                ->onDelete('cascade');
            //----------------------------------------------------
            $table->foreign('cidade_id')
                ->references('id')
                ->on('cidades')
                ->onDelete('cascade');
            //----------------------------------------------------
            $table->foreign('estado_id')
                ->references('id')
                ->on('estados')
                ->onDelete('cascade');
            //----------------------------------------------------
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
        Schema::dropIfExists('enderecos');
    }
}
