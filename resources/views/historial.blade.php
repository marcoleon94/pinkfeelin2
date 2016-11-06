@extends('layouts.app')
@section('title','Historial de Compras')
@section('content')
  @if ($compras)
    <div class="container">
      <div class="card">
        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
            <div class="row">
                <div class="col s12 center">

                    <h5>Historial de Compras</h5>
                </div>
            </div>
        </div>
      <div class="card-content">
      <table class="highlight">
        <thead>
          <tr>
              <th data-field="id">No. Compra</th>
              <th data-field="name">Importe</th>
              <th data-field="price">Fecha</th>
              <th data-field="show">Detalles</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($compras as $compra )
            <form action="{{route('realizarcompra.show',$compra->id )}}" method="get">
              {{ csrf_field() }}
            <tr>
              <td>{{$compra->id}}</td>
              <td>{{$compra->importe}}</td>
              <td>{{$compra->created_at}}</td>
              <td><button class="btn waves-effect waves-light" type="submit" name="button"><i class="material-icons">description</i></button></td>

            </tr>
            </form>
          @endforeach
        </tbody>
      </table>
      </div>
      </div>

  </div>
    @else
    <div class="center">
      <h3>No existen registros de compras para esta cuenta.</h3>
    </div>
    @endif


@endsection
