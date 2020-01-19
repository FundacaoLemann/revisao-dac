<div class="row">

    <!-- SECTION -->
    <div class="col-6">
        <h4 class="text-primary">Sobre o projeto</h4>
    </div>
    <div class="col-6 text-right">
        <a href="/revisor/projeto/export/{{ $project->id }}" target="_blank" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Versão para impressão</a>
    </div>


    <div class="col-12">
        <hr class="bg-primary">
    </div>
    <div class="col-12">
        <label class="font-weight-bold bg-light p-1 rounded">Nome do projeto:</label>
        <h4 class="p-1">{{ $project->projeto_nome }}</h4>
        <label class="font-weight-bold bg-light p-1 rounded">Descrição geral do projeto:</label>
        <p class="text-justify p-1 lead">{{ $project->projeto_descricao }}</p>
    </div>

    <div class="col-md-6">
        <label class="font-weight-bold bg-light p-1 rounded">E-mail principal para contato:</label>
        <p class="p-1">{{ $project->email_principal }}</p>
    </div>

    <div class="col-md-6">
        <label class="font-weight-bold bg-light p-1 rounded">O projeto será implementado em qual rede de ensino?</label>
        <p class="p-1">{{ $project->projeto_rede }}</p>
    </div>

    <div class="col-md-6">
        <label class="font-weight-bold bg-light p-1 rounded">Qual é o público alvo?</label>
        @component('components.publico', ['publico' => $project->projeto_publico, 'publico_outro' => $project->projeto_publico_outro])@endcomponent
    </div>

    <!-- SECTION -->
    <div class="col-12 mt-3">
        <h4 class="text-primary">Qual é o departamento da secretaria de ensino ou mantenedor de escola envolvido no projeto?</h4>
        <hr class="bg-primary">
    </div>

    <div class="col-12">
        <label class="font-weight-bold bg-light p-1 rounded">Nome do departamento:</label>
        <h4 class="p-1">{{ $project->departamento_nome }}</h4>
    </div>

    <div class="col-md-6">
        <label class="font-weight-bold bg-light p-1 rounded">Rua:</label>
        <p class="p-1">{{ $project->departamento_rua }}</p>
    </div>

    <div class="col-md-2">
        <label class="font-weight-bold bg-light p-1 rounded">Número:</label>
        <p class="p-1">{{ $project->departamento_numero }}</p>
    </div>

    <div class="col-md-2">
        <label class="font-weight-bold bg-light p-1 rounded">Complemento:</label>
        <p class="p-1">{{ $project->departamento_compl }}</p>
    </div>

    <div class="col-md-2">
        <label class="font-weight-bold bg-light p-1 rounded">Bairro:</label>
        <p class="p-1">{{ $project->departamento_bairro }}</p>
    </div>

    <div class="col-md-3">
        <label class="font-weight-bold bg-light p-1 rounded">Cidade:</label>
        <p class="p-1">{{ $project->departamento_cidade }}</p>
    </div>

    <div class="col-md-3">
        <label class="font-weight-bold bg-light p-1 rounded">Estado:</label>
        <p class="p-1">{{ $project->departamento_estado }}</p>
    </div>

    <div class="col-md-3">
        <label class="font-weight-bold bg-light p-1 rounded">CEP:</label>
        <p class="p-1">{{ $project->departamento_cep }}</p>
    </div>

    <div class="col-md-3">
        <label class="font-weight-bold bg-light p-1 rounded">Região do Brasil:</label>
        <p class="p-1">{{ $project->departamento_regiao }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Conte um pouco sobre o departamento na secretaria ou do mantenedor e sobre sua relação com o projeto:</label>
        <p class="p-1 text-justify">{{ $project->departamento_sobre }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">De que forma o departamento da secretaria ou mantenedor apoia o projeto?</label>
        <p class="p-1 text-justify">{{ $project->departamento_apoio }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Link(s) para página na Internet, facebook e/ou outros canais de comunicação:</label>
        <p class="p-1">{{ $project->departamento_links }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Desde quando este departamento da secretaria ou mantenedor está envolvido neste trabalho:</label>
        <p class="p-1">{{ $project->departamento_inicio_mes }}/{{ $project->departamento_inicio_ano }}</p>
    </div>

    <!-- SECTION -->
    <div class="col-12 mt-3">
        <h4 class="text-primary">Em qual escola será desenvolvido e aprofundado o projeto em aprendizagem criativa?</h4>
        <hr class="bg-primary">
    </div>

    <div class="col-12">
        <label class="font-weight-bold bg-light p-1 rounded">Nome da escola:</label>
        <h4 class="p-1">{{ $project->escola_nome }}</h4>
    </div>

    <div class="col-md-6">
        <label class="font-weight-bold bg-light p-1 rounded">Rua:</label>
        <p class="p-1">{{ $project->escola_rua }}</p>
    </div>

    <div class="col-md-2">
        <label class="font-weight-bold bg-light p-1 rounded">Número:</label>
        <p class="p-1">{{ $project->escola_numero }}</p>
    </div>

    <div class="col-md-2">
        <label class="font-weight-bold bg-light p-1 rounded">Complemento:</label>
        <p class="p-1">{{ $project->escola_compl }}</p>
    </div>

    <div class="col-md-2">
        <label class="font-weight-bold bg-light p-1 rounded">Bairro:</label>
        <p class="p-1">{{ $project->escola_bairro }}</p>
    </div>

    <div class="col-md-3">
        <label class="font-weight-bold bg-light p-1 rounded">Cidade:</label>
        <p class="p-1">{{ $project->escola_cidade }}</p>
    </div>

    <div class="col-md-3">
        <label class="font-weight-bold bg-light p-1 rounded">Estado:</label>
        <p class="p-1">{{ $project->escola_estado }}</p>
    </div>

    <div class="col-md-3">
        <label class="font-weight-bold bg-light p-1 rounded">CEP:</label>
        <p class="p-1">{{ $project->escola_cep }}</p>
    </div>

    <div class="col-md-3">
        <label class="font-weight-bold bg-light p-1 rounded">Região do Brasil:</label>
        <p class="p-1">{{ $project->escola_regiao }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Qual é o integrante da equipe gestora da escola envolvido no projeto:</label>
        <p class="p-1 text-justify">{{ $project->escola_equipe }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Qual(is) a(s) modalidade(s) do(s) professor(es) envolvido(s) no projeto?</label>
        <p class="p-1 text-justify">{{ $project->escola_modalidade }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Conte um pouco sobre sua escola:</label>
        <p class="p-1 text-justify">{{ $project->escola_sobre }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Link(s) para página na Internet, facebook e/ou outros canais de comunicação da sua escola:</label>
        <p class="p-1">{{ $project->escola_links }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Desde quando esta escola desenvolve o trabalho relacionado a este projeto:</label>
        <p class="p-1">{{ $project->escola_inicio_mes }}/{{ $project->escola_inicio_ano }}</p>
    </div>

    <!-- SECTION -->
    <div class="col-12 mt-3">
        <h4 class="text-primary">Parceiro(s)</h4>
        <hr class="bg-primary">
    </div>

    @if($project->parceiros == 'sim')

        @forelse($project->partners as $partner)

            <div class="col-md-6">
                <label class="font-weight-bold bg-info p-1 rounded">Nome da organização parceira:</label>
                <p class="p-1">{{ $partner->nome }}</p>
            </div>

            <div class="col-md-6">
                <label class="font-weight-bold bg-light p-1 rounded">Página na Internet da organização parceira:</label>
                <p class="p-1">{{ $partner->link }}</p>
            </div>

            <div class="col-md-12">
                <label class="font-weight-bold bg-light p-1 rounded">Descreva o tipo da entidade e o papel que terá essa organização no projeto:</label>
                <p class="p-1 text-justify">{{ $partner->tipo }}</p>
            </div>

            <div class="col-md-12">
                <label class="font-weight-bold bg-light p-1 rounded">Desde quando este espaço ou instituição participa do seu trabalho:</label>
                <p class="p-1">{{ $partner->inicio_mes }}/{{ $partner->inicio_ano }}</p>
            </div>

            @if(!$loop->last)
                <div class="col-md-12 mb-3">
                    <hr class="bg-info col-8">
                </div>
            @endif

        @empty

            <div class="col-md-6">
                <label class="font-weight-bold bg-warning p-1 rounded">Não possue.</label>
            </div>

        @endforelse

    @else

        <div class="col-md-6">
            <label class="font-weight-bold bg-warning p-1 rounded">Não possue.</label>
        </div>

    @endif

<!-- SECTION -->
    <div class="col-12 mt-3">
        <h4 class="text-primary">Mais informações sobre o projeto</h4>
        <hr class="bg-primary">
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Além das escolas citadas acima, o projeto envolverá outro espaço?</label>
        <p class="p-1 text-justify">{{ $project->projeto_espacos }} {{ $project->projeto_espacos_outro }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">A chamada de projetos do DAC 2020 prioriza o trabalho com crianças, jovens e professores de escolas públicas. O projeto proposto atende a esta comunidade?</label>
        <p class="p-1 text-justify">{{ $project->projeto_comunidade }}</p>
    </div>

    @if($project->projeto_comunidade == 'nao')

        <div class="col-md-12">
            <label class="font-weight-bold bg-light p-1 rounded">Descreva o perfil do público-alvo de crianças, jovens e/ou professores:</label>
            <p class="p-1 text-justify">{{ $project->projeto_comunidade_descricao_publico }}</p>
        </div>

    @endif

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Quantas pessoas participarão diretamente dos cursos, oficinas, apresentações e outras atividades do seu projeto?</label>
        <p class="p-1 text-justify">{{ $project->projeto_quantidade_pessoas }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Que tipo de atividades você pretende desenvolver no seu projeto:</label>
        <p class="p-1 text-justify">{{ $project->projeto_atividades }} {{ $project->projeto_atividades_outro }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Como seu projeto funcionará na prática?</label>
        <p class="p-1 text-justify">{{ $project->projeto_funcionamento }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Que atitudes, habilidades e conteúdos os participantes do seu projeto irão desenvolver?</label>
        <p class="p-1 text-justify">{{ $project->projeto_habilidades }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Como você pretende avaliar o seu projeto, após e/ou durante sua implementação?</label>
        <p class="p-1 text-justify">{{ $project->projeto_avaliacao }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Este projeto já foi testado de alguma forma?</label>
        <p class="p-1 text-justify">{{ $project->projeto_testado }}</p>
    </div>

    @if($project->projeto_testado == 'sim')

        <div class="col-md-12">
            <label class="font-weight-bold bg-light p-1 rounded">Quando e como? Descreva como foi realizado e conte seus resultados.</label>
            <p class="p-1 text-justify">{{ $project->projeto_avaliacao_resultado }}</p>
        </div>

    @endif

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Caso haja uma página da Internet relacionada a este projeto, insira o link abaixo:</label>
        <p class="p-1 text-justify">{{ $project->projeto_link }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Caso haja um vídeo descritivo do projeto, insira o link abaixo:</label>
        <p class="p-1 text-justify">{{ $project->projeto_video }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Por que a sua proposta deveria ser selecionada pelo Desafio Aprendizagem Criativa? O que a torna especial?</label>
        <p class="p-1 text-justify">{{ $project->projeto_justificativa }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Qual o tipo de ajuda você precisaria para desenvolver o seu projeto?</label>
        <p class="p-1 text-justify">{{ $project->projeto_ajuda }}</p>
    </div>

    <!-- SECTION -->
    <div class="col-12 mt-3">
        <h4 class="text-primary">Sobre os candidatos à Fellowship</h4>
        <hr class="bg-primary">
    </div>

    @forelse($project->candidates as $candidate)

        <div class="col-md-4">
            <label class="font-weight-bold bg-info p-1 rounded">Nome:</label>
            <p class="p-1">{{ $candidate->nome }}</p>
        </div>

        <div class="col-md-4">
            <label class="font-weight-bold bg-light p-1 rounded">Telefone:</label>
            <p class="p-1">{{ $candidate->telefone }}</p>
        </div>

        <div class="col-md-4">
            <label class="font-weight-bold bg-light p-1 rounded">Email:</label>
            <p class="p-1">{{ $candidate->email }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Rua:</label>
            <p class="p-1">{{ $candidate->rua }}</p>
        </div>

        <div class="col-md-2">
            <label class="font-weight-bold bg-light p-1 rounded">Número:</label>
            <p class="p-1">{{ $candidate->numero }}</p>
        </div>

        <div class="col-md-2">
            <label class="font-weight-bold bg-light p-1 rounded">Complemento:</label>
            <p class="p-1">{{ $candidate->compl }}</p>
        </div>

        <div class="col-md-2">
            <label class="font-weight-bold bg-light p-1 rounded">Bairro:</label>
            <p class="p-1">{{ $candidate->bairro }}</p>
        </div>

        <div class="col-md-3">
            <label class="font-weight-bold bg-light p-1 rounded">Cidade:</label>
            <p class="p-1">{{ $candidate->cidade }}</p>
        </div>

        <div class="col-md-3">
            <label class="font-weight-bold bg-light p-1 rounded">Estado:</label>
            <p class="p-1">{{ $candidate->estado }}</p>
        </div>

        <div class="col-md-3">
            <label class="font-weight-bold bg-light p-1 rounded">CEP:</label>
            <p class="p-1">{{ $candidate->cep }}</p>
        </div>

        <div class="col-md-3">
            <label class="font-weight-bold bg-light p-1 rounded">Região do Brasil:</label>
            <p class="p-1">{{ $candidate->regiao }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Website pessoal:</label>
            <p class="p-1">{{ $candidate->link }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Usuário Rede Brasileira de Aprendizagem Criativa:</label>
            <p class="p-1">{{ $candidate->usuario }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Em qual das instituições citadas na página anterior você trabalha?</label>
            <p class="p-1">{{ $candidate->instituicao }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Qual é seu cargo e função na instituição?</label>
            <p class="p-1">{{ $candidate->cargo }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Qual será seu papel no projeto?</label>
            <p class="p-1">{{ $candidate->papel }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Explique seu grau de disponibilidade para trabalhar no projeto:</label>
            <p class="p-1">{{ $candidate->disponibilidade }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Grau de escolaridade:</label>
            <p class="p-1">{{ $candidate->escolaridade }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Curso ou programa:</label>
            <p class="p-1">{{ $candidate->curso }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Nome da instituição de ensino mais recente:</label>
            <p class="p-1">{{ $candidate->escola_recente }}</p>
        </div>

        <div class="col-md-6">
            <label class="font-weight-bold bg-light p-1 rounded">Ano de conclusão:</label>
            <p class="p-1">{{ $candidate->ano_conclusao }}</p>
        </div>

        <div class="col-md-12">
            <label class="font-weight-bold bg-light p-1 rounded">Conte um pouco mais sobre você, sua formação acadêmica e experiências profissionais:</label>
            <p class="p-1 text-justify">{{ $candidate->bio }}</p>
        </div>

        <div class="col-md-12">
            <label class="font-weight-bold bg-light p-1 rounded">Conte sobre algo que você tenha aprendido, alcançado ou construído nos últimos dois anos:</label>
            <p class="p-1 text-justify">{{ $candidate->retrosp }}</p>
        </div>

        <div class="col-md-12">
            <label class="font-weight-bold bg-light p-1 rounded">Por que você gostaria de participar do Desafio Aprendizagem Criativa Brasil? Que características e qualidades o tornariam um bom fellow?</label>
            <p class="p-1 text-justify">{{ $candidate->fellow }}</p>
        </div>

        @if(!$loop->last)
            <div class="col-md-12 mb-3">
                <hr class="bg-info col-8">
            </div>
        @endif

    @empty

        <div class="col-md-6">
            <label class="font-weight-bold bg-warning p-1 rounded">Não possue.</label>
        </div>

@endforelse

<!-- SECTION -->
    <div class="col-12 mt-3">
        <h4 class="text-primary">Informações adicionais</h4>
        <hr class="bg-primary">
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Como você ouviu falar sobre o Desafio Aprendizagem Criativa Brasil?</label>
        <p class="p-1">{{ $project->projeto_indicacao }} {{ $project->projeto_indicacao_outro }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Há mais alguma informação que deveríamos saber sobre vocês ou seu projeto?</label>
        <p class="p-1 text-justify">{{ $project->projeto_info_extra }}</p>
    </div>

    <div class="col-md-12">
        <label class="font-weight-bold bg-light p-1 rounded">Carta de compromisso da secretaria de ensino ou mantenedor:</label>
        <p class="p-1 text-justify">@if(!empty($project->projeto_doc)) <a href="{{ asset('storage/'.$project->projeto_doc) }}" target="_blank">Acessar documento</a> @else <label class="font-weight-bold bg-warning p-1 rounded">Não possue.</label> @endif</p>
    </div>

</div>
