@extends('layouts.app')
@section('title','Compras')
@section('content')

  <div class="page-login">
      <div class="center">
              <div class="card bordered" style="margin:5% auto; max-width:800px; border-radius: 13px;">
                  <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px;">
                    <div class="row">
                      <div class="col s1" style="margin-top: 13px;">
                          <i class="material-icons medium white-text">mode_edit</i>
                      </div>
                      <div class="col s11 left-align">
                        <h3 style="color:white;">Realizar Compra</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-content">
                      <form class="form-horizontal" role="form" method="POST" action="{{route('realizarcompra.store')}}">
                          {{ csrf_field() }}
                        <ul class="collapsible popout" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header active left-align"><i class="material-icons">room</i>Direccion</div>
                            <div class="collapsible-body">
                              <div class="row" style="margin-top:30px;">

                                <div class="col s6">
                                  <a class="btn waves-effect waves-light selec" id="bdireccion">Hasta mi casa
                                    <i class="material-icons right">credit_card</i>
                                  </a>
                                </div>

                                <div class="col s6">
                                  <a class="btn waves-effect waves-light noselec" id="bonsite">Acudir al local
                                    <i class="material-icons right">swap_horiz</i>
                                  </a>
                                </div>

                                <div id="ddirec">

                                  <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                                      <div class="input-field col s6">
                                          <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                          <i class="material-icons prefix">account_circle</i>
                                          <input type="text" id="estado" class="validate" name="estado" >
                                          <label for="estado" class="left-align">Estado</label>
                                          @if ($errors->has('estado'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('estado') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                                      <div class="input-field col s6">
                                          <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                          <i class="material-icons prefix">account_circle</i>
                                          <input type="text" id="ciudad" class="validate" name="ciudad" >
                                          <label for="ciudad" class="left-align">Ciudad</label>
                                          @if ($errors->has('ciudad'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('ciudad') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group{{ $errors->has('colonia') ? ' has-error' : '' }}">
                                      <div class="input-field col s6">
                                          <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                          <i class="material-icons prefix">account_circle</i>
                                          <input type="text" id="colonia" class="validate" name="colonia" >
                                          <label for="colonia" class="left-align">Colonia</label>
                                          @if ($errors->has('colonia'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('colonia') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group{{ $errors->has('calle') ? ' has-error' : '' }}">
                                      <div class="input-field col s8">
                                          <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                          <i class="material-icons prefix">account_circle</i>
                                          <input type="text" id="calle" class="validate" name="calle">
                                          <label for="calle" class="left-align">Calle</label>
                                          @if ($errors->has('calle'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('calle') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                                      <div class="input-field col s4">
                                          <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                          <i class="material-icons prefix">account_circle</i>
                                          <input type="number" id="numero" class="validate" name="numero" >
                                          <label for="numero" class="left-align">Numero Exterior</label>
                                          @if ($errors->has('numero'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('numero') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group{{ $errors->has('cp') ? ' has-error' : '' }}">
                                      <div class="input-field col s4">
                                          <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                          <i class="material-icons prefix">account_circle</i>
                                          <input type="number" id="cp" class="validate"  name="cp">
                                          <label for="cp" class="left-align">C.P.</label>
                                          @if ($errors->has('cp'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('cp') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>
                                </div>

                                <div id="dlocal" style="display:none;">
                                  <div class="row">
                                    <div class="col s12" style="margin-top:20px;">
                                      <h5 class="compra">Recoje tu pedido en cualquiera de nuestros locales:</h5>
                                    </div>
                                    <div class="col s12" style="margin-top:20px;">
                                      <ul style="margin-left: 30px;">
                                        <li class="left">Local 1: Del Carmen 420-422, Colonia del Carmen, Aguascalientes, Ags.</li>
                                        <li class="left">Local 2: Río Pirules 252, San Pablo, Aguascalientes, Ags.</li>
                                        <li class="left">Local 3: General José María Arteaga 647, Primavera, Aguascalientes, Ags.</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                @if (Auth::check())
                                  <input type="hidden" name="id_usuario" id="id_usuario" value="{{Auth::user()->id}}">
                                @endif
                                <a class="btn waves-effect waves-light right" id="bot1" style="margin-top:30px; margin-right: 30px;">Siguiente
                                  <i class="material-icons right">send</i>
                                </a>

                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="collapsible-header left-align" id="sec2"><i class="material-icons">receipt</i>Forma de pago</div>
                            <div class="collapsible-body">
                              <div class="row" style="margin-top:30px;">
                                <div class="col s4">
                                  <a class="btn waves-effect waves-light selec" id="credito">Tarjeta de Credito
                                    <i class="material-icons right">credit_card</i>
                                  </a>
                                </div>

                                <div class="col s4">
                                  <a class="btn waves-effect waves-light noselec" id="paypal">PayPal
                                    <i class="material-icons right">swap_horiz</i>
                                  </a>
                                </div>

                                <div class="col s4">
                                  <a class="btn waves-effect waves-light noselec" id="oxxo">Oxxo
                                    <i class="material-icons right">store</i>
                                  </a>
                                </div>



                                 <div class="" id="dcred">
                                   <div class="row">

                                     <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                         <div class="input-field col s12">
                                             <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                             <i class="material-icons prefix">account_circle</i>
                                             <input type="text" id="nombre" class="validate" name="nombre">
                                             <label for="nombre" class="left-align">Nombre del Propietario</label>
                                             @if ($errors->has('nombre'))
                                                 <span class="help-block">
                                                     <strong>{{ $errors->first('nombre') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                                         <div class="input-field col s8">
                                             <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                             <i class="material-icons prefix">account_circle</i>
                                             <input type="number" id="numero" class="validate" name='numero_tarjeta'>
                                             <label for="numero" class="left-align">Numero de Tarjeta</label>
                                             @if ($errors->has('numero'))
                                                 <span class="help-block">
                                                     <strong>{{ $errors->first('numero') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                                         <div class="input-field col s4">
                                             <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                             <i class="material-icons prefix">account_circle</i>
                                             <input type="number" id="codigo" class="validate" name="codigo">
                                             <label for="codigo" class="left-align">Codigo</label>
                                             @if ($errors->has('codigo'))
                                                 <span class="help-block">
                                                     <strong>{{ $errors->first('codigo') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group{{ $errors->has('mes_exp') ? ' has-error' : '' }}">
                                         <div class="input-field col s4">
                                             <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                             <i class="material-icons prefix">account_circle</i>
                                             <input type="number" id="mes_exp" class="validate" name="mes_exp">
                                             <label for="mes_exp" class="left-align">Mes de Expiracion</label>
                                             @if ($errors->has('mes_exp'))
                                                 <span class="help-block">
                                                     <strong>{{ $errors->first('mes_exp') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group{{ $errors->has('año_exp') ? ' has-error' : '' }}">
                                         <div class="input-field col s4">
                                             <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                             <i class="material-icons prefix">account_circle</i>
                                             <input type="number" id="año_exp" class="validate"  name="año_exp">
                                             <label for="año_exp" class="left-align">Año de Expiracion</label>
                                             @if ($errors->has('año_exp'))
                                                 <span class="help-block">
                                                     <strong>{{ $errors->first('año_exp') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="input-field col s4" >
                                        <select class="icons" name="tipo">
                                          <option value="0" >Tarjeta de credito</option>
                                          <option value="1" data-icon="images/visa.png" class="left circle">Visa</option>
                                          <option value="2" data-icon="images/master.png" class="left circle">Mastercard</option>
                                          <option value="3" data-icon="images/american.png" class="left circle">American Express</option>
                                        </select>
                                      </div>


                                   </div>

                                 </div>

                                 <div class="" id="dpay" style="display:none;">
                                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                       <div class="input-field col s6">
                                           <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                           <i class="material-icons prefix">account_circle</i>
                                           <input type="text" id="email" class="validate" >
                                           <label for="email" class="left-align">Correo Electronico</label>
                                           @if ($errors->has('email'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('email') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>

                                   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                       <div class="input-field col s6">
                                           <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                           <i class="material-icons prefix">account_circle</i>
                                           <input type="text" id="password" class="validate" >
                                           <label for="password" class="left-align">Contraseña</label>
                                           @if ($errors->has('password'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('password') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>


                                 </div>

                                 <div class="" id="dox" style="display:none;">
                                   <div class="col s12">


                                   <a class="btn waves-effect waves-light center" style="margin-top:30px; margin-right: 30px;" href="/pdf">Imprimir Ticket
                                     <i class="material-icons right">receipt</i>
                                   </a>
                                   </div>

                                 </div>

                                <a class="btn waves-effect waves-light right" id="bot2" style="margin-top:30px; margin-right: 30px;">Siguiente
                                  <i class="material-icons right">send</i>
                                </a>

                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="collapsible-header left-align" id="sec3"><i class="material-icons">done</i>Confirmacion</div>
                            <div class="collapsible-body">
                              <div class="row">
                                <div class="row">
                                  <h5 class="compra">El importe que se cobrara es de:</h5>
                                  <h5>Total: ${{Cart::total()}}</h5>
                                  <input type="hidden" name="importe" id="importe" value="{{Cart::total()}}">
                                </div>
                                <button class="btn waves-effect waves-light right" type="submit" name="action" id="comprar" style="margin-top:30px; margin-right: 30px;">Comprar
                                  <i class="material-icons right">mode_edit</i>
                                </button>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </form>
                  </div>
              </div>
      </div>
  </div>



  @endsection
