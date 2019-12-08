{{-- Autor: Lukas Erlich(xerlic00) --}}
{{-- ITU projekt - Výukový program na znalost ptáků ČR --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            .my-active{
                color: #2b7e75 !important;
            }

            .my-active:hover{
                color: #055d53 !important;
            }

            .my-color{
                color: white !important;  
            }

            .my-color:hover{
                color: lightblue !important;
            }
        </style>

        @yield('title')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>">
        <link href="{{ asset('css/custom_app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="color: rgba(0,0,0,.5);">
            @if (url()->current() != url('/'))
                <a class="navbar-brand" style="color:white;" href="/">Ptáci</a>
            @endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-item nav-link @if (url()->current() == url('/vyuka'))my-active @else my-color @endif" href="/vyuka">Nauč se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link @if (url()->current() == url('/test'))my-active @else my-color @endif" href="/test">Otestuj se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link @if (url()->current() == url('/progress'))my-active @else my-color @endif" href="/progress" style="{{ (auth()->user()) ? : "visibility: hidden;" }}">Profil</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-item nav-link text-uppercase my-color" href="{{ route('login') }}">{{ __('Přihlásit se') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="link nav-link text-uppercase my-color" href="{{ route('register') }}">{{ __('Registrovat') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="navbar-text" style="color: white;">
                            {{ Auth::user()->name }}
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link my-color" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                    @if (url()->current() != url('/'))
                        <form class="form-inline my-2 my-lg-0" action="/search">
                            @csrf
                            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Orel.." aria-label="Search">

                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Hledat</button>
                        </form>
                    @endif
                </ul>
            </div>
        </nav>

        <div class="body">
            @if(session()->has('message'))
                <div class="alert col-mb-6 alert-warning alert-dismissable text-center" role="alert" style="">
                    <button type="button" class="close" data-dismiss="alert" style="margin-left:5px"><span>&times;</span></button>
                    {{ session()->get('message') }}
                </div>
            @endif
            @yield('content')

        </div>

        <footer class="footer">
            <div class="copyright">
              <span id="copyrighttext">&copy; 2019. All rights reserved | Design By:</span> <span id="login">ITU Power TEAM</span>
            </div>
        </footer>   
    {{-- </div> --}}

    </body>
</html>
        