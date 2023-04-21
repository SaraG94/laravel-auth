@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex align-items-center">
            <h1 class="me-auto">I mie progetti</h1>

            <div>
                <a class="btn btn-sm btn-primary" href="{{ route('projects.create') }}">Nuovo progetto</a>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-striped table-inverse table-responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titolo</th>
                    <th>Cliente</th>
                    <th>Descrizione</th>
                    <th>Link</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->titolo }}</td>
                    <td>{{ $project->cliente }}</td>
                    <td>{{ $project->descrizione }}</td>
                    <td>
                        <a href="{{ route('projects.show',$project) }}">{{ $project->link }}</a>
                    </td>
                    <td>
                        <div class="d-flex ">
                            <a class="btn btn-sm btn-primary" href="{{ route('projects.edit',$project) }}">Modifica</a>
                            <form action="{{ route('projects.destroy',$project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <th colspan="6">Nessun post trovato</th>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection