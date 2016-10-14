@extends('layouts.app')
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
                                ${{$product->precio}} MNX.</p>
                        <div class="row">
                            <div class="input-field col s3 push-s4">
                            <select name="cant">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
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
