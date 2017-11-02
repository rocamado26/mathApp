<div class="ibox float-e-margins animated fadeInUpBig">
    <div class="ibox-title">
        <h5>Geometría - <small> Paralelismo y perperdicularidad entre dos rectas</small></h5>
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
                                        <div class="col-xs-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <strong>Rectas Paralelas</strong>
                                                    <p style="text-align: justify;">
                                                        <br>Si dos rectas son paralelas, tienen la misma inclinación, de modo que las rectas paralelas tienen la misma pendiente.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <center><img width="50%" height="50%" src="{{asset('img/iconos/geometria/analitica/pendiente/paraperpen/teoria1.png')}}"></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <strong>Rectas Perpendiculares</strong>
                                                    <p style="text-align: justify;">
                                                        <br>Si dos rectas son perpendiculares, se cortan formando un ángulo de 90º, esto significa que sus inclinaciones deben diferir en 90º.
                                                        <br><br>
                                                        También signifca que sus pendientes tienen signos diferentes.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <center><img width="50%" height="50%" src="{{asset('img/iconos/geometria/analitica/pendiente/paraperpen/teoria2.png')}}"></center>
                                                </div>
                                            </div>
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
                                    <button type="button"  onclick="tour1()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
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
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambioEjemplo(1)">1</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="cambioEjemplo(2)">2</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox" >
                                        <div class="ibox-content" id="tour1-2">
                                            <div class="row animated fadeInRightBig" id="Ejemplo1">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p style="text-align: justify;">
                                                                                Determina la pendiente de la recta que pasa por <b>A(2, 3)</b> y <b>B(7, 5)</b>, e investiga si es paralela a la recta que pasa por <b>C(– 1, 4)</b> y <b>D(4, 6)</b> 
                                                                            </p>
                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-xs-12"> Calculamos la pendiente para cada punto:</div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                       <font size="3"><table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td rowspan="2"><b>m<sub>AB</sub> = &nbsp;&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;">5 - 3</td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td rowspan="2"><b>m<sub>CD</sub> = &nbsp;&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;">6 - 4</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>7 - 2</td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td>4 - ( -1 )</td>
                                                                            </tr>
                                                                        </table></font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                Obteniendo como resultando las siguientes pendientes:
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                     <div class="col-xs-12" align="center">
                                                                        <font size="3"><b>m<sub>AB</sub></b> =  </font><font size="4"><sup>2</sup>/<sub>5</sub></font><br><br>
                                                                         <font size="3"><b>m<sub>CD</sub></b>=  </font><font size="4"><sup>2</sup>/<sub>5</sub></font><br><br>
                                                                    </div>                         
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                Como ambas pendientes son iguales <b>(m<sub>AB</sub> = m<sub>CD</sub>)</b>, las rectas son paralelas entre sí.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;<font size="4"><i><b>Punto de apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <p style="text-align: justify;">
                                                                        <br>
                                                                        * Es importante que recuerdes que si las pendientes son iguales <b>(m1 = m2)</b>, las rectas son paralelas entre sí.
                                                                        <br><br>
                                                                        * Las rectas son perpendiculares si sus pendientes tienen signos diferentes, es decir <b>m1 = -<sup>1</sup>/<sub>m2</sub></b>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row animated fadeInRightBig" style="display: none;" id="Ejemplo2">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p style="text-align: justify;">
                                                                                Averigua si la recta que determina los puntos <b>P(3, 5)</b> y <b>Q(– 2, 3)</b> es perpendicular a la recta que pasa por los puntos <b>D(2, – 1)</b> y <b>F( – 4, 14)</b>. 
                                                                            </p>
                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-xs-12"> Calculamos la pendiente para cada punto:</div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                    <div class="col-xs-12" align="center">
                                                                       <font size="3"><table border="0" style="text-align: center;">
                                                                            <tr>
                                                                                <td rowspan="2"><b>m<sub>PQ</sub> = &nbsp;&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;">3 - 5</td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td rowspan="2"><b>m<sub>DF</sub> = &nbsp;&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;">14 - ( -1 )</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>-2 - 3</td>
                                                                                <td>&nbsp;&nbsp;|&nbsp;&nbsp;</td>
                                                                                <td>-4 - 2</td>
                                                                            </tr>
                                                                        </table></font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                Obteniendo como resultando las siguientes pendientes:
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="well">
                                                                <div class="row diff-wrapper">
                                                                     <div class="col-xs-12" align="center">
                                                                        <font size="3"><b>m<sub>PQ</sub></b> =  </font><font size="4"><sup>2</sup>/<sub>5</sub></font><br><br>
                                                                         <font size="3"><b>m<sub>DF</sub></b> =  </font><font size="4">-<sup>5</sup>/<sub>2</sub></font><br><br>
                                                                    </div>                         
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                Como m<sub>DF</sub> = <sup>1</sup>/<sub>m<sub>PQ</sub></sub>, las rectas son perpendiculares, es decir:
                                                                <br><br>
                                                                Despejando la ecuación, se cumple que <b><sup>2</sup>/<sub>5</sub>(- <sup>5</sup>/<sub>2</sub>) = -1</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;<font size="4"><i><b>Punto de apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <p style="text-align: justify;">
                                                                        <br>
                                                                        * Es importante que recuerdes que si las pendientes son iguales <b>(m1 = m2)</b>, las rectas son paralelas entre sí.
                                                                        <br><br>
                                                                        * Las rectas son perpendiculares si sus pendientes tienen signos diferentes, es decir <b>m1 = -<sup>1</sup>/<sub>m2</sub></b>
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
                                                        <div class="col-md-12" >
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
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="x1" width="100%"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="y1" width="100%"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="x2" width="100%"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="y2" width="100%"></td>
                                                                            </tr>
                                                                        </table>
                                                                        <br><br>
                                                                        <table border="0" width="100%">
                                                                            <tr>
                                                                                <td colspan="3"><center><b>Punto C</b></center></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td colspan="3"><center><b>Punto D</b></center></td>
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
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="xx1" width="100%"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="yy1" width="100%"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="xx2" width="100%"></td>
                                                                                <td>&nbsp;</td> 
                                                                                <td><input type="number" placeholder="?" class="form-control" value="" id="yy2" width="100%"></td>
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
                                                            <br><br>
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
                                                    <div class="row"  id="grafica" style="display: none;">
                                                        <div class="col-md-12">
                                                            <div class="alert alert-info">
                                                                <strong>Segmento de Recta</strong><br>
                                                                En esta sección se te mostrara los segmentos de recta según los puntos que tú ingreses en el área <b>"Información"</b>.
                                                            </div>
                                                            <center>
                                                                <div class="jxgbox" id="plano1" style="width: 400px;height: 400px; "></div>
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
//limpiarResolucion();  
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
    var xx1;
    var yy1;
    var xx2;
    var yy2;
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
    if (document.getElementById("xx1").value!=0) {
        xx1=parseInt(document.getElementById("xx1").value);
    }
    else
    {
        xx1=0;
    }
    if (document.getElementById("yy1").value!=0) {
        yy1=parseInt(document.getElementById("yy1").value);
    }
    else
    {
        yy1=0;
    }
    if (document.getElementById("xx2").value!=0) {
        xx2=parseInt(document.getElementById("xx2").value);
    }
    else
    {
        xx2=0;
    }
    if (document.getElementById("yy2").value!=0) {
        yy2=parseInt(document.getElementById("yy2").value);
    }
    else
    {
        yy2=0;
    }
    //////INICIO DEL PROCEDIMIENTO
    $("#solucion").html("<center>Conociendo los puntos A("+x1+","+y1+"), B("+x2+","+y2+") de la primera recta y los puntos C("+xx1+","+yy1+"), D("+xx2+","+yy2+"), tomando en cuenta la fórmula para encontrar la pendiente, obtenemos:<br><br>"+
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
        graficarPunto(x1,y1,x2,y2,xx1,yy1,xx2,yy2);
        $("#Puntos").fadeOut(0);
        $("#Resultado").fadeIn(300);
        $("#grafica").fadeIn(300);
}
function graficarPunto(x1,y1,x2,y2,xx1,yy1,xx2,yy2){
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
        if (mayor>x1NN) {
            if (mayor>y1NN) {
                if (mayor>x2NN) {
                    if (mayor>y2NN) {
                        mayor=mayor;
                    }
                    else
                    {
                        mayor=y2NN;
                    }
                }
                else
                {
                    if (x2NN>y2NN) {
                        mayor=x2NN;
                    }
                    else
                    {
                        mayor=y2NN;
                    }
                }
            }
            else
            {
                if (y1NN>x2NN) {
                    if (y1NN>y2NN) {
                        mayor=y1NN;
                    }
                    else
                    {
                        mayor=y2NN;
                    } 
                }
                else
                {
                    if (x2NN>y2NN) {
                        mayor=x2NN;
                    }
                    else
                    {
                        mayor=y2NN;
                    }
                }
            }
        }else{
            if (x1NN>y1NN) {
                if (x1NN>x2NN) {
                    if (x1NN>y2NN) {
                        mayor=x1NN;
                    }
                    else
                    {
                        mayor=y2NN;
                    }
                }else{
                    if (x2NN>y2NN) {
                        mayor=x2NN;
                    }
                    else
                    {
                        mayor=y2NN;
                    }
                }
            }
            else
            {
                if (y1NN>x2NN) {
                    if (y1NN>y2NN) {
                        mayor=y1NN;
                    }
                    else
                    {
                        mayor=y2NN;
                    }
                }
                else
                {
                    if (x2NN>y2NN) {
                        mayor=x2NN;
                    }
                    else
                    {
                        mayor=y2NN;
                    }
                }
            }
        }
        console.log(mayor);
        mayor=mayor+2;
        mayorN=mayor * -1;
        //brd = JXG.JSXGraph.freeBoard(brd);
        brd = JXG.JSXGraph.initBoard('plano1',{boundingbox:[mayorN,mayor,mayor,mayorN], keepaspectratio:true, axis:true,showCopyright:false});
        p1 = brd.create('point',[x1,y1],{visible:true});
        p2 = brd.create('point',[x2,y2],{visible:true});
        p3 = brd.create('point',[xx1,yy1],{visible:true});
        p4 = brd.create('point',[xx2,yy2],{visible:true});
        var s1 = brd.create('segment',[p1, p2],{strokeColor:'#01aeef'}); 
        var s2 = brd.create('segment',[p3, p4],{strokeColor:'#01aeef'}); 

}
function Datos(){
    $("#Resultado").fadeOut(0);
    $("#grafica").fadeOut(0);
    $("#Puntos").fadeIn(300);
}
////////////
function Puntos(){
    $("#Resultado").fadeOut(0);
    $("#Puntos").fadeIn(300);
}
//practica
function cambioEjemplo(opc)
{
    switch(opc)
    {
        case 1:
        {
            $("#Ejemplo2").fadeOut(0);
            $("#Ejemplo1").fadeIn(300);
            $('#Ejemplo1').removeAttr('class').attr('class', '');
            $('#Ejemplo1').addClass('animated');
            $('#Ejemplo1').addClass('fadeInRightBig');
        }break;
        case 2:
        {
            $("#Ejemplo1").fadeOut(0);
            $("#Ejemplo2").fadeIn(300);
            $('#Ejemplo2').removeAttr('class').attr('class', '');
            $('#Ejemplo2').addClass('animated');
            $('#Ejemplo2').addClass('fadeInRightBig');
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


function multiplicarF(numPT,denPT,numRT,denRT){
    var nuevoEnte=0;
    var nuevoNum=0;
    var nuevoDen=0;
    var absNumberN;
    var absNumberD;
    var division=0;
    //0--->Menor    1--->Mayor
    var esMenor=0;
    //si el valor del entero se encuentra vacio
    nuevoNum=numPT * numRT;
    nuevoDen=denPT * denRT;
    reduce(nuevoNum,nuevoDen);
    nuevoNum=nuevoAn;
    nuevoDen=nuevoAd;
    absNumberN=Math.abs(nuevoNum);
    absNumberD=Math.abs(nuevoDen);
    if (absNumberN>absNumberD) {
        division=nuevoNum/nuevoDen;
        division=parseInt(division);
        console.log("division: ",division);
        if (division!=0) {
            numeradorMultiGlobal=nuevoNum-(division*nuevoDen);
            enteroMultiGlobal=division;
            denominadorMultiGlobal=nuevoDen;
        }
    }
    else
    {
        reduce(nuevoNum,nuevoDen);
        numeradorMultiGlobal=nuevoAn;
        denominadorMultiGlobal=nuevoAd;
        enteroMultiGlobal=0;
    }
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