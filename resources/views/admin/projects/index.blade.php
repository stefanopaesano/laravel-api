@extends('layouts.app')

@section('page-title', 'Tutti i Progetti')

@section('main-content')
    <div class="container">
        <h1 class="text-light text-center c">Progetti</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3 ms-4">Crea Nuovo Progetto <i class="fa-solid fa-plus"></i></a>
        <div class="row p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>Titolo</th>
                        <th>Tecnologie</th>
                        <th>Descrizione</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <a href="{{ route('admin.projects.show', $project->slug) }}" class="text-decoration-none text-dark">
                                    {{ $project->title }}
                                </a>
                            </td>
                            <td>
                                @foreach ($project->technologies as $technology)
                                    <a href="{{ route('admin.projects.show', $project->slug) }}" class="badge text-bg-primary">{{ $technology->name }}</a>
                                @endforeach
                            </td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
