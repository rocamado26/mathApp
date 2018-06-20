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
                                            <strong>Combinaciones</strong><br><br>
                                            Para las combinaciones, el orden no importa. ¿Cómo cambia esto el número de resultados? El número de permutaciones que se vuelven la misma cuando el orden ya no importa es el número de maneras distintas de arreglar objetos en un grupo.
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
                                                            <strong>En general</strong>
                                                            <br><br>
                                                            La fórmula del número de combinaciones de <b>n</b> objetos cuando se toma <b>r</b> es:
                                                            <br><br>
                                                            <b>
                                                            <table>
                                                                <tr>
                                                                    <td rowspan="3"><sub>n</sub>C<sub>r</sub></td>
                                                                    <td></td>
                                                                    <td align="center">n!</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;=&nbsp;</td>
                                                                    <td>-----------</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td align="center">r! (n-r)!</td>
                                                                </tr>
                                                            </table>
                                                            </b>
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
                                                            <strong></strong>
                                                            En una combinación no importa el orden.
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
                                                <li>Si ingresas números con parte decimal serán redondeados al entero más próximo.</li>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="alert alert-warning">
                                                <div class="row" id="paso1">
                                                    <div class="col-xs-2">
                                                        <label>Valor de "n"</label>
                                                        <input id="n" type="number" class="form-control" placeholder="n" style="text-align: right">
                                                    </div>
                                                    <div class="col-xs-1" align="center">
                                                        <br><br>
                                                        <b>C</b>
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
                                                <div class="row" style="padding-top: 1em" id="paso2">
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
                element: "#paso1",
                title: "Paso 1",
                content: "Ingresa los valores para “n” y “r”.",
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
                    element: "#paso2",
                    title: "Paso 2",
                    content: "Da clic al botón “Comprobar”.",
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
        if(Number($('#n').val())>=Number($('#r').val())){
            var n=Math.round($('#n').val());
            var r=Math.round($('#r').val());
            $('#respuestaPermutacion').html('La combinación <b><sub>'+n+'</sub>C<sub>'+r+'</sub></b> = '+(permutacion(n,r)/factorialRecursivo(r)));
            imprimeMultiplicacion(n,r);
        }else{
            toastr.error('El valor de "n" es menor a "r"','Error');
        }

    }

    function permutacion(n,r){
        if (r == 0){
            return 1;
        }
        return n * permutacion (n-1,r-1);
    }

    function factorialRecursivo (n) {
        if (n == 0){
            return 1;
        }
        return n * factorialRecursivo (n-1);
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
        $('#procesoSolucion').html('<label>Operación: </label><br><b><sub>'+n+'</sub>C<sub>'+r+'</sub></b>= '+cadena);
    }

    function cleanFactor(){
        $('#n').val('');
        $('#r').val('');
        $('#respuestaPermutacion').html('');
        $('#procesoSolucion').html('<label>Operación: </label>');
    }
</script>