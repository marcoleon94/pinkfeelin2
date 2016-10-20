
<html>
<head>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background-color: #ddd;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
      text-align: left;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>
<body>
  <header>
    <h1>Pinkfeelin</h1>
    <h2>Ticket de Pago</h2>
    <p>
      Fecha:{{$date}}
    </p>
  </header>
  <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
              Pinkfeelin
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>
  <div id="content">

    <p>
      Articulos:
    </p>

    <table cellpadding="10px" align="center">
      <tr>
        <td>
          <strong>Articulo</strong>
        </td>
        <td>
          <strong>Cantidad</strong>
        </td>
        <td>
          <strong>Precio</strong>
        </td>
        <td>
          <strong>Subtotal</strong>
        </td>
      </tr>
      @foreach ($products as $product)
        <tr>
          <td>
            {{$product->name}}
          </td>
          <td align="center">
            {{$product->qty}}
          </td>
          <td>
            ${{$product->price}}
          </td>
          <td>
            ${{$product->subtotal}}
          </td>
        </tr>
      @endforeach

    </table>

    <h4 align="right">Impuesto: ${{Cart::tax()}}</h4>
    <h4 align="right">Subtotal: ${{Cart::subtotal()}}</h4>
    <h2 align="right">Total: ${{Cart::total()}}</h2>


    {{-- <p style="page-break-before: always;"> --}}

  </div>
</body>
</html>
