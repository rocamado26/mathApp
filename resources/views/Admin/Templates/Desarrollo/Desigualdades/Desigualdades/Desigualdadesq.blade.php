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
                                                                                3 ( 3 - x ) ≥ x + 1
                                                                            </b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    Efectuamos la multiplicación:<br><br>
                                                                </div>
                                                                <div class="col-md-12" id="A1" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP2"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td>&nbsp;&nbsp; ≥ &nbsp;&nbsp;</td>
                                                                                <td>&nbsp;&nbsp; 3 + x </td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <br><br>Despejamos las <b>“x”</b> al lado izquierdo y los términos independientes al lado derecho:<br><br>
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td>-3x</td>
                                                                                <td>&nbsp; - &nbsp;</td>
                                                                                <td>&nbsp; x</td>
                                                                                <td>&nbsp; ≥ &nbsp;</td>
                                                                                <td>1</td>
                                                                                <td>&nbsp; - &nbsp;</td>
                                                                                <td>9 &nbsp;</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <br><br>Operar los términos semejantes:
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP3"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td>&nbsp;&nbsp; ≥ &nbsp;&nbsp;</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP4"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
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
                                                                            <img id="AP3" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP3.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP1" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP1.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP4" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP4.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="AP2" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP2.png')}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="SP1" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Excelente, has resuelto de manera correcta la practica, Has logrado comprobar la desigualdad y el valor "x" es:
                                                                        <br><br>
                                                                    </p><center><font size="3"><b> x = 2</b></font></center>
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
                                                                            <b>
                                                                                <font size="3">
                                                                                    <table>
                                                                                        <tr>
                                                                                            <td>2x</td>
                                                                                            <td>&nbsp; + &nbsp;</td>
                                                                                            <td>5</td>
                                                                                            <td> &nbsp; ≥ &nbsp;</td>
                                                                                            <td>3</td>
                                                                                            <td>&nbsp; - &nbsp;</td>
                                                                                            <td>7x</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </font>
                                                                            </b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    Operamos los términos semejantes
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <br><br>
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td>2x</td>
                                                                                <td>&nbsp;+&nbsp;</td>
                                                                                <td>7x</td>
                                                                                <td>&nbsp;≥&nbsp;</td>
                                                                                <td>3</td>
                                                                                <td>&nbsp;-&nbsp;</td>
                                                                                <td>5</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <br><br>El despeje de “x” sería de la manera siguiente:<br><br>
                                                                </div>
                                                                <div class="col-md-12" id="A2" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP7"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td>&nbsp;≥&nbsp;</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP8"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <br><br>La solución para la desigualdad es:<br><br>
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP9"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 100px; height: 34px;"></div>
                                                                                </td>
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
                                                                        <div class="col-md-6">
                                                                            <img id="AP14" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP14.png')}}">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img id="AP11" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP11.png')}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <img id="AP12" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP12.png')}}">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img id="AP13" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP13.png')}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="SP2" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Excelente, has resuelto de manera correcta la practica, Has logrado la desigualdad el valor de "x" es:
                                                                        <br><br>
                                                                    </p><center><font size="3"><b> x = - <sup>2</sup>/<sub>9</sub></b></font></center>
                                                                    <p style="text-align: justify;">
                                                                        El conjunto solicuión es:
                                                                    <center><font size="3"><b> [- <sup>2</sup>/<sub>9</sub> ; ∞)</b></font></center>
                                                                    </p>
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
                                                                        <div class="col-md-12">
                                                                            Resuelve la desigualdad:<br><br>
                                                                        </div>
                                                                        <div class="col-md-12" align="center">
                                                                            <b>
                                                                                <font size="3">
                                                                                    <table>
                                                                                        <tr>
                                                                                            <td>2x</td>
                                                                                            <td>&nbsp;+&nbsp;</td>
                                                                                            <td>3</td>
                                                                                            <td>&nbsp;>&nbsp;</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </font>
                                                                            </b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <br><br>Restamos un valor en ambos miembros:<br><br>
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td>2x</td>
                                                                                <td>&nbsp;+&nbsp;</td>
                                                                                <td>3</td>
                                                                                <td>&nbsp;-&nbsp;</td>
                                                                                <td>3</td>
                                                                                <td>&nbsp;>&nbsp;</td>
                                                                                <td>0</td>
                                                                                <td>&nbsp;-&nbsp;</td>
                                                                                <td>3</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>2x</td>
                                                                                <td>&nbsp;>&nbsp;</td>
                                                                                <td>-&nbsp;</td>
                                                                                <td>3</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <br><br>Despejamos "x":<br><br>
                                                                </div>
                                                                <div class="col-md-12" id="A3" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td>x</td>
                                                                                <td>&nbsp;>&nbsp;</td>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP5"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <br><br>El conjunto solución para la desigualdad es: <br><br>
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td colspan="3" align="center">
                                                                                    <div class="contenedor" id="DP6"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 100px; height: 34px;"></div>
                                                                                </td>
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
                                                                        <div class="col-md-6">
                                                                            <img id="AP6" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP6.png')}}">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img id="AP8" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP8.png')}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <img id="AP7" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP7.png')}}">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <img id="AP5" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP5.png')}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="SP3" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Excelente, has resuelto de manera correcta la practica, Has logrado comprobar la identidad y su valor es:
                                                                        <br><br>
                                                                    </p><center><font size="3"><b> x = - <sup>3</sup>/<sub>2</sub></b></font></center>
                                                                    <p style="text-align: justify;">
                                                                        El conjunto solicuión es:
                                                                    <center><font size="3"><b> (-1.5 ; ∞) </b></font></center>
                                                                    </p>
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
                                                Ingresa tu ejercicio de la forma <b>ax + b > c</b><br>
                                                <li>Para mover de miembro un término debes colocar el número de termino en la caja de texto “Primer Término” luego presiona el botón mover bajo la caja.</li>
                                                <li>Para operar dos términos tienes que colocar el número de termino en las cajas de texto “Primer Término” y “Segundo Término” luego presiona uno de los botones “Operar” o “Despajar”.</li>
                                                <li>El botón despejar solo realiza la operación cuando llegas a la forma: <b>ax = b</b>; es acá donde realiza e despeje de "x".</li>
                                                <li>Si deseas reiniciar el ejercicio persona el botón con el mas (+) con el cual inicias el ejercicio.</li>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-group" id="paso1p">
                                                <input type="text" id="termino1" onkeyup="validaCadena1(value)" class="form-control" placeholder="Miembro derecho">
                                                <div class="input-group-btn" id="paso2p">
                                                    <button type="button" id="btn1" onclick="cambiaBoton(2)" class="btn btn-danger"><b>></b></button>
                                                    <button type="button" id="btn2" onclick="cambiaBoton(3)" style="display: none;" class="btn btn-danger"><b>≥</b></button>
                                                    <button type="button" id="btn3" onclick="cambiaBoton(4)" style="display: none;" class="btn btn-danger"><b><</b></button>
                                                    <button type="button" id="btn4" onclick="cambiaBoton(1)" style="display: none;" class="btn btn-danger"><b>≤</b></button>
                                                </div>
                                                <input type="text" id="termino2" class="form-control" onkeyup="validaCadena2(value)"  placeholder="Miembro Izquierdo">
                                                <div class="input-group-btn" id="btnMas" >
                                                    <button type="button"class="btn btn-primary" onclick="inciarFuncion()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6" id="paso3p">
                                            <div class="alert alert-info">
                                                <label for="">Terminos: <b id="nTerminos"></b></label>
                                            </div>

                                            <div class="alert alert-warning">
                                                <div class="row">
                                                    <div class="col-xs-6 text-right" id="areaResolucion1">

                                                    </div>
                                                    <div class="col-xs-1 text-center" id="areaResolucion2">

                                                    </div>
                                                    <div class="col-xs-5 text-left" id="areaResolucion3">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="alert alert-warning">
                                                <div class="row" >
                                                    <div class="col-md-6" id="paso4p">
                                                        <label for="">N° Termino</label>
                                                        <input type="number" class="form-control" id="T1" placeholder="Primer termino">
                                                    </div>
                                                    <div class="col-md-6" id="paso5p">
                                                        <label for="">N° Termino</label>
                                                        <input type="number" class="form-control" id="T2" placeholder="Segundo termino">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row" id="paso6p">
                                                    <div class="col-xs-6 text-center">
                                                        <button id="btn1p1" class="btn-default btn dim" onclick="operaciones(1)"><b>operar</b></button>
                                                    </div>
                                                    <div class="col-xs-6 text-center">
                                                        <button id="btn1p2" class="btn-default btn dim" onclick="operaciones(4)"><b>despejar</b></button>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row" id="paso7p">
                                                    <div class="col-xs-6 text-center">
                                                        <button id="btn1p3" class="btn-default btn dim" onclick="moverTermimno(false)">mover ></button>
                                                    </div>
                                                    <div class="col-xs-6 text-center">
                                                        <button id="btn1p4" class="btn-default btn dim" onclick="moverTermimno(true)">mover < </button>
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
    </div>
</div>
<script>
    //swal("¡Borrado!", "Progreso borrado.", "success");
    var opBtn=1;
    var paso1="#EP1",paso2="#A1",paso3="#botonesPrac1";

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

    /*
     * Inicia el proceso de resolución de l ejercicio
     * función puente para unir los procesos con las funciones encargadas de realizar funciones especificas
     * */
    function inciarFuncion() {
        limpiaDesarrollo();
        if(valida(9)){
            if(valida(10)){
                if(valida(12)){
                    if(validaCadena1($('#termino1').val())){
                        if(validaCadena2($('#termino2').val())){
                            pasaLabel($('#termino1').val(),$('#termino2').val());//Pasa los datos a los label para mostrarlos
                        }else{
                            toastr.error('Revisa los datos ingresados.','Error');
                        }
                    }else{
                        toastr.error('Revisa los datos ingresados.','Error');
                    }
                }else{
                    toastr.error('Ingresa el coeficiente de x.','Error');
                }
            }else{toastr.error('Revisa los datos ingresados.','Error');}
        }else{toastr.error('Ingresa valores en los dos miembros.','Error');}
    }

    /**
     * Inserta en el label donde se hara el desarrollo del ejercicio
     */
    function pasaLabel(termino1,termino2) {
        //if(Terminos.length!=1){

        divideTerminos(termino1,termino2);
        if(termino1==''){termino1='0'}
        if(termino2==''){termino2='0'}
        //}
        if(opBtn==1){
            $('#areaResolucion1').append('<label style="font-size: 20px">'+termino1+'</label><br>');
            $('#areaResolucion2').append('<label style="font-size: 20px">></label>');
            $('#areaResolucion3').append('<label style="font-size: 20px">'+termino2+'</label><br>');
        }else{
            if(opBtn==2){
                $('#areaResolucion1').append('<label style="font-size: 20px">'+termino1+'</label><br>');
                $('#areaResolucion2').append('<label style="font-size: 20px">≥</label>');
                $('#areaResolucion3').append('<label style="font-size: 20px">'+termino2+'</label><br>');
            }else{
                if(opBtn==3){
                    $('#areaResolucion1').append('<label style="font-size: 20px">'+termino1+'</label><br>');
                    $('#areaResolucion2').append('<label style="font-size: 20px"><</label>');
                    $('#areaResolucion3').append('<label style="font-size: 20px">'+termino2+'</label><br>');
                }else{
                    $('#areaResolucion1').append('<label style="font-size: 20px">'+termino1+'</label><br>');
                    $('#areaResolucion2').append('<label style="font-size: 20px">≤</label>');
                    $('#areaResolucion3').append('<label style="font-size: 20px">'+termino2+'</label><br>');
                }
            }
        }
    }

    /**
     * Cambia el boton segun se presione.
     * @param op boton a visualizar.
     */
    function cambiaBoton(op){
        switch(op){
            case 1:{$('#btn1').show();$('#btn2').hide();$('#btn3').hide();$('#btn4').hide();opBtn=1;}break;
            case 2:{$('#btn1').hide();$('#btn2').show();$('#btn3').hide();$('#btn4').hide();opBtn=2;}break;
            case 3:{$('#btn1').hide();$('#btn2').hide();$('#btn3').show();$('#btn4').hide();opBtn=3;}break;
            case 4:{$('#btn1').hide();$('#btn2').hide();$('#btn3').hide();$('#btn4').show();opBtn=4;}break;
        }
    }

    var Terminos=[];
    var lado=[];
    /**
     * Divide la cadena en términos.
     */
    function divideTerminos(termino1,termino2){
        var funcion=termino1;
        Terminos=[];
        lado=[];
        var inicio=0;
        if(funcion.length==1 && funcion.charAt(0)=='0'){
            funcion=funcion+' ';
        }
        for(var i=1;i<funcion.length;i++){
            if(funcion.charAt(i)=='+' || funcion.charAt(i)=='-'){
                Terminos.push(funcion.substr(inicio,i-inicio));
                lado.push(true);
                inicio=i;
            }
            if(i+1==funcion.length){
                lado.push(true);
                Terminos.push(funcion.substr(inicio,funcion.length-inicio));
            }
        }
        funcion=termino2;
        inicio=0;
        for(var i=1;i<=funcion.length;i++){
            if(funcion.charAt(i)=='+' || funcion.charAt(i)=='-'){
                Terminos.push(funcion.substr(inicio,i-inicio));
                lado.push(false);
                inicio=i;
            }
            if(i==funcion.length){
                lado.push(false);
                Terminos.push(funcion.substr(inicio,funcion.length-inicio));
            }
        }
        $('#nTerminos').html('');
        for(var i=0;i<Terminos.length;i++){
            $('#nTerminos').append('&nbsp;&nbsp;&nbsp; t'+''+(i+1)+' ( '+Terminos[i]+' )&nbsp;&nbsp;&nbsp;');
        }
        console.warn('terminos:',Terminos);
        console.warn('lados:',lado);
    }

    /**
     * Realiza las 4 operaciones básicas
     * @param op según la operación a realizar
     */
    function operaciones(op){
        var a=Number(Terminos[$('#T1').val()-1]);
        var b=Number(Terminos[$('#T2').val()-1]);
        console.warn('termino a:',a);
        console.warn('termino b:',b);
        if(Terminos[$('#T1').val()-1]!='+' && Terminos[$('#T2').val()-1]!='-'){
            switch (op){
                /*Suma de terminos*/
                case 1:{
                    if(valida(7)){
                        if(valida(1)){
                            if(valida(4)){
                                if(valida(6)){
                                    console.warn('suma de terminos:',a+b);
                                    reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(a+b),lado[$('#T1').val()-1],"");
                                }else{
                                    toastr.error('No es posible operar los términos.','Error');
                                }
                            }else{
                                e=Terminos[$('#T1').val()-1].split('x');
                                f=Terminos[$('#T2').val()-1].split('x');
                                reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(Number(e[0])+Number(f[0])),lado[$('#T1').val()-1],"x");
                            }
                        }else{toastr.error('No es posible operar los términos.','Error');}
                    }else{toastr.error('No es posible operar los términos.','Error');}
                }break;
                /*Reta de terminos*/
                case 2:{
                    if(valida(1) && valida(4)){
                        console.warn('suma de terminos:',a-b);
                        reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(a-b),lado[$('#T1').val()-1],"");
                    }
                }break;
                /*Multiplicacion de terminos*/
                case 3:{
                    if(valida(3)){
                        if(Terminos[$('#T1').val()-1].indexOf('x')!=-1){
                            var coeficiente=Terminos[$('#T1').val()-1].split('x');
                            console.warn('multi de terminos:',coeficiente);
                            reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(Number(coeficiente[0])*b)*-1,false);
                        }else{
                            if(Terminos[$('#T2').val()-1]){
                                var coeficiente=Terminos[$('#T2').val()-1].split('x');
                                reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(a*Number(coeficiente[0]))*-1,false);
                            }else{

                            }
                        }
                    }
                }break;
                /*Division de terminos*/
                case 4:{
                    if(valida(7) && valida(11)){
                        if(valida(3)){
                            if(Terminos[$('#T1').val()-1].indexOf('x')!=-1){
                                if(valida(8)){
                                    var coeficiente=Terminos[$('#T1').val()-1].split('x');
                                    if(Terminos.length==1){b=0}
                                    finOperacion(false);
                                    reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(b/Number(coeficiente[0])),false,"");
                                }else{toastr.error('No es posible operar los términos.','Error');}
                            }else{
                                if(Terminos[$('#T2').val()-1]){
                                    if(valida(8)){
                                        if(Terminos.length==1){a=0}
                                        var coeficiente=Terminos[$('#T2').val()-1].split('x');
                                        finOperacion(false);
                                        reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(a/Number(coeficiente[0])),true,"");
                                    }else{toastr.error('No es posible operar los términos.','Error');}

                                }else{
                                    toastr.error('No es posible operar los términos.','Error');
                                }
                            }
                        }else{toastr.error('No es posible operar los términos.','Error');}
                    }else{

                        toastr.error('No es posible operar los términos.','Error');
                    }

                }break;
            }
        }else{toastr.error('No es posible operar los términos.','Error');}

    }

    function retornaCero(numero){
        if(numero!=""){
            return Number(numero);
        }else{
            return 0;
        }
    }

    /**
     * Bloquea los botones y los habilita
     **/
    function finOperacion(op) {
        if(op){
            $("#btn1p1").removeAttr("disabled");
            $("#btn1p2").removeAttr("disabled");
            $("#btn1p3").removeAttr("disabled");
            $("#btn1p4").removeAttr("disabled");
        }else{
            $("#btn1p1").attr("disabled", true);
            $("#btn1p2").attr("disabled", true);
            $("#btn1p3").attr("disabled", true);
            $("#btn1p4").attr("disabled", true);
        }
    }

    /**
     * Crea la cadena a imprimir
     * */
    function creaCadena() {
        var a="";
        var b="";
        Terminos.forEach(function (item,index) {
            if(lado[index]==true){
                a=a+item;
            }else{
                b=b+item;
            }
        });
        if(Terminos.length==1){
            if(Terminos[0].indexOf('x')!=-1){
                if(a==""){
                    pasaLabel('',b);
                }else{
                    pasaLabel(a,"");
                }
            }else{
                if(a==""){
                    pasaLabel('x',b);
                }else{
                    pasaLabel(a,"x");
                }
            }
            //respuesta();
        }else{
            pasaLabel(a,b);
        }
    }

    function moverTermimno(miembro){
        cambiaLado(miembro,$('#T1').val()-1);
    }

    /**
     * Cambia de lado el término seleccionado
     * @param miembro boolean que indica al lado para el cual se movera
     */
    function cambiaLado(miembro,index){
        var c=0;
        var a=[];
        var d=[];
        var b=0;
        c=index;
        if(Terminos[index]!='0 ' && Terminos[index]!='0'){
            if(valida(7)){
                if(valida(2,miembro)){
                    if(miembro==false){
                        for(var i=0;i<lado.length;i++){
                            if(i!=c){
                                a.push(Terminos[i]);
                                d.push(lado[i]);
                            }else{
                                b=i;
                            }
                        }

                        if(Terminos[b].indexOf('x')!=-1){
                            var co=Terminos[b].split('x');
                            a.push(signoMas(Number(co[0])*(-1))+"x");
                        }else{
                            a.push(signoMas(Number(Terminos[b])*(-1)));
                        }
                        d.push(false);
                        lado=d;
                        Terminos=a;
                    }else{
                        for(var i=0;i<lado.length;i++){
                            if(lado[i]!=false){
                                a.push(Terminos[i]);
                                d.push(lado[i]);
                            }else{
                                if(b==0){
                                    a.push("");
                                    d.push(true);
                                    b=i
                                }
                                if(i!=c){
                                    a.push(Terminos[i]);
                                    d.push(lado[i]);
                                }
                            }
                        }
                        if(Terminos[c].indexOf('x')!=-1){
                            var co=Terminos[c].split('x');
                            a[b]=signoMas(Number(co[0])*(-1))+"x";
                        }else{
                            a[b]=signoMas(Number(Terminos[c])*(-1));
                        }
                        lado=d;
                        Terminos=a;
                    }
                    creaCadena();
                }else{
                    toastr.error('No posible mover el término','Error');
                }
            }else{toastr.error('No posible mover el término','Error');}
        }else{toastr.error('No posible mover el término','Error');}
    }

    /**
     * Se encarga de validar los datos a ingresar al ejercicio
     * @param op que opcion de validacion
     * @returns {boolean} true si esta correcto de lo contrario false
     */
    function valida(op,mover){
        switch (op){
            /*Valida las operaciones de terminos de lados diferentes*/
            case 1:{
                if((lado[$('#T1').val()-1]==true && lado[$('#T2').val()-1]==true) || (lado[$('#T1').val()-1]==false && lado[$('#T2').val()-1]==false)){
                    if($('#T1').val()-1 !=$('#T2').val()-1){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    //alert('No es posible operar');
                    return false;
                }
            }break;
            /*Valida si el término a mover está en el lado contrario, para ser posible moverlo*/
            case 2:{
                if((lado[$('#T1').val()-1])==mover){
                    return false;
                }else{
                    return true;
                }
            }break;
            /*Evalua si aun quedan terminos independientes por operar*/
            case 3:{
                var cont1=0;
                var cont2=0;
                Terminos.forEach(function (item) {
                    if(item.indexOf('x')!=-1){
                        cont1++;
                    }else{
                        cont2++;
                    }
                });
                if(cont1==1 && cont2==1){
                    return true;
                }else{
                    if(Terminos.length==1){
                        return true;
                    }else{
                        return false;
                    }
                }
            }break;
            /*Valida que no se operen terminos no semejantes*/
            case 4:{
                if(Terminos[$('#T1').val()-1].indexOf('x')!=-1 && Terminos[$('#T2').val()-1].indexOf('x')!=-1){
                    return false;
                }else{
                    return true;
                }
            }break;
            /*valida que el termino a mover sea o no el que tiene x */
            case 5:{
                if(Terminos[$('#T1').val()-1].indexOf('x')!=-1){
                    return false;
                }else{
                    return true;
                }
            }break;
            /*valida que los terminos a operar sean semejantes*/
            case 6:{
                if(Terminos[$('#T1').val()-1].indexOf('x')!=-1 || Terminos[$('#T2').val()-1].indexOf('x')!=-1){
                    return false;
                }else{
                    return true;
                }
            }break;
            /*valida que los terminos existan*/
            case 7:{
                if(Terminos.length>=$('#T1').val() && $('#T1').val()>0){
                    return true;
                }else{
                    if(Terminos.length==1){
                        return true;
                    }else{
                        return false;
                    }
                }
            }break;
            /*valida que los terminos a despejar esten en lados diferentes*/
            case 8:{
                if(lado[$('#T1').val()-1]!=lado[$('#T2').val()-1]){
                    return true;
                }else{
                    return false;
                }
            }break;
            /*valida que los dos miembros tengan información*/
            case 9:{
                if($('#termino1').val()!="" && $('#termino2').val()!=""){
                    return true;
                }else{
                    return false;
                }
            }break;
            /*Valida que no halla signos repstidos juntos*/
            case 10:{
                if($('#termino1').val().indexOf('++')==-1 && $('#termino1').val().indexOf('--')==-1 &&
                    $('#termino1').val().indexOf('-+')==-1 && $('#termino1').val().indexOf('+-')==-1 &&
                    $('#termino2').val().indexOf('++')==-1 && $('#termino2').val().indexOf('--')==-1 &&
                    $('#termino2').val().indexOf('-+')==-1 && $('#termino2').val().indexOf('+-')==-1 &&
                    $('#termino2').val().indexOf('xx')==-1 && $('#termino2').val().indexOf('xx')==-1){
                    return true;
                }else{
                    return false;
                }
            }break;
            /*Valida que el término 2 exista entre el areglo*/
            case 11:{
                if(Terminos.length>=$('#T2').val() && $('#T2').val()>0){
                    return true;
                }else{
                    if(Terminos.length==1){
                        return true;
                    }else{
                        return false;
                    }
                }
            }break;
            /*Valida que se ingrese un coeficiente para x*/
            case 12:{
                var g=$('#termino1').val()+$('#termino2').val();
                var h=0;
                for(var i=0;i<g.length;i++){
                    if(g.charAt(i)=='x'){
                        if(i!=0){
                            if(isNaN(g.charAt(i-1))){
                                h++;
                            }
                            if(Number(g.charAt(i-1))==0){
                                h++;
                            }
                        }else{
                            return false;
                        }
                    }
                }
                if(h!=0){return false;}else{return true;}
            }break;
        }
    }

    /**
     * Reduce los termino cuando se operan entre si.
     * @param Termino1 primer término a eliminar del areglo Terminos
     * @param Termino2 Segundo término a eliminar del areglo Terminos
     * @param valor Valor de la operacion entre los dos términos
     * @param miembro Miembro donde quedará el nuevo término.
     */
    function reduceTerminos(Termino1,Termino2, valor,miembro,x){

        var a=[];
        var b=[];
        var c=[];
        var d=[];
        var e=true;
        Terminos.forEach(function (item,index) { //Buscamos los términos a eliminar
            if(index!=Termino1 && index!=Termino2){//inserta todos aquellos que sean diferentes
                a.push(item);
                b.push(lado[index]);//areglo que controla los lados miembros donde estan los terminos
            }
        });
        //Luego le damos el nuevo arreglo a términos dejndo de lado los que eliminaríamos y el nuevo valor lo insertamos
        //al final del arreglo.
        if(valor!='0'){
            if(miembro){
                b.forEach(function (item, index) {
                    if(item==true){
                        c.push(a[index]);
                        d.push(item);
                    }else{
                        if(e){
                            c.push(signoMas(valor)+""+x);
                            d.push(miembro);
                            e=false;
                        }
                        c.push(a[index]);
                        d.push(item);
                    }
                });
                if(e){
                    c.push(signoMas(valor)+""+x);
                    d.push(miembro);
                    e=false;
                }
                Terminos=c;
                lado=d;
            }else{
                a.push(signoMas(valor)+""+x);
                b.push(miembro);
                Terminos=a;
                lado=b;
            }
        }else{
            if(b.length==1){
                if(b[0]!=miembro){
                    a.push(signoMas(valor));
                    b.push(miembro);
                    Terminos=a;
                    lado=b;
                }else{
                    Terminos=a;
                    lado=b;
                }
            }else{
                if(a.length==0){
                    a.push(signoMas(valor));
                    b.push(miembro);
                    Terminos=a;
                    lado=b;
                }else{
                    Terminos=a;
                    lado=b;
                }
            }
        }
        creaCadena();
    }

    /**
     * Retorna una cadena con signo positivo
     * @param valor dato a evaluar
     * @returns {*}
     */
    function signoMas(valor){
        if(Math.sign(Number(valor))==1){
            return "+"+valor;
        }else{
            return ""+valor;
        }
    }

    /**
     * Valida que solo se ingrese numeros y la letra x
     * @param palabra palabra a evaluar
     * @returns {boolean} true si es correcto y false de lo contrario
     */
    function validaCadena1(palabra){
        var clave=/^[x0-9+-]+$/;
        var a=true;
        for(var i=0;i<palabra.length;i++){
            if(clave.test(palabra.charAt(i))){
                a=true;
            }else{
                a=false;
                $('#termino1').val(palabra.substr(0,i));
                return a;
            }
        }
        return a;
    }

    /**
     * Limpia los label de la resolucion del ejercicio
     * */
    function limpiaDesarrollo(){
        $('#areaResolucion1').html('');
        $('#areaResolucion2').html('');
        $('#areaResolucion3').html('');
        finOperacion(true);
    }

    /**
     * Valida que solo se ingrese numeros y la letra x
     * @param palabra palabra a evaluar
     * @returns {boolean} true si es correcto y false de lo contrario
     */
    function validaCadena2(palabra){
        var clave=/^[x0-9+-]+$/;
        var a=true;
        for(var i=0;i<palabra.length;i++){
            if(clave.test(palabra.charAt(i))){
                a=true;
            }else{
                a=false;
                $('#termino2').val(palabra.substr(0,i));
                return a;
            }
        }
        return a;
    }


    function ComprobarPracticas(op){
        switch (op){
            case 1:{
                if((document.getElementById('AP1').parentNode.id=='DP1') && (document.getElementById('AP2').parentNode.id=='DP2') && (document.getElementById('AP3').parentNode.id=='DP3')){
                    swal("Excelente!", "Has resuelto correctamente el ejercicio", "success");
                    $('#EP1').hide();
                    $('#SP1').show();
                }else{
                    swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                }
            }break;
            case 2:{
                if((document.getElementById('AP13').parentNode.id=='DP7') && (document.getElementById('AP14').parentNode.id=='DP8') && (document.getElementById('AP11').parentNode.id=='DP9')){
                    swal("Excelente!", "Has resuelto correctamente el ejercicio", "success");
                    $('#EP2').hide();
                    $('#SP2').show();
                }else{
                    swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                }
            }break;
            case 3:{
                if((document.getElementById('AP5').parentNode.id=='DP5') && (document.getElementById('AP7').parentNode.id=='DP6')){
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
                $('#EP1').html('<center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center><br><br><div class="row" id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"><div class="col-md-3"><img id="AP3" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP3.png')}}"></div><div class="col-md-3"><img id="AP1" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP1.png')}}"></div><div class="col-md-3"><img id="AP4" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP4.png')}}"></div><div class="col-md-3"><img id="AP2" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP2.png')}}"></div></div>');
                $("#SP1").fadeOut(0);
                $("#EP1").fadeIn(300);
            }break;
            case 2:{
                $('#DP7').html('');
                $('#DP8').html('');
                $('#DP9').html('');
                $('#EP2').html('<center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center><br><br><div class="row"><div class="col-md-6"><img id="AP14" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP14.png')}}"></div><div class="col-md-6"><img id="AP11" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP11.png')}}"></div></div><div class="row"><div class="col-md-6"><img id="AP12" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP12.png')}}"></div><div class="col-md-6"><img id="AP13" style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP13.png')}}"></div></div>');
                $("#SP2").fadeOut(0);
                $("#EP2").fadeIn(300);
            }break;
            case 3:{
                $('#DP5').html('');
                $('#DP6').html('');
                $('#EP3').html('<center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center><br><br><div class="row"><div class="col-md-6"><img id="AP6"' +
                    ' style="cursor: pointer" draggable="true" ondragstart="start(event)" ondragend="end(event)" ' +
                    'src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP6.png')}}"></div>' +
                '<div class="col-md-6"><img id="AP8" style="cursor: pointer" draggable="true" ondragstart="start(event)" ' +
                'ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP8.png')}}">' +
                '</div></div><div class="row"><div class="col-md-6"><img id="AP7" style="cursor: pointer" draggable="true"' +
                ' ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP7.png')}}">' +
                '</div><div class="col-md-6"><img id="AP5" style="cursor: pointer" draggable="true" ondragstart="start(event)"' +
                ' ondragend="end(event)" src="{{asset('img/iconos/desigualdades/desarrollo/desigualdades/practica_lineal/AP5.png')}}"></div></div>');
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