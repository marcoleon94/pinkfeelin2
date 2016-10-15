@extends('layouts.app')
@section('content')

  <div class="page-login">
      <div class="center">
              <div class="card bordered" style="margin:5% auto; max-width:800px; border-radius: 13px;">
                  <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px;">
                    <div class="row">
                      <div class="col s1" style="margin-top: 13px;">
                          <i class="material-icons medium white-text">shopping_cart</i>
                      </div>
                      <div class="col s11 left-align">
                        <h3 style="color:white;">Carrito</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-content">
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('carrito') }}">
                          {{ csrf_field() }}
                          @foreach ($cart as $item)
                            <div class="row">
                              <div class="col s12 carro">
                                <div class="row">
                                  <div class="col s4">
                                    <img class="carro" src="{{$item->options->image}}" alt="Producto" />
                                  </div>
                                  <div class="col s8">
                                      <p>
                                        Producto: {{$item->name}}<br>
                                      </p>

                                      <p>
                                        Precio: ${{$item->price}}<br>
                                      </p>

                                      <p>
                                        Marca: {{$item->options->mark}}<br>
                                      </p>

                                      <div class="row">

                                        <a class="col s1 btn" href="{{url("carrito/$item->id/add")}}">+</a>
                                        <input class="col s1 " type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2" readonly>
                                        <a class="col s1 btn" href="{{url("carrito/$item->id/sub")}}">-</a>
                                        <br>
                                        <br>
                                        <br>
                                      </div>
                                      <p>
                                        Subtotal: ${{$item->subtotal}}<br>
                                      </p>
                                      </div>
                                  <a class="btn waves-effect waves-light right" style="margin-top:-10px; margin-right: -5px;" href="{{url('/carrito', $item->id)}}" id="quitar">Quitar
                                    <i class="material-icons right">mode_edit</i>
                                  </a>
                                </div>

                              </div>
                            </div>
                          @endforeach
                          <div class="row right">
                            <p>
                            Impuestos: ${{Cart::tax()}}</p>
                            <h5>Total: ${{Cart::total()}}</h5>

                          </div>
                          <br><br><br>
                          <a class="btn waves-effect waves-light right" style="margin-top:5px;" href="{{url('/realizarcompra')}}" id="compra">Realzar Compra
                            <i class="material-icons right">send</i>
                          </a>
                      </form>
                  </div>
              </div>
      </div>
  </div>


@endsection
