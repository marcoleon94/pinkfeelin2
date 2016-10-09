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
                          @foreach ($products as $product)
                            <div class="row">
                              <div class="col s12 carro">
                                <div class="row">
                                  <div class="col s4">
                                    <img class="carro" src="{{$product->imagen}}" alt="Producto" />
                                  </div>
                                  <div class="col s8">
                                      <p>
                                        Producto: {{$product->nombre}}<br>
                                      </p>

                                      <p>
                                        Precio: ${{$product->precio}}<br>
                                      </p>

                                      <p>
                                        Marca: {{$product->marca}}<br>
                                      </p>

                                      <p>
                                        Cantidad: {{$product->stock}}<br>
                                      </p>

                                      <p>
                                        Total: <br>
                                      </p>
                                  </div>
                                </div>

                              </div>
                            </div>
                          @endforeach
                      </form>
                  </div>
              </div>
      </div>
  </div>


@endsection
