<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('app/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('app/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app/css/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{ asset('app/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('app/css/selectize.css') }}" rel="stylesheet">
    <link href="{{ asset('app/css/selectize.bootstrap3.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                            
        
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                             
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                             <a class="dropdown-item" href="{{ url('/settings/password') }}"><i class="fa fa-btn fa-lock"></i> Ubah \ Password</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                               Logout
                                    </a>

                             
                             
                             

                   
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li> 
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @include('layouts._flash')
            @yield('content')
        </main>
    </div>
    {{--  JS  --}}
    <script src="{{ asset('app/js/selectize.min.js') }}"></script>

    <script src="{{ asset('app/js/app.js') }}"></script>
    <script src="{{ asset('app/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/app/js/custom.js')}}"></script>
    <script src="{{ asset('/app/js/selectize.min.js')}}"></script>
  
    <script src='https://www.google.com/recaptcha/api.js'></script> 
    @yield('scripts')
</body>
</html>

