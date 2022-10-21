@extends('admin.includes.master-admin')

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row" id="main">

                <!-- Page Heading -->
                <div class="go-title">
                    <div class="pull-right">
                        <a href="{!! url('admin/products') !!}" class="btn btn-default btn-Atras"><i class="fa fa-arrow-left"></i> Atras</a>
                    </div>
                    <h3>Actualizar Producto</h3>
                    <div class="go-line"></div>
                </div>
                <!-- Page Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="gocover"></div>
                        <div id="response"></div>
                        <form method="POST" action="{!! action('ProductController@update',['product' => $product->id]) !!}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Descripción del Producto<span class="required">*</span>
                                    <p class="small-label">(In Any Language)</p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" name="title" value="{{$product->title}}" placeholder="e.g Atractive Stylish Jeans For Women" required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoria<span class="required">*</span>

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="mainid" id="maincats" required>
                                        <option value="">Select Categoria</option>
                                        @foreach($categories as $category)
                                            @if($product->category[0] == $category->id)
                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                            @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Categoria<span class="required">*</span>

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="subid" id="subs">
                                        <option value="">Select Sub Categoria</option>
                                        @foreach($subs as $sub)
                                            @if($product->category[1] == $sub->id)
                                                <option value="{{$sub->id}}" selected>{{$sub->name}}</option>
                                            @else
                                                <option value="{{$sub->id}}">{{$sub->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoria Hijo<span class="required">*</span>

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="childid" id="childs">
                                        <option value="">Select Categoria Hijo</option>
                                        @foreach($child as $data2)
                                            @if($product->category[2] == $data2->id)
                                                <option value="{{$data2->id}}" selected>{{$data2->name}}</option>
                                            @else
                                                <option value="{{$data2->id}}">{{$data2->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Categoria Hijo<span class="required">*</span>

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="subchildid" id="subchilds">
                                        <option value="">Select Sub Categoria Hijo</option>
                                        @foreach($subchild as $data3)
                                            @if($product->category[3] == $data3->id)
                                                <option value="{{$data3->id}}" selected>{{$data3->name}}</option>
                                            @else
                                                <option value="{{$data3->id}}">{{$data3->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Imagen actual  <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                   <img style="max-width: 250px;" src="{{url('assets/images/products')}}/{{$product->feature_image}}" id="adminimg" alt="No Featured Image Added">
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input onchange="readURL(this)" id="uploadFile" name="photo" type="file">
                                    {{--<div id="uploadTrigger" onclick="uploadclick()" style="white-space: normal;" class="form-control btn btn-default"><i class="fa fa-upload"></i> Add Featured Image</div>--}}
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><span></span> </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label> <input type="button" class="btn btn-white" onclick="eliminarimagen()" value="Eliminar Imagen" />       
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="galdel" value="1"/>
                                            Borrar galeria de imagenes</label>
                                    </div>

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Galeria de Imagenes de Productos <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" accept="image/*" name="gallery[]" multiple/>
                                    <br>
                                    <p class="small-label">Imagenes Multiples Permitidas</p>
                                </div>
                            </div>
                            @if($product->sizes != null)
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="pallow" id="allow" value="1" checked><strong>Permitir tamaño de imagenes</strong></label>
                                    </div>
                                </div>
                            </div>

                            <div class="item form-group" id="pSizes">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tamaño de Producto<span class="required">*</span>
                                    <p class="small-label">(Write your own size Separated by Comma[,])</p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control col-md-7 col-xs-12" name="sizes" value="{{$product->sizes}}" data-role="tagsinput"/>
                                </div>
                            </div>
                            @else
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="pallow" id="allow" value="1"><strong>Permitir tamaño de imagenes</strong></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group" id="pSizes" style="display: none;">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tamaño del Producto<span class="required">*</span>
                                        <p class="small-label">(Write your own size Separated by Comma[,])</p>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control col-md-7 col-xs-12" name="sizes" value="X,XL,XXL,M,L,S" data-role="tagsinput"/>
                                    </div>
                                </div>
                            @endif
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion del Producto<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="description" id="description" class="form-control" rows="6">{{$product->description}}</textarea>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Precio actual del producto<span class="required">*</span>
                                    <p class="small-label">(In USD)</p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control col-md-7 col-xs-12" name="price" value="{{$product->price}}" placeholder="e.g 20" pattern="[0-9]+(\.[0-9]{0,2})?%?"
                                           title="Price must be a numeric or up to 2 decimal places." required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Precio anterior del producto<span class="required">*</span>
                                    <p class="small-label">(In USD, Leave Blank if not Required)</p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control col-md-7 col-xs-12" name="previous_price" value="{{$product->previous_price}}" placeholder="e.g 25" pattern="[0-9]+(\.[0-9]{0,2})?%?"
                                           title="Price must be a numeric or up to 2 decimal places." type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Productos en Existencia<span class="required">*</span>
                                    <p class="small-label">(Leave Empty will Show Always Available)</p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control col-md-7 col-xs-12" name="stock" value="{{$product->stock}}" placeholder="e.g 15" pattern="[0-9]{1,10}" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Politicas de Compra de Productos<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="policy" id="policy" class="form-control" rows="6">{{$product->policy}}</textarea>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">
                                </label>
                                <div class="col-md-9 col-sm-6 col-xs-12" data-toggle="buttons">
                                    @if($product->featured == 1)
                                        <label class="btn btn-default active">
                                            <input type="checkbox" name="featured" value="1" autocomplete="off" checked>
                                            <span class="go_checkbox"><i class="glyphicon glyphicon-ok"></i></span>
                                            Agregar a producto actual
                                        </label>
                                    @else
                                        <label class="btn btn-default">
                                            <input type="checkbox" name="featured" value="1" autocomplete="off">
                                            <span class="go_checkbox"><i class="glyphicon glyphicon-ok"></i></span>
                                            Agregar a producto actual
                                        </label>
                                    @endif
                                </div>
                            </div>

                             <!-- cAMPOS NUEVOS -->
                             <div class="item form-group" id="quantity_offer">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Cantidad Oferta<span class="required">*</span>
                                    <p class="small-label"></p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control col-md-7 col-xs-12" name="quantity_offer" pattern="[0-9]+(\.[0-9]{0,2})?%?"
                                           title="Quantity must be a numeric" type="text" value="{{$product->quantity_offer}}">
                                </div>
                            </div>

                             <div class="item form-group" id="price_offer">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Precio Oferta<span class="required">*</span>
                                    <p class="small-label">(In $)</p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control col-md-7 col-xs-12" name="price_offer" pattern="[0-9]+(\.[0-9]{0,2})?%?"
                                           title="Price must be a numeric" type="text" value="{{$product->price_offer}}">
                                </div>
                            </div> 
                            <div class="item form-group" id="discount_offer">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descuento de Oferta<span class="required">*</span>
                                    <p class="small-label">(In %)</p>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input class="form-control col-md-7 col-xs-12" name="discount_offer" pattern="[0-9]+(\.[0-9]{0,2})?%?" title="Discount must be a numeric" type="text" value="{{$product->discount_offer}}">
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="add_ads" type="submit" class="btn btn-success btn-block">Actualizar Producto</button>
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
    <script>
        bkLib.onDomLoaded(function() {
            new nicEditor().panelInstance('description');
            new nicEditor().panelInstance('policy');
        });

        $("#allow").change(function () {
            $("#pSizes").toggle();
        });

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#adminimg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function eliminarimagen() {
            $('#adminimg').val('');
            $("#adminimg")[0].setAttribute("src", "");
            //$('#adminimg').remove();
        }

        
// $(document).ready(function(){
        // $('.quantity_offer').hide();
        //  $('.price_offer').hide();
        //   $('.discount_offer').hide();
  //  });
   // console.log("llega aqui");    
    </script>
@stop