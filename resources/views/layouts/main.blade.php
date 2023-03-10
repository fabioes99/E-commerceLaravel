<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- fonte da aplicacao -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
        </script>
    </head>
    <body>
      <header>
        <nav class=" navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
             <a href="" class="navbar-brand"></a>
             <img src="/img/hdcevents_logo.svg" alt="">
             <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">Eventos</a>
              </li>
              <li class="nav-item">
                <a href="/events/create" class="nav-link">Criar Eventos</a>
              </li>
              @auth
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">Meus Eventos</a>
              </li>

              <li class="nav-item">
               <form action="/logout" method="POST">
                @csrf
                <a href="/logout" 
                class="nav-link" onclick="event.preventDefault();
                this.closest('form').submit();">Sair</a>
               </form>
              </li>
              @endauth
              @guest
              <li class="nav-item">
                <a href="/login" class="nav-link">Entrar</a>
                <li class="nav-item">
                <a href="/register" class="nav-link">Cadastrar</a>
                </li>
              </li>
              @endguest
             </ul>
          </div>
        </nav>
      </header>
      <main>
        <div class="container-fluid">
          <div class="row">
            @if(session('msg'))
            <div class="alert alert-success" role="alert"> {{ session('msg') }}</div>
            @endif
            @yield('content')
          </div>
        </div>
      </main>
       <footer>
        <p>HDC Events &copy; 2020</p>
      </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
    
</html>
