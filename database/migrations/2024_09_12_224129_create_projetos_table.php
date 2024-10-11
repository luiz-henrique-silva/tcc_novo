<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->text('descricao')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_final')->nullable();
            $table->text('integrantes')->nullable();
            $table->foreignId('curso_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('professor_orientador_id')->nullable()->constrained('orientadores')->onDelete('set null');
            $table->string('link_github', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->char('documento', 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
