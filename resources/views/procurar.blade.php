@extends('layout.principal')
<link rel="stylesheet" href="{{ asset('home.css') }}">
@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center">
            <h2 class="mb-4 text-center font-custom">Procurar Produtos</h2>
        </div>

        <form class="d-flex" role="search" style="margin-top: 20px;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-secondary" type="submit">Procurar</button>
        </form>
    </div>

    <div class="container mt-5 mb-5" <div class="d-flex justify-content-center">
        <div class="row g-4">
            
            <div class="card text-center justify-content-center shadow mb-4" style="width: 18rem; margin-left: auto;">
                <h2 class="mb-4 font-custom text-center">Filtros</h2>
                <button class="btn btn-outline-secondary justify-content-center"
                    style="margin: 5px; width: 75%; margin-left: auto; margin-right: auto;">Alimentos</button>
                <button class="btn btn-outline-secondary justify-content-center"
                    style="margin: 5px; width: 75%; margin-left: auto; margin-right: auto;">Higienes</button>
                <button class="btn btn-outline-secondary justify-content-center"
                    style="margin: 5px; width: 75%; margin-left: auto; margin-right: auto;">Brinquedos</button>
                <button class="btn btn-outline-secondary justify-content-center"
                    style="margin: 5px; width: 75%; margin-left: auto; margin-right: auto;">Conforto</button>
                <button class="btn btn-outline-secondary justify-content-center"
                    style="margin: 5px; width: 75%; margin-left: auto; margin-right: auto;">Acessórios</button>
            </div>
        </div>
    @endsection
