@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Revisão DAC</h1>
            <p class="lead">Interface de interação entre revisores e projetos.</p>
            <hr class="my-4">

            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('reviewer.login') }}" role="button">Revisar projetos</a>
            </p>
        </div>
    </div>
@endsection
