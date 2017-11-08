<div class="ibox float-e-margins animated fadeInUpBig">
    <div class="ibox-title">
        <h5>Geometría -
            <small> Punto Pendiente</small>
        </h5>
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
                                <div class="col-lg-12">
                                    Una ecuación lineal en su forma punto-pendiente nos proporciona la pendiente de una
                                    recta y las coordenadas de un punto en ella.
                                    <br><br>
                                    La forma punto-pendiente de una ecuación lineal se escribe como <b>(y -
                                        y<sub>1</sub>) = m (x - x<sub>1</sub>)</b>. En ésta ecuación, <b>m</b> es la
                                    pendiente y <b>(x<sub>1</sub>, y<sub>1</sub>)</b> son las coordenadas del punto.
                                    <br><br>
                                    Veamos de dónde es que viene ésta fórmula de punto-pendiente. Aquí está la gráfica
                                    de una recta genérica con dos puntos trazados en ella.
                                    <br><br>
                                    <div class="well">
                                        <div class="row diff-wrapper">
                                            <center>
                                                <img src="{{asset('img/iconos/geometria/recta/puntopendiente/teoria.png')}}"
                                                     width="350px">
                                            </center>
                                        </div>
                                    </div>
                                    La pendiente de la recta "aumenta conforme va". Ése es el cambio vertical entre dos
                                    puntos (la diferencia entre las coordenadas en y) dividida entre el cambio
                                    horizontal sobre el mismo segmento (la diferencia entre las corneadas en x). Esto
                                    puede escribirse como:
                                    <br><br>
                                    <center><b>
                                            <table border="0">
                                                <tr>
                                                    <td rowspan="2">m =</td>
                                                    <td style="border-bottom: 1px black solid;">Y<sub>2</sub> –
                                                        Y<sub>1</sub></td>
                                                </tr>
                                                <tr>
                                                    <td>X<sub>2</sub> – X<sub>1</sub></td>
                                                </tr>
                                            </table>
                                        </b></center>
                                    <br><br>
                                    A esta ecucación se le conoce como fórmula de la pendiente.
                                    <br><br>
                                    Ahora digamos que uno de esos puntos es un punto genérico (x, y), lo cual significa
                                    que puede ser cualquier punto en la recta, y el otro punto es un punto específico,
                                    (x<sub>1</sub>, y<sub>1</sub>) .
                                    <br><br>
                                    Si sustituimos éstas coordenadas en la fórmula de la pendiente y la simplificamos:
                                    <br><br>
                                    <div class="well">
                                        <div class="row diff-wrapper">
                                            <center><b>
                                                    <table border="0">
                                                        <tr>
                                                            <td rowspan="2">m =</td>
                                                            <td style="border-bottom: 1px black solid;">Y –
                                                                Y<sub>1</sub></td>
                                                        </tr>
                                                        <tr>
                                                            <td>X – X<sub>1</sub></td>
                                                        </tr>
                                                    </table>
                                                    <br><br>
                                                    <table border="0">
                                                        <tr>
                                                            <td rowspan="2">(x - x<sub>1</sub>)m =</td>
                                                            <td style="border-bottom: 1px black solid;">Y<sub>2</sub> –
                                                                Y<sub>1</sub></td>
                                                            <td rowspan='2'>(x - x<sub>1</sub>)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>X<sub>2</sub> – X<sub>1</sub></td>
                                                        </tr>
                                                    </table>
                                                    <br><br>
                                                    (x - x<sub>1</sub>)m = (y - y<sub>1</sub>)
                                                    <br><br>
                                                    (y - y<sub>1</sub>) = m (x - x<sub>1</sub>)
                                                </b></center>
                                        </div>
                                    </div>
                                    (y - y<sub>1</sub>) = m (x - x<sub>1</sub>) es el punto-pendiente de la fórmula.
                                    Hemos convertido la fórmula de la pendiente en la fórmula punto-pendiente. No lo
                                    hicimos sólo por diversión, sino porque la fórmula punto-pendiente es a veces más
                                    útil que la fórmula de la pendiente, por ejemplo cuando necesitamos encontrar la
                                    ecuación de una recta dados un punto y la pendiente.
                                </div>
                            </div>
                        </div><!--panel body teoría-->
                    </div><!--cieere div collpase-->
                </div><!--cierre panel defaul teoría-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><b>Ejemplos</b></a>
                            <div class="nav navbar-top-links navbar-right ">
                                <div class="col-lg-3">
                                    <button type="button" onclick="tour1()" class="btn btn-primary btn-xs"><i
                                                class="fa fa-question-circle"></i></button>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="row" id="tour1-1">
                                        <div class="col-xs-12">
                                            <div align="center">
                                                <button class="btn btn-outline btn-primary dim" type="button"
                                                        onclick="cambioEjemplo(1)">1
                                                </button>
                                                <button class="btn btn-outline btn-primary dim" type="button"
                                                        onclick="cambioEjemplo(2)">2
                                                </button>
                                                <button class="btn btn-outline btn-primary dim" type="button"
                                                        onclick="cambioEjemplo(3)">3
                                                </button>
                                                <button class="btn btn-outline btn-primary dim" type="button"
                                                        onclick="cambioEjemplo(4)">4
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox">
                                        <div class="ibox-content" id="tour1-2">
                                            <div class="row animated fadeInRightBig" id="Ejemplo1">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img
                                                                                src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font
                                                                                size="4"><i><b>Problema</b></i></font>
                                                                    </center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p style="text-align: justify;">
                                                                                Hallar la ecuación de la recta que pasa
                                                                                por el punto <b>A(1,5)</b> y tiene
                                                                                pendiente <b>2</b>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-xs-12">Primero identificamos cada elemento
                                                                de la fórmula:
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3">
                                                                            <center>
                                                                                m = <b>2</b>
                                                                                <br><br>
                                                                                x<sub>1</sub> = <b>1</b>
                                                                                <br><br>
                                                                                y<sub>1</sub> = <b>5</b>
                                                                            </center>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">Los sustituimos en la fórmula del
                                                                punto pendiente y simplificamos la operación:
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3">
                                                                            <center>
                                                                                y - y<sub>1</sub> = m (x - x<sub>1</sub>)
                                                                                <br><br>
                                                                                y - 5 = 2 (x - 1)
                                                                                <br><br>
                                                                                y -5 = 2x - 2
                                                                            </center>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                Por lo tanto la ecuación punto-pendite de la recta es:
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3"><b>y -5 = 2x -
                                                                                2</b></font><br><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img
                                                                                    src="img/iconos/generales/target.png">&nbsp;&nbsp;<font
                                                                                    size="4"><i><b>Punto de
                                                                                        apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <p style="text-align: justify;">
                                                                            <br>
                                                                            Sean los puntos de una recta L:
                                                                            A(x<sub>1</sub>, y<sub>1</sub>), B(x, y) un
                                                                            punto arbitrario de ella. Su pendiente es:
                                                                            <br><br>
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td style="border-bottom: 1px black solid;">
                                                                                    Y – Y<sub>1</sub></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>X – X<sub>1</sub></td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        De aquí obtienes la ecuación punto pendiente que
                                                                        se escribe así: <b>y – y<sub>1</sub> = m( x –
                                                                            x<sub>1</sub>)</b>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;"
                                                 id="Ejemplo2">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img
                                                                                src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font
                                                                                size="4"><i><b>Problema</b></i></font>
                                                                    </center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p style="text-align: justify;">
                                                                                Encuentra la ecuación de la recta que
                                                                                pasa por el punto <b>( – 5, 4 )</b>, si
                                                                                su pendiente es
                                                                                <b><sup>3</sup>/<sub>5</sub></b>5
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-xs-12">Primero identificamos cada elemento
                                                                de la fórmula:
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3">
                                                                            <center>
                                                                                m = <b><sup>3</sup>/<sub>5</sub></b>
                                                                                <br><br>
                                                                                x<sub>1</sub> = <b>-5</b>
                                                                                <br><br>
                                                                                y<sub>1</sub> = <b>4</b>
                                                                            </center>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">Los sustituimos en la fórmula del
                                                                punto pendiente y simplificamos la operación:
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3">
                                                                            <center>
                                                                                y - y<sub>1</sub> = m (x - x<sub>1</sub>)
                                                                                <br><br>
                                                                                y - 4 = <sup>3</sup>/<sub>5</sub> (x -
                                                                                (-5))
                                                                                <br><br>
                                                                                y - 4 = <sup>3</sup>/<sub>5</sub> (x +
                                                                                5)
                                                                                <br><br>
                                                                                y - 4 = <sup>3</sup>/<sub>5</sub>x +
                                                                                3</sub>
                                                                            </center>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                Por lo tanto la ecuación punto pendiente de la recta es:
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3"><b>y - 4 =
                                                                                <sup>3</sup>/<sub>5</sub>x +
                                                                                3</b></font><br><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img
                                                                                    src="img/iconos/generales/target.png">&nbsp;&nbsp;<font
                                                                                    size="4"><i><b>Punto de
                                                                                        apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <p style="text-align: justify;">
                                                                            <br>
                                                                            Sean los puntos de una recta L:
                                                                            A(x<sub>1</sub>, y<sub>1</sub>), B(x, y) un
                                                                            punto arbitrario de ella. Su pendiente es:
                                                                            <br><br>
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td style="border-bottom: 1px black solid;">
                                                                                    Y – Y<sub>1</sub></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>X – X<sub>1</sub></td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        De aquí obtienes la ecuación punto pendiente que
                                                                        se escribe así: <b>y – y<sub>1</sub> = m( x –
                                                                            x<sub>1</sub>)</b>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;"
                                                 id="Ejemplo3">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img
                                                                                src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font
                                                                                size="4"><i><b>Problema</b></i></font>
                                                                    </center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p style="text-align: justify;">
                                                                                Determina la ecuación de la recta que
                                                                                pasa por los puntos A( – 3, 2) y B(4, –
                                                                                1)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-xs-12">A diferencia de los ejemplos
                                                                anteriores, en este caso no conocemos la pendiente,
                                                                siendo esto lo que debemos encontrar primero :
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3">
                                                                            <center>
                                                                                <table border="0">
                                                                                    <tr>
                                                                                        <td rowspan="2"> m =</td>
                                                                                        <td style="border-bottom: 1px black solid;">
                                                                                            y<sub>2</sub> -
                                                                                            y<sub>1</sub></td>
                                                                                        <td rowspan="2">&nbsp;=&nbsp;
                                                                                        </td>
                                                                                        <td style="border-bottom: 1px black solid;">
                                                                                            -1 - 2
                                                                                        </td>
                                                                                        <td rowspan="2">&nbsp;=&nbsp;
                                                                                        </td>
                                                                                        <td style="border-bottom: 1px black solid;">
                                                                                            -1 - 2
                                                                                        </td>
                                                                                        <td rowspan="2">&nbsp;=&nbsp;
                                                                                        </td>
                                                                                        <td style="border-bottom: 1px black solid;">
                                                                                            <b> - 3</b></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>x<sub>2</sub> -
                                                                                            x<sub>1</sub></td>
                                                                                        <td>4 - (-3)</td>
                                                                                        <td>4 + 3</td>
                                                                                        <td><b>&nbsp;7</b></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </center>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">Ahora que conocemos la pendiente
                                                                sustituimos en la fórmula del punto pendiente cualquiera
                                                                de los dos puntos dados y simplificamos la operación,
                                                                para este ejemplo tomaremos el punto
                                                                A
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3">
                                                                            <center>
                                                                                y - y<sub>1</sub> = m (x - x<sub>1</sub>)
                                                                                <br><br>
                                                                                y - 2 = - <sup>3</sup>/<sub>7</sub> (x +
                                                                                3)
                                                                                <br><br>
                                                                                y - 2 = - <sup>3</sup>/<sub>7</sub>x -
                                                                                <sup>9</sup>/<sub>7</sub>
                                                                            </center>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                Por lo tanto la ecuación de la recta es:
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3"><b>y - 2 = -
                                                                                <sup>3</sup>/<sub>7</sub>x -
                                                                                <sup>9</sup>/<sub>7</sub></b></font><br><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img
                                                                                    src="img/iconos/generales/target.png">&nbsp;&nbsp;<font
                                                                                    size="4"><i><b>Punto de
                                                                                        apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <p style="text-align: justify;">
                                                                            <br>
                                                                            Dado que no se conoce la pendiente de los
                                                                            puntos dados, es esto lo primero que debemos
                                                                            encontrar, para lograr eso utilizamos la
                                                                            fórmula de la pendiente
                                                                            <br><br>
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m =</td>
                                                                                <td style="border-bottom: 1px black solid;">
                                                                                    Y – Y<sub>1</sub></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>X – X<sub>1</sub></td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        De aquí obtienes la ecuación punto pendiente que
                                                                        se escribe así: <b>y – y<sub>1</sub> = m( x –
                                                                            x<sub>1</sub>)</b>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;"
                                                 id="Ejemplo4">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img
                                                                                src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font
                                                                                size="4"><i><b>Problema</b></i></font>
                                                                    </center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p style="text-align: justify;">
                                                                                Hallar la ecuación de la recta punto
                                                                                pendiente que pasa por los puntos <b>A(
                                                                                    4 , 2 )</b> y <b>B (-5 , 7)</b>

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-xs-12">A diferencia de los ejemplos
                                                                anteriores, en este caso no conocemos la pendiente,
                                                                siendo esto lo que debemos encontrar primero :
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3">
                                                                            <center>
                                                                                <table border="0">
                                                                                    <tr>
                                                                                        <td rowspan="2"> m =</td>
                                                                                        <td style="border-bottom: 1px black solid;">
                                                                                            y<sub>2</sub> -
                                                                                            y<sub>1</sub></td>
                                                                                        <td rowspan="2">&nbsp;=&nbsp;
                                                                                        </td>
                                                                                        <td style="border-bottom: 1px black solid;">
                                                                                            7 - 2
                                                                                        </td>
                                                                                        <td rowspan="2">&nbsp;=&nbsp;
                                                                                        </td>
                                                                                        <td style="border-bottom: 1px black solid;">
                                                                                            &nbsp;5
                                                                                        </td>
                                                                                        <td rowspan="2">&nbsp;=&nbsp;
                                                                                        </td>
                                                                                        <td style="border-bottom: 1px black solid;">
                                                                                            <b> - 5</b></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>x<sub>2</sub> -
                                                                                            x<sub>1</sub></td>
                                                                                        <td>-5 - 4</td>
                                                                                        <td>-9</td>
                                                                                        <td><b>&nbsp;9</b></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </center>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">Ahora que conocemos la pendiente
                                                                sustituimos en la fórmula del punto pendiente cualquiera
                                                                de los dos puntos dados y simplificamos la operación,
                                                                para este ejemplo tomaremos el punto
                                                                A
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3">
                                                                            <center>
                                                                                y - y<sub>1</sub> = m (x - x<sub>1</sub>)
                                                                                <br><br>
                                                                                y - 2 = - <sup>5</sup>/<sub>9</sub> (x +
                                                                                4)
                                                                                <br><br>
                                                                                y - 2 = - <sup>5</sup>/<sub>9</sub>x -
                                                                                <sup>20</sup>/<sub>9</sub>
                                                                            </center>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                Por lo tanto la ecuación de la recta es:
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                        <font size="3"><b>y - 2 = -
                                                                                <sup>5</sup>/<sub>9</sub>x -
                                                                                <sup>20</sup>/<sub>9</b></font><br><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img
                                                                                    src="img/iconos/generales/target.png">&nbsp;&nbsp;<font
                                                                                    size="4"><i><b>Punto de
                                                                                        apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <p style="text-align: justify;">
                                                                            <br>
                                                                            Dado que no se conoce la pendiente de los
                                                                            puntos dados, es esto lo primero que debemos
                                                                            encontrar, para lograr eso utilizamos la
                                                                            fórmula de la pendiente
                                                                            <br><br>
                                                                        <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2">m =</td>
                                                                                <td style="border-bottom: 1px black solid;">
                                                                                    Y – Y<sub>1</sub></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>X – X<sub>1</sub></td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                        De aquí obtienes la ecuación punto pendiente que
                                                                        se escribe así: <b>y – y<sub>1</sub> = m( x –
                                                                            x<sub>1</sub>)</b>
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
                        </div>
                    </div>
                </div><!--cierre de la segunda pestaña del acordeon....-->
                <!--acordeon paso 2...-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><b>Práctica</b></a>
                            <div class="nav navbar-top-links navbar-right ">
                                <div class="col-lg-3">
                                    <button type="button" onclick="tour2()" class="btn btn-primary btn-xs"><i
                                                class="fa fa-question-circle"></i></button>
                                </div>
                            </div>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="ibox">
                                        <div class="ibox-content" id="tour2-1">
                                            <div class="row animated fadeInRightBig" id="resol_ejercicios">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Infórmacion</strong><br>
                                                                        Selecciona el tipo de ejercicio que se te
                                                                        plantea, si conoces la pendiente o solo tienes
                                                                        los puntos, Ingresa los valores en los campos
                                                                        correspondientes. Luego de ello presiona el
                                                                        botón "Generar" para conocer el resultado y
                                                                        procedimiento.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class=" col-sm-offset-3 col-sm-3">
                                                                    <button id="btnPendiente" type="buton"
                                                                            onclick="onSelectExercise(1)"
                                                                            class="btn btn-info animation_select"
                                                                            data-animation="flipInX">Pendiente
                                                                    </button>
                                                                </div>
                                                                <div type="button" class="col-sm-3">
                                                                    <button id="btnPuntos" onclick="onSelectExercise(2)"
                                                                            class="btn btn-white animation_select"
                                                                            data-animation="flipInX">Coordenadas
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-ms-12">
                                                                    <div id="Puntos" class="alert alert-warning">
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td colspan="3">
                                                                                    <center><b>Punto A</b></center>
                                                                                </td>
                                                                                <td>&nbsp;</td>
                                                                                <td>
                                                                                    <center><b>Pendiente</b></center>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="30%">
                                                                                    <center>X<sub>1</sub></center>
                                                                                </td>
                                                                                <td>&nbsp;</td>
                                                                                <td width="30%">
                                                                                    <center>Y<sub>1</sub></center>
                                                                                </td>
                                                                                <td>&nbsp;</td>
                                                                                <td width="30%">
                                                                                    <center>&nbsp;</center>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="number" placeholder="?"
                                                                                           class="form-control" value=""
                                                                                           id="x1P" width="100%"></td>
                                                                                <td>&nbsp;</td>
                                                                                <td><input type="number" placeholder="?"
                                                                                           class="form-control" value=""
                                                                                           id="y1P" width="100%"></td>
                                                                                <td>&nbsp;</td>
                                                                                <td><input type="number" placeholder="?"
                                                                                           class="form-control" value=""
                                                                                           id="mUpP" width="100%"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">&nbsp;</td>
                                                                                <td style="border-bottom: 1px solid black"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4">&nbsp;</td>
                                                                                <td><input type="number" placeholder="?"
                                                                                           class="form-control" value=""
                                                                                           id="mDownP" width="100%">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3">
                                                                                    <center>
                                                                                        <button type="button"
                                                                                                class="btn btn-danger btn-rounded"
                                                                                                onclick="limpiarResolucionP();">
                                                                                            <i class="fa fa-repeat"></i>&nbsp;Reestablecer
                                                                                        </button>
                                                                                    </center>
                                                                                </td>
                                                                                <td>&nbsp;</td>
                                                                                <td colspan="3">
                                                                                    <center>
                                                                                        <button type="button"
                                                                                                class="btn btn-primary btn-rounded"
                                                                                                onclick="generarResolucionP();">
                                                                                            <i class="fa fa-check"></i>&nbsp;Generar
                                                                                        </button>
                                                                                    </center>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div id="coordenadas" style="display: none;"
                                                                         class="alert alert-warning">
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td colspan="3">
                                                                                    <center><b>Punto A</b></center>
                                                                                </td>
                                                                                <td>&nbsp;</td>
                                                                                <td colspan="3">
                                                                                    <center><b>Punto B</b></center>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="20%">
                                                                                    <center>X<sub>1</sub></center>
                                                                                </td>
                                                                                <td>&nbsp;</td>
                                                                                <td width="20%">
                                                                                    <center>Y<sub>1</sub></center>
                                                                                </td>
                                                                                <td>&nbsp;</td>
                                                                                <td width="20%">
                                                                                    <center>X<sub>2</sub></center>
                                                                                </td>
                                                                                <td>&nbsp;</td>
                                                                                <td width="20%">
                                                                                    <center>Y<sub>2</sub></center>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><input type="number" placeholder="?"
                                                                                           class="form-control" value=""
                                                                                           id="x1C" width="100%"></td>
                                                                                <td>&nbsp;</td>
                                                                                <td><input type="number" placeholder="?"
                                                                                           class="form-control" value=""
                                                                                           id="y1C" width="100%"></td>
                                                                                <td>&nbsp;</td>
                                                                                <td><input type="number" placeholder="?"
                                                                                           class="form-control" value=""
                                                                                           id="x2C" width="100%"></td>
                                                                                <td>&nbsp;</td>
                                                                                <td><input type="number" placeholder="?"
                                                                                           class="form-control" value=""
                                                                                           id="y2C" width="100%"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3">
                                                                                    <center>
                                                                                        <button type="button"
                                                                                                class="btn btn-danger btn-rounded"
                                                                                                onclick="limpiarResolucionC();">
                                                                                            <i class="fa fa-repeat"></i>&nbsp;Reestablecer
                                                                                        </button>
                                                                                    </center>
                                                                                </td>
                                                                                <td>&nbsp;</td>
                                                                                <td colspan="3">
                                                                                    <center>
                                                                                        <button type="button"
                                                                                                class="btn btn-primary btn-rounded"
                                                                                                onclick="generarResolucionC();">
                                                                                            <i class="fa fa-check"></i>&nbsp;Generar
                                                                                        </button>
                                                                                    </center>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div id="Resultado" class="alert alert-success"
                                                                         style="display: none;">
                                                                        <div id="solucion">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="grafica" style="display: none;">
                                                        <div class="col-md-12">
                                                            <div class="alert alert-info">
                                                                <strong>Segmento de Recta</strong><br>
                                                                En esta sección se te mostrara los segmentos de recta
                                                                según los puntos que tú ingreses en el área <b>"Información"</b>.
                                                            </div>
                                                            <center>
                                                                <div class="jxgbox" id="plano1"
                                                                     style="width: 400px;height: 400px; "></div>
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
    //resolucion de ejercicios
    var nuevoAd;
    var nuevoAn;
    var enteroMultiGlobal;
    var numeradorMultiGlobal;
    var denominadorMultiGlobal;
    /////////////FUNCIONES PARA GRAFICAR PUNTOS
    function limpiarResolucion() {
        brd = JXG.JSXGraph.initBoard('plano1', {
            boundingbox: [-4, 4, 4, -4],
            keepaspectratio: true,
            axis: true,
            showCopyright: false
        });
        p1 = brd.create('point', [0, 0], {visible: true});
        p2 = brd.create('point', [0, 0], {visible: true});
        var t = brd.create('text', [0.1, 0.1, function () {
            var impresionx1 = p1.X();
            var impresiony1 = p1.Y();
            var impresionx2 = p2.X();
            var impresiony2 = p2.Y();
            imprimir(impresionx1, impresiony1, impresionx2, impresiony2);
            return impresionx1;
        }
        ]);
    }
    //limpiarResolucion();
    function imprimir(impresionx1, impresiony1, impresionx2, impresiony2) {
        document.getElementById("x1").value = impresionx1;
        document.getElementById("y1").value = impresiony1;
        document.getElementById("x2").value = impresionx2;
        document.getElementById("y2").value = impresiony2;
    }
    function datoX1(x1) {
        if (x1.value != "") {
            console.log(x1.value);
            var x1N = parseInt(x1.value);
            var y1N = parseInt(document.getElementById("y1").value);
            var x2N = parseInt(document.getElementById("x2").value);
            var y2N = parseInt(document.getElementById("y2").value);
            var mayor;
            var mayorN;
            if (x1N > y1N) {
                if (x1N > x2N) {
                    if (x1N > y2N) {
                        mayor = x1N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
                else {
                    if (x2N > y2N) {
                        mayor = x2N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
            }
            else {
                if (y1N > x2N) {
                    if (y1N > y2N) {
                        mayor = y1N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
                else {
                    if (x2N > y2N) {
                        mayor = x2N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
            }
            console.log(mayor);
            mayor = mayor + 2;
            mayorN = mayor * -1;
            brd = JXG.JSXGraph.freeBoard(brd);
            brd = JXG.JSXGraph.initBoard('plano1', {
                boundingbox: [mayorN, mayor, mayor, mayorN],
                keepaspectratio: true,
                axis: true,
                showCopyright: false
            });
            p1 = brd.create('point', [x1.value, document.getElementById("y1").value], {visible: true});
            p2 = brd.create('point', [document.getElementById("x2").value, document.getElementById("y2").value], {visible: true});
            var s1 = brd.create('segment', [p1, p2], {strokeColor: '#01aeef'});
        }
    }
    function datoY1(y1) {
        if (y1.value != "") {
            console.log(y1.value);
            var x1N = parseInt(document.getElementById("x1").value);
            var y1N = parseInt(y1.value);
            var x2N = parseInt(document.getElementById("x2").value);
            var y2N = parseInt(document.getElementById("y2").value);
            var mayor;
            var mayorN;
            if (x1N > y1N) {
                if (x1N > x2N) {
                    if (x1N > y2N) {
                        mayor = x1N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
                else {
                    if (x2N > y2N) {
                        mayor = x2N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
            }
            else {
                if (y1N > x2N) {
                    if (y1N > y2N) {
                        mayor = y1N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
                else {
                    if (x2N > y2N) {
                        mayor = x2N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
            }
            console.log(mayor);
            mayor = mayor + 2;
            mayorN = mayor * -1;
            brd = JXG.JSXGraph.freeBoard(brd);
            brd = JXG.JSXGraph.initBoard('plano1', {
                boundingbox: [mayorN, mayor, mayor, mayorN],
                keepaspectratio: true,
                axis: true,
                showCopyright: false
            });
            p1 = brd.createElement('point', [document.getElementById("x1").value, y1.value], {visible: true});
            p2 = brd.create('point', [document.getElementById("x2").value, document.getElementById("y2").value], {visible: true});
            var s1 = brd.create('segment', [p1, p2], {strokeColor: '#01aeef'});
        }
    }
    function datoX2(x2) {
        if (x2.value != "") {
            console.log(x2.value);
            var x1N = parseInt(document.getElementById("x1").value);
            var y1N = parseInt(document.getElementById("y1").value);
            var x2N = parseInt(x2.value);
            var y2N = parseInt(document.getElementById("y2").value);
            var mayor;
            var mayorN;
            if (x1N > y1N) {
                if (x1N > x2N) {
                    if (x1N > y2N) {
                        mayor = x1N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
                else {
                    if (x2N > y2N) {
                        mayor = x2N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
            }
            else {
                if (y1N > x2N) {
                    if (y1N > y2N) {
                        mayor = y1N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
                else {
                    if (x2N > y2N) {
                        mayor = x2N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
            }
            console.log(mayor);
            mayor = mayor + 2;
            mayorN = mayor * -1;
            brd = JXG.JSXGraph.freeBoard(brd);
            brd = JXG.JSXGraph.initBoard('plano1', {
                boundingbox: [mayorN, mayor, mayor, mayorN],
                keepaspectratio: true,
                axis: true,
                showCopyright: false
            });
            p1 = brd.create('point', [document.getElementById("x1").value, document.getElementById("y1").value], {visible: true});
            p2 = brd.create('point', [x2.value, document.getElementById("y2").value], {visible: true});
            var s1 = brd.create('segment', [p1, p2], {strokeColor: '#01aeef'});
        }
    }
    function datoY2(y2) {
        if (y2.value != "") {
            console.log(y2.value);
            var x1N = parseInt(document.getElementById("x1").value);
            var y1N = parseInt(document.getElementById("y1").value);
            var x2N = parseInt(document.getElementById("x2").value);
            var y2N = parseInt(y2.value);
            var mayor;
            var mayorN;
            if (x1N > y1N) {
                if (x1N > x2N) {
                    if (x1N > y2N) {
                        mayor = x1N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
                else {
                    if (x2N > y2N) {
                        mayor = x2N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
            }
            else {
                if (y1N > x2N) {
                    if (y1N > y2N) {
                        mayor = y1N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
                else {
                    if (x2N > y2N) {
                        mayor = x2N;
                    }
                    else {
                        mayor = y2N;
                    }
                }
            }
            console.log(mayor);
            mayor = mayor + 2;
            mayorN = mayor * -1;
            brd = JXG.JSXGraph.freeBoard(brd);
            brd = JXG.JSXGraph.initBoard('plano1', {
                boundingbox: [mayorN, mayor, mayor, mayorN],
                keepaspectratio: true,
                axis: true,
                showCopyright: false
            });
            p1 = brd.create('point', [document.getElementById("x1").value, document.getElementById("y1").value], {visible: true});
            p2 = brd.create('point', [document.getElementById("x2").value, y2.value], {visible: true});
            var s1 = brd.create('segment', [p1, p2], {strokeColor: '#01aeef'});
        }
    }
    function generarResolucionC() {

        var x1C;
        var y1C;
        var x2C;
        var y2C;
        if (document.getElementById("x1C").value != 0) {
            x1C = parseInt(document.getElementById("x1C").value);
        }
        else {
            x1C = 0;
        }
        if (document.getElementById("y1C").value != 0) {
            y1C = parseInt(document.getElementById("y1C").value);
        }
        else {
            y1C = 0;
        }
        if (document.getElementById("x2C").value != 0) {
            x2C = parseInt(document.getElementById("x2C").value);
        }
        else {
            x2C = 0;
        }
        if (document.getElementById("y2C").value != 0) {
            y2C = parseInt(document.getElementById("y2C").value);
        }
        else {
            y2C = 0;
        }
        console.log("Datos obtenidos: ", x1C, y1C, x2C, y2C);
        //////INICIO DEL PROCEDIMIENTO
        /*$("#solucion").html("<center>Conociendo los puntos A("+x1+","+y1+"), B("+x2+","+y2+") de la primera recta y los puntos C("+xx1+","+yy1+"), D("+xx2+","+yy2+"), tomando en cuenta la fórmula para encontrar la pendiente, obtenemos:<br><br>"+
         "<font size='3'><b><table border='0' style='text-align: center;'>"+
         "<tr>"+
         "<td rowspan='2'><b>m<sub>AB</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>y<sub>2</sub> - y<sub>1</sub></td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td rowspan='2'><b>m<sub>CD</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>y<sub>2</sub> - y<sub>1</sub></td>"+
         "</tr>"+
         "<tr>"+
         "<td>x<sub>2</sub> - x<sub>1</sub></td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td>x<sub>2</sub> - x<sub>1</sub></td>"+
         "</tr>"+
         "</table></b></font>"+
         "<br><br>"+
         "</center>");
         var impreX;
         var impreY;
         var impreXX;
         var impreYY;
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
         if (xx1<0) {
         impreXX="( "+xx1+" )";
         }
         else
         {
         impreXX=xx1;
         }
         if (yy1<0) {
         impreYY="( "+yy1+" )";
         }
         else
         {
         impreYY=yy1;
         }
         $("#solucion").append("<center>Sustituimos los datos obtenidos:"+
         "<br><br>"+
         "<font size='3'><b><center><table border='0'>"+
         "<tr>"+
         "<td rowspan='2'><b>m<sub>AB</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>"+y2+" - "+impreY+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td rowspan='2'><b>m<sub>CD</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>"+yy2+" - "+impreYY+"</td>"+
         "</tr>"+
         "<tr>"+
         "<td>"+x2+" - "+impreX+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td>"+xx2+" - "+impreXX+"</td>"+
         "</tr>"+
         "</table></center></b></font>"+
         "<br><br>"+
         "Realizamos las restas superiores e inferiores:"+
         "</center>");
         var restaX;
         var restaY;
         var restaXX;
         var restaYY;
         restaX=x2-x1;
         restaY=y2-y1;
         restaXX=xx2-xx1;
         restaYY=yy2-yy1;
         var esResta1=0;
         var esResta2=0;
         var esResta11=0;
         var esResta22=0;
         var agregarRestaArriba=0;
         var agregarRestaAbajo=0;
         if (restaY<0) {
         esResta1=1;
         restaY=Math.abs(restaY);
         }
         else
         {
         esResta1=0;
         restaY=Math.abs(restaY);
         }
         if (restaX<0) {
         esResta2=1;
         restaX=Math.abs(restaX);
         }
         else
         {
         esResta2=0;
         restaX=Math.abs(restaX);
         }
         if ((esResta1==1 && esResta2==0) || (esResta1==0 && esResta2==1)) {
         //restaY=restaY * -1;
         agregarRestaArriba=1;
         restaX=Math.abs(restaX);
         }
         else
         {
         agregarRestaArriba=0;
         }
         //para reordenar los numeros negativos
         if (restaYY<0) {
         esResta11=1;
         restaYY=Math.abs(restaYY);
         }
         else
         {
         esResta11=0;
         restaYY=Math.abs(restaYY);
         }
         if (restaXX<0) {
         esResta22=1;
         restaXX=Math.abs(restaXX);
         }
         else
         {
         esResta22=0;
         restaXX=Math.abs(restaXX);
         }
         if ((esResta11==1 && esResta22==0) || (esResta11==0 && esResta22==1)) {
         //restaYY=restaYY * -1;
         agregarRestaAbajo=1;
         restaXX=Math.abs(restaXX);
         }
         else
         {
         agregarRestaAbajo=0;
         }
         if (agregarRestaArriba==1 && agregarRestaAbajo==0) {
         $("#solucion").append("<center><br>"+
         "<font size='3'><b><center><table border='0'>"+
         "<tr>"+
         "<td rowspan='2'><b>m<sub>AB</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td style='border-bottom: 1px black solid;'>"+restaY+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td rowspan='2'><b>m<sub>CD</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>"+restaYY+"</td>"+
         "</tr>"+
         "<tr>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td>"+restaX+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td>"+restaXX+"</td>"+
         "</tr>"+
         "</table></center></b></font>"+
         "</center>");
         restaY=restaY * -1;
         }
         if (agregarRestaArriba==0 && agregarRestaAbajo==1) {
         $("#solucion").append("<center><br>"+
         "<font size='3'><b><table border='0'>"+
         "<tr>"+
         "<td rowspan='2'><b>m<sub>AB</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>"+restaY+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td rowspan='2'><b>m<sub>CD</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td style='border-bottom: 1px black solid;'>"+restaYY+"</td>"+
         "</tr>"+
         "<tr>"+
         "<td>"+restaX+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td>"+restaXX+"</td>"+
         "</tr>"+
         "</table></b></font>"+
         "</center>");
         restaYY=restaYY * -1;
         }
         if (agregarRestaArriba==1 && agregarRestaAbajo==1) {
         $("#solucion").append("<center><br>"+
         "<font size='3'><b><table border='0'>"+
         "<tr>"+
         "<td rowspan='2'><b>m<sub>AB</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td style='border-bottom: 1px black solid;'>"+restaY+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td rowspan='2'><b>m<sub>CD</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td style='border-bottom: 1px black solid;'>"+restaYY+"</td>"+
         "</tr>"+
         "<tr>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td>"+restaX+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td>&nbsp;&nbsp;</td>"+
         "<td>"+restaXX+"</td>"+
         "</tr>"+
         "</table></b></font>"+
         "</center>");
         restaY=restaY * -1;
         restaYY=restaYY * -1;
         }
         if (agregarRestaArriba==0 && agregarRestaAbajo==0) {
         $("#solucion").append("<center><br>"+
         "<font size='3'><b><center><table border='0'>"+
         "<tr>"+
         "<td rowspan='2'><b>m<sub>AB</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>"+restaY+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td rowspan='2'><b>m<sub>CD</sub> = &nbsp;&nbsp;</b></td>"+
         "<td style='border-bottom: 1px black solid;'>"+restaYY+"</td>"+
         "</tr>"+
         "<tr>"+
         "<td>"+restaX+"</td>"+
         "<td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>"+
         "<td>"+restaXX+"</td>"+
         "</tr>"+
         "</table></center></b></font>"+
         "</center>");
         }
         var paso=0;
         var paso1=0;
         console.log(restaY,restaX,restaYY,restaXX);
         if (restaY==restaYY && restaX==restaXX) {
         esIgual=1;
         paso=1;
         }
         else
         {
         paso=0;
         }
         if (Math.abs(restaY)==Math.abs(restaXX) && Math.abs(restaX)==Math.abs(restaYY)) {
         paso1=1;
         }
         else
         {
         paso1=0;
         var numerador;
         var denominador;
         var entero;
         console.log("datos para division: ",restaYY,restaXX,restaY,restaX);
         multiplicarF(restaYY,restaXX,restaY,restaX);
         entero=enteroMultiGlobal;
         numerador=numeradorMultiGlobal;
         denominador=denominadorMultiGlobal;
         console.log("obtenido division: ",entero,numerador,denominador);
         if (entero!=0) {
         if (numerador==0) {
         if (entero==-1) {
         paso1=1;
         }
         else
         {
         paso1=0;
         }
         }
         else
         {
         paso1=0;
         }
         }
         else
         {
         if (numerador==-1) {
         if (denominador==1 || denominador==0) {
         paso1=1;
         }
         else
         {
         paso1=0;
         }
         }
         else
         {
         paso1=0;
         }
         }
         }
         if (paso==1) {
         $("#solucion").append("<center><br>"+
         "<b>Las rectas son paralelas entre sí, ya que sus pendientes son iguales.</b>"+
         "</center>");
         }
         if (paso1==1) {
         $("#solucion").append("<center><br>"+
         "<b>Las rectas son perpendiculares entre sí, ya que el resultado de la multiplicación entre ellas es igual a -1; Es decir:<br><br>"+
         "<font size='3'><b><table border='0'>"+
         "<tr>"+
         "<td style='border-bottom: 1px black solid;'>"+restaY+"</td>"+
         "<td rowspan='2'>&nbsp;(&nbsp;</td>"+
         "<td style='border-bottom: 1px black solid;'>"+restaYY+"</td>"+
         "<td rowspan='2'>&nbsp;)&nbsp;=&nbsp;-1</td>"+
         "</tr>"+
         "<tr>"+
         "<td>"+restaX+"</td>"+
         "<td>"+restaXX+"</td>"+
         "</tr>"+
         "</table></b></font>"+
         "</b>"+
         "</center>");
         }
         if (paso==0 && paso1==0) {
         $("#solucion").append("<center><br>"+
         "<b>Las rectas no son ni paralelas ni perpendiculares entre sí.</b>"+
         "</center>");
         }
         $("#solucion").append("<br><font size='3'><center><button style='button' class='btn btn-warning btn-rounded' onclick='Datos();'>Cambiar Puntos</button></center></font>");
         graficarPunto(x1,y1,x2,y2,xx1,yy1,xx2,yy2);*/
        $("#Puntos").fadeOut(0);
        $("#coordenadas").fadeOut(0);
        $("#Resultado").fadeIn(300);
        //$("#grafica").fadeIn(300);
    }
    function graficarPunto(x1, y1, x2, y2, xx1, yy1, xx2, yy2) {
        var x1N = x1;
        var y1N = y1;
        var x2N = x2;
        var y2N = y2;
        var x1NN = xx1;
        var y1NN = yy1;
        var x2NN = xx2;
        var y2NN = yy2;
        var mayor;
        var mayorN;
        if (x1N > y1N) {
            if (x1N > x2N) {
                if (x1N > y2N) {
                    mayor = x1N;
                }
                else {
                    mayor = y2N;
                }
            }
            else {
                if (x2N > y2N) {
                    mayor = x2N;
                }
                else {
                    mayor = y2N;
                }
            }
        }
        else {
            if (y1N > x2N) {
                if (y1N > y2N) {
                    mayor = y1N;
                }
                else {
                    mayor = y2N;
                }
            }
            else {
                if (x2N > y2N) {
                    mayor = x2N;
                }
                else {
                    mayor = y2N;
                }
            }
        }
        if (mayor > x1NN) {
            if (mayor > y1NN) {
                if (mayor > x2NN) {
                    if (mayor > y2NN) {
                        mayor = mayor;
                    }
                    else {
                        mayor = y2NN;
                    }
                }
                else {
                    if (x2NN > y2NN) {
                        mayor = x2NN;
                    }
                    else {
                        mayor = y2NN;
                    }
                }
            }
            else {
                if (y1NN > x2NN) {
                    if (y1NN > y2NN) {
                        mayor = y1NN;
                    }
                    else {
                        mayor = y2NN;
                    }
                }
                else {
                    if (x2NN > y2NN) {
                        mayor = x2NN;
                    }
                    else {
                        mayor = y2NN;
                    }
                }
            }
        } else {
            if (x1NN > y1NN) {
                if (x1NN > x2NN) {
                    if (x1NN > y2NN) {
                        mayor = x1NN;
                    }
                    else {
                        mayor = y2NN;
                    }
                } else {
                    if (x2NN > y2NN) {
                        mayor = x2NN;
                    }
                    else {
                        mayor = y2NN;
                    }
                }
            }
            else {
                if (y1NN > x2NN) {
                    if (y1NN > y2NN) {
                        mayor = y1NN;
                    }
                    else {
                        mayor = y2NN;
                    }
                }
                else {
                    if (x2NN > y2NN) {
                        mayor = x2NN;
                    }
                    else {
                        mayor = y2NN;
                    }
                }
            }
        }
        console.log(mayor);
        mayor = mayor + 2;
        mayorN = mayor * -1;
        //brd = JXG.JSXGraph.freeBoard(brd);
        brd = JXG.JSXGraph.initBoard('plano1', {
            boundingbox: [mayorN, mayor, mayor, mayorN],
            keepaspectratio: true,
            axis: true,
            showCopyright: false
        });
        p1 = brd.create('point', [x1, y1], {visible: true});
        p2 = brd.create('point', [x2, y2], {visible: true});
        p3 = brd.create('point', [xx1, yy1], {visible: true});
        p4 = brd.create('point', [xx2, yy2], {visible: true});
        var s1 = brd.create('segment', [p1, p2], {strokeColor: '#01aeef'});
        var s2 = brd.create('segment', [p3, p4], {strokeColor: '#01aeef'});

    }
    function Datos() {
        $("#Resultado").fadeOut(0);
        $("#grafica").fadeOut(0);
        $("#Puntos").fadeIn(300);
    }
    ////////////
    function Puntos() {
        $("#Resultado").fadeOut(0);
        $("#Puntos").fadeIn(300);
    }
    //practica
    function cambioEjemplo(opc) {
        switch (opc) {
            case 1: {
                $("#Ejemplo2").fadeOut(0);
                $("#Ejemplo3").fadeOut(0);
                $("#Ejemplo4").fadeOut(0);
                $("#Ejemplo1").fadeIn(300);
                $('#Ejemplo1').removeAttr('class').attr('class', '');
                $('#Ejemplo1').addClass('animated');
                $('#Ejemplo1').addClass('fadeInRightBig');
            }
                break;
            case 2: {
                $("#Ejemplo1").fadeOut(0);
                $("#Ejemplo3").fadeOut(0);
                $("#Ejemplo4").fadeOut(0);
                $("#Ejemplo2").fadeIn(300);
                $('#Ejemplo2').removeAttr('class').attr('class', '');
                $('#Ejemplo2').addClass('animated');
                $('#Ejemplo2').addClass('fadeInRightBig');
            }
                break;
            case 3: {
                $("#Ejemplo1").fadeOut(0);
                $("#Ejemplo2").fadeOut(0);
                $("#Ejemplo4").fadeOut(0);
                $("#Ejemplo3").fadeIn(300);
                $('#Ejemplo3').removeAttr('class').attr('class', '');
                $('#Ejemplo3').addClass('animated');
                $('#Ejemplo3').addClass('fadeInRightBig');
            }
                break;
            case 4: {
                $("#Ejemplo1").fadeOut(0);
                $("#Ejemplo2").fadeOut(0);
                $("#Ejemplo3").fadeOut(0);
                $("#Ejemplo4").fadeIn(300);
                $('#Ejemplo4').removeAttr('class').attr('class', '');
                $('#Ejemplo4').addClass('animated');
                $('#Ejemplo4').addClass('fadeInRightBig');
            }
                break;
        }
    }
    function cambia_practica(opc) {
        switch (opc) {
            case 1: {
                $("#prac_2").fadeOut(0);
                $("#prac_3").fadeOut(0);
                $("#prac_4").fadeOut(0);
                $("#prac_1").fadeIn(300);
            }
                break;
            case 2: {
                $("#prac_1").fadeOut(0);
                $("#prac_3").fadeOut(0);
                $("#prac_4").fadeOut(0);
                $("#prac_2").fadeIn(300);
            }
                break;
            case 3: {
                $("#prac_2").fadeOut(0);
                $("#prac_1").fadeOut(0);
                $("#prac_4").fadeOut(0);
                $("#prac_3").fadeIn(300);
            }
                break;
            case 4: {
                $("#prac_2").fadeOut(0);
                $("#prac_3").fadeOut(0);
                $("#prac_1").fadeOut(0);
                $("#prac_4").fadeIn(300);
            }
                break;
        }
    }
    function VerificarEvaluacion1() {
        if ($('input:radio[name=1rpe]:checked').val() == 1) {
            $("#False2P1").fadeOut(0);
            $("#False3P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#True5P1").fadeOut(0);
            $("#False1P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False1P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 2) {
            $("#False1P1").fadeOut(0);
            $("#False3P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#True5P1").fadeOut(0);
            $("#False2P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False2P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 3) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#True5P1").fadeOut(0);
            $("#False3P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False3P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 4) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#False3P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#True5P1").fadeOut(0);
            $("#False4P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False4P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 5) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#False3P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#True5P1").fadeIn(300);
            toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
        } else {
            $("#True5P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 6) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#False3P1").fadeOut(0);
            $("#False4P1").fadeOut(0);
            $("#True5P1").fadeOut(0);
            $("#False6P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False6P1").fadeOut(0);
        }
    }
    function limpiarPractica1() {
        $('input[name=1rpe]').attr('checked', false);
        $("#False1P1").fadeOut(0);
        $("#False2P1").fadeOut(0);
        $("#False3P1").fadeOut(0);
        $("#False4P1").fadeOut(0);
        $("#True5P1").fadeOut(0);
        $("#False6P1").fadeOut(0);
        toastr.success('Infomación borrada', 'Muy Bien');
    }
    function VerificarEvaluacion2() {
        if ($('input:radio[name=2rpe]:checked').val() == 1) {
            $("#False2P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#False6P2").fadeOut(0);
            $("#True3P2").fadeOut(0);
            $("#False1P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False1P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 2) {
            $("#False1P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#False6P2").fadeOut(0);
            $("#True3P2").fadeOut(0);
            $("#False2P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False2P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 3) {
            $("#False1P2").fadeOut(0);
            $("#False2P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#False6P2").fadeOut(0);
            $("#True3P2").fadeIn(300);
            toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
        } else {
            $("#True3P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 4) {
            $("#False1P2").fadeOut(0);
            $("#False2P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#False6P2").fadeOut(0);
            $("#True3P2").fadeOut(0);
            $("#False4P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False4P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 5) {
            $("#False1P2").fadeOut(0);
            $("#False2P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#False6P2").fadeOut(0);
            $("#True3P2").fadeOut(0);
            $("#False5P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False5P2").fadeOut(0);
        }
        if ($('input:radio[name=2rpe]:checked').val() == 6) {
            $("#False1P2").fadeOut(0);
            $("#False2P2").fadeOut(0);
            $("#False4P2").fadeOut(0);
            $("#False5P2").fadeOut(0);
            $("#True3P2").fadeOut(0);
            $("#False6P2").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False6P2").fadeOut(0);
        }
    }
    function limpiarPractica2() {
        $('input[name=2rpe]').attr('checked', false);
        $("#False1P2").fadeOut(0);
        $("#False2P2").fadeOut(0);
        $("#True3P2").fadeOut(0);
        $("#False4P2").fadeOut(0);
        $("#False5P2").fadeOut(0);
        $("#False6P2").fadeOut(0);
        toastr.success('Infomación borrada', 'Muy Bien');
    }
    function VerificarEvaluacion3() {
        if ($('input:radio[name=3rpe]:checked').val() == 1) {
            $("#True2P3").fadeOut(0);
            $("#False3P3").fadeOut(0);
            $("#False4P3").fadeOut(0);
            $("#False5P3").fadeOut(0);
            $("#False6P3").fadeOut(0);
            $("#False1P3").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
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
        } else {
            $("#False6P3").fadeOut(0);
        }
    }
    function limpiarPractica3() {
        $('input[name=3rpe]').attr('checked', false);
        $("#True2P3").fadeOut(0);
        $("#False1P3").fadeOut(0);
        $("#False3P3").fadeOut(0);
        $("#False4P3").fadeOut(0);
        $("#False5P3").fadeOut(0);
        $("#False6P3").fadeOut(0);
        toastr.success('Infomación borrada', 'Muy Bien');
    }
    function VerificarEvaluacion4() {
        if ($('input:radio[name=4rpe]:checked').val() == 1) {
            $("#False2P4").fadeOut(0);
            $("#False3P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#True4P4").fadeOut(0);
            $("#False1P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False1P4").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 2) {
            $("#False1P4").fadeOut(0);
            $("#False3P4").fadeOut(0);
            $("#True4P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#False2P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False2P4").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 3) {
            $("#False1P4").fadeOut(0);
            $("#False2P4").fadeOut(0);
            $("#True4P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#False3P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False3P4").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 4) {
            $("#False1P4").fadeOut(0);
            $("#False2P4").fadeOut(0);
            $("#False3P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#True4P4").fadeIn(300);
            toastr.success('Has seleccionado la respuesta correcta', 'Excelente');
        } else {
            $("#True4P4").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 5) {
            $("#False1P4").fadeOut(0);
            $("#False2P4").fadeOut(0);
            $("#False3P4").fadeOut(0);
            $("#True4P4").fadeOut(0);
            $("#False6P4").fadeOut(0);
            $("#False5P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False5P4").fadeOut(0);
        }
        if ($('input:radio[name=4rpe]:checked').val() == 6) {
            $("#False1P4").fadeOut(0);
            $("#False2P4").fadeOut(0);
            $("#False3P4").fadeOut(0);
            $("#True4P4").fadeOut(0);
            $("#False5P4").fadeOut(0);
            $("#False6P4").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
        } else {
            $("#False6P4").fadeOut(0);
        }
    }
    function limpiarPractica4() {
        $('input[name=4rpe]').attr('checked', false);
        $("#False1P4").fadeOut(0);
        $("#False2P4").fadeOut(0);
        $("#False3P4").fadeOut(0);
        $("#True4P4").fadeOut(0);
        $("#False5P4").fadeOut(0);
        $("#False6P4").fadeOut(0);
        toastr.success('Infomación borrada', 'Muy Bien');
    }
    //FUNCION PARA CAMBIAR EL TIPO DE EJERCICIO A RESOLVER

    function onSelectExercise(opc) {
        if (opc == 1) {
            $("#coordenadas").fadeOut(0);
            $("#Resultado").fadeOut(0);
            $('#btnPendiente').removeAttr('class').attr('class', '');
            $('#btnPendiente').addClass('btn btn-info animation_select');
            $('#btnPuntos').removeAttr('class').attr('class', '');
            $('#btnPuntos').addClass('btn btn-white animation_select');
            $("#Puntos").fadeIn(300);
            document.getElementById("x1P").value = "";
            document.getElementById("y1P").value = "";
            document.getElementById("mUpP").value = "";
            document.getElementById("mDownP").value = "";
        }
        else {
            $("#Puntos").fadeOut(0);
            $("#Resultado").fadeOut(0);
            $('#btnPuntos').removeAttr('class').attr('class', '');
            $('#btnPuntos').addClass('btn btn-info animation_select');
            $('#btnPendiente').removeAttr('class').attr('class', '');
            $('#btnPendiente').addClass('btn btn-white animation_select');
            $("#coordenadas").fadeIn(300);
        }
    }

    function generarResolucionP() {
        var x1P = document.getElementById("x1P").value;
        var y1P = document.getElementById("y1P").value;
        var mUpP = document.getElementById("mUpP").value;
        var mDownP = document.getElementById("mDownP").value;
        if (x1P === "" || y1P === "" || mUpP === "") {
            toastr.error('Debes completar los campos necesarios', 'Lo Siento');
        }
        else {
            if (mDownP === "") {
                //Es entero
                $("#solucion").html("<center>Identificamos la fórmula de punto pendiente<br><br>" +
                    "<font size='3'><b> y - y<sub>1</sub> = m ( x - x<sub>1</sub> )</b></font>" +
                    "<br><br>" +
                    "Sustituyendo las variables" +
                    "</center>");
                var tempY1P;
                var tempX1P;
                if (y1P < 0) {
                    tempY1P = "( " + y1P + " )";
                }
                else {
                    tempY1P = y1P;
                }
                if (x1P < 0) {
                    tempX1P = "( " + x1P + " )";
                }
                else {
                    tempX1P = x1P;
                }
                $("#solucion").append("<center><font size='3'><b> y - " + tempY1P + " = " + mUpP + " ( x - " + tempX1P + " )</b></font>" +
                    "<br><br>" +
                    "Simplificamos la fórmula" +
                    "<br><br>" +
                    "</center>");
                if (y1P < 0) {
                    y1P = y1P * -1;
                    tempY1P = "+ " + y1P;
                }
                else{
                    tempY1P = "- "+ y1P;
                }
                x1P = x1P * -1;
                var multi = mUpP * x1P;
                //alert(multi);
                var tempMulti;
                if (multi < 0) {
                    multi = multi * -1;
                    tempMulti = "- " + multi;
                }
                else {
                    tempMulti = "+ " + multi;
                }
                $("#solucion").append("<center><font size='3'><b> y " + tempY1P + " = " + mUpP + "x  " + tempMulti + "</b></font>" +
                    "<br><br></center>");
                //$("#Puntos").fadeOut(0);
                $("#coordenadas").fadeOut(0);
                $("#Resultado").fadeIn(300);
            }
            else {
                //es fraccionario
            }
        }
    }

    function limpiarResolucionP() {
        document.getElementById("x1P").value = "";
        document.getElementById("y1P").value = "";
        document.getElementById("mUpP").value = "";
        document.getElementById("mDownP").value = "";
        $("#Resultado").fadeOut(0);
        $("#coordenadas").fadeOut(0);
        $("#Puntos").fadeIn(300);
        toastr.success('Los campos se limpiaron correctamente', 'Excelente');

    }

    function multiplicarF(numPT, denPT, numRT, denRT) {
        var nuevoEnte = 0;
        var nuevoNum = 0;
        var nuevoDen = 0;
        var absNumberN;
        var absNumberD;
        var division = 0;
        //0--->Menor    1--->Mayor
        var esMenor = 0;
        //si el valor del entero se encuentra vacio
        nuevoNum = numPT * numRT;
        nuevoDen = denPT * denRT;
        reduce(nuevoNum, nuevoDen);
        nuevoNum = nuevoAn;
        nuevoDen = nuevoAd;
        absNumberN = Math.abs(nuevoNum);
        absNumberD = Math.abs(nuevoDen);
        if (absNumberN > absNumberD) {
            division = nuevoNum / nuevoDen;
            division = parseInt(division);
            console.log("division: ", division);
            if (division != 0) {
                numeradorMultiGlobal = nuevoNum - (division * nuevoDen);
                enteroMultiGlobal = division;
                denominadorMultiGlobal = nuevoDen;
            }
        }
        else {
            reduce(nuevoNum, nuevoDen);
            numeradorMultiGlobal = nuevoAn;
            denominadorMultiGlobal = nuevoAd;
            enteroMultiGlobal = 0;
        }
    }
    function reduce(An, Ad) {
        neg = 1; //1 if positive, -1 if negative
        //convert to strings
        var ng = An + '';
        var dg = Ad + ''
        if (ng.indexOf('-') != -1) {  //check to see if answer is negative.
            neg = -1
        }
        if (dg.indexOf('-') != -1) {
            neg = -1
        }
        if (ng.indexOf('-') != -1 && dg.indexOf('-') != -1) {//if both numerator and denominator are negative the answer is positive
            neg = 1
        }
        var factorX //highest common factor

        if (An == 0 || Ad == 0) {
            factorX = 1;
            return;
        }

        An = Math.abs(An);
        Ad = Math.abs(Ad);

        var factorX = 1;

        //Find common factors of Numerator and Denominator
        for (var x = 2; x <= Math.min(An, Ad); x++) {
            var check1 = An / x;
            if (check1 == Math.round(check1)) {
                var check2 = Ad / x;
                if (check2 == Math.round(check2)) {
                    factorX = x;
                }
            }
        }

        An = (An / factorX) * neg;  //divide by highest common factor to reduce fraction then multiply by neg to make positive or negative
        Ad = Ad / factorX;  //divide by highest common factor to reduce fraction
        nuevoAn = An;
        nuevoAd = Ad;
        //console.log("an: ",An," ad: ",Ad);
    }


    function tour1() {
        var tour = new Tour({
            steps: [{
                element: "#tour1-1",
                title: "Paso 1",
                content: "Presiona cualquiera de los siguientes números para mostrar un ejemplo de punto medio",
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
                    content: "Visualisa la gráfica que se te presenta en el área \"Segmento de recta\", resuelve el ejercicio en base a lo aprendido la sección de \"Teoría\", una vez resuelto el ejercicio, selecciona la respuesta correcta en el área \"Resultado\" y presiona el botón \"Comprobar\" para verificar si la opción seleccionada es la correcta.",
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
                content: "Ingresa los datos correspondientes en los espacios asignados a cada punto, en el área \"Segmento de recta\" podrás visualizar el segmento de recta que se crea en base a los puntos; para conocer el punto medio del segmento de recta, presiona el botón \"Generar\"",
                placement: "top",
                backdrop: true,
                backdropContainer: '#wrapper',
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
</script>