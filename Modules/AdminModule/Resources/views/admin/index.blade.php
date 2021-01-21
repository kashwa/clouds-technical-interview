@extends('adminmodule::layouts.master')

@section('css')

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('/assets') }}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

@endsection

@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Clients </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Clients</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Clients </h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>id </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Active</th>
                                        <th>Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection


@section('plugin-js')

    <!-- DataTables -->
    <script src="{{ url('/assets') }}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/assets') }}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('/assets') }}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('/assets') }}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
@endsection

@section('js')

    <script>
        $(document).ready(function () {

            $('#table').DataTable({
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{url('admin/clients-ajax')}}",
                    "type": "GET"
                },
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'active', name: 'active'},
                    {data: 'operation', name: 'operation'},

                ],
            });
        })

        $(document).on('click', '#delete-user-record', function (e) {
            e.preventDefault();

            if (confirm("Are you sure, you want to delete client?")) {
                $.ajax({
                    'type': 'get',
                    'url': $(this).attr('href'),
                    contentType: false,
                    'statusCode': {
                        200: function (response) {
                            location.reload()
                        },
                        419: function (response) {
                            notifyUser("Error in request", 'Error', 'alert');
                        },
                        500: function (response) {
                            notifyUser(response.responseJSON.message, 'Error', 'alert');
                        }
                    },
                })
            }
        });

    </script>
@endsection
