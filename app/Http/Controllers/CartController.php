<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){

        $cart_list = NULL;

        return view('events.cart', ['cart_list'=>$cart_list]);
    }

    public function store(Request $request){

        return redirect("events.order")->with('msg', 'Pedido realizado com sucesso!');
    }

    public function show_cart(){

    }

    public function show_order(){

        $order = "alow";

        return view('events.order', ['order'=>$order]);
    }
}
