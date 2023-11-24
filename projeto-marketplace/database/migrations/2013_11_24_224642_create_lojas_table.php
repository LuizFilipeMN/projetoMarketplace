<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLojasTable extends Migration
{
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('telefone');
            $table->string('email');
            $table->string('cnpj');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lojas');
    }
}
