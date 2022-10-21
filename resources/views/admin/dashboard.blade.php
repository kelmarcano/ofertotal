@extends('admin.includes.master-admin')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h3>Tablero del Administrador! </h3>

        <div class="row" id="main" >
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="text-total">{{ \App\Product::count() }}</div>
                                <p class="titles">Total Productos!</p>
                            </div>
                        </div>
                    </div>
                    <a class="panel-footer detail-link clearfix btn-block" href="{{url('admin/products')}}"><span class="pull-left">Ver Todo</span><span class="pull-right"><i class="fa fa-chevron-circle-right"></i>
                    </span>
                    </a><!-- END panel-->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-usd fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="text-total">{{ \App\Order::where('payment_status','Completed')->where('status','pending')->count() }}</div>
                                <p class="titles">Pedidos Pendientes!</p>
                            </div>
                        </div>
                    </div>
                    <a class="panel-footer detail-link clearfix btn-block" href="{{url('admin/orders')}}"><span class="pull-left">Ver Todo</span><span class="pull-right"><i class="fa fa-chevron-circle-right"></i>
                    </span>
                    </a><!-- END panel-->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-truck fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="text-total">{{ \App\Order::where('payment_status','Completed')->where('status','processing')->count() }}</div>
                                <p class="titles">Ordenes Procesados!</p>
                            </div>
                        </div>
                    </div>
                    <a class="panel-footer detail-link clearfix btn-block" href="{{url('admin/orders')}}"><span class="pull-left">Ver Todo</span><span class="pull-right"><i class="fa fa-chevron-circle-right"></i>
                    </span>
                    </a><!-- END panel-->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-check fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="text-total">{{ \App\Order::where('payment_status','Completed')->where('status','completed')->count() }}</div>
                                <p class="titles">Pedidos Completados!</p>
                            </div>
                        </div>
                    </div>
                    <a class="panel-footer detail-link clearfix btn-block" href="{{url('admin/orders')}}"><span class="pull-left">Ver Todo</span><span class="pull-right"><i class="fa fa-chevron-circle-right"></i>
                    </span>
                    </a><!-- END panel-->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bank fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="text-total">{{ \App\Withdraw::where('status','pending')->count() }}</div>
                                <p class="titles">Pagos Pendientes!</p>
                            </div>
                        </div>
                    </div>
                    <a class="panel-footer detail-link clearfix btn-block" href="{{url('admin/withdraws/pending')}}"><span class="pull-left">Ver Todo</span><span class="pull-right"><i class="fa fa-chevron-circle-right"></i>
                    </span>
                    </a><!-- END panel-->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="text-total">{{ \App\UserProfile::count() }}</div>
                                <p class="titles">Total Clientes!</p>
                            </div>
                        </div>
                    </div>
                    <a class="panel-footer detail-link clearfix btn-block" href="{{url('admin/customers')}}"><span class="pull-left">Ver Todo</span><span class="pull-right"><i class="fa fa-chevron-circle-right"></i>
                    </span>
                    </a><!-- END panel-->
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bell fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="text-total">{{ \App\Vendors::where('status',0)->count() }}</div>
                                <p class="titles">Vendedores Pendientes!</p>
                            </div>
                        </div>
                    </div>
                    <a class="panel-footer detail-link clearfix btn-block" href="{{url('admin/vendors/pending')}}"><span class="pull-left">Ver Todo</span><span class="pull-right"><i class="fa fa-chevron-circle-right"></i>
                    </span>
                    </a><!-- END panel-->
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-group fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="text-total">{{ \App\Vendors::count() }}</div>
                                <p class="titles">Total Vendedores!</p>
                            </div>
                        </div>
                    </div>
                    <a class="panel-footer detail-link clearfix btn-block" href="{{url('admin/vendors')}}"><span class="pull-left">Ver Todo</span><span class="pull-right"><i class="fa fa-chevron-circle-right"></i>
                    </span>
                    </a><!-- END panel-->
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-at fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="text-total">{{ \App\Subscribers::count() }}</div>
                                <p class="titles">Total Suscriptores!</p>
                            </div>
                        </div>
                    </div>
                    <a class="panel-footer detail-link clearfix btn-block" href="{{url('admin/subscribers')}}"><span class="pull-left">Ver Todo</span><span class="pull-right"><i class="fa fa-chevron-circle-right"></i>
                    </span>
                    </a><!-- END panel-->
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