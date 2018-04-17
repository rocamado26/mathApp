<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins  animated fadeInUpBig">
            <div class="ibox-title">
                <h5>Triángulos <small>-Teorema del Coseno</small></h5>
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
                                            <strong>Teorema del Coseno</strong><br><br>
                                            <p style="text-align: justify;">
                                                Sea un triángulo cualquiera con lados <b>a</b>, <b>b</b> y <b>c</b> y con ángulos interiores
                                                <b>α</b>, <b>β</b> y <b>γ</b> (son los ángulos opuestos a los lados, respectivamente).
                                                <br>
                                            </p>
                                            <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                    <img src="{{asset('img/iconos/triangulos/oblicuangulos/coseno/teoria.png')}}" width="100%">
                                                </div>
                                                <div class="col-lg-6">
                                                    <p style="text-align: justify;">
                                                        <b>Se tiene que:</b>
                                                        <br><br><br>
                                                        <font size="4">
                                                            a<sup>2</sup> = b<sup>2</sup> + c<sup>2</sup> - 2 * b * c * cos(α)
                                                            <br><br>
                                                            b<sup>2</sup> = a<sup>2</sup> + c<sup>2</sup> - 2 * a * c * cos(β)
                                                            <br><br>
                                                            c<sup>2</sup> = c<sup>2</sup> + b<sup>2</sup> - 2 * a * b * cos(γ)
                                                        </font>
                                                    </p>
                                                </div>
                                            </div>
                                            <br><br>
                                            <p style="text-align: justify">
                                                Veamos el siguiente ejemplo:<br>
                                                Sea un triángulo con dos lados conocidos (a=4 cm y c=6 cm) y sabiendo el ángulo que forman (B=85º).

                                                ¿Cuánto mide el lado b? Utilizaremos el teorema del coseno para calcularlo.
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-offset-3 col-lg-6">
                                                    <img src="{{asset('img/iconos/triangulos/oblicuangulos/coseno/ejemplo.png')}}" width="80%">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p style="text-align: center;">
                                                        Primero identificaremos la fórmula que nos brinde el resultado para el lado B, esta es:
                                                        <br><br>
                                                        <b>b<sup>2</sup> = a<sup>2</sup> + c<sup>2</sup> - 2 * a * c * cos(β)</b>
                                                        <br><br>
                                                        Despejamos B, esto significa convertir en raíz el operando de la izquierda:
                                                        <br><br>
                                                        <b>b= <font size="4"><b>√</b></font>( a<sup>2</sup> + c<sup>2</sup> - 2 * a * c * cos(β) )</b>
                                                        <br><br>
                                                        Sustituimos valores.
                                                        <br><br>
                                                        <b>b= <font size="4"><b>√</b></font>( 4<sup>2</sup> + 6<sup>2</sup> - 2 * 4 * 6 * cos(85) )</b>
                                                        <br><br>
                                                        Operamos términos
                                                        <br><br>
                                                        b= <font size="4"><b>√</b></font>( 16 + 36 - 48 * 0.087 )
                                                        <br><br>
                                                        b= <font size="4"><b>√</b></font>( 16 + 36 - 4.176 )
                                                        <br><br>
                                                        b= <font size="4"><b>√</b></font>( 47.82 )
                                                        <br><br>
                                                        <b>b= 6.92 cm</b>
                                                        <br><br>
                                                        Por lo que el lado <b>b=6.92 cm</b>
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
                                                                Se dice que es una generalización de Pitágoras porque si uno de los ángulos es recto, el triángulo es rectángulo,
                                                                siendo la hipotenusa el lado opuesto a dicho ángulo y se obtiene el teorema de Pitágoras al aplicar el del coseno.
                                                                <br><br>
                                                                Por ejemplo, si α = 90º, entonces,
                                                                la primera de las tres fórmulas anteriores queda como
                                                                <br><br>
                                                                <b>a<sup>2</sup>= b<sup>2</sup> + c<sup>2</sup></b>
                                                                <br><br>
                                                                Siendo a la hipotenusa del triángulo.
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
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_coseno('1')">1</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_coseno('2')">2</button>
                                                <button class="btn btn-outline btn-primary dim" type="button" onclick="practicas_coseno('3')">3</button>
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
                                                                    <div class="col-lg-4">
                                                                        <img src="{{asset('img/iconos/triangulos/oblicuangulos/coseno/practica1/practica1.png')}}" width="100%">
                                                                    </div>
                                                                    <div class="col-lg-8">
                                                                        <br><br>
                                                                        Se tiene un triángulo cuyos lados <b>b</b> y <b>c</b> miden <b>45</b> y <b>66</b> cm respectivamente y cuyo ángulo <b>α</b> mide <b>47</b>°.
                                                                        <br><br>
                                                                        Hallar cuánto mide el lado <b>a</b> del triángulo.
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>a = 21 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe1" value="1" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe1"><b>Ecuación 1</b></label>
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
                                                                        <h3>a = 14.75 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe2" value="2" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe2"><b>Ecuación 2</b></label>
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
                                                                        <h3>a = 35.78 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe3" value="3" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe3"><b>Ecuación 3</b></label>
                                                                        </div>
                                                                        <div id="False3P1" style="display: none;">
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
                                                                        <h3>a = 48.27 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe4" value="4" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe4"><b>Ecuación 4</b></label>
                                                                        </div>
                                                                        <div id="True4P1" style="display: none;">
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
                                                                        <h3>a = 50 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe5" value="5" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe5"><b>Ecuación 5</b></label>
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
                                                                        <h3>a = 35.20 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="1rpe6" value="6" name="1rpe"
                                                                                   onclick="VerificarEvaluacion1P();">
                                                                            <label for="1rpe6"><b>Ecuación 6</b></label>
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
                                                                        Primero identificaremos la fórmula que nos brinde el resultado para el lado A, esta es:
                                                                        <br><br>
                                                                        <b>a<sup>2</sup> = b<sup>2</sup> + c<sup>2</sup> - 2 * b * c * cos(α)</b>
                                                                        <br><br>
                                                                        Despejamos A, esto significa convertir en raíz el operando de la izquierda:
                                                                        <br><br>
                                                                        <b>a= <font size="4"><b>√</b></font>( b<sup>2</sup> + c<sup>2</sup> - 2 * b * c * cos(α) )</b>
                                                                        <br><br>
                                                                        Sustituimos valores.
                                                                        <br><br>
                                                                        <b>a= <font size="4"><b>√</b></font>( 45<sup>2</sup> + 66<sup>2</sup> - 2 * 45 * 66 * cos(47) )</b>
                                                                        <br><br>
                                                                        Operamos términos
                                                                        <br><br>
                                                                        a= <font size="4"><b>√</b></font>( 2025 + 4356 - 5640 * 0.682 )
                                                                        <br><br>
                                                                        a= <font size="4"><b>√</b></font>( 6381 - 4051.08 )
                                                                        <br><br>
                                                                        a= <font size="4"><b>√</b></font>( 2329.92 )
                                                                        <br><br>
                                                                        <b>a= 48.27 cm</b>
                                                                        <br><br>
                                                                        Por lo que el lado <b>a = 48.27 cm</b>
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
                                                                    <div class="col-lg-3">
                                                                        <img src="{{asset('img/iconos/triangulos/oblicuangulos/coseno/practica2/practica2.png')}}" width="100%">
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <br><br>
                                                                        Si cierto triángulo tiene un lado de <b>25.5 cm</b> y otro de <b>37.5 cm</b> y sus respectivos ángulos opuestos son de <b>37°</b> y <b>62°</b>.
                                                                        <br><br>
                                                                        ¿Cuánto mide el otro lado?
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <center>
                                                                        <br>
                                                                        <h3>c = 38.25 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe1" value="1"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe1"><b>Ecuación 1</b></label>
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
                                                                        <h3>c = 40.83 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe2" value="2"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe2"><b>Ecuación 2</b></label>
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
                                                                        <h3>c = 45.93 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe3" value="3"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe3"><b>Ecuación 3</b></label>
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
                                                                        <h3>c = 50.12cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe4" value="4"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe4"><b>Ecuación 4</b></label>
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
                                                                        <h3>c = 43.36 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe5" value="5"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe5"><b>Ecuación 5</b></label>
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
                                                                        <h3>c = 41.93 cm</h3>
                                                                        <br>
                                                                        <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="2rpe6" value="6"
                                                                                   name="2rpe"
                                                                                   onclick="VerificarEvaluacion2P();">
                                                                            <label for="2rpe6"><b>Ecuación 6</b></label>
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
                                                                        Para hallar el lado c aplicaremos la siguiente fórmula del teorema del coseno:
                                                                        <br><br>
                                                                        <b>c<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> - 2 * a * b * cos(γ)</b>
                                                                        <br><br>
                                                                        Ya que no conocemos el ángulo para γ, lo obtenemos de la resta a 180 del ángulo α y β
                                                                        <br><br>
                                                                        γ = 180 - 37 - 62 = <b>81</b>
                                                                        <br><br>
                                                                        Despejamos C, esto significa convertir en raíz el operando de la izquierda:
                                                                        <br><br>
                                                                        <b>c= <font size="4"><b>√</b></font>( a<sup>2</sup> + b<sup>2</sup> - 2 * a * b * cos(γ) )</b>
                                                                        <br><br>
                                                                        Sustituimos valores.
                                                                        <br><br>
                                                                        <b>c= <font size="4"><b>√</b></font>( 25.5<sup>2</sup> + 37.5<sup>2</sup> - 2 * 25.5 * 37.5 * cos(81) )</b>
                                                                        <br><br>
                                                                        Operamos términos
                                                                        <br><br>
                                                                        c = <font size="4"><b>√</b></font>( 650.50 + 1406.25 - 1912.5 * 0.156 )
                                                                        <br><br>
                                                                        c = <font size="4"><b>√</b></font>( 2056.75 - 298.35 )
                                                                        <br><br>
                                                                        c = <font size="4"><b>√</b></font>( 1758.4 )
                                                                        <br><br>
                                                                        <b>c = 41.93 cm</b>
                                                                        <br><br>
                                                                        Por lo que el lado <b>c = 41.93 cm</b>
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
                                                                <div class="col-lg-3">
                                                                    <img src="{{asset('img/iconos/triangulos/oblicuangulos/coseno/practica3/practica3.png')}}" width="100%">
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <br><br>
                                                                    ¿Cuál es el valor del ángulo γ del siguiente triángulo si se sabe que los lados <b>a, b y c</b> miden <b>6, 8 y 12 cm</b> respectivamente?
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <center>
                                                                    <br>
                                                                    <h3>γ = 110.53°</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe1" value="1"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe1"><b>Ecuación 1</b></label>
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
                                                                    <h3>γ = 117.28°</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe2" value="2"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe2"><b>Ecuación 2</b></label>
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
                                                                    <h3>γ = 116.15°</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe3" value="3"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe3"><b>Ecuación 3</b></label>
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
                                                                    <h3>γ = 115.50°</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe4" value="4"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe4"><b>Ecuación 4</b></label>
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
                                                                    <h3>γ = 108.20°</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe5" value="5"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe5"><b>Ecuación 5</b></label>
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
                                                                    <h3>γ = 111.25°</h3>
                                                                    <br>
                                                                    <div class="radio radio-info radio-inline">
                                                                        <input type="radio" id="3rpe6" value="6"
                                                                               name="3rpe"
                                                                               onclick="VerificarEvaluacion3P();">
                                                                        <label for="3rpe6"><b>Ecuación 6</b></label>
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
                                                                    Para hallar el ángulo γ aplicaremos la siguiente fórmula del teorema del coseno:
                                                                    <br><br>
                                                                    <b>c<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup> - 2 * a * b * cos(γ)</b>
                                                                    <br><br>
                                                                    Como conocemos todos los datos necesarios, los sustituimos en la fórmula y despejamos el ángulo γ aplicando la inversa arccos:
                                                                    <br><br>
                                                                    <table border="0" style="text-align: center;">
                                                                        <tr>
                                                                            <td rowspan="2"><b>γ = arccos (&nbsp;&nbsp;</b></td>
                                                                            <td style="border-bottom: 1px solid forestgreen"><b>c<sup>2</sup> - b<sup>2</sup> - a<sup>2</sup></b></td>
                                                                            <td rowspan="2"><b>&nbsp;&nbsp;)</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>-2ab</b></td>
                                                                        </tr>
                                                                    </table>
                                                                <br>
                                                                Sustituimos valores
                                                                <br><br>
                                                                <table border="0" style="text-align: center;">
                                                                    <tr>
                                                                        <td rowspan="2"><b>γ = arccos (&nbsp;&nbsp;</b></td>
                                                                        <td style="border-bottom: 1px solid forestgreen"><b>12<sup>2</sup> - 6<sup>2</sup> - 8<sup>2</sup></b></td>
                                                                        <td rowspan="2"><b>&nbsp;&nbsp;)</b></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><b>-2 * 6 * 8</b></td>
                                                                    </tr>
                                                                </table>
                                                                <br>
                                                                Realizamos los cuadrados
                                                                <br><br>
                                                                <table border="0" style="text-align: center;">
                                                                    <tr>
                                                                        <td rowspan="2">γ = arccos (&nbsp;&nbsp;</td>
                                                                        <td style="border-bottom: 1px solid forestgreen">144 - 36 - 64</td>
                                                                        <td rowspan="2">&nbsp;&nbsp;)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>-96</td>
                                                                    </tr>
                                                                </table>
                                                                <br>
                                                                Operamos terminos
                                                                <br><br>
                                                                <table border="0" style="text-align: center;">
                                                                    <tr>
                                                                        <td rowspan="2">γ = arccos (&nbsp;-&nbsp;</td>
                                                                        <td style="border-bottom: 1px solid forestgreen">11</td>
                                                                        <td rowspan="2">&nbsp;&nbsp;)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>24</td>
                                                                    </tr>
                                                                </table>
                                                                <br>
                                                                Efectuando el arcocoseno
                                                                <br><br>
                                                                <b>γ = 117.28</b>
                                                                <br><br>
                                                                Por lo tanto el ángulo γ es igual a <b>117.28°</b>
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
            $("#False3P1").fadeOut(0);
            $("#True4P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#False5P1").fadeOut(0);
            $("#False1P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP1").fadeOut(0);
            $("#CP1").fadeIn(300);
        } else {
            $("#False1P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 2) {
            $("#False1P1").fadeOut(0);
            $("#False3P1").fadeOut(0);
            $("#True4P1").fadeOut(0);
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
            $("#True4P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#False5P1").fadeOut(0);
            $("#False3P1").fadeIn(300);
            toastr.error('Has seleccionado la respuesta incorrecta', 'Lo Siento');
            $("#EP1").fadeOut(0);
            $("#CP1").fadeIn(300);
        } else {
            $("#False3P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 4) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#False3P1").fadeOut(0);
            $("#False6P1").fadeOut(0);
            $("#False5P1").fadeOut(0);
            $("#True4P1").fadeIn(300);
            toastr.success('Has seleccionado la respuesta correcta, continua practicando', 'Excelente');
            $("#CP1").fadeOut(0);
            $("#EP1").fadeIn(300);
        } else {
            $("#True4P1").fadeOut(0);
        }
        if ($('input:radio[name=1rpe]:checked').val() == 5) {
            $("#False1P1").fadeOut(0);
            $("#False2P1").fadeOut(0);
            $("#False3P1").fadeOut(0);
            $("#True4P1").fadeOut(0);
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
            $("#False3P1").fadeOut(0);
            $("#True4P1").fadeOut(0);
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
    function practicas_coseno(op){
        switch (op){
            case '1':{
                $('#pract_desigualdades1').show();
                $('#pract_desigualdades2').hide();
                $('#pract_desigualdades3').hide();
            }break;
            case '2':{
                $('#pract_desigualdades1').hide();
                $('#pract_desigualdades2').show();
                $('#pract_desigualdades3').hide();
            }break;
            case '3':{
                $('#pract_desigualdades1').hide();
                $('#pract_desigualdades2').hide();
                $('#pract_desigualdades3').show();
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