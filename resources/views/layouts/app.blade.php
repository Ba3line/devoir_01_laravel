<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Nous contacter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/savPage">SAV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/partenariatPage">Partenariat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/infosPage">Infos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/equipePage">Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/frontendPage">Frontend</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/backendPage">Backend</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
