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
                      <h3 style="color:white;">Registrate</h3>
                    </div>
                  </div>
                </div>
                <div class="card-content">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                      <div class="row">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="input-field col s6">
                                <!-- <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"> -->
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" id="name" class="validate" name="name" value="{{old('name')}}">
                                <label for="name" class="left-align">Nombre</label>
                                @if ($errors->has('name'))
                                  <div class="left-align">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <div class="input-field col s6">
                                <!-- <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"> -->
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" id="lastname" class="validate" name="lastname" value="{{old('lastname')}}" >
                                <label for="lastname" class="left-align">Apellido</label>
                                @if ($errors->has('lastname'))
                                  <div class="left-align">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <div class="input-field col s6">
                                <!-- <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"> -->
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" id="telefono" class="validate" name="telefono" value="{{old('telefono')}}">
                                <label for="telefono" class="left-align">Telefono</label>
                                @if ($errors->has('telefono'))
                                  <div class="left-align">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                            <div class="input-field col s6">
                              <label>Sexo</label><br>
                                <p>
                                  <input class="with-gap" name="sexo" type="radio" id="hombre" value="hombre" />
                                  <label for="hombre">Hombre</label>
                                </p>
                                <p>
                                  <input class="with-gap" name="sexo" type="radio" id="mujer" value="mujer" />
                                  <label for="mujer">Mujer</label>
                                </p>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fecha_nac') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">today</i>
                              <input type="date" class="datepicker" id="fecha" name="fecha_nac" value="{{old('fecha_nac')}}">
                              <label for="fecha" class="left-align">Dia de Nacimiento</label>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="input-field col s12">
                                <!-- <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"> -->
                                <i class="material-icons prefix">email</i>
                                <input type="text" id="email" class="validate" name="email" value="{{old('email')}}">
                                <label for="email" class="left-align">E-mail</label>

                                @if ($errors->has('email'))
                                  <div class="left-align">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                            <div class="input-field col s6">
                                <!-- <input id="password" type="password" class="form-control" name="password"> -->
                                <i class="material-icons prefix">lock</i>
                  	        		<input type="password" id="password" class="validate" name="password">
                  	        		<label for="password" class="left-align" >Contraseña</label>

                                @if ($errors->has('password'))
                                  <div class="left-align">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <!-- <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label> -->

                            <div class="input-field col s6">
                                <!-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation"> -->
                                <i class="material-icons prefix">lock_outline</i>
                                <input type="password" id="password_confirm" class="validate" name="password_confirmation">
                                <label for="password_confirmation" class="left-align" >Repetir Contraseña</label>
                                @if ($errors->has('password_confirmation'))
                                  <div class="left-align">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                              <button class="btn waves-effect waves-light right" type="submit" name="action" style="margin-top:30px;">Registrar
                                <i class="material-icons right">mode_edit</i>
                              </button>
                            </div>
                        </div>
                      </div>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection
