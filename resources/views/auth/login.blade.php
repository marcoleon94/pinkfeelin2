@extends('layouts.app')

@section('content')
<div class="page-login">
    <div class="center">
        <div class="card bordered" style="margin:5% auto; max-width:400px; border-radius: 13px;">
          <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px;">
           		<div class="row">
          			<div class="col s2" style="margin-top: 5px;">
              			<i class="material-icons medium white-text">perm_identity</i>
          			</div>
          			<div class="col s10 left-align">
            			<h4>Inicia Sesion</h4>
          			</div>
        		</div>
        	</div>
                <div class="card-content">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="row">


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->
                            <div class="input-field col s12">
                                <!-- <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"> -->
                                <i class="material-icons prefix">account_circle</i>
            	        					<input type="text" id="email" class="validate" >
            	        					<label for="email" class="left-align"> E-mail</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                            <div class="input-field col s12">
                                <!-- <input id="password" type="password" class="form-control" name="password"> -->
                                <i class="material-icons prefix">lock</i>
            	        					<input type="password" id="password" class="validate">
            	        					<label for="password" class="left-align">Contraseña</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="row">

                              <div class="col s12">
                                <button class="btn waves-effect waves-red right" type="submit" name="action" style="margin-top: 30px;">Iniciar Sesion
                                  <i class="material-icons right">input</i>
                                </button>
                              </div>
                            <!--  <div class="col s6">
                                <a class=""  href="{{ url('/password/reset') }}">Olvide mi Contraseña</a>
                              </div> -->

                            </div>
                        </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
@endsection
