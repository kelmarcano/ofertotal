@extends('admin.includes.master-admin')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">
                <!-- Page Heading -->
                <div class="go-title">
                    <div class="pull-right">
                        <a href="{!! url('admin/products/create') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Agregar Nuevo Producto</a>
                    </div>
                    <h3>Productos</h3>
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
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="10%">ID#</th>
                                <th>Descripción del Producto</th>
                                <th>Precio</th>
                                <th>Categoria</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    {{\App\Category::where('id',$product->category[0])->first()->name}}<br>
                                    @if($product->category[1] != "")
                                        {{\App\Category::where('id',$product->category[1])->first()->name}}<br>
                                    @endif
                                    @if($product->category[2] != "")
                                        {{\App\Category::where('id',$product->category[2])->first()->name}}
                                    @endif
                                    
                                   
                                                                       
                                </td>
                                <td>
                                    @if($product->status == 1)
                                        Activo
                                    @elseif($product->status == 2)
                                        Pendiente
                                    @else
                                        Inactivo
                                    @endif
                                </td>
                                <td>
                                    <form method="POST" action="{!! action('ProductController@destroy',['product' => $product->id]) !!}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{!! url('admin/products') !!}/{{$product->id}}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
                                        @if($product->status==1)
                                            <a href="{!! url('admin/products') !!}/status/{{$product->id}}/0" class="btn btn-warning btn-xs"><i class="fa fa-times"></i> Desactivar </a>
                                        @else
                                            <a href="{!! url('admin/products') !!}/status/{{$product->id}}/1" class="btn btn-primary btn-xs"><i class="fa fa-times"></i> Activar </a>
                                        @endif
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