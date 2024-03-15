@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="bg-primary-subtle">
                <div class="p-5">

                    <h1 class="text-center text-primary">
                        Sei loggato! <i class="fa-solid fa-hands-clapping"></i>
                    </h1>

                    <h3 class="mb-3">
                       Ei ciao  Benvenuto, {{ auth()->user()->name }} <i class="fa-solid fa-hand-point-down"></i>
                    </h3>

                    <div class="container">
                        <img src="{{ asset('storage/180509_19_37_36_5DR27021.0.jpg') }}" alt="Immagine" width="100%">
                    </div>
                </div>


                <a class="btn btn-primary mb-3" href="{{ route('admin.projects.index') }}">vedi tutti i Progetti <i class="fa-solid fa-diagram-project"></i></a>
            </div>
        </div>
    </div>
@endsection
