<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('projetos');
            // chave estrangeira clientes
            $table->integer('id_clientes')->unsigned();
            $table->foreign('id_clientes')->references('id')->on('clientes');
            // chave estrangeira funcionario
            $table->integer('id_funcionario')->unsigned();
            $table->foreign('id_funcionario')->references('id')->on('funcionarios');
            
            $table->decimal('vl_acordado', 18,2);
            $table->decimal('vl_recebido', 18,2);
            $table->date('dt_pagamento');
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
        Schema::dropIfExists('projetos');
    }
}
