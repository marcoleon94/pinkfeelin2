<?php

namespace pinkfeelin\Http\Controllers\Usuarios;

use Illuminate\Http\Request;

use pinkfeelin\Http\Requests;
use pinkfeelin\Http\Controllers\Controller;

class ControladorUsuarios extends Controller
{
    //
    public function index(){
      return view('index');
    }
    public function contacto(){
      return view('contacto');
    }
    public function ofertas(){
      return view('ofertas');
    }
    public function atencion(){
      return view('atencion');
    }
    public function bolsas(){
      $products = \pinkfeelin\Models\Product\Product::all()->where('tipo', 2);
      return view('bolsas')->with('products', $products);
    }
    public function vestidos(){
      $products = \pinkfeelin\Models\Product\Product::all()->where('tipo', 1);
      return view('vestidos')->with('products', $products);
    }
    public function lentes(){
      $products = \pinkfeelin\Models\Product\Product::all()->where('tipo', 3);
      return view('lentes')->with('products', $products);
    }
    public function articulo($id){
      $product =\pinkfeelin\Models\Product\Product::select('*')->where('id', $id)->first();
      return view('articulo')->with('product', $product);
    }
    public function pdbelleza(){
      $products = \pinkfeelin\Models\Product\Product::all()->where('tipo', 4);
      return view('pdbelleza')->with('products',$products);
    }
    public function realizarcompra(){
      return view('realizarcompra');
    }
}
