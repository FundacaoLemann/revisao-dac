@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">

                <h1>Dashboard</h1>

                <div class="card-deck my-4">
                    <div class="card text-white bg-primary mb-3" style="max-width: 12rem;">
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ $projects->count() }}</h2>
                            <p class="card-text">Projeto(s)<br>atribuído(s)</p>
                        </div>
                    </div>

                    <div class="card text-white bg-success mb-3" style="max-width: 12rem;">
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ auth()->user()->reviews->count() }}</h2>
                            <p class="card-text">Projeto(s)<br>revisado(s)</p>
                        </div>
                    </div>
                </div>

                <h3>Projetos</h3>
                <hr class="my-2">

                <div class="col-md-4 pl-1">
                    <label for="projectsStatus">Status</label>
                    <select class="form-control filter-reviewer-project" id="projectsStatus">
                        <option selected value="">Selecionar</option>
                        <option value="true">Revisado</option>
                        <option value="false">Não revisado</option>
                    </select>
                </div>

                <table class="table mt-4">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" width="80%">Projeto</th>
                        <th scope="col" class="text-right">Nota</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($projects as $project)
                        <tr class="reviewer-project-row" data-reviewed="{{ ($project->reviews->isNotEmpty()) ? 'true' : 'false' }}">
                            <th scope="row">{{ $project->id }}</th>
                            <td data-toggle="tooltip" data-placement="top" title="{{ $project->projeto_nome }}">{{ Str::limit($project->projeto_nome, 45) }}</td>
                            <td class="text-right">{{ ($project->reviews->isNotEmpty()) ? $project->reviews[0]->score_avg : '-' }}</td>
                            <td><a href="/revisor/projeto/{{ $project->id }}" role="button" class="btn btn-secondary btn-sm" aria-pressed="true">Revisar</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Nenhum registro encontrado.</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
