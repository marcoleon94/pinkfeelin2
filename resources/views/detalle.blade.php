@extends('layouts.app')

@section('content')
  @if ($contenido)
    <div class="container">

      <table class="highlight">
        <thead>
          <tr>
              <th data-field="id">No. Compra</th>
              <th data-field="name">Producto</th>
              <th data-field="price">Cantidad</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($contenido as $item )
            <tr>
              <td>{{$item->id_compra}}</td>
              <td>{{$item->nombre}}</td>
              <td>{{$item->cantidad}}</td>

            </tr>
            </form>
          @endforeach
        </tbody>
      </table>

  </div>
    @else
    <div class="center">
      <h3>No existen detalles de esta compra.</h3>
    </div>
    @endif


@endsection
