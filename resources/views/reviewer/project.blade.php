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
                    @include('reviewer.project_details')
                </div>
            </div>
            <div class="col-4">
                <h3>Revisão</h3>

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
                            @component('components.radio', ['title' => 'Relevância', 'field' => 'relevance', 'review' => $review])@endcomponent
                            @component('components.radio', ['title' => 'Alinhamento com a AC', 'field' => 'alignment', 'review' => $review])@endcomponent
                            @component('components.radio', ['title' => 'Viabilidade', 'field' => 'viability', 'review' => $review])@endcomponent
                            @component('components.radio', ['title' => 'Inovação', 'field' => 'innovation', 'review' => $review])@endcomponent
                        </tbody>
                    </table>

                    <div class="form-group">
                        <label for="cadidatesComments">Comentário para candidatos:</label>
                        <textarea class="form-control" id="cadidatesComments" rows="3" name="cadidates_comments">@isset($review->cadidates_comments) {{ $review->cadidates_comments }} @endisset</textarea>
                    </div>

                    <div class="form-group">
                        <label for="committeeComments">Comentário para comitê avaliador:</label>
                        <textarea class="form-control" id="committeeComments" rows="3" name="committee_comments">@isset($review->committee_comments) {{ $review->committee_comments }} @endisset</textarea>
                    </div>
                    <label>Proposta recomendada para ser finalista do desafio?</label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="recommendedYes" type="radio" name="recommended" id="" value="1" required @if(isset($review->recommended) && $review->recommended === 1) checked @endif>
                            <label class="form-check-label" for="recommendedYes">Sim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="recommendedNo" type="radio" name="recommended" id="" value="0" @if(isset($review->recommended) && $review->recommended === 0) checked @endif>
                            <label class="form-check-label" for="recommendedNo">Não</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary float-right">Enviar</button>
                    <input type="hidden" name="reviewer_id" value="{{ auth('reviewer')->id() }}">
                    <input type="hidden" name="id" value="@isset($review->id) {{ $review->id }} @endisset">
                </form>


            </div>
        </div>

    </div>
@endsection
