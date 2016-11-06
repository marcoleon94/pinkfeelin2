@extends('layouts.app')
@section('title','Detalle de Compra')
@section('content')
    <div class="container">
      <div class="card">
        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
            <div class="row">
                <div class="col s12 center">
                    <h5>Detalles de Compra</h5>
                </div>
            </div>
        </div>
        <div class="card-content">
          @if ($contenido)
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

    @else
    <div class="card-content center">
      <h3>No existen detalles de esta compra.</h3>
    </div>
        @endif
      </div>
    </div>
    <a class="btn right " name="regresar" href="/realizarcompra/historial">Regresar</a>
</div>


@endsection
