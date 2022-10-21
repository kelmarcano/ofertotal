<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="Admin Panel.">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{url('/')}}/assets/images/{{$settings[0]->favicon}}" />

    <title>{{$settings[0]->title}} - Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap-toggle.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap-tagsinput.css')}}" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap-colorpicker.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('assets/css/genius-admin.css')}}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="wrapper"><!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{!! url('admin/dashboard') !!}">
            <img class="logo" src="{!! url('assets/images/logo') !!}/{{$settings[0]->logo}}" alt="LOGO">
        </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="fa fa-angle-down"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{!! url('admin/adminprofile') !!}"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                <li><a href="{!! url('admin/adminpassword') !!}"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-power-off"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="{!! url('admin/dashboard') !!}"><i class="fa fa-fw fa-home"></i>Tablero</a>
            </li>
            <li>
                <a href="{!! url('admin/orders') !!}"><i class="fa fa-fw fa-usd"></i> Ordenes</a>
            </li>
            <li>
                <a href="{!! url('admin/products') !!}"><i class="fa fa-fw fa-shopping-cart"></i> Productos</a>
            </li>
            <li>
                <a href="{!! url('admin/withdraws') !!}"><i class="fa fa-fw fa-bank"></i> Monedero</a>
            </li>
            <li>
                <a href="{!! url('admin/vendors') !!}"><i class="fa fa-fw fa-group"></i> Vendedores</a>
            </li>
            <li>
                <a href="{!! url('admin/customers') !!}"><i class="fa fa-fw fa-user"></i> Clientes</a>
            </li>
            <li>
                <a href="{!! url('admin/categories') !!}"><i class="fa fa-fw fa-sitemap"></i>Administrar Categorias</a>
            </li>
            <li>
                <a href="{!! url('admin/sliders') !!}"><i class="fa fa-fw fa-photo"></i>Configuracion Slider</a>
            </li>
            <li>
                <a href="service"><i class="fa fa-fw fa-tasks"></i>Seccion Servicio</a>
            </li>
            <li>
                <a href="{!! url('admin/testimonial') !!}"><i class="fa fa-fw fa-quote-right"></i>Seccion de Testimonios</a>
            </li>
            <li>
                <a href="{!! url('admin/themecolor') !!}"><i class="fa fa-fw fa-paint-brush"></i>Configuracion del Tema</a>
            </li>
            <li>
                <a href="{!! url('admin/pagesettings') !!}"><i class="fa fa-fw fa-file-code-o"></i>Configuracion de Pagina</a>
            </li>
            <li>
                <a href="{!! url('admin/social') !!}"><i class="fa fa-fw fa-paper-plane"></i> Configuracion Social</a>
            </li>
            <li>
                <a href="{!! url('admin/tools') !!}"><i class="fa fa-fw fa-wrench"></i> Herramientas Seo</a>
            </li>
            <li>
                <a href="{!! url('admin/settings') !!}"><i class="fa fa-fw fa-cogs"></i> Configuracion General</a>
            </li>
            <li>
                <a href="{!! url('admin/subscribers') !!}"><i class="fa fa-fw fa-group"></i> Suscripcion</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

@yield('content')

</div><!-- /#wrapper -->
<!-- /#wrapper -->
<script>
    var baseUrl = '{!! url('/') !!}';
</script>
<!-- jQuery -->
<script src="{{ URL::asset('assets/js/jquery.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.smooth-scroll.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-tagsinput.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-colorpicker.js')}}"></script>
<!-- Switchery -->
<script src="{{ URL::asset('assets/js/bootstrap-toggle.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/plugin/nicEdit.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/admin-genius.js')}}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<script>
    $("#maincats").change(function () {
        $("#subs").html('<option value="">Seleccionar Sub Categoria</option>');
        $("#subs").attr('disabled',true);
        $("#childs").html('<option value="">Seleccionar Sub Categoria</option>');
        $("#childs").attr('disabled',true);
        var mainid = $(this).val();
        $.get('{{url('/')}}/subcats/'+mainid, function(response){
            $("#subs").attr('disabled',false);
            $.each(response, function(i, cart){
                $.each(cart, function (index, data) {
                    $("#subs").append('<option value="'+data.id+'">'+data.name+'</option>');
                    //console.log('index', data)
                })
            })
        });
    });
    
    $("#subs").change(function () {
        $("#childs").html('<option value="">Seleccionar Sub Categoria</option>');
        $("#childs").attr('disabled',true);
        $("#subschild").html('<option value="">Seleccionar Sub Categoria Hijo</option>');
        $("#subschild").attr('disabled',true);
        var mainid = $(this).val();
        $.get('{{url('/')}}/childcats/'+mainid, function(response){
            $("#childs").attr('disabled',false);
            $.each(response, function(i, cart){
                $.each(cart, function (index, data) {
                    $("#childs").append('<option value="'+data.id+'">'+data.name+'</option>');
                    //console.log('index', data)
                })
            })
        });
    });

     $("#childs").change(function () {
        $("#subchilds").html('<option value="">Seleccionar Sub Categoria Hija</option>');
        $("#subchilds").attr('disabled',true);
        var mainid = $(this).val();
        $.get('{{url('/')}}/subchildcats/'+mainid, function(response){
            $("#subchilds").attr('disabled',false);
            $.each(response, function(i, cart){
                $.each(cart, function (index, data) {
                    $("#subchilds").append('<option value="'+data.id+'">'+data.name+'</option>');
                    //console.log('index', data)
                })
            })
        });
    });




</script>
@yield('footer')
</body>
</html>

