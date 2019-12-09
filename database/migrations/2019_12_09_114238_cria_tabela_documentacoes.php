<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaDocumentacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('perfilUsuario');
            $table->string('aplicacao');
            $table->string('plataforma');
            $table->string('ritmo');
            $table->string('modoJogo');
            $table->string('genero');
            $table->string('niveis');
            $table->string('jogabilidade');
            $table->string('musiSono');
            $table->string('narrativa');
            $table->string('personagens');
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
        Schema::dropIfExists('documentacoes');
    }
}
