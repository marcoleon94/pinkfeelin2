<?php

namespace pinkfeelin\Http\Controllers\Charts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use pinkfeelin\Http\Requests;
use pinkfeelin\Http\Controllers\Controller;

class ControladorChart extends Controller
{
    public function index()
    {
      $clientes =\pinkfeelin\Models\User\User::select(DB::raw('count(id) as cantidad'), 'sexo')->where('tipo','=','0')->groupBy('sexo')->get();
      $nuevos = \pinkfeelin\Models\User\User::select(DB::raw('count(id) as conteo, month(created_at) as mes'))->where(DB::raw('month(created_at)'),'=', DB::raw('month(sysdate())'))->get();
      $ventames = \pinkfeelin\Models\Buy\Buy::select(DB::raw('sum(replace(importe,\',\',\'\')) as total'))->where(DB::raw('month(created_at)'), '=',DB::raw('month(sysdate())'))->get();
      $masvendidos = \pinkfeelin\Models\Buy\Contain::select(DB::raw('sum(cantidad) as cantidad, tipo '))->join('products','id_producto','=','products.id')->groupBy('tipo')->orderBy('cantidad','desc')->get();
      $envios= \pinkfeelin\Models\User\Address::select(DB::raw('count(id) as ventas, if(colonia not like "",\'true\',\'false\') as envio '))->groupBy('envio')->get();
      $pagos= \pinkfeelin\Models\User\Payment::select(DB::raw('count(id) as ventas, if(numero not like "",\'tarjeta\',\'otro\') as tipodepago '))->groupBy('tipodepago')->get();
      $tarjetas=\pinkfeelin\Models\User\Payment::select(DB::raw('count(id) as ventas, if(numero not like "",\'tarjeta\',\'otro\') as tipodepago, tipo '))->groupBy('tipodepago','tipo')->get();
      $compras= \pinkfeelin\Models\User\User::select(DB::raw('name, lastname,year(sysdate())-substring_index(fecha_nac,\',\',-1) as edad, sexo, count(buys.id) as compras, sum(replace(importe,\',\',\'\')) as total_compras'))->join('buys','users.id','=','buys.id_usuario')->groupBy('users.id')->get();
      return view('chart')->with('clientes',$clientes)->with('nuevos', $nuevos)->with('ventames', $ventames)->with('masvendidos', $masvendidos)->with('envios', $envios)->with('pagos', $pagos)->with('tarjetas', $tarjetas)->with('compras', $compras);
    }
}
