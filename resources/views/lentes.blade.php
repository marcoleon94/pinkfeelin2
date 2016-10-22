@extends('layouts.app')

@section('content')
     <div class="container">
         <div class="center">
            <h2>Lentes</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row" style="margin:4%;">
                   @foreach ($products as $product)
                   <div class="col s4 m4">
                      <div class="card">
                          <div class="card-image">
                            <a href="/articulo/{{$product->id}}"><img class="responsirve-img articulo" src="{{$product->imagen}}"></a>
                            <span class="card-title amber-text text-darken-1">{{$product->nombre}}</span>
                          </div>
                          <div class="card-content pink lighten-2">
                            <p>{{$product->descripcion}} {{$product->marca}}</p>
                                  <p>${{$product->precio}} MNX.</p>
                          </div>
                          <div class="card-action pink darken-4">
                            <a href="/articulo/{{$product->id}}">Añadir a tu carrito</a>
                          </div>
                        </div>
                   </div>
                   @endforeach
               </div>
               <div class="center">
                 {!!$products->links()!!}
               </div>
         </div>
     </div>
    @endsection
