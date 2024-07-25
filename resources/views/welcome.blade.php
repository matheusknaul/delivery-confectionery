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
        <p>Veja as promoções do dia</p>

        <!-- Inicio Foreach -->

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cupcake Red Velvet</h5>
              <p class="card-text">Cupcake com massa Red Velvet e cobertura de chantilly</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">De R$5,50 por R$3,50</li>
            </ul>
            <div class="card-body">
                <form action="/" method="GET" id="1">
                    <input type="submit" class="btn btn-primary" value="Colocar no Carrinho">
                </form>
            </div>
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
