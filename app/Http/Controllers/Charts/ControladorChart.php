<?php

namespace pinkfeelin\Http\Controllers\Charts;

use Illuminate\Http\Request;

use pinkfeelin\Http\Requests;
use pinkfeelin\Http\Controllers\Controller;

class ControladorChart extends Controller
{
    public function index()
    {
      return view('chart');
    }
}
