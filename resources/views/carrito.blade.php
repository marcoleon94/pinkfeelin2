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
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                          {{ csrf_field() }}

                          <div class="row">
                            <div class="col s12 carro">

                            </div>

                          </div>

                      </form>
                  </div>
              </div>
      </div>
  </div>


@endsection
