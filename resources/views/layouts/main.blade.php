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

    </head>
    <body>
    <script src="/js/scripts.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
              <li class="nav-item">
                <a href="/" class="nav-link">Entrar</a>
                <li class="nav-item">
                <a href="/" class="nav-link">Cadastrar</a>
              </li>
              </li>
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
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
    
</html>
