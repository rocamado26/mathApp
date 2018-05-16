<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins  animated fadeInUpBig">
            <div class="ibox-title">
                <h5>Desigualdades <small>-Generalidades</small></h5>
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
                                            <strong>Desigualdades Cuadráticas</strong><br><br>
                                            <p style="text-align: justify;">
                                                Una desigualdad en la variable <b>x</b> se llama cuadrática cuando la podemosescribir en la forma
                                                <br>
                                                <b>ax<sup>2</sup> + bx + c > 0 ( ≥ 0 )</b>, en donde <b>a,b</b> y <b>c</b> son constantes con <b>a ≠ 0</b>
                                                <br><br>
                                                Para resolver esta desigualdad, es decir encontrar las <b>x</b> que satisfacen estadesigualdad,
                                                escribimos el lado izquierdo como el producto de dos expresioneslineales, esto es, factorizamos
                                                y examinamos el signo de los factores en losintervalos definidos por las raíces de los factores.
                                                <br>
                                                Observe que resolver: <b>( x - ... )( x + ...) > 0</b>
                                                <br><br>
                                                <strong>Para factorizar una expresion de la forma: <b>ax<sup>2</sup> + bx + c > 0</strong></b> lo realizamos de la forma siguiente:
                                                <br><br>
                                                <img style="width: 50%; height: 50%" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/factorizacion.png')}}" class="img-responsive">
                                            </p>
                                            <div class="well">
                                                <div class="row diff-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            &nbsp;&nbsp;<b style="font-size: 18px">( x + ... )( x + ... ) </b> Colocamos una <b>x</b> en cada factor proveniente de la raíz cuadrada de <b>x<sup>2</sup></b><br>
                                                            &nbsp;&nbsp;<b style="font-size: 18px">( x + a )( x + ... )</b>; <b>a</b> proviene de la suma de dos números, conformando el término <b>cx</b>.
                                                            <br>
                                                            &nbsp;&nbsp;<b style="font-size: 18px">( x + a )( x + b )</b>; <b>b</b> proviene de la multiplicación de dos números, conformando el término <b>d</b>.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                </div>
                                                <div class="panel-body">
                                                    Resolver la desigualdad: <b style="font-size: 18px">x<sup>2</sup> - 3x - 4 > 0</b>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="well">
                                                <div class="row diff-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            &nbsp;&nbsp;<b style="font-size: 18px">( x - a ) ( x + b ) > 0</b> <br>
                                                            &nbsp;&nbsp;<b style="font-size: 18px">a = -4</b> <br>
                                                            &nbsp;&nbsp;<b style="font-size: 18px">b = 1</b>
                                                        </div>
                                                        <div class="col-md-8">
                                                            Creamos los dos factores <br>
                                                            <b style="font-size: 18px">a + b</b> tienen que forma a <b>-3</b> <br>
                                                            <b style="font-size: 18px">a b</b> tienen que forma a <b>-4</b> <br>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            &nbsp;&nbsp;Nuestro ejercicio factorizado queda de la manera siguiente:
                                                            <br>
                                                            &nbsp;&nbsp;<b style="font-size: 18px">( x - 4 ) ( x + 1 ) > 0</b> <br>
                                                            &nbsp;&nbsp;El signo <b style="font-size: 18px">-</b> del primer factor es el primer signo de la desigualdad
                                                            <br>
                                                            &nbsp;&nbsp;y el signo <b style="font-size: 18px">+</b> del segundo factor es la multiplicación del primero y segundo signo de la desigualdad.
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    &nbsp;&nbsp;Es momento de encontrar el conjunto solución para la desigualdad:<br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            &nbsp;&nbsp;<b style="font-size: 18px">x - 4 = 0</b> <br>
                                                            &nbsp;&nbsp;<b style="font-size: 18px">x + 1 = 0</b> <br><br>
                                                            &nbsp;&nbsp;<b style="font-size: 18px">x<sub>1</sub> = 4</b> y <b style="font-size: 18px">x<sub>2</sub> = -1</b>
                                                        </div>
                                                        <div class="col-md-8">
                                                            Igualamos cada fator a <b style="font-size: 18px">"0"</b> <br> <br><br>
                                                            Hemos encontrado las dos raíces
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <table style="margin-left: 6px">
                                                                <tr>
                                                                    <td><b>&nbsp;&nbsp;Factores&nbsp;&nbsp;</b></td>
                                                                    <td><b>&nbsp;&nbsp;( -∞ , -1 )&nbsp;&nbsp;</b> </td>
                                                                    <td><b>&nbsp;&nbsp;( -1 , 4 )&nbsp;&nbsp;</b></td>
                                                                    <td><b>&nbsp;&nbsp;( 4 , +∞)&nbsp;&nbsp;</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4">-----------------------------------------------------------------</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center">( x - 4 )</td>
                                                                    <td align="center"> - </td>
                                                                    <td align="center"> - </td>
                                                                    <td align="center"> + </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center">( x + 1)</td>
                                                                    <td align="center"> - </td>
                                                                    <td align="center"> + </td>
                                                                    <td align="center"> + </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4">-----------------------------------------------------------------</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center">( x - 4 )( x + 1 )</td>
                                                                    <td align="center"> + </td>
                                                                    <td align="center"> - </td>
                                                                    <td align="center"> + </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p style="text-align: justify">
                                                                Multiplicamos los signos por columna y colocamos el resultado en la última fila y
                                                                evaluamos en cuál de los intervalos se cumple la desigualdad. Para este caso
                                                                buscamos los valore mayores a cero. Y los intervalos q satisfacen esta desigualdad son:
                                                                <br><br>
                                                                Solución: <b style="font-size: 18px">( -∞ , -1 ) U ( 4 , +∞)</b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            <p style="text-align: justify;">
                                                                <strong>Para encontrar el conjunto solución</strong>
                                                                <br>
                                                                En cada intervalo se marca el signo
                                                                que toma la expresión algebraica respectiva que está escrita en la parte izquierda
                                                                al evaluarla en un número que pertenece a cada intervalo(como los encerrados en
                                                                círculos). El producto de los signos de las expresiones algebraicas en su respectivo
                                                                intervalo se ubica en la última fila.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"><br>
                                                <div class="col-lg-12">
                                                    <div class="panel panel-warning">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;<font size="4"><i><b>Punto de apoyo</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            <p style="text-align: justify">
                                                                <strong>Pasos a seguir para resolver desigualdades cuadráticas</strong>
                                                                <br>
                                                                <li>
                                                                    Escribir la desigualdad en su forma canónica: <b>x<sup>2</sup> - 3x - 4 > 0  (<0; ≤ 0  ó  ≥ 0)</b>
                                                                </li>
                                                                <li>
                                                                    Factorizar el lado izquierdo. En caso que no se pueda la solución es trivial: <b>R o ∅</b>
                                                                </li>
                                                                <li>
                                                                    Colocar las raíces de los factores en la recta real.
                                                                </li>
                                                                <li>
                                                                    Colocar dos pares de paréntesis encima de cada intervalo establecido por lasraíces.
                                                                </li>
                                                                <li>
                                                                    Tomar valores de prueba, evaluar los factores en los valores de prueba ycolocar el signo resultante en el paréntesis respectivo del factor.
                                                                </li>
                                                                <li>
                                                                    Debajo de cada intervalo definido por los factores colocar un par de paréntesis,realizar la multiplicación de signo de arriba y colocar el resultado en el paréntesisde abajo.
                                                                </li>
                                                                <li>
                                                                    Responder la pregunta. Por ejemplo si la desigualdad es <0, colocar losintervalos en donde el signo dio negativo. Análogamente en los demás casos.
                                                                </li>
                                                            </p>
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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">Ejemplos prácticos</a>
                                    <div class="nav navbar-top-links navbar-right ">
                                        <div class="col-xs-3" id="ayuda_boton">
                                            <button type="button" onclick="ayuda_ejemplos()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                        </div>
                                    </div>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <div  class="row">
                                        <div class="col-md-12">
                                            <div align="center">
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_desigualdades('1')">1</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_desigualdades('2')">2</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_desigualdades('3')">3</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="ibox ui-resizable">
                                                <div class="ibox-content">
                                                    <div class="row animated fadeInUpBig" id="pract_desigualdades1">
                                                        <div class="col-md-8">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            Resuelve la desigualdad: <br>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12" align="center">
                                                                            <b style="font-size: 18px">
                                                                                6x<sup>2</sup> - 7x - 3 ≤ 0
                                                                            </b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    Al factorizarlo queda de la manera siguiente:<br><br>
                                                                </div>
                                                                <div class="col-md-12" id="A1" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td>(</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                                                                                <td> 3 </td>
                                                                                <td> ) &nbsp;&nbsp;</td>
                                                                                <td> ( </td>
                                                                                <td> 3x </td>
                                                                                <td>&nbsp;&nbsp;+&nbsp;&nbsp;</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP2"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td> ) </td>
                                                                                <td>&nbsp;&nbsp; ≤ &nbsp;&nbsp;</td>
                                                                                <td>&nbsp;&nbsp; 0</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div id="EP1" class="col-lg-12 alert alert-warning">
                                                                    <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                                    <br><br>
                                                                    <div class="row" id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                        <div class="col-md-3">
                                                                            <img id="AP2" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP2.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP1" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP1.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP4" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP4.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP3" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP3.png')}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="SP1" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Excelente, has resuelto de manera correcta la practica, Has logrado comprobar la desigualdad y el conjunto solución es:
                                                                        <br><br>
                                                                    </p><center><font size="3"><b>[- <sup>1</sup>/ <sub>3</sub> ; <sup>3</sup>/ <sub>2</sub>]</b></font></center>
                                                                    <p></p>
                                                                </div>
                                                                <div id="botonesPrac1" class="row col-lg-12">
                                                                    <center>
                                                                        <button type="button" class="btn btn-primary btn-rounded" onclick="ComprobarPracticas(1)"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPracticas(1)"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row animated fadeInUpBig" id="pract_desigualdades2" style="display: none;">
                                                        <div class="col-md-8">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            Resuelve la desigualdad: <br>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12" align="center">
                                                                            <b style="font-size: 18px">
                                                                                x<sup>2</sup> - 3x + 2 > 0
                                                                            </b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    Al factorizarlo queda de la manera siguiente:
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <br><br>
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td>(</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP3"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                                                                                <td> 2 </td>
                                                                                <td> ) &nbsp;&nbsp;</td>
                                                                                <td> ( </td>
                                                                                <td> x </td>
                                                                                <td>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP4"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td> ) </td>
                                                                                <td>&nbsp;&nbsp; > &nbsp;&nbsp;</td>
                                                                                <td>&nbsp;&nbsp; 0</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div id="EP2" class="col-lg-12 alert alert-warning">
                                                                    <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                                    <br><br>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <img id="AP6" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP4.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP8" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP3.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP7" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP2.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP5" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP5.png')}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="SP2" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Excelente, has resuelto de manera correcta la practica, Has logrado resolver la desigualdad y el conjunto solución es:
                                                                        <br><br>
                                                                    </p><center><font size="3"><b>( -∞ , 1 ) U ( 2 , +∞)</b></font></center>
                                                                </div>
                                                                <div id="botonesPrac2" class="row col-lg-12">
                                                                    <center>
                                                                        <button type="button" class="btn btn-primary btn-rounded" onclick="ComprobarPracticas(2)"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPracticas(2)"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row animated fadeInUpBig" id="pract_desigualdades3" style="display: none;">
                                                        <div class="col-md-8">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                Resuelve la desigualdad: <br>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12" align="center">
                                                                                <b style="font-size: 18px">
                                                                                    x<sup>2</sup> - 4x - 21 ≥ 0
                                                                                </b>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <br>Al factorizarlo queda de la manera siguiente:
                                                                    <br> <br>
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td>(</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP5"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                                                                                <td> 3 </td>
                                                                                <td> ) &nbsp;&nbsp;</td>
                                                                                <td> ( </td>
                                                                                <td> &nbsp;x </td>
                                                                                <td>&nbsp;&nbsp;+&nbsp;&nbsp;</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP6"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td> ) </td>
                                                                                <td>&nbsp;&nbsp; ≥ &nbsp;&nbsp;</td>
                                                                                <td>&nbsp;&nbsp; 0</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div id="EP3" class="col-lg-12 alert alert-warning">
                                                                    <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                                    <br><br>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <img id="AP9" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP1.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP12" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP7.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP10" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP4.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP11" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP6.png')}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="SP3" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Excelente, has resuelto de manera correcta la practica, Has logrado resolver la desigualdad y el conjunto solución es:
                                                                        <br><br>
                                                                    </p><center><font size="3"><b>[ -7 , 3]</b></font></center>
                                                                </div>
                                                                <div id="botonesPrac3" class="row col-lg-12">
                                                                    <center>
                                                                        <button type="button" class="btn btn-primary btn-rounded" onclick="ComprobarPracticas(3)"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPracticas(3)"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                    </center>
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">Práctica</a>
                                    <div class="nav navbar-top-links navbar-right ">
                                        <div class="col-xs-3" id="ayuda_boton">
                                            <button type="button" onclick="ayuda_practicas()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                        </div>
                                    </div>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="alert alert-info">
                                                Ingresa tu ejercicio de la forma <b>x<sup>2</sup> + bx + c > 0</b> o de la forma: <b>ax<sup>2</sup> + bx + c > 0</b><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="alert alert-warning">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <div align="center">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="RadioX" value="2" name="radioInline" onchange="verFactorizacion(true)" checked>
                                                                <label for="RadioX"><b>x<sup>2</sup> + bx + c > 0</b></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div align="center">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="RadioX2" value="2" name="radioInline" onchange="verFactorizacion(false)">
                                                                <label for="RadioX2"><b>ax<sup>2</sup> + bx + c > 0</b></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-12" align="center">
                                            <table style="font-size: 18px">
                                                <tr>
                                                    <td><input type="number" id="x2" placeholder="a" disabled class="form-control" style="text-align: right"></td>
                                                    <td><b>X<sup>2</sup>&nbsp;&nbsp;</b></td>
                                                    <td>
                                                        &nbsp;&nbsp;
                                                        <button id="S1" style="margin-bottom: 0px;!important;" onclick="signos(true,false)" class="btn btn-default"><b>+</b></button>
                                                        <button id="S2" style="display: none;margin-bottom: 0px;!important;" onclick="signos(true,true)" class="btn btn-default"><b>-</b></button>
                                                        &nbsp;&nbsp;
                                                    </td>
                                                    <td><input type="Number" id="x" placeholder="b" class="form-control" style="text-align: right"></td>
                                                    <td><b>X&nbsp;&nbsp;</b></td>
                                                    <td>
                                                        &nbsp;&nbsp;
                                                        <button id="S3" style="display: none;margin-bottom: 0px;" onclick="signos(false,false)" class="btn btn-default"><b>+</b></button>
                                                        <button id="S4" style="margin-bottom: 0px;!important;" onclick="signos(false,true)" class="btn btn-default"><b>-</b></button>
                                                        &nbsp;&nbsp;
                                                    </td>
                                                    <td><input type="number" id="c" placeholder="c" class="form-control" style="text-align: right"></td>
                                                    <td>
                                                        &nbsp;&nbsp;
                                                        <button type="button" id="btn1" onclick="cambiaBoton(2)" class="btn btn-danger" style="margin-bottom: 0px"><b>></b></button>
                                                        <button type="button" id="btn2" onclick="cambiaBoton(3)" style="display: none;margin-bottom: 0px" class="btn btn-danger"><b>≥</b></button>
                                                        <button type="button" id="btn3" onclick="cambiaBoton(4)" style="display: none;margin-bottom: 0px" class="btn btn-danger"><b><</b></button>
                                                        <button type="button" id="btn4" onclick="cambiaBoton(1)" style="display: none;margin-bottom: 0px" class="btn btn-danger"><b>≤</b></button>
                                                        &nbsp;&nbsp;
                                                    </td>
                                                    <td><b>&nbsp;&nbsp;0</b></td>
                                                </tr>
                                            </table>
                                            <br>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" id="listo">
                                        <div class="col-sm-offset-10 col-sm-2">
                                            <button type="button" class="btn btn-primary btn-rounded" onclick="desigualdad()"><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Listo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" id="alert1">
                                        <div class="col-xs-12">
                                            <div class="alert alert-info">
                                                Para resolver el ejercicio debes encontrar los valores de <b>b</b> y <b>c</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="alert2" style="display: none">
                                        <div class="col-xs-12">
                                            <div class="alert alert-info">
                                                Para resolver el ejercicio debes utilizar le método de tijeras
                                                <li>El producto cruzado de <b>v1</b> y <b>v4</b> <b>más</b> el producto cruzado de <b>v3</b> y <b>v2</b> tiene que dar como resultado el término <b>bx</b></li>
                                                <li>El producto de <b>v1</b> y <b>v3</b> debe dar el término <b>ax<sup>2</sup></b></li>
                                                <li>El producto de <b>v2</b> y <b>v4</b> debe dar el término <b>c</b></li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-warning">
                                                <div class="row" id="factor">
                                                    <div class="col-sm-12">
                                                        <table>
                                                            <tr>
                                                                <td>Dos números que sumados </td>
                                                                <td><b>&nbsp;&nbsp;d + e</b></td>
                                                                <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                <td><b id="b1">b</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dos números que multiplicados </td>
                                                                <td><b>&nbsp;&nbsp;(d) (e)</b></td>
                                                                <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                <td><b id="c1">c</b></td>
                                                            </tr>
                                                        </table>
                                                        <br>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm-10" align="center">
                                                        <table style="font-size: 18px">
                                                            <tr>
                                                                <td>(&nbsp;&nbsp;<b>X</b> &nbsp;&nbsp;</td>
                                                                <td id="btns1">&nbsp;&nbsp;<b>+</b>&nbsp;&nbsp;</td>
                                                                <td><input type="number" id="d1" placeholder="d" class="form-control" style="text-align: right"></td>
                                                                <td>&nbsp;&nbsp;<b>)</b>&nbsp;&nbsp;</td>
                                                                <td><b>(</b>&nbsp;&nbsp;</td>
                                                                <td><b>X</b>&nbsp;&nbsp;</td>
                                                                <td id="btns2">&nbsp;&nbsp;<b>-</b>&nbsp;&nbsp;</td>
                                                                <td><input type="number" id="e1" placeholder="e" class="form-control" style="text-align: right"></td>
                                                                <td>&nbsp;&nbsp;<b id="simbolo1">></b>&nbsp;&nbsp;</td>
                                                                <td>&nbsp;&nbsp;<b>0</b>&nbsp;&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-sm-2 text-right">
                                                        <button type="button" id="comprueba1" class="btn btn-primary btn-rounded" onclick="operarFactor()"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                    </div>
                                                </div>
                                                <div class="row" id="tijera" align="center" style="display: none">
                                                    <div class="col-sm-10">
                                                        <table style="font-size: 18px">
                                                            <tr>
                                                                <td align="center">
                                                                    <b>ax<sup>2</sup></b>
                                                                </td>
                                                                <td align="center">
                                                                    <b>c</b>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><b>bx</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="number" id="T1" placeholder="v1" class="form-control" style="text-align: center"></td>
                                                                <td><input type="number" id="T2" placeholder="v2" class="form-control" style="text-align: center"></td>
                                                                <td>&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</td>
                                                                <td><b id="T5"></b></td>
                                                                <td>&nbsp;&nbsp;X</td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="number" id="T3" placeholder="v3" class="form-control" style="text-align: center"></td>
                                                                <td><input type="number" id="T4" placeholder="v4" class="form-control" style="text-align: center"></td>
                                                                <td>&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</td>
                                                                <td><b id="T6"></b>&nbsp;&nbsp;&nbsp;</td>
                                                                <td>&nbsp;&nbsp;X</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center"><b id="T7"></b> X<sup>2</sup></td>
                                                                <td align="center"><b id="T8"></b></td>
                                                                <td></td>
                                                                <td><b id="T9"></b></td>
                                                                <td>&nbsp;&nbsp;X</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="button" id="comprueba2" class="btn btn-primary btn-rounded" onclick="calculoTijera(true)"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success" id="respuesta1" style="display: none">

                                            </div>
                                            <div class="alert alert-success" id="respuesta2" style="display: none">
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
    //swal("¡Borrado!", "Progreso borrado.", "success");
    var opBtn=1;
    var paso1="#EP1",paso2="#A1",paso3="#botonesPrac1";
    var signo1='+',signo2='-';

    function practicas_desigualdades(op){
        switch (op){
            case '1':{
                $('#pract_desigualdades1').show();
                $('#pract_desigualdades2').hide();
                $('#pract_desigualdades3').hide();
                paso1="#EP1";
                paso2="#A1";
                paso3="#botonesPrac1";
            }break;
            case '2':{
                $('#pract_desigualdades1').hide();
                $('#pract_desigualdades2').show();
                $('#pract_desigualdades3').hide();
                paso1="#EP2";
                paso2="#A2";
                paso3="#botonesPrac2";
            }break;
            case '3':{
                $('#pract_desigualdades1').hide();
                $('#pract_desigualdades2').hide();
                $('#pract_desigualdades3').show();
                paso1="#EP3";
                paso2="#A3";
                paso3="#botonesPrac3";
            }break;
        }
    }

    function ayuda_practicas(){
        var tour = new Tour({
            steps: [{
                element: "#paso1p",
                title: "Paso 1",
                content: "Ingresa los datos del miembro derecho y izquierdo de la desigualdad.",
                placement: "top",
                backdrop: true,
                backdropContainer: '#wrapper',
                onShown: function (tour){
                    $('body').addClass('tour-open')
                },
                onHidden: function (tour){
                    $('body').removeClass('tour-close')
                }
            },
                {
                    element: "#paso2p",
                    title: "Paso 2",
                    content: "Da clic sobre el botón para cambiar el símbolo.",
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
                    element: "#btnMas",
                    title: "Paso 3",
                    content: "Da clic para iniciar el ejercicio.",
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
                    element: "#paso3p",
                    title: "Paso 4",
                    content: "Observa el número que se le ha asignado al termino ya que ese te servirá para operar o mover los términos.",
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
                    element: "#paso4p",
                    title: "Paso 5",
                    content: "Caja donde digitaras el número del término a operar o mover de miembro.",
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
                    element: "#paso5p",
                    title: "Paso 6",
                    content: "Caja donde digitaras el número del término a operar con el primer término.",
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
                    element: "#paso6p",
                    title: "Paso 7",
                    content: "Botones con las dos operaciones elementales a realizar.",
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
                    element: "#paso7p",
                    title: "Paso 8",
                    content: "Botones con las dos operaciones de mover.",
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

    function ayuda_ejemplos(){
        var tour = new Tour({
            steps: [{
                element: paso1,
                title: "Paso 1",
                content: "Haz clic sobre cada elemento y arrástralo al correspondiente espacio.",
                placement: "top",
                backdrop: true,
                backdropContainer: '#wrapper',
                onShown: function (tour){
                    $('body').addClass('tour-open')
                },
                onHidden: function (tour){
                    $('body').removeClass('tour-close')
                }
            },
                {
                    element: paso2,
                    title: "Paso 2",
                    content: "Coloca el elemento en su espacio.",
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
                    element: paso3,
                    title: "Paso 3",
                    content: "Dar clic sobre el botón “Comprobar” para verificar el ejercicio o “Reestablecer” para reiniciar la práctica.",
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

    function desigualdad(){
        $('#respuesta1').hide();
        if(signo1=='+'){
            $('#b1').html($('#x').val());
        }else{
            $('#b1').html('-'+$('#x').val());
        }
        if((signo1=='+' && signo2=='+') || (signo1=='-' && signo2=='-')){
            //d=Number('+'+$('#e1').val());
            $('#c1').html($('#c').val());
        }else{
            $('#c1').html('-'+$('#c').val());
        }
        toastr.success('Encuentra los valores de "d" y "c" ','¡Listo!');
    }

    /**
     * Cambia el boton segun se presione.
     * @param op boton a visualizar.
     */
    function cambiaBoton(op){
        switch(op){
            case 1:{$('#btn1').show();$('#btn2').hide();$('#btn3').hide();$('#btn4').hide();opBtn=1;$('#simbolo1').html('>');}break;
            case 2:{$('#btn1').hide();$('#btn2').show();$('#btn3').hide();$('#btn4').hide();opBtn=2;$('#simbolo1').html('≥');}break;
            case 3:{$('#btn1').hide();$('#btn2').hide();$('#btn3').show();$('#btn4').hide();opBtn=3;$('#simbolo1').html('<');}break;
            case 4:{$('#btn1').hide();$('#btn2').hide();$('#btn3').hide();$('#btn4').show();opBtn=4;$('#simbolo1').html('≤');}break;
        }
    }
    

    function verFactorizacion(op) {
        if(op){
            $( "#x2" ).prop( "disabled", true );
            $('#factor').show();
            $('#tijera').hide();
            $('#alert2').hide();
            $('#alert1').show();
            $('#respuesta2').hide();
            $('#listo').show();
        }else{
            $( "#x2" ).prop( "disabled", false);
            $('#factor').hide();
            $('#tijera').show();
            $('#alert1').hide();
            $('#alert2').show();
            $('#respuesta1').hide();
            $('#listo').hide();
        }
    }
    
    function calculoTijera(op) {

        var sig1='';
        var sig2='';
        var t1=Number($('#T1').val())*Number($('#T3').val());
        var t2=Number($('#T2').val())*Number($('#T4').val());
        var st=(Number($('#T3').val())*Number($('#T2').val()))+(Number($('#T1').val())*Number($('#T4').val()));
        var x2=Number($('#x2').val());
        var xb=Number(signo1+$('#x').val());
        var c=Number(signo2+$('#c').val());

        console.warn('x2',x2);
        console.warn('xb',xb);
        console.warn('c',c);

        $('#T5').html(Number($('#T3').val())*Number($('#T2').val()));
        $('#T6').html(Number($('#T1').val())*Number($('#T4').val()));
        $('#T7').html(t1);
        $('#T8').html(t2);
        $('#T9').html(st);
        if(x2==t1 && xb==st && t2==c){
            toastr.success('Haz resuelto el ejercicio.','Excelente');
            if(Math.sign(Number($('#T2').val()))!=-1){
                sig1='+';
            }else{
                sig1='';
            }
            if(Math.sign(Number($('#T4').val()))!=-1){
                sig2='+';
            }else{
                sig2='';
            }
            $('#respuesta2').show();
            $('#respuesta2').html('La factorización del trinomio queda de la siguiente manera: <b style="font-size: 18px"> ( '+$('#T1').val()+'x '+(sig1+$('#T2').val())+') ( '+$('#T3').val()+'x '+(sig2+$('#T4').val())+')</b>' +
                '<br> Iguala cada producto a <b>0</b> y despeja <b>x</b> de cada uno de ellos para encontrar sus valores. <br>' +
                '');
        }else{
            toastr.error('Los datos ingresados no cumplen las condiciones.','Error');
        }

        //if(){}else{}
    }

    function operarFactor() {
        if(valida(1)){
            if(valida(2)){
                if(valida(3)){
                    var a=Number(signo1+$('#x').val());
                    var b=Number(signo2+$('#c').val());
                    var c=Number(signo1+$('#d1').val());
                    var d=0;
                    if((signo1=='+' && signo2=='+') || (signo1=='-' && signo2=='-')){
                        d=Number('+'+$('#e1').val());
                    }else{
                        d=Number('-'+$('#e1').val());
                    }
                    if(((c+d)==a) && ((c*d)==b)){
                        $('#respuesta1').show();
                        console.warn('d es correcto');
                        toastr.success('Haz resuelto el ejercicio.','Excelente');
                        $('#respuesta1').html('<p>Para <b>X</b> tenemos dos raice o dos valores que cumplen la desigualdad:</p>El valor de <b>X<sub>1</sub></b> = <b></b> <b>'+(-1*c)+'</b><br>El valor de <b>X<sub>2</sub></b> = <b></b> <b>'+(-1*d)+'</b>')
                    }else{
                        $('#respuesta1').html('');
                        $('#respuesta1').hide();
                        toastr.error('Los datos ingresados no cumplen las condiciones.','Error');
                    }

                }else{
                    $('#respuesta1').html('');
                    $('#respuesta1').hide();
                    toastr.error('No es posible realizar operación.','Error');
                }
            }else{
                $('#respuesta1').html('');
                $('#respuesta1').hide();
                toastr.error('No es posible realizar operación.','Error');
            }
        }else{
            $('#respuesta1').html('');
            $('#respuesta1').hide();
            toastr.error('No es posible realizar operación.','Error');
        }
    }

    function valida(op){
        switch (op){
            case 1:{/*Valida que el campo x y c no esté vacío*/
                if($('#x').val()!='' && $('#c').val()!=''){
                    return true;
                }else{
                    return false;
                }
            }break;
            case 2:{/*Valida el coeficiente de x*/
                if($.isNumeric($('#x').val()) && $.isNumeric($('#c').val())){
                    console.warn('numero1:',$.isNumeric($('#x').val()));
                    console.warn('numero2:',$.isNumeric($('#c').val()));
                    return true;
                }else{
                    console.warn('no son numeros');
                    return false;
                }
            }break;
            case 3:{
                if($.isNumeric($('#d1').val()) && $.isNumeric($('#e1').val())){
                    return true;
                }else{
                    return false;
                }
            }break;
        }
    }

    function signos(btn,valor) {
        if(btn){
            if(valor){
                signo1='+';
                $('#btns1').html('&nbsp;&nbsp;<b>'+signo1+'</b>&nbsp;&nbsp;');
                if(signo1=='+' && signo2=='+'){
                    $('#btns2').html('&nbsp;&nbsp;<b>+</b>&nbsp;&nbsp;');
                }else{
                    $('#btns2').html('&nbsp;&nbsp;<b>-</b>&nbsp;&nbsp;');
                }
                $('#S1').show();
                $('#S2').hide();
            }else{
                signo1='-';
                $('#btns1').html('&nbsp;&nbsp;<b>'+signo1+'</b>&nbsp;&nbsp;');
                if(signo1=='-' && signo2=='-'){
                    $('#btns2').html('&nbsp;&nbsp;<b>+</b>&nbsp;&nbsp;');
                }else{
                    $('#btns2').html('&nbsp;&nbsp;<b>-</b>&nbsp;&nbsp;');
                }
                $('#S2').show();
                $('#S1').hide();
            }
        }else{
            if(valor){
                signo2='+';
                if(signo1=='+' && signo2=='+'){
                    $('#btns2').html('&nbsp;&nbsp;<b>+</b>&nbsp;&nbsp;');
                }else{
                    $('#btns2').html('&nbsp;&nbsp;<b>-</b>&nbsp;&nbsp;');
                }
                $('#S3').show();
                $('#S4').hide();
            }else{
                signo2='-';
                if(signo1=='-' && signo2=='-'){
                    $('#btns2').html('&nbsp;&nbsp;<b>+</b>&nbsp;&nbsp;');
                }else{
                    $('#btns2').html('&nbsp;&nbsp;<b>-</b>&nbsp;&nbsp;');
                }
                $('#S4').show();
                $('#S3').hide();
            }
        }
    }

    function factorizacion() {

    }
    
    function ComprobarPracticas(op){
        switch (op){
            case 1:{
                if((document.getElementById('AP1').parentNode.id=='DP1') && (document.getElementById('AP3').parentNode.id=='DP2')){
                    swal("Excelente!", "Has resuelto correctamente el ejercicio", "success");
                    $('#EP1').hide();
                    $('#SP1').show();
                }else{
                    swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                }
            }break;
            case 2:{
                if((document.getElementById('AP6').parentNode.id=='DP3') && (document.getElementById('AP8').parentNode.id=='DP4')){
                    swal("Excelente!", "Has resuelto correctamente el ejercicio", "success");
                    $('#EP2').hide();
                    $('#SP2').show();
                }else{
                    swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                }
            }break;
            case 3:{
                if((document.getElementById('AP10').parentNode.id=='DP5') && (document.getElementById('AP11').parentNode.id=='DP6')){
                    swal("Excelente!", "Has resuelto correctamente el ejercicio", "success");
                    $('#EP3').hide();
                    $('#SP3').show();
                }else{
                    swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                }
            }break;
        }
    }

    function limpiarPracticas(op){
        switch (op){
            case 1:{
                $('#DP1').html('');
                $('#DP2').html('');
                $('#DP3').html('');
                $('#DP4').html('');
                $('#EP1').html('<center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center><br><br><div class="row" id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"><div class="col-md-3"><img id="AP2" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP2.png')}}"></div><div class="col-md-3"><img id="AP1" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP1.png')}}"></div><div class="col-md-3"><img id="AP4" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP4.png')}}"></div><div class="col-md-3"><img id="AP3" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP3.png')}}"></div></div>');
                $("#SP1").fadeOut(0);
                $("#EP1").fadeIn(300);
            }break;
            case 2:{
                $('#DP7').html('');
                $('#DP8').html('');
                $('#DP9').html('');
                $('#EP2').html('<center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center><br><br><div class="row"><div class="col-md-3"><img id="AP6" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP4.png')}}"></div><div class="col-md-3"><img id="AP8" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP3.png')}}"></div><div class="col-md-3"><img id="AP7" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP2.png')}}"></div><div class="col-md-3"><img id="AP5" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP5.png')}}"></div></div>');
                $("#SP2").fadeOut(0);
                $("#EP2").fadeIn(300);
            }break;
            case 3:{
                $('#DP5').html('');
                $('#DP6').html('');
                $('#EP3').html('<center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center><br><br><div class="row"><div class="col-md-3"><img id="AP9" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP1.png')}}"></div><div class="col-md-3"><img id="AP12" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP7.png')}}"></div><div class="col-md-3"><img id="AP10" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP4.png')}}"></div><div class="col-md-3"><img id="AP11" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_cua/AP6.png')}}"></div></div>');
                $("#SP3").fadeOut(0);
                $("#EP3").fadeIn(300);
            }break;
        }
    }

    
    
    
    
    /**
     * Función que se ejecuta al arrastrar el elemento.
     **/
    function start(e) {
        e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
        e.dataTransfer.setData("Text", e.target.id); // Coje el elemento que se va a mover
        e.target.style.opacity = '0.4';
    }
    /**
     * Función que se ejecuta se termina de arrastrar el elemento.
     **/
    function end(e){
        e.target.style.opacity = ''; // Restaura la opacidad del elemento
        e.dataTransfer.clearData("Data");
    }
    /**
     * Función que se ejecuta cuando un elemento arrastrable entra en el elemento desde del que se llama.
     **/
    function enter(e) {
        return true;
    }

    /**
     * Función que se ejecuta cuando un elemento arrastrable esta sobre el elemento desde del que se llama.
     * Devuelve false si el objeto se puede soltar en ese elemento y true en caso contrario.
     **/
    function over(e) {
        if (e.target.id == "contenedorPiezas" || e.target.className == "contenedor")
            return false;
    }

    /**
     * Función que se ejecuta cuando un elemento arrastrable se suelta sobre el elemento desde del que se llama.
     **/
    function drop(e){
        e.preventDefault(); // Evita que se ejecute la accion por defecto del elemento soltado.
        var elementoArrastrado = e.dataTransfer.getData("Text");
        e.target.appendChild(document.getElementById(elementoArrastrado)); // Coloca el elemento soltado sobre el elemento desde el que se llamo esta funcion
        //comprobarPuzzle();
    }
</script>