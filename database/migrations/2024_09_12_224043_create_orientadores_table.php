<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrientadoresTable extends Migration
{
    public function up()
    {
        Schema::create('orientadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('registro_matricula')->nullable();
            $table->string('instituicao')->nullable();
            $table->string('telefone')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orientadores');
    }
}
