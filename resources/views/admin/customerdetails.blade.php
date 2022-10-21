@extends('admin.includes.master-admin')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">
                <!-- Page Heading -->
                <div class="go-title">
                    <div class="pull-right">
                        <a href="{!! url('admin/customers') !!}" class="btn btn-default btn-add"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                    <h3>Detalles del Clientes</h3>

                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">

                        <table class="table">
                            <tbody>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>ID#</strong></td>
                                <td>{{$customer->id}}</td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Nombre:</strong></td>
                                <td>{{$customer->name}}</td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Correo:</strong></td>
                                <td>{{$customer->email}}</td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Teléfono:</strong></td>
                                <td>{{$customer->phone}}</td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Fax:</strong></td>
                                <td>{{$customer->fax}}</td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Dirección:</strong></td>
                                <td>{{$customer->address}}</td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Ciudad:</strong></td>
                                <td>{{$customer->city}}</td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Codigo Postal:</strong></td>
                                <td>{{$customer->zip}}</td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Joined:</strong></td>
                                <td>{{$customer->created_at->diffForHumans()}}</td>
                            </tr>
                            <tr>
                                <td width="30%"></td>
                                <td><a href="email/{{$customer->id}}" class="btn btn-primary"><i class="fa fa-send"></i> Contacto Cliente</a>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->


@stop

@section('footer')

@stop