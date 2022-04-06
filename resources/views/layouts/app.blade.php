<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titol')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid d-flex flex-row">
        <a class="navbar-brand" href="/">
                        <img src="{{ asset('img/logo.jpg') }}" alt="logo" width="50" height="50">
            Escape Room App
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="container-fluid d-flex flex-row">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if(Auth::guest())
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tasques">Ranking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tasques">Botiga</a>
                </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <li class="nav-item dropdown">
                <a class=" btn btn-light nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-person" viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/login">Accedir al escape</a></li>
                </ul>
            </li>
            @elseif(Auth::user()->rol=='admin')
                <li class="nav-item">
                    <span class="nav-link active">{{Auth::user()->username}}</span>
                </li>
                <li><a class="btn btn-primary" href="/index">Usuaris</a></li>
                <li><a class="btn btn-success" href="/jocs">Jocs</a></li>
                <li><a class="btn btn-danger" href="/salas">Sales</a></li>
                <li><a class="btn btn-warning" href="/logout">Logout</a></li>

            @elseif(Auth::user()->rol=='user')
                <li class="nav-item">
                    <span class="nav-link active">{{Auth::user()->username}}</span>
                </li>
                <li><a class="btn btn-primary" href="/logout">Logout</a></li>
            @endif
        </div>
    </div>

</nav>

<div class="container">
    @yield('contingut')
</div>
</body>
</html>
