<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins animated fadeInUpBig">
            <div class="ibox-title">
                <h5>Factorial de un Número</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">Teoría</a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <strong>Factorial</strong><br><br>
                                            La función factorial se representa con un signo de exclamación “ <b>!</b> ” detrás de un número.
                                            Esta exclamación quiere decir que hay que multiplicar todos los números enteros positivos que hay entre ese número y el 1.
                                            <br><br>
                                            Por ejemplo:
                                            <div class="well">
                                                <div class="row diff-wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <p style="font-size: 18px; text-align: justify;">
                                                                <b>&nbsp;&nbsp;&nbsp;6! = 6 x 5  x 4 x 3 x 2 x 1</b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            A este número, <b>6!</b> le llamamos generalmente “<b>6 factorial</b>”, aunque también es correcto decir “<b>factorial de 6</b>”.
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            <b>¿De cuántas formas distintas se pueden sentar 5 personas en un banco?</b><br><br>
                                                            Sencillamente son las permutaciones de 5 elementos tomados de 5 en 5, y ese número es el factorial de <b>5 => 5! =1 x 2 x 3 x 4 x 5 = 120</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;<font size="4"><i><b>Punto de apoyo</b></i></font></center>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <strong>Propiedad:  n! = n·(n –1)! </strong>
                                                            <br><br>
                                                            <strong>Factorial de 1 (1!)</strong><br><br>
                                                            1 factorial es, lógicamente, 1, ya que multiplicamos 1 x 1
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <center><img src="img/iconos/generales/brainstorm.png">&nbsp;&nbsp;<font size="4"><i><b>Comprende</b></i></font></center>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <strong>Factorial de 0 (0!)</strong>
                                                            ¿cómo podemos calcular el 0 factorial? Bueno, esto no tiene sentido cuando aplicamos la norma de que hay que
                                                            multiplicar todos los números enteros positivos entre el <b>0</b> y el <b>1</b>, ya que <b>0 x 1</b> es <b>0</b>.<br>
                                                            Al final, por convenio se ha acordado que lo más útil es que el 0 factorial sea igual a 1.<br><br> Así que recuerda: <b>0! = 1</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">Prática</a>
                                    <div class="nav navbar-top-links navbar-right ">
                                        <div class="col-xs-3">
                                            <button type="button" onclick="ayuda_grafica()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                        </div>
                                    </div>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function ayuda_grafica(){

        var tour = new Tour({
            steps: [{
                element: "#config",
                title: "Paso 1",
                content: "Selecciona la función trigonométrica que desees graficar, luego podrás modificar los valores de la formula general y identifica el efecto que tendrá la gráfica. Dar clic en el botón “Comprobar”",
                placement: "top",
                backdrop: true,
                backdropContainer: '#contenido',
                onShown: function (tour){
                    $('body').addClass('tour-open')
                },
                onHidden: function (tour){
                    $('body').removeClass('tour-close')
                }
            },
                {
                    element: "#graf",
                    title: "Paso 2",
                    content: "Área donde visualizaras el grafico de la función seleccionada.",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#contenido',
                    onShown: function (tour){
                        $('body').addClass('tour-open')
                    },
                    onHidden: function (tour){
                        $('body').removeClass('tour-close')
                    }
                }
            ]});
        // Initialize the tour
        tour.init();
        tour.restart();
        // Start the tour
        tour.start();

    }
</script>