<?php

namespace pinkfeelin\Http\Controllers\Usuarios;

use Illuminate\Http\Request;

use pinkfeelin\Http\Requests;
use pinkfeelin\Http\Controllers\Controller;
use Cart;

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
      $products = \pinkfeelin\Models\Product\Product::select('products.id', 'products.nombre', 'products.precio', 'products.tipo', 'products.marca',
      'products.descripcion', 'products.stock','products.imagen', 'offers.descuento as descuento')->join('offers','offers.id_producto','=','products.id')->get();
      return view('ofertas')->with('products', $products);
    }
    public function atencion(){
      return view('atencion');
    }
    public function bolsas(){
      $products = \pinkfeelin\Models\Product\Product::select('*')->where('tipo', 2)->paginate(6);
      return view('bolsas')->with('products', $products);
    }
    public function vestidos(){
      $products = \pinkfeelin\Models\Product\Product::select('*')->where('tipo', 1)->paginate(6);
      return view('vestidos')->with('products', $products);
    }
    public function lentes(){
      $products = \pinkfeelin\Models\Product\Product::select('*')->where('tipo', 3)->paginate(6);
      return view('lentes')->with('products', $products);
    }
    public function articulo($id){
      $product =\pinkfeelin\Models\Product\Product::select('*')->where('id', $id)->first();
      $ofertas =\pinkfeelin\Models\Product\Offer::select('*')->where('id_producto', $id)->first();
      return view('articulo')->with('product', $product)->with('ofertas', $ofertas);
    }
    public function pdbelleza(){
      $products = \pinkfeelin\Models\Product\Product::select('*')->where('tipo', 4)->paginate(6);
      return view('pdbelleza')->with('products',$products);
    }
    public function realizarcompra(){
      $cart=Cart::content();
      return view('realizarcompra')->with('cart', $cart);
    }


}
