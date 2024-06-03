<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Login' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    </head>
    <body>

        <nav class="bg-gray-100 shadow-md">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <a href="{{ URL('/dashboard') }}" class="text-xl font-bold text-gray-800">Home</a>
                    <button class="block lg:hidden focus:outline-none">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                    <div class="hidden lg:flex lg:items-center lg:w-auto" id="navbarNavDropdown">
                        <ul class="flex items-center">
                            @guest
                                <li>
                                    <a href="/login" class="ml-4 text-gray-700 hover:text-blue-500 {{ request()->is('login') ? 'font-semibold' : '' }}">Login</a>
                                </li>
                                <li>
                                    <a href="/register" class="ml-4 text-gray-700 hover:text-blue-500 {{ request()->is('register') ? 'font-semibold' : '' }}">Register</a>
                                </li>
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <livewire:logout />
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="container">
            <h3 class="mt-3 mb-5 text-center">Login - Register Laravel</h3>

            @if (session()->has('message'))
                <div class="row justify-content-center text-center mt-3">
                    <div class="col-md-8">
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
            @endif
        
            {{ $slot }}

          

        </div>

        <script data-navigate-once src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>