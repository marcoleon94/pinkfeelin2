<?php

namespace pinkfeelin\Http\Controllers\Carrito;

use Illuminate\Http\Request;

use pinkfeelin\Http\Requests;
use pinkfeelin\Http\Controllers\Controller;
use Cart;

class ControladorCarrito extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $porduct=\pinkfeelin\Models\Product\Product::select('*')->where('id', $id)->first();
        Cart::add($product->id,$product->nombre,1,$product->precio);
        return view("carrito")->with('product', $product);
    }

    public function carrito(){
      if (Request::isMetod('post')){
        dd("hola");
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function addToCart($id){
       $porduct=\pinkfeelin\Models\Product\Product::select('*')->where('id', $id)->first();
       Cart::add('123123','producto','1','55');
       return view('/carrito')->with('product', $product);

     }
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
