<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->string('nome')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('rua')->nullable();
            $table->string('numero')->nullable();
            $table->string('compl')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('regiao')->nullable();
            $table->string('link')->nullable();
            $table->string('usuario')->nullable();
            $table->string('instituicao')->nullable();
            $table->string('cargo')->nullable();
            $table->string('papel')->nullable();
            $table->string('disponibilidade')->nullable();
            $table->string('escolaridade')->nullable();
            $table->string('curso')->nullable();
            $table->string('escola_recente')->nullable();
            $table->string('ano_conclusao')->nullable();
            $table->text('bio')->nullable();
            $table->text('retrosp')->nullable();
            $table->text('fellow')->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
