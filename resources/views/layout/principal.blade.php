<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MetPETs')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('layout.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

</head>

<body style="padding-top: 55px; background-color: #FAF7F2; color: #8B5E3C;">
    <nav class="navbar navbar-expand-lg  text-light  navbar-bg  fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand font-custom d-flex align-items-center text-light" href="{{ route('home') }}">
                <img src="Lgompwt_sf.png" width="30" height="24" class="me-2">
                Met<b>PETs</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                <div class="navbar-nav">
                    <a class="nav-link active text-light font-custom" aria-current="page" href="{{ route('home') }}">Descobrir</a>
                    <a class="nav-link text-light font-custom" href="{{ route('procurar') }}">Procurar</a>
                    <a class="nav-link text-light font-custom" href="{{ route('servicos') }}">Serviços</a>
                </div>


                <div class="ms-auto d-none d-lg-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>
    </nav>
    @yield('content')
</body>

</html>
