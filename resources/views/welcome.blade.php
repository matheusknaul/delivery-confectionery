@extends('layouts.main')

@section('title', 'Doce & Café da Anne')

@section('content')

<section class="section-search">
    <div id="search-container" class="col-md-12">
        <h1>Procurar no Cardápio</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="promotion-day-container" class="col-md-12">
        <h2>Promoções do Dia</h2>
        <p class="subtitle">Veja as promoções do dia</p>

        <!-- Inicio Foreach -->
        <div id="cards-container" class="row">
            @foreach ($products as $product)
            <div class="card col-md-3">
                <img src="/img/products/{{$product->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">R$5,00</li>
                </ul>
                <div class="card-body">
                    <input type="submit" class="btn btn-primary" id="liveToastBtn" value="Colocar no Carrinho">
                </div>
            </div>
            @endforeach
        </div>
        <!-- Fim do Foreach -->
    </div>
</section>
<section class="section-menu">
    <!-- Início Foreach dos tipos de comida -->
        <!-- Idéia de design: para cada sessão de tipos diferentes, colocar um background relativo a cultura -->
        <h2>Ex: Café Italiano</h2>
        <div class="menu-container">
            <!-- Início Foearch dos cards do cardápio do tipo -->
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">4 Cupcakes Red Velvet</h5>
                  <p class="card-text">4 Cupcakes deliciosos com a massa Red Velvet.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">De R$50,00 por R$25,00</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Colocar no Carrinho</a>
                </div>
            </div>
            <!-- Fim Foearch dos cards do cardápio do tipo-->
        </div>
    <!-- Fim Foreach dos tipos de comida -->
</section>


<!-- Inicio do IF Search -->
<section class="section-result">
    <h2>Buscando por:</h2>
</section>
<!-- Fim do IF Search -->


@endsection
