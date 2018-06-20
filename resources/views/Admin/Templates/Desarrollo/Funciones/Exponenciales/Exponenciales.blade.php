<div class="ibox float-e-margins animated fadeInUpBig">
    <div class="ibox-title">
        <h5>Exponenciales - <small> Funciones Exponenciales</small></h5>
    </div>
    <div class="ibox-content">
        <div class="panel-body">
            <!--inicio del acordeon que contiene el contenido del area sucesiones arirmeticas - caracteristicas-->
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><b>Teoría</b></a>
                        </h5>
                    </div>
                    <!---->
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <p style="text-align: justify;">
                                        La función que asigna a la variable independiente <b>x</b> el valor de <b>f(x) = a<sup>x</sup></b> se
                                        llama función exponencial de base <b>a</b>, donde <b>a</b> es un número real positivo distinto de <b>1</b>
                                        <br><br>
                                        Así, por ejemplo, las funciones <b>f(x) = 3<sup>x</sup></b> y <b>h(x) = 0.8<sup>x</sup></b>
                                        son funciones exponenciales de base <b>3</b> y <b>0.8</b> respectivamente.
                                        <br><br>
                                        En particular, la función exponencial de base <b>e</b>, <b>f(x) = e<sup>x</sup></b>, es especialmente importante ya que describe el comportamiento de varias situaciones
                                        reales: evolución de poblaciones, desintegración radioactiva.
                                        <br><br>
                                        <b>Propiedades</b>
                                        <br><br>
                                        A partir de su representación gráfica observamos que las funciones exponenciales cumplen las propiedades siguientes:
                                        <br><br>
                                        <i>Dominio:</i> Dominio(f) = R
                                        <br><br>
                                        <i>Rango:</i> (-∞ , +∞)
                                        <br><br>
                                        <i>Cotas:</i> acotada inferiormente por 0
                                        <br><br>
                                        <i>Intersección con los ejes:</i> Corta con el eje vertical en y = 1. No corta el eje horizontal.
                                        <br><br>
                                        <i>Continuidad:</i> Es continua en todo R
                                        <br><br>
                                        <i>Asíntotas:</i> La recta y = 0 es una asíntota horizontal (pero sólo en un extremo)
                                        <br><br>
                                        <i>Periodicidad:</i> No es periódica.
                                        <br><br>
                                        <i>Simetrías:</i> No es simétrica.
                                        <br><br>
                                        <i>Monotonía:</i> Si a > 1, la función es estrictamente creciente. Si a < 1, la función es estrictamente decreciente.
                                        <br><br>
                                        <i>Extremos relativos:</i> No tiene.
                                        <br><br>
                                        <i>Inyectividad y exhaustividad:</i> Es inyectiva (las imágenes de puntos diferentes son diferentes), pero no es
                                        exhaustiva ya que la imagen no es todo R

                                    </p>
                                </div>
                                <!--Area de consejos -->
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;<font size="4"><i><b>Punto de apoyo</b></i></font></center>
                                                </div>
                                                <div class="panel-body">
                                                    La gráfica de la función exponencial varía según si la base <b>a</b> es mayor o menor que <b>1</b>
                                                    (recordemos que siempre ha de ser mayor que cero y que no puede ser <b>1</b>).
                                                    <br><br>
                                                    Veamos a continuación la gráfica de <b>f(x) = 3<sup>x</sup></b>
                                                    <br><br>
                                                    Es destacable que la gráfica de una función exponencial siempre pasa por el punto <b>(0,1)</b>
                                                    <br><br>
                                                    <img src="{{asset('img/iconos/funciones/exponenciales/expo.gif')}}" width="100%"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--cierre div row -->
                        </div><!--panel body teoría-->
                    </div><!--cieere div collpase-->
                </div><!--cierre panel defaul teoría-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><b> Práctica</b></a>
                            <div class="nav navbar-top-links navbar-right ">
                                <div class="col-lg-3">
                                    <button type="button"  onclick="tour1()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                </div>
                            </div>
                        </h4>
                    </div>
                     <div id="collapseTwo" class="panel-collapse collapse">
                         <div class="panel-body">
                             <div  class="row">
                                 <div class="col-md-12" id="tour1-1">
                                     <div align="center">
                                         <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(1)">1</button>
                                         <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(2)">2</button>
                                         <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(3)">3</button>
                                         <!--<button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(4)">4</button>-->
                                         <!--<button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_coseno('5')">5</button>-->
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="ibox ui-resizable">
                                         <div class="ibox-content" id="tour1-2">
                                             <div class="row animated fadeInUpBig" id="pract_exponencial1">
                                                 <div class="col-md-7">
                                                     <div class="panel panel-default">
                                                         <div class="panel-heading">
                                                             <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                         </div>
                                                         <div class="panel-body">
                                                             <div class="col-lg-12">
                                                                 Completa el cuadro de valores para la función <b>f(x) = 2 <sup>x</sup></b>
                                                             </div>
                                                         </div>
                                                     </div><br>
                                                     <div class="row">
                                                         <div class="col-lg-12">
                                                             <table border="1" width="100%" style="text-align: center;" bordercolor="#19aa8d">
                                                                 <tr>
                                                                     <td>x</td>
                                                                     <td> -2</td>
                                                                     <td> -1</td>
                                                                     <td> 0</td>
                                                                     <td> 1</td>
                                                                     <td> 2</td>
                                                                 </tr>
                                                                 <tr>
                                                                     <td>y = log x</td>
                                                                     <td width="50px">
                                                                         <div class="contenedor" id="1P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                     </td>
                                                                     <td width="50px">
                                                                         <div class="contenedor" id="2P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                     </td>
                                                                     <td width="50px">
                                                                         <div class="contenedor" id="3P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                     </td>
                                                                     <td width="50px">
                                                                         <div class="contenedor" id="4P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                     </td>
                                                                     <td width="50px">
                                                                         <div class="contenedor" id="5P1"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                     </td>
                                                                 </tr>
                                                             </table>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-5">
                                                     <div class="row">
                                                         <div id="CP1" class="col-lg-12 alert alert-warning">
                                                             <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                             <br>
                                                             <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                 <img id="pieza4E1" src="{{asset('img/iconos/funciones/exponenciales/ejercicio1/4.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                 <img id="pieza2E1" src="{{asset('img/iconos/funciones/exponenciales/ejercicio1/2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                 <img id="pieza1E1" src="{{asset('img/iconos/funciones/exponenciales/ejercicio1/1.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                 <img id="pieza3E1" src="{{asset('img/iconos/funciones/exponenciales/ejercicio1/3.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                 <img id="pieza5E1" src="{{asset('img/iconos/funciones/exponenciales/ejercicio1/5.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                 <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                             </div>
                                                         </div>
                                                         <br>
                                                         <div id="botonesPract1" class="row col-lg-12">
                                                             <center>
                                                                 <button type="button" class="btn btn-primary btn-rounded" onclick="ComprobarPractica1();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                 <button type="button" class="btn btn-danger btn-rounded" onclick="reestablecerP1(0);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                             </center>
                                                         </div>
                                                         <div id="EP1" class="col-lg-12 alert alert-success" style="display: none;">
                                                             <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                             <br>
                                                             <p style="text-align: justify;">
                                                                 Excelente posicionaste los valores de forma correcta
                                                             </p>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row animated fadeInUpBig" id="pract_exponencial2" style="display: none;">
                                                 <div class="col-md-7">
                                                     <div class="panel panel-default">
                                                         <div class="panel-heading">
                                                             <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                         </div>
                                                         <div class="panel-body">
                                                             <div class="col-lg-12">
                                                                 ¿Cuál de las siguientes representaciones no es una función exponencial?
                                                             </div>
                                                         </div>
                                                     </div><br>
                                                     <div class="row">
                                                         <div class="col-lg-4">
                                                             <center>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="2rpe1" value="1"
                                                                            name="2rpe"
                                                                            onclick="VerificarEvaluacion2P();">
                                                                     <label for="2rpe1"><b>f(x) = 3<sup>x</sup></b></label>
                                                                 </div>
                                                                 <div id="False1P2" style="display: none;">
                                                                     &nbsp;&nbsp;
                                                                     <span class="badge badge-danger"><i
                                                                                 class="fa fa-thumbs-down"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                         <div class="col-lg-2">
                                                             &nbsp;
                                                         </div>
                                                         <div class="col-lg-4">
                                                             <center>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="2rpe2" value="2"
                                                                            name="2rpe"
                                                                            onclick="VerificarEvaluacion2P();">
                                                                     <label for="2rpe2"><b>f(x) = 1<sup>x</sup></b></label>
                                                                 </div>
                                                                 <div id="True2P2" style="display: none;">
                                                                        <span class="badge badge-primary"><i
                                                                                    class="fa fa-thumbs-up"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                     </div>
                                                     <br><br>
                                                     <div class="row">
                                                         <div class="col-lg-4">
                                                             <center>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="2rpe3" value="3"
                                                                            name="2rpe"
                                                                            onclick="VerificarEvaluacion2P();">
                                                                     <label for="2rpe3"><b>f(x) = e<sup>x</sup></b></label>
                                                                 </div>
                                                                 <div id="False3P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                         <div class="col-lg-2">
                                                             &nbsp;
                                                         </div>
                                                         <div class="col-lg-4">
                                                             <center>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="2rpe4" value="4"
                                                                            name="2rpe"
                                                                            onclick="VerificarEvaluacion2P();">
                                                                     <label for="2rpe4"><b>f(x) = 9<sup>2x</sup></b></label>
                                                                 </div>
                                                                 <div id="False4P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-5">
                                                     <div class="row">
                                                         <div id="CP2" class="col-lg-12 alert alert-warning">
                                                             <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                             <br><br>
                                                             <div class="row" style="padding: 10px;">
                                                                 <p style="text-align: justify;">
                                                                     <font size="3">Desarrolla el ejercicio en tu cuaderno y selecciona la respuesta correcta. </font>
                                                                 </p>
                                                             </div>
                                                         </div>
                                                         <div id="EP2" class="col-lg-12 alert alert-success" style="display: none;">
                                                             <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                             <br>
                                                             <p style="text-align: justify;">
                                                                 Excelente has resuelto el ejercicio, la función exponencial que elegiste es la incorrecta, ya que para la función exponencial f(x) = a<sup>x</sup> de base a, se debe cumplir que <b>a</b> sea un número real positivo distinto de 1
                                                                 <br><br>
                                                                 ¡Bravo! Sigué así!
                                                             </p>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row animated fadeInUpBig" id="pract_exponencial3" style="display: none;">
                                                 <div class="col-md-7">
                                                     <div class="panel panel-default">
                                                         <div class="panel-heading">
                                                             <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                         </div>
                                                         <div class="panel-body">
                                                             <div class="col-lg-12">
                                                                 Cual es la gráfica correspondiente a la función exponencial con base <b>a > 1</b>
                                                             </div>
                                                         </div>
                                                     </div><br>
                                                     <div class="row">
                                                         <div class="col-lg-5">
                                                             <center>
                                                                 <br>
                                                                 <img src="{{asset('img/iconos/funciones/exponenciales/ejercicio3/2.png')}}" width="80%"/>
                                                                 <br>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="3rpe1" value="1"
                                                                            name="3rpe"
                                                                            onclick="VerificarEvaluacion3P();">
                                                                     <label for="3rpe1"><b>f(x) = 3<sup>x</sup></b></label>
                                                                 </div>
                                                                 <div id="False1P3" style="display: none;">
                                                                     &nbsp;&nbsp;
                                                                     <span class="badge badge-danger"><i
                                                                                 class="fa fa-thumbs-down"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                         <div class="col-lg-2">
                                                             &nbsp;
                                                         </div>
                                                         <div class="col-lg-5">
                                                             <center>
                                                                 <br>
                                                                 <img src="{{asset('img/iconos/funciones/exponenciales/ejercicio3/1.png')}}" width="80%"/>
                                                                 <br>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="3rpe2" value="2"
                                                                            name="3rpe"
                                                                            onclick="VerificarEvaluacion3P();">
                                                                     <label for="3rpe2"><b>f(x) = 1<sup>x</sup></b></label>
                                                                 </div>
                                                                 <div id="True2P3" style="display: none;">
                                                                        <span class="badge badge-primary"><i
                                                                                    class="fa fa-thumbs-up"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-5">
                                                     <div class="row">
                                                         <div id="CP3" class="col-lg-12 alert alert-warning">
                                                             <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                             <br><br>
                                                             <div class="row" style="padding: 10px;">
                                                                 <p style="text-align: justify;">
                                                                     <font size="3">Desarrolla el ejercicio en tu cuaderno y selecciona la respuesta correcta. </font>
                                                                 </p>
                                                             </div>
                                                         </div>
                                                         <br>
                                                         <div id="EP3" class="col-lg-12 alert alert-success" style="display: none;">
                                                             <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                             <br>
                                                             <p style="text-align: justify;">
                                                                 Excelente has resuelto el ejercicio, la gráfica que elegiste es la correcta según el comportamiento de la base
                                                                 <br><br>
                                                                 ¡Bravo! Sigué así!
                                                             </p>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row animated fadeInUpBig" id="pract_exponencial4" style="display: none;">
                                                 <div class="col-md-7">
                                                     <div class="panel panel-default">
                                                         <div class="panel-heading">
                                                             <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                         </div>
                                                         <div class="panel-body">
                                                             <div class="col-lg-12">
                                                                 ¿Cuál de las siguientes es la gráfica de <b>y = log<sub>3</sub>(x + 5) - 1</b>?
                                                             </div>
                                                         </div>
                                                     </div><br>
                                                     <div class="row">
                                                         <div class="col-lg-4">
                                                             <center>
                                                                 <br>
                                                                 <img src="{{asset('img/iconos/funciones/logaritmicas/logaritmo/ejercicio4/1.png')}}" width="80%"/>
                                                                 <br>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="4rpe1" value="1"
                                                                            name="4rpe"
                                                                            onclick="VerificarEvaluacion4P();">
                                                                     <label for="4rpe1"><b>Gráfica 1</b></label>
                                                                 </div>
                                                                 <div id="False1P4" style="display: none;">
                                                                     &nbsp;&nbsp;
                                                                     <span class="badge badge-danger"><i
                                                                                 class="fa fa-thumbs-down"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                         <div class="col-lg-2">
                                                             &nbsp;
                                                         </div>
                                                         <div class="col-lg-4">
                                                             <center>
                                                                 <br>
                                                                 <img src="{{asset('img/iconos/funciones/logaritmicas/logaritmo/ejercicio4/2.png')}}" width="80%"/>
                                                                 <br>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="4rpe2" value="2"
                                                                            name="4rpe"
                                                                            onclick="VerificarEvaluacion4P();">
                                                                     <label for="4rpe2"><b>Gráfica 2</b></label>
                                                                 </div>
                                                                 <div id="False2P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                     </div>
                                                     <br><br>
                                                     <div class="row">
                                                         <div class="col-lg-4">
                                                             <center>
                                                                 <br>
                                                                 <img src="{{asset('img/iconos/funciones/logaritmicas/logaritmo/ejercicio4/3.png')}}" width="80%"/>
                                                                 <br>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="4rpe3" value="3"
                                                                            name="4rpe"
                                                                            onclick="VerificarEvaluacion4P();">
                                                                     <label for="4rpe3"><b>Gráfica 3</b></label>
                                                                 </div>
                                                                 <div id="False3P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                         <div class="col-lg-2">
                                                             &nbsp;
                                                         </div>
                                                         <div class="col-lg-4">
                                                             <center>
                                                                 <br>
                                                                 <img src="{{asset('img/iconos/funciones/logaritmicas/logaritmo/ejercicio4/4.png')}}" width="80%"/>
                                                                 <br>
                                                                 <div class="radio radio-info radio-inline">
                                                                     <input type="radio" id="4rpe4" value="4"
                                                                            name="4rpe"
                                                                            onclick="VerificarEvaluacion4P();">
                                                                     <label for="4rpe4"><b>Gráfica 4</b></label>
                                                                 </div>
                                                                 <div id="True4P4" style="display: none;">
                                                                        <span class="badge badge-success"><i
                                                                                    class="fa fa-thumbs-up"></i></span>
                                                                 </div>
                                                             </center>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-5">
                                                     <div class="row">
                                                         <div id="CP4" class="col-lg-12 alert alert-warning">
                                                             <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                             <br><br>
                                                             <div class="row" style="padding: 10px;">
                                                                 <p style="text-align: justify;">
                                                                     <font size="3">Desarrolla el ejercicio en tu cuaderno y selecciona la respuesta correcta. </font>
                                                                 </p>
                                                             </div>
                                                         </div>
                                                         <div id="EP4" class="col-lg-12 alert alert-success" style="display: none;">
                                                             <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                             <br>
                                                             <p style="text-align: justify;">
                                                                 Excelente has resuelto el ejercicio, la gráfica que corresponde a la función logaritmica presentada es la que tú elegiste,
                                                                 ¡Bravo! Sigué así!
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
                    </div>
                </div><!--cierre de la segunda pestaña del acordeon....-->
                <!--acordeon paso 2...-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><b> Resolución de Ejercicios</b></a>
                            <div class="nav navbar-top-links navbar-right ">
                                <div class="col-lg-3">
                                    <button type="button"  onclick="tour2()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="ibox">
                                        <div class="ibox-content"  id="tour2-1">
                                            <div class="row animated fadeInRightBig" id="resol_ejercicios">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="alert alert-info">
                                                                <strong>Segmento de gráfica</strong><br>
                                                                En esta sección se te mostrara la gráfica según los puntos que tú ingreses en el área <b>"Información"</b>.
                                                            </div>
                                                            <center>
                                                                <div class="jxgbox" id="plano1" style="width: 400px;height: 400px; "></div>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Información</strong><br>
                                                                        Ingresa los valores en los campos correspondientes. Luego de ello presiona el botón "Generar" para conocer el resultado y procedimiento.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div id="Puntos" class="alert alert-warning">
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td width="40%"><center>Base</center></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td width="40%"><center>Exponencial</center></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="base" width="100%"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="exponente" width="100%"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><center><button type="button" class="btn btn-danger btn-rounded" onclick="limpiarResolucion();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button></center></td>
                                                                                <td>&nbsp;</td>
                                                                                <td><center><button type="button" class="btn btn-primary btn-rounded" onclick="generarResolucion();"><i class="fa fa-check"></i>&nbsp;Generar</button></center></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div id="Resultado" class="alert alert-success" style="display: none;">
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
                    </div>
                </div><!--cierre de la segunda pestaña del acordeon....-->
            </div><!--cierre con el class panel -- acordion -->
        </div><!--cierre con el class panel -- body -->
    </div><!--cierre con el class ibox -- content -->
</div><!--cierre con el primer div -->
<script>
//resolucion de ejercicios
/////////////FUNCIONES PARA GRAFICAR PUNTOS
function limpiarResolucion()
{
    brd = JXG.JSXGraph.initBoard('plano1',{boundingbox:[-4,4,4,-4], keepaspectratio:true, axis:true,showCopyright:false});
    p1 = brd.create('point',[0,0],{visible:true});
    p2 = brd.create('point',[0,0],{visible:true});
}  
limpiarResolucion();
function datoX1(x1){
    if(x1.value!="")
    {
        console.log(x1.value);
        var x1N = parseInt(x1.value);
        var y1N = parseInt(document.getElementById("y1").value);
        var x2N = parseInt(document.getElementById("x2").value);
        var y2N = parseInt(document.getElementById("y2").value);
        var mayor;
        var mayorN;
        if (x1N>y1N) {
            if (x1N>x2N) {
                if (x1N>y2N) {
                    mayor=x1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        else
        {
            if (y1N>x2N) {
                if (y1N>y2N) {
                    mayor=y1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        console.log(mayor);
        mayor=mayor+2;
        mayorN=mayor * -1;
        brd = JXG.JSXGraph.freeBoard(brd);
        brd = JXG.JSXGraph.initBoard('plano1',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
        p1 = brd.create('point',[x1.value,document.getElementById("y1").value],{visible:true});
        p2 = brd.create('point',[document.getElementById("x2").value,document.getElementById("y2").value],{visible:true});
        var s1 = brd.create('segment',[p1, p2],{strokeColor:'#01aeef'});
    }
}
function datoY1(y1){
    if(y1.value!="")
    {
        console.log(y1.value);
        var x1N = parseInt(document.getElementById("x1").value);
        var y1N = parseInt(y1.value);
        var x2N = parseInt(document.getElementById("x2").value);
        var y2N = parseInt(document.getElementById("y2").value);
        var mayor;
        var mayorN;
        if (x1N>y1N) {
            if (x1N>x2N) {
                if (x1N>y2N) {
                    mayor=x1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        else
        {
            if (y1N>x2N) {
                if (y1N>y2N) {
                    mayor=y1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        console.log(mayor);
        mayor=mayor+2;
        mayorN=mayor * -1;
        brd = JXG.JSXGraph.freeBoard(brd);
        brd = JXG.JSXGraph.initBoard('plano1',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
        p1 = brd.createElement('point',[document.getElementById("x1").value,y1.value],{visible:true});
        p2 = brd.create('point',[document.getElementById("x2").value,document.getElementById("y2").value],{visible:true});
        var s1 = brd.create('segment',[p1, p2],{strokeColor:'#01aeef'});   
    }
}
function datoX2(x2){
    if(x2.value!="")
    {
        console.log(x2.value);
        var x1N = parseInt(document.getElementById("x1").value);
        var y1N = parseInt(document.getElementById("y1").value);
        var x2N = parseInt(x2.value);
        var y2N = parseInt(document.getElementById("y2").value);
        var mayor;
        var mayorN;
        if (x1N>y1N) {
            if (x1N>x2N) {
                if (x1N>y2N) {
                    mayor=x1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        else
        {
            if (y1N>x2N) {
                if (y1N>y2N) {
                    mayor=y1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        console.log(mayor);
        mayor=mayor+2;
        mayorN=mayor * -1;
        brd = JXG.JSXGraph.freeBoard(brd);
        brd = JXG.JSXGraph.initBoard('plano1',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
        p1 = brd.create('point',[document.getElementById("x1").value,document.getElementById("y1").value],{visible:true});
        p2 = brd.create('point',[x2.value,document.getElementById("y2").value],{visible:true});
        var s1 = brd.create('segment',[p1, p2],{strokeColor:'#01aeef'});
    }
}
function datoY2(y2){
    if(y2.value!="")
    {
        console.log(y2.value);
        var x1N = parseInt(document.getElementById("x1").value);
        var y1N = parseInt(document.getElementById("y1").value);
        var x2N = parseInt(document.getElementById("x2").value);
        var y2N = parseInt(y2.value);
        var mayor;
        var mayorN;
        if (x1N>y1N) {
            if (x1N>x2N) {
                if (x1N>y2N) {
                    mayor=x1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        else
        {
            if (y1N>x2N) {
                if (y1N>y2N) {
                    mayor=y1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        console.log(mayor);
        mayor=mayor+2;
        mayorN=mayor * -1;
        brd = JXG.JSXGraph.freeBoard(brd);
        brd = JXG.JSXGraph.initBoard('plano1',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
        p1 = brd.create('point',[document.getElementById("x1").value,document.getElementById("y1").value],{visible:true});
        p2 = brd.create('point',[document.getElementById("x2").value,y2.value],{visible:true});
        var s1 = brd.create('segment',[p1, p2],{strokeColor:'#01aeef'});
    }
}
function generarResolucion()
{
    var base;
    var exponente;

    if (document.getElementById("base").value!=0) {
        base=parseFloat(document.getElementById("base").value);
    }
    else
    {
        base=0;
    }
    if (document.getElementById("exponente").value!=0) {
        exponente=parseFloat(document.getElementById("exponente").value);
    }
    else
    {
        exponente=0;
    }
    //////INICIO DEL PROCEDIMIENTO
    /*$("#solucion").html("<center>Conociendo los puntos A("+x1+","+y1+") y B("+x2+","+y2+") y tomando en cuenta la fórmula para encontrar el punto medio,<br><br>"+
        "<font size='3'><b><table border='0'>"+
            "<tr>"+
                "<td rowspan='2'>X<sub>m</sub> = </td>"+
                "<td style='border-bottom: 1px green solid;'>X<sub>2</sub> + X<sub>1</sub></td>"+
                "<td rowspan='2'>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
                "<td rowspan='2'>Y<sub>m</sub> = </td>"+
                "<td style='border-bottom: 1px green solid;'>Y<sub>2</sub> + Y<sub>1</sub></td>"+
            "</tr>"+
            "<tr>"+
                "<td><center>2</center></td>"+
                "<td><center>2</center></td>"+
            "</tr>"+
        "</table></b></font>"+
        "<br><br>"+
        "</center>");
        var impreX;
        var impreY;
        if (x1<0) {
            impreX="( "+x1+" )";
        }
        else
        {
            impreX=x1;
        }
        if (y1<0) {
            impreY="( "+y1+" )";
        }
        else
        {
            impreY=y1;
        }
        $("#solucion").append("<center>Sustituimos los datos obtenidos:"+
        "<br><br>"+
        "<font size='3'><b><table border='0'>"+
            "<tr>"+
                "<td rowspan='2'>X<sub>m</sub> = </td>"+
                "<td style='border-bottom: 1px green solid;'>"+x2+" + "+impreX+"</td>"+
                "<td rowspan='2'>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
                "<td rowspan='2'>Y<sub>m</sub> = </td>"+
                "<td style='border-bottom: 1px green solid;'>"+y2+" + "+impreY+"</td>"+
            "</tr>"+
            "<tr>"+
                "<td><center>2</center></td>"+
                "<td><center>2</center></td>"+
            "</tr>"+
        "</table></b></font>"+
        "<br><br>"+
        "Realizamos las sumas superiores:"+
        "</center>");
        var sumaX;
        var sumaY;
        sumaX=x2+x1;
        sumaY=y2+y1;
        $("#solucion").append("<center><br>"+
        "<font size='3'><b><table border='0'>"+
            "<tr>"+
                "<td rowspan='2'>X<sub>m</sub> = </td>"+
                "<td style='border-bottom: 1px green solid;'>"+sumaX+"</td>"+
                "<td rowspan='2'>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
                "<td rowspan='2'>Y<sub>m</sub> = </td>"+
                "<td style='border-bottom: 1px green solid;'>"+sumaY+"</td>"+
            "</tr>"+
            "<tr>"+
                "<td><center>2</center></td>"+
                "<td><center>2</center></td>"+
            "</tr>"+
        "</table></b></font>"+
        "</center>");
        var divisionX;
        var divisionY;
        divisionX = sumaX / 2;
        if (divisionX % 1 ==0) {
            divisionX = parseInt(divisionX);
        }
        else
        {
            divisionX=divisionX.toFixed(2);
        }
        divisionY = sumaY / 2;
        if (divisionY % 1 ==0) {
            divisionY = parseInt(divisionY);
        }
        else
        {
            divisionY=divisionY.toFixed(2);
        }
        $("#solucion").append("<center><br>"+
        "Realizamos las divisiones y obtendremos el punto medio para X y Y, los cuales son: "+
        "<br><br>"+
        "<font size='3'><b><table border='0'>"+
            "<tr>"+
                "<td>X<sub>m</sub> = "+divisionX+"</td>"+
                "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
                "<td>Y<sub>m</sub> = "+divisionY+"</td>"+
            "</tr>"+
        "</table></b></font>"+
        "<br><br>"+
        "Conociendo los puntos medios de X y Y, sabemos el punto medio del segmento de recta, ya que <b>P<sub>m</sub> = (X<sub>m</sub> , Y<sub>m</sub>)</b>, por lo cual, el punto medio es:"+
        "<br><br>"+
        "<font size='3'><b><b>P<sub>m</sub> = ("+divisionX+" , "+divisionY+")</font>"+
        "<br><br>"+
        "<button type='button' class='btn btn-info btn-rounded' onclick='Puntos();'><i class='fa fa-repeat'></i>&nbsp;Cambiar Coordenadas</button>"+
        "</center>");*/
        graficarPunto(base,exponente);
}
function graficarPunto(b,e){
        /*var x1N = parseInt(document.getElementById("x1").value);
        var y1N = parseInt(document.getElementById("y1").value);
        var x2N = parseInt(document.getElementById("x2").value);
        var y2N = parseInt(document.getElementById("y2").value);
        var mayor;
        var mayorN;
        if (x1N>y1N) {
            if (x1N>x2N) {
                if (x1N>y2N) {
                    mayor=x1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        else
        {
            if (y1N>x2N) {
                if (y1N>y2N) {
                    mayor=y1N;
                }
                else
                {
                    mayor=y2N;
                }
            }
            else
            {
                if (x2N>y2N) {
                    mayor=x2N;
                }
                else
                {
                    mayor=y2N;
                }
            }
        }
        console.log(mayor);
        mayor=mayor+2;
        mayorN=mayor * -1;*/
        if(b!=1){
            //var brd = JXG.JSXGraph.freeBoard(brd);
            brd = JXG.JSXGraph.initBoard('plano1',{boundingbox:[-8,8,8,-8], keepaspectratio:true, axis:true,showCopyright:false});
            /*p1 = brd.create('point',[x1.value,document.getElementById("y1").value],{visible:true});
             p2 = brd.create('point',[document.getElementById("x2").value,document.getElementById("y2").value],{visible:true});
             p3 = brd.create('point',[Xm,Ym],{visible:true, fillColor: "blue", strokeWidth: 0, highlightFillOpacity: 0.90, name: 'P<sub>m</sub> ('+Xm+' , '+Ym+')'});
             var s1 = brd.create('segment',[p1, p2],{strokeColor:'#01aeef'}); */
            var A = brd.create('point', [b, Math.exp(e)]);
            var graph = brd.create('functiongraph', [
                function(x) {
                    var a = Math.log(A.Y()) / A.X();
                    return Math.exp(a * x);
                }]);
        }
        else{

        }

}
////////////

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
function ComprobarPractica1(){
    if((document.getElementById('pieza1E1').parentNode.id=='1P1') &&
        (document.getElementById('pieza2E1').parentNode.id=='2P1') &&
        (document.getElementById('pieza3E1').parentNode.id=='3P1') &&
        (document.getElementById('pieza4E1').parentNode.id=='4P1') &&
        (document.getElementById('pieza5E1').parentNode.id=='5P1'))
    {
        swal("Excelente!", "Has colocado los datos correctamente", "success");
        $("#CP1").fadeOut(0);
        $("#botonesPract1").fadeOut(0);
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
                "<img id='pieza3P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/3.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='pieza2P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/2.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='pieza1P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/1.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<img id='pieza4P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/4.png')}}'>"+
                "</div>"+
                "<img id='pieza5P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/5.png')}}'>"+
                "</div>"+
                "<div class='col-md-3'>"+
                "<p><br></p>"+
                "</div>");
            //Limpiando espacios libres...
            $("#1P1").html("");
            $("#2P1").html("");
            $("#3P1").html("");
            $("#4P1").html("");
            $("#5P1").html("");
        });//cierre del swal
    }
    else
    {
        //Limpiando componentes...
        $("#CP1").html(""+
            "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
            "<br>"+
            "<div class='col-md-3'>"+
            "<img id='pieza3P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/3.png')}}'>"+
            "</div>"+
            "<div class='col-md-3'>"+
            "<img id='pieza2P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/2.png')}}'>"+
            "</div>"+
            "<div class='col-md-3'>"+
            "<img id='pieza1P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/1.png')}}'>"+
            "</div>"+
            "<div class='col-md-3'>"+
            "<img id='pieza4P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/4.png')}}'>"+
            "</div>"+
            "<img id='pieza5P1' draggable='true' ondragstart='start(event)' ondragend='end(event)' src='{{asset('img/iconos/funciones/exponenciales/ejercicio1/5.png')}}'>"+
            "</div>"+
            "<div class='col-md-3'>"+
            "<p><br></p>"+
            "</div>");
        //Limpiando espacios libres...
        $("#1P1").html("");
        $("#2P1").html("");
        $("#3P1").html("");
        $("#4P1").html("");
        $("#5P1").html("");
    }
}
function VerificarEvaluacion2P() {
    if ($('input:radio[name=2rpe]:checked').val() == 1) {
        $("#False3P2").fadeOut(0);
        $("#False4P2").fadeOut(0);
        $("#True2P2").fadeOut(0);
        $("#False1P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        $("#EP2").fadeOut(0);
        $("#CP2").fadeIn(300);
    } else {
        $("#False1P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val() == 2) {
        $("#False1P2").fadeOut(0);
        $("#False3P2").fadeOut(0);
        $("#False4P2").fadeOut(0);
        $("#True2P2").fadeIn(300);
        toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
        $("#CP2").fadeOut(0);
        $("#EP2").fadeIn(300);
    } else {
        $("#True2P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val() == 3) {
        $("#False1P2").fadeOut(0);
        $("#False4P2").fadeOut(0);
        $("#True2P2").fadeOut(0);
        $("#False3P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        $("#EP2").fadeOut(0);
        $("#CP2").fadeIn(300);
    } else {
        $("#False3P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val() == 4) {
        $("#False1P2").fadeOut(0);
        $("#False3P2").fadeOut(0);
        $("#True2P2").fadeOut(0);
        $("#False4P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        $("#EP2").fadeOut(0);
        $("#CP2").fadeIn(300);
    } else {
        $("#False4P2").fadeOut(0);
    }
}
function VerificarEvaluacion3P() {
    if ($('input:radio[name=3rpe]:checked').val() == 1) {
        $("#True2P3").fadeOut(0);
        $("#False1P3").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        $("#EP3").fadeOut(0);
        $("#CP3").fadeIn(300);
    } else {
        $("#False1P3").fadeOut(0);
    }
    if ($('input:radio[name=3rpe]:checked').val() == 2) {
        $("#False1P3").fadeOut(0);
        $("#True2P3").fadeIn(300);
        toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
        $("#CP3").fadeOut(0);
        $("#EP3").fadeIn(300);
    } else {
        $("#True2P3").fadeOut(0);
    }
}


function Puntos(){
    $("#Resultado").fadeOut(0);
    $("#Puntos").fadeIn(300);
}
//practica
function cambia_practica(opc){
    switch(opc)
    {
        case 1:
        {
            $("#pract_exponencial2").fadeOut(0);
            $("#pract_exponencial3").fadeOut(0);
            $("#pract_exponencial4").fadeOut(0);
            $("#pract_exponencial1").fadeIn(300);
        }break;
        case 2:
        {
            $("#pract_exponencial1").fadeOut(0);
            $("#pract_exponencial3").fadeOut(0);
            $("#pract_exponencial4").fadeOut(0);
            $("#pract_exponencial2").fadeIn(300);
        }break;
        case 3:
        {
            $("#pract_exponencial2").fadeOut(0);
            $("#pract_exponencial1").fadeOut(0);
            $("#pract_exponencial4").fadeOut(0);
            $("#pract_exponencial3").fadeIn(300);
        }break;
        case 4:
        {
            $("#pract_exponencial2").fadeOut(0);
            $("#pract_exponencial3").fadeOut(0);
            $("#pract_exponencial1").fadeOut(0);
            $("#pract_exponencial4").fadeIn(300);
        }break;
    }
}


/*function VerificarEvaluacion1(){
    if ($('input:radio[name=1rpe]:checked').val()==1) {
        $("#False2P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#True5P1").fadeOut(0);
        $("#False1P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False1P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==2) {
        $("#False1P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#True5P1").fadeOut(0);
        $("#False2P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False2P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==3) {
        $("#False1P1").fadeOut(0);
        $("#False2P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#True5P1").fadeOut(0);
        $("#False3P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False3P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==4) {
        $("#False1P1").fadeOut(0);
        $("#False2P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#True5P1").fadeOut(0);
        $("#False4P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False4P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==5) {
        $("#False1P1").fadeOut(0);
        $("#False2P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#True5P1").fadeIn(300);
        toastr.success('Has seleccionado la respuesta correcta, continua practicando','Excelente');
    } else {
        $("#True5P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==6) {
        $("#False1P1").fadeOut(0);
        $("#False2P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#True5P1").fadeOut(0);
        $("#False6P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False6P1").fadeOut(0);
    }
}
function limpiarPractica1(){
    $('input[name=1rpe]').attr('checked',false);
    $("#False1P1").fadeOut(0);
    $("#False2P1").fadeOut(0);
    $("#False3P1").fadeOut(0);
    $("#False4P1").fadeOut(0);
    $("#True5P1").fadeOut(0);
    $("#False6P1").fadeOut(0); 
    toastr.success('Infomación borrada','Muy Bien');  
}
function VerificarEvaluacion2(){
    if ($('input:radio[name=2rpe]:checked').val()==1) {
        $("#False2P2").fadeOut(0);
        $("#False4P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        $("#True3P2").fadeOut(0);
        $("#False1P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False1P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val()==2) {
        $("#False1P2").fadeOut(0);
        $("#False4P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        $("#True3P2").fadeOut(0);
        $("#False2P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False2P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val()==3) {
        $("#False1P2").fadeOut(0);
        $("#False2P2").fadeOut(0);
        $("#False4P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        $("#True3P2").fadeIn(300);
        toastr.success('Has seleccionado la respuesta correcta, continua practicando','Excelente');
    } else {
        $("#True3P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val()==4) {
        $("#False1P2").fadeOut(0);
        $("#False2P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        $("#True3P2").fadeOut(0);
        $("#False4P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False4P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val()==5) {
        $("#False1P2").fadeOut(0);
        $("#False2P2").fadeOut(0);
        $("#False4P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        $("#True3P2").fadeOut(0);
        $("#False5P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False5P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val()==6) {
        $("#False1P2").fadeOut(0);
        $("#False2P2").fadeOut(0);
        $("#False4P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#True3P2").fadeOut(0);
        $("#False6P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False6P2").fadeOut(0);
    }
}
function limpiarPractica2(){
    $('input[name=2rpe]').attr('checked',false);
    $("#False1P2").fadeOut(0);
    $("#False2P2").fadeOut(0);
    $("#True3P2").fadeOut(0);
    $("#False4P2").fadeOut(0);
    $("#False5P2").fadeOut(0);
    $("#False6P2").fadeOut(0); 
    toastr.success('Infomación borrada','Muy Bien');  
}
function VerificarEvaluacion3(){
    if ($('input:radio[name=3rpe]:checked').val()==1) {
        $("#True2P3").fadeOut(0);
        $("#False3P3").fadeOut(0);
        $("#False4P3").fadeOut(0);
        $("#False5P3").fadeOut(0);
        $("#False6P3").fadeOut(0);
        $("#False1P3").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False1P3").fadeOut(0);
    }
    if ($('input:radio[name=3rpe]:checked').val()==2) {
        $("#False3P3").fadeOut(0);
        $("#False4P3").fadeOut(0);
        $("#False5P3").fadeOut(0);
        $("#False6P3").fadeOut(0);
        $("#False1P3").fadeOut(0);
        $("#True2P3").fadeIn(300);
        toastr.success('Has seleccionado la respuesta correcta, continua practicando','Excelente');
    } else {
        $("#True2P3").fadeOut(0);
    }
    if ($('input:radio[name=3rpe]:checked').val()==3) {
        $("#True2P3").fadeOut(0);
        $("#False4P3").fadeOut(0);
        $("#False5P3").fadeOut(0);
        $("#False6P3").fadeOut(0);
        $("#False1P3").fadeOut(0);
        $("#False3P3").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False3P3").fadeOut(0);
    }
    if ($('input:radio[name=3rpe]:checked').val()==4) {
        $("#True2P3").fadeOut(0);
        $("#False3P3").fadeOut(0);
        $("#False5P3").fadeOut(0);
        $("#False6P3").fadeOut(0);
        $("#False1P3").fadeOut(0);
        $("#False4P3").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False4P3").fadeOut(0);
    }
    if ($('input:radio[name=3rpe]:checked').val()==5) {
        $("#True2P3").fadeOut(0);
        $("#False3P3").fadeOut(0);
        $("#False4P3").fadeOut(0);
        $("#False6P3").fadeOut(0);
        $("#False1P3").fadeOut(0);
        $("#False5P3").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False5P3").fadeOut(0);
    }
    if ($('input:radio[name=3rpe]:checked').val()==6) {
        $("#True2P3").fadeOut(0);
        $("#False3P3").fadeOut(0);
        $("#False4P3").fadeOut(0);
        $("#False5P3").fadeOut(0);
        $("#False1P3").fadeOut(0);
        $("#False6P3").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False6P3").fadeOut(0);
    }
}
function limpiarPractica3(){
    $('input[name=3rpe]').attr('checked',false);
    $("#True2P3").fadeOut(0);
    $("#False1P3").fadeOut(0);
    $("#False3P3").fadeOut(0);
    $("#False4P3").fadeOut(0);
    $("#False5P3").fadeOut(0);
    $("#False6P3").fadeOut(0); 
    toastr.success('Infomación borrada','Muy Bien');  
}
function VerificarEvaluacion4(){
    if ($('input:radio[name=4rpe]:checked').val()==1) {
        $("#False2P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#False5P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        $("#True4P4").fadeOut(0);
        $("#False1P4").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False1P4").fadeOut(0);
    }
    if ($('input:radio[name=4rpe]:checked').val()==2) {
        $("#False1P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#True4P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        $("#False5P4").fadeOut(0);
        $("#False2P4").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False2P4").fadeOut(0);
    }
    if ($('input:radio[name=4rpe]:checked').val()==3) {
        $("#False1P4").fadeOut(0);
        $("#False2P4").fadeOut(0);
        $("#True4P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        $("#False5P4").fadeOut(0);
        $("#False3P4").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False3P4").fadeOut(0);
    }
    if ($('input:radio[name=4rpe]:checked').val()==4) {
        $("#False1P4").fadeOut(0);
        $("#False2P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        $("#False5P4").fadeOut(0);
        $("#True4P4").fadeIn(300);
        toastr.success('Has seleccionado la respuesta correcta','Excelente');
    } else {
        $("#True4P4").fadeOut(0);
    }
    if ($('input:radio[name=4rpe]:checked').val()==5) {
        $("#False1P4").fadeOut(0);
        $("#False2P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#True4P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        $("#False5P4").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False5P4").fadeOut(0);
    }
    if ($('input:radio[name=4rpe]:checked').val()==6) {
        $("#False1P4").fadeOut(0);
        $("#False2P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#True4P4").fadeOut(0);
        $("#False5P4").fadeOut(0);
        $("#False6P4").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False6P4").fadeOut(0);
    }
}
function limpiarPractica4(){
    $('input[name=4rpe]').attr('checked',false);
    $("#False1P4").fadeOut(0);
    $("#False2P4").fadeOut(0);
    $("#False3P4").fadeOut(0);
    $("#True4P4").fadeOut(0);
    $("#False5P4").fadeOut(0);
    $("#False6P4").fadeOut(0); 
    toastr.success('Infomación borrada','Muy Bien');  
}*/
function tour1(){
    var tour = new Tour({
    steps: [{
        element: "#tour1-1",
        title: "Paso 1",
        content: "Presiona cualquiera de los siguientes números para mostrar un ejemplo de punto medio",
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
        element: "#tour1-2",
        title: "Paso 2",
        content: "Visualisa la gráfica que se te presenta en el área \"Segmento de recta\", resuelve el ejercicio en base a lo aprendido la sección de \"Teoría\", una vez resuelto el ejercicio, selecciona la respuesta correcta en el área \"Resultado\" y presiona el botón \"Comprobar\" para verificar si la opción seleccionada es la correcta.",
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
function tour2(){
    var tour = new Tour({
    steps: [{
        element: "#tour2-1",
        title: "Paso 1",
        content: "Ingresa los datos correspondientes en los espacios asignados a cada punto, en el área \"Segmento de recta\" podrás visualizar el segmento de recta que se crea en base a los puntos; para conocer el punto medio del segmento de recta, presiona el botón \"Generar\"",
        placement: "top",
        backdrop: true,
        backdropContainer: '#wrapper',
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