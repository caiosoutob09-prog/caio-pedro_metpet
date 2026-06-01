@extends('layout.principal')
<link rel="stylesheet" href="{{ asset('home.css') }}">
@section('content')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="promo1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="promo2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="promo3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5 mb-5">
        <h2 class="mb-4 text-center font-custom">Produtos em Destaque</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card shadow h-100 d-flex flex-column">
                    <img src="produto1.jpg" class="card-img-top p-3" alt="Ração Golden Special">
                    <div class="card-body d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-3">
                            <h5 class="card-title text-center fw-bold">Ração Golden Special</h5>
                            <p class="card-text text-center text-muted small">Sabor Frango e Carne 15kg Premier Pet Para
                                Todas Grande Adulto.</p>
                        </div>
                        <a href="#" class="btn btn-outline-black text-center w-100">Ver Detalhes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow h-100 d-flex flex-column">
                    <img src="produto3.jpg" class="card-img-top p-3" alt="Cama Confort Pet Sonos">
                    <div class="card-body d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-3">
                            <h5 class="card-title text-center fw-bold">Cama Pequena Confort Pet Sonos</h5>
                            <p class="card-text text-center text-muted small">Cama ergonômica com tecido suede lavável, base
                                antiderrapante e proteção antimicrobiana para pets de pequeno e médio porte.</p>
                        </div>
                        <a href="#" class="btn btn-outline-black text-center w-100">Ver Detalhes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow h-100 d-flex flex-column">
                    <img src="produto2.jpg" class="card-img-top p-3" alt="Caixa de Areia Arqplast">
                    <div class="card-body d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-3">
                            <h5 class="card-title text-center fw-bold">Caixa de Areia Gatos Arqplast</h5>
                            <p class="card-text text-center text-muted small">Design inteligente que evita sujeira, feita
                                com plástico reciclado de alta resistência. (Areia não inclusa).</p>
                        </div>
                        <a href="#" class="btn btn-outline-black text-center w-100">Ver Detalhes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 d-flex flex-column">
                    <img src="produto4.jpg" class="card-img-top p-3" alt="Shampoo Granado Pet">
                    <div class="card-body d-flex flex-column justify-content-between flex-grow-1">
                        <div class="mb-3">
                            <h5 class="card-title text-center fw-bold">Granado Shampoo Pet Neutro</h5>
                            <p class="card-text text-center text-muted small">Fórmula sem parabenos com aminoácidos da seda.
                                Hidrata, amacia e perfuma suavemente todos os tipos de pelos.</p>
                        </div>
                        <a href="#" class="btn btn-outline-black text-center w-100">Ver Detalhes</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mb-5">
        <h2 class="mb-4 text-center font-custom">Ofertas Especiais</h2>
        <a class="figure" href="#">
            <img src="promojunina.png" id="promojunina" class="img-fluid rounded shadow"
                alt="clique aqui para ver as ofertas" href="#">
        </a>
    </div>

    <div class="container mt-5 mb-5">
        <h2 class="mb-4 text-center font-custom">Sobre nós</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <h1 class="mb-3 text-center" style="font-size: 500%;"><i class="bi bi-truck"></i></h1>
                <h3 class="text-center"> <b>Entrega rapida</b></h3>
                <p class="text-center text-muted">Entrega rápida e segura para todos os seus pets!</p>
            </div>
            <div class="col-md-3">
                <h1 class="mb-3 text-center" style="font-size: 500%;"><i class="bi bi-shield-check"></i></i></h1>
                <h3 class="text-center"> <b>Qualidade Certa</b></h3>
                <p class="text-center text-muted">Produtos selecionados de alta qualidade!</p>
            </div>
            <div class="col-md-3">
                <h1 class="mb-3 text-center" style="font-size: 500%;"><i class="bi bi-lock"></i></i></h1>
                <h3 class="text-center"> <b>Segurança</b></h3>
                <p class="text-center text-muted">Produtos seguros para o bem-estar dos seus pets!</p>
            </div>
            <div class="col-md-3">
                <h1 class="mb-3 text-center" style="font-size: 500%;"><i class="bi bi-chat-left-dots"></i></h1>
                <h3 class="text-center"> <b>Suporte ao Cliente</b></h3>
                <p class="text-center text-muted">Atendimento dedicado para resolver suas dúvidas!</p>
            </div>
          
        </div>
    </div>
@endsection
