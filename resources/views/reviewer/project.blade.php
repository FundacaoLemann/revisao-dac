@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex align-items-baseline">
                <h1 class="mb-0 pb-0">Revisar Projeto</h1> <a class="badge badge-primary ml-2" href="/revisor/home">Voltar</a>
            </div>
        </div>

        <hr class="">

        <div class="row vh-100">
            <div class="col-8 h-100">
                <div class="jumbotron h-100 overflow-auto pt-4">
                    <h2>{{ $project->projeto_nome }}</h2>
                    <p class="lead text-justify">{{ $project->projeto_descricao }}</p>
                    <hr class="my-4">
                    <h3>Parceiros</h3>
                    @forelse($project->partners as $partner)
                        <p>{{ $partner->nome }}</p>
                    @empty
                        <p>Nenhum parceiro.</p>
                    @endforelse

                    <h3>Candidados</h3>
                    @forelse($project->candidates as $candidate)
                        <p>{{ $candidate->nome }}</p>
                    @empty
                        <p>Nenhum candidato.</p>
                    @endforelse
                </div>
            </div>
            <div class="col-4">
                <h3>Revisão</h3>

                @if(!$review)

                    <p class="lead">Assinale a sua avaliação com relação aos itens abaixo, considerando a escala de 0 para insuficiente e três para excepcional:</p>

                    <form action="/revisor/projeto/{{ $project->id }}" method="POST">
                        @csrf
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Critério</th>
                                    <th scope="col">0</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Relevância</th>
                                    <td><input type="radio" name="relevance" value="0" required></td>
                                    <td><input type="radio" name="relevance" value="1"></td>
                                    <td><input type="radio" name="relevance" value="2"></td>
                                    <td><input type="radio" name="relevance" value="3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Alinhamento com a AC</th>
                                    <td><input type="radio" name="alignment" value="0" required></td>
                                    <td><input type="radio" name="alignment" value="1"></td>
                                    <td><input type="radio" name="alignment" value="2"></td>
                                    <td><input type="radio" name="alignment" value="3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Viabilidade</th>
                                    <td><input type="radio" name="viability" value="0" required></td>
                                    <td><input type="radio" name="viability" value="1"></td>
                                    <td><input type="radio" name="viability" value="2"></td>
                                    <td><input type="radio" name="viability" value="3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Inovação</th>
                                    <td><input type="radio" name="innovation" value="0" required></td>
                                    <td><input type="radio" name="innovation" value="1"></td>
                                    <td><input type="radio" name="innovation" value="2"></td>
                                    <td><input type="radio" name="innovation" value="3"></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label for="cadidatesComments">Comentário para candidatos:</label>
                            <textarea class="form-control" id="cadidatesComments" rows="3" name="cadidates_comments"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="committeeComments">Comentário para comitê avaliador:</label>
                            <textarea class="form-control" id="committeeComments" rows="3" name="committee_comments"></textarea>
                        </div>
                        <label>Proposta recomendada para ser finalista do desafio?</label>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="recommendedYes" type="radio" name="recommended" id="" value="1" required>
                                <label class="form-check-label" for="recommendedYes">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="recommendedNo" type="radio" name="recommended" id="" value="0">
                                <label class="form-check-label" for="recommendedNo">Não</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Enviar</button>
                        <input type="hidden" name="reviewer_id" value="{{ auth('reviewer')->id() }}">
                    </form>

                @else

                    <p class="lead">Revisão já realizada.</p>

                @endif

            </div>
        </div>

    </div>
@endsection
