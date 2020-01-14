@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">

                <h1>Atribuir Projetos</h1>

                <form class="form-inline my-4">

                    <select class="custom-select my-1 mr-sm-2" id="">
                        <option selected>Estado</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <select class="custom-select my-1 mr-sm-2" id="">
                        <option selected>Status do projeto</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <select class="custom-select my-1 mr-sm-2" id="">
                        <option selected>Status do revisor</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <button type="submit" class="btn btn-primary mb-2 my-2">Filtrar</button>

                </form>

                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <form action="/admin/atribuir" method="POST">
                    @csrf

                    <div class="card vh-80">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="my-2">Projetos/Revisores</h3>
                            <button type="submit" class="btn btn-info">Atribuir</button>
                        </div>

                        <div class="card-body h-100">

                            <div class="row h-100">

                                <div class="col-8 h-100 overflow-auto">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Projeto</th>
                                            <th scope="col" class="text-center">Estado</th>
                                            <th scope="col" class="text-right">Qtd. Revisores</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @forelse($projects as $project)
                                                <tr>
                                                    <th scope="row"><input type="checkbox" name="projects[]" value="{{ $project->id }}"></th>
                                                    <td data-toggle="tooltip" data-placement="top" title="{{ $project->projeto_nome }}">{{ Str::limit($project->projeto_nome, 45) }}</td>
                                                    <td class="text-center">{{ $project->departamento_estado }}</td>
                                                    <td class="text-right">{{ $project->reviewers_count }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4">Nenhum registro encontrado.</td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-4">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Revisor</th>
                                            <th scope="col" class="text-right">Qtd. Projetos</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($reviewers as $reviewer)
                                            <tr>
                                                <th scope="row"><input type="checkbox" name="reviewers[]" value="{{ $reviewer->id }}"></th>
                                                <td data-toggle="tooltip" data-placement="top" title="{{ $reviewer->name }}">{{ Str::limit($reviewer->name, 20) }}</td>
                                                <td class="text-right">{{ $reviewer->projects_count }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3">Nenhum registro encontrado.</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
