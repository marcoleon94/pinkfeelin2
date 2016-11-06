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
                                    <h4>Grafica 1</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                          <div id="dashboard_div">
                            <div class="row">
                              <div class="col s6">
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
                              <div class="col s6">
                                <div class="row">
                                  <div class="col s6">
                                    <div  id="filterg_div" ></div>
                                  </div>
                                  <div class="col s6">
                                    <div  id="filtern_div"></div>
                                  </div>
                                  <div class="col s12">
                                    <div id="table_div" ></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col s6">
                                <div id="coldiv_div" style="width: 100%; height: 500px;"></div>
                              </div>
                            </div>
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

                         </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card bordered" style="margin:5% auto; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">
                                <div class="col s12 left-align">
                                    <h4>Grafica 3</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                          <div id="chart_div"></div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>




@endsection
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
      ['Name', 'Gender', 'Age', 'Donuts eaten'],
      ['Michael' , 'Male', 12, 5],
      ['Elisa', 'Female', 20, 7],
      ['Robert', 'Male', 7, 3],
      ['John', 'Male', 54, 2],
      ['Jessica', 'Female', 22, 6],
      ['Aaron', 'Male', 3, 1],
      ['Margareth', 'Female', 42, 8]
    ]);


    // Create a dashboard.
    var dashboard = new google.visualization.Dashboard(
        document.getElementById('dashboard_div'));

    // Create a range slider, passing some options
    var donutRangeSlider = new google.visualization.ControlWrapper({
      'controlType': 'NumberRangeFilter',
      'containerId': 'filter_div',
      'options': {
        'filterColumnLabel': 'Donuts eaten',
        'ui': {
          'labelStacking': 'vertical'
        }
      }
    });

    var genderSelect = new google.visualization.ControlWrapper({
      'controlType': 'CategoryFilter',
      'containerId': 'filterg_div',
      'options': {
        'filterColumnLabel': 'Gender',
        'ui': {
          'allowMultiple': false

        }
      }

    });

    var fname = new google.visualization.ControlWrapper({
      'controlType': 'StringFilter',
      'containerId': 'filtern_div',
      'options': {
        'filterColumnLabel': 'Name',
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
        'title': 'Donuts eaten per person'
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
        'title': 'Donuts eaten per person'
      },
      // The pie chart will use the columns 'Name' and 'Donuts eaten'
      // out of all the available ones.
      'view': {'columns': [0, 1, 2, 3]}
    });

    var columnC = new google.visualization.ChartWrapper({
      'chartType': 'ColumnChart',
      'containerId': 'coldiv_div',
      'options': {
        'width': 500,
        'height': 400,
        'title': 'Ages'
      },
      // The pie chart will use the columns 'Name' and 'Donuts eaten'
      // out of all the available ones.
      'view': {'columns': [0, 2]}
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
