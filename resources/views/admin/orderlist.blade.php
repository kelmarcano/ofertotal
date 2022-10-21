@extends('admin.includes.master-admin')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">
                <!-- Page Heading -->
                <div class="go-title">
                    <div class="pull-right">
                        <span><span style="background-color: lightgreen;">&nbsp;&nbsp;&nbsp;&nbsp;</span> Completado</span>
                        <span><span style="background-color: #d9edf7;">&nbsp;&nbsp;&nbsp;&nbsp;</span> Procesando</span>
                    </div>
                    <h3>Pedidos</h3>
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
                                <th>Correo del Cliente</th>
                                <th width="15%">Nombre del Cliente</th>
                                <th width="5%">Total Producto</th>
                                <th width="10%">Total Costo</th>
                                <th>Metodo de Pago</th>
                                <th>Fecha de Pedido</th>
                                <th>Accciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                @if($order->status == "completed")
                                    <tr style="background-color: lightgreen;">
                                @elseif($order->status == "processing")
                                    <tr class="info">
                                @else
                                    <tr class="">
                                @endif
                                    <td>{{$order->customer_email}}</td>
                                    <td>{{$order->customer_name}}</td>
                                    <td align="center">{{array_sum($order->quantities)}}</td>
                                    <td align="right">${!! $order->pay_amount !!}</td>
                                    <td>{{$order->method}}</td>
                                    <td>{{$order->booking_date}}</td>

                                    <td>

                                        <a href="orders/{{$order->id}}" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> Ver detalle </a>

                                        <a href="orders/email/{{$order->id}}" class="btn btn-primary btn-xs"><i class="fa fa-send"></i> Enviar correo</a>

                                        <span class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle btn-xs" type="button" data-toggle="dropdown">{{ucfirst($order->status)}}
                                                <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="orders/status/{{$order->id}}/processing">Completado</a></li>
                                                <li><a href="orders/status/{{$order->id}}/completed">Procesando</a></li>
                                            </ul>
                                        </span>

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