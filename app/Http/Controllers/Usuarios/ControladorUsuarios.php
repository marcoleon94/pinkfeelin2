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
      return view('bolsas');
    }
    public function vestidos(){
      return view('vestidos');
    }
    public function lentes(){
      return view('lentes');
    }
    public function pdbelleza(){
      return view('pdbelleza');
    }
}
