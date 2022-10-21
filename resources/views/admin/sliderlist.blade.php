@extends('admin.includes.master-admin')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">
                <!-- Page Heading -->
                <div class="go-title">
                    <div class="pull-right">
                        <a href="{!! url('admin/sliders/create') !!}" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Agregar Nueva Imagen</a>
                    </div>
                    <h3>Imagenes del Inicio</h3>
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
                                <th>Imagen 1</th>
                                <th>Imagen 2</th>
                                <th>Imagen 3</th>
                                <th>Imagen 4</th>
                                <th>Titulo</th>
                                <th width="15%">Descripcion</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td><img style="width: 250px;" src="{{url('/')}}/assets/images/sliders/{{$slider->image}}"></td>
                                        <td><img style="width: 250px;" src="{{url('/')}}/assets/images/sliders/{{$slider->image2}}"></td>
                                        <td><img style="width: 250px;" src="{{url('/')}}/assets/images/sliders/{{$slider->image3}}"></td>
                                        <td><img style="width: 250px;" src="{{url('/')}}/assets/images/sliders/{{$slider->image4}}"></td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->text}}</td>
                                        <td>
                                            <form method="POST" action="{!! action('SliderController@destroy',['slider' => $slider->id]) !!}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="sliders/{{$slider->id}}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Modificar </a>
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