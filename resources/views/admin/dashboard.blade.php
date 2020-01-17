@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1>Dashboard</h1>

                <div class="card-deck my-4">
                    <div class="card text-white bg-primary mb-3" style="max-width: 12rem;">
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ $projects->count() }}</h2>
                            <p class="card-text">Inscrições<br>realizadas</p>
                        </div>
                    </div>

                    <div class="card text-white bg-info mb-3" style="max-width: 12rem;">
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ $projectsNotAssigned }}</h2>
                            <p class="card-text">Aguardando<br>atribuição</p>
                        </div>
                    </div>

                    <div class="card text-white bg-danger mb-3" style="max-width: 12rem;">
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ $projects->count() - $quantityReviews }}</h2>
                            <p class="card-text">Aguardando<br>revisão</p>
                        </div>
                    </div>

                    <div class="card text-white bg-success mb-3" style="max-width: 12rem;">
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ $quantityReviews }}</h2>
                            <p class="card-text">Inscrições<br>revisadas</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-baseline">
                    <h3 class="my-2">Projetos</h3>
                    <a href="{{ route('export') }}" class="btn btn-primary text-white">Download (.xls)</a>
                </div>

                <hr class="my-2">

{{--                <div class="col-md-4 pl-1">--}}
{{--                    <label for="projectsStatus">Status</label>--}}
{{--                    <select class="form-control filter-reviewer-project" id="projectsStatus">--}}
{{--                        <option selected value="">Selecionar</option>--}}
{{--                        <option value="true">Revisado</option>--}}
{{--                        <option value="false">Não revisado</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

                <table class="table mt-4">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" width="60%">Projeto</th>
                        <th scope="col" class="text-center">Estado</th>
                        <th scope="col" class="text-center">Revisores</th>
                        <th scope="col" class="text-center">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($projects as $project)
                        <tr class="">
                            <th scope="row">{{ $project->id }}</th>
                            <td data-toggle="tooltip" data-placement="top" title="{{ $project->projeto_nome }}">{{ Str::limit($project->projeto_nome, 70) }}</td>
                            <td class="text-center">{{ $project->departamento_estado }}</td>
                            <td class="text-center">{{ $project->reviewers_count }}</td>
                            <td class="text-center">@component('components.status', ['status' => $project->status])@endcomponent</td>
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
