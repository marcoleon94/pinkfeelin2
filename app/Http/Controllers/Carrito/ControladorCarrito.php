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
        $cart=Cart::content();
        return view("carrito")->with('cart',$cart);
    }

    public function carrito(Request $request){
      if ($request->isMethod('post')){
        $prodid=$request->input('prodid');
        $cant=$request->input('cant');
        $imag=$request->input('imag');
        $marc=$request->input('marc');

        $product=\pinkfeelin\Models\Product\Product::find($prodid);
        Cart::add(array(['id'=>$product->id, 'name'=>$product->nombre, 'qty'=>$cant, 'price'=>$product->precio, 'options' =>['image'=>$imag, 'mark'=>$marc]]));
      }
      $cart=Cart::content();

      //dd($cart);
      return view("carrito")->with('cart',$cart);
    }
    public function increase($product_id,$increment){
      //increment the quantity
      $product=\pinkfeelin\Models\Product\Product::find($product_id);
     $rowId = Cart::search(function($item, $key) use ($product_id){
       return $item->id == $product_id;
       });
     //$item = Cart::get($rowId[0]);
     if($increment =="add"){
     Cart::update($rowId->first()->rowId, $rowId->first()->qty + 1);
    }else{
     Cart::update($rowId->first()->rowId, $rowId->first()->qty - 1);
    }
     $cart=Cart::content();
     //dd($cart);
     return view("carrito")->with('cart',$cart);

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
        $itemsCart = Cart::search(function($item, $key) use ($id){
          return $item->id == $id;
        });
        // dd($itemsCart->first()->rowId;
        Cart::remove($itemsCart->first()->rowId);
        $cart=Cart::content();
        // dd($cart);
        return view("carrito")->with('cart',$cart);

    }

}
