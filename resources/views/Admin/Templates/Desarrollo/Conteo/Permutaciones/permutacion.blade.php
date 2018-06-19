<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins animated fadeInUpBig">
            <div class="ibox-title">
                <h5>Permutación</h5>
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
                                            <strong>¿Cómo defines entonces lo que es una permutación?</strong><br><br>

                                            Una permutación es una combinación en donde el orden es importante. La notación para permutaciones
                                            es <b>P(n,r)</b> que es la cantidad de permutaciones de “<b>n</b>” elementos si solamente se seleccionan “<b>r</b>”.

                                            <br><br>
                                            Permutaciones con "<b>n</b>" objetos diferentes tomados todos a la vez <br><br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            <b>¿Cuántos números de 5 cifras diferentes se puede formar con los dígitos: 1, 2, 3, 4, 5.?</b><br><br>
                                                            Tenemos 5 números y necesitamos saber cuantas cantidades diferentes de 5 dígitos podemos formar con ellos.
                                                            <br><br>
                                                            Entonces tenemos <b><sub>n</sub>P<sub>r</sub></b> = <b><sub>5</sub>P<sub>5</sub></b> = 5 x 4 x 3 x 2 x 1 = <b>120</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            Permutaciones con “<b>n</b>” objetos diferentes tomando “<b>r</b>”
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            <b>¿Cuántos números de 3 cifras diferentes se puede formar con los dígitos: 1, 2, 3, 4, 5.?</b><br><br>
                                                            Tenemos 5 números y necesitamos saber cuantas cantidades diferentes de 3 dígitos podemos formar con ellos.
                                                            <br><br>
                                                            Entonces tenemos <b><sub>n</sub>P<sub>r</sub></b> = <b><sub>5</sub>P<sub>3</sub></b> = 5 x 4 x 3 = <b>60</b>
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
                                                            <strong>Para <sub>n</sub>P<sub>r</sub>:</strong>
                                                            <br>
                                                            En general, el número de permutaciones que pueden formarse tomando grupos "<b>r</b>" de
                                                            "<b>n</b>" elementos está dado por
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
                                                            <strong>Permutación</strong><br>
                                                            Permutación es una disposición ordenada de un conjunto de objetos; en los cuales hay un primero,
                                                            un segundo, etc.
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
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="alert alert-info">

                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="alert alert-warning">
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Valor de "n"</label>
                                                        <input id="n" type="number" class="form-control" placeholder="n" style="text-align: right">
                                                    </div>
                                                    <div class="col-xs-1" align="center">
                                                        <br><br>
                                                        <b>P</b>
                                                    </div>
                                                    <div class="col-xs-2">
                                                        <label>Valor de "r"</label>
                                                        <input id="r" type="number" class="form-control" placeholder="r" style="text-align: left">
                                                    </div>
                                                    <div class="col-xs-1">

                                                    </div>
                                                    <div class="col-sm-6" id="procesoSolucion">
                                                        <label for="">Operación: </label>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding-top: 1em">
                                                    <div class="col-xs-12">
                                                        <button type="button" id="comprueba2" class="btn btn-primary btn-rounded" onclick="resulevePermutacion()"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="cleanFactor()"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="alert alert-success" id="respuestaPermutacion">

                                            </div>
                                        </div>
                                    </div>
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

    function resulevePermutacion(){
        $('#respuestaPermutacion').html('La permutación <b><sub>'+$('#n').val()+'</sub>P<sub>'+$('#r').val()+'</sub></b> = '+permutacion($('#n').val(),$('#r').val()));
        imprimeMultiplicacion($('#n').val(),$('#r').val());
    }

    function permutacion(n,r){
        if (r == 0){
            return 1;
        }
        return n * permutacion (n-1,r-1);
    }

    /**
     * Crea la cadena de la multiplicación del factorial.
     * @param n valor de n
     */
    function imprimeMultiplicacion(n,r){
        var cadena="";
        var cont=n;
        for(var i=r;i>0;i--){
            if(i==1){
                cadena=cadena+" "+cont;
            }else{
                cadena=cadena+""+cont+" x ";
            }
            cont--;
        }
        $('#procesoSolucion').html('<label>Operación: </label><br><b><sub>'+n+'</sub>P<sub>'+r+'</sub></b>= '+cadena);
    }

    function cleanFactor(){
        $('#n').val('');
        $('#r').val('');
        $('#respuestaPermutacion').html('');
        $('#procesoSolucion').html('<label>Operación: </label>');
    }
</script>