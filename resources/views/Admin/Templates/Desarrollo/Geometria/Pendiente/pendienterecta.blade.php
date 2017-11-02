<!--PENDIENTE DE UNA RECTA-->
<div class="ibox float-e-margins animated fadeInUpBig">
    <div class="ibox-title">
        <h5>Pendiente de una recta</h5>
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
                                <!--Area de trabajo -->
                                <div class="col-lg-8">
                                    <p style="text-align: justify;">
                                        Se le llama pendiente de una recta, a la tangente de su ángulo de inclinación. Es decir: 
                                        <br><br>
                                        <b>Pendiente = tangente de θ</b>
                                        <br><br>
                                        <b>Se denota: m = tan θ</b>
                                        <br><br>
                                        Veamos un ejemplo, calculemos la pendiente de la siguiente recta:
                                        <div class="well">
                                            <div class="row diff-wrapper">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    <table border="0">
                                                        <tr>
                                                            <td><img width="200" height="200" src="{{asset('img/iconos/geometria/analitica/pendiente/teoria1.png')}}"/></td>
                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                            <td>
                                                                <p style="text-align: justify;">
                                                                    Como conocemos el ángulo para la recta trazada,  la pendiente solamente la encontramos conociendo la tangente del ángulo, para ello usa tu calculadora científica y  obten la tangente de su ángulo de inclinación. Es decir:
                                                                    <br><br>
                                                                    <b>m = tan 60º = 1.73</b>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        Ahora bien, para el caso que no conozcamos el ángulo de inclinación de la recta, y lo que si conocemos son los puntos de la recta, debemos hacer lo siguiente para conocer la pendiente, para ello vamos a calcular la pendiente de la recta que pasa por los puntos <b>A( – 2, – 3)</b> y <b>B(3, 1)</b>
                                        <br><br>   
                                        <div class="well">
                                            <div class="row diff-wrapper">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table border="0">
                                                            <tr>
                                                                <td><img width="200" height="200" src="{{asset('img/iconos/geometria/analitica/pendiente/teoria2.png')}}"/></td>
                                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                <td>
                                                                    <p style="text-align: justify;">
                                                                        Para conocer la pendiente de la recta, debemos de saber que la tangente del ángulo θ es igual al cateto opuesto entre el cateto adyacente, es decir: 
                                                                        <br><br>
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">tan θ = </td>
                                                                                <td style="border-bottom: 1px black solid;">cateto opuesto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>cateto adyacente</td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        Fíjate que el cateto opuesto es la línea punteada vertical.
                                                                        <br><br>
                                                                        Es decir: Cateto opuesto = 1 – ( – 3) = 4.
                                                                        <br><br>
                                                                        El cateto adyacente es la línea punteada horizontal.
                                                                        <br><br>
                                                                        Cateto adyacente = 3 – ( – 2) = 5.
                                                                        <br><br>
                                                                        Por lo tanto la tangente de θ = <sup>4</sup>/<sub>5</sub>
                                                                        <br><br>
                                                                        Lo que es igual a <b>0.80</b>, siendo la pendiente de la recta: <b>m = 0.80</b>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </p>
                                    <br>
                                </div>
                                <!--Area de consejos -->
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                </div>
                                                <div class="panel-body">
                                                    <p style="text-align: justify;">
                                                       <table border="0" >
                                                            <tr>
                                                                <td><center><img width="200" height="200" src="{{asset('img/iconos/geometria/analitica/pendiente/ayuda.png')}}"/></center></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    &nbsp;
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p style="text-align: justify;">
                                                                        En general, si <b>P1(X<sub>1</sub>, Y<sub>1</sub>)</b> y <b>P2(X<sub>2</sub>, Y<sub>2</sub>)</b> son dos puntos de una recta, su pendiente <b>m</b> se calcula mediante la siguiente expresión: 
                                                                        <br><br>
                                                                        m = tan θ
                                                                        <br><br>
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">tan θ = </td>
                                                                                <td style="border-bottom: 1px black solid;">cateto opuesto</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>cateto adyacente</td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        Cateto opuesto = Y<sub>2</sub> – Y<sub>1</sub>
                                                                        <br><br>
                                                                        Cateto adyacente = X<sub>2</sub> – X<sub>1</sub>
                                                                        <br><br>
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">Luego, m = </td>
                                                                                <td style="border-bottom: 1px black solid;">Y<sub>2</sub> – Y<sub>1</sub></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>X<sub>2</sub> – X<sub>1</sub></td>
                                                                            </tr>
                                                                        </table>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;<font size="4"><i><b>Punto de apoyo</b></i></font></center>
                                                </div>
                                                <div class="panel-body">
                                                    * Pendientes 0 corresponden a rectas horizontales.
                                                    <br><br>
                                                    * Pendiente positiva si y sólo si la recta sube (de izquierda a derecha). 
                                                    <br><br>
                                                    * Pendientes negativas corresponden a rectas de descienden.
                                                    <br><br>
                                                    * Las rectas verticales no tienen pendientes definidas.
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
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><b> Ejemplos</b></a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   <div class="ibox">
                                        <div class="ibox-title">
                                            <h3><center>EJEMPLOS</center></h3>
                                            <br>
                                            <div class="row">
                                                <table border="0" align="center">
                                                    <tr>
                                                        <td><button type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemplo(1)">1</button></td>
                                                        <td><button type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemplo(2)">2</button></td>
                                                        <td><button type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemplo(3)">3</button></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <div id="Ejemplo1" class="animated col-lg-12">
                                                <div class="col-lg-8">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            Calcule la pendiente de la recta que pasa por los puntos (2,–3 ) y (–1 ,5)
                                                        </div>                                                   
                                                    </div>
                                                    <br>  
                                                    Escogemos el punto (–1 ,5) como el punto B, y (2,–3 ) como el punto A. 
                                                    <br><br>
                                                    Una vez identificados los puntos, los sustituímos en la fórmula:
                                                    <br><br>
                                                    <div class="well" align="center">
                                                        <font size="3">
                                                            <table border="0">
                                                                <tr>
                                                                    <td rowspan="2"><b>m = &nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px black solid;">Y<sub>2</sub> - Y<sub>1</sub></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>X<sub>2</sub> - X<sub>1</sub></td>
                                                                </tr>
                                                            </table>
                                                            <br><br>
                                                            <table border="0">
                                                                <tr>
                                                                    <td rowspan="2"><b>m = &nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px black solid;">5 - (-3)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>-1 - 2</td>
                                                                </tr>
                                                            </table>
                                                        </font>
                                                    </div>                
                                                    Realizamos las operaciones superiores e inferiores 
                                                    <br><br>
                                                    <div class="well" align="center">
                                                        <font size="3">
                                                        <br>
                                                            <table border="0" style="text-align: center;">
                                                                <tr>
                                                                    <td rowspan="2"><b>m = &nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px black solid;">8</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>-3</td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            Para este caso que la división ya no se puede simplificar tenemos que <b>m = - <sup>8</sup>/<sub>3</sub></b>, lo que es igual, <b>m = -2.67</b> 
                                                        </font>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="panel panel-warning">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            Podemos escoger cualquiera de los dos puntos como el punto A, y como punto B. El resultado es el mismo independientemente cual elijas.
                                                            <br><br>
                                                            Entiende como punto A > <b>A(X<sub>1</sub>,Y<sub>1</sub>)</b> y como punto B > <b>B(X<sub>2</sub>,Y<sub>2</sub>)</b>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            Como <b>m = tan θ</b> es la pendiente de la recta, para conocer el ángulo de inclinación, debes de despejar θ, es decir:
                                                            <br><br>
                                                            <b>θ = tan<sup>-1</sup> (m)</b>
                                                            <br><br>
                                                            Por lo cual, el ángulo para esta pendiente es:
                                                            <br><br>
                                                            θ = tan<sup>-1</sup> (-<sup>8</sup>/<sub>3</sub>)
                                                            <br><br>
                                                            <b>θ = -69.47</b>
                                                            <br><br>
                                                            Para obtener la inclinación es necesario sumar 180º, ya que ésta debe quedar entre 0º y 180º: 
                                                            <br><br>
                                                            θ = – 69.47º + 180º = <b>110.53º</b> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="Ejemplo2" class="animated col-lg-12" style="display: none;">
                                                <div class="col-lg-8">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            Calcule la pendiente de la recta que pasa por los puntos (-4, 1) y (1, -2)
                                                        </div>                                                   
                                                    </div>
                                                    <br>  
                                                    Escogemos el punto (-4 ,1) como el punto A, y (1, –2) como el punto B. 
                                                    <br><br>
                                                    Una vez identificados los puntos, los sustituímos en la fórmula:
                                                    <br><br>
                                                    <div class="well" align="center">
                                                        <font size="3">
                                                            <table border="0">
                                                                <tr>
                                                                    <td rowspan="2"><b>m = &nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px black solid;">Y<sub>2</sub> - Y<sub>1</sub></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>X<sub>2</sub> - X<sub>1</sub></td>
                                                                </tr>
                                                            </table>
                                                            <br><br>
                                                            <table border="0">
                                                                <tr>
                                                                    <td rowspan="2"><b>m = &nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px black solid;">-2 - 1</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1 - (-4)</td>
                                                                </tr>
                                                            </table>
                                                        </font>
                                                    </div>                
                                                    Realizamos las operaciones superiores e inferiores 
                                                    <br><br>
                                                    <div class="well" align="center">
                                                        <font size="3">
                                                        <br>
                                                            <table border="0" style="text-align: center;">
                                                                <tr>
                                                                    <td rowspan="2"><b>m = &nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px black solid;">-3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            Para este caso que la división ya no se puede simplificar tenemos que <b>m = - <sup>3</sup>/<sub>5</sub></b>, lo que es igual, <b>m = -0.60</b> 
                                                        </font>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="panel panel-warning">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            Podemos escoger cualquiera de los dos puntos como el punto A, y como punto B. El resultado es el mismo independientemente cual elijas.
                                                            <br><br>
                                                            Entiende como punto A > <b>A(X<sub>1</sub>,Y<sub>1</sub>)</b> y como punto B > <b>B(X<sub>2</sub>,Y<sub>2</sub>)</b>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            Como <b>m = tan θ</b> es la pendiente de la recta, para conocer el ángulo de inclinación, debes de despejar θ, es decir:
                                                            <br><br>
                                                            <b>θ = tan<sup>-1</sup> (m)</b>
                                                            <br><br>
                                                            Por lo cual, el ángulo para esta pendiente es:
                                                            <br><br>
                                                            θ = tan<sup>-1</sup> (-<sup>3</sup>/<sub>5</sub>)
                                                            <br><br>
                                                            <b>θ = -30.96</b>
                                                            <br><br>
                                                            Para obtener la inclinación es necesario sumar 180º, ya que ésta debe quedar entre 0º y 180º: 
                                                            <br><br>
                                                            θ = -30.96º + 180º = <b>149.04º</b> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="Ejemplo3" class="animated col-lg-12" style="display: none;">
                                                <div class="col-lg-8">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            Calcule la pendiente de la recta que pasa por los puntos (1, 3) y (6, 7)
                                                        </div>                                                   
                                                    </div>
                                                    <br>  
                                                    Escogemos el punto (1 ,3) como el punto A, y (6, 7) como el punto B. 
                                                    <br><br>
                                                    Una vez identificados los puntos, los sustituímos en la fórmula:
                                                    <br><br>
                                                    <div class="well" align="center">
                                                        <font size="3">
                                                            <table border="0">
                                                                <tr>
                                                                    <td rowspan="2"><b>m = &nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px black solid;">Y<sub>2</sub> - Y<sub>1</sub></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>X<sub>2</sub> - X<sub>1</sub></td>
                                                                </tr>
                                                            </table>
                                                            <br><br>
                                                            <table border="0">
                                                                <tr>
                                                                    <td rowspan="2"><b>m = &nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px black solid;">7 - 3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6 - 1</td>
                                                                </tr>
                                                            </table>
                                                        </font>
                                                    </div>                
                                                    Realizamos las operaciones superiores e inferiores 
                                                    <br><br>
                                                    <div class="well" align="center">
                                                        <font size="3">
                                                        <br>
                                                            <table border="0" style="text-align: center;">
                                                                <tr>
                                                                    <td rowspan="2"><b>m = &nbsp;&nbsp;</b></td>
                                                                    <td style="border-bottom: 1px black solid;">4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            Para este caso que la división ya no se puede simplificar tenemos que <b>m =  <sup>4</sup>/<sub>5</sub></b>, lo que es igual, <b>m = 0.80</b> 
                                                        </font>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="panel panel-warning">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            Podemos escoger cualquiera de los dos puntos como el punto A, y como punto B. El resultado es el mismo independientemente cual elijas.
                                                            <br><br>
                                                            Entiende como punto A > <b>A(X<sub>1</sub>,Y<sub>1</sub>)</b> y como punto B > <b>B(X<sub>2</sub>,Y<sub>2</sub>)</b>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            Como <b>m = tan θ</b> es la pendiente de la recta, para conocer el ángulo de inclinación, debes de despejar θ, es decir:
                                                            <br><br>
                                                            <b>θ = tan<sup>-1</sup> (m)</b>
                                                            <br><br>
                                                            Por lo cual, el ángulo para esta pendiente es:
                                                            <br><br>
                                                            θ = tan<sup>-1</sup> (<sup>4</sup>/<sub>5</sub>)
                                                            <br><br>
                                                            <b>θ = 38.66</b>
                                                            <br><br>
                                                            Para este caso como el ángulo se encuentra entre 0º y 180º no es necesario sumarle 180º, por lo tanto el ángulo de la pendiente es: <b>38.66º</b> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div><!--cierre del ibox-content-->                                               
                                   </div><!--cierre del ibox-->
                               </div><!--cierre de etiqueta div col-lg-12-->
                            </div>
                        </div>
                    </div>
                </div><!--cierre de la segunda pestaña del acordeon....-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><b> Práctica</b></a>
                            <div class="nav navbar-top-links navbar-right ">
                                <div class="col-lg-3">
                                    <button type="button"  onclick="tour1()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class ="row">
                                <div class="col-lg-12">
                                    <p style="text-align: justify;">
                                        Ahora que ya aprendimos un poco sobre como obtener la pendiente de una recta, desarrolla los ejercicios planteados a continuación y arrastra la respuesta correcta a la interrogante que se te presenta.
                                    </p><!--cierre de etiqueta p, inicio de teoría-->
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-xs-12" id="tour1-1">
                                            <div align="center">
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(1)">1</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(2)">2</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(3)">3</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(4)">4</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox">
                                        <div class="ibox-content" id="tour1-2">
                                            <div class="row animated fadeInRightBig" id="prac_1">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="alert alert-info">
                                                                <strong>Segmento de Recta</strong><br>
                                                                Visualiza y comprende los puntos extremos que conforman la recta.
                                                            </div>
                                                            <!--<div class="jxgbox" id="plano1" style="width: 400px; height: 400px; width: resizable;"></div>-->
                                                            <center>
                                                                <img width="90%" height="350px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/1.png')}}"/>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Resultado</strong><br>
                                                                        Utiliza la fórmula y calcula la pendiente entre los puntos dados. ¿Cuál es la pendiente? 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-warning">
                                                                        <table border="0" width="100%" style="text-align: center;">
                                                                            <tr>
                                                                                <td> La pendiente de la recta entre los puntos <b>(2 , 2)</b> y <b>(5 , 7)</b> es:
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <center>
                                                                                        <div class="contenedor" id="Pract1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                    </center>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="100%" colspan="2" style="text-align: center;">
                                                                                    <b><k>POSIBLES RESPUESTAS</k></b>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                   <div id="compenentesPractica1">
                                                                                       <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                                            <img id="pract1No1" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no1.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract1No2" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract1No3" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no3.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract1Si" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/si.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract1No4" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no4.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract1No5" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no5.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                        </div>
                                                                                    </div> 
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><center><button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPractica1(1);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                                &nbsp;&nbsp;
                                                                                <button type="button" class="btn btn-primary btn-rounded" onclick="VerificarEvaluacion1();"><i class="fa fa-check"></i>&nbsp;Comprobar</button></center></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>                                          
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;" id="prac_2">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="alert alert-info">
                                                                <strong>Segmento de Recta</strong><br>
                                                                Visualiza y comprende los puntos extremos que conforman la recta.
                                                            </div>
                                                            <!--<div class="jxgbox" id="plano1" style="width: 400px; height: 400px; width: resizable;"></div>-->
                                                            <center>
                                                                <img width="90%" height="350px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/2.png')}}"/>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Resultado</strong><br>
                                                                        Utiliza la fórmula y calcula la pendiente entre los puntos dados. ¿Cuál es la pendiente? 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-warning">
                                                                        <table border="0" width="100%" style="text-align: center;">
                                                                            <tr>
                                                                                <td> La pendiente de la recta entre los puntos <b>(-5 , 3)</b> y <b>(5 , 3)</b> es:
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <center>
                                                                                        <div class="contenedor" id="Pract2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                    </center>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="100%" colspan="2" style="text-align: center;">
                                                                                    <b><k>POSIBLES RESPUESTAS</k></b>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                   <div id="compenentesPractica2">
                                                                                       <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                                            <img id="pract2No1" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no4.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract2No2" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract2No3" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no5.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract2No4" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no1.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract2No5" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no3.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract2Si" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/si.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                        </div>
                                                                                    </div> 
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><center><button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPractica2(1);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                                &nbsp;&nbsp;
                                                                                <button type="button" class="btn btn-primary btn-rounded" onclick="VerificarEvaluacion2();"><i class="fa fa-check"></i>&nbsp;Comprobar</button></center></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>                                          
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;" id="prac_3">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="alert alert-info">
                                                                <strong>Segmento de Recta</strong><br>
                                                                Visualiza y comprende los puntos extremos que conforman la recta.
                                                            </div>
                                                            <!--<div class="jxgbox" id="plano1" style="width: 400px; height: 400px; width: resizable;"></div>-->
                                                            <center>
                                                                <img width="90%" height="350px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/3.png')}}"/>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Resultado</strong><br>
                                                                        Utiliza la fórmula y calcula la pendiente entre los puntos dados. ¿Cuál es la pendiente? 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-warning">
                                                                        <table border="0" width="100%" style="text-align: center;">
                                                                            <tr>
                                                                                <td> La pendiente de la recta entre los puntos <b>(-3 , -4)</b> y <b>(3 , 5)</b> es:
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <center>
                                                                                        <div class="contenedor" id="Pract3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                    </center>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="100%" colspan="2" style="text-align: center;">
                                                                                    <b><k>POSIBLES RESPUESTAS</k></b>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                   <div id="compenentesPractica3">
                                                                                       <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                                            <img id="pract3No1" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no4.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract3Si" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/si.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract3No2" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no5.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract3No3" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no1.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract3No4" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no3.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract3No5" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                        </div>
                                                                                    </div> 
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><center><button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPractica3(1);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                                &nbsp;&nbsp;
                                                                                <button type="button" class="btn btn-primary btn-rounded" onclick="VerificarEvaluacion3();"><i class="fa fa-check"></i>&nbsp;Comprobar</button></center></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>                                          
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;" id="prac_4">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="alert alert-info">
                                                                <strong>Segmento de Recta</strong><br>
                                                                Visualiza y comprende los puntos extremos que conforman la recta.
                                                            </div>
                                                            <!--<div class="jxgbox" id="plano1" style="width: 400px; height: 400px; width: resizable;"></div>-->
                                                            <center>
                                                                <img width="90%" height="350px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/4.png')}}"/>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Resultado</strong><br>
                                                                        Utiliza la fórmula y calcula la pendiente entre los puntos dados. ¿Cuál es la pendiente? 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-warning">
                                                                        <table border="0" width="100%" style="text-align: center;">
                                                                            <tr>
                                                                                <td> La pendiente de la recta entre los puntos <b>(5 , -2)</b> y <b>(-5 , 2)</b> es:
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <center>
                                                                                        <div class="contenedor" id="Pract4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div>
                                                                                    </center>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="100%" colspan="2" style="text-align: center;">
                                                                                    <b><k>POSIBLES RESPUESTAS</k></b>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                   <div id="compenentesPractica4">
                                                                                       <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                                            <img id="pract4No1" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no4.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract4No2" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no5.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract4Si" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/si.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract4No3" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no1.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract4No4" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no3.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                            <img id="pract4No5" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                                                        </div>
                                                                                    </div> 
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><center><button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPractica4(1);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                                &nbsp;&nbsp;
                                                                                <button type="button" class="btn btn-primary btn-rounded" onclick="VerificarEvaluacion4();"><i class="fa fa-check"></i>&nbsp;Comprobar</button></center></td>
                                                                            </tr>
                                                                        </table>
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
                <!--acordeon paso 2...-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><b> Resolución de Ejercicios</b></a>
                            <div class="nav navbar-top-links navbar-right ">
                                <div class="col-lg-3">
                                    <button type="button"  onclick="tour2()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="ibox">
                                        <div class="ibox-content" id="tour2-1">
                                            <div class="row animated fadeInRightBig" id="resol_ejercicios">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="alert alert-info">
                                                                <strong>Segmento de Recta</strong><br>
                                                                En esta sección se te mostrara el segmento de recta según los puntos que tú ingreses en el área <b>"Información"</b>.
                                                            </div>
                                                            <center>
                                                                <div class="jxgbox" id="plano1" style="width: 400px;height: 400px; "></div>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Infórmacion</strong><br>
                                                                        Ingresa los valores en los campos correspondientes. Luego de ello presiona el botón "Generar" para conocer el resultado y procedimiento.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div id="Puntos" class="alert alert-warning">
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td colspan="3"><center><b>Punto A</b></center></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td colspan="3"><center><b>Punto B</b></center></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="20%"><center>X<sub>1</sub></center></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td width="20%"><center>Y<sub>1</sub></center></td> 
                                                                                <td>&nbsp;</td> 
                                                                                <td width="20%"><center>X<sub>2</sub></center></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td width="20%"><center>Y<sub>2</sub></center></td>  
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="x1" width="100%" onkeyup="datoX1(this);"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="y1" width="100%" onkeyup="datoY1(this);"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="x2" width="100%" onkeyup="datoX2(this);"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="y2" width="100%" onkeyup="datoY2(this);"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><center><button type="button" class="btn btn-danger btn-rounded" onclick="limpiarResolucion();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button></center></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td colspan="3"><center><button type="button" class="btn btn-primary btn-rounded" onclick="generarResolucion();"><i class="fa fa-check"></i>&nbsp;Generar</button></center></td>
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
<!--GRAFICAR RECTA SEGUN PUNTO Y PENDIENTE-->
<div class="ibox float-e-margins animated fadeInUpBig">
    <div class="ibox-title">
        <h5>Graficar una recta dado un punto y la pendiete</h5>
    </div>
    <div class="ibox-content">
        <div class="panel-body">
            <!--inicio del acordeon que contiene el contenido del area sucesiones arirmeticas - caracteristicas-->
            <div class="panel-group" id="accordionP">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordionP" href="#collapseOneP"><b>Teoría</b></a>
                        </h5>
                    </div>
                    <!---->
                    <div id="collapseOneP" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p style="text-align: justify;">
                                        Recuerda que la pendiente de una recta no vertical, es un número que mide la inclinación de la recta y puede ser calculada a traves de las coordenadas de 2 puntos sobre la recta utilizando la  siguiente fórmula:
                                        <br><br>
                                        <div class="well">
                                            <div class="row diff-wrapper">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <center><b>
                                                            <table border="0">
                                                                <tr>
                                                                    <td rowspan="2">m = </td>
                                                                    <td style="border-bottom: 1px black solid;">Y<sub>2</sub> – Y<sub>1</sub></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>X<sub>2</sub> – X<sub>1</sub></td>
                                                                </tr>
                                                            </table>
                                                        </b></center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        Veremos como dada las coordenadas de un punto de una recta en el plano cartesiano y el valor de su pendiente, podremos dibujar la recta haciendo uso de está fórmula, para ello lo haremos por medio de estos ejemplos:
                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                               <div class="ibox">
                                                    <div class="ibox-title">
                                                        <h3><center>EJEMPLOS</center></h3>
                                                        <br>
                                                        <div class="row">
                                                            <table border="0" align="center">
                                                                <tr>
                                                                    <td><button type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemploP(1)">1</button></td>
                                                                    <td><button type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemploP(2)">2</button></td>
                                                                    <td><button type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemploP(3)">3</button></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="ibox-content">
                                                        <div id="Ejemplo1P" class="animated col-lg-12">
                                                            <div class="col-lg-8">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        Dibujar la recta que pasa por el punto <b>(2 , 0)</b> y tiene pendiente <b>2</b>
                                                                    </div>                                                   
                                                                </div>
                                                                <br>  
                                                                Sabiendo que:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                        <b><table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m = </td>
                                                                                <td style="border-bottom: 1px black solid;">ΔY</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ΔX</td>
                                                                            </tr>
                                                                        </table></b>
                                                                    </font>
                                                                </div>
                                                                Identificamos que el cambio en <b>Y</b> es igual a <b>2</b>, y el cambio en <b>X</b> es <b>1</b>, es decir:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>m = </b>&nbsp;&nbsp;</td>
                                                                                <td style="border-bottom: 1px black solid;">2</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>                
                                                                Asignamos como punto A las coordenadas dadas en el ejercicio <b>(2 , 0)</b>, para conocer el segundo punto de la recta, sumamos al punto <b>A</b> los valores de cambio tanto para X como para Y, es decir: 
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                    <br>
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td><b>X<sub>2</sub></b> = ΔX + Ax</td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td><b>Y<sub>2</sub></b> = ΔY + Ay</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                Sustituyendo los valores: 
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                    <br>
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td>X<sub>2</sub> = 1 + 2 = <b>3</b></td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td>Y<sub>2</sub> = 2 + 0 = <b>2</b></td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        Así descubrimos que el punto <b>B</b> es <b>(3 , 2)</b>, y graficamos el segmento de recta, para comprobar el resultado.
                                                                    </font>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        La fórmula de la pendiente es:
                                                                        <br>
                                                                         <b><table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m = </td>
                                                                                <td style="border-bottom: 1px black solid;">ΔY</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ΔX</td>
                                                                            </tr>
                                                                        </table></b>
                                                                        <br>
                                                                        También expresado de la siguiente manera
                                                                        <br>
                                                                         <b><table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m = </td>
                                                                                <td style="border-bottom: 1px black solid;">cambio en Y</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>cambio en X</td>
                                                                            </tr>
                                                                        </table></b>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="panel panel-info">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        La gráfica queda compuesta de la siguiente manera:
                                                                        <br><br>
                                                                        <center><img width="90%" height="200" src="{{asset('img/iconos/geometria/analitica/pendiente/teoria1p.png')}}"/></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Ejemplo2P" class="animated col-lg-12" style="display: none;">
                                                            <div class="col-lg-8">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        Dibujar la recta que pasa por el punto <b>(-3 , 1)</b> y tiene pendiente <b><sup>1</sup>/<sub>3</sub></b>
                                                                    </div>                                                   
                                                                </div>
                                                                <br>  
                                                                Sabiendo que:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                        <b><table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m = </td>
                                                                                <td style="border-bottom: 1px black solid;">ΔY</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ΔX</td>
                                                                            </tr>
                                                                        </table></b>
                                                                    </font>
                                                                </div>
                                                                Identificamos que el cambio en <b>Y</b> es igual a <b>1</b>, y el cambio en <b>X</b> es <b>3</b>, es decir:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>m = </b>&nbsp;&nbsp;</td>
                                                                                <td style="border-bottom: 1px black solid;">1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>                
                                                                Asignamos como punto A las coordenadas dadas en el ejercicio <b>(-3 , 1)</b>, para conocer el segundo punto de la recta, sumamos al punto <b>A</b> los valores de cambio tanto para X como para Y, es decir: 
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                    <br>
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td><b>X<sub>2</sub></b> = ΔX + Ax</td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td><b>Y<sub>2</sub></b> = ΔY + Ay</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                Sustituyendo los valores: 
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                    <br>
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td>X<sub>2</sub> = 3 + (-3) = <b>0</b></td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td>Y<sub>2</sub> = 1 + 1 = <b>2</b></td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        Así descubrimos que el punto <b>B</b> es <b>(0 , 2)</b>, y graficamos el segmento de recta, para comprobar el resultado.
                                                                    </font>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        La fórmula de la pendiente es:
                                                                        <br>
                                                                         <b><table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m = </td>
                                                                                <td style="border-bottom: 1px black solid;">ΔY</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ΔX</td>
                                                                            </tr>
                                                                        </table></b>
                                                                        <br>
                                                                        También expresado de la siguiente manera
                                                                        <br>
                                                                         <b><table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m = </td>
                                                                                <td style="border-bottom: 1px black solid;">cambio en Y</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>cambio en X</td>
                                                                            </tr>
                                                                        </table></b>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="panel panel-info">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        La gráfica queda compuesta de la siguiente manera:
                                                                        <br><br>
                                                                        <center><img width="90%" height="200" src="{{asset('img/iconos/geometria/analitica/pendiente/teoria2p.png')}}"/></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Ejemplo3P" class="animated col-lg-12" style="display: none;">
                                                            <div class="col-lg-8">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        Dibujar la recta que pasa por el origen y tiene pendiente <b>-4</b>
                                                                    </div>                                                   
                                                                </div>
                                                                <br>  
                                                                Sabiendo que:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                        <b><table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m = </td>
                                                                                <td style="border-bottom: 1px black solid;">ΔY</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ΔX</td>
                                                                            </tr>
                                                                        </table></b>
                                                                    </font>
                                                                </div>
                                                                Identificamos que el cambio en <b>Y</b> es igual a <b>-4</b>, y el cambio en <b>X</b> es <b>1</b>, es decir:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>m = </b>&nbsp;&nbsp;</td>
                                                                                <td style="border-bottom: 1px black solid;">-4</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>1</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>                
                                                                Asignamos como punto A las coordenadas dadas en el ejercicio <b>(0 , 0)</b>, para conocer el segundo punto de la recta, sumamos al punto <b>A</b> los valores de cambio tanto para X como para Y, es decir: 
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                    <br>
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td><b>X<sub>2</sub></b> = ΔX + Ax</td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td><b>Y<sub>2</sub></b> = ΔY + Ay</td>
                                                                            </tr>
                                                                        </table>
                                                                    </font>
                                                                </div>
                                                                Sustituyendo los valores: 
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                    <br>
                                                                        <table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td>X<sub>2</sub> = 1 + 0 = <b>1</b></td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td>Y<sub>2</sub> = -4 + 0 = <b>-4</b></td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        Así descubrimos que el punto <b>B</b> es <b>(1 , -4)</b>, y graficamos el segmento de recta, para comprobar el resultado.
                                                                    </font>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        La fórmula de la pendiente es:
                                                                        <br>
                                                                         <b><table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m = </td>
                                                                                <td style="border-bottom: 1px black solid;">ΔY</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ΔX</td>
                                                                            </tr>
                                                                        </table></b>
                                                                        <br>
                                                                        También expresado de la siguiente manera
                                                                        <br>
                                                                         <b><table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m = </td>
                                                                                <td style="border-bottom: 1px black solid;">cambio en Y</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>cambio en X</td>
                                                                            </tr>
                                                                        </table></b>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="panel panel-info">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        La gráfica queda compuesta de la siguiente manera:
                                                                        <br><br>
                                                                        <center><img width="90%" height="200" src="{{asset('img/iconos/geometria/analitica/pendiente/teoria3p.png')}}"/></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div><!--cierre del ibox-content-->                                               
                                               </div><!--cierre del ibox-->
                                           </div><!--cierre de etiqueta div col-lg-12-->
                                        </div>
                                    </p>
                                </div>
                            </div><!--cierre div row -->
                        </div><!--panel body teoría-->
                    </div><!--cieere div collpase-->
                </div><!--cierre panel defaul teoría-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordionP" href="#collapseTwoP"><b> Práctica</b></a>
                            <div class="nav navbar-top-links navbar-right ">
                                <div class="col-lg-3">
                                    <button type="button"  onclick="tour3()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div id="collapseTwoP" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-xs-12" id="tour3-1">
                                            <div align="center">
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practicaP(1)">1</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practicaP(2)">2</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practicaP(3)">3</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practicaP(4)">4</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox">
                                        <div class="ibox-content" id="tour3-2">
                                            <div class="row animated fadeInRightBig" id="prac_1P">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="well" align="center">
                                                            <font size="3" style="text-align: justify;">
                                                                Selecciona la gráfica correcta para un punto <b>(2 , 5)</b> con pendiente <b>3</b> 
                                                            </font>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac1/si.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="1rpe1" value="1" name="1rpe" onclick="VerificarEvaluacion1P();">
                                                                        <label for="1rpe1"><b>Gráfica 1</b></label>
                                                                    </div>
                                                                    <div id="True1P1" style="display: none;">
                                                                        &nbsp;&nbsp;
                                                                        <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac1/no1.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="1rpe2" value="2" name="1rpe" onclick="VerificarEvaluacion1P();">
                                                                        <label for="1rpe2"><b>Gráfica 2</b></label>
                                                                    </div>
                                                                    <div id="False2P1" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac1/no2.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="1rpe3" value="3" name="1rpe" onclick="VerificarEvaluacion1P();">
                                                                        <label for="1rpe3"><b>Gráfica 3</b></label>
                                                                    </div>
                                                                    <div id="False3P1" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac1/no3.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="1rpe4" value="4" name="1rpe" onclick="VerificarEvaluacion1P();">
                                                                        <label for="1rpe4"><b>Gráfica 4</b></label>
                                                                    </div>
                                                                    <div id="False4P1" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac1/no4.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="1rpe5" value="5" name="1rpe" onclick="VerificarEvaluacion1P();">
                                                                        <label for="1rpe5"><b>Gráfica 5</b></label>
                                                                    </div>
                                                                    <div id="False5P1" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                  <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac1/no5.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="1rpe6" value="6" name="1rpe" onclick="VerificarEvaluacion1P();">
                                                                        <label for="1rpe6"><b>Gráfica 6</b></label>
                                                                    </div>
                                                                    <div id="False6P1" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;" id="prac_2P">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="well" align="center">
                                                            <font size="3" style="text-align: justify;">
                                                                Selecciona la gráfica correcta para un punto <b>(-3 , 2)</b> con pendiente <b>- <sup>2</sup>/<sub>5</sub></b> 
                                                            </font>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac2/no3.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="2rpe1" value="1" name="2rpe" onclick="VerificarEvaluacion2P();">
                                                                        <label for="2rpe1"><b>Gráfica 1</b></label>
                                                                    </div>
                                                                    <div id="False1P2" style="display: none;">
                                                                        &nbsp;&nbsp;
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac2/no1.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="2rpe2" value="2" name="2rpe" onclick="VerificarEvaluacion2P();">
                                                                        <label for="2rpe2"><b>Gráfica 2</b></label>
                                                                    </div>
                                                                    <div id="False2P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac2/no2.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="2rpe3" value="3" name="2rpe" onclick="VerificarEvaluacion2P();">
                                                                        <label for="2rpe3"><b>Gráfica 3</b></label>
                                                                    </div>
                                                                    <div id="False3P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac2/si.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="2rpe4" value="4" name="2rpe" onclick="VerificarEvaluacion2P();">
                                                                        <label for="2rpe4"><b>Gráfica 4</b></label>
                                                                    </div>
                                                                    <div id="True4P2" style="display: none;">
                                                                        <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac2/no4.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="2rpe5" value="5" name="2rpe" onclick="VerificarEvaluacion2P();">
                                                                        <label for="2rpe5"><b>Gráfica 5</b></label>
                                                                    </div>
                                                                    <div id="False5P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                  <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac2/no5.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="2rpe6" value="6" name="2rpe" onclick="VerificarEvaluacion2P();">
                                                                        <label for="2rpe6"><b>Gráfica 6</b></label>
                                                                    </div>
                                                                    <div id="False6P2" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;" id="prac_3P">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="well" align="center">
                                                            <font size="3" style="text-align: justify;">
                                                                Selecciona la gráfica correcta para un punto <b>(2 , 5)</b> con pendiente <b>- <sup>1</sup>/<sub>3</sub></b>; 
                                                            </font>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac3/no3.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe1" value="1" name="3rpe" onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe1"><b>Gráfica 1</b></label>
                                                                    </div>
                                                                    <div id="False1P3" style="display: none;">
                                                                        &nbsp;&nbsp;
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac3/si.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe2" value="2" name="3rpe" onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe2"><b>Gráfica 2</b></label>
                                                                    </div>
                                                                    <div id="True2P3" style="display: none;">
                                                                        <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac3/no2.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe3" value="3" name="3rpe" onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe3"><b>Gráfica 3</b></label>
                                                                    </div>
                                                                    <div id="False3P3" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac3/no1.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe4" value="4" name="3rpe" onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe4"><b>Gráfica 4</b></label>
                                                                    </div>
                                                                    <div id="False4P3" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac3/no4.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe5" value="5" name="3rpe" onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe5"><b>Gráfica 5</b></label>
                                                                    </div>
                                                                    <div id="False5P3" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                  <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac3/no5.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe6" value="6" name="3rpe" onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe6"><b>Gráfica 6</b></label>
                                                                    </div>
                                                                    <div id="False6P3" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;" id="prac_4P">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="well" align="center">
                                                            <font size="3" style="text-align: justify;">
                                                                Selecciona la gráfica correcta para un punto <b>(8 , -3)</b> con pendiente <b>- 5</b>; 
                                                            </font>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac4/no3.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="4rpe1" value="1" name="4rpe" onclick="VerificarEvaluacion4P();">
                                                                        <label for="4rpe1"><b>Gráfica 1</b></label>
                                                                    </div>
                                                                    <div id="False1P4" style="display: none;">
                                                                        &nbsp;&nbsp;
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac4/no4.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="4rpe2" value="2" name="4rpe" onclick="VerificarEvaluacion4P();">
                                                                        <label for="4rpe2"><b>Gráfica 2</b></label>
                                                                    </div>
                                                                    <div id="False2P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac4/no2.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="4rpe3" value="3" name="4rpe" onclick="VerificarEvaluacion4P();">
                                                                        <label for="4rpe3"><b>Gráfica 3</b></label>
                                                                    </div>
                                                                    <div id="False3P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac4/no1.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="4rpe4" value="4" name="4rpe" onclick="VerificarEvaluacion4P();">
                                                                        <label for="4rpe4"><b>Gráfica 4</b></label>
                                                                    </div>
                                                                    <div id="False4P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                   <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac4/si.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="4rpe5" value="5" name="4rpe" onclick="VerificarEvaluacion4P();">
                                                                        <label for="4rpe5"><b>Gráfica 5</b></label>
                                                                    </div>
                                                                    <div id="True5P4" style="display: none;">
                                                                        <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>
                                                                    </div>
                                                               </center> 
                                                            </div>
                                                            <div class="col-lg-1">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-lg-3">
                                                               <center>
                                                                  <img width="90%" height="250px" src="{{asset('img/iconos/geometria/analitica/pendiente/practicas/prac4/no5.png')}}"/>
                                                                   <br><br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="4rpe6" value="6" name="4rpe" onclick="VerificarEvaluacion4P();">
                                                                        <label for="4rpe6"><b>Gráfica 6</b></label>
                                                                    </div>
                                                                    <div id="False6P4" style="display: none;">
                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                    </div>
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
                </div><!--cierre de la segunda pestaña del acordeon....-->
                <!--acordeon paso 2...-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordionP" href="#collapseThreeP"><b> Resolución de Ejercicios</b></a>
                            <div class="nav navbar-top-links navbar-right ">
                                <div class="col-lg-3">
                                    <button type="button"  onclick="tour4()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div id="collapseThreeP" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="ibox">
                                        <div class="ibox-content" id="tour4-1">
                                            <div class="row animated fadeInRightBig" id="resol_ejercicios">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Infórmacion</strong><br>
                                                                        Ingresa los valores en los campos correspondientes. Luego de ello presiona el botón "Generar" para conocer el resultado y procedimiento.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div id="PuntosP" class="alert alert-warning">
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td colspan="3"><center><b>Punto A</b></center></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><center><b>Pendiente</b></center></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="30%"><center>X<sub>1</sub></center></td>
                                                                                <td width="5%">&nbsp;</td> 
                                                                                <td width="30%"><center>Y<sub>1</sub></center></td> 
                                                                                <td width="5%">&nbsp;</td> 
                                                                                <td width="30%"><center>ΔY</center></td>  
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="x1p" width="100%"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="y1p" width="100%"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="y2p" width="100%"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height="5px" colspan="4"></td>
                                                                                <td height="5px"  colspan="4" style='border-bottom: 2px orange solid;'></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">&nbsp;</td>
                                                                                <td><center>ΔX</center></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">&nbsp;</td>
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="x2p" width="100%"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2"><center><button type="button" class="btn btn-danger btn-rounded" onclick="limpiarResolucionP(1);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button></center></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td colspan="2"><center><button type="button" class="btn btn-primary btn-rounded" onclick="generarResolucionP();"><i class="fa fa-check"></i>&nbsp;Generar</button></center></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div id="ResultadoP" class="alert alert-success" style="display: none;">
                                                                        <div id="solucionP">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--PARTE DE LA GRAFICA-->
                                                        <div class="col-md-6">
                                                            <div class="alert alert-info">
                                                                <strong>Segmento de Recta</strong><br>
                                                                En esta sección se te mostrara el segmento de recta según el punto y la pendiente que tú ingreses en el área <b>"Información"</b>.
                                                            </div>
                                                            <center>
                                                                <div class="jxgbox" id="plano2" style="width: 400px;height: 400px; display: none;"></div>
                                                                <div class="alert alert-success" id="espera" style="width: 90%; height: 200px;">
                                                                    <center><font size="2"><label><i><b>Esperando Información</b></i></label></font></center>
                                                                    <div class="spiner-example">
                                                                        <div class="sk-spinner sk-spinner-three-bounce">
                                                                            <div class="sk-bounce1"></div>
                                                                            <div class="sk-bounce2"></div>
                                                                            <div class="sk-bounce3"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                </div><!--cierre de la segunda pestaña del acordeon....-->
            </div><!--cierre con el class panel -- acordion -->
        </div><!--cierre con el class panel -- body -->
    </div><!--cierre con el class ibox -- content -->
</div><!--cierre con el primer div -->
<script>
////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
///////// P R I M E R ---- A C O R D E O N ////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
var nuevoAn=0;
var nuevoAd=0;
////FUNCIONES MOVER IMAGENES
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
/////////////FUNCIONES PARA GRAFICAR PUNTOS    
function imprimir(impresionx1,impresiony1,impresionx2,impresiony2)
{
    document.getElementById("x1").value=impresionx1;
    document.getElementById("y1").value=impresiony1;
    document.getElementById("x2").value=impresionx2;
    document.getElementById("y2").value=impresiony2;
}
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
        var s1 = brd.create('line',[p1, p2],{strokeColor:'#01aeef', straightFirst:true, straightLast:true});
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
        var s1 = brd.create('line',[p1, p2],{strokeColor:'#01aeef', straightFirst:true, straightLast:true});
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
        var s1 = brd.create('line',[p1, p2],{strokeColor:'#01aeef', straightFirst:true, straightLast:true});
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
        var s1 = brd.create('line',[p1, p2],{strokeColor:'#01aeef', straightFirst:true, straightLast:true});
    }
}
function generarResolucion()
{
    var x1;
    var y1;
    var x2;
    var y2;
    if (document.getElementById("x1").value!="") {
        x1=parseInt(document.getElementById("x1").value);
    }
    else
    {
        x1=0;
    }
    if (document.getElementById("y1").value!="") {
        y1=parseInt(document.getElementById("y1").value);
    }
    else
    {
        y1=0;
    }
    if (document.getElementById("x2").value!="") {
        x2=parseInt(document.getElementById("x2").value);
    }
    else
    {
        x2=0;
    }
    if (document.getElementById("y2").value!="") {
        y2=parseInt(document.getElementById("y2").value);
    }
    else
    {
        y2=0;
    }
    //////INICIO DEL PROCEDIMIENTO
    $("#solucion").html("<center>Conociendo los puntos A("+x1+","+y1+") y B("+x2+","+y2+") y tomando en cuenta la fórmula,<br><br>"+
        "<font size='3'><b>"+
            "<table border='0'>"+
                "<tr>"+
                    "<td rowspan='2'><b>m = &nbsp;&nbsp;</b></td>"+
                    "<td style='border-bottom: 1px green solid;'>Y<sub>2</sub> - Y<sub>1</sub></td>"+
                "</tr>"+
                "<tr>"+
                    "<td>X<sub>2</sub> - X<sub>1</sub></td>"+
                "</tr>"+
            "</table>"+
        "</b></font>"+
        "<br>"+
        "</center>");
        var impreY;
        var impreX;
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
        $("#solucion").append("<center>"+
        "Sustituimos los datos obtenidos:"+
        "<br><br>"+
        "<font size='3'><b>"+
            "<table border='0'>"+
                "<tr>"+
                    "<td rowspan='2'><b>m = &nbsp;&nbsp;</b></td>"+
                    "<td style='border-bottom: 1px green solid;'>"+y2+" - "+impreY+"</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>"+x2+" - "+impreX+"</td>"+
                "</tr>"+
            "</table>"+
        "</b></font>"+
        "<br>"+
        "Realizamos las restas internas:"+
        "</center>");
        var restaX;
        var restaY;
        restaX=x2-x1;
        restaY=y2-y1;
        restaX=parseFloat(restaX);
        restaY=parseFloat(restaY);
        if (restaX % 1 ==0) {
            restaX=parseInt(restaX);
        }
        else
        {
            restaX=restaX.toFixed(2);
        }
        if (restaY % 1 ==0) {
            restaY=parseInt(restaY);
        }
        else
        {
            restaY=restaY.toFixed(2);
        }
        $("#solucion").append("<center><br>"+
        "<font size='3'><b>"+
            "<table border='0'>"+
                "<tr>"+
                    "<td rowspan='2'><b>m = &nbsp;&nbsp;</b></td>"+
                    "<td style='border-bottom: 1px green solid;'>"+restaY+"</td>"+
                "</tr>"+
                "<tr>"+
                    "<td>"+restaX+"</td>"+
                "</tr>"+
            "</table>"+
        "</b></font>"+
        "<br>"+
        "</center>");
        var FinalX;
        var FinalY;
        var retornoFinal;
        var redujo;//0 n redujo, 1 si redujo;
        console.log(restaY," , ",restaX);
        if (restaX!=0 && restaY!=0) {
            reduce(restaY,restaX);
            FinalY=nuevoAn;
            FinalX=nuevoAd;
            if (restaX==FinalX) {
                redujo=0;
            }
            else
            {
                redujo=1;
            }
            retornoFinal= FinalY / FinalX;
            if (retornoFinal %1 ==0) {
                FinalY=parseInt(retornoFinal);
                FinalX=1;
            }
        }
        else
        {
            FinalX=restaY / restaX;
            if (FinalX % 1 ==0) {
                FinalY=parseInt(FinalX);
                FinalX=1;
            }
            else
            {
                FinalX=restaX;
                FinalY=restaY;
            }
        }
        if (redujo==1) {
             if (FinalX==1) {
                $("#solucion").append("<center>"+
                                        "Realizando la división obtenemos que la pendiente es de: "+
                                        "<br><br>"+
                                        "<font size='3'><b>m = "+FinalY+"</b></font>"+
                                        "<br><br>"+
                                        "<button type='button' class='btn btn-info btn-rounded' onclick='Puntos();'><i class='fa fa-repeat'></i>&nbsp;Cambiar Coordenadas</button>"+
                                    "</center>");
            }
            else
            {
                $("#solucion").append("<center>"+
                                        "Reduciendo la fracción obtenemos que la pendiente es de: "+
                                        "<br><br>"+
                                        "<font size='3'><b>m = <sup>"+FinalY+"</sup>/<sub>"+FinalX+"</sub></b></font>"+
                                        "<br><br>"+
                                        "<button type='button' class='btn btn-info btn-rounded' onclick='Puntos();'><i class='fa fa-repeat'></i>&nbsp;Cambiar Coordenadas</button>"+
                                    "</center>");
            }
        }
        else{
            if (FinalX==1) {
                $("#solucion").append("<center>"+
                                        "Realizando la división obtenemos que la pendiente es de: "+
                                        "<br><br>"+
                                        "<font size='3'><b>m = "+FinalY+"</b></font>"+
                                        "<br><br>"+
                                        "<button type='button' class='btn btn-info btn-rounded' onclick='Puntos();'><i class='fa fa-repeat'></i>&nbsp;Cambiar Coordenadas</button>"+
                                    "</center>");
            }
            else
            {
                $("#solucion").append("<center>"+
                                        "Así obtenemos que la pendiente es de: "+
                                        "<br><br>"+
                                        "<font size='3'><b>m = <sup>"+FinalY+"</sup>/<sub>"+FinalX+"</sub></b></font>"+
                                        "<br><br>"+
                                        "<button type='button' class='btn btn-info btn-rounded' onclick='Puntos();'><i class='fa fa-repeat'></i>&nbsp;Cambiar Coordenadas</button>"+
                                    "</center>");
            }
        }
        $("#Puntos").fadeOut(0);
        $("#Resultado").fadeIn(300);
        GraficarFinal(FinalY,FinalX);
}
function GraficarFinal(y,x)
{
    var x1N = parseInt(document.getElementById("x1").value);
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
    p1 = brd.create('point',[x1N,y1N],{visible:true});
    p2 = brd.create('point',[x2N,y2N],{visible:true});
    var s1 = brd.create('line',[p1, p2],{strokeColor:'#01aeef', straightFirst:true, straightLast:true, name: 'm = '+y+''});
    if (x==1) {
        console.log("Entro x");
        brd.create('text',[x1N+1,y1N+1,'m = '+y]);
    }
    else
    {
        console.log("Entro y");
        brd.create('text',[x1N+1,y1N+1, 'm = '+y+' / '+x]); 
    }
    
}
function limpiarResolucion(){
    brd = JXG.JSXGraph.initBoard('plano1',{boundingbox:[-4,4,4,-4], keepaspectratio:true, axis:true,showCopyright:false});
    p1 = brd.create('point',[0,0],{visible:true});
    p2 = brd.create('point',[0,0],{visible:true});
        var t = brd.create('text', [0.1,0.1, function() { 
        var impresionx1=p1.X();
        var impresiony1=p1.Y();
        var impresionx2=p2.X();
        var impresiony2=p2.Y();
        imprimir(impresionx1,impresiony1,impresionx2,impresiony2);
        return impresionx1;
        }
        ]);
}
limpiarResolucion();
////////////
function Puntos(){
    $("#Resultado").fadeOut(0);
    $("#Puntos").fadeIn(300);
}
$(document).ready(function(){
        $('.file-box').each(function() {
            animationHover(this, 'swing');
        });

        toastr.options = {          
          "preventDuplicates": true
        }
    });
$(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });

function cambioEjemplo(opc)
{
    switch(opc)
    {
        case 1:
        {
            $("#Ejemplo2").fadeOut(0);
            $("#Ejemplo3").fadeOut(0);
            $("#Ejemplo1").fadeIn(300);
            $('#Ejemplo1').removeAttr('class').attr('class', '');
            $('#Ejemplo1').addClass('animated');
            $('#Ejemplo1').addClass('fadeInRightBig');
        }break;
        case 2:
        {
            $("#Ejemplo1").fadeOut(0);
            $("#Ejemplo3").fadeOut(0);
            $("#Ejemplo2").fadeIn(300);
            $('#Ejemplo2').removeAttr('class').attr('class', '');
            $('#Ejemplo2').addClass('animated');
            $('#Ejemplo2').addClass('fadeInRightBig');
        }break;
        case 3:
        {
            $("#Ejemplo1").fadeOut(0);
            $("#Ejemplo2").fadeOut(0);
            $("#Ejemplo3").fadeIn(300);
            $('#Ejemplo3').removeAttr('class').attr('class', '');
            $('#Ejemplo3').addClass('animated');
            $('#Ejemplo3').addClass('fadeInRightBig');
        }break;
    }
}
function cambia_practica(opc){
    switch(opc)
    {
        case 1:
        {
            $("#prac_2").fadeOut(0);
            $("#prac_3").fadeOut(0);
            $("#prac_4").fadeOut(0);
            $("#prac_1").fadeIn(300);
        }break;
        case 2:
        {
            $("#prac_1").fadeOut(0);
            $("#prac_3").fadeOut(0);
            $("#prac_4").fadeOut(0);
            $("#prac_2").fadeIn(300);
        }break;
        case 3:
        {
            $("#prac_2").fadeOut(0);
            $("#prac_1").fadeOut(0);
            $("#prac_4").fadeOut(0);
            $("#prac_3").fadeIn(300);
        }break;
        case 4:
        {
            $("#prac_2").fadeOut(0);
            $("#prac_3").fadeOut(0);
            $("#prac_1").fadeOut(0);
            $("#prac_4").fadeIn(300);
        }break;
    }
}

function VerificarEvaluacion1(){
    if (document.getElementById('pract1Si').parentNode.id=='Pract1') {
        toastr.success('Has seleccionado la respuesta correcta, continua practicando','Excelente');
    }
    else
    {
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
        limpiarPractica1(2);
    }
}
function limpiarPractica1(opc){
    $("#compenentesPractica1").html(""+
                "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                    "<img id='pract1No1' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no1.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract1No2' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract1No3' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no3.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract1Si' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/si.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract1No4' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no4.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract1No5' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica1/no5.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "</div>");
            //Limpiando espacios libres...
            $("#Pract1").html("");
            if (opc==1) {
                toastr.success('Infomación borrada','Muy Bien');  
            }
}
function VerificarEvaluacion2(){
    if (document.getElementById('pract2Si').parentNode.id=='Pract2') {
        toastr.success('Has seleccionado la respuesta correcta, continua practicando','Excelente');
    }
    else
    {
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
        limpiarPractica2(2);
    }
}
function limpiarPractica2(opc){
    $("#compenentesPractica2").html(""+
                "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                    "<img id='pract2No1' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no4.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract2No2' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract2No3' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no5.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract2No4' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no1.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract2No5' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/no3.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract2Si' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica2/si.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "</div>");
            //Limpiando espacios libres...
            $("#Pract2").html("");
            if (opc==1) {
                toastr.success('Infomación borrada','Muy Bien');  
            }
}
function VerificarEvaluacion3(){
    if (document.getElementById('pract3Si').parentNode.id=='Pract3') {
        toastr.success('Has seleccionado la respuesta correcta, continua practicando','Excelente');
    }
    else
    {
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
        limpiarPractica3(2);
    }
}
function limpiarPractica3(opc){
    $("#compenentesPractica3").html(""+
                "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                    "<img id='pract3No1' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no4.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract3Si' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/si.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract3No2' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no5.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract3No3' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no1.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract3No4' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no3.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract3No5' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica3/no2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "</div>");
            //Limpiando espacios libres...
            $("#Pract3").html("");
            if (opc==1) {
                toastr.success('Infomación borrada','Muy Bien');  
            }
}
function VerificarEvaluacion4(){
    if (document.getElementById('pract4Si').parentNode.id=='Pract4') {
        toastr.success('Has seleccionado la respuesta correcta.','Excelente');
    }
    else
    {
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
        limpiarPractica4(2);
    }
}
function limpiarPractica4(opc){
    $("#compenentesPractica4").html(""+
                "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                    "<img id='pract4No1' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no4.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract4no2' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no5.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract4Si' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/si.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract4No3' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no1.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract4No4' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no3.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pract4No5' src='{{asset('img/iconos/geometria/analitica/pendiente/practicas/practica4/no2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "</div>");
            //Limpiando espacios libres...
            $("#Pract4").html("");
            if (opc==1) {
                toastr.success('Infomación borrada','Muy Bien');  
            }
}
function tour1(){
    var tour = new Tour({
    steps: [{
        element: "#tour1-1",
        title: "Paso 1",
        content: "Presiona cualquiera de los siguientes números para mostrar un ejemplo de pendiente de una recta.",
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
        content: "Visualisa la gráfica que se te presenta en el área \"Segmento de recta\", resuelve el ejercicio en base a lo aprendido la sección de \"Teoría y Ejemplos\", una vez resuelto el ejercicio, arrastra la respuesta correcta al espacio asigando en el área \"Resultado\" y presiona el botón \"Comprobar\" para verificar si la opción seleccionada es la correcta.",
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
        content: "Ingresa los datos correspondientes en los espacios asignados a cada punto, en el área \"Segmento de recta\" podrás visualizar el segmento de recta que se crea en base a los puntos; para conocer la pendiente de la recta, presiona el botón \"Generar\"",
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
function reduce(An,Ad) {
  neg=1; //1 if positive, -1 if negative
  //convert to strings
  var ng=An+'';
  var dg=Ad+''
  if(ng.indexOf('-')!=-1){  //check to see if answer is negative.
    neg=-1
  }
  if(dg.indexOf('-')!=-1){
    neg=-1
  }
  if(ng.indexOf('-')!=-1&&dg.indexOf('-')!=-1)  {//if both numerator and denominator are negative the answer is positive
    neg=1
  }
  var factorX //highest common factor

  if ( An == 0 || Ad == 0 ) {
    factorX=1;
    return;
  }

  An = Math.abs( An );
  Ad = Math.abs( Ad );

  var factorX = 1;

  //Find common factors of Numerator and Denominator
  for ( var x = 2; x <= Math.min( An, Ad ); x ++ ) {
    var check1 = An / x;
    if ( check1 == Math.round( check1 ) ) {
      var check2 = Ad / x;
      if ( check2 == Math.round( check2 ) ) {
        factorX = x;
      }
    }
  }

  An=(An/factorX)*neg;  //divide by highest common factor to reduce fraction then multiply by neg to make positive or negative
  Ad=Ad/factorX;  //divide by highest common factor to reduce fraction
  nuevoAn=An;
  nuevoAd=Ad;
  //console.log("an: ",An," ad: ",Ad);
}
////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
//////// S E G U N D O ---- A C O R D E O N ////////////
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
/////////////FUNCIONES PARA GRAFICAR PUNTOS    
function imprimirP(impresionx1,impresiony1,impresionx2,impresiony2)
{
    document.getElementById("x1p").value=impresionx1;
    document.getElementById("y1p").value=impresiony1;
    document.getElementById("x2p").value=impresionx2;
    document.getElementById("y2p").value=impresiony2;
}
function datoX1P(x1){
    if(x1.value!="")
    {
        console.log(x1.value);
        var x1N = parseInt(x1.value);
        var y1N = parseInt(document.getElementById("y1p").value);
        var x2N = parseInt(document.getElementById("x2p").value);
        var y2N = parseInt(document.getElementById("y2p").value);
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
        brd2 = JXG.JSXGraph.freeBoard(brd2);
        brd2 = JXG.JSXGraph.initBoard('plano2',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
        p12 = brd2.create('point',[x1.value,document.getElementById("y1p").value],{visible:true});
        p22 = brd2.create('point',[document.getElementById("x2p").value,document.getElementById("y2p").value],{visible:true, fillColor: "blue", strokeWidth: 0, highlightFillOpacity: 0.90});
        var s12 = brd2.create('line',[p12, p22],{strokeColor:'#01aeef', straightFirst:true, straightLast:true});
    }
}
function datoY1P(y1){
    if(y1.value!="")
    {
        console.log(y1.value);
        var x1N = parseInt(document.getElementById("x1p").value);
        var y1N = parseInt(y1.value);
        var x2N = parseInt(document.getElementById("x2p").value);
        var y2N = parseInt(document.getElementById("y2p").value);
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
        brd2 = JXG.JSXGraph.freeBoard(brd2);
        brd2 = JXG.JSXGraph.initBoard('plano2',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
        p12 = brd2.createElement('point',[document.getElementById("x1p").value,y1.value],{visible:true});
        p22 = brd2.create('point',[document.getElementById("x2p").value,document.getElementById("y2p").value],{visible:true, fillColor: "blue", strokeWidth: 0, highlightFillOpacity: 0.90});
        var s12 = brd2.create('line',[p12, p22],{strokeColor:'#01aeef', straightFirst:true, straightLast:true});
    }
}
function datoX2P(x2){
    if(x2.value!="")
    {
        console.log(x2.value);
        var x1N = parseInt(document.getElementById("x1p").value);
        var y1N = parseInt(document.getElementById("y1p").value);
        var x2N = parseInt(x2.value);
        var y2N = parseInt(document.getElementById("y2p").value);
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
        brd2 = JXG.JSXGraph.freeBoard(brd2);
        brd2 = JXG.JSXGraph.initBoard('plano2',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
        p12 = brd2.create('point',[document.getElementById("x1p").value,document.getElementById("y1p").value],{visible:true});
        p22 = brd2.create('point',[x2.value,document.getElementById("y2p").value],{visible:true, fillColor: "blue", strokeWidth: 0, highlightFillOpacity: 0.90});
        var s12 = brd2.create('line',[p12, p22],{strokeColor:'#01aeef', straightFirst:true, straightLast:true});
    }
}
function datoY2P(y2){
    if(y2.value!="")
    {
        console.log(y2.value);
        var x1N = parseInt(document.getElementById("x1p").value);
        var y1N = parseInt(document.getElementById("y1p").value);
        var x2N = parseInt(document.getElementById("x2p").value);
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
        brd2 = JXG.JSXGraph.freeBoard(brd2);
        brd2 = JXG.JSXGraph.initBoard('plano2',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
        p12 = brd2.create('point',[document.getElementById("x1p").value,document.getElementById("y1p").value],{visible:true});
        p22 = brd2.create('point',[document.getElementById("x2p").value,y2.value],{visible:true, fillColor: "blue", strokeWidth: 0, highlightFillOpacity: 0.90});
        var s12 = brd2.create('line',[p12, p22],{strokeColor:'#01aeef', straightFirst:true, straightLast:true});
    }
}
function generarResolucionP()
{
    var x1;
    var y1;
    var x2;
    var y2;
    if (document.getElementById("x1p").value!="") {
        x1=parseInt(document.getElementById("x1p").value);
    }
    else
    {
        x1=0;
    }
    if (document.getElementById("y1p").value!="") {
        y1=parseInt(document.getElementById("y1p").value);
    }
    else
    {
        y1=0;
    }
    if (document.getElementById("x2p").value!="") {
        x2=parseInt(document.getElementById("x2p").value);
    }
    else
    {
        x2=1;
    }
    if (document.getElementById("y2p").value!="") {
        y2=parseInt(document.getElementById("y2p").value);
    }
    else
    {
        y2=0;
    }
    //////INICIO DEL PROCEDIMIENTO
    if(x2==1)
    {
        $("#solucionP").html("<center>Conociendo el puntos <b>A("+x1+","+y1+")</b> y su pendiente <b>"+y2+"</b> y tomando en cuenta la fórmula para obtener el punto B,<br><br>"+
            "<font size='3'><b>"+
                "<table border='0'>"+
                    "<tr>"+
                        "<td><b>Bx = ΔX + X<sub>1</sub></b></td>"+
                        "<td><b>&nbsp;&nbsp;|&nbsp;&nbsp;</b></td>"+
                        "<td><b>By = ΔY + Y<sub>1</sub></b></td>"+
                    "</tr>"+
                "</table>"+
            "</b></font><br>"+
            "Sustituyendo los valores en la fórmula obtenemos:"+
            "<br><br>"+
            "</center>");    
    }
    else
    {
        $("#solucionP").html("<center>Conociendo el puntos <b>A("+x1+","+y1+")</b> y su pendiente <b>"+y2+"/"+x2+"</b> y tomando en cuenta la fórmula para obtener el punto B,<br><br>"+
            "<font size='3'><b>"+
                "<table border='0'>"+
                    "<tr>"+
                        "<td><b>Bx = ΔX + X<sub>1</sub></b></td>"+
                        "<td><b>&nbsp;&nbsp;|&nbsp;&nbsp;</b></td>"+
                        "<td><b>By = ΔY + Y<sub>1</sub></b></td>"+
                    "</tr>"+
                "</table>"+
            "</b></font><br>"+
            "Sustituyendo los valores en la fórmula obtenemos:"+
            "<br><br>"+
            "</center>");
    }
    var impreY;
    var impreX;
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
    $("#solucionP").append("<center><font size='3'><b>"+
        "<table border='0'>"+
            "<tr>"+
                "<td><b>Bx = "+x2+" + "+impreX+"</b></td>"+
                "<td><b>&nbsp;&nbsp;|&nbsp;&nbsp;</b></td>"+
                "<td><b>By = "+y2+" + "+impreY+"</b></td>"+
            "</tr>"+
        "</table>"+
    "</b></font><br>"+
    "Sumamos ambos términos y obtenemos los siguientes puntos:"+
    "<br><br>"+
    "</center>");
    var sumaX;
    var sumaY;
    sumaX=x2+x1;
    sumaY=y2+y1;
    $("#solucionP").append("<center>"+
        "<font size='3'>"+
            "<table border='0'>"+
                "<tr>"+
                    "<td><b>Bx = "+sumaX+"</b></td>"+
                    "<td><b>&nbsp;&nbsp;|&nbsp;&nbsp;</b></td>"+
                    "<td><b>By = "+sumaY+"</b></td>"+
                "</tr>"+
            "</table>"+
        "</font>"+
        "<br>"+
        "Con lo cual encontramos el punto B("+sumaX+" , "+sumaY+") y por ende la gráfica con los puntos y pendiente antes conocidos"+
        "<br><br>"+
        "<button type='button' class='btn btn-info btn-rounded' onclick='PuntosP();'><i class='fa fa-repeat'></i>&nbsp;Cambiar Coordenadas</button>"+
    "</center>");
        $("#PuntosP").fadeOut(0);
        $("#espera").fadeOut(0);
        $("#plano2").fadeIn(300);
        $("#ResultadoP").fadeIn(300);
        GraficarFinalP(sumaY,sumaX);
}
function GraficarFinalP(y,x)
{
    var x1N = parseInt(document.getElementById("x1p").value);
    var y1N = parseInt(document.getElementById("y1p").value);
    var x2N;
    if (document.getElementById("x2p").value!="") {
        x2N=parseInt(document.getElementById("x2p").value);
    }
    else
    {
        x2N=1;
    }
    var y2N = parseInt(document.getElementById("y2p").value);
    var mayor;
    var mayorN;
    if (x1N>y1N) {
        if (x1N>x) {
            if (x1N>y) {
                mayor=x1N;
            }
            else
            {
                mayor=y;
            }
        }
        else
        {
            if (x>y) {
                mayor=x;
            }
            else
            {
                mayor=y;
            }
        }
    }
    else
    {
        if (y1N>x) {
            if (y1N>y) {
                mayor=y1N;
            }
            else
            {
                mayor=y;
            }
        }
        else
        {
            if (x>y) {
                mayor=x;
            }
            else
            {
                mayor=y;
            }
        }
    }
    console.log(mayor);
    mayor=mayor+2;
    mayorN=mayor * -1;
    brd2 = JXG.JSXGraph.freeBoard(brd2);
    brd2 = JXG.JSXGraph.initBoard('plano2',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
    p12 = brd2.create('point',[x1N,y1N],{visible:true});
    p22 = brd2.create('point',[x,y],{visible:true, fillColor: "blue", strokeWidth: 0, highlightFillOpacity: 0.90, name: 'B('+x+' , '+y+')'});
    var s12 = brd2.create('line',[p12, p22],{strokeColor:'#01aeef', straightFirst:true, straightLast:true});
    if (x2N==1) {
        console.log("Entro x");
        brd2.create('text',[x1N+1,y1N+1,'m = '+y2N]);
    }
    else
    {
        console.log("Entro y");
        brd2.create('text',[x1N+1,y1N+1, 'm = '+y2N+' / '+x2N]); 
    }
    
}
function limpiarResolucionP(opc){
    if (opc==1) {
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
            //Limpiando el script...
            brd2 = JXG.JSXGraph.initBoard('plano2',{boundingbox:[-4,4,4,-4], keepaspectratio:true, axis:true,showCopyright:false});
            p12 = brd2.create('point',[0,0],{visible:true});
            p22 = brd2.create('point',[0,0],{visible:true, fillColor: "blue", strokeWidth: 0, highlightFillOpacity: 0.90});
            document.getElementById("x1p").value="";
            document.getElementById("x2p").value="";
            document.getElementById("y1p").value="";
            document.getElementById("y2p").value="";
            $("#plano2").fadeOut(0);
            $("#espera").fadeIn(300);
        });//cierre del swal
    }
    else
    {
        brd2 = JXG.JSXGraph.initBoard('plano2',{boundingbox:[-4,4,4,-4], keepaspectratio:true, axis:true,showCopyright:false});
        p12 = brd2.create('point',[0,0],{visible:true});
        p22 = brd2.create('point',[0,0],{visible:true, fillColor: "blue", strokeWidth: 0, highlightFillOpacity: 0.90});
    }
}
limpiarResolucionP(0);
function PuntosP(){
    $("#ResultadoP").fadeOut(0);
    $("#PuntosP").fadeIn(300);
}
////////////
function cambioEjemploP(opc)
{
    switch(opc)
    {
        case 1:
        {
            $("#Ejemplo2P").fadeOut(0);
            $("#Ejemplo3P").fadeOut(0);
            $("#Ejemplo1P").fadeIn(300);
            $('#Ejemplo1P').removeAttr('class').attr('class', '');
            $('#Ejemplo1P').addClass('animated');
            $('#Ejemplo1P').addClass('fadeInRightBig');
        }break;
        case 2:
        {
            $("#Ejemplo1P").fadeOut(0);
            $("#Ejemplo3P").fadeOut(0);
            $("#Ejemplo2P").fadeIn(300);
            $('#Ejemplo2P').removeAttr('class').attr('class', '');
            $('#Ejemplo2P').addClass('animated');
            $('#Ejemplo2P').addClass('fadeInRightBig');
        }break;
        case 3:
        {
            $("#Ejemplo1P").fadeOut(0);
            $("#Ejemplo2P").fadeOut(0);
            $("#Ejemplo3P").fadeIn(300);
            $('#Ejemplo3P').removeAttr('class').attr('class', '');
            $('#Ejemplo3P').addClass('animated');
            $('#Ejemplo3P').addClass('fadeInRightBig');
        }break;
    }
}
function cambia_practicaP(opc){
    switch(opc)
    {
        case 1:
        {
            $("#prac_2P").fadeOut(0);
            $("#prac_3P").fadeOut(0);
            $("#prac_4P").fadeOut(0);
            $("#prac_1P").fadeIn(300);
        }break;
        case 2:
        {
            $("#prac_1P").fadeOut(0);
            $("#prac_3P").fadeOut(0);
            $("#prac_4P").fadeOut(0);
            $("#prac_2P").fadeIn(300);
        }break;
        case 3:
        {
            $("#prac_2P").fadeOut(0);
            $("#prac_1P").fadeOut(0);
            $("#prac_4P").fadeOut(0);
            $("#prac_3P").fadeIn(300);
        }break;
        case 4:
        {
            $("#prac_2P").fadeOut(0);
            $("#prac_3P").fadeOut(0);
            $("#prac_1P").fadeOut(0);
            $("#prac_4P").fadeIn(300);
        }break;
    }
}
function VerificarEvaluacion1P(){
    if ($('input:radio[name=1rpe]:checked').val()==1) {
        $("#False2P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#False5P1").fadeOut(0);
        $("#True1P1").fadeIn(300);
        toastr.success('Has seleccionado la respuesta correcta, continua practicando','Excelente');
    } else {
        $("#True1P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==2) {
        $("#True1P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#False5P1").fadeOut(0);
        $("#False2P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False2P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==3) {
        $("#True1P1").fadeOut(0);
        $("#False2P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#False5P1").fadeOut(0);
        $("#False3P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False3P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==4) {
        $("#True1P1").fadeOut(0);
        $("#False2P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#False5P1").fadeOut(0);
        $("#False4P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False4P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==5) {
        $("#True1P1").fadeOut(0);
        $("#False2P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        $("#False5P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False5P1").fadeOut(0);
    }
    if ($('input:radio[name=1rpe]:checked').val()==6) {
        $("#True1P1").fadeOut(0);
        $("#False2P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#False5P1").fadeOut(0);
        $("#False6P1").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False6P1").fadeOut(0);
    }
}
function VerificarEvaluacion2P(){
    if ($('input:radio[name=2rpe]:checked').val()==1) {
        $("#False2P2").fadeOut(0);
        $("#True4P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        $("#False3P2").fadeOut(0);
        $("#False1P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False1P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val()==2) {
        $("#False1P2").fadeOut(0);
        $("#True4P2").fadeOut(0);
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
        $("#True4P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        $("#False3P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False3P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val()==4) {
        $("#False1P2").fadeOut(0);
        $("#False2P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        $("#False3P2").fadeOut(0);
        $("#True4P2").fadeIn(300);
        toastr.success('Has seleccionado la respuesta correcta, continua practicando','Excelente');
    } else {
        $("#True4P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val()==5) {
        $("#False1P2").fadeOut(0);
        $("#False2P2").fadeOut(0);
        $("#True4P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        $("#False3P2").fadeOut(0);
        $("#False5P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False5P2").fadeOut(0);
    }
    if ($('input:radio[name=2rpe]:checked').val()==6) {
        $("#False1P2").fadeOut(0);
        $("#False2P2").fadeOut(0);
        $("#True4P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#False3P2").fadeOut(0);
        $("#False6P2").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False6P2").fadeOut(0);
    }
}
function VerificarEvaluacion3P(){
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
function VerificarEvaluacion4P(){
    if ($('input:radio[name=4rpe]:checked').val()==1) {
        $("#False2P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#True5P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        $("#False4P4").fadeOut(0);
        $("#False1P4").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False1P4").fadeOut(0);
    }
    if ($('input:radio[name=4rpe]:checked').val()==2) {
        $("#False1P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#False4P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        $("#True5P4").fadeOut(0);
        $("#False2P4").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False2P4").fadeOut(0);
    }
    if ($('input:radio[name=4rpe]:checked').val()==3) {
        $("#False1P4").fadeOut(0);
        $("#False2P4").fadeOut(0);
        $("#False4P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        $("#True5P4").fadeOut(0);
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
        $("#True5P4").fadeOut(0);
        $("#False4P4").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False4P4").fadeOut(0);
    }
    if ($('input:radio[name=4rpe]:checked').val()==5) {
        $("#False1P4").fadeOut(0);
        $("#False2P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#False4P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        $("#True5P4").fadeIn(300);
        toastr.success('Has seleccionado la respuesta correcta','Excelente');
    } else {
        $("#True5P4").fadeOut(0);
    }
    if ($('input:radio[name=4rpe]:checked').val()==6) {
        $("#False1P4").fadeOut(0);
        $("#False2P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#False4P4").fadeOut(0);
        $("#True5P4").fadeOut(0);
        $("#False6P4").fadeIn(300);
        toastr.error('Has seleccionado la respuesta incorrecta','Lo Siento');
    } else {
        $("#False6P4").fadeOut(0);
    }
}
function tour3(){
    var tour = new Tour({
    steps: [{
        element: "#tour3-1",
        title: "Paso 1",
        content: "Presiona cualquiera de los siguientes números para mostrar un ejemplo de pendiente de una recta.",
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
        element: "#tour3-2",
        title: "Paso 2",
        content: "Visualisa la información que se te presenta en el ejercicio, resuelvelo en base a lo aprendido la sección de \"Teoría\", una vez resuelto el ejercicio, selecciona la gráfica correcta acorde al ejercicio propuesto.",
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
function tour4(){
    var tour = new Tour({
    steps: [{
        element: "#tour4-1",
        title: "Paso 1",
        content: "Ingresa los datos correspondientes en los espacios asignados a cada punto en el área \"Información\", en el área \"Segmento de recta\" podrás visualizar la gráfica en base al punto y pendiente ingresado como el punto obtenido en la operación; para conocer el siguiente punto de la recta, presiona el botón \"Generar\"",
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