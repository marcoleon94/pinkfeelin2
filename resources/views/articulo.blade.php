@extends('layouts.app')
@section('title','{{$product->nombre}}')
@section('content')
     <div class="container">
         <div class="center">
            <h2>Tienda</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row">
               <form class="" action="{{url("/carrito")}}" method="post">
                <div class="col s5" style="margin: 10px;">
                    <img class="responsive-img materialboxed" src="{{$product->imagen}}" name="imag" />
                </div>
                 <div class="col s6">
                  <div class="card bordered pink darken-2 " style="border-radius: 13px;">
                    <div class="card-content white-text pink lighten-3">
                      <span class="card-title">{{$product->nombre}}</span>
                      <p>{{$product->descripcion}}
                          <br>
                              {{$product->marca}}
                          <br>
                      </p>
                          @if ($ofertas)
                            <p style="text-decoration:line-through;">
                              ${{$product->precio}} MNX.</p><p>
                                ${{$product->precio-($product->precio*$ofertas->descuento)}} MNX.</p>
                                <input type="hidden" name="oferta" value="{{$ofertas->descuento}}">
                          @else
                              <p>${{$product->precio}} MNX.</p>
                          @endif
                        <div class="row">
                            <div class="input-field col s3 push-s4">
                            <select name="cant">
                            @for($i=1; $i<=$product->stock; $i++)
                              <option value="{{$i}}">{{$i}}</option>
                            @endfor
                            </select>
                            <label>Cantidad</label>
                            </div>
                            <div class="col s2 push-s4 ">
                            <p>Disponibles: {{$product->stock}}</p>
                            </div>
                          </div>
                    </div>
                    <div class="card-action">
                      <input type="hidden" name="prodid" value="{{$product->id}}">
                      <input type="hidden" name="imag" value="{{$product->imagen}}">
                      <input type="hidden" name="marc" value="{{$product->marca}}">
                      <input type="hidden" name="tip" value="{{$product->tipo}}">
                      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                      <button class="btn" href="#" type="submit" id="agregar">Añadir a tu carrito</button>
                    </div>
                  </div>
                </div>
                </form>
             </div>
         </div>
       </div>
@endsection
