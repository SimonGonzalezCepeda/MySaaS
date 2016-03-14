@extends('layouts.app')

@section('htmlheader_title')
    Daily sales report
@endsection

@section('custom_scripts')
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script>

    </script>
@endsection

@section('custom_css')
    <link href="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" rel="stylesheet" type="text/css"/>
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>10</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>35</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection