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
      $cart=Cart::content();
      return view('realizarcompra')->with('cart', $cart);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function store(array $data)
    {
         app\Models\User\Address::create([
            'id_ususario' => $data['id_usuario'],
            'estado' => $data['estado'],
            'ciudad' => $data['ciudad'],
            'colonia' => $data['colonia'],
            'calle' => $data['calle'],
            'numer' => $data['numero'],
            'cp' => $data['cp'],
        ]);
         app\Models\User\Payment::create([
          'id_usuario' =>$data['id_usuario'],
          'nombre' =>$data['nombre'],
          'numero' =>$data['numero_tarjeta'],
          'mes_exp' =>$data['mes_exp'],
          'año_exp' =>$data['año_exp'],
          'codigo' =>$data['codigo'],
          'tipo' =>$data['tipo'],
        ]);
        $buy= new Buy;
          $buy->id_usuario =$data['id_usuario'];
          $buy->importe =$data['importe'];
           $buy->save();

    }

}
