@extends('includes.master')
@section('content')

<section class="go-slider">
<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
       @for ($i = 0; $i < count($sliders); $i++)
            @if($i == 0)--}}
                <li data-target="#bootstrap-touch-slider" data-slide-to="{{$i}}" class="active"></li>
            @else
                <li data-target="#bootstrap-touch-slider" data-slide-to="{{$i}}"></li>
            @endif
        @endfor
    </ol>
    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">
        @for ($i = 0; $i < count($sliders); $i++)
            @if($i == 0)
                <!-- Third Slide -->
                <div class="item active">
                    <!-- Slide Background -->
                    <img src="{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image}}" alt=""  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text {{$sliders[$i]->text_position}}">
                                    <!-- <h1 data-animation="animated fadeInDown">{{$sliders[$i]->title}}</h1>  -->
                                    <!-- <p data-animation="animated fadeInUp">{{$sliders[$i]->text}}</p>  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->
            @else
            <!-- Second Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                  <div class="slide-text {{$sliders[$i]->text_position}}">
                        <!-- <h1 data-animation="animated fadeInDown">{{$sliders[$i]->title}}</h1> -->
                        <!-- <p data-animation="animated fadeInUp">{{$sliders[$i]->text}}</p> -->
                    </div>
                </div>
                <!-- End of Slide -->
            @endif
    @endfor
    </div><!-- End of Wrapper For Slides -->
        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Atras</span>
        </a>
        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div> <!-- End  bootstrap-touch-slider Slider class="col-md-offset-3" -->
</section>
<br>

<br>
<section class="wow fadeInUp go-products">
    <div class="container">
        <div class="row" style="margin-top:10px; margin-bottom:50px;">
            <div class="col-md-12">
                <ul class="nav nav-tabs home-tab">
                    <li><a> Recientemente Consultados</a></li><a href={{url('/products')}}>Ver Productos</a> 
                </ul>
            </div>
            @foreach($features as $product)
                <div class="col-xs-6 col-sm-4 col-md-3 product">
                    <article class="col-item">
                        <div class="photo">
                            <a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}"> <img src="{{url('/assets/images/products')}}/{{$product->feature_image}}" class="img-responsive" style="height: 220px;" alt="Product Image" /> </a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price-details">
                                    <a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}" class="row" style="min-height: 60px;" >
                                        <h1>{{$product->title}}</h1>
                                    </a>
                                    <div class="pull-left">
                                        @if($product->previous_price != "")
                                            <span class="price-old">${{$product->previous_price}}</span>
                                        @else
                                        @endif
                                        <span class="price-new">${{$product->price}}</span>
                                    </div>
                                    <div class="pull-right">
                                        <span class="review">
                                            @for($i=1;$i<=5;$i++)
                                                @if($i <= \App\Review::ratings($product->id))
                                                    <i class="fa fa-star"></i>
                                                @else
                                                    <i class="fa fa-star-o"></i>
                                                @endif
                                            @endfor
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <form>
                                    <p>
                                        {{csrf_field()}}
                                        @if(Session::has('uniqueid'))
                                            <input type="hidden" name="uniqueid" value="{{Session::get('uniqueid')}}">
                                        @else
                                            <input type="hidden" name="uniqueid" value="{{Str::random(7)}}">
                                        @endif
                                        <input type="hidden" name="title" value="{{$product->title}}">
                                        <input type="hidden" name="product" value="{{$product->id}}">
                                        <input type="hidden" id="cost" name="cost" value="{{$product->price}}">
                                        <input type="hidden" id="quantity" name="quantity" value="1">
                                        @if($product->stock != 0 || $product->stock === null )
                                            <button type="button" class="button style-10 hidden-sm to-cart"><i class="fa fa-shopping-cart"></i>Agregar</button>
                                        @else
                                            <button type="button" class="button style-10 to-cart" disabled>Agotado</button>
                                        @endif
                                        {{--<button type="button" class="button style-10 hidden-sm to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>--}}
                                    </p>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="container">
    <div class="spliter-row">
        <section class="splinter-col-mobile-12 splinter-col-tablet-6 splinter-col-desktop-6 ">
             <div class="carousel-inner" role="listbox">
                    @for ($i = 0; $i < count($sliders); $i++)
                        @if($i == 0)
                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image2}}" alt=""  style="width: 100%; max-height: 140px; margin: auto;" />
                                <div class="bs-slider-overlay"></div>
                                <div class="container">
                                    <div class="row">
                                        <!-- Slide Text Layer -->
                                        <div class="slide-text {{$sliders[$i]->text_position}}">
                                                <!-- <h1 data-animation="animated fadeInDown">{{$sliders[$i]->title}}</h1>  -->
                                                <!-- <p data-animation="animated fadeInUp">{{$sliders[$i]->text}}</p>  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Slide -->
                        @else
                        <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image2}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                                <div class="bs-slider-overlay"></div>
                                <!-- Slide Text Layer -->
                              <div class="slide-text {{$sliders[$i]->text_position}}">
                                    <h1 data-animation="animated fadeInDown">{{$sliders[$i]->title}}</h1>
                                    <p data-animation="animated fadeInUp">{{$sliders[$i]->text}}</p>
                                </div>
                            </div>
                            <!-- End of Slide -->
                        @endif
                @endfor
                </div>
        </section>
    </div>
</div>

<section class="wow fadeInUp go-services hideme">
    <div class="row" style="margin-top:10px; margin-bottom:50px;">
        <div class="container">
            <div>
                <div class="section-title">
                    <h2>{{$languages->service_title}}</h2>
                    <p>{{$languages->service_text}}</p>
                </div>
            </div>
            @foreach($services as $service)
                <div class="col-xs-6 col-md-3">
                    <div class="text-center wow fadeInUp" >
                        <img src="{{url('/assets/images/service')}}/{{$service->icon}}" width="100px" height="100px" style="border-radius: 40px;">
                        <a href="{{$service->url}}"><h3>{{$service->title}}</h3></a>
                        <p>{{$service->text}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> 


<div class="container">
    <div class="spliter-row">
        <section class="splinter-col-mobile-12 splinter-col-tablet-6 splinter-col-desktop-6 ">
             <div class="carousel-inner" role="listbox">
                    @for ($i = 0; $i < count($sliders); $i++)
                        @if($i == 0)
                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image3}}" alt=""  style="width: 100%; max-height: 140px; margin: auto;" />
                                <div class="bs-slider-overlay"></div>
                                <div class="container">
                                    <div class="row">
                                        <!-- Slide Text Layer -->
                                        <div class="slide-text {{$sliders[$i]->text_position}}">
                                                <!-- <h1 data-animation="animated fadeInDown">{{$sliders[$i]->title}}</h1>  -->
                                                <!-- <p data-animation="animated fadeInUp">{{$sliders[$i]->text}}</p>  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Slide -->
                        @else
                        <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image3}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                                <div class="bs-slider-overlay"></div>
                                <!-- Slide Text Layer -->
                              <div class="slide-text {{$sliders[$i]->text_position}}">
                                    <h1 data-animation="animated fadeInDown">{{$sliders[$i]->title}}</h1>
                                    <p data-animation="animated fadeInUp">{{$sliders[$i]->text}}</p>
                                </div>
                            </div>
                            <!-- End of Slide -->
                        @endif
                @endfor
                </div>
            
        </section>
    </div>
</div>

<br>
<br>
<section class="wow fadeInUp go-products">
    <div class="container">
        <div class="row">
                <!-- Nav tabs -->
                <div class="card">
                    <div class="col-md-12">
                    <ul class="nav nav-tabs home-tab" role="tablist">
                        <li><a href="#profile" aria-controls="profile" role="tab" > Ultimos Productos</a></li>
                    </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active" id="profile">
                            <div class="row">
                                @foreach($latests as $product)
                                    <div class="col-xs-6 col-sm-4 col-md-3 product">
                                        <article class="col-item">
                                            <div class="photo">
                                                <a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}"> <img src="{{url('/assets/images/products')}}/{{$product->feature_image}}" class="img-responsive" style="height: 220px;" alt="Product Image" /> </a>
                                            </div>
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price-details">

                                                        <a href="{{url('/product')}}/{{$product->id}}/{{str_replace(' ','-',strtolower($product->title))}}" class="row" style="min-height: 60px">
                                                            <h1>{{$product->title}}</h1>
                                                        </a>

                                                        <div class="pull-left prices">
                                                            @if($product->previous_price != "")
                                                                <span class="price-old">${{$product->previous_price}}</span>
                                                            @else
                                                            @endif
                                                            <span class="price-new">${{$product->price}}</span>
                                                        </div>
                                                        <div class="pull-right revs">
                                                            <span class="review">
                                                                @for($i=1;$i<=5;$i++)
                                                                    @if($i <= \App\Review::ratings($product->id))
                                                                        <i class="fa fa-star"></i>
                                                                    @else
                                                                        <i class="fa fa-star-o"></i>
                                                                    @endif
                                                                @endfor
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="separator clear-left">
                                                    <form>
                                                        <p>
                                                            {{csrf_field()}}
                                                            @if(Session::has('uniqueid'))
                                                                <input type="hidden" name="uniqueid" value="{{Session::get('uniqueid')}}">
                                                            @else
                                                                <input type="hidden" name="uniqueid" value="{{Str::random(7)}}">
                                                            @endif
                                                            <input type="hidden" name="title" value="{{$product->title}}">
                                                            <input type="hidden" name="product" value="{{$product->id}}">
                                                            <input type="hidden" id="cost" name="cost" value="{{$product->price}}">
                                                            <input type="hidden" id="quantity" name="quantity" value="1">
                                                            @if($product->stock != 0 || $product->stock === null )
                                                                <button type="button" class="button style-10 hidden-sm to-cart"><i class="fa fa-shopping-cart"></i>Agregar </button>
                                                            @else
                                                                <button type="button" class="button style-10 to-cart" disabled>Agotado</button>
                                                            @endif
                                                            {{--<button type="button" class="button style-10 hidden-sm to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>--}}
                                                        </p>
                                                    </form>

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="spliter-row">
        <section class="splinter-col-mobile-12 splinter-col-tablet-6 splinter-col-desktop-6 ">
             <div class="carousel-inner" role="listbox">
                    @for ($i = 0; $i < count($sliders); $i++)
                        @if($i == 0)
                            <!-- Third Slide -->
                            <div class="item active">
                                <!-- Slide Background -->
                                <img src="{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image4}}" alt=""  style="width: 100%; max-height: 140px; margin: auto;" />
                                <div class="bs-slider-overlay"></div>
                                <div class="container">
                                    <div class="row">
                                        <!-- Slide Text Layer -->
                                        <!-- <div class="slide-text {{$sliders[$i]->text_position}}"> -->
                                                <!-- <h1 data-animation="animated fadeInDown">{{$sliders[$i]->title}}</h1>  -->
                                                <!-- <p data-animation="animated fadeInUp">{{$sliders[$i]->text}}</p>  -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- End of Slide -->
                        @else
                        <!-- Second Slide -->
                            <div class="item">
                                <!-- Slide Background -->
                                <img src="{{url('/')}}/assets/images/sliders/{{$sliders[$i]->image4}}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                                <div class="bs-slider-overlay"></div>
                                <!-- Slide Text Layer -->
                              <div class="slide-text {{$sliders[$i]->text_position}}">
                                    <h1 data-animation="animated fadeInDown">{{$sliders[$i]->title}}</h1>
                                    <p data-animation="animated fadeInUp">{{$sliders[$i]->text}}</p>
                                </div>
                            </div>
                            <!-- End of Slide -->
                        @endif
                @endfor
                </div>
            
        </section>
    </div>
</div>



<br>
<br>
<br>

@stop

@section('footer')
<script>

</script>
@stop