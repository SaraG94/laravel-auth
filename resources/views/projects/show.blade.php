@extends('layouts.app')

@section('content')
<div class="container py-5">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h1>{{ $project->titolo }}</h1>
            </div>

            <div>
                <a class="btn btn-sm btn-primary" href="{{ route('projects.edit',$project) }}">Modifica</a>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="descrioption">
            <h5>Descrizione progetto: </h5>
            <p>{{ $project->descrizione }}</p>
        </div>
        <div class="client">
            <h5>Cliente: </h5>
            <p>{{ $project->cliente }}</p>
        </div>
    </div>
@endsection