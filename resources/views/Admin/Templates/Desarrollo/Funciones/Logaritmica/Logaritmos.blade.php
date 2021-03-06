<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins  animated fadeInUpBig">
            <div class="ibox-title">
                <h5>Logaritmos <small>- Logaritmos</small></h5>
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
                                            <strong>Logaritmo</strong><br><br>
                                            <p style="text-align: justify;">
                                                El logaritmo de un número, en una base dada, es el exponente al cual se debe elevar la base para obtener el número.
                                                <br>
                                                <br>
                                                <font size="4">
                                                    <center>
                                                        log<sub>a</sub> x = y --> a<sup>y</sup> = x
                                                    </center>
                                                </font>
                                                <br><br>
                                                Se lee <b>"logaritmo de x en base a es igual a y"</b>, pero debe cumplir con la condición general de que <b>a</b> (la base) sea mayor que cero y  a la vez distinta de uno :
                                                <br><br>
                                                <font size="4">
                                                    <center>
                                                        a > 0
                                                        <br>
                                                        a ≠ 1
                                                    </center>
                                                </font>
                                                <br><br>
                                                Para aclarar el concepto, podríamos decir que logaritmo <b>es solo otra forma de expresar la potenciación</b>, como en este ejemplo:
                                                <br><br>
                                                <font size="4">
                                                    <center>
                                                        3<sup>2</sup> = 9&nbsp;&nbsp;&nbsp;=>&nbsp;&nbsp;&nbsp;log<sub>3</sub> 9 = 2
                                                    </center>
                                                </font>
                                                <br><br>
                                                Que leeremos: logaritmo de 9 en base 3 es igual a 2
                                                <br><br>
                                                Esto significa que una potencia se puede expresar como logaritmo y un logaritmo se puede expresar como potencia.
                                                <br><br>
                                                El gráfico siguiente nos muestra el nombre que recibe cada uno de los elementos de una potencia al expresarla como logaritmo:
                                                <br><br>
                                            </p>
                                            <div class="col-lg-12">
                                                <center>
                                                    <img src="{{asset('img/iconos/funciones/logaritmicas/logaritmo/teoria.png')}}" width="80%">
                                                </center>
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
                                                                Volvamos a la definición de logaritmo:
                                                                <br><br>
                                                                <b>“exponente al que es necesario elevar una cantidad positiva para que resulte un número determinado”.</b>
                                                                <br><br>
                                                                Si lo escribiera como ecuación, corresponde a resolver logb a = x, donde b es la base del logaritmo y a es su argumento, con a y b positivos.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="text-align: justify;">
                                                <center><font size="4">Propiedades de los logaritmos</font></center>
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-sm-4">
                                                <p style="text-align: justify; border: 1px #1AB394 dotted; padding: 5px;">
                                                    <b>Logaritmo de la unidad</b>
                                                    <br><br>
                                                    El logaritmo de 1 en cualquier base es igual a 0.
                                                    <br><br>
                                                    Es decir:
                                                    <br><br>
                                                    log<sub>b</sub> (1) = 0 ;  con b ≠ 1.
                                                    <br><br>
                                                    Ejemplo:
                                                    <br><br>
                                                    log<sub>5</sub> (1) = 0 porque 5<sup>0</sup> = 1
                                                    <br><br>
                                                    log<sub>7</sub> (1) = 0 porque 7<sup>0</sup> = 1
                                                    <br><br>
                                                    log<sub>20</sub> 1 = 0 ⇔ 20<sup>0</sup> = 1
                                                </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p style="text-align: justify; border: 1px #1AB394 dotted; padding: 5px;">
                                                    <b>Logaritmo de la base</b>
                                                    <br><br>
                                                    El logaritmo de la base es igual a 1.
                                                    <br><br>
                                                    Es decir:
                                                    <br><br>
                                                    log<sub>b</sub> (b) = 1 ;  con b ≠ 1.
                                                    <br><br>
                                                    Ejemplo:
                                                    <br><br>
                                                    log<sub>5</sub> (5) = 1 ⇔ 5<sup>1</sup> = 5
                                                    <br><br>
                                                    log<sub>6</sub> (6) = 1 ⇔ 6<sup>1</sup> = 6
                                                    <br><br>
                                                    log<sub>12</sub> (12) = 1 ⇔ 12<sup>1</sup> = 12
                                                </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p style="text-align: justify; border: 1px #1AB394 dotted; padding: 5px;">
                                                    <b>Logaritmo de una potencia con igual base</b>
                                                    <br><br>
                                                    El logaritmo de una potencia de un número es igual al producto entre el exponente de la potencia y el logaritmo del número.
                                                    <br><br>
                                                    Es decir:
                                                    <br><br>
                                                    log<sub>b</sub> (b<sup>n</sup>) = n ;  con b ≠ 1.
                                                    <br><br>
                                                    Ejemplo:
                                                    <br><br>
                                                    log<sub>6</sub> (6<sup>3</sup>) = 3
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-sm-4">
                                                <p style="text-align: justify; border: 1px #1AB394 dotted; padding: 5px;">
                                                    <b>Logaritmo de un producto</b>
                                                    <br><br>
                                                    El logaritmo de un producto es igual a la suma de los logaritmos de los factores.
                                                    <br><br>
                                                    Es decir:
                                                    <br><br>
                                                    log<sub>b</sub> (a * c) = log<sub>b</sub> (a) * log<sub>b</sub> (c)
                                                    <br><br>
                                                    Ejemplo:
                                                    <br><br>
                                                    log<sub>b</sub> (5 * 2) = log<sub>b</sub> (5) * log<sub>b</sub> (2)
                                                </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p style="text-align: justify; border: 1px #1AB394 dotted; padding: 5px;">
                                                    <b>Logaritmo de la base</b>
                                                    <br><br>
                                                    El logaritmo de la base es igual a 1.
                                                    <br><br>
                                                    Es decir:
                                                    <br><br>
                                                    log<sub>b</sub> (b) = 1 ;  con b ≠ 1.
                                                    <br><br>
                                                    Ejemplo:
                                                    <br><br>
                                                    log<sub>5</sub> (5) = 1 ⇔ 5<sup>1</sup> = 5
                                                    <br><br>
                                                    log<sub>6</sub> (6) = 1 ⇔ 6<sup>1</sup> = 6
                                                    <br><br>
                                                    log<sub>12</sub> (12) = 1 ⇔ 12<sup>1</sup> = 12
                                                </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p style="text-align: justify; border: 1px #1AB394 dotted; padding: 5px;">
                                                    <b>Logaritmos de un cociente</b>
                                                    <br><br>
                                                    El logaritmo de un cociente es igual al logaritmo del dividendo, menos el logaritmo del divisor.
                                                    <br><br>
                                                    Es decir:
                                                    <br><br>
                                                    log<sub>b</sub> (<sup>p</sup>/<sub>q</sub>) = log<sub>b</sub> (p) - log<sub>b</sub> (q)
                                                    <br><br>
                                                    Ejemplo:
                                                    <br><br>
                                                    log<sub>2</sub> (<sup>3</sup>/<sub>4</sub>) = log<sub>2</sub> (3) - log<sub>2</sub> (4)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-sm-4">
                                                <p style="text-align: justify; border: 1px #1AB394 dotted; padding: 5px;">
                                                    <b>Logaritmo de una potencia</b>
                                                    <br><br>
                                                    El logaritmo de una potencia es igual al exponente multiplicado por el logaritmo de la base
                                                    <br><br>
                                                    Es decir:
                                                    <br><br>
                                                    log<sub>a</sub> (c<sup>n</sup>) = n log<sub>a</sub> (c)
                                                    <br><br>
                                                    Ejemplo:
                                                    <br><br>
                                                    log<sub>3</sub> (10<sup>2</sup>) = 2 log<sub>3</sub> (10)
                                                </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p style="text-align: justify; border: 1px #1AB394 dotted; padding: 5px;">
                                                    <b>Logaritmo de una raíz</b>
                                                    <br><br>
                                                    El logaritmo de una raíz es igual al logaritmo de la cantidad subradical dividido entre el índice de la raíz.
                                                    <br><br>
                                                    Es decir:
                                                    <br><br>
                                                    log<sub>b</sub> (<sup>n</sup>√ a <sup>m</sup>) = <sup>m</sup> / <sub>n</sub> log<sub>b</sub> a
                                                    <br><br>
                                                    Ejemplo:
                                                    <br><br>
                                                    log<sub>4</sub> (<sup>6</sup>√ 16) = <sup>1</sup> / <sub>6</sub> * log<sub>4</sub> 4 <sup>2</sup>
                                                </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p style="text-align: justify; border: 1px #1AB394 dotted; padding: 5px;">
                                                    <b>Logaritmos de un cociente</b>
                                                    <br><br>
                                                    El logaritmo de un cociente es igual al logaritmo del dividendo, menos el logaritmo del divisor.
                                                    <br><br>
                                                    Es decir:
                                                    <br><br>
                                                    log<sub>b</sub> (<sup>p</sup>/<sub>q</sub>) = log<sub>b</sub> (p) - log<sub>b</sub> (q)
                                                    <br><br>
                                                    Ejemplo:
                                                    <br><br>
                                                    log<sub>2</sub> (<sup>3</sup>/<sub>4</sub>) = log<sub>2</sub> (3) - log<sub>2</sub> (4)
                                                </p>
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
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_coseno('1')">1</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_coseno('2')">2</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_coseno('3')">3</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_coseno('4')">4</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_coseno('5')">5</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="ibox ui-resizable">
                                                <div class="ibox-content" id="tour1-2">
                                                    <div class="row animated fadeInUpBig" id="pract_desigualdades1">
                                                        <div class="col-md-7">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="col-lg-12">
                                                                    A continuación se te muestran 6 resultados de logaritmos diferentes, selecciona el que contenga la respuesta equivocada
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>log<sub>11</sub> 121 = 2</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe1" value="1" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe1"><b>Logaritmo 1</b></label>
                                                                        </div>
                                                                        <div id="False1P1" style="display: none;">
                                                                    <span class="badge badge-danger"><i
                                                                                class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>log<sub>13</sub> 169 = 2</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe2" value="2" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe2"><b>Logaritmo 2</b></label>
                                                                        </div>
                                                                        <div id="False2P1" style="display: none;">
                                                                    <span class="badge badge-danger"><i
                                                                                class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>log<sub>21</sub> 9260 = 3</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe3" value="3" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe3"><b>Logaritmo 3</b></label>
                                                                        </div>
                                                                        <div id="True3P1" style="display: none;">
                                                                    <span class="badge badge-primary"><i
                                                                                class="fa fa-thumbs-up"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>log<sub>1</sub> 1 = 2</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe4" value="4" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe4"><b>Logaritmo 4</b></label>
                                                                        </div>
                                                                        <div id="False4P1" style="display: none;">
                                                                    <span class="badge badge-danger"><i
                                                                                class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>log<sub>12</sub> 144 = 2</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe5" value="5" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe5"><b>Logaritmo 5</b></label>
                                                                        </div>
                                                                        <div id="False5P1" style="display: none;">
                                                                    <span class="badge badge-danger"><i
                                                                                class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>log<sub>15</sub> 15 = 1</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe6" value="6" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe6"><b>Logaritmo 6</b></label>
                                                                        </div>
                                                                        <div id="False6P1" style="display: none;">
                                                                    <span class="badge badge-danger"><i
                                                                                class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div id="CP1" class="col-lg-12 alert alert-warning">
                                                                    <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Práctica</b></i></font></center>
                                                                    <br><br>
                                                                    <div class="row" style="padding: 10px;">
                                                                        <p style="text-align: justify;">
                                                                            <font size="3">Desarrolla el ejercicio en tu cuaderno y selecciona la respuesta correcta. ¡OJO! si la respuesta que seleccionaste es la correcta
                                                                        se te mostrara el procedimiento con el cual se resuelve el ejercicio</font>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div id="EP1" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Primero identificaremos los elementos del logaritmo:
                                                                        <br><br>
                                                                        <b>base = 21</b>
                                                                        <br><br>
                                                                        <b>Exponente = 3</b>
                                                                        <br><br>
                                                                        Por lo tanto:
                                                                        <br><br>
                                                                        <b>21<sup>3</sup> = 9061</b>
                                                                        <br><br>
                                                                        Lo que es igual a:
                                                                        <br><br>
                                                                        <b>Log<sub>21</sub> 9061 = 3</b>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row animated fadeInUpBig" id="pract_desigualdades2" style="display: none;">
                                                        <div class="col-md-7">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="col-lg-12">
                                                                        A continuación se te muestran 6 resultados de logaritmos diferentes, selecciona el que contenga la respuesta equivocada
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>Log<sub>2</sub> 4 = 2</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe1" value="1"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe1"><b>Logaritmo 1</b></label>
                                                                        </div>
                                                                        <div id="False1P2" style="display: none;">
                                                                            &nbsp;&nbsp;
                                                                            <span class="badge badge-danger"><i
                                                                                        class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>Log<sub>2</sub> 8 = 3</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe2" value="2"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe2"><b>Logaritmo 2</b></label>
                                                                        </div>
                                                                        <div id="False2P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>Log<sub>26</sub> 17576 = 3</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe3" value="3"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe3"><b>Logaritmo 3</b></label>
                                                                        </div>
                                                                        <div id="False3P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>Log<sub>3</sub> 9 = 2</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe4" value="4"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe4"><b>Logaritmo 4</b></label>
                                                                        </div>
                                                                        <div id="False4P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>Log<sub>3</sub> 27 = 3</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe5" value="5"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe5"><b>Logaritmo 5</b></label>
                                                                        </div>
                                                                        <div id="False5P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>Log<sub>3</sub> 75 = 4</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe6" value="6"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe6"><b>Logaritmo 6</b></label>
                                                                        </div>
                                                                        <div id="True6P2" style="display: none;">
                                                                        <span class="badge badge-primary"><i
                                                                                    class="fa fa-thumbs-up"></i></span>
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
                                                                            <font size="3">Desarrolla el ejercicio en tu cuaderno y selecciona la respuesta correcta. ¡OJO! si la respuesta que seleccionaste es la correcta
                                                                                se te mostrara el procedimiento con el cual se resuelve el ejercicio</font>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div id="EP2" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Primero identificaremos los elementos del logaritmo:
                                                                        <br><br>
                                                                        <b>base = 3</b>
                                                                        <br><br>
                                                                        <b>Exponente = 4</b>
                                                                        <br><br>
                                                                        Por lo tanto:
                                                                        <br><br>
                                                                        <b>3<sup>4</sup> = 81</b>
                                                                        <br><br>
                                                                        Lo que es igual a:
                                                                        <br><br>
                                                                        <b>Log<sub>3</sub> 81 = 4</b>
                                                                    </p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="row animated fadeInUpBig" id="pract_desigualdades3" style="display: none;">
                                                    <div class="col-md-7">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="col-lg-12">
                                                                    A continuación se te muestran 6 resultados de logaritmos diferentes, selecciona el que contenga la respuesta equivocada
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <center>
                                                                    <br>
                                                                    <h3>Log<sub>9</sub> 81 = 2</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe1" value="1"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe1"><b>Logaritmo 1</b></label>
                                                                    </div>
                                                                    <div id="False1P3" style="display: none;">
                                                                        &nbsp;&nbsp;
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                                </center>
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <center>
                                                                    <br>
                                                                    <h3>Log<sub>8</sub> 80 = 2</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe2" value="2"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe2"><b>Logaritmo 2</b></label>
                                                                    </div>
                                                                    <div id="True2P3" style="display: none;">
                                                                        <span class="badge badge-primary"><i
                                                                                    class="fa fa-thumbs-up"></i></span>
                                                                    </div>
                                                                </center>
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <center>
                                                                    <br>
                                                                    <h3>Log<sub>7</sub> 49 = 2</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe3" value="3"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe3"><b>Logaritmo 3</b></label>
                                                                    </div>
                                                                    <div id="False3P3" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                                </center>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <center>
                                                                    <br>
                                                                    <h3>Log<sub>6</sub> 36 = 2</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe4" value="4"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe4"><b>Logaritmo 4</b></label>
                                                                    </div>
                                                                    <div id="False4P3" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                                </center>
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <center>
                                                                    <br>
                                                                    <h3>Log<sub>4</sub> 16 = 2</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe5" value="5"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe5"><b>Logaritmo 5</b></label>
                                                                    </div>
                                                                    <div id="False5P3" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                                </center>
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <center>
                                                                    <br>
                                                                    <h3>Log<sub>7</sub> 343 = 3</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe6" value="6"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe6"><b>Logaritmo 6</b></label>
                                                                    </div>
                                                                    <div id="False6P3" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
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
                                                                        <font size="3">Desarrolla el ejercicio en tu cuaderno y selecciona la respuesta correcta. ¡OJO! si la respuesta que seleccionaste es la correcta
                                                                            se te mostrara el procedimiento con el cual se resuelve el ejercicio</font>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div id="EP3" class="col-lg-12 alert alert-success" style="display: none;">
                                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                <br>
                                                                <p style="text-align: justify;">
                                                                    Primero identificaremos los elementos del logaritmo:
                                                                    <br><br>
                                                                    <b>base = 8</b>
                                                                    <br><br>
                                                                    <b>Exponente = 2</b>
                                                                    <br><br>
                                                                    Por lo tanto:
                                                                    <br><br>
                                                                    <b>8<sup>2</sup> = 64</b>
                                                                    <br><br>
                                                                    Lo que es igual a:
                                                                    <br><br>
                                                                    <b>Log<sub>8</sub> 64 = 2</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="row animated fadeInUpBig" id="pract_desigualdades4" style="display: none;">
                                                        <div class="col-md-7">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="col-lg-12">
                                                                        Cual es el resultado del exponente para el siguiente logaritmo: <b>Log<sub>2</sub> 64 = ?</b>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 6</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="4rpe1" value="1"
                                                                                   name="4rpe"
                                                                                   onclick="VerificarEvaluacion4P();">
                                                                            <label for="4rpe1"><b>Logaritmo 1</b></label>
                                                                        </div>
                                                                        <div id="True1P4" style="display: none;">
                                                                            &nbsp;&nbsp;
                                                                            <span class="badge badge-primary"><i
                                                                                        class="fa fa-thumbs-up"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 4</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="4rpe2" value="2"
                                                                                   name="4rpe"
                                                                                   onclick="VerificarEvaluacion4P();">
                                                                            <label for="4rpe2"><b>Logaritmo 2</b></label>
                                                                        </div>
                                                                        <div id="False2P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 8</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="4rpe3" value="3"
                                                                                   name="4rpe"
                                                                                   onclick="VerificarEvaluacion4P();">
                                                                            <label for="4rpe3"><b>Logaritmo 3</b></label>
                                                                        </div>
                                                                        <div id="False3P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 7</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="4rpe4" value="4"
                                                                                   name="4rpe"
                                                                                   onclick="VerificarEvaluacion4P();">
                                                                            <label for="4rpe4"><b>Logaritmo 4</b></label>
                                                                        </div>
                                                                        <div id="False4P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 9</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="4rpe5" value="5"
                                                                                   name="4rpe"
                                                                                   onclick="VerificarEvaluacion4P();">
                                                                            <label for="4rpe5"><b>Logaritmo 5</b></label>
                                                                        </div>
                                                                        <div id="False5P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 2</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="4rpe6" value="6"
                                                                                   name="4rpe"
                                                                                   onclick="VerificarEvaluacion4P();">
                                                                            <label for="4rpe6"><b>Logaritmo 6</b></label>
                                                                        </div>
                                                                        <div id="False6P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
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
                                                                            <font size="3">Desarrolla el ejercicio en tu cuaderno y selecciona la respuesta correcta. ¡OJO! si la respuesta que seleccionaste es la correcta
                                                                                se te mostrara el procedimiento con el cual se resuelve el ejercicio</font>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div id="EP4" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Primero identificaremos los elementos del logaritmo:
                                                                        <br><br>
                                                                        <b>base = 2</b>
                                                                        <br><br>
                                                                        <b>Número = 64</b>
                                                                        <br><br>
                                                                        <b>Exponente = x</b>
                                                                        <br><br>
                                                                        Por lo tanto:
                                                                        <br><br>
                                                                        <b>2<sup>x</sup> = 64</b>
                                                                        <br><br>
                                                                        Buscamos un exponente para 2 que nos de 64, es decir:
                                                                        <br><br>
                                                                        <b>2<sup>6</sup> = 64</b>
                                                                        <br><br>
                                                                        Por lo que:
                                                                        <br><br>
                                                                        <b>Log<sup>2</sup> 64 = 6</b>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row animated fadeInUpBig" id="pract_desigualdades5" style="display: none;">
                                                        <div class="col-md-7">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="col-lg-12">
                                                                        Encuentra la base para el siguiente logaritmo: <b>Log<sub>?</sub> 125 = 3</b>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 2</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="5rpe1" value="1"
                                                                                   name="5rpe"
                                                                                   onclick="VerificarEvaluacion5P();">
                                                                            <label for="5rpe1"><b>Base 1</b></label>
                                                                        </div>
                                                                        <div id="False1P5" style="display: none;">
                                                                            &nbsp;&nbsp;
                                                                            <span class="badge badge-danger"><i
                                                                                        class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 4</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="5rpe2" value="2"
                                                                                   name="5rpe"
                                                                                   onclick="VerificarEvaluacion5P();">
                                                                            <label for="5rpe2"><b>Base 2</b></label>
                                                                        </div>
                                                                        <div id="False2P5" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 1</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="5rpe3" value="3"
                                                                                   name="5rpe"
                                                                                   onclick="VerificarEvaluacion5P();">
                                                                            <label for="5rpe3"><b>Base 3</b></label>
                                                                        </div>
                                                                        <div id="False3P5" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 5</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="5rpe4" value="4"
                                                                                   name="5rpe"
                                                                                   onclick="VerificarEvaluacion5P();">
                                                                            <label for="5rpe4"><b>Base 4</b></label>
                                                                        </div>
                                                                        <div id="True4P5" style="display: none;">
                                                                        <span class="badge badge-success"><i
                                                                                    class="fa fa-thumbs-up"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 8</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="5rpe5" value="5"
                                                                                   name="5rpe"
                                                                                   onclick="VerificarEvaluacion5P();">
                                                                            <label for="5rpe5"><b>Base 5</b></label>
                                                                        </div>
                                                                        <div id="False5P5" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>x = 0</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="5rpe6" value="6"
                                                                                   name="5rpe"
                                                                                   onclick="VerificarEvaluacion5P();">
                                                                            <label for="5rpe6"><b>Base 6</b></label>
                                                                        </div>
                                                                        <div id="False6P5" style="display: none;">
                                                                        <span class="badge badge-danger"><i
                                                                                    class="fa fa-thumbs-down"></i></span>
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div id="CP5" class="col-lg-12 alert alert-warning">
                                                                    <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                                    <br><br>
                                                                    <div class="row" style="padding: 10px;">
                                                                        <p style="text-align: justify;">
                                                                            <font size="3">Desarrolla el ejercicio en tu cuaderno y selecciona la respuesta correcta. ¡OJO! si la respuesta que seleccionaste es la correcta
                                                                                se te mostrara el procedimiento con el cual se resuelve el ejercicio</font>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div id="EP5" class="col-lg-12 alert alert-success" style="display: none;">
                                                                    <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                                    <br>
                                                                    <p style="text-align: justify;">
                                                                        Primero identificaremos los elementos del logaritmo:
                                                                        <br><br>
                                                                        <b>Base = x</b>
                                                                        <br><br>
                                                                        <b>Número = 125</b>
                                                                        <br><br>
                                                                        <b>Exponente = 3</b>
                                                                        <br><br>
                                                                        Por lo tanto:
                                                                        <br><br>
                                                                        <b>x<sup>3</sup> = 125</b>
                                                                        <br><br>
                                                                        Buscamos un número que elevado 3 nos de 125, es decir:
                                                                        <br><br>
                                                                        <b>5<sup>3</sup> = 125</b>
                                                                        <br><br>
                                                                        Lo que es igual a:
                                                                        <br><br>
                                                                        <b>Log<sub>5</sub> 125 = 3</b>
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
                    </div>
                    <!--<div class="panel panel-default">
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
                                            <!--lado
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
                                            <!--angulo
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
                                                </button>
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
                    </div>-->
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
   /* function verificaPractica1(){
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
    }*/

    function VerificarEvaluacion1P() {
        if ($('input:radio[name=1rpe]:checked').val() == 1) {
            $("#False2P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#True3P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#False5P1").fadeOut(0);
            $("#False1P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta equivocada', 'Lo Siento');
            $("#EP1").fadeOut(0);
            $("#CP1").fadeIn(300);
        } else {
            $("#False1P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 2) {
            $("#False1P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#True3P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#False5P1").fadeOut(0);
            $("#False2P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP1").fadeOut(0);
            $("#CP1").fadeIn(300);
        } else {
            $("#False2P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 3) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#False5P1").fadeOut(0);
            $("#True3P1").fadeIn(300);
            toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
            $("#CP1").fadeOut(0);
            $("#EP1").fadeIn(300);
        } else {
            $("#True3P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 4) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#True3P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#False5P1").fadeOut(0);
            $("#False4P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP1").fadeOut(0);
            $("#CP1").fadeIn(300);
        } else {
            $("#False4P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 5) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#True3P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#False5P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP1").fadeOut(0);
            $("#CP1").fadeIn(300);
        } else {
            $("#False5P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 6) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#True3P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#False5P1").fadeOut(0);
            $("#False6P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP1").fadeOut(0);
            $("#CP1").fadeIn(300);
        } else {
            $("#False6P1").fadeOut(0);
        }
    }
    function VerificarEvaluacion2P() {
        if ($('input:radio[name=2rpe]:checked').val() == 1) {
            $("#False2P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#True6P2").fadeOut(0);
            $("#False3P2").fadeOut(0);
            $("#False1P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP2").fadeOut(0);
            $("#CP2").fadeIn(300);
        } else {
            $("#False1P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 2) {
            $("#False1P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#True6P2").fadeOut(0);
            $("#True3P2").fadeOut(0);
            $("#False2P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP2").fadeOut(0);
            $("#CP2").fadeIn(300);
        } else {
            $("#False2P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 3) {
            $("#False1P2").fadeOut(0);
            $("#False2P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#True6P2").fadeOut(0);
            $("#False3P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP2").fadeOut(0);
            $("#CP2").fadeIn(300);
        } else {
            $("#False3P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 4) {
            $("#False1P2").fadeOut(0);
            $("#False2P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#True6P2").fadeOut(0);
            $("#False3P2").fadeOut(0);
            $("#False4P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP2").fadeOut(0);
            $("#CP2").fadeIn(300);
        } else {
            $("#False4P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 5) {
            $("#False1P2").fadeOut(0);
            $("#False2P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#True6P2").fadeOut(0);
            $("#False3P2").fadeOut(0);
            $("#False5P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP2").fadeOut(0);
            $("#CP2").fadeIn(300);
        } else {
            $("#False5P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 6) {
            $("#False1P2").fadeOut(0);
            $("#False2P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#False3P2").fadeOut(0);
            $("#True6P2").fadeIn(300);
            toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
            $("#CP2").fadeOut(0);
            $("#EP2").fadeIn(300);
        } else {
            $("#True6P2").fadeOut(0);
        }
    }
    function VerificarEvaluacion3P() {
        if ($('input:radio[name=3rpe]:checked').val() == 1) {
            $("#True2P3").fadeOut(0);
            $("#False3P3").fadeOut(0);
            $("#False4P3").fadeOut(0);
            $("#False5P3").fadeOut(0);
            $("#False6P3").fadeOut(0);
            $("#False1P3").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP3").fadeOut(0);
            $("#CP3").fadeIn(300);
        } else {
            $("#False1P3").fadeOut(0);
        }
        if ($('input:radio[name=3rpe]:checked').val() == 2) {
            $("#False3P3").fadeOut(0);
            $("#False4P3").fadeOut(0);
            $("#False5P3").fadeOut(0);
            $("#False6P3").fadeOut(0);
            $("#False1P3").fadeOut(0);
            $("#True2P3").fadeIn(300);
            toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
            $("#CP3").fadeOut(0);
            $("#EP3").fadeIn(300);
        } else {
            $("#True2P3").fadeOut(0);
        }
        if ($('input:radio[name=3rpe]:checked').val() == 3) {
            $("#True2P3").fadeOut(0);
            $("#False4P3").fadeOut(0);
            $("#False5P3").fadeOut(0);
            $("#False6P3").fadeOut(0);
            $("#False1P3").fadeOut(0);
            $("#False3P3").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP3").fadeOut(0);
            $("#CP3").fadeIn(300);
        } else {
            $("#False3P3").fadeOut(0);
        }
        if ($('input:radio[name=3rpe]:checked').val() == 4) {
            $("#True2P3").fadeOut(0);
            $("#False3P3").fadeOut(0);
            $("#False5P3").fadeOut(0);
            $("#False6P3").fadeOut(0);
            $("#False1P3").fadeOut(0);
            $("#False4P3").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP3").fadeOut(0);
            $("#CP3").fadeIn(300);
        } else {
            $("#False4P3").fadeOut(0);
        }
        if ($('input:radio[name=3rpe]:checked').val() == 5) {
            $("#True2P3").fadeOut(0);
            $("#False3P3").fadeOut(0);
            $("#False4P3").fadeOut(0);
            $("#False6P3").fadeOut(0);
            $("#False1P3").fadeOut(0);
            $("#False5P3").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP3").fadeOut(0);
            $("#CP3").fadeIn(300);
        } else {
            $("#False5P3").fadeOut(0);
        }
        if ($('input:radio[name=3rpe]:checked').val() == 6) {
            $("#True2P3").fadeOut(0);
            $("#False3P3").fadeOut(0);
            $("#False4P3").fadeOut(0);
            $("#False5P3").fadeOut(0);
            $("#False1P3").fadeOut(0);
            $("#False6P3").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP3").fadeOut(0);
            $("#CP3").fadeIn(300);
        } else {
            $("#False6P3").fadeOut(0);
        }
    }
    function VerificarEvaluacion4P() {
        if ($('input:radio[name=4rpe]:checked').val() == 1) {
            $("#False2P4").fadeOut(0);
            $("#False3P4").fadeOut(0);
            $("#False4P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#True1P4").fadeIn(300);
            toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
            $("#CP4").fadeOut(0);
            $("#EP4").fadeIn(300);
        } else {
            $("#True1P3").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 2) {
            $("#False3P4").fadeOut(0);
            $("#False4P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#True1P4").fadeOut(0);
            $("#False2P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo siento');
            $("#EP4").fadeOut(0);
            $("#CP4").fadeIn(300);
        } else {
            $("#False2P4").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 3) {
            $("#False2P4").fadeOut(0);
            $("#False4P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#True1P4").fadeOut(0);
            $("#False3P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP4").fadeOut(0);
            $("#CP4").fadeIn(300);
        } else {
            $("#False3P4").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 4) {
            $("#False2P4").fadeOut(0);
            $("#False3P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#True1P4").fadeOut(0);
            $("#False4P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP4").fadeOut(0);
            $("#CP4").fadeIn(300);
        } else {
            $("#False4P4").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 5) {
            $("#False2P4").fadeOut(0);
            $("#False3P4").fadeOut(0);
            $("#False4P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#True1P4").fadeOut(0);
            $("#False5P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP4").fadeOut(0);
            $("#CP4").fadeIn(300);
        } else {
            $("#False5P4").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 6) {
            $("#False2P4").fadeOut(0);
            $("#False3P4").fadeOut(0);
            $("#False4P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#True1P4").fadeOut(0);
            $("#False6P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP4").fadeOut(0);
            $("#CP4").fadeIn(300);
        } else {
            $("#False6P4").fadeOut(0);
        }
    }
    function VerificarEvaluacion5P() {
        if ($('input:radio[name=5rpe]:checked').val() == 1) {
            $("#False2P5").fadeOut(0);
            $("#False3P5").fadeOut(0);
            $("#True4P5").fadeOut(0);
            $("#False5P5").fadeOut(0);
            $("#False6P5").fadeOut(0);
            $("#False1P5").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP5").fadeOut(0);
            $("#CP5").fadeIn(300);
        } else {
            $("#False1P5").fadeOut(0);
        }
        if ($('input:radio[name=5rpe]:checked').val() == 2) {
            $("#False3P5").fadeOut(0);
            $("#True4P5").fadeOut(0);
            $("#False5P5").fadeOut(0);
            $("#False6P5").fadeOut(0);
            $("#False1P5").fadeOut(0);
            $("#False2P5").fadeIn(300);
            toastr.success('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP5").fadeOut(0);
            $("#CP5").fadeIn(300);
        } else {
            $("#False2P5").fadeOut(0);
        }
        if ($('input:radio[name=5rpe]:checked').val() == 3) {
            $("#False2P5").fadeOut(0);
            $("#True4P5").fadeOut(0);
            $("#False5P5").fadeOut(0);
            $("#False6P5").fadeOut(0);
            $("#False1P5").fadeOut(0);
            $("#False3P5").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP5").fadeOut(0);
            $("#CP5").fadeIn(300);
        } else {
            $("#False3P5").fadeOut(0);
        }
        if ($('input:radio[name=5rpe]:checked').val() == 4) {
            $("#False2P5").fadeOut(0);
            $("#False3P5").fadeOut(0);
            $("#False5P5").fadeOut(0);
            $("#False6P5").fadeOut(0);
            $("#False1P5").fadeOut(0);
            $("#True4P5").fadeIn(300);
            toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
            $("#CP5").fadeOut(0);
            $("#EP5").fadeIn(300);
        } else {
            $("#True4P5").fadeOut(0);
        }
        if ($('input:radio[name=5rpe]:checked').val() == 5) {
            $("#False2P5").fadeOut(0);
            $("#False3P5").fadeOut(0);
            $("#True4P5").fadeOut(0);
            $("#False6P5").fadeOut(0);
            $("#False1P5").fadeOut(0);
            $("#False5P5").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP5").fadeOut(0);
            $("#CP5").fadeIn(300);
        } else {
            $("#False5P5").fadeOut(0);
        }
        if ($('input:radio[name=5rpe]:checked').val() == 6) {
            $("#False2P5").fadeOut(0);
            $("#False3P5").fadeOut(0);
            $("#True4P5").fadeOut(0);
            $("#False5P5").fadeOut(0);
            $("#False1P5").fadeOut(0);
            $("#False6P5").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP5").fadeOut(0);
            $("#CP5").fadeIn(300);
        } else {
            $("#False6P5").fadeOut(0);
        }
    }
    function practicas_coseno(op){
        switch (op){
            case '1':{
                $('#pract_desigualdades1').show();
                $('#pract_desigualdades2').hide();
                $('#pract_desigualdades3').hide();
                $('#pract_desigualdades4').hide();
                $('#pract_desigualdades5').hide();
            }break;
            case '2':{
                $('#pract_desigualdades1').hide();
                $('#pract_desigualdades2').show();
                $('#pract_desigualdades3').hide();
                $('#pract_desigualdades4').hide();
                $('#pract_desigualdades5').hide();
            }break;
            case '3':{
                $('#pract_desigualdades1').hide();
                $('#pract_desigualdades2').hide();
                $('#pract_desigualdades3').show();
                $('#pract_desigualdades4').hide();
                $('#pract_desigualdades5').hide();
            }break;
            case '4':{
                $('#pract_desigualdades1').hide();
                $('#pract_desigualdades2').hide();
                $('#pract_desigualdades3').hide();
                $('#pract_desigualdades4').show();
                $('#pract_desigualdades5').hide();
            }break;
            case '5':{
                $('#pract_desigualdades1').hide();
                $('#pract_desigualdades2').hide();
                $('#pract_desigualdades3').hide();
                $('#pract_desigualdades4').hide();
                $('#pract_desigualdades5').show();
            }break;
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
        if((ladoA=="" && ladoB=="") || (ladoA=="" && ladoC=="") || (ladoB=="" && ladoC=="")){
            $("#DLA").fadeOut(0);
            $("#DLB").fadeOut(0);
            $("#DLC").fadeOut(0);
            toastr.error('Debes ingresar valores para dos lados', 'Lo Siento');
        }else{
            if(anguloA!="" || anguloB!="" || anguloC!=""){
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
                toastr.error('Debes ingresar al menos valor para un ángulo', 'Lo Siento');
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
        /*if(anguloA=="" && anguloB=="" && anguloC==""){
            toastr.error('Debes ingresar al menos valor para un ángulo', 'Lo Siento');
        }
        else{
            if((ladoA!="" && ladoB!="") || (ladoA!="" && ladoC!="") || (ladoB!="" && ladoC!="")){*/
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
           /* }
            else{
                toastr.error('Debes ingresar al menos valor para 2 lados', 'Lo Siento');
            }
        }*/
    }

    function BuscarLado(opc){
        var ladoA=document.getElementById("ladoA").value;
        var ladoB=document.getElementById("ladoB").value;
        var ladoC=document.getElementById("ladoC").value;
        var anguloA=document.getElementById("anguloA").value;
        var anguloB=document.getElementById("anguloB").value;
        var anguloC=document.getElementById("anguloC").value;
        $("#Resultado").fadeOut(0);
        switch(opc)
        {
            case 1:{
                //lado a
                $("#solucion").html("<center>Primero debemos identificar si conocemos el ángulo respecto al lado A, es decir α<br><br></center>");
                if(anguloA==""){
                    if(anguloB!="" && anguloC!=""){
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
                        toastr.error("Debes agregar al menos dos ángulos si desconoces el valor del angulo α");
                        break;
                    }
                }
                else{
                    anguloA = parseFloat(anguloA);
                    $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para α<br><br>" +
                        "<font size='3'><b>Ángulo α  = "+anguloA+"</b></font>" +
                        "<br><br>" +
                        "</center>");
                }
                $("#solucion").append("<center>Ya que deseamos conocer el lado A, utilizaremos la siguiente fórmula<br><br>" +
                    "<font size='3'><b>a<sup>2</sup> = b<sup>2</sup> + c<sup>2</sup> - 2 * b * c * cos(α) </b></font>" +
                    "<br><br>" +
                    "Sustituimos los valores que ya conocemos en la fórmula"+
                    "<br><br>" +
                    "<font size='3'><b>a<sup>2</sup> = "+ladoB+"<sup>2</sup> + "+ladoC+"<sup>2</sup> - 2 * "+ladoB+" * "+ladoC+" * cos("+anguloA+") </b></font>" +
                    "<br><br>" +
                    "</center>");
                var b2=Math.pow(parseFloat(ladoB),2);
                b2=b2.toFixed(2);
                var c2=Math.pow(parseFloat(ladoC),2);
                c2=c2.toFixed(2);
                var sumaLados = parseFloat(b2) + parseFloat(c2);
                var multi = 2 * parseFloat(ladoB) * parseFloat(ladoC);
                multi = multi.toFixed(2);
                var cosA = Math.cos(toDegrees(anguloA));
                cosA = cosA.toFixed(2);
                var multiCos = multi * cosA;
                multiCos=multiCos.toFixed(2);
                var resta=sumaLados - multiCos;
                $("#solucion").append("<center>Operamos los valores<br><br>" +
                    "<font size='3'><b>a<sup>2</sup> = "+b2+" + "+c2+" - "+multi+" * "+cosA+" </b></font>" +
                    "<br><br>" +
                    "<font size='3'><b>a<sup>2</sup> = "+sumaLados+" - "+multiCos+" </b></font>" +
                    "<br><br>" +
                    "<font size='3'><b>a<sup>2</sup> = "+resta+" </b></font>" +
                    "<br><br>" +
                    "</center>");
                var raiz = Math.sqrt(resta);
                raiz=raiz.toFixed(2);
                $("#solucion").append("<center>Despejamos a y efectuamos la raíz<br><br>" +
                    "<font size='3'><b>a = √ "+resta+" </b></font>" +
                    "<br><br>" +
                    "<font size='3'><b>a = "+raiz+"</b></font>" +
                    "<br><br>" +
                    "Por lo tanto el lado A equivale a <b>"+raiz+"</b>" +
                    "</center>");
                $("#Resultado").fadeIn(300);
            }break;
            case 2:{
                //lado b
                $("#solucion").html("<center>Primero debemos identificar si conocemos el ángulo respecto al lado B, es decir β<br><br></center>");
                if(anguloB==""){
                    if(anguloA!="" && anguloC!=""){
                        console.log(anguloA,anguloC);
                        anguloB = 180 - parseFloat(anguloA) - parseFloat(anguloC);
                        $("#solucion").append("<center>Para este caso, como desconocemos el ángulo β, lo obtenemos restando los demás ángulos a 180<br><br>" +
                            "<font size='3'>Ángulo β  = 180 - "+anguloA+" - "+anguloC+"</font>" +
                            "<br><br>" +
                            "<font size='3'><b>Ángulo β  = "+anguloB+"</b></font>" +
                            "<br><br>" +
                            "</center>");
                    }else{
                        toastr.error("Debes agregar al menos dos ángulos si desconoces el valor del angulo β");
                        break;
                    }
                }
                else{
                    anguloB = parseFloat(anguloB);
                    $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para β<br><br>" +
                        "<font size='3'><b>Ángulo β  = "+anguloB+"</b></font>" +
                        "<br><br>" +
                        "</center>");
                }
                $("#solucion").append("<center>Ya que deseamos conocer el lado B, utilizaremos la siguiente fórmula<br><br>" +
                    "<font size='3'><b>b<sup>2</sup> = a<sup>2</sup> + c<sup>2</sup> - 2 * a * c * cos(β) </b></font>" +
                    "<br><br>" +
                    "Sustituimos los valores que ya conocemos en la fórmula"+
                    "<br><br>" +
                    "<font size='3'><b>b<sup>2</sup> = "+ladoA+"<sup>2</sup> + "+ladoC+"<sup>2</sup> - 2 * "+ladoA+" * "+ladoC+" * cos("+anguloB+") </b></font>" +
                    "<br><br>" +
                    "</center>");
                var a2=Math.pow(parseFloat(ladoA),2);
                a2=a2.toFixed(2);
                var c2=Math.pow(parseFloat(ladoC),2);
                c2=c2.toFixed(2);
                var sumaLados = parseFloat(a2) + parseFloat(c2);
                var multi = 2 * parseFloat(ladoA) * parseFloat(ladoC);
                multi = multi.toFixed(2);
                var cosB = Math.cos(toDegrees(anguloB));
                cosB = cosB.toFixed(2);
                var multiCos = multi * cosB;
                multiCos=multiCos.toFixed(2);
                var resta=sumaLados - multiCos;
                $("#solucion").append("<center>Operamos los valores<br><br>" +
                    "<font size='3'><b>b<sup>2</sup> = "+a2+" + "+c2+" - "+multi+" * "+cosB+" </b></font>" +
                    "<br><br>" +
                    "<font size='3'><b>b<sup>2</sup> = "+sumaLados+" - "+multiCos+" </b></font>" +
                    "<br><br>" +
                    "<font size='3'><b>b<sup>2</sup> = "+resta+" </b></font>" +
                    "<br><br>" +
                    "</center>");
                var raiz = Math.sqrt(resta);
                raiz=raiz.toFixed(2);
                $("#solucion").append("<center>Despejamos a y efectuamos la raíz<br><br>" +
                    "<font size='3'><b>b = √ "+resta+" </b></font>" +
                    "<br><br>" +
                    "<font size='3'><b>b = "+raiz+"</b></font>" +
                    "<br><br>" +
                    "Por lo tanto el lado B equivale a <b>"+raiz+"</b>" +
                    "</center>");
                $("#Resultado").fadeIn(300);
            }break;
            case 3:{
                //lado c
                $("#solucion").html("<center>Primero debemos identificar si conocemos el ángulo respecto al lado C, es decir γ<br><br></center>");
                if(anguloC==""){
                    if(anguloA!="" && anguloB!=""){
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
                        toastr.error("Debes agregar al menos dos ángulos si desconoces el valor del angulo γ");
                        break;
                    }
                }
                else{
                    anguloC = parseFloat(anguloC);
                    $("#solucion").append("<center>Para este caso,ya conocemos el ángulo para γ<br><br>" +
                        "<font size='3'><b>Ángulo γ = "+anguloC+"</b></font>" +
                        "<br><br>" +
                        "</center>");
                }
                $("#solucion").append("<center>Ya que deseamos conocer el lado C, utilizaremos la siguiente fórmula<br><br>" +
                    "<font size='3'><b>c<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> - 2 * b * c * cos(γ) </b></font>" +
                    "<br><br>" +
                    "Sustituimos los valores que ya conocemos en la fórmula"+
                    "<br><br>" +
                    "<font size='3'><b>c<sup>2</sup> = "+ladoA+"<sup>2</sup> + "+ladoB+"<sup>2</sup> - 2 * "+ladoA+" * "+ladoB+" * cos("+anguloC+") </b></font>" +
                    "<br><br>" +
                    "</center>");
                var a2=Math.pow(parseFloat(ladoA),2);
                a2=a2.toFixed(2);
                var b2=Math.pow(parseFloat(ladoB),2);
                b2=b2.toFixed(2);
                var sumaLados = parseFloat(a2) + parseFloat(b2);
                var multi = 2 * parseFloat(ladoA) * parseFloat(ladoB);
                multi = multi.toFixed(2);
                var cosC = Math.cos(toDegrees(anguloC));
                cosC = cosC.toFixed(2);
                var multiCos = multi * cosC;
                multiCos=multiCos.toFixed(2);
                var resta=sumaLados - multiCos;
                $("#solucion").append("<center>Operamos los valores<br><br>" +
                    "<font size='3'><b>c<sup>2</sup> = "+a2+" + "+b2+" - "+multi+" * "+cosC+" </b></font>" +
                    "<br><br>" +
                    "<font size='3'><b>c<sup>2</sup> = "+sumaLados+" - "+multiCos+" </b></font>" +
                    "<br><br>" +
                    "<font size='3'><b>c<sup>2</sup> = "+resta+" </b></font>" +
                    "<br><br>" +
                    "</center>");
                var raiz = Math.sqrt(resta);
                raiz=raiz.toFixed(2);
                $("#solucion").append("<center>Despejamos a y efectuamos la raíz<br><br>" +
                    "<font size='3'><b>c = √ "+resta+" </b></font>" +
                    "<br><br>" +
                    "<font size='3'><b>c = "+raiz+"</b></font>" +
                    "<br><br>" +
                    "Por lo tanto el lado C equivale a <b>"+raiz+"</b>" +
                    "</center>");
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
        $("#Resultado").fadeOut(0);
        switch(opc){
            case 1:{
                //Angulo A
                if(ladoA=="" || ladoB=="" || ladoC==""){
                    toastr.error('Debes ingresar valores para los 3 lados', 'Lo Siento');
                    document.getElementById("AA").checked = false;
                }else{
                    $("#solucion").append("<center>Ya que deseamos conocer el ángulo α, utilizaremos la siguiente fórmula<br><br>" +
                        "<font size='3'><b>a<sup>2</sup> = b<sup>2</sup> + c<sup>2</sup> - 2 * b * c * cos(α) </b></font>" +
                        "<br><br>" +
                        "Sustituimos los valores que ya conocemos en la fórmula"+
                        "<br><br>" +
                        "<font size='3'><b>"+ladoA+"<sup>2</sup> = "+ladoB+"<sup>2</sup> + "+ladoC+"<sup>2</sup> - 2 * "+ladoB+" * "+ladoC+" * cos(α) </b></font>" +
                        "<br><br>" +
                        "</center>");
                    var a2=Math.pow(parseFloat(ladoA),2);
                    a2=a2.toFixed(2);
                    var b2=Math.pow(parseFloat(ladoB),2);
                    b2=b2.toFixed(2);
                    var c2=Math.pow(parseFloat(ladoC),2);
                    c2=c2.toFixed(2);
                    var restaLados = parseFloat(a2) - parseFloat(b2) - parseFloat(c2);

                    var multi = 2 * parseFloat(ladoB) * parseFloat(ladoC);
                    multi = multi.toFixed(2);
                    multi = multi * -1;
                    $("#solucion").append("<center>Operamos los valores<br><br>" +
                        "<font size='3'><b>"+a2+" = "+b2+" + "+c2+"  "+multi+" * cos(α) </b></font>" +
                        "<br><br>" +
                        "Despejamos cos(α)"+
                        "<br><br>" +
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                            "<tr>"+
                                "<td rowspan='2'><b>α = arccos (&nbsp;&nbsp;</b></td>"+
                                "<td style='border-bottom: 1px solid forestgreen'><b>"+restaLados+"</b></td>"+
                                "<td rowspan='2'><b>&nbsp;&nbsp;)</b></td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td><b>"+multi+"</b></td>"+
                            "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br>"+
                        "</center>");
                    var division=parseFloat(restaLados) / parseFloat(multi);
                    division=division.toFixed(2);
                    var arccos= Math.acos(division);
                    arccos = arccos * (180 / Math.PI);
                    arccos=arccos.toFixed(2);
                    $("#solucion").append("<center>Realizamos la división<br><br>" +
                        "<font size='3'><b>α = arccos( "+division+" ) </b></font>" +
                        "<br><br>" +
                        "<font size='3'><b>α = "+arccos+"</b></font>" +
                        "<br><br>" +
                        "Por lo tanto el ángulo α equivale a <b>"+arccos+"</b>" +
                        "</center>");
                }
                $("#Resultado").fadeIn(300);
            }break;
            case 2:{
                //Angulo B
                if(ladoA=="" || ladoB=="" || ladoC==""){
                    toastr.error('Debes ingresar valores para los 3 lados', 'Lo Siento');
                    document.getElementById("AA").checked = false;
                }else{
                    $("#solucion").append("<center>Ya que deseamos conocer el ángulo β, utilizaremos la siguiente fórmula<br><br>" +
                        "<font size='3'><b>b<sup>2</sup> = a<sup>2</sup> + c<sup>2</sup> - 2 * a * c * cos(β) </b></font>" +
                        "<br><br>" +
                        "Sustituimos los valores que ya conocemos en la fórmula"+
                        "<br><br>" +
                        "<font size='3'><b>"+ladoB+"<sup>2</sup> = "+ladoA+"<sup>2</sup> + "+ladoC+"<sup>2</sup> - 2 * "+ladoA+" * "+ladoC+" * cos(β) </b></font>" +
                        "<br><br>" +
                        "</center>");
                    var a2=Math.pow(parseFloat(ladoA),2);
                    a2=a2.toFixed(2);
                    var b2=Math.pow(parseFloat(ladoB),2);
                    b2=b2.toFixed(2);
                    var c2=Math.pow(parseFloat(ladoC),2);
                    c2=c2.toFixed(2);
                    var restaLados = parseFloat(b2) - parseFloat(a2) - parseFloat(c2);

                    var multi = 2 * parseFloat(ladoA) * parseFloat(ladoC);
                    multi = multi.toFixed(2);
                    multi = multi * -1;
                    $("#solucion").append("<center>Operamos los valores<br><br>" +
                        "<font size='3'><b>"+b2+" = "+a2+" + "+c2+"  "+multi+" * cos(β) </b></font>" +
                        "<br><br>" +
                        "Despejamos cos(β)"+
                        "<br><br>" +
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>α = arccos (&nbsp;&nbsp;</b></td>"+
                        "<td style='border-bottom: 1px solid forestgreen'><b>"+restaLados+"</b></td>"+
                        "<td rowspan='2'><b>&nbsp;&nbsp;)</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+multi+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br>"+
                        "</center>");
                    var division=parseFloat(restaLados) / parseFloat(multi);
                    division=division.toFixed(2);
                    var arccos= Math.acos(division);
                    arccos = arccos * (180 / Math.PI);
                    arccos=arccos.toFixed(2);
                    $("#solucion").append("<center>Realizamos la división<br><br>" +
                        "<font size='3'><b>β = arccos( "+division+" ) </b></font>" +
                        "<br><br>" +
                        "<font size='3'><b>β = "+arccos+"</b></font>" +
                        "<br><br>" +
                        "Por lo tanto el ángulo β equivale a <b>"+arccos+"</b>" +
                        "</center>");
                }
                $("#Resultado").fadeOut(0);
            }break;
            case 3:{
                //Angulo C
                if(ladoA=="" || ladoB=="" || ladoC==""){
                    toastr.error('Debes ingresar valores para los 3 lados', 'Lo Siento');
                    document.getElementById("AA").checked = false;
                }else{
                    $("#solucion").append("<center>Ya que deseamos conocer el ángulo γ, utilizaremos la siguiente fórmula<br><br>" +
                        "<font size='3'><b>c<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> - 2 * a * b * cos(α) </b></font>" +
                        "<br><br>" +
                        "Sustituimos los valores que ya conocemos en la fórmula"+
                        "<br><br>" +
                        "<font size='3'><b>"+ladoC+"<sup>2</sup> = "+ladoA+"<sup>2</sup> + "+ladoB+"<sup>2</sup> - 2 * "+ladoA+" * "+ladoB+" * cos(γ) </b></font>" +
                        "<br><br>" +
                        "</center>");
                    var a2=Math.pow(parseFloat(ladoA),2);
                    a2=a2.toFixed(2);
                    var b2=Math.pow(parseFloat(ladoB),2);
                    b2=b2.toFixed(2);
                    var c2=Math.pow(parseFloat(ladoC),2);
                    c2=c2.toFixed(2);
                    var restaLados = parseFloat(c2) - parseFloat(a2) - parseFloat(b2);

                    var multi = 2 * parseFloat(ladoA) * parseFloat(ladoB);
                    multi = multi.toFixed(2);
                    multi = multi * -1;
                    $("#solucion").append("<center>Operamos los valores<br><br>" +
                        "<font size='3'><b>"+c2+" = "+a2+" + "+b2+"  "+multi+" * cos(γ) </b></font>" +
                        "<br><br>" +
                        "Despejamos cos(γ)"+
                        "<br><br>" +
                        "<font size='3'>" +
                        "<table border='0' style='text-align: center;'>"+
                        "<tr>"+
                        "<td rowspan='2'><b>γ = arccos (&nbsp;&nbsp;</b></td>"+
                        "<td style='border-bottom: 1px solid forestgreen'><b>"+restaLados+"</b></td>"+
                        "<td rowspan='2'><b>&nbsp;&nbsp;)</b></td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td><b>"+multi+"</b></td>"+
                        "</tr>"+
                        "</table>"+
                        "</font>" +
                        "<br>"+
                        "</center>");
                    var division=parseFloat(restaLados) / parseFloat(multi);
                    division=division.toFixed(2);
                    var arccos= Math.acos(division);
                    arccos = arccos * (180 / Math.PI);
                    arccos=arccos.toFixed(2);
                    $("#solucion").append("<center>Realizamos la división<br><br>" +
                        "<font size='3'><b>γ = arccos( "+division+" ) </b></font>" +
                        "<br><br>" +
                        "<font size='3'><b>γ = "+arccos+"</b></font>" +
                        "<br><br>" +
                        "Por lo tanto el ángulo γ equivale a <b>"+arccos+"</b>" +
                        "</center>");
                }
                $("#Resultado").fadeIn(300);
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
                content: "Presiona cualquiera de los siguientes números para mostrar un ejemplo de logaritmos",
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
                    content: "Visualisa la información que se te presenta en el ejercicio, resuelvelo en base a lo aprendido la sección de \"Teoría\", selecciona la respuesta que consideras es la correcta según el enunciado que se te plantea",
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