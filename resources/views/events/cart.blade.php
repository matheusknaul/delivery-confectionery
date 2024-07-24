@extends('layouts.main')

@section('title', 'Carrinho')

@section('content')

@if($cart_list)

    @foreach ($cart_list as $item)
    <p>{{$item}}</p>
    @endforeach

@else
    <p>Você ainda não colocou produtos no carrinho!</p>
    <a href="/">Voltar para o cardápio.</a>

@endif



@endsection
