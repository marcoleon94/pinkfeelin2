@extends('layouts.app')

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
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                          {{ csrf_field() }}
                        <ul class="collapsible popout" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header active left-align"><i class="material-icons">room</i>Direccion</div>
                            <div class="collapsible-body">
                              <div class="row">
                                <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                                    <div class="input-field col s6">
                                        <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" id="estado" class="validate" >
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
                                        <input type="text" id="ciudad" class="validate" >
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
                                        <input type="text" id="colonia" class="validate" >
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
                                        <input type="text" id="calle" class="validate" >
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
                                        <input type="text" id="numero" class="validate" >
                                        <label for="numero" class="left-align">Numero</label>
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
                                        <input type="text" id="cp" class="validate" >
                                        <label for="cp" class="left-align">C.P.</label>
                                        @if ($errors->has('cp'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cp') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

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
                                  <a class="btn waves-effect waves-light noselec" id="credito">Tarjeta de Credito
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



                                 <div class="" id="dcred" style="display:none;">
                                   <div class="row">

                                     <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                         <div class="input-field col s12">
                                             <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                             <i class="material-icons prefix">account_circle</i>
                                             <input type="text" id="nombre" class="validate" >
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
                                             <input type="text" id="numero" class="validate" >
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
                                             <input type="text" id="codigo" class="validate" >
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
                                             <input type="text" id="mes_exp" class="validate" >
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
                                             <input type="text" id="año_exp" class="validate" >
                                             <label for="año_exp" class="left-align">Año de Expiracion</label>
                                             @if ($errors->has('año_exp'))
                                                 <span class="help-block">
                                                     <strong>{{ $errors->first('año_exp') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="input-field col s4" >
                                        <select class="icons">
                                          <option value="0" >Choose your option</option>
                                          <option value="1" data-icon="images/visa.png" class="left circle">Visa</option>
                                          <option value="2" data-icon="images/master.png" class="left circle">Mastercard</option>
                                          <option value="3" data-icon="images/american.png" class="left circle">American Express</option>
                                        </select>
                                      </div>


                                   </div>

                                 </div>

                                 <div class="" id="dpay" style="display:none;">
                                   <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                       <div class="input-field col s6">
                                           <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                           <i class="material-icons prefix">account_circle</i>
                                           <input type="text" id="nombre" class="validate" >
                                           <label for="nombre" class="left-align">Nombre del Propietario</label>
                                           @if ($errors->has('nombre'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('nombre') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>



                                 </div>

                                 <div class="" id="dox" style="display:none;">
                                   <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                       <div class="input-field col s6">
                                           <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                           <i class="material-icons prefix">account_circle</i>
                                           <input type="text" id="nombre" class="validate" >
                                           <label for="nombre" class="left-align">Nombre del Propietario</label>
                                           @if ($errors->has('nombre'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('nombre') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>

                                   <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                       <div class="input-field col s6">
                                           <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                           <i class="material-icons prefix">account_circle</i>
                                           <input type="text" id="nombre" class="validate" >
                                           <label for="nombre" class="left-align">Nombre del Propietario</label>
                                           @if ($errors->has('nombre'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('nombre') }}</strong>
                                               </span>
                                           @endif
                                       </div>
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
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="input-field col s6">
                                        <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" id="name" class="validate" >
                                        <label for="name" class="left-align">Nombre</label>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="input-field col s6">
                                        <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" id="name" class="validate" >
                                        <label for="name" class="left-align">Nombre</label>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <a class="btn waves-effect waves-light right" type="submit" name="action" style="margin-top:30px; margin-right: 30px;">Comprar
                                  <i class="material-icons right">mode_edit</i>
                                </a>

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
