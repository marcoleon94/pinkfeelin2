@extends('layouts.app')
@section('title','Registro')
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
                      <h3 style="color:white;">Modificar Datos</h3>
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
                                <input type="text" id="name" class="validate" name="name" value="{{$user->name}}">
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
                                <input type="text" id="lastname" class="validate" name="lastname" value="{{$user->lastname}}" >
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
                                <input type="number" id="telefono" class="validate" name="telefono" value="{{$user->telefono}}">
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

                                  @if ($user->sexo=="hombre")
                                    <p>
                                      <input class="with-gap" name="sexo" type="radio" id="hombre" value="hombre" checked />
                                      <label for="hombre">Hombre</label>
                                    </p>
                                    <p>
                                      <input class="with-gap" name="sexo" type="radio" id="mujer" value="mujer" />
                                      <label for="mujer">Mujer</label>
                                    </p>

                                  @else
                                    <p>
                                      <input class="with-gap" name="sexo" type="radio" id="hombre" value="hombre" />
                                      <label for="hombre">Hombre</label>
                                    </p>
                                    <p>
                                      <input class="with-gap" name="sexo" type="radio" id="mujer" value="mujer" checked/>
                                      <label for="mujer">Mujer</label>
                                    </p>

                                  @endif

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
                                <input type="text" id="email" class="validate" name="email" value="{{$user->email}}">
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
                        <div class="form-group">
                            <div>
                              <button class="btn waves-effect waves-light right" type="submit" name="action" style="margin-top:30px;">Modificar
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
