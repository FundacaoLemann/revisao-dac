@extends('layouts.export')

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="jumbotron h-100 overflow-auto pt-4">
                    @include('reviewer.project_details')
                </div>
            </div>
        </div>
    </div>
@endsection
