<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/JMO.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark "  >
      <a class="navbar-brand text-secondary " href="#">Connection</a>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto  ">
          <li class="nav-item">
            <a class="nav-link  text-secondary" href="Perfil/Usuario.php">Muro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="Perfil/posteos_y_amigos.php">Comunidad</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-secondary" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Preguntas</a>
            <div class="dropdown-menu bg-dark text-secondary" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-secondary" href="#preguntas">De qué se trata todo esto</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-secondary" href="#tracks">Tracks del Mes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-secondary" href="#">Lugares</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="formularios/formularioContacto.html">Contacto</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </form>
      </div>
    </nav>
  </header>


        <main class="py-4">
            @yield('content')
        </main>
  </div>
</body>
</html>
