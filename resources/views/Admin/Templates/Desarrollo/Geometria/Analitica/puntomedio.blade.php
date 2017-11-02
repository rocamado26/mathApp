<div class="ibox float-e-margins animated fadeInUpBig">
    <div class="ibox-title">
        <h5>Geometría Analítica - <small> Punto Medio</small></h5>
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
                                        El <i>punto medio</i> de un segmento de recta es el punto que se encuentra localizado exactamente a la mitad de dos puntos. Se trata del promedio de las dos coordenadas <b>x</b> y de las dos coordenadas <b>y</b>.
                                        <br><br>
                                        Observa que las coordenadas del punto <b>A</b> son <b>(1, 2)</b> y las de <b>B</b> son <b>(5, 6)</b>.
                                        <div class="well">
                                            <div class="row diff-wrapper">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <center>
                                                            <img width="200" height="150" src="{{asset('img/iconos/geometria/analitica/punto/teoria1.png')}}"/>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        Para conocer el punto medio, es necesario conocer los puntos medios de los extremos <b>X</b> y <b>Y</b>, para ello utilizamos las siguientes fórmulas:
                                        <br><br>
                                        <div align="center">
                                            <img width="300" height="100" src="{{asset('img/iconos/geometria/analitica/punto/teoria2.png')}}"/>
                                        </div>
                                        No puedes utilizar la fórmula del punto medio sin conocer las coordenadas <b>X</b> y <b>Y</b> de los puntos extremos. Para este ejemplo queremos encontrar el punto medio, el cual se encuentra en medio de los dos puntos extremos <b>A (1,2)</b> y <b>B (5,6)</b>. Tenemos que <b>(X<sub>a</sub>, Y<sub>a</sub>) = (1, 2)</b> y <b>(X<sub>b</sub>, Y<sub>b</sub>) = (5, 6)</b>.
                                        <br><br>   
                                        Ahora que conocemos los valores para los extremos X y Y, los sustituimos en la fórmula de punto medio:
                                        <br><br>
                                        <div class="well">
                                            <div class="row diff-wrapper">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <center>
                                                            <img width="300" height="200" src="{{asset('img/iconos/geometria/analitica/punto/teoria3.png')}}"/>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        Una vez conocemos los puntos medios de los extremos <b>X<sub>m</sub> = 3</b> y <b>Y<sub>m</sub> = 4</b>, también conocemos el punto medio del segmento de recta dado, ya que, el punto medio es igual a los dos puntos medios de los extremos <b>(P<sub>m</sub>= (X<sub>m</sub>,Y<sub>m</sub>))</b>. Por lo tanto:
                                        <br><br>
                                        <div class="well">
                                            <div class="row diff-wrapper">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <center>
                                                            <img width="200" height="100" src="{{asset('img/iconos/geometria/analitica/punto/teoria4.png')}}"/>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        Y graficando el punto en el plano cartesiano:
                                        <br><br>
                                        <div class="well">
                                            <div class="row diff-wrapper">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <center>
                                                            <img width="200" height="150" src="{{asset('img/iconos/geometria/analitica/punto/teoria5.png')}}"/>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </p>
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
                                                        Observa que cualquiera de los dos pares de coordenadas puede servir como (x<sub>1</sub>, y<sub>1</sub>) o como (x<sub>2</sub>, y<sub>2</sub>) . Ya que solo estarás sumando y dividiendo entre dos, no importa cuál par coloques primero.
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
                                                    En general, si los puntos <b>A(X<sub>a</sub>, Y<sub>a</sub>)</b> y <b>B(X<sub>b</sub>, Y<sub>b</sub>)</b> son los extremos del segmento rectilíneo <b>AB</b>, entonces el punto medio <b>P<sub>m</sub></b> del segmento <b>AB</b> es <b>P<sub>m</sub>(X<sub>m</sub>, Y<sub>m</sub>)</b>, donde:
                                                    <br><br>
                                                    <img src="{{asset('img/iconos/geometria/analitica/punto/ayuda.png')}}"/>
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
                            <div class ="row">
                                <div class="col-lg-12">
                                    <p style="text-align: justify;">
                                        Ahora que aprendimos un poco sobre como obtener el punto medio entre dos puntos, completa las siguientes ejemplos de práctica, seleccionado el punto medio correcto de acuerdo a los puntos dados en el plano cartesiano.
                                    </p><!--cierre de etiqueta p, inicio de teoría-->
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="row" id="tour1-1">
                                        <div class="col-xs-12">
                                            <div align="center">
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(1)">1</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(2)">2</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(3)">3</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambia_practica(4)">4</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox" >
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
                                                                <img width="90%" height="350px" src="{{asset('img/iconos/geometria/analitica/punto/practicas/practica1.png')}}"/>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Resultado</strong><br>
                                                                        Utiliza la fórmula y calcula el punto medio entre los puntos dados.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-warning">
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="1rpe1" value="1" name="1rpe">
                                                                                        <label for="1rpe1"><b>P<sub>m</sub>(0 , 3)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False1P1" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="1rpe2" value="2" name="1rpe">
                                                                                        <label for="1rpe2"><b>P<sub>m</sub>(4 , 5)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False2P1" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="1rpe3" value="3" name="1rpe">
                                                                                        <label for="1rpe3"><b>P<sub>m</sub>(2 , 6)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False3P1" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="1rpe4" value="4" name="1rpe">
                                                                                        <label for="1rpe4"><b>P<sub>m</sub>(3.5 , 5)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False4P1" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="1rpe5" value="5" name="1rpe">
                                                                                        <label for="1rpe5"><b>P<sub>m</sub>(3.5 , 4.5)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="True5P1" style="display: none;">
                                                                                        <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="1rpe6" value="6" name="1rpe">
                                                                                        <label for="1rpe6"><b>P<sub>m</sub>(2.75 , 6.5)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False6P1" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                  &nbsp;  
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" style="text-align: center;">
                                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPractica1();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                                </td>
                                                                                <td colspan="2" style="text-align: center;">
                                                                                    <button type="button" class="btn btn-primary btn-rounded" onclick="VerificarEvaluacion1();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                                </td>
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
                                                                <img width="90%" height="350px" src="{{asset('img/iconos/geometria/analitica/punto/practicas/practica2.png')}}"/>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Resultado</strong><br>
                                                                        Utiliza la fórmula y calcula el punto medio entre los puntos dados.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-warning">
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="2rpe1" value="1" name="2rpe">
                                                                                        <label for="2rpe1"><b>P<sub>m</sub>(-3 , 2)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False1P2" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="2rpe2" value="2" name="2rpe">
                                                                                        <label for="2rpe2"><b>P<sub>m</sub>(-1 , 1)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False2P2" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="2rpe3" value="3" name="2rpe">
                                                                                        <label for="2rpe3"><b>P<sub>m</sub>(0 , 3)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="True3P2" style="display: none;">
                                                                                        <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="2rpe4" value="4" name="2rpe">
                                                                                        <label for="2rpe4"><b>P<sub>m</sub>(0.5 , 2.5)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False4P2" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="2rpe5" value="5" name="2rpe">
                                                                                        <label for="2rpe5"><b>P<sub>m</sub>(-4 , 3)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False5P2" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="2rpe6" value="6" name="2rpe">
                                                                                        <label for="2rpe6"><b>P<sub>m</sub>(1.25 , 1.25)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False6P2" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                  &nbsp;  
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" style="text-align: center;">
                                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPractica2();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                                </td>
                                                                                <td colspan="2" style="text-align: center;">
                                                                                    <button type="button" class="btn btn-primary btn-rounded" onclick="VerificarEvaluacion2();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                                </td>
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
                                                                <img width="90%" height="350px" src="{{asset('img/iconos/geometria/analitica/punto/practicas/practica3.png')}}"/>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Resultado</strong><br>
                                                                        Utiliza la fórmula y calcula el punto medio entre los puntos dados.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-warning">
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="3rpe1" value="1" name="3rpe">
                                                                                        <label for="3rpe1"><b>P<sub>m</sub>(-2 , 2)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False1P3" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="3rpe2" value="2" name="3rpe">
                                                                                        <label for="3rpe2"><b>P<sub>m</sub>(0 , 0.5)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="True2P3" style="display: none;">
                                                                                        <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="3rpe3" value="3" name="3rpe">
                                                                                        <label for="3rpe3"><b>P<sub>m</sub>(1.5 , 0)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False3P3" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="3rpe4" value="4" name="3rpe">
                                                                                        <label for="3rpe4"><b>P<sub>m</sub>(0 , 0)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False4P3" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="3rpe5" value="5" name="3rpe">
                                                                                        <label for="3rpe5"><b>P<sub>m</sub>(1 , 2)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False5P3" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="3rpe6" value="6" name="3rpe">
                                                                                        <label for="3rpe6"><b>P<sub>m</sub>(-1 , 4)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False6P3" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                  &nbsp;  
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" style="text-align: center;">
                                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPractica3();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                                </td>
                                                                                <td colspan="2" style="text-align: center;">
                                                                                    <button type="button" class="btn btn-primary btn-rounded" onclick="VerificarEvaluacion3();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                                </td>
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
                                                                <img width="90%" height="350px" src="{{asset('img/iconos/geometria/analitica/punto/practicas/practica4.png')}}"/>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-info">
                                                                        <strong>Resultado</strong><br>
                                                                        Utiliza la fórmula y calcula el punto medio entre los puntos dados.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="alert alert-warning">
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="4rpe1" value="1" name="4rpe">
                                                                                        <label for="4rpe1"><b>P<sub>m</sub>(1 , 1)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False1P4" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="4rpe2" value="2" name="4rpe">
                                                                                        <label for="4rpe2"><b>P<sub>m</sub>(-1 , 1)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False2P4" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="4rpe3" value="3" name="4rpe">
                                                                                        <label for="4rpe3"><b>P<sub>m</sub>(0 , 1)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False2P4" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="4rpe4" value="4" name="4rpe">
                                                                                        <label for="4rpe4"><b>P<sub>m</sub>(0 , 0)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="True4P4" style="display: none;">
                                                                                        <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="4rpe5" value="5" name="4rpe">
                                                                                        <label for="4rpe5"><b>P<sub>m</sub>(-1 , 0)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False5P4" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%">
                                                                                    <div class="radio radio-info radio-inline">
                                                                                        <input type="radio" id="4rpe6" value="6" name="4rpe">
                                                                                        <label for="4rpe6"><b>P<sub>m</sub>(0.5 , 0.5)</b></label>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="25%" align="left">
                                                                                    <div id="False6P4" style="display: none;">
                                                                                        <span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                  &nbsp;  
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" style="text-align: center;">
                                                                                        <button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPractica4();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                                                </td>
                                                                                <td colspan="2" style="text-align: center;">
                                                                                    <button type="button" class="btn btn-primary btn-rounded" onclick="VerificarEvaluacion4();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                                </td>
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
<script>
//resolucion de ejercicios
/////////////FUNCIONES PARA GRAFICAR PUNTOS
function limpiarResolucion()
{
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
    var x1;
    var y1;
    var x2;
    var y2;
    if (document.getElementById("x1").value!=0) {
        x1=parseInt(document.getElementById("x1").value);
    }
    else
    {
        x1=0;
    }
    if (document.getElementById("y1").value!=0) {
        y1=parseInt(document.getElementById("y1").value);
    }
    else
    {
        y1=0;
    }
    if (document.getElementById("x2").value!=0) {
        x2=parseInt(document.getElementById("x2").value);
    }
    else
    {
        x2=0;
    }
    if (document.getElementById("y2").value!=0) {
        y2=parseInt(document.getElementById("y2").value);
    }
    else
    {
        y2=0;
    }
    //////INICIO DEL PROCEDIMIENTO
    $("#solucion").html("<center>Conociendo los puntos A("+x1+","+y1+") y B("+x2+","+y2+") y tomando en cuenta la fórmula para encontrar el punto medio,<br><br>"+
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
        "</center>");
        graficarPunto(divisionX,divisionY);
        $("#Puntos").fadeOut(0);
        $("#Resultado").fadeIn(300);
}
function graficarPunto(Xm,Ym){
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
        p1 = brd.create('point',[x1.value,document.getElementById("y1").value],{visible:true});
        p2 = brd.create('point',[document.getElementById("x2").value,document.getElementById("y2").value],{visible:true});
        p3 = brd.create('point',[Xm,Ym],{visible:true, fillColor: "blue", strokeWidth: 0, highlightFillOpacity: 0.90, name: 'P<sub>m</sub> ('+Xm+' , '+Ym+')'});
        var s1 = brd.create('segment',[p1, p2],{strokeColor:'#01aeef'}); 

}
////////////
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
}
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