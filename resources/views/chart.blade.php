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





            </div>
        </div>
    </div>




@endsection
