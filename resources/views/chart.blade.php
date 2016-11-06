@extends('layouts.app')
@section('title','Dashboard')
@section('content')





      <div class="container">
         <div class="center">
            <h2>Dashboard</h2>
           <div class="divider"></div>
          <!--Segunda Sección-->
            <div class="row" style="margin:4%; text-align:left;">
                <div class="col s12">
                    <div class="card bordered" style="margin:5% auto; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">
                                <div class="col s12 left-align">
                                    <h4>Grafica</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                          <div id="dashboard_div">
                            <!--Divs that will hold each control and chart-->
                            <div id="filter_div"></div>
                            <div id="chart_div"></div>

                          </div>
                          @foreach ($nuevos as $nuevo)
                            ['{{$nuevo->mes}}',{{$nuevo->conteo}}],
                          @endforeach
                          @foreach ($ventames as $venta )
                            [{{$venta->total}}]

                          @endforeach
                          @foreach ($masvendidos as $masvendido )
                            <br>[{{$masvendido->tipo}},{{$masvendido->cantidad}}]

                          @endforeach
                          @foreach ($envios as $envio)
                            <br>[{{$envio->envio}}, {{$envio->ventas}}]

                          @endforeach
                          @foreach ($pagos as $pago)
                            <br>[{{$pago->tipodepago}},{{$pago->ventas}} ]

                          @endforeach
                          @foreach ($tarjetas as $tarjeta)
                            <br>[{{$tarjeta->tipo}},{{$tarjeta->tipodepago}},{{$tarjeta->ventas}}]

                          @endforeach
                          @foreach ($compras as $compra)
                            <br>[{{$compra->name}},{{$compra->lastname}},{{$compra->compras}},{{$compra->total_compras}}]

                          @endforeach
                            <div id="columnchart_material" style="width: 900px; height: 500px;"></div>

                         </div>
                    </div>
                </div>





            </div>
        </div>
    </div>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">

      // Load the Visualization API and the controls package.
      google.charts.load('current', {'packages':['corechart', 'controls']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawDashboard);

      // Callback that creates and populates a data table,
      // instantiates a dashboard, a range slider and a pie chart,
      // passes in the data and draws it.
      function drawDashboard() {

        // Create our data table.
        var data = google.visualization.arrayToDataTable([
          ['Sexo', 'Cantidad de Usuarios'],
          @foreach ($clientes as $cliente)
            ['{{$cliente->sexo}}',{{$cliente->cantidad}}],
          @endforeach
        ]);

        // Create a dashboard.
        var dashboard = new google.visualization.Dashboard(
            document.getElementById('dashboard_div'));

        // Create a range slider, passing some options
        var donutRangeSlider = new google.visualization.ControlWrapper({
          'controlType': 'NumberRangeFilter',
          'containerId': 'filter_div',
          'options': {
            'filterColumnLabel': 'Cantidad de Usuarios'
          }
        });

        // Create a pie chart, passing some options
        var pieChart = new google.visualization.ChartWrapper({
          'chartType': 'PieChart',
          'containerId': 'chart_div',
          'options': {
            'width': 700,
            'height': 500,
            'pieSliceText': 'value',
            'legend': 'right'
          }
        });

        // Establish dependencies, declaring that 'filter' drives 'pieChart',
        // so that the pie chart will only display entries that are let through
        // given the chosen slider range.
        dashboard.bind(donutRangeSlider, pieChart);

        // Draw the dashboard.
        dashboard.draw(data);
      }
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Usuarios'],
          @foreach ($nuevos as $nuevo)
            ['{{$nuevo->mes}}',{{$nuevo->conteo}}],
          @endforeach
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
@endsection
