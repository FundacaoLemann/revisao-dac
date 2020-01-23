@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col-12">
                <h1>Atribuir projeto</h1>
            </div>
        </div>

        <form action="/admin/projeto/{{ $project->id }}" method="POST">
            @csrf

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-baseline">
                    <h3 class="my-2">Projeto: {{ $project->projeto_nome }}</h3>
                    <button type="submit" class="btn btn-info text-white">Atualizar</button>
                </div>

                <div class="card-body h-100">

                    <div class="row h-100">

                        <div class="col h-100 overflow-auto">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col" width="1%">#</th>
                                    <th scope="col">Revisor(a)</th>
                                    <th scope="col" class="text-right">Projetos atribuidos</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($reviewers as $reviewer)
                                    <tr>
                                        <th scope="row"><input type="checkbox" name="reviewers[]" value="{{ $reviewer->id }}" @if($project->reviewers->contains($reviewer->id)) checked @endif></th>
                                        <td>{{ $reviewer->name }}</td>
                                        <td class="text-right">
                                            @if($reviewer->projects_count > 0)
                                                <a tabindex="0" class="btn btn-sm btn-link" role="button" data-toggle="popover" data-trigger="focus" title="Projeto(s) atribuído(s)" data-content="@component('components.popover', ['data' => $reviewer->projects->sortBy('projeto_nome'), 'field' => 'projeto_nome'])@endcomponent">(ver)</a>
                                            @endif
                                            {{ $reviewer->projects_count }}
                                        </td>
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
@endsection
