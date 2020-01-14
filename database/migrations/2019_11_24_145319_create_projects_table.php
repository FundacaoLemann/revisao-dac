<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email_principal')->nullable();
            $table->string('projeto_nome')->nullable();
            $table->string('projeto_rede')->nullable();
            $table->text('projeto_descricao')->nullable();
            $table->string('projeto_publico')->nullable();
            $table->string('projeto_publico_outro')->nullable();
            $table->string('departamento_nome')->nullable();
            $table->string('departamento_rua')->nullable();
            $table->string('departamento_numero')->nullable();
            $table->string('departamento_compl')->nullable();
            $table->string('departamento_bairro')->nullable();
            $table->string('departamento_cidade')->nullable();
            $table->string('departamento_estado')->nullable();
            $table->string('departamento_cep')->nullable();
            $table->string('departamento_regiao')->nullable();
            $table->text('departamento_sobre')->nullable();
            $table->text('departamento_apoio')->nullable();
            $table->text('departamento_links')->nullable();
            $table->string('departamento_inicio_mes')->nullable();
            $table->string('departamento_inicio_ano')->nullable();
            $table->string('escola_nome')->nullable();
            $table->string('escola_rua')->nullable();
            $table->string('escola_numero')->nullable();
            $table->string('escola_compl')->nullable();
            $table->string('escola_bairro')->nullable();
            $table->string('escola_cidade')->nullable();
            $table->string('escola_estado')->nullable();
            $table->string('escola_cep')->nullable();
            $table->string('escola_regiao')->nullable();
            $table->string('escola_equipe')->nullable();
            $table->string('escola_modalidade')->nullable();
            $table->text('escola_sobre')->nullable();
            $table->text('escola_links')->nullable();
            $table->string('escola_inicio_mes')->nullable();
            $table->string('escola_inicio_ano')->nullable();
            $table->string('parceiros')->nullable();
            $table->string('projeto_espacos')->nullable();
            $table->string('projeto_espacos_outro')->nullable();
            $table->string('projeto_comunidade')->nullable();
            $table->text('projeto_comunidade_descricao_publico')->nullable();
            $table->text('projeto_quantidade_pessoas')->nullable();
            $table->text('projeto_atividades')->nullable();
            $table->text('projeto_atividades_outro')->nullable();
            $table->text('projeto_funcionamento')->nullable();
            $table->text('projeto_habilidades')->nullable();
            $table->text('projeto_avaliacao')->nullable();
            $table->string('projeto_testado')->nullable();
            $table->text('projeto_avaliacao_resultado')->nullable();
            $table->text('projeto_link')->nullable();
            $table->text('projeto_video')->nullable();
            $table->text('projeto_justificativa')->nullable();
            $table->text('projeto_ajuda')->nullable();
            $table->string('projeto_mais_candidatos')->nullable();
            $table->string('projeto_indicacao')->nullable();
            $table->string('projeto_indicacao_outro')->nullable();
            $table->text('projeto_info_extra')->nullable();
            $table->string('projeto_doc')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
