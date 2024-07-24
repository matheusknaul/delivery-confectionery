<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){
            $products = $search;
        }else{
            $products = "Nada até agora";
        }

        return view('welcome', ['products' => $products]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $product = new Product;

        //Product attributes
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->special = $request->special;
        $product->category = $request->category;

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName); //estudar sobre esse método move

            $event->image = $imageName;
        }

        return redirect('/')->with('msg', 'Produto criado com sucesso');
    }


}
