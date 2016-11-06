@extends('layouts.app')
@section('title','Dashboard')
@section('content')


         <div class="center">
           <div class="divider"></div>
          <!--Segunda Sección-->
            <div class="row" style="text-align:left;">
                <div class="col s12">
                    <div class="card bordered" style="margin:3% auto; border-radius: 13px;">
                      <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                          <div class="row">
                              <div class="col s12 left-align">

                                  <h4>Dashboard</h4>
                              </div>
                          </div>
                      </div>

                      <div class="card-content">
                        <div id="dashboard_div">
                          <div class="row">
                            <div class="col s4">
                                <!--Divs that will hold each control and chart-->
                                <div class="row">
                                  <div class="col s12 center">
                                    <div id="filter_div"></div>
                                  </div>
                                  <div class="col s12">
                                    <div id="chartp_div"></div>
                                  </div>
                                </div>
                            </div>
                            <div class="col s4">
                              <div class="row">
                                <div class="col s6">
                                  <div id="filterg_div" ></div>
                                </div>
                                <div class="col s6">
                                  <div id="filtern_div"></div>
                                </div>
                                <div class="col s12">
                                  <div id="table_div" ></div>
                                </div>
                              </div>
                            </div>
                            <div class="col s4">
                              <div id="coldiv_div"></div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col s4">
                              <div id="piesex_div"></div>
                            </div>
                            <div class="col s4">
                              <div id="baredad_div"></div>
                            </div>
                            <div class="col s4">
                              <div id="pietar_div"></div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col s12">
                              <div id="chart_div" style="height:500px;"></div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col s4">
                              <div id="colprod_div"></div>
                            </div>
                            <div class="col s4 center">
                              <div id="table_sort_div"></div>
                            </div>
                            <div class="col s4">
                              <div id="chart_sort_div"></div>
                            </div>
                          </div>

                        </div>
                       </div>
                  </div>

          </div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


{{-- --------------------------------------------grafica 1 --}}
<script type="text/javascript">
  // Load the Visualization API and the controls package.
  google.charts.load('current', {'packages':['corechart', 'controls', 'table']});

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawDashboard);

  // Callback that creates and populates a data table,
  // instantiates a dashboard, a range slider and a pie chart,
  // passes in the data and draws it.
  function drawDashboard() {

    // Create our data table.
    var data = google.visualization.arrayToDataTable([
      ['Nombre', 'Apellido', 'Edad', 'Sexo', 'Compras', 'Total'],
      @foreach ($compras as $compra)
        ['{{$compra->name}}', '{{$compra->lastname}}', {{$compra->edad}},'{{$compra->sexo}}', {{$compra->compras}}, {{$compra->total_compras}}],
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
        'filterColumnLabel': 'Compras',
        'ui': {
          'labelStacking': 'vertical'
        }
      }
    });

    var genderSelect = new google.visualization.ControlWrapper({
      'controlType': 'CategoryFilter',
      'containerId': 'filterg_div',
      'options': {
        'filterColumnLabel': 'Sexo',
        'ui': {
          'allowMultiple': false

        }
      }

    });

    var fname = new google.visualization.ControlWrapper({
      'controlType': 'StringFilter',
      'containerId': 'filtern_div',
      'options': {
        'filterColumnLabel': 'Nombre',
        'ui': {
          'labelStacking': 'vertical'
        }
      }

    });

    // Create a pie chart, passing some options
    var pieChart = new google.visualization.ChartWrapper({
      'chartType': 'PieChart',
      'containerId': 'chartp_div',
      'options': {
        'width': 500,
        'height': 400,
        'title': 'Compras realizadas por Cliente'
      },
      // The pie chart will use the columns 'Name' and 'Donuts eaten'
      // out of all the available ones.
      'view': {'columns': [0, 4]}
    });

    var tableAll = new google.visualization.ChartWrapper({
      'chartType': 'Table',
      'containerId': 'table_div',
      'options': {
        'width': 500,
        'height': 300,
        'title': 'Clientes'
      },
      // The pie chart will use the columns 'Name' and 'Donuts eaten'
      // out of all the available ones.
      'view': {'columns': [0, 1, 2, 3, 4, 5]}
    });

    var columnC = new google.visualization.ChartWrapper({
      'chartType': 'ColumnChart',
      'containerId': 'coldiv_div',
      'options': {
        'width': 500,
        'height': 400,
        'title': 'Total por Cliente'
      },
      // The pie chart will use the columns 'Name' and 'Donuts eaten'
      // out of all the available ones.
      'view': {'columns': [0, 5]}
    });

    // Establish dependencies, declaring that 'filter' drives 'pieChart',
    // so that the pie chart will only display entries that are let through
    // given the chosen slider range.
    dashboard.bind([donutRangeSlider, genderSelect, fname], [pieChart, tableAll, columnC]);

    // Draw the dashboard.
    dashboard.draw(data);
  }
</script>


{{-- --------------------------------------------grafica 3 --}}
<script type="text/javascript">
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Año', 'Ventas', 'Gastos'],
          ['2013',  10000,      4000],
          ['2014',  11700,      4600],
          ['2015',  6600,       11200],
          ['2016',  10300,      5400]
        ]);

        var options = {
          title: 'Desempeño del Negocio',
          hAxis: {title: 'Año',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

{{-- --------------------------------------------grafica Sexo --}}


        <script type="text/javascript">

          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Sexo', 'Cantidad'],
              @foreach ($clientes as $cliente)
                ['{{$cliente->sexo}}', {{$cliente->cantidad}}],
              @endforeach
            ]);

            var options = {
              title: 'Sexo de Usuarios',
              width: 500,
              height: 400,
              pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piesex_div'));
            chart.draw(data, options);
          }
        </script>

{{-- --------------------------------------------grafica edad --}}

        <script type="text/javascript">
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ["Nombre", "Edad"],
                @foreach ($compras as $compra)
                  ['{{$compra->name}}', {{$compra->edad}}],
                @endforeach
              ]);

              var options = {
                title: "Edad de los Usuarios",
                width: 600,
                height: 400,
                bar: {groupWidth: "75%"},
                legend: { position: "none" },
              };
              var chart = new google.visualization.BarChart(document.getElementById("baredad_div"));
              chart.draw(data, options);
          }
          </script>



          {{-- --------------------------------------------grafica mas vendidos --}}

                  <script type="text/javascript">
                      google.charts.setOnLoadCallback(drawChart);
                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ["Nombre", "Edad"],
                          @foreach ($masvendidos as $prod)
                            @if ($prod->tipo == 1)
                            ['Vestidos', {{$prod->cantidad}}],
                            @endif

                            @if ($prod->tipo == 2)
                            ['Bolsas', {{$prod->cantidad}}],
                            @endif

                            @if ($prod->tipo == 3)
                            ['Lentes', {{$prod->cantidad}}],
                            @endif

                            @if ($prod->tipo == 4)
                            ['P Belleza', {{$prod->cantidad}}],
                            @endif

                          @endforeach
                        ]);

                        var options = {
                          title: "Venta de Productos",
                          width: 600,
                          height: 400,
                          bar: {groupWidth: "75%"},
                          legend: { position: "none" },
                        };
                        var chart = new google.visualization.ColumnChart(document.getElementById("colprod_div"));
                        chart.draw(data, options);
                    }
                    </script>


                    {{-- --------------------------------------------grafica Tarjetas --}}


                            <script type="text/javascript">

                              google.charts.setOnLoadCallback(drawChart);
                              function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                  ['Tipo', 'Ventas'],
                                  @foreach ($tarjetas as $tarjeta)

                                    @if ($tarjeta->tipo == 0)

                                    @endif

                                    @if ($tarjeta->tipo == 1)
                                      ['Visa', {{$tarjeta->ventas}}],
                                    @endif

                                    @if ($tarjeta->tipo == 2)
                                      ['Mastercard', {{$tarjeta->ventas}}],
                                    @endif

                                    @if ($tarjeta->tipo == 3)
                                      ['American Express', {{$tarjeta->ventas}}],
                                    @endif
                                  @endforeach
                                ]);

                                var options = {
                                  title: 'Tarjetas usadas por los clientes',
                                  width: 500,
                                  height: 400,
                                  is3D: true,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('pietar_div'));
                                chart.draw(data, options);
                              }
                            </script>



{{-- --------------------------------------------grafica 2 --}}

    <script type="text/javascript">
      google.charts.setOnLoadCallback(drawSort);
      function drawSort() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nombre');
        data.addColumn('number', 'Salario');
        data.addColumn('boolean', 'Full Time');
        data.addRows(5);
        data.setCell(0, 0, 'Juan');
        data.setCell(0, 1, 10000);
        data.setCell(0, 2, true);
        data.setCell(1, 0, 'Maria');
        data.setCell(1, 1, 25000);
        data.setCell(1, 2, true);
        data.setCell(2, 0, 'Santiago');
        data.setCell(2, 1, 8000);
        data.setCell(2, 2, false);
        data.setCell(3, 0, 'Elena');
        data.setCell(3, 1, 20000);
        data.setCell(3, 2, true);
        data.setCell(4, 0, 'Miguel');
        data.setCell(4, 1, 12000);
        data.setCell(4, 2, false);


        var formatter = new google.visualization.NumberFormat({prefix: '$'});
        formatter.format(data, 1); // Apply formatter to second column

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1]);

        var table = new google.visualization.Table(document.getElementById('table_sort_div'));
        table.draw(view, {width: '400', height: '300'});

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_sort_div'));
        chart.draw(view, {width: '400', height: '400'});

        google.visualization.events.addListener(table, 'sort',
            function(event) {
              data.sort([{column: event.column, desc: !event.ascending}]);
              chart.draw(view);
            });
}
    </script>
 @endsection
