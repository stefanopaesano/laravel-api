<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>@yield('page-title') | {{ config('app.name', 'Boolfolio') }}</title>

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-warning bg-primary-warning">
                <div class="container">
                    <a class="navbar-brand" href="/"><img src="{{ Vite::asset('resources/img/BOOLFOLIO.png') }}" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard <i class="fa-solid fa-table-columns"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.projects.index') }}">Progetti <i class="fa-solid fa-diagram-project"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.projects.create') }}">Nuovo Progetto <i class="fa-solid fa-plus"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.types.index') }}">Linguaggi <i class="fa-solid fa-file-code"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.technologies.index') }}">Tecnologie <i class="fa-solid fa-microchip"></i></a>
                            </li>
                        </ul>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-outline-primary">
                                Log Out <i class="fa-solid fa-right-from-bracket"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            <div class="container">
                @yield('main-content')
            </div>
        </main>
    </body>
</html>