<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JL</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    @stack('head')
</head>
<body>
<nav class="navbar navbar-toggleable-md bg-dark navbar-cv navbar-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Mia 93.7</a>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="#">INICIO<span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">PROGRAMACION</a></li>
            <li class="nav-item"><a class="nav-link" href="#">STAFF</a></li>
            <li class="nav-item {{ (Request::is('cine') ? 'active' : '') }}">
                <a class="nav-link" href="{{ route('cine') }}">CINE</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">FOTOS</a></li>
            <li class="nav-item"><a class="nav-link" href="#">LOS 20+</a></li>
        </ul>
        </span>
    </div>
</nav>

@yield('content')
@stack('scripts')
</body>
</html>