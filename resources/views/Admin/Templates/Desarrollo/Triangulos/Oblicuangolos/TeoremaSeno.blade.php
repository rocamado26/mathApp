<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins  animated fadeInUpBig">
            <div class="ibox-title">
                <h5>Triángulos <small>-Teorema del Seno</small></h5>
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
                                            <strong>Teorema del Seno</strong><br><br>
                                            <p style="text-align: justify;">
                                                El teorema del seno es una relación de proporcionalidad entre las longitudes de los lados de
                                                un triángulo y los senos de los ángulos relativamente opuestos. Dado el triángulo:
                                                <br>
                                            </p>
                                            <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                    <img src="{{asset('img/iconos/triangulos/oblicuangulos/seno/triangulo.png')}}" width="100%">
                                                </div>
                                                <div class="col-lg-6">
                                                    <p style="text-align: justify;">
                                                       <b>Se tiene que:</b>
                                                        <br><br><br>
                                                        <img src="{{asset('img/iconos/triangulos/oblicuangulos/seno/teoremaseno.jpg')}}" width="90%">
                                                    </p>
                                                </div>
                                            </div>
                                            <br><br>
                                            <p style="text-align: justify">
                                              Veamos el siguiente ejemplo:<br>
                                                Sea un triángulo con un lado conocido (b=8 cm) y dos ángulos conocidos (B=85º y C=60º).
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-offset-3 col-lg-6">
                                                    <img src="{{asset('img/iconos/triangulos/oblicuangulos/seno/ejercicio1.jpg')}}" width="80%">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p style="text-align: center;">
                                                        Primero calcularemos los lados (a y c) y ángulos (A) desconocidos gracias al teorema del seno.
                                                        <br><br>
                                                        Los ángulos suman 180º, por lo que <b>A+B+C=180º</b>. Sabiendo B y C obtenemos A.
                                                        <br><br>
                                                        Cálculo del ángulo del triángulo A
                                                        <br><br>
                                                        Se obtiene que <b>A=35º</b>.
                                                        <br><br>
                                                        Por la fórmula del teorema del seno tenemos que:
                                                        <br>
                                                       <center>
                                                            <table border="0" style="text-align: center;">
                                                                <tr>
                                                                    <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;a&nbsp;&nbsp;</b></td>
                                                                    <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;2&nbsp;&nbsp;</b></td>
                                                                    <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;c&nbsp;&nbsp;</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>sen 35°</b></td>
                                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                                    <td><b>sen 85°</b></td>
                                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                                    <td><b>sen 60°</b></td>
                                                                </tr>
                                                            </table>
                                                        <br>
                                                        Simplificando podemos obtener los dos lados restantes (a y c).
                                                        <br><br>
                                                        Primero igualando los lados a y b, para obtener el valor de a,y simplificando la fórmula, es decir:
                                                        <br><br>
                                                        <table border="0" style="text-align: center; text-anchor: 2px;">
                                                            <tr>
                                                                <td rowspan="2">&nbsp;&nbsp;a = &nbsp;&nbsp;</td>
                                                                <td style="border-bottom: 1px solid black;">8 * sen 35°</td>
                                                                <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                <td style="border-bottom: 1px solid black;">8 * 0.57</td>
                                                                <td rowspan="2"><b>= 4.6 cm</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>sen 85°</td>
                                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                                <td>0.996</td>
                                                            </tr>
                                                        </table>
                                                        <br><br>
                                                        Luego igualando los lados b y c, y simplificando la fórmula, es decir:
                                                        <br><br>
                                                        <table border="0" style="text-align: center; text-anchor: 2px;">
                                                            <tr>
                                                                <td rowspan="2">&nbsp;&nbsp;c = &nbsp;&nbsp;</td>
                                                                <td style="border-bottom: 1px solid black;">8 * sen 60°</td>
                                                                <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                <td style="border-bottom: 1px solid black;">8 * 0.87</td>
                                                                <td rowspan="2"><b>= 7 cm</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td>sen 85°</td>
                                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                                <td>0.996</td>
                                                            </tr>
                                                        </table>
                                                        <br><br>
                                                        Por lo que el lado <b>a=4,6 cm</b> y <b>c=7 cm</b>
                                                    </center>
                                                    </p>
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
                                                                La suma de los angulos siempre es de 180°, por lo que <b>A + B + C = 180º</b>
                                                                <br><br>
                                                                Esto quiere decir que si conoces nada mas 2 ángulos, no necesitas hacer mas operación que sumar los 2 ángulos que conoces y restarselos
                                                                a 180 para determinar a cuanto equivale el ángulo faltante.
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
                                        <div class="col-lg-3">
                                            <button type="button"  onclick="tour1()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                        </div>
                                    </div>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <div  class="row">
                                        <div class="col-md-12" id="tour1-1">
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
                                                <div class="ibox-content" id="tour1-2">
                                                    <div class="row animated fadeInUpBig" id="pract_desigualdades1">
                                                        <div class="col-md-8">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="col-lg-3">
                                                                        <img src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1.png')}}" width="100%">
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <br><br>
                                                                        En el siguiente triángulo de lados <b>a = 8cm</b> y <b>b = 7cm</b>
                                                                        <br><br>
                                                                        Calcular cuánto mide el ángulo <b>β</b> sabiendo que el ángulo <b>γ</b> mide <b>45</b>.
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    Como conocemos los lados a y b y el ángulo α, aplicamos el teorema del seno:<br><br>
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;a&nbsp;&nbsp;</b></td>
                                                                                <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;b&nbsp;&nbsp;</b></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>sen a</b></td>
                                                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                                                <td><b>sen b</b></td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    Por lo tanto:
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;8&nbsp;&nbsp;</b></td>
                                                                                <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;7&nbsp;&nbsp;</b></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><b>sen 45°</b></td>
                                                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                                                <td><b>sen b</b></td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    Despejamos seno de b
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2"> sen b =</td>
                                                                                <td style="border-bottom: 1px solid black;" align="center">
                                                                                    <div class="contenedor" id="7P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td style="border-bottom: 1px solid black;">&nbsp;&nbsp; *  sen 45°&nbsp;&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" align="center">
                                                                                    <div class="contenedor" id="8P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2"> sen b =</td>
                                                                                <td style="border-bottom: 1px solid black;" align="center">7</td>
                                                                                <td style="border-bottom: 1px solid black;">&nbsp;&nbsp;*  0.707</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" align="center">8</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    Operamos los términos
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2"> sen b =</td>
                                                                                <td style="border-bottom: 1px solid black;" align="center">
                                                                                    <div class="contenedor" id="4949P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center">8</td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2"> sen b =</td>
                                                                                <td style="border-bottom: 1px solid black;" align="center">
                                                                                    <div class="contenedor" id="061P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <br><br>Finalmente, despejamos β utilizando la inversa del seno (arcoseno):<br><br>
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2">b =</td>
                                                                                <td align="center">
                                                                                 sen<sup>- 1</sup> (0.618)</td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        Luego el ángulo es:
                                                                        <br><br>
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2"><b>b =</b></td>
                                                                                <td>
                                                                                    <div class="contenedor" id="3822P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div id="CP1" class="col-lg-12 alert alert-warning">
                                                                    <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                                    <br><br>
                                                                    <div class="row" id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                        <div class="col-md-3">
                                                                            <img id="P5P1" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/3822P1.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P3P1" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/494P1.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P1P1" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/7P1.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P4P1" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/0618P1.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P2P1" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/8P1.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <p><br></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="EP1" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Excelente, has resuelto de manera correcta la practica, Has logrado el ángulo β y su valor es:
                                                                        <br><br>
                                                                    </p><center><font size="3"><b>β = 38.22°</b></font></center>
                                                                    <p></p>
                                                                </div>
                                                                <div id="botonesPrac1" class="row col-lg-12">
                                                                    <center>
                                                                        <button type="button" class="btn btn-primary btn-rounded" onclick="verificaPractica1()"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="reestablecerP1(0)"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
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
                                                                    <div class="col-lg-3">
                                                                        <img src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2.png')}}" width="100%">
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <br><br>
                                                                        Se tiene un triángulo con ángulos <b>α = 67°</b> y <b>β = 36°</b> y un lado <b>a = 6cm</b>.
                                                                        <br><br>
                                                                        ¿Cuánto mide el lado c?
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    Para calcular el lado <b>c</b>necesitamos conocer el ángulo <b>γ</b>.
                                                                    <br><br>
                                                                    Recordemos que en todo triángulo la suma de sus ángulos internos es <b>180°</b>, es decir, tenemos la ecuación:<br><br>
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        α + β + γ = 180
                                                                        <br><br>
                                                                        Despejamos y sustituimos valores:
                                                                        <br><br>
                                                                        γ = 180 - α - β
                                                                        <br>
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td>&nbsp;&nbsp;γ = 180 -&nbsp;&nbsp;</td>
                                                                                <td><div class="contenedor" id="67P2"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                                                <td>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                                                                                <td><div class="contenedor" id="36P2"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        <center>
                                                                            <b>γ = 77°</b>
                                                                        </center>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    Conociendo el ángulo, aplicamos el teorema del seno utilizando los lados <b>c</b> y <b>a</b>:
                                                                </div>
                                                                <br>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;c&nbsp;&nbsp;</b></td>
                                                                                <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;6&nbsp;&nbsp;</b></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><div class="contenedor" id="sen77P2"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                                                <td><div class="contenedor" id="sen67P2"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    Despejamos c
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2">c =</td>
                                                                                <td style="border-bottom: 1px solid black;" align="center">6 * sen 77°</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center">sen 67°</td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2"> c =</td>
                                                                                <td style="border-bottom: 1px solid black;" align="center">6 * 0.974</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center">0.921</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    Operando obtenemos que el lado c es igual a:
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td> c =</td>
                                                                                <td align="center">
                                                                                    <div class="contenedor" id="635P2"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div id="CP2" class="col-lg-12 alert alert-warning">
                                                                    <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                                    <br><br>
                                                                    <div class="row" id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                        <div class="col-md-3">
                                                                            <img id="P3P2" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/sen77P2.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P1P2" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/67P2.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P5P2" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/635P2.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P2P2" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/36P2.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P4P2" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/sen67P2.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <p><br></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="EP2" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Excelente, has resuelto de manera correcta la practica, Has logrado conocer el lado c y su valor es:
                                                                        <br><br>
                                                                    </p><center><font size="3"><b>c = 6.35</b></font></center>
                                                                    <p></p>
                                                                </div>
                                                                <div id="botonesPrac2 class="row col-lg-12">
                                                                    <center>
                                                                        <button type="button" class="btn btn-primary btn-rounded" onclick="verificaPractica2()"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="reestablecerP2(0)"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
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
                                                                    <div class="col-lg-3">
                                                                        <img src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3.png')}}" width="100%">
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <br><br>
                                                                        En el siguiente triángulo con lado <b>b = 2cm</b> y ángulos <b>α = 57°</b> y <b>γ = 47°</b>.
                                                                        <br><br>
                                                                        ¿Cuánto mide el lado a?
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    Para calcular el lado <b>a</b> necesitamos conocer el ángulo <b>β</b> respecto al lado b.
                                                                    <br><br>
                                                                    Recordemos que en todo triángulo la suma de sus ángulos internos es <b>180°</b>, es decir, tenemos la ecuación:<br><br>
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        α + β + γ = 180
                                                                        <br><br>
                                                                        Despejamos y sustituimos valores:
                                                                        <br><br>
                                                                        β = 180 - α - γ
                                                                        <br><br>
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td>&nbsp;&nbsp;β = 180 -&nbsp;&nbsp;</td>
                                                                                <td>
                                                                                    <div class="contenedor" id="57P3"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                                <td>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                                                                                <td>
                                                                                    <div class="contenedor" id="47P3"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        <center>
                                                                            <b>β = 76°</b>
                                                                        </center>
                                                                    </font>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-12">
                                                                    Conociendo el ángulo, aplicamos el teorema del seno utilizando los lados <b>a</b> y <b>b</b>:
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;a&nbsp;&nbsp;</b></td>
                                                                                <td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px solid black;"><b>&nbsp;&nbsp;2&nbsp;&nbsp;</b></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>sen 57°</td>
                                                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                                                <td>sen 76°</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-12">
                                                                    Despejamos a
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2">a =</td>
                                                                                <td style="border-bottom: 1px solid black;" align="center">2 *&nbsp;&nbsp;</td>
                                                                                <td style="border-bottom: 1px solid black;">
                                                                                    <div class="contenedor" id="sen57P3"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" align="center">
                                                                                    <div class="contenedor" id="sen76P3"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        <table>
                                                                            <tr>
                                                                                <td rowspan="2"> a =</td>
                                                                                <td style="border-bottom: 1px solid black;" align="center">2 * 0.839</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center">0.970</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-12">
                                                                    Operando obtenemos que el lado a es igual a:
                                                                </div>
                                                                <div class="col-md-12" align="center">
                                                                    <font size="3">
                                                                        <table>
                                                                            <tr>
                                                                                <td> a =</td>
                                                                                <td align="center">
                                                                                    <div class="contenedor" id="173P3"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div id="CP3" class="col-lg-12 alert alert-warning">
                                                                    <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                                    <br><br>
                                                                    <div class="row" id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                        <div class="col-md-3">
                                                                            <img id="P4P3" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/sen76P3.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P2P3" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/47P3.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P5P3" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/173P3.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P1P3" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/57P3.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <img id="P3P3" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/sen57P3.png')}}">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <p><br></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="EP3" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Excelente, has resuelto de manera correcta la practica, Has logrado conocer el lado c y su valor es:
                                                                        <br><br>
                                                                    </p><center><font size="3"><b>c = 1.73 cm</b></font></center>
                                                                    <p></p>
                                                                </div>
                                                                <div id="botonesPrac3" class="row col-lg-12">
                                                                    <center>
                                                                        <button type="button" class="btn btn-primary btn-rounded" onclick="verificaPractica3()"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="reestablecerP3(0)"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
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
                                        <div class="col-lg-3">
                                            <button type="button"  onclick="tour2()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                        </div>
                                    </div>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="alert alert-info">
                                                Ingresa los elementos para los lados y ángulos correspondientes, luego selecciona el elemento que deseas encontrar y presiona el botón "Generar"
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="ejercicio">
                                        <div id="tour2-1" class="col-xs-6">
                                            <div class="alert alert-warning">
                                                <table style="text-align: center;">
                                                    <tr>
                                                        <td>LADO A</td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td>LADO B</td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td>LADO C</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="number" class="form-control" id="ladoA"></td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td><input type="number" class="form-control" id="ladoB"></td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td><input type="number" class="form-control" id="ladoC"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ÁNGULO α</td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td>ÁNGULO β</td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td>ÁNGULO γ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="number" class="form-control" id="anguloA"></td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td><input type="number" class="form-control" id="anguloB"></td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td><input type="number" class="form-control" id="anguloC"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="tour2-2" class="col-xs-6">
                                            <div class="alert alert-warning">
                                                Encontrar:
                                                <br><br>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="lado" value="1" name="tipoOp"
                                                           onclick="EncontrarLado();">
                                                    <label for="lado"><b>Lado</b></label>
                                                </div>
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="angulo" value="2" name="tipoOp"
                                                           onclick="EncontrarAngulo();">
                                                    <label for="angulo"><b>Ángulo</b></label>
                                                </div>
                                                <br><br>
                                                De:
                                                <!--lado-->
                                                <div id="DLA" class="radio radio-info radio-inline" style="display: none;">
                                                    <input type="radio" id="LA" value="1" name="tipoLado"
                                                           onclick="BuscarLado(1);">
                                                    <label for="LA"><b>Lado A</b></label>
                                                </div>
                                                <div id="DLB" class="radio radio-info radio-inline" style="display: none;">
                                                    <input type="radio" id="LB" value="2" name="tipoLado"
                                                           onclick="BuscarLado(2);">
                                                    <label for="LB"><b>Lado B</b></label>
                                                </div>
                                                <div id="DLC" class="radio radio-info radio-inline" style="display: none;">
                                                    <input type="radio" id="LC" value="3" name="tipoLado"
                                                           onclick="BuscarLado(3);">
                                                    <label for="LC"><b>Lado C</b></label>
                                                </div>
                                                <!--angulo-->
                                                <div id="DAA" class="radio radio-info radio-inline" style="display: none;">
                                                    <input type="radio" id="AA" value="1" name="tipoAngulo"
                                                           onclick="BuscarAngulo(1);">
                                                    <label for="AA"><b>Ángulo α</b></label>
                                                </div>
                                                <div id="DAB" class="radio radio-info radio-inline" style="display: none;">
                                                    <input type="radio" id="AB" value="2" name="tipoAngulo"
                                                           onclick="BuscarAngulo(2);">
                                                    <label for="AB"><b>Ángulo β</b></label>
                                                </div>
                                                <div id="DAC" class="radio radio-info radio-inline" style="display: none;">
                                                    <input type="radio" id="AC" value="3" name="tipoAngulo"
                                                           onclick="BuscarAngulo(3);">
                                                    <label for="AC"><b>Ángulo γ</b></label>
                                                </div>
                                                <br><br>
                                                <center>
                                                    <button type="button"
                                                            class="btn btn-danger btn-rounded"
                                                            onclick="limpiarResolucion();">
                                                        <i class="fa fa-repeat"></i>&nbsp;Reestablecer
                                                    </button>
                                                    <!--<button type="button"
                                                            class="btn btn-primary btn-rounded"
                                                            onclick="limpiarResolucionC();">
                                                        <i class="fa fa-check"></i>&nbsp;Generar
                                                    </button>-->
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="Resultado" style="display: none;">
                                        <div class="col-lg-12">
                                            <div class="alert alert-success">
                                                <div id="solucion">

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
        // else
        // return true;
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
    ///Para comprobar que las imagenes sean puestas en la posicion correcta
    function verificaPractica1(){
        if((document.getElementById('P1P1').parentNode.id=='7P1') &&
            (document.getElementById('P2P1').parentNode.id=='8P1') &&
            (document.getElementById('P3P1').parentNode.id=='4949P1') &&
            (document.getElementById('P4P1').parentNode.id=='061P1') &&
            (document.getElementById('P5P1').parentNode.id=='3822P1'))
        {
            swal("Excelente!", "Has colocado los datos correctamente", "success");
            $("#CP1").fadeOut(0);
            $("#botonesPrac1").fadeOut(0);
            $("#EP1").fadeIn(300);

        }
        else
        {
            swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
            reestablecerP1(1);
        }
    }
    function reestablecerP1(opc){
        if (opc==0) {
            swal({
                title: "¿Esta Seguro?",
                text: "Al reestablecer se borrará el progreso realizado hasta el momento",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sí, borrar!",
                closeOnConfirm: false
            }, function () {
                swal("Limpiado!", "El proceso de limpieza se ha realizado con éxito", "success");
                //Limpiando componentes...
                $("#CP1").html(""+
                    "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                    "<br>"+
                    "<div class='col-md-3'>"+
                        "<img id='P5P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/3822P1.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                        "<img id='P3P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/494P1.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                        "<img id='P1P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/7P1.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                        "<img id='P4P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/0618P1.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                        "<img id='P2P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/8P1.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                        "<p><br></p>"+
                    "</div>");
                //Limpiando espacios libres...
                $("#7P1").html("");
                $("#8P1").html("");
                $("#4949P1").html("");
                $("#061P1").html("");
                $("#3822P1").html("");
            });//cierre del swal
        }
        else
        {
            //Limpiando componentes...
            $("#CP1").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                "<div class='col-md-3'>"+
                "<img id='P5P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/3822P1.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P3P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/494P1.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P1P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/7P1.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P4P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/0618P1.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P2P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica1/8P1.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<p><br></p>"+
                "</div>");
            //Limpiando espacios libres...
            $("#7P1").html("");
            $("#8P1").html("");
            $("#4949P1").html("");
            $("#061P1").html("");
            $("#3822P1").html("");
        }
    }
    function verificaPractica2(){
        if((document.getElementById('P1P2').parentNode.id=='67P2') &&
            (document.getElementById('P2P2').parentNode.id=='36P2') &&
            (document.getElementById('P3P2').parentNode.id=='sen77P2') &&
            (document.getElementById('P4P2').parentNode.id=='sen67P2') &&
            (document.getElementById('P5P2').parentNode.id=='635P2'))
        {
            swal("Excelente!", "Has colocado los datos correctamente", "success");
            $("#CP2").fadeOut(0);
            $("#botonesPrac2").fadeOut(0);
            $("#EP2").fadeIn(300);

        }
        else
        {
            swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
            reestablecerP2(1);
        }
    }
    function reestablecerP2(opc){
        if (opc==0) {
            swal({
                title: "¿Esta Seguro?",
                text: "Al reestablecer se borrará el progreso realizado hasta el momento",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sí, borrar!",
                closeOnConfirm: false
            }, function () {
                swal("Limpiado!", "El proceso de limpieza se ha realizado con éxito", "success");
                //Limpiando componentes...
                $("#CP2").html(""+
                    "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                    "<br>"+
                    "<div class='col-md-3'>"+
                    "<img id='P3P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/sen77P2.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<img id='P1P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/67P2.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<img id='P5P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/635P2.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<img id='P2P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/36P2.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<img id='P4P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/sen67P2.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<p><br></p>"+
                    "</div>");
                //Limpiando espacios libres...
                $("#67P2").html("");
                $("#36P2").html("");
                $("#sen77P2").html("");
                $("#sen67P2").html("");
                $("#365P2").html("");
            });//cierre del swal
        }
        else
        {
            //Limpiando componentes...
            $("#CP2").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                "<div class='col-md-3'>"+
                "<img id='P3P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/sen77P2.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P1P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/67P2.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P5P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/635P2.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P2P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/36P2.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P4P2' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica2/sen67P2.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<p><br></p>"+
                "</div>");
            //Limpiando espacios libres...
            $("#67P2").html("");
            $("#36P2").html("");
            $("#sen77P2").html("");
            $("#sen67P2").html("");
            $("#365P2").html("");
        }
    }
    function verificaPractica3(){
        if((document.getElementById('P1P3').parentNode.id=='57P3') &&
            (document.getElementById('P2P3').parentNode.id=='47P3') &&
            (document.getElementById('P3P3').parentNode.id=='sen57P3') &&
            (document.getElementById('P4P3').parentNode.id=='sen76P3') &&
            (document.getElementById('P5P3').parentNode.id=='173P3'))
        {
            swal("Excelente!", "Has colocado los datos correctamente", "success");
            $("#CP3").fadeOut(0);
            $("#botonesPrac3").fadeOut(0);
            $("#EP3").fadeIn(300);

        }
        else
        {
            swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
            reestablecerP3(1);
        }
    }
    function reestablecerP3(opc){
        if (opc==0) {
            swal({
                title: "¿Esta Seguro?",
                text: "Al reestablecer se borrará el progreso realizado hasta el momento",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sí, borrar!",
                closeOnConfirm: false
            }, function () {
                swal("Limpiado!", "El proceso de limpieza se ha realizado con éxito", "success");
                //Limpiando componentes...
                $("#CP3").html(""+
                    "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                    "<br>"+
                    "<div class='col-md-3'>"+
                    "<img id='P4P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/sen76P3.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<img id='P2P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/47P3.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<img id='P5P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/173P3.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<img id='P1P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/57P3.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<img id='P3P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/sen57P3.png')}}'>"+
                    "</div>"+
                    "<div class='col-md-3'>"+
                    "<p><br></p>"+
                    "</div>");
                //Limpiando espacios libres...
                $("#57P3").html("");
                $("#47P3").html("");
                $("#sen76P3").html("");
                $("#sen57P3").html("");
                $("#173P3").html("");
            });//cierre del swal
        }
        else
        {
            //Limpiando componentes...
            $("#CP3").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                "<div class='col-md-3'>"+
                "<img id='P4P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/sen76P3.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P2P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/47P3.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P5P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/173P3.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P1P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/57P3.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='P3P3' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/triangulos/oblicuangulos/seno/practica3/sen57P3.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<p><br></p>"+
                "</div>");
            //Limpiando espacios libres...
            $("#57P3").html("");
            $("#47P3").html("");
            $("#sen76P3").html("");
            $("#sen57P3").html("");
            $("#173P3").html("");
        }
    }
    function EncontrarLado(){
        $("#DAA").fadeOut(0);
        $("#DAB").fadeOut(0);
        $("#DAC").fadeOut(0);
        //saber si existe informacion
        var ladoA=document.getElementById("ladoA").value;
        var ladoB=document.getElementById("ladoB").value;
        var ladoC=document.getElementById("ladoC").value;
        var anguloA=document.getElementById("anguloA").value;
        var anguloB=document.getElementById("anguloB").value;
        var anguloC=document.getElementById("anguloC").value;
        if(ladoA=="" && ladoB=="" && ladoC==""){
            $("#DLA").fadeOut(0);
            $("#DLB").fadeOut(0);
            $("#DLC").fadeOut(0);
            toastr.error('Debes ingresar al menos valor para un lado', 'Lo Siento');
        }else{
            if((anguloA!="" && anguloB!="") || (anguloA!="" && anguloC!="") || (anguloB!="" && anguloC!="")){
                if(ladoA==""){
                    $("#DLA").fadeIn(300);
                }else{
                    $("#DLA").fadeOut(0);
                }
                if(ladoB==""){
                    $("#DLB").fadeIn(300);
                }else{
                    $("#DLB").fadeOut(0);
                }
                if(ladoC==""){
                    $("#DLC").fadeIn(300);
                }else{
                    $("#DLC").fadeOut(0);
                }
            }
            else{
                toastr.error('Debes ingresar al menos valor para 2 ángulos', 'Lo Siento');
            }
        }

    }
    function EncontrarAngulo(){
        $("#DLA").fadeOut(0);
        $("#DLB").fadeOut(0);
        $("#DLC").fadeOut(0);
        var ladoA=document.getElementById("ladoA").value;
        var ladoB=document.getElementById("ladoB").value;
        var ladoC=document.getElementById("ladoC").value;
        var anguloA=document.getElementById("anguloA").value;
        var anguloB=document.getElementById("anguloB").value;
        var anguloC=document.getElementById("anguloC").value;
        if(anguloA=="" && anguloB=="" && anguloC==""){
            toastr.error('Debes ingresar al menos valor para un ángulo', 'Lo Siento');
        }
        else{
            if((ladoA!="" && ladoB!="") || (ladoA!="" && ladoC!="") || (ladoB!="" && ladoC!="")){
                if(anguloA==""){
                    $("#DAA").fadeIn(300);
                }else{
                    $("#DAA").fadeOut(0);
                }
                if(anguloB==""){
                    $("#DAB").fadeIn(300);
                }else{
                    $("#DAB").fadeOut(0);
                }
                if(anguloC==""){
                    $("#DAC").fadeIn(300);
                }else{
                    $("#DAC").fadeOut(0);
                }
            }
            else{
                toastr.error('Debes ingresar al menos valor para 2 lados', 'Lo Siento');
            }
        }
    }

    function BuscarLado(opc){
        var ladoA=document.getElementById("ladoA").value;
        var ladoB=document.getElementById("ladoB").value;
        var ladoC=document.getElementById("ladoC").value;
        var anguloA=document.getElementById("anguloA").value;
        var anguloB=document.getElementById("anguloB").value;
        var anguloC=document.getElementById("anguloC").value;
        switch(opc)
        {
            case 1:{
            //lado a
                $("#solucion").html("<center>Primero debemos identificar si conocemos el ángulo respecto al lado A, es decir α<br><br></center>");
               if(anguloA==""){
                   console.log(anguloB,anguloC);
                   anguloA = 180 - parseFloat(anguloB) - parseFloat(anguloC);
                   $("#solucion").append("<center>Para este caso, como desconocemos el ángulo α, lo obtenemos restando los demás ángulos a 180<br><br>" +
                       "<font size='3'>Ángulo α  = 180 - "+anguloB+" - "+anguloC+"</font>" +
                       "<br><br>" +
                       "<font size='3'><b>Ángulo α  = "+anguloA+"</b></font>" +
                       "<br><br>" +
                       "</center>");
               }
               else{
                   anguloA = parseFloat(anguloA);
                   $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para α<br><br>" +
                       "<font size='3'><b>Ángulo α  = "+anguloA+"</b></font>" +
                       "<br><br>" +
                       "</center>");
               }
               if(ladoB!=""){
                   //lado b
                   $("#solucion").append("<center>Para este caso utilizaremos el lado B, debemos identificar su ángulo, es decir β<br><br></center>");
                   if(anguloB!=""){
                        anguloB=parseFloat(anguloB);
                       $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para β<br><br>" +
                           "<font size='3'><b>Ángulo β  = "+anguloB+"</b></font>" +
                           "<br><br>" +
                           "</center>");
                   }else{
                       anguloB = 180 - parseFloat(anguloA) - parseFloat(anguloC);
                       $("#solucion").append("<center>Para este caso, como desconocemos el ángulo β, lo obtenemos restando los demás ángulos a 180<br><br>" +
                           "<font size='3'>Ángulo β  = 180 - "+anguloA+" - "+anguloC+"</font>" +
                           "<br><br>" +
                           "<font size='3'><b>Ángulo β  = "+anguloB+"</b></font>" +
                           "<br><br>" +
                           "</center>");
                   }
                   $("#solucion").append("<center>Por lo tanto, según el teorema de los senos tenemos que: <br><br>" +
                       "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                                "<tr>"+
                                    "<td style='border-bottom: 1px solid black;'><b>A</b></td>"+
                                    "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                                    "<td style='border-bottom: 1px solid black;'><b>"+ladoB+"</b></td>"+
                                "</tr>"+
                                "<tr>"+
                                    "<td><b>sen "+anguloA+"</b></td>"+
                                    "<td>&nbsp;&nbsp;&nbsp;</td>"+
                                    "<td><b>sen "+anguloB+"</b></td>"+
                                "</tr>"+
                           "</table>"+
                       "</font>" +
                       "<br><br>"+
                       "Despejamos el valor de A"+
                       "<br><br>"+
                       "<font size='3'>" +
                       "<table border='0' style='text-align: center;'>"+
                           "<tr>"+
                               "<td rowspan='2'><b>A = </b></td>"+
                               "<td style='border-bottom: 1px solid black;'><b>"+ladoB+" * sen "+anguloA+"</b></td>"+
                           "</tr>"+
                           "<tr>"+
                               "<td><b>sen "+anguloB+"</b></td>"+
                           "</tr>"+
                       "</table>"+
                       "</font>" +
                       "<br><br>"+
                       "Obtenemos los valores de los senos"+
                       "<br><br>"+
                       "</center>");
                   anguloA=parseFloat(anguloA);
                   anguloB=parseFloat(anguloB);
                   console.log(anguloA,anguloB);
                   var senoA = Math.sin(toDegrees(anguloA));
                   var senoB = Math.sin(toDegrees(anguloB));
                   console.log(senoA,senoB);
                   $("#solucion").append("<center><font size='3'>" +
                       "<table border='0' style='text-align: center;'>"+
                           "<tr>"+
                               "<td rowspan='2'><b>A = </b></td>"+
                               "<td style='border-bottom: 1px solid black;'><b>"+ladoB+" * "+senoA+"</b></td>"+
                           "</tr>"+
                           "<tr>"+
                                "<td><b>"+senoB+"</b></td>"+
                           "</tr>"+
                       "</table>"+
                       "</font>" +
                       "<br><br>"+
                       "Multiplicamos"+
                       "<br><br>"+
                       "</center>");
                   var multi= parseFloat(ladoB) * parseFloat(senoA);
                   $("#solucion").append("<center><font size='3'>" +
                       "<table border='0' style='text-align: center;'>"+
                       "<tr>"+
                       "<td rowspan='2'><b>A = </b></td>"+
                       "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                       "</tr>"+
                       "<tr>"+
                       "<td><b>"+senoB+"</b></td>"+
                       "</tr>"+
                       "</table>"+
                       "</font>" +
                       "<br><br>"+
                       "Dividimos y obtenemos el valor para el lado A"+
                       "<br><br>"+
                       "</center>");
                       var division=parseFloat(multi) / parseFloat(senoB);
                   $("#solucion").append("<center><font size='3'>" +
                       "<b>A = "+parseFloat(division).toFixed(2)+"</b>"+
                       "</font></center>");
                   //console.log("Final B: ",ladoB,anguloB);
               }else{
                   //lado c
                   $("#solucion").append("<center>Para este caso utilizaremos el lado C, debemos identificar su ángulo, es decir γ<br><br></center>");
                   if(anguloC!=""){
                       anguloC=parseFloat(anguloC);
                       $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para γ<br><br>" +
                           "<font size='3'><b>Ángulo γ  = "+anguloC+"</b></font>" +
                           "<br><br>" +
                           "</center>");
                   }else{
                       anguloC = 180 - parseFloat(anguloA) - parseFloat(anguloB);
                       $("#solucion").append("<center>Para este caso, como desconocemos el ángulo γ, lo obtenemos restando los demás ángulos a 180<br><br>" +
                           "<font size='3'>Ángulo γ  = 180 - "+anguloA+" - "+anguloB+"</font>" +
                           "<br><br>" +
                           "<font size='3'><b>Ángulo γ  = "+anguloC+"</b></font>" +
                           "<br><br>" +
                           "</center>");
                   }
                   //obteniendo el resultado
                   $("#solucion").append("<center>Por lo tanto, según el teorema de los senos tenemos que: <br><br>" +
                       "<font size='3'>" +
                       "<table border='0' style='text-align: center;'>"+
                       "<tr>"+
                       "<td style='border-bottom: 1px solid black;'><b>A</b></td>"+
                       "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                       "<td style='border-bottom: 1px solid black;'><b>"+ladoC+"</b></td>"+
                       "</tr>"+
                       "<tr>"+
                       "<td><b>sen "+anguloA+"</b></td>"+
                       "<td>&nbsp;&nbsp;&nbsp;</td>"+
                       "<td><b>sen "+anguloC+"</b></td>"+
                       "</tr>"+
                       "</table>"+
                       "</font>" +
                       "<br><br>"+
                       "Despejamos el valor de A"+
                       "<br><br>"+
                       "<font size='3'>" +
                       "<table border='0' style='text-align: center;'>"+
                       "<tr>"+
                       "<td rowspan='2'><b>A = </b></td>"+
                       "<td style='border-bottom: 1px solid black;'><b>"+ladoC+" * sen "+anguloA+"</b></td>"+
                       "</tr>"+
                       "<tr>"+
                       "<td><b>sen "+anguloC+"</b></td>"+
                       "</tr>"+
                       "</table>"+
                       "</font>" +
                       "<br><br>"+
                       "Obtenemos los valores de los senos"+
                       "<br><br>"+
                       "</center>");
                   anguloA=parseFloat(anguloA);
                   anguloC=parseFloat(anguloC);
                   console.log(anguloA,anguloC);
                   var senoA = Math.sin(toDegrees(anguloA));
                   var senoC = Math.sin(toDegrees(anguloC));
                   console.log(senoA,senoC);
                   $("#solucion").append("<center><font size='3'>" +
                       "<table border='0' style='text-align: center;'>"+
                       "<tr>"+
                       "<td rowspan='2'><b>A = </b></td>"+
                       "<td style='border-bottom: 1px solid black;'><b>"+ladoC+" * "+senoA+"</b></td>"+
                       "</tr>"+
                       "<tr>"+
                       "<td><b>"+senoC+"</b></td>"+
                       "</tr>"+
                       "</table>"+
                       "</font>" +
                       "<br><br>"+
                       "Multiplicamos"+
                       "<br><br>"+
                       "</center>");
                   var multi= parseFloat(ladoC) * parseFloat(senoA);
                   $("#solucion").append("<center><font size='3'>" +
                       "<table border='0' style='text-align: center;'>"+
                       "<tr>"+
                       "<td rowspan='2'><b>A = </b></td>"+
                       "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                       "</tr>"+
                       "<tr>"+
                       "<td><b>"+senoC+"</b></td>"+
                       "</tr>"+
                       "</table>"+
                       "</font>" +
                       "<br><br>"+
                       "Dividimos y obtenemos el valor para el lado A"+
                       "<br><br>"+
                       "</center>");
                   var division=parseFloat(multi) / parseFloat(senoC);
                   $("#solucion").append("<center><font size='3'>" +
                       "<b>A = "+parseFloat(division).toFixed(2)+"</b>"+
                       "</font></center>");
                   //console.log("Final C: ",ladoC,anguloC);
               }
                $("#Resultado").fadeIn(300);
            }break;
            case 2:{
            //lado b
                $("#solucion").html("<center>Primero debemos identificar si conocemos el ángulo respecto al lado B, es decir β<br><br></center>");
                if(anguloB==""){
                    console.log(anguloA,anguloC);
                    anguloB = 180 - parseFloat(anguloA) - parseFloat(anguloC);
                    $("#solucion").append("<center>Para este caso, como desconocemos el ángulo β, lo obtenemos restando los demás ángulos a 180<br><br>" +
                        "<font size='3'>Ángulo β  = 180 - "+anguloA+" - "+anguloC+"</font>" +
                        "<br><br>" +
                        "<font size='3'><b>Ángulo β  = "+anguloB+"</b></font>" +
                        "<br><br>" +
                        "</center>");
                }
                else{
                    anguloB = parseFloat(anguloB);
                    $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para β<br><br>" +
                        "<font size='3'><b>Ángulo β  = "+anguloB+"</b></font>" +
                        "<br><br>" +
                        "</center>");
                }
                if(ladoA!=""){
                    //lado b
                    $("#solucion").append("<center>Para este caso utilizaremos el lado A, debemos identificar su ángulo, es decir α<br><br></center>");
                    if(anguloA!=""){
                        anguloA=parseFloat(anguloA);
                        $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para α<br><br>" +
                            "<font size='3'><b>Ángulo α  = "+anguloA+"</b></font>" +
                            "<br><br>" +
                            "</center>");
                    }else{
                        anguloA = 180 - parseFloat(anguloB) - parseFloat(anguloC);
                        $("#solucion").append("<center>Para este caso, como desconocemos el ángulo α, lo obtenemos restando los demás ángulos a 180<br><br>" +
                            "<font size='3'>Ángulo α  = 180 - "+anguloB+" - "+anguloC+"</font>" +
                            "<br><br>" +
                            "<font size='3'><b>Ángulo α  = "+anguloA+"</b></font>" +
                            "<br><br>" +
                            "</center>");
                    }
                    $("#solucion").append("<center>Por lo tanto, según el teorema de los senos tenemos que: <br><br>" +
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td style='border-bottom: 1px solid black;'><b>B</b></td>"+
                        "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoA+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>sen "+anguloB+"</b></td>"+
                        "<td>&nbsp;&nbsp;&nbsp;</td>"+
                        "<td><b>sen "+anguloA+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Despejamos el valor de B"+
                        "<br><br>"+
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>B = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoA+" * sen "+anguloB+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>sen "+anguloA+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Obtenemos los valores de los senos"+
                        "<br><br>"+
                        "</center>");
                    anguloA=parseFloat(anguloA);
                    anguloB=parseFloat(anguloB);
                    console.log(anguloA,anguloB);
                    var senoA = Math.sin(toDegrees(anguloA));
                    var senoB = Math.sin(toDegrees(anguloB));
                    console.log(senoA,senoB);
                    $("#solucion").append("<center><font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>B = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoA+" * "+senoB+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+senoA+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Multiplicamos"+
                        "<br><br>"+
                        "</center>");
                    var multi= parseFloat(ladoA) * parseFloat(senoB);
                    $("#solucion").append("<center><font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>A = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+senoA+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Dividimos y obtenemos el valor para el lado A"+
                        "<br><br>"+
                        "</center>");
                    var division=parseFloat(multi) / parseFloat(senoA);
                    $("#solucion").append("<center><font size='3'>" +
                        "<b>B = "+parseFloat(division).toFixed(2)+"</b>"+
                        "</font></center>");
                    //console.log("Final A: ",ladoA,anguloA);
                }else{
                    //lado c
                    $("#solucion").append("<center>Para este caso utilizaremos el lado C, debemos identificar su ángulo, es decir γ<br><br></center>");
                    if(anguloC!=""){
                        anguloC=parseFloat(anguloC);
                        $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para γ<br><br>" +
                            "<font size='3'><b>Ángulo γ  = "+anguloC+"</b></font>" +
                            "<br><br>" +
                            "</center>");
                    }else{
                        anguloC = 180 - parseFloat(anguloA) - parseFloat(anguloB);
                        $("#solucion").append("<center>Para este caso, como desconocemos el ángulo γ, lo obtenemos restando los demás ángulos a 180<br><br>" +
                            "<font size='3'>Ángulo γ  = 180 - "+anguloA+" - "+anguloB+"</font>" +
                            "<br><br>" +
                            "<font size='3'><b>Ángulo γ  = "+anguloC+"</b></font>" +
                            "<br><br>" +
                            "</center>");
                    }
                    $("#solucion").append("<center>Por lo tanto, según el teorema de los senos tenemos que: <br><br>" +
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td style='border-bottom: 1px solid black;'><b>B</b></td>"+
                        "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoC+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>sen "+anguloB+"</b></td>"+
                        "<td>&nbsp;&nbsp;&nbsp;</td>"+
                        "<td><b>sen "+anguloC+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Despejamos el valor de B"+
                        "<br><br>"+
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>B = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoC+" * sen "+anguloB+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>sen "+anguloC+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Obtenemos los valores de los senos"+
                        "<br><br>"+
                        "</center>");
                    anguloC=parseFloat(anguloC);
                    anguloB=parseFloat(anguloB);
                    console.log(anguloC,anguloB);
                    var senoC = Math.sin(toDegrees(anguloC));
                    var senoB = Math.sin(toDegrees(anguloB));
                    console.log(senoC,senoB);
                    $("#solucion").append("<center><font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>B = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoC+" * "+senoB+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+senoC+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Multiplicamos"+
                        "<br><br>"+
                        "</center>");
                    var multi= parseFloat(ladoC) * parseFloat(senoB);
                    $("#solucion").append("<center><font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>A = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+senoC+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Dividimos y obtenemos el valor para el lado A"+
                        "<br><br>"+
                        "</center>");
                    var division=parseFloat(multi) / parseFloat(senoC);
                    $("#solucion").append("<center><font size='3'>" +
                        "<b>B = "+parseFloat(division).toFixed(2)+"</b>"+
                        "</font></center>");
                    //console.log("Final C: ",ladoC,anguloC);
                }
                $("#Resultado").fadeIn(300);
            }break;
            case 3:{
            //lado c
                $("#solucion").html("<center>Primero debemos identificar si conocemos el ángulo respecto al lado C, es decir γ<br><br></center>");
                if(anguloC==""){
                    console.log(anguloA,anguloB);
                    anguloC = 180 - parseFloat(anguloA) - parseFloat(anguloB);
                    $("#solucion").append("<center>Para este caso, como desconocemos el ángulo γ, lo obtenemos restando los demás ángulos a 180<br><br>" +
                        "<font size='3'>Ángulo γ  = 180 - "+anguloA+" - "+anguloB+"</font>" +
                        "<br><br>" +
                        "<font size='3'><b>Ángulo γ  = "+anguloC+"</b></font>" +
                        "<br><br>" +
                        "</center>");
                }
                else{
                    anguloC = parseFloat(anguloC);
                    $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para γ<br><br>" +
                        "<font size='3'><b>Ángulo γ = "+anguloC+"</b></font>" +
                        "<br><br>" +
                        "</center>");
                }
                if(ladoB!=""){
                    //lado b
                    $("#solucion").append("<center>Para este caso utilizaremos el lado B, debemos identificar su ángulo, es decir β<br><br></center>");
                    if(anguloB!=""){
                        anguloB=parseFloat(anguloB);
                        $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para β<br><br>" +
                            "<font size='3'><b>Ángulo β  = "+anguloB+"</b></font>" +
                            "<br><br>" +
                            "</center>");
                    }else{
                        anguloB = 180 - parseFloat(anguloA) - parseFloat(anguloC);
                        $("#solucion").append("<center>Para este caso, como desconocemos el ángulo β, lo obtenemos restando los demás ángulos a 180<br><br>" +
                            "<font size='3'>Ángulo β  = 180 - "+anguloA+" - "+anguloC+"</font>" +
                            "<br><br>" +
                            "<font size='3'><b>Ángulo β  = "+anguloB+"</b></font>" +
                            "<br><br>" +
                            "</center>");
                    }
                    $("#solucion").append("<center>Por lo tanto, según el teorema de los senos tenemos que: <br><br>" +
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td style='border-bottom: 1px solid black;'><b>C</b></td>"+
                        "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoB+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>sen "+anguloC+"</b></td>"+
                        "<td>&nbsp;&nbsp;&nbsp;</td>"+
                        "<td><b>sen "+anguloB+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Despejamos el valor de C"+
                        "<br><br>"+
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>C = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoB+" * sen "+anguloC+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>sen "+anguloB+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Obtenemos los valores de los senos"+
                        "<br><br>"+
                        "</center>");
                    anguloC=parseFloat(anguloC);
                    anguloB=parseFloat(anguloB);
                    console.log(anguloC,anguloB);
                    var senoC = Math.sin(toDegrees(anguloC));
                    var senoB = Math.sin(toDegrees(anguloB));
                    console.log(senoC,senoB);
                    $("#solucion").append("<center><font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>C = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoB+" * "+senoC+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+senoB+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Multiplicamos"+
                        "<br><br>"+
                        "</center>");
                    var multi= parseFloat(ladoB) * parseFloat(senoC);
                    $("#solucion").append("<center><font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>C = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+senoB+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Dividimos y obtenemos el valor para el lado A"+
                        "<br><br>"+
                        "</center>");
                    var division=parseFloat(multi) / parseFloat(senoB);
                    $("#solucion").append("<center><font size='3'>" +
                        "<b>C = "+parseFloat(division).toFixed(2)+"</b>"+
                        "</font></center>");
                    //console.log("Final B: ",ladoB,anguloB);
                }else{
                    //lado a
                    $("#solucion").append("<center>Para este caso utilizaremos el lado A, debemos identificar su ángulo, es decir α<br><br></center>");
                    if(anguloA!=""){
                        anguloA=parseFloat(anguloA);
                        $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para α<br><br>" +
                            "<font size='3'><b>Ángulo α  = "+anguloA+"</b></font>" +
                            "<br><br>" +
                            "</center>");
                    }else{
                        anguloA = 180 - parseFloat(anguloB) - parseFloat(anguloC);
                        $("#solucion").append("<center>Para este caso, como desconocemos el ángulo α, lo obtenemos restando los demás ángulos a 180<br><br>" +
                            "<font size='3'>Ángulo α  = 180 - "+anguloB+" - "+anguloC+"</font>" +
                            "<br><br>" +
                            "<font size='3'><b>Ángulo α  = "+anguloA+"</b></font>" +
                            "<br><br>" +
                            "</center>");
                    }
                    $("#solucion").append("<center>Por lo tanto, según el teorema de los senos tenemos que: <br><br>" +
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td style='border-bottom: 1px solid black;'><b>C</b></td>"+
                        "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoA+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>sen "+anguloC+"</b></td>"+
                        "<td>&nbsp;&nbsp;&nbsp;</td>"+
                        "<td><b>sen "+anguloA+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Despejamos el valor de C"+
                        "<br><br>"+
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>C = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoA+" * sen "+anguloC+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>sen "+anguloA+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Obtenemos los valores de los senos"+
                        "<br><br>"+
                        "</center>");
                    anguloC=parseFloat(anguloC);
                    anguloA=parseFloat(anguloA);
                    console.log(anguloC,anguloA);
                    var senoC = Math.sin(toDegrees(anguloC));
                    var senoA = Math.sin(toDegrees(anguloA));
                    console.log(senoC,senoA);
                    $("#solucion").append("<center><font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>C = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+ladoA+" * "+senoC+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+senoA+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Multiplicamos"+
                        "<br><br>"+
                        "</center>");
                    var multi= parseFloat(ladoA) * parseFloat(senoC);
                    $("#solucion").append("<center><font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>C = </b></td>"+
                        "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+senoA+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br><br>"+
                        "Dividimos y obtenemos el valor para el lado A"+
                        "<br><br>"+
                        "</center>");
                    var division=parseFloat(multi) / parseFloat(senoA);
                    $("#solucion").append("<center><font size='3'>" +
                        "<b>C = "+parseFloat(division).toFixed(2)+"</b>"+
                        "</font></center>");
                    //console.log("Final A: ",ladoA,anguloA);
                }
                $("#Resultado").fadeIn(300);
            }break;
        }
    }

    function BuscarAngulo(opc){
        var ladoA=document.getElementById("ladoA").value;
        var ladoB=document.getElementById("ladoB").value;
        var ladoC=document.getElementById("ladoC").value;
        var anguloA=document.getElementById("anguloA").value;
        var anguloB=document.getElementById("anguloB").value;
        var anguloC=document.getElementById("anguloC").value;
        var paso=0;
        var paso1=0;
        var paso2=0;
        switch(opc){
            case 1:{
                //Angulo A
                if(ladoA==""){
                    toastr.error('Debes ingresar un valor para el lado A', 'Lo Siento');
                    document.getElementById("AA").checked = false;
                }else{
                    if(ladoB!="" && anguloB!=""){
                        //ladoB
                        paso=1;
                        $("#solucion").html("<center>Para este caso utilizaremos el lado B y su ángulo respectivo, es decir β, usando el teorema de senos<br><br>" +
                            "<font size='3'>" +
                                "<table border='0' style='text-align: center;'>"+
                                    "<tr>"+
                                        "<td style='border-bottom: 1px solid black;'><b>"+ladoA+"</b></td>"+
                                        "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                                        "<td style='border-bottom: 1px solid black;'><b>"+ladoB+"</b></td>"+
                                    "</tr>"+
                                    "<tr>"+
                                        "<td><b>sen α</b></td>"+
                                        "<td>&nbsp;&nbsp;&nbsp;</td>"+
                                        "<td><b>sen "+anguloB+"</b></td>"+
                                    "</tr>"+
                                "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Despejamos seno de α"+
                            "<br><br>"+
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen α = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoA+" * sen "+anguloB+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoB+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Obtenemos los valores de los senos"+
                            "<br><br>"+
                            "</center>");
                        var senB = Math.sin(toDegrees(anguloB));
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen α = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoA+" * "+senB+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoB+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Multiplicamos"+
                            "<br><br>"+
                            "</center>");
                        var multi = parseFloat(ladoA) * parseFloat(senB);
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen α = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoB+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Dividimos y obtenemos el valor para el sen α"+
                            "<br><br>"+
                            "</center>");
                        var division=parseFloat(multi) / parseFloat(ladoB);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>sen α = "+parseFloat(division).toFixed(2)+"</b>"+
                            "</font>" +
                            "<br><br>" +
                            "Ahora obtenemos el arcoseno o inversa del seno, para conocer el ángulo de α" +
                            "<br><br>" +
                            "<font size='3'>" +
                            "α = sen<sup>-1</sup>("+parseFloat(division).toFixed(2)+")"+
                            "</font>" +
                            "</center>");
                            var senoA=parseFloat(division);
                            console.error(senoA);
                            var arcSeno=Math.asin(senoA);
                            arcSeno = arcSeno * (180 / Math.PI);
                           // arcSeno=arcSeno.toFixed(2);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>α = "+arcSeno.toFixed(2)+"°</b>"+
                            "</font></center>");
                    }
                    if(paso==0 && ladoC!="" && anguloC!=""){
                        //ladoC
                        paso=1;
                        $("#solucion").html("<center>Para este caso utilizaremos el lado C y su ángulo respectivo, es decir γ, usando el teorema de senos<br><br>" +
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoA+"</b></td>"+
                            "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoC+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>sen α</b></td>"+
                            "<td>&nbsp;&nbsp;&nbsp;</td>"+
                            "<td><b>sen "+anguloC+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Despejamos seno de α"+
                            "<br><br>"+
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen α = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoA+" * sen "+anguloC+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoC+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Obtenemos los valores de los senos"+
                            "<br><br>"+
                            "</center>");
                        var senC = Math.sin(toDegrees(anguloC));
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen α = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoA+" * "+senC+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoC+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Multiplicamos"+
                            "<br><br>"+
                            "</center>");
                        var multi = parseFloat(ladoA) * parseFloat(senC);
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen α = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoC+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Dividimos y obtenemos el valor para el sen α"+
                            "<br><br>"+
                            "</center>");
                        var division=parseFloat(multi) / parseFloat(ladoC);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>sen α = "+parseFloat(division).toFixed(2)+"</b>"+
                            "</font>" +
                            "<br><br>" +
                            "Ahora obtenemos el arcoseno o inversa del seno, para conocer el ángulo de α" +
                            "<br><br>" +
                            "<font size='3'>" +
                            "α = sen<sup>-1</sup>("+parseFloat(division).toFixed(2)+")"+
                            "</font>" +
                            "</center>");
                        var senoA=parseFloat(division);
                        console.error(senoA);
                        var arcSeno=Math.asin(senoA);
                        arcSeno = arcSeno * (180 / Math.PI);
                        // arcSeno=arcSeno.toFixed(2);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>α = "+arcSeno.toFixed(2)+"°</b>"+
                            "</font></center>");
                    }
                    if(paso==0){
                        if(ladoB!=""){
                            toastr.error('Debes ingresar un valor para el ángulo β', 'Lo Siento');
                        }
                        if(ladoC!=""){
                            toastr.error('Debes ingresar un valor para el ángulo γ', 'Lo Siento');
                        }
                        document.getElementById("AA").checked = false;
                    }
                    else{
                        $("#Resultado").fadeIn(300);
                    }
                }
            }break;
            case 2:{
                //Angulo B
               if(ladoB==""){
                    toastr.error('Debes ingresar un valor para el lado B', 'Lo Siento');
                    document.getElementById("AB").checked = false;
                }else{
                    if(ladoA!="" && anguloA!=""){
                        //ladoA
                        paso1=1;
                        $("#solucion").html("<center>Para este caso utilizaremos el lado A y su ángulo respectivo, es decir α, usando el teorema de senos<br><br>" +
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoB+"</b></td>"+
                            "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoA+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>sen β</b></td>"+
                            "<td>&nbsp;&nbsp;&nbsp;</td>"+
                            "<td><b>sen "+anguloA+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Despejamos seno de α"+
                            "<br><br>"+
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen β = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoB+" * sen "+anguloA+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoA+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Obtenemos los valores de los senos"+
                            "<br><br>"+
                            "</center>");
                        var senA = Math.sin(toDegrees(anguloA));
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen β = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoB+" * "+senA+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoA+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Multiplicamos"+
                            "<br><br>"+
                            "</center>");
                        var multi = parseFloat(ladoB) * parseFloat(senA);
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen β = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoA+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Dividimos y obtenemos el valor para el sen β"+
                            "<br><br>"+
                            "</center>");
                        var division=parseFloat(multi) / parseFloat(ladoA);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>sen β = "+parseFloat(division).toFixed(2)+"</b>"+
                            "</font>" +
                            "<br><br>" +
                            "Ahora obtenemos el arcoseno o inversa del seno, para conocer el ángulo de β" +
                            "<br><br>" +
                            "<font size='3'>" +
                            "β = sen<sup>-1</sup>("+parseFloat(division).toFixed(2)+")"+
                            "</font>" +
                            "</center>");
                        var senoB=parseFloat(division);
                        console.error(senoB);
                        var arcSeno=Math.asin(senoB);
                        arcSeno = arcSeno * (180 / Math.PI);
                        // arcSeno=arcSeno.toFixed(2);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>β = "+arcSeno.toFixed(2)+"°</b>"+
                            "</font></center>");
                    }
                    if(paso1==0 && ladoC!="" && anguloC!=""){
                        //ladoC
                        paso1=1;
                        $("#solucion").html("<center>Para este caso utilizaremos el lado C y su ángulo respectivo, es decir γ, usando el teorema de senos<br><br>" +
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoB+"</b></td>"+
                            "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoC+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>sen β</b></td>"+
                            "<td>&nbsp;&nbsp;&nbsp;</td>"+
                            "<td><b>sen "+anguloC+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Despejamos seno de α"+
                            "<br><br>"+
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen β = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoB+" * sen "+anguloC+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoC+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Obtenemos los valores de los senos"+
                            "<br><br>"+
                            "</center>");
                        var senC = Math.sin(toDegrees(anguloC));
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen β = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+ladoB+" * "+senC+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoC+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Multiplicamos"+
                            "<br><br>"+
                            "</center>");
                        var multi = parseFloat(ladoB) * parseFloat(senC);
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                            "<td rowspan='2'><b>sen β = </b></td>"+
                            "<td style='border-bottom: 1px solid black;'><b>"+multi+"</b></td>"+
                            "</tr>"+
                            "<tr>"+
                            "<td><b>"+ladoC+"</b></td>"+
                            "</tr>"+
                            "</table>"+
                            "</font>" +
                            "<br><br>"+
                            "Dividimos y obtenemos el valor para el sen β"+
                            "<br><br>"+
                            "</center>");
                        var division=parseFloat(multi) / parseFloat(ladoC);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>sen β = "+parseFloat(division).toFixed(2)+"</b>"+
                            "</font>" +
                            "<br><br>" +
                            "Ahora obtenemos el arcoseno o inversa del seno, para conocer el ángulo de β" +
                            "<br><br>" +
                            "<font size='3'>" +
                            "β = sen<sup>-1</sup>("+parseFloat(division).toFixed(2)+")"+
                            "</font>" +
                            "</center>");
                        var senoB=parseFloat(division);
                        console.error(senoB);
                        var arcSeno=Math.asin(senoB);
                        arcSeno = arcSeno * (180 / Math.PI);
                        // arcSeno=arcSeno.toFixed(2);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>β = "+arcSeno.toFixed(2)+"°</b>"+
                            "</font></center>");
                    }
                    if(paso1==0){
                        if(ladoA!=""){
                            toastr.error('Debes ingresar un valor para el ángulo α', 'Lo Siento');
                        }
                        if(ladoC!=""){
                            toastr.error('Debes ingresar un valor para el ángulo γ', 'Lo Siento');
                        }
                        document.getElementById("AB").checked = false;
                    }
                    else{
                        $("#Resultado").fadeIn(300);
                    }
                }
            }break;
            case 3:{
                //Angulo C
                if(ladoC==""){
                    toastr.error('Debes ingresar un valor para el lado C', 'Lo Siento');
                    document.getElementById("AC").checked = false;
                }else {
                    if (ladoA != "" && anguloA != "") {
                        //ladoA
                        paso2 = 1;
                        $("#solucion").html("<center>Para este caso utilizaremos el lado A y su ángulo respectivo, es decir α, usando el teorema de senos<br><br>" +
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>" +
                            "<tr>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + ladoC + "</b></td>" +
                            "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + ladoA + "</b></td>" +
                            "</tr>" +
                            "<tr>" +
                            "<td><b>sen γ</b></td>" +
                            "<td>&nbsp;&nbsp;&nbsp;</td>" +
                            "<td><b>sen " + anguloA + "</b></td>" +
                            "</tr>" +
                            "</table>" +
                            "</font>" +
                            "<br><br>" +
                            "Despejamos seno de γ" +
                            "<br><br>" +
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>" +
                            "<tr>" +
                            "<td rowspan='2'><b>sen γ = </b></td>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + ladoC + " * sen " + anguloA + "</b></td>" +
                            "</tr>" +
                            "<tr>" +
                            "<td><b>" + ladoA + "</b></td>" +
                            "</tr>" +
                            "</table>" +
                            "</font>" +
                            "<br><br>" +
                            "Obtenemos los valores de los senos" +
                            "<br><br>" +
                            "</center>");
                        var senA = Math.sin(toDegrees(anguloA));
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>" +
                            "<tr>" +
                            "<td rowspan='2'><b>sen γ = </b></td>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + ladoC + " * " + senA + "</b></td>" +
                            "</tr>" +
                            "<tr>" +
                            "<td><b>" + ladoA + "</b></td>" +
                            "</tr>" +
                            "</table>" +
                            "</font>" +
                            "<br><br>" +
                            "Multiplicamos" +
                            "<br><br>" +
                            "</center>");
                        var multi = parseFloat(ladoC) * parseFloat(senA);
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>" +
                            "<tr>" +
                            "<td rowspan='2'><b>sen γ = </b></td>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + multi + "</b></td>" +
                            "</tr>" +
                            "<tr>" +
                            "<td><b>" + ladoA + "</b></td>" +
                            "</tr>" +
                            "</table>" +
                            "</font>" +
                            "<br><br>" +
                            "Dividimos y obtenemos el valor para el sen γ" +
                            "<br><br>" +
                            "</center>");
                        var division = parseFloat(multi) / parseFloat(ladoA);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>sen γ = " + parseFloat(division).toFixed(2) + "</b>" +
                            "</font>" +
                            "<br><br>" +
                            "Ahora obtenemos el arcoseno o inversa del seno, para conocer el ángulo de γ" +
                            "<br><br>" +
                            "<font size='3'>" +
                            "γ = sen<sup>-1</sup>(" + parseFloat(division).toFixed(2) + ")" +
                            "</font>" +
                            "</center>");
                        var senoC = parseFloat(division);
                        console.error(senoC);
                        var arcSeno = Math.asin(senoC);
                        arcSeno = arcSeno * (180 / Math.PI);
                        // arcSeno=arcSeno.toFixed(2);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>γ = " + arcSeno.toFixed(2) + "°</b>" +
                            "</font></center>");
                    }
                    if (paso2 == 0 && ladoB != "" && anguloB != "") {
                        //ladoC
                        paso2 = 1;
                        $("#solucion").html("<center>Para este caso utilizaremos el lado B y su ángulo respectivo, es decir β, usando el teorema de senos<br><br>" +
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>" +
                            "<tr>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + ladoC + "</b></td>" +
                            "<td><b>&nbsp;&nbsp;=&nbsp;&nbsp;</b></td>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + ladoB + "</b></td>" +
                            "</tr>" +
                            "<tr>" +
                            "<td><b>sen γ</b></td>" +
                            "<td>&nbsp;&nbsp;&nbsp;</td>" +
                            "<td><b>sen " + anguloB + "</b></td>" +
                            "</tr>" +
                            "</table>" +
                            "</font>" +
                            "<br><br>" +
                            "Despejamos seno de α" +
                            "<br><br>" +
                            "<font size='3'>" +
                            "<table border='0' style='text-align: center;'>" +
                            "<tr>" +
                            "<td rowspan='2'><b>sen γ = </b></td>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + ladoC + " * sen " + anguloB + "</b></td>" +
                            "</tr>" +
                            "<tr>" +
                            "<td><b>" + ladoB + "</b></td>" +
                            "</tr>" +
                            "</table>" +
                            "</font>" +
                            "<br><br>" +
                            "Obtenemos los valores de los senos" +
                            "<br><br>" +
                            "</center>");
                        var senB = Math.sin(toDegrees(anguloB));
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>" +
                            "<tr>" +
                            "<td rowspan='2'><b>sen γ = </b></td>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + ladoC + " * " + senB + "</b></td>" +
                            "</tr>" +
                            "<tr>" +
                            "<td><b>" + ladoB + "</b></td>" +
                            "</tr>" +
                            "</table>" +
                            "</font>" +
                            "<br><br>" +
                            "Multiplicamos" +
                            "<br><br>" +
                            "</center>");
                        var multi = parseFloat(ladoC) * parseFloat(senB);
                        $("#solucion").append("<center><font size='3'>" +
                            "<table border='0' style='text-align: center;'>" +
                            "<tr>" +
                            "<td rowspan='2'><b>sen γ = </b></td>" +
                            "<td style='border-bottom: 1px solid black;'><b>" + multi + "</b></td>" +
                            "</tr>" +
                            "<tr>" +
                            "<td><b>" + ladoB + "</b></td>" +
                            "</tr>" +
                            "</table>" +
                            "</font>" +
                            "<br><br>" +
                            "Dividimos y obtenemos el valor para el sen γ" +
                            "<br><br>" +
                            "</center>");
                        var division = parseFloat(multi) / parseFloat(ladoB);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>sen γ = " + parseFloat(division).toFixed(2) + "</b>" +
                            "</font>" +
                            "<br><br>" +
                            "Ahora obtenemos el arcoseno o inversa del seno, para conocer el ángulo de γ" +
                            "<br><br>" +
                            "<font size='3'>" +
                            "γ = sen<sup>-1</sup>(" + parseFloat(division).toFixed(2) + ")" +
                            "</font>" +
                            "</center>");
                        var senoC = parseFloat(division);
                        console.error(senoC);
                        var arcSeno = Math.asin(senoC);
                        arcSeno = arcSeno * (180 / Math.PI);
                        // arcSeno=arcSeno.toFixed(2);
                        $("#solucion").append("<center><font size='3'>" +
                            "<b>γ = " + arcSeno.toFixed(2) + "°</b>" +
                            "</font></center>");
                    }
                    if (paso2 == 0) {
                        if (ladoA != "") {
                            toastr.error('Debes ingresar un valor para el ángulo α', 'Lo Siento');
                        }
                        if (ladoB != "") {
                            toastr.error('Debes ingresar un valor para el ángulo β', 'Lo Siento');
                        }
                        document.getElementById("AC").checked = false;
                    }
                    else {
                        $("#Resultado").fadeIn(300);
                    }
                }
            }break;
        }
    }

    function limpiarResolucion(){
        $("#solucion").html("");
        $("#Resultado").fadeOut(0);
        document.getElementById("ladoA").value="";
        document.getElementById("ladoB").value="";
        document.getElementById("ladoC").value="";
        document.getElementById("anguloA").value="";
        document.getElementById("anguloB").value="";
        document.getElementById("anguloC").value="";
        document.getElementById("lado").checked = false;
        document.getElementById("angulo").checked = false;
        document.getElementById("LA").checked = false;
        document.getElementById("LB").checked = false;
        document.getElementById("LC").checked = false;
        document.getElementById("AA").checked = false;
        document.getElementById("AB").checked = false;
        document.getElementById("AC").checked = false;
        $("#DLA").fadeOut(0);
        $("#DLB").fadeOut(0);
        $("#DLC").fadeOut(0);
        $("#DAA").fadeOut(0);
        $("#DAB").fadeOut(0);
        $("#DAC").fadeOut(0);
    }

    function tour1() {
        var tour = new Tour({
            steps: [{
                element: "#tour1-1",
                title: "Paso 1",
                content: "Presiona cualquiera de los siguientes números para mostrar un ejemplo de teorema del seno.",
                placement: "top",
                backdrop: true,
                backdropContainer: '#wrapper',
                onShown: function (tour) {
                    $('body').addClass('tour-open')
                },
                onHidden: function (tour) {
                    $('body').removeClass('tour-close')
                }
            },
                {
                    element: "#tour1-2",
                    title: "Paso 2",
                    content: "Visualisa la información que se te presenta en el ejercicio, resuelvelo en base a lo aprendido la sección de \"Teoría\", selecciona un elemento del área de  \"Elementos\" y arrastralo al espacio correspondiente, una vez resuelto el ejercicio, presiona el botón  \"Comprobar\".",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#contenido',
                    onShown: function (tour) {
                        $('body').addClass('tour-open')
                    },
                    onHidden: function (tour) {
                        $('body').removeClass('tour-close')
                    }
                }
            ]
        });
        // Initialize the tour
        tour.init();
        tour.restart();
        // Start the tour
        tour.start();
    }

    function tour2() {
        var tour = new Tour({
            steps: [{
                element: "#tour2-1",
                title: "Paso 1",
                content: "Ingresa los valores respecto a los lados y ángulos según el ejercicio",
                placement: "top",
                backdrop: true,
                backdropContainer: '#wrapper',
                onShown: function (tour) {
                    $('body').addClass('tour-open')
                },
                onHidden: function (tour) {
                    $('body').removeClass('tour-close')
                }
            },
                {
                    element: "#tour2-2",
                    title: "Paso 2",
                    content: "Una vez ingresado los valores, selecciona si quieres encontrar el lado del triangulo o su angulo y luego selecciona que lado o ángulo en especifico deseas encontrar.",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#contenido',
                    onShown: function (tour) {
                        $('body').addClass('tour-open')
                    },
                    onHidden: function (tour) {
                        $('body').removeClass('tour-close')
                    }
                }
            ]
        });
        // Initialize the tour
        tour.init();
        tour.restart();
        // Start the tour
        tour.start();
    }

    function toDegrees (angle) {
        return angle * (Math.PI / 180);
    }
    function toRadians (angle) {
        return angle * (180 / Math.PI);
    }

</script>