
<table width="100%" border="0">

    <tr>
        <td align="justify" valign="top" colspan="2"><h2>Sobre o projeto</h2></td>
    </tr>
    <tr>
        <td align="justify" valign="top" colspan="2"><h4>Nome do projeto:</h4><h3>{{ $project->projeto_nome }}</h3></td>
    </tr>
    <tr>
        <td align="justify" valign="top" colspan="2"><h4>Descrição geral do projeto:</h4>{{ $project->projeto_descricao }}</td>
    </tr>
    <tr>
        <td align="justify" valign="top" width="50%"><h4>E-mail principal para contato:</h4>{{ $project->email_principal }}</td>
        <td align="justify" valign="top" width="50%"><h4>O projeto será implementado em qual rede de ensino?</h4>{{ $project->projeto_rede }}</td>
    </tr>
    <tr>
        <td align="justify" valign="top" colspan="2"><h4>Qual é o público alvo?</h4>@component('components.publico', ['publico' => $project->projeto_publico, 'publico_outro' => $project->projeto_publico_outro])@endcomponent</td>
    </tr>
</table>

<!-- Departamento -->

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h2>Qual é o departamento da secretaria de ensino ou mantenedor de escola envolvido no projeto?</h2></td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Nome do departamento:</h4>{{ $project->departamento_nome }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top" width="45%"><h4>Rua:</h4>{{ $project->departamento_rua }}</td>
        <td align="justify" valign="top" width="16%"><h4>Número:</h4>{{ $project->departamento_numero }}</td>
        <td align="justify" valign="top" width="16%"><h4>Compl.:</h4>{{ $project->departamento_compl }}</td>
        <td align="justify" valign="top" width="16%"><h4>Bairro:</h4>{{ $project->departamento_bairro }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top" width="25%"><h4>Cidade:</h4>{{ $project->departamento_cidade }}</td>
        <td align="justify" valign="top" width="25%"><h4>Estado:</h4>{{ $project->departamento_estado }}</td>
        <td align="justify" valign="top" width="25%"><h4>CEP:</h4>{{ $project->departamento_cep }}</td>
        <td align="justify" valign="top" width="25%"><h4>Região do Brasil:</h4>{{ $project->departamento_regiao }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Conte um pouco sobre o departamento na secretaria ou do mantenedor e sobre sua relação com o projeto:</h4>{{ $project->departamento_sobre }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>De que forma o departamento da secretaria ou mantenedor apoia o projeto?</h4>{{ $project->departamento_apoio }}</td>
    </tr>
</table>


<table width="100%" border="0">
    <tr>
        <td valign="top"><h4>Link(s) para página na Internet, facebook e/ou outros canais de comunicação:</h4>{{ $project->departamento_links }}</td>
    </tr>
</table>


<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Desde quando este departamento da secretaria ou mantenedor está envolvido neste trabalho:</h4>{{ $project->departamento_inicio_mes }}/{{ $project->departamento_inicio_ano }}</td>
    </tr>
</table>

<!-- Escola -->

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h2>Em qual escola será desenvolvido e aprofundado o projeto em aprendizagem criativa?</h2></td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Nome da escola:</h4>{{ $project->escola_nome }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top" width="45%"><h4>Rua:</h4>{{ $project->escola_rua }}</td>
        <td align="justify" valign="top" width="16%"><h4>Número:</h4>{{ $project->escola_numero }}</td>
        <td align="justify" valign="top" width="16%"><h4>Compl.:</h4>{{ $project->escola_compl }}</td>
        <td align="justify" valign="top" width="16%"><h4>Bairro:</h4>{{ $project->escola_bairro }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top" width="25%"><h4>Cidade:</h4>{{ $project->escola_cidade }}</td>
        <td align="justify" valign="top" width="25%"><h4>Estado:</h4>{{ $project->escola_estado }}</td>
        <td align="justify" valign="top" width="25%"><h4>CEP:</h4>{{ $project->escola_cep }}</td>
        <td align="justify" valign="top" width="25%"><h4>Região do Brasil:</h4>{{ $project->escola_regiao }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Qual é o integrante da equipe gestora da escola envolvido no projeto:</h4>{{ $project->escola_equipe }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Qual(is) a(s) modalidade(s) do(s) professor(es) envolvido(s) no projeto?</h4>{{ $project->escola_modalidade }}</td>
    </tr>
</table>


<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Conte um pouco sobre sua escola:</h4>{{ $project->escola_sobre }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td valign="top"><h4>Link(s) para página na Internet, facebook e/ou outros canais de comunicação da sua escola:</h4>{{ $project->escola_links }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Desde quando esta escola desenvolve o trabalho relacionado a este projeto:</h4>{{ $project->escola_inicio_mes }}/{{ $project->escola_inicio_ano }}</td>
    </tr>
</table>

<!-- Parceiros -->

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h2>Parceiros</h2></td>
    </tr>
</table>

@if($project->parceiros == 'sim')

    @forelse($project->partners as $partner)

        <table width="100%" border="0">
            <tr>
                <td align="justify" valign="top" width="50%"><h4>Nome da organização parceira:</h4>{{ $partner->nome }}</td>
                <td valign="top" width="50%"><h4>Página na Internet da organização parceira:</h4>{{ $partner->link }}</td>
            </tr>
        </table>


        <table width="100%" border="0">
            <tr>
                <td align="justify" valign="top"><h4>Descreva o tipo da entidade e o papel que terá essa organização no projeto:</h4>{{ $partner->tipo }}</td>
            </tr>
        </table>

        <table width="100%" border="0">
            <tr>
                <td align="justify" valign="top"><h4>Desde quando este espaço ou instituição participa do seu trabalho:</h4>{{ $partner->inicio_mes }}/{{ $partner->inicio_ano }}</td>
            </tr>
        </table>

        @if(!$loop->last)
            <hr>
        @endif

    @empty

        <h3>Não possue.</h3>

    @endforelse

@else

    <h3>Não possue.</h3>

@endif

<!-- Mais informações -->

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h2>Mais informações sobre o projeto</h2></td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Além das escolas citadas acima, o projeto envolverá outro espaço?</h4>{{ $project->projeto_espacos }} {{ $project->projeto_espacos_outro }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>A chamada de projetos do DAC 2020 prioriza o trabalho com crianças, jovens e professores de escolas públicas. O projeto proposto atende a esta comunidade?</h4>{{ $project->projeto_comunidade }}</td>
    </tr>
</table>
@if($project->projeto_comunidade == 'nao')
    <table width="100%" border="0">
        <tr>
            <td align="justify" valign="top"><h4>Descreva o perfil do público-alvo de crianças, jovens e/ou professores:</h4>{{ $project->projeto_comunidade_descricao_publico }}</td>
        </tr>
    </table>
@endif
<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Quantas pessoas participarão diretamente dos cursos, oficinas, apresentações e outras atividades do seu projeto?</h4>{{ $project->projeto_quantidade_pessoas }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Que tipo de atividades você pretende desenvolver no seu projeto:</h4>{{ $project->projeto_atividades }} {{ $project->projeto_atividades_outro }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Como seu projeto funcionará na prática?</h4>{{ $project->projeto_funcionamento }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Que atitudes, habilidades e conteúdos os participantes do seu projeto irão desenvolver?</h4>{{ $project->projeto_habilidades }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Como você pretende avaliar o seu projeto, após e/ou durante sua implementação?</h4>{{ $project->projeto_avaliacao }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Este projeto já foi testado de alguma forma?</h4>{{ $project->projeto_testado }}</td>
    </tr>
</table>
@if($project->projeto_testado == 'sim')
    <table width="100%" border="0">
        <tr>
            <td align="justify" valign="top"><h4>Quando e como? Descreva como foi realizado e conte seus resultados.</h4>{{ $project->projeto_avaliacao_resultado }}</td>
        </tr>
    </table>
@endif
<table width="100%" border="0">
    <tr>
        <td valign="top"><h4>Caso haja uma página da Internet relacionada a este projeto, insira o link abaixo:</h4>{{ $project->projeto_link }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td valign="top"><h4>Caso haja um vídeo descritivo do projeto, insira o link abaixo:</h4>{{ $project->projeto_video }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Por que a sua proposta deveria ser selecionada pelo Desafio Aprendizagem Criativa? O que a torna especial?</h4>{{ $project->projeto_justificativa }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Qual o tipo de ajuda você precisaria para desenvolver o seu projeto?</h4>{{ $project->projeto_ajuda }}</td>
    </tr>
</table>

<!-- Fellowship -->

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h2>Sobre os candidatos à Fellowship</h2></td>
    </tr>
</table>

@forelse($project->candidates as $candidate)

    <table width="100%" border="0">
        <tr>
            <td align="justify" valign="top" width="33%"><h4>Nome:</h4>{{ $candidate->nome }}</td>
            <td align="justify" valign="top" width="33%"><h4>Telefone:</h4>{{ $candidate->telefone }}</td>
            <td align="justify" valign="top" width="33%"><h4>Email:</h4>{{ $candidate->email }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td align="justify" valign="top" width="45%"><h4>Rua:</h4>{{ $candidate->rua }}</td>
            <td align="justify" valign="top" width="16%"><h4>Número:</h4>{{ $candidate->numero }}</td>
            <td align="justify" valign="top" width="16%"><h4>Compl.:</h4>{{ $candidate->compl }}</td>
            <td align="justify" valign="top" width="16%"><h4>Bairro:</h4>{{ $candidate->bairro }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td align="justify" valign="top" width="25%"><h4>Cidade:</h4>{{ $candidate->cidade }}</td>
            <td align="justify" valign="top" width="25%"><h4>Estado:</h4>{{ $candidate->estado }}</td>
            <td align="justify" valign="top" width="25%"><h4>CEP:</h4>{{ $candidate->cep }}</td>
            <td align="justify" valign="top" width="25%"><h4>Região do Brasil:</h4>{{ $candidate->regiao }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td valign="top" width="50%"><h4>Website pessoal:</h4>{{ $candidate->link }}</td>
            <td valign="top" width="50%"><h4>Usuário Rede Brasileira de Aprendizagem Criativa:</h4>{{ $candidate->usuario }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td valign="top" width="50%"><h4>Em qual das instituições citadas na página anterior você trabalha?</h4>{{ $candidate->instituicao }}</td>
            <td valign="top" width="50%"><h4>Qual é seu cargo e função na instituição?</h4>{{ $candidate->cargo }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td valign="top" width="50%"><h4>Qual será seu papel no projeto?</h4>{{ $candidate->papel }}</td>
            <td valign="top" width="50%"><h4>Explique seu grau de disponibilidade para trabalhar no projeto:</h4>{{ $candidate->disponibilidade }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td valign="top" width="50%"><h4>Grau de escolaridade:</h4>{{ $candidate->escolaridade }}</td>
            <td valign="top" width="50%"><h4>Curso ou programa:</h4>{{ $candidate->curso }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td valign="top" width="50%"><h4>Nome da instituição de ensino mais recente:</h4>{{ $candidate->escola_recente }}</td>
            <td valign="top" width="50%"><h4>Ano de conclusão:</h4>{{ $candidate->ano_conclusao }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td align="justify" valign="top"><h4>Conte um pouco mais sobre você, sua formação acadêmica e experiências profissionais:</h4>{{ $candidate->bio }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td align="justify" valign="top"><h4>Conte sobre algo que você tenha aprendido, alcançado ou construído nos últimos dois anos:</h4>{{ $candidate->retrosp }}</td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td align="justify" valign="top"><h4>Por que você gostaria de participar do Desafio Aprendizagem Criativa Brasil? Que características e qualidades o tornariam um bom fellow?</h4>{{ $candidate->fellow }}</td>
        </tr>
    </table>

    @if(!$loop->last)
        <hr>
    @endif

@empty

    <h3>Não possue.</h3>

@endforelse

<!-- Fellowship -->

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h2>Informações adicionais</h2></td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Como você ouviu falar sobre o Desafio Aprendizagem Criativa Brasil?</h4>{{ $project->projeto_indicacao }} {{ $project->projeto_indicacao_outro }}</td>
    </tr>
</table>

<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Há mais alguma informação que deveríamos saber sobre vocês ou seu projeto?</h4>{{ $project->projeto_info_extra }}</td>
    </tr>
</table>


<table width="100%" border="0">
    <tr>
        <td align="justify" valign="top"><h4>Carta de compromisso da secretaria de ensino ou mantenedor:</h4>@if(!empty($project->projeto_doc)) <a href="{{ asset('storage/'.$project->projeto_doc) }}" target="_blank">Acessar documento</a> @else Não possue. @endif</td>
    </tr>
</table>
