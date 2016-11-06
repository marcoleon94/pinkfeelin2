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
                         </div>
                    </div>
                </div>


                <div class="col s12">
                    <div class="card bordered" style="margin:5% auto; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">
                                <div class="col s12 left-align">
                                    <h4>Grafica 2</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                          <div class="row">
                            <div class="col s6">
                              <div id="table_sort_div"></div>
                            </div>
                            <div class="col s6">
                              <div id="chart_sort_div"></div>
                            </div>
                          </div>

                            <div id="columnchart_material" style="width: 900px; height: 500px;"></div>

                         </div>
                    </div>
                </div>





            </div>
        </div>
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



    {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> --}}

    {{-- <script type="text/javascript">

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
    </script> --}}
@endsection

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
      ['Nombre', 'Apellido', 'Sexo', 'Compras', 'Total'],
      @foreach ($compras as $compra)
        ['{{$compra->name}}', '{{$compra->lastname}}', '{{$compra->sexo}}', {{$compra->compras}}, {{$compra->total_compras}}],
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
      'view': {'columns': [0, 3]}
    });

    var tableAll = new google.visualization.ChartWrapper({
      'chartType': 'Table',
      'containerId': 'table_div',
      'options': {
        'width': 500,
        'height': 400,
        'title': 'Clientes'
      },
      // The pie chart will use the columns 'Name' and 'Donuts eaten'
      // out of all the available ones.
      'view': {'columns': [0, 1, 2, 3, 4]}
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
      'view': {'columns': [0, 4]}
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
          ['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

{{-- --------------------------------------------grafica 2 --}}

    <script type="text/javascript">
      google.charts.setOnLoadCallback(drawSort);
      function drawSort() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Salary');
        data.addColumn('boolean', 'Full Time');
        data.addRows(5);
        data.setCell(0, 0, 'John');
        data.setCell(0, 1, 10000);
        data.setCell(0, 2, true);
        data.setCell(1, 0, 'Mary');
        data.setCell(1, 1, 25000);
        data.setCell(1, 2, true);
        data.setCell(2, 0, 'Steve');
        data.setCell(2, 1, 8000);
        data.setCell(2, 2, false);
        data.setCell(3, 0, 'Ellen');
        data.setCell(3, 1, 20000);
        data.setCell(3, 2, true);
        data.setCell(4, 0, 'Mike');
        data.setCell(4, 1, 12000);
        data.setCell(4, 2, false);

        var formatter = new google.visualization.NumberFormat({prefix: '$'});
        formatter.format(data, 1); // Apply formatter to second column

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1]);

        var table = new google.visualization.Table(document.getElementById('table_sort_div'));
        table.draw(view, {width: '400', height: '400'});

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_sort_div'));
        chart.draw(view, {width: '400', height: '400'});

        google.visualization.events.addListener(table, 'sort',
            function(event) {
              data.sort([{column: event.column, desc: !event.ascending}]);
              chart.draw(view);
            });
}
    </script>
