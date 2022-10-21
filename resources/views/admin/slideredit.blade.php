@extends('admin.includes.master-admin')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">

                <!-- Page Heading -->
                <div class="go-title">
                    <div class="pull-right">
                        <a href="{!! url('admin/sliders') !!}" class="btn btn-default btn-back"><i class="fa fa-arrow-left"></i> Atras</a>
                    </div>
                    <h3>Modificar Imagen del Inicio</h3>
                    <div class="go-line"></div>
                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="response"></div>
                        <form method="POST" action="{!! action('SliderController@update',['slider'=>$slider->id]) !!}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Imagen 1 Actual<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="{!! url('/') !!}/assets/images/sliders/{{$slider->image}}" style="max-height: 150px;" alt="No Banner Photo">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cambiar Imagen<span class="required">*</span>

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <input type="file" accept="image/*" name="image">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Titulo<span class="required">*</span>
                                    <!-- <p class="small-label">(In Any Language)</p> -->
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" name="title" value="{{$slider->title}}" placeholder="e.g Sports" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Descripcion<span class="required">*</span>
                                    <!-- <p class="small-label">(In Any Language)</p> -->
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="slug" class="form-control col-md-7 col-xs-12" name="text" value="{{$slider->text}}" placeholder="e.g sports" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Posicion del Texto<span class="required">*</span>

                                </label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <select name="text_position" class="form-control">
                                        @if($slider->text_position == "slide_style_left")
                                            <option value="slide_style_left" selected>Izquierda</option>
                                        @else
                                            <option value="slide_style_left">Izquierda</option>
                                        @endif
                                        @if($slider->text_position == "slide_style_center")
                                            <option value="slide_style_center" selected>Centrada</option>
                                        @else
                                            <option value="slide_style_center">Centrada</option>
                                        @endif
                                        @if($slider->text_position == "slide_style_right")
                                            <option value="slide_style_right" selected>Derecha</option>
                                        @else
                                            <option value="slide_style_right">Derecha</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                              <!-- CODIGO IMAGEN 2 -->
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Imagen 2 <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="{!! url('/') !!}/assets/images/sliders/{{$slider->image2}}" style="max-height: 150px;" alt="No Banner Photo">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cambiar Imagen<span class="required">*</span>

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <input type="file" accept="image/*" name="image2">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Imagen 3 <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="{!! url('/') !!}/assets/images/sliders/{{$slider->image3}}" style="max-height: 150px;" alt="No Banner Photo">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cambiar Imagen<span class="required">*</span>

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <input type="file" accept="image/*" name="image3">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Imagen 4 <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img src="{!! url('/') !!}/assets/images/sliders/{{$slider->image4}}" style="max-height: 150px;" alt="No Banner Photo">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cambiar Imagen<span class="required">*</span>

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <input type="file" accept="image/*" name="image4">
                                </div>
                            </div>
                         
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-block">Actualizar</button>
                                </div>
                            </div>
                        </form>
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