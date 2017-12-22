<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Contenedor para el título de la página -->
    <title>MathApp | @yield('title','Default')</title>
	<!-- Bootstrap css y awesome css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- Animate css y style css -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/figuras/figuras.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/plugins/bootstrapTour/bootstrap-tour.min.css" rel="stylesheet">
    <link href="css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jsxgraph.css" />
    <link href="css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ism/css/my-slider.css"/>
    <script src="ism/js/ism-2.2.min.js"></script>
    <!-- Contenedor para más css -->
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    @yield('css')
</head>
<body>
<!-- Contenedor General -->
<div id="wrapper">
    <!-- Contenedor para el menú -->
    @include('Admin.Templates.Globales.Menu')
    <!-- Div para La barra horizontal superior-->
    <div id="page-wrapper" class="gray-bg">
        <!-- Contenedor para el La barra horizontal superior-->
        @include('Admin.Templates.Globales.BarraSuperior')
        <!-- Contenedor para La barra de navegación-->
        @include('Admin.Templates.Globales.BarraNavegacion')
        <!-- Contenedor principal-->
        <div class="wrapper wrapper-content">
            <div id="contenido">
                <div class="col-sm-offset-1 col-lg-offset-1 col-sm-10 col-lg-10">
                    <div class="ism-slider" data-play_type="once" id="my-slider">
                        <ol>
                            <li>
                                <img src="ism/image/slides/_u/1513926577620_391576.jpg">
                            </li>
                            <li>
                                <img src="ism/image/slides/_u/1513926575843_262266.jpg">
                            </li>
                            <li>
                                <img src="ism/image/slides/_u/1513926575011_133926.jpg">
                            </li>
                            <li>
                                <img src="ism/image/slides/_u/1513926574455_227839.jpg">
                            </li>
                            <li>
                                <img src="ism/image/slides/_u/1513926572892_388869.jpg">
                            </li>
                            <li>
                                <img src="ism/image/slides/_u/1513926562636_837246.jpg">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Contenedor para el pié de página-->
            @include('Admin.Templates.Globales.PiePagina')
        </div>
    </div>
</div>
<!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script type="text/javascript" src="js/mathapp/cargamodulos.js"></script>
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script src="js/plugins/bootstrapTour/bootstrap-tour.min.js"></script>
    <script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/jsxgraphcore.js"></script>
    <script src="js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <!--Agregado recientemente 30/08/2017
    <!-- iCheck -->
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>

</body>
</html>