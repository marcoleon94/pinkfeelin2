<?php

namespace pinkfeelin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use pinkfeelin\Http\Requests;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = \pinkfeelin\Models\User\User::find(1);

        return $user->toJson();
    }

    public function auth(Request $request)
    {
      $email=$request->input("email");
      $password=$request->input("password");
      if(Auth::attempt(['email' => $email, 'password' => $password])){

        return(Auth::user());
      }else{
        return("Error: $email $password");
      }
    }
    public function historial(Request $request)
    {
      $id=$request->input("id");
      $historial= \pinkfeelin\Models\Buy\Buy::select('id', 'importe', 'created_at')->where('id_usuario', $id)->get();
      if($historial!=null){
        return ($historial);
      }else{
        return("Error: No hay registros de compra");
      }
    }

    public function detalle(Request $request)
    {
      $id_compra=$request->input("id_compra");
      $contenido= \pinkfeelin\Models\Buy\Contain::select('contains.id', 'id_compra', 'id_producto', 'cantidad','buys.id_usuario as id_usuario', 'products.nombre as nombre')
        ->join('buys','buys.id','=','contains.id_compra')->join('products','products.id','=','contains.id_producto')->where('id_compra', $id_compra)->get();
        if($contenido!=null){
          return ($contenido);
        }else{
          return ("Error: No se encontraron items en la compra");
        }
    }
}
