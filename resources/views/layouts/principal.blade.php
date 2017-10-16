<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>


    <title>Proceso CallBack @yield('title')</title>

    <!-- Bootstrap Core CSS-->
    {!!Html::style('css/bootstrap.min.css')!!}

    <!-- Logo de MDY icono de pagina -->
    <link rel="icon" type="text/css" href="MDY_Logo.png" sizes="32x32">

    <!-- Custom CSS-->
    {!!Html::style('css/simple-sidebar.css')!!}

    <!--DatePicker CSS-->
    {!! Html::style('css/bootstrap-datepicker.css') !!}
    {!! Html::style('css/bootstrap-datepicker3.css') !!}
    {!! Html::style('css/bootstrap-datepicker.css.map') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container-fluid">
        <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Processo Callback
                    </a>
                </li>
                <li>
                    <b>
                       <font color="#1F618D">{!!Auth::user()->name!!}</font>
                    </b>
                </li>
                <li>
                    <a href="/inicio">Iniciar Encuesta</a>
                </li>
                @if(Auth::user()->puesto_id == 2)
                <li>
                    <a href="/reportes">Ver reporte de Encuestas</a>
                </li>
                <li>
                    <a href="/usuarios">Usuarios del Sistema</a>
                </li>
                <li>
                    <a href="/asesores">Asesores</a>
                </li>
                <li>
                    <a href="/supervisores">Supervisores</a>
                </li>
                @endif
                <li>
                    <a href="/logout">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    <!-- /#sidebar-wrapper -->
    @yield('content_inicio')
    <!--Encuesta-->
    @yield('content_apertura')
    @yield('content_ir')
    @yield('content_nps')
    @yield('content_categorias')
    @yield('content_categorias_nps')
    <!--Usuarios-->
    @yield('content_usuarios')
    @yield('content_registro_usuarios')
    @yield('content_editar_usuarios')
    <!--Asesores-->
    @yield('content_asesores')
    @yield('content_asesores_registro')
    @yield('content_asesores_edicion')
    <!--Supervisores-->
    @yield('content_supervisores')
    @yield('content_supervisores_registro')
    @yield('content_supervisores_edicion')
    <!--Encuestas-->
    @yield('content_registros_encuestas')
    @yield('content_reporte1')
    @yield('content_reporte2')
    @yield('content_reporte_general')
    @yield('content_reporte_general_2')
    @yield('content_reporte_general_1')
     <div class="col-lg-12">
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Extender Menú</a>
        @section('sidebar')
        @show
    </div>  
    </div>
    <!-- /#wrapper -->
    <!--</form>-->
    <!-- jQuery 
    <script src="js/jquery.js"></script>-->
    {!!Html::script('js/jquery.js')!!}

    <!-- Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script> -->
    {!!Html::script('js/bootstrap.min.js')!!}

    <!--Dropdown-->
    {!! Html::script('js/dropdown.js') !!}

    <!--Dropdown Comportamiento-->
    {!! Html::script('js/dropdown_comportamiento.js') !!}

    <!--Dropdown Inicio-->
    {!! Html::script('js/dropdown_supervisores.js') !!}

    <!--jQuery 3.2.1.min.js-->
    {!! Html::script('js/jquery-3.2.1.min.js') !!}

    <!--Formulario de Excel-->
    {!! Html::script('js/excel.js') !!}

    <!--DatePicker-->
    {!! Html::script('js/bootstrap-datepicker.js') !!}
    {!! Html::script('js/bootstrap-datepicker.es.min.js') !!}

    <!--Script.js-->
    {!!Html::script('js/script.js')!!}

    <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
               e.preventDefault();
               $("#wrapper").toggleClass("toggled");
            });
        </script>
    </div>
</body>

</html>