@extends('layouts.guest')

@section('main-content')
    <div class="row">
        <div class="col">
            <div>
                <h3 class="mb-3 text-start text-light">Welcome USER!</h3>
                
                <div class="p-5">
                    <h1 class="text-center text-light">
                        Boolfolio
                    </h1>

                    
                    <a class="btn btn-primary mb-3" href="{{ route('projects.index') }}">vedi tutti i Progetti <i class="fa-solid fa-diagram-project"></i></a>

                    <p class="mb-3 bg-warning fs-3 p-2 text-white rounded-2">Ricorda: fai il login per scopripre e creare nuovi Progetti</p>

                        {{-- Elenco delle Tecnologie --}}
                        <h4 class="mt-4">Tecnologie Disponibili:</h4>
                        <div class="bg-light p-3 text-center rounded-2">
                            @foreach ($technologies as $technology)
                                <span class="badge text-bg-primary fs-5 p-2 m-1"> {{ $technology->name }}</span>
                            @endforeach
                        </div>

                        {{-- Elenco dei Tipi --}}
                        <h4 class="mt-4">Tipi di Progetti:</h4>
                        <div class="bg-light p-3 text-center rounded-2 mb-3">
                            @foreach ($types as $type)
                                <span class="badge text-bg-primary fs-5 p-2 m-1">{{ $type->name }}</span>
                            @endforeach
                        </div>

                    <div>
                        <a class="btn btn-success" href="{{ route('login') }}">Login <i class="fa-solid fa-right-to-bracket"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection