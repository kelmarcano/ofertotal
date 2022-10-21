@extends('admin.includes.master-admin')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">
                <!-- Page Heading -->
                <div class="go-title">
                    {{--<div class="pull-right">--}}
                    {{--<a href="{!! url('admin/services/create') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add New Service</a>--}}
                    {{--</div>--}}
                    <h3>Clientes</h3>
                    <div class="go-line"></div>
                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="response">
                            @if(Session::has('message'))
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                        </div>
                        <table class="table table-striped table-bordered" cellspacing="0" id="example" width="100%">
                            <thead>
                            <tr>
                                <th>Nombre del Cliente</th>
                                <th width="10%">Correo del Cliente</th>
                                <th>Teléfono</th>
                                <th width="10%">Dirección</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td>
                                        @if($customer->status != 0)
                                            Activo
                                        @else
                                            Banned
                                        @endif
                                    </td>

                                    <td>

                                        <form method="POST" action="{!! action('CustomerController@destroy',['customer' => $customer->id]) !!}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="customers/{{$customer->id}}" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> Ver Detalles </a>

                                            <a href="customers/email/{{$customer->id}}" class="btn btn-primary btn-xs"><i class="fa fa-send"></i> Enviar Correo</a>

                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Eliminar </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
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