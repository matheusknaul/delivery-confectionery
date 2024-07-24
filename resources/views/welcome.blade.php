@extends('layouts.main')

@section('title', 'Doce & Café da Anne')

@section('content')

<section>
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

        <!-- Fim do Foreach -->

    </div>
</section>

@endsection
