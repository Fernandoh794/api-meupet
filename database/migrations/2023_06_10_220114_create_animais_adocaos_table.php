<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimaisAdocaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais_adocaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
            	->on('users')
            	->onDelete('cascade');
            $table->string('nome');
            $table->string('raca');
            $table->string('idade');
            $table->string('sexo');
            $table->string('estado_cod');
            $table->string('cidade_cod');
            $table->longText("imagem")->nullable();
            $table->string("descricao");
            $table->tinyInteger("status")->default(1);
            $table->unsignedBigInteger('user_id_interessado')->nullable(true)->default(null);
            $table->foreign('user_id_interessado')
            	->references('id')
            	->on('users')
            	->onDelete('cascade');
            $table->timestamps();
            $table->longText("observacao_interessado")->nullable(true)->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animais_adocaos');
    }
}
