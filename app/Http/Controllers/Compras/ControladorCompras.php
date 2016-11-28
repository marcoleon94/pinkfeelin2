<?php

namespace pinkfeelin\Http\Controllers\Compras;

use Illuminate\Http\Request;

use pinkfeelin\Http\Requests;
use pinkfeelin\Http\Controllers\Controller;
use Cart;
use Auth;
use Session;

class ControladorCompras extends Controller
{

    public function __construct()
    {
      $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cart=Cart::content();
      return view('realizarcompra')->with('cart', $cart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        \pinkfeelin\Models\User\Address::create([
           'estado' => bcrypt($request['estado']),
           'ciudad' => bcrypt($request['ciudad']),
           'colonia' => bcrypt($request['colonia']),
           'calle' => bcrypt($request['calle']),
           'numero' => bcrypt($request['numero']),
           'cp' => bcrypt($request['cp']),
           'id_usuario' => $request['id_usuario'],
       ]);
        \pinkfeelin\Models\User\Payment::create([
         'id_usuario' =>$request['id_usuario'],
         'nombre' =>bcrypt($request['nombre']),
         'numero' =>bcrypt($request['numero_tarjeta']),
         'mes_exp' =>bcrypt($request['mes_exp']),
         'año_exp' =>bcrypt($request['año_exp']),
         'codigo' =>bcrypt($request['codigo']),
         'tipo' =>$request['tipo'],
       ]);
       $buy= new \pinkfeelin\Models\Buy\Buy;
        $id_compra=rand(30000,500000);
        $buy->id=$id_compra;
         $buy->id_usuario =$request['id_usuario'];
         $buy->importe =$request['importe'];
          $buy->save();
        $cart=Cart::content();
        foreach ($cart as $item) {
          # code...
          $content= new \pinkfeelin\Models\Buy\Contain;
          $content->id_compra=$id_compra;
          $content->id_producto=$item->id;
          $content->cantidad=$item->qty;
          $content->save();
          $product=\pinkfeelin\Models\Product\Product::FindOrFail($item->id);
          $product->stock=$product->stock-$item->qty;
          $product->save();
        }
        Cart::destroy();
        Session::flash('compra','Se ha realizado tu compra exitosamente!');
        return redirect('/index');

    }

      public function historial()
      {
        $id_usuario= Auth::user()->id;
        $compras = \pinkfeelin\Models\Buy\Buy::select('id', 'importe', 'created_at')->where('id_usuario', $id_usuario)->paginate('10');
        return view('historial')->with('compras',$compras);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        $id_usuario=Auth::user()->id;
        $contenido= \pinkfeelin\Models\Buy\Contain::select('contains.id', 'id_compra', 'id_producto', 'cantidad','buys.id_usuario as id_usuario', 'products.nombre as nombre')
          ->join('buys','buys.id','=','contains.id_compra')->join('products','products.id','=','contains.id_producto')->where('buys.id_usuario', $id_usuario)->where('id_compra', $id)->get();
        return view('detalle')->with('contenido', $contenido);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
