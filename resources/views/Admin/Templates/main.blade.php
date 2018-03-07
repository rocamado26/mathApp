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
                   <!-- <div class="ism-slider" data-play_type="once" id="my-slider">
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
                    </div>-->
                    <div class="panel panel-success" id="Consejo1" style="display: none;">
                        <div class="panel-heading">
                            <center><img src="img/logo_small2.png" width="50px" height="50px">&nbsp;&nbsp;<font size="5"><i><b>Consejos MathApp</b></i></font></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong><center><font size="3"><i>Aplica problemas a la vida real</i></font></center></strong>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/globe.png" width="100%">
                                </div>
                                <div class="col-xs-8">
                                    <p style="text-align: justify">
                                        <font size="4">
                                            En la medida de lo posible, intenta aplicar los ejercicios al mundo real.
                                            <br><br>
                                            Las matemáticas pueden ser una materia muy abstracta en algunas ocasiones, por lo que mirar su
                                            aplicación práctica puede ayudarte a cambiar tu perspectiva sobre ella y asimilarla de manera diferente.
                                        </font>
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/car.png" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success" id="Consejo2" style="display: none;">
                        <div class="panel-heading">
                            <center><img src="img/logo_small2.png" width="50px" height="50px">&nbsp;&nbsp;<font size="5"><i><b>Consejos MathApp</b></i></font></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong><center><font size="3"><i>Crea un diccionario matemático</i></font></center></strong>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/dictionary.png" width="100%">
                                </div>
                                <div class="col-xs-8">
                                    <p style="text-align: justify">
                                        <font size="4">
                                            La asignatura de matemáticas tiene una jerga específica con muchas vocabulario propio.
                                            <br><br>
                                            Te sugerimos que crees unas fichas de estudio con todos los conceptos que vas aprendiendo y su significado,
                                            para que puedas consultarlos en cualquier momento y no te sientas perdido entre tanta palabrería.
                                        </font>
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/contract.png" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success" id="Consejo3" style="display: none;">
                        <div class="panel-heading">
                            <center><img src="img/logo_small2.png" width="50px" height="50px">&nbsp;&nbsp;<font size="5"><i><b>Consejos MathApp</b></i></font></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong><center><font size="3"><i>Domina los conceptos clave</i></font></center></strong>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/idea.png" width="100%">
                                </div>
                                <div class="col-xs-8">
                                    <p style="text-align: justify">
                                        <font size="4">
                                            <b>¡No intentes aprenderte los problemas de memoria!</b>
                                            <br><br>
                                            Los problemas matemáticos pueden tener miles de variantes y particularidades, por lo que
                                            es inútil aprendernos problemas de memoria sin entenderlos.
                                            <br>
                                            En cambio, es mucho más efectivo dominar los conceptos importantes y el proceso de resolución
                                            de los problemas para que puedas consultarlos en cualquier momento y no te sientas perdido entre tanta palabrería.
                                        </font>
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/board.png" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success" id="Consejo4" style="display: none;">
                        <div class="panel-heading">
                            <center><img src="img/logo_small2.png" width="50px" height="50px">&nbsp;&nbsp;<font size="5"><i><b>Consejos MathApp</b></i></font></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong><center><font size="3"><i>Revisa los errores</i></font></center></strong>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/file.png" width="100%">
                                </div>
                                <div class="col-xs-8">
                                    <p style="text-align: justify">
                                        <font size="4">
                                            Cuando estés practicando con ejercicios, es muy importante que compruebes los resultados y,
                                            más importante aún, que te detengas en la parte que has fallado y examines el proceso en detalle hasta asimilarlo
                                            <br><br>
                                            Por eso es conveniente que tengas unos buenos apuntes con problemas resueltos; de esta manera, evitarás cometer los mismos fallos en el futuro.
                                        </font>
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/file-good.png" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success" id="Consejo5" style="display: none;">
                        <div class="panel-heading">
                            <center><img src="img/logo_small2.png" width="50px" height="50px">&nbsp;&nbsp;<font size="5"><i><b>Consejos MathApp</b></i></font></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong><center><font size="3"><i>Consulta tus dudas</i></font></center></strong>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/question.png" width="100%">
                                </div>
                                <div class="col-xs-8">
                                    <p style="text-align: justify">
                                        <font size="4">
                                            Puede que en muchas ocasiones te sientas atascado en una parte de un problema o que simplemente no entiendas el proceso.
                                            <br><br>
                                            Lo común en estos casos es simplemente pasar de ese problema y pasar al siguiente. Sin embargo, es recomendable despejar
                                            todas las dudas que tengas en la resolución de un problema.
                                        </font>
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/help.png" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success" id="Consejo6" style="display: none;">
                        <div class="panel-heading">
                            <center><img src="img/logo_small2.png" width="50px" height="50px">&nbsp;&nbsp;<font size="5"><i><b>Consejos MathApp</b></i></font></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong><center><font size="3"><i>Práctica, práctica y más práctica</i></font></center></strong>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/library.png" width="100%">
                                </div>
                                <div class="col-xs-8">
                                    <p style="text-align: justify">
                                        <font size="4">
                                            Es imposible aprender matemáticas leyendo y escuchando.
                                            <br><br>
                                            Para aprender matemáticas hay que ponerse el mono de trabajo y lanzarse a hacer ejercicios matemáticos.
                                            <br><br>
                                            Cuanto más practiques, mejor; cada ejercicio tiene sus particularidades y es importante haber realizado
                                            el máximo número de ejercicios posibles antes de enfrentarnos al examen.
                                        </font>
                                    </p>
                                </div>
                                <div class="col-xs-2">
                                    <img src="img/iconos/generales/reading.png" width="100%">
                                </div>
                            </div>
                        </div>
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

            function randomConsejos()
            {
                var inferior = 1;
                var superior = 6;
                var numPosibilidades = (superior + 1) - inferior;
                var aleat = Math.random() * numPosibilidades;
                aleat = Math.floor(aleat);
                aleat = (inferior + aleat);
                switch(aleat)
                {
                    case 1:
                    {
                        $("#Consejo2").fadeOut(0);
                        $("#Consejo3").fadeOut(0);
                        $("#Consejo4").fadeOut(0);
                        $("#Consejo5").fadeOut(0);
                        $("#Consejo6").fadeOut(0);
                        $("#Consejo1").fadeIn(300);
                        //$('#Consejo1').removeAttr('class').attr('class', '');
                        $('#Consejo1').addClass('animated');
                        $('#Consejo1').addClass('fadeInUp');
                    }break;
                    case 2:
                    {
                        $("#Consejo1").fadeOut(0);
                        $("#Consejo3").fadeOut(0);
                        $("#Consejo4").fadeOut(0);
                        $("#Consejo5").fadeOut(0);
                        $("#Consejo6").fadeOut(0);
                        $("#Consejo2").fadeIn(300);
                        //$('#Consejo2').removeAttr('class').attr('class', '');
                        $('#Consejo2').addClass('animated');
                        $('#Consejo2').addClass('shake');
                    }break;
                    case 3:
                    {
                        $("#Consejo2").fadeOut(0);
                        $("#Consejo1").fadeOut(0);
                        $("#Consejo4").fadeOut(0);
                        $("#Consejo5").fadeOut(0);
                        $("#Consejo6").fadeOut(0);
                        $("#Consejo3").fadeIn(300);
                        //$('#Consejo3').removeAttr('class').attr('class', '');
                        $('#Consejo3').addClass('animated');
                        $('#Consejo3').addClass('rubberBand');
                    }break;
                    case 4:
                    {
                        $("#Consejo2").fadeOut(0);
                        $("#Consejo3").fadeOut(0);
                        $("#Consejo1").fadeOut(0);
                        $("#Consejo5").fadeOut(0);
                        $("#Consejo6").fadeOut(0);
                        $("#Consejo4").fadeIn(300);
                       // $('#Consejo4').removeAttr('class').attr('class', '');
                        $('#Consejo4').addClass('animated');
                        $('#Consejo4').addClass('lightSpeedIn');
                    }break;
                    case 5:
                    {
                        $("#Consejo2").fadeOut(0);
                        $("#Consejo3").fadeOut(0);
                        $("#Consejo4").fadeOut(0);
                        $("#Consejo1").fadeOut(0);
                        $("#Consejo6").fadeOut(0);
                        $("#Consejo5").fadeIn(300);
                       // $('#Consejo5').removeAttr('class').attr('class', '');
                        $('#Consejo5').addClass('animated');
                        $('#Consejo5').addClass('rotateIn');
                    }break;
                    case 6:
                    {
                        $("#Consejo2").fadeOut(0);
                        $("#Consejo3").fadeOut(0);
                        $("#Consejo4").fadeOut(0);
                        $("#Consejo1").fadeOut(0);
                        $("#Consejo5").fadeOut(0);
                        $("#Consejo6").fadeIn(300);
                       // $('#Consejo6').removeAttr('class').attr('class', '');
                        $('#Consejo6').addClass('animated');
                        $('#Consejo6').addClass('rollIn');
                    }break;
                }
                setTimeout("randomConsejos()",30000);
            }
            randomConsejos();



            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>



</body>
</html>