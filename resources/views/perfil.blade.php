@extends('layouts.app')
@section('title','Perfil de Usuario')
@section('content')
     <div class="container">
         <div class="center">
            <h2>Perfil de Usuario</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row">
                <div class="col s5" style="margin: 10px;">
                    <img class="responsive-img materialboxed" src="/images/user.jpg" name="imag" />
                </div>
                 <div class="col s6">
                  <div class="card bordered pink darken-2 " style="border-radius: 13px;">
                    <div class="card-content white-text pink lighten-3">
                      <span class="card-title">Datos Personales</span>
                      <p>Nombre: {{$user->name}}</p>
                      <p>Apellidos: {{$user->lastname}}</p>
                      <p>Correo: {{$user->email}}</p>
                      <p>Telefono: {{$user->telefono}}</p>
                      <p>Sexo: {{$user->sexo}}</p>
                      <p>Cumpleaños: {{$user->fecha_nac}}</p>
                      <p>Miembro desde: {{$user->created_at}}</p>
                    </div>
                    <div class="card-action">
                      <a class="btn" href="/modificarperfil" type="submit" id="agregar">Editar Información <i class="material-icons right">edit</i></a>
                    </div>
                  </div>
                </div>
                </form>
             </div>
         </div>
       </div>
@endsection
