@extends('layouts.app')

@section('htmlheader_title')
    Daily sales report
@endsection

@section('custom_scripts')
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#dailySales').dataTable();
        })
        var ctx = document.getElementById("barChartDailySales").getContext("2d");
        var data = {
            labels: ["1","2","3","4","5","6","7","8","9","10","11"],
            datasets: [{
                data: [950, 1589, 1589, 2500, 3400, 456],
                label: "My Daily Sales",
                fillColor: "rgba(220,220,220,1)",
                strokeColor: "rgba(220,10,180,0.8)",
                highlightFill: "rgba(40,20,200,0.75)",
                highlightStroke: "rgba(22,20,20,1)",
            },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(151,187,205,0.75)",
                    highlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }]
        }
        var myBarChart = new Chart(ctx).Bar(data);
    </script>
@endsection

@section('custom_css')
    <link href="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" rel="stylesheet" type="text/css"/>
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Responsive Hover Table</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody><tr>
                                <td>10</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>35</td>
                            </tr>
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="cols-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bar Chart</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas id="barChartDailySales" style="height: 261px; width: 622px;" width="622" height="261"></canvas>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
@endsection