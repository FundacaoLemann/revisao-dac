@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron pt-4 pb-2">
            <h1>Rubricas de Avaliação das Propostas</h1>
            <hr class="my-4">
            <h2>Apresentação - Novidades em 2020</h2>
            <p>Diferente de edições anteriores, o DAC 2020 foca especificamente na adoção sistêmica da aprendizagem criativa no <b>ecossistema escolar</b>. O Desafio tem como prioridade dialogar com a sala de aula, o currículo, a gestão escolar e a gerência administrativa.</p>
            <p>Estamos procurando equipes formadas por gestores, diretores e professores já empenhados em tornar as escolas mais criativas e relevante. Favor, olhar a proposta como um todo e prestar atenção especial à explicação de como o projeto funcionará na prática e ao histórico de práticas de cada integrante da equipe.</p>
            <p>A proposta obrigatoriamente precisa contemplar 3 candidatos, sendo um professor, um gestor escolar e um representante da rede de ensino. Opcionalmente pode contemplar um quarto candidato, sem restrição de perfil. Este candidato pode ser, por exemplo, um segundo professor escolar, um representante de instituição parceira, um pesquisador, um empreendedor social, entre outros. Entretanto, é essencial que a proposta demonstre a autoria da equipe de 3 candidatos do ambiente escolar, evitando a mera aplicação de um programa externo. A relação continuada do quarto candidato com o ecossistema escolar precisa ser evidente.</p>
            <p>As propostas devem ser analisadas de acordo com quatro rubricas: Relevância, Alinhamento com Aprendizagem Criativa, Viabilidade e Inovação. São as mesmas rubricas de 2019 porém mudaram as definições portanto, pedimos que leiam com atenção as explicações a seguir.</p>
        </div>
        <div class="row justify-content-center">

            <div class="col-10">
                <h3>Relevância</h3>
                <p class="lead">Dimensões a serem analisadas:</p>
                <ul class="list-unstyled ml-3">
                    <li class="my-3">a) Público-alvo: A proposta deve trabalhar diretamente com alunos entre 5 a 18 anos que frequentam escolas públicas ou que frequentam escolas vinculadas a uma fundação ou associação organização filantrópica, por exemplo o Sistema S, Centro Paula Souza, Institutos Federais, escolas da FEBEM, etc.</li>
                    <li class="my-3">b) Envolvimento de 3 níveis decisórios no ambiente escolar: professor, gestão escolar e rede de ensino. A proposta explica o papel de cada um dos candidatos? Até que ponto o perfil de cada candidato demonstra um histórico de experiências relevantes?</li>
                    <li class="my-3">c) Profundidade: Com que profundidade a proposta traria um impacto na aprendizagem criativa deste ecossistema de pessoas? Até que ponto o projeto proposto pelo professor avança a integração de aprendizagem criativa com o currículo? A direção escolar propõem apenas uma reunião pedagógica para conscientizar os colegas do projeto ou planeja ações sistemáticas de desenvolvimento? A secretaria pretende apenas anunciar o projeto pelos meios de comunicação da rede ou propõe encontros, eventos, oficinas, etc. para fomentar a adesão em outras unidades escolares?</li>
                </ul>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center" width="25%">0 (insuficiente)</th>
                        <th scope="col" class="text-center" width="25%">1 (regular)</th>
                        <th scope="col" class="text-center" width="25%">2 (boa)</th>
                        <th scope="col" class="text-center" width="25%">3 (excepcional)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">A proposta não foca no nosso público alvo e/ou a equipe não contempla integrantes dos 3 níveis escolares - professor, gestão escolar, e representante da rede de ensino</th>
                        <td>A proposta foca no nosso público alvo porém as ações propostas de apenas um integrante da equipe tem profundidade no ambiente escolar enquanto as estratégias dos outros são superficiais ou genéricas.</td>
                        <td>A proposta foca no nosso público alvo porém as ações propostas de apenas dois integrantes da equipe tem profundidade no ambiente escolar enquanto as estratégias do(s) outro(s) são superficiais ou genéricas.</td>
                        <td>A proposta foca no nosso público alvo e a atuação de todos os integrantes da equipe tem profundidade no ambiente escolar e são integradas uma com as outras. </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-12">
                <hr class="mb-4 col-8 bg-primary">
            </div>

            <div class="col-10">
                <h3>Alinhamento com a Aprendizagem Criativa</h3>
                <p class="lead">Até que ponto a proposta trabalhará os conceitos centrais da aprendizagem criativa nas atividades com os alunos, Por exemplo, em que medida as atividades propostas são :</p>

                <ul class="list-unstyled ml-3">
                    <li class="my-3">a) mão na massa (os participantes criam algum tipo de produto, físico ou virtual),</li>
                    <li class="my-3">b) significativas para os participantes,</li>
                    <li class="my-3">c) colaborativas, e</li>
                    <li class="my-3">d) lúdicas (incentivo à experimentação livre; percepção do erro como parte do processo)?</li>
                </ul>

                <p>Na abordagem de <b>formação de professores</b> e na <b>expansão na rede</b>, até que ponto a proposta contempla estes mesmos critérios de aprendizagem criativa? Por exemplo, a direção da escola propõe uma estratégia para envolver os outros professores de forma orgânica que permite re-mixagens e re-leituras em vez de replicação? A estratégia de disseminar as práticas de aprendizagem criativa para outras unidades escolares, e para a comunidade em geral, procura a significação pelas pessoas em vez da imposição?</p>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center" width="25%">0 (insuficiente)</th>
                        <th scope="col" class="text-center" width="25%">1 (regular)</th>
                        <th scope="col" class="text-center" width="25%">2 (boa)</th>
                        <th scope="col" class="text-center" width="25%">3 (excepcional)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">A proposta foca em um modelo tradicional instrucionista de educação.</th>
                        <td>
                            <p>A proposta contempla alguns aspectos da atividade mão na massa, mas ainda se baseia na transmissão de informação e/ou há pouco espaço para o protagonismo ou a criatividade dos participantes.</p>
                            <p>Por exemplo: os produtos criados pelas crianças ou nas formações são muito parecidos entre si; ou a atividade convida os participantes, sejam crianças ou professores, a replicarem uma sequência de instruções pré-estabelecidas; ou a expansão na rede tem pouca liberdade para trocar ideias com os colegas e desenvolver soluções locais.</p>
                        </td>
                        <td>
                            <p>A proposta propõe atividades mão na massa que são alinhadas com os conceitos centrais de Aprendizagem Criativa.</p>
                            <p>Ainda falta concretude dos resultados na prática.</p>
                            <p>Por exemplo, a proposta não cita atividades previamente desenvolvidas pelos candidatos em sala de aula, oficinas, eventos, programas de formação, ou intervenções alinhadas com os conceitos centrais de Aprendizagem Criativa.</p>
                            <p>Enfim, a proposta é alinhada com aprendizagem criativa mas o histórico de experiências é mais tradicional ou tem poucas experiências prévias.</p>
                        </td>
                        <td>
                            <p>A proposta propõe atividades mão na massa que são alinhadas com os conceitos centrais de Aprendizagem Criativa.</p>
                            <p>Demonstrou os resultados na prática com exemplos concretos que também são alinhados com Aprendizagem Criativa.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-12">
                <hr class="mb-4 col-8 bg-primary">
            </div>

            <div class="col-10">
                <h3>Viabilidade</h3>
                <p class="lead">Julgamos a viabilidade de acordo com 4 aspectos:</p>

                <p>1) Adequação ao escopo do programa DAC: necessidades dos candidatos e tempo de execução</p>

                <ul>
                    <li>A ajuda que os candidatos esperam corresponde ao alcance do programa DAC? Lembrando, o DAC contribui principalmente com orientações pedagógicas para que o projeto se alinhe com a aprendizagem criativa, dá visibilidade aos projetos, e facilita conexões com eventuais colaboradores. Não oferece financiamento de longo prazo nem meios de comercialização de produtos ou serviços. </li>
                    <li>A proposta é possível de ser implementada dentro de um período razoável de tempo (1-2 anos)? Boa parte dela poderá ser implementada durante o período do Desafio 2020?</li>
                </ul>

                <p>2) Capacidade demonstrada da equipe</p>

                <ul>
                    <li>A equipe envolvida já desenvolveu algum projeto parecido? Verificar a experiência anterior por meio dos links e referências fornecidas pelos candidatos.</li>
                    <li>Todos os membros da equipe, nos 3 níveis, têm o conhecimento e a disponibilidade necessários para tocar a implementação do projeto?</li>
                </ul>

                <p>3) Sustentabilidade após o Desafio</p>

                <ul>
                    <li>É importante que o projeto consiga se manter de forma mais autônoma depois do pontapé inicial dado pelo DAC. Os proponentes citam os recursos necessários, seja o espaço físico, os materiais propostos (simples ou sofisticados), salários da equipe, etc.? (Consulte a pergunta "De que forma o departamento da secretaria ou mantenedor apoia o projeto?") As parcerias parecem sólidas e continuariam após o Desafio? O Desafio seria o suficiente para que a proposta realmente deslanche?</li>
                </ul>

                <p>4) Escalabilidade institucional</p>

                <ul>
                    <li>A rede de ensino, bem como possíveis centros, organizações ou universidades parceiros, oferecem a visibilidade e um meio institucional de adotar replicar as atividades em escala maior?</li>
                    <li>A escalabilidade é um aspecto integral da proposta, com apoio concreto para a disseminação?</li>
                </ul>


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center" width="25%">0 (insuficiente)</th>
                        <th scope="col" class="text-center" width="25%">1 (regular)</th>
                        <th scope="col" class="text-center" width="25%">2 (boa)</th>
                        <th scope="col" class="text-center" width="25%">3 (excepcional)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <p>Dificilmente a proposta terá condição de ser implementada pela equipe durante o período do Desafio (1-2 anos).</p>
                            <p>e/ou</p>
                            <p>As expectativas dos candidatos não correspondem ao alcance do Fellowship.</p>
                        </th>
                        <td>
                            <p>O projeto se adequa ao escopo do programa DAC. </p>
                            <p>Faltam evidências da capacidade da equipe e/ou da sustentabilidade do projeto.</p>
                            <p>Obs: grande potencial de escala sem capacidade e/ou sustentabilidade é escore 1</p>
                        </td>
                        <td>
                            <p>O projeto se adequa ao escopo do programa DAC. </p>
                            <p>A capacidade da equipe e a sustentabilidade do projeto parecem sólidas. </p>
                            <p>Falta firmeza em relação à escalabilidade institucional. </p>
                        </td>
                        <td>
                            <p>O projeto se adequa ao escopo do programa DAC. </p>
                            <p>A capacidade da equipe e a sustentabilidade do projeto parecem sólidas.</p>
                            <p>O potencial de escalabilidade é favorecido pela estrutura e envolvimento institucional.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-12">
                <hr class="mb-4 col-8 bg-primary">
            </div>

            <div class="col-10">
                <h3>Inovação</h3>
                <p class="lead">Valorizamos a inovação que traga novidades relevantes ao público alvo e que atenda seus interesses e necessidades. Vale lembrar que a inovação pela inovação não é algo bom. Muitas vezes, a integração e respeito às práticas tradicionais é fundamental. Em relação às tecnologias digitais, buscamos uma integração orgânica e sem rupturas, algo que tenha maior chance de ser moldado às características locais do que tecnologia super avançadas com pouca chance de penetração e disseminação.</p>

                <p>Considerar os seguintes aspectos:</p>
                <ul class="list-unstyled ml-3">
                    <li class="my-3">a) Adequação local. A proposta trata de uma solução moldada especificamente ao modo de vida, realidades e interesses do público-alvo? Por exemplo, não faz sentido sugerir lousas interativas para comunidades que não possuam eletricidade, ou montar um sistema de análise da água quando a comunidade está interessada na falta de iluminação do entorno. A vivência direta com o público-alvo, ou o levantamento das necessidades locais, são elementos importantes a serem incluídos na descrição do projeto.</li>
                    <li class="my-3">b) Inovação em termos de materiais.  A proposta utiliza materiais, tradicionais ou não, de forma diferente do habitual e mais relevante para o contexto? Ela utiliza materiais disponíveis localmente, ressignificando o seu uso?</li>
                    <li class="my-3">c) Inovação temática. Os temas trabalhados são diferentes e enriquecem uma re-leitura do currículo tradicional?</li>
                    <li class="my-3">d) Inovação metodológica. As práticas pedagógicas trazem algo de inovador e aprimorado, tanto na sala de aula, na formação dos professores e na mobilização?</li>
                </ul>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center" width="25%">0 (insuficiente)</th>
                        <th scope="col" class="text-center" width="25%">1 (regular)</th>
                        <th scope="col" class="text-center" width="25%">2 (boa)</th>
                        <th scope="col" class="text-center" width="25%">3 (excepcional)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">O projeto não se adequa ao contexto, apresenta soluções genéricas e/ou não moldadas às características locais. </th>
                        <td>O projeto se adequa ao contexto mas propõe soluções tradicionais em relação ao material, tema e método. </td>
                        <td>O projeto se adequa ao contexto e propõe soluções inovadoras em pelo menos dois dos 3 aspectos - material, tema e/ou método.</td>
                        <td>O projeto se adequa ao contexto e propõe soluções inovadoras nos 3 aspectos - material, tema e método.</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
