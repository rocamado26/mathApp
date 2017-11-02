<div class="ibox float-e-margins animated fadeInUpBig">
    <div class="ibox-title">
        <h5>Sucesiones Aritméticas - <small> Caracteristicas</small></h5>
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
                                <!--colocalcion de teoría-->
                                <div class="col-lg-12">
                                    <p style="text-align: justify;">
                                        Se conoce como una sucesión aritmética a un conjunto de números dispuestos uno a continuación de otro: <b>a<sub>1</sub>, a<sub>2</sub>, a<sub>3</sub>, ..., a<sub>n</sub></b>
                                        <br><br>
                                        Es importante saber que la diferencia entre dos términos consecutivos es una constante <b><i>d</i></b>, excepto el primer término que es dado. El valor de la constante <b><i>d</i></b> puede ser positivo o negativo.
                                        <br><br>
                                        <div class="col-lg-5">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Debes saber que,
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            *  A los valores que conforman la sucesión se les llaman <b><u>términos, elementos o miembros de la sucesión.</u></b>
                                                                        </div><!--cierre del div col-lg-12-->
                                                                    </div><!--cierre del div row-->
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            * La <b>diferencia <i>(d)</i></b> es la distancia que existe entre cada termino de la sucesión.
                                                                        </div><!--cierre del div col-lg-12-->
                                                                    </div><!--cierre del div row-->                            
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            * Las sucesiones aritméticas generalmente tienden al infinito, lo que significa que no tienen fin.
                                                                        </div><!--cierre del div col-lg-12-->
                                                                    </div><!--cierre del div row-->
                                                                </div><!--cierre del div col-lg-12-->
                                                            </div><!--cierre del div row-->
                                                        </div><!--cierre del div col-lg-12-->
                                                    </div><!--cierre del div row-->
                                                </div><!--cierre del div panel body-->
                                            </div><!--cierre del div panel default-->
                                        </div><!--cierre div col-lg-5, debes saber-->
                                        <!--inicio del div ejemplo-->
                                        <div class="col-lg-7">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Ejemplo:
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div id="principal">
                                                                                <center><img src="img/iconos/sucesiones/aritmeticas/caracteristicas/sucesiones.png" width="100%" height="150px" style="position: center;"></center>
                                                                            </div><!--cierre div principal-->
                                                                        </div><!--cierre col-lg-12-->
                                                                    </div><!--cierre div row-->
                                                                </div><!--cierre div col-lg-12-->
                                                            </div><!--cierre div row-->
                                                        </div><!--cierre col-lg-12-->
                                                    </div><!--cierre div row-->
                                                </div><!--cierre panel body-->
                                            </div><!--cierree panel default-->
                                        </div><!--cierre div col-lg-7, ejemplo...-->
                                    </p><!--cierre de etiqueta p, inicio de teoría-->
                                </div><!--cierre div col-lg-12, inicio de teoría-->
                                <!--div para colocar los botones de tipos sucesiones-->
                                <div class="col-lg-12">
                                    <p style="text-align: justify;">
                                    <br>
                                        Existen distintos tipos de sucesiones aritméticas, las cuales son:
                                        <br>
                                        <center>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button id="btnRegla" onclick="CambioInformacion(1)" type="button" class="btn btn-info animation_select" data-animation="flipInX">Regla General</button>
                                                    &nbsp;
                                                    <button id="btnCreciente" onclick="CambioInformacion(2)" type="button" class="btn btn-white animation_select" data-animation="flipInX">Sucesiones Crecientes</button>
                                                    &nbsp;
                                                    <button id="btnDecreciente" onclick="CambioInformacion(3)" type="button" class="btn btn-white animation_select" data-animation="flipInX">Sucesiones Decrecientes</button>
                                                </div><!--cierre div col-lg-12-->
                                            </div><!--cierre div row-->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button id="btnAcotadas" onclick="CambioInformacion(4)" type="button" class="btn btn-white animation_select" data-animation="flipInX">Sucesiones Acotadas</button>
                                                    &nbsp;
                                                    <button id="btnConvergentes" onclick="CambioInformacion(5)" type="button" class="btn btn-white animation_select" data-animation="flipInX">Sucesiones Convergentes</button>
                                                    &nbsp;
                                                    <button id="btnDivergentes" onclick="CambioInformacion(6)" type="button" class="btn btn-white animation_select" data-animation="flipInX">Sucesiones Divergentes</button>
                                                </div><!--cierre div col-lg-12-->
                                            </div><!--cierre div row-->
                                        </center><!--cierre etiqueta center-->
                                    </p><!--cierre etiqueta p-->
                                </div><!--cierre del div col-lg-12, botones...-->
                                <div class="col-lg-1"></div>
                                <!--div para los cuadros informativos-->
                                    <div class="col-lg-12">
                                        <div id="animation_info" class="animated">
                                        <br><br>
                                            <div class="panel panel-default">
                                                <div id="tituloPanelInfo" class="panel-heading">
                                                    Regla General de las Sucesiones Aritméticas:
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                        <br>
                                                                         <p style="text-align: justify;">
                                                                            El término n-ésimo o término general <b>a<sub>n</sub></b> de una progresión aritmética se obtiene sumando al primer término la diferencia multiplicada por (n -1). Es decir:</p>
                                                                            <center><font size="5"><b>a<sub>n</sub>=a<sub>1</sub>+(n-1)d</b></font></center>
                                                                            Ejemplos:
                                                                            <br><br>
                                                                            <div class="tabs-container alert alert-info">
                                                                                <div class="tabs-left">
                                                                                    <ul class="nav nav-tabs">
                                                                                        <li class="active"><a data-toggle="tab" href="#tab-6"> Ejemplo 1</a></li>
                                                                                        <li class=""><a data-toggle="tab" href="#tab-7">Ejemplo 2</a></li>
                                                                                    </ul>
                                                                                    <div class="tab-content">
                                                                                        <div id="tab-6" class="tab-pane active">
                                                                                            <div class="panel-body">
                                                                                                Hallar el octavo término de una progresión aritmética cuyo primer término es 3 y cuya razón es 5. 
                                                                                                <br><br>
                                                                                                Como <i>a<sub>1</sub></i> = 3, <i>d</i> = 5 y <i>n</i> = 8, se tiene:
                                                                                                <br><br>
                                                                                                <b>a<sub>n</sub></b> = a<sub>1</sub>+(n-1)d
                                                                                                <br><br>
                                                                                                Sustituimos los valores que hemos encontrados en la formula, quedando lo siguiente:
                                                                                                <br><br>
                                                                                                <b>a<sub>8</sub></b> = 3+(8-1)5
                                                                                                <br><br>
                                                                                                <b>a<sub>8</sub></b> = 3+(7)5
                                                                                                <br><br>
                                                                                                <b>a<sub>8</sub></b> = 3+35
                                                                                                <br><br>
                                                                                                <b>a<sub>8</sub> = 38</b>
                                                                                            </div><!--cierre panel body-->
                                                                                        </div><!--cierre tab 6-->
                                                                                        <div id="tab-7" class="tab-pane">
                                                                                            <div class="panel-body">
                                                                                                Encontrar el cuarto término de la siguiente sucesión 
                                                                                                <center><font size="4"><b> 3, 8, 13, ?, 23, 28, 33, 38, ...</b></font></center>
                                                                                                Tenemos los valores para el primer término (<i>a<sub>1</sub></i> = 3) y la diferecia común (<i>d</i> = 5).
                                                                                                <br><br>
                                                                                                Dado que en este caso, necesitamos buscar el cuarto valor de la sucesión, tendremos que despejar la formular para encontrar este cuarto término: 
                                                                                                <br><br>
                                                                                                <center><b>a<sub>4</sub></b> = a<sub>1</sub>+(n-1)d</center>
                                                                                                <br><br>
                                                                                                <center><b>a<sub>4</sub></b> = 3+(n-1)5</center>
                                                                                                <br><br>
                                                                                                <center><b>a<sub>4</sub></b> = 3+5n-5</center>
                                                                                                <br><br>
                                                                                                <center><b>a<sub>4</sub> = 5n-2</b></center>
                                                                                                <br><br>
                                                                                                Una vez despejada la formula, colocamos los valores que tenemos para darle solución a la sucesion y calculamos el cuarto término, el cual es:
                                                                                                <br><br>
                                                                                                <center><b>a<sub>4</sub></b> = 5(4)-2</center>
                                                                                                <br><br>
                                                                                                <center><b>a<sub>4</sub></b> = 20-2</center>
                                                                                                <br><br>
                                                                                                <center><b>a<sub>4</sub> = 18</b></center>
                                                                                            </div><!--cierre div panel boy-->
                                                                                        </div><!--cierre tab 7-->
                                                                                    </div><!--cierre tab content-->
                                                                                </div><!--cierre tabs left-->
                                                                            </div><!--cierre tabs container-->   
                                                                        </div><!--cierre div col-lg-12-->
                                                                    </div><!--cierre del div row-->
                                                                </div><!--cierre del col-lg-12-->
                                                            </div><!--cierre del div row-->
                                                        </div><!--cierre del div col-lg-12-->
                                                    </div><!--cierre del div row-->
                                                </div><!--cierre del panel body-->
                                            </div><!--cierre del panel default-->
                                        </div><!--cierre del div animated, informacion teoría-->
                                        <!--div para el cuadro de sucesiones crecientes-->
                                        <div id="animation_creci" class="animated" style="display: none;">
                                            <br><br>
                                            <div class="panel panel-default">
                                                <div id="tituloPanelInfo" class="panel-heading">
                                                    Sucesiones Crecientes:
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <br>
                                                                            <p style="text-align: justify;">                                
                                                                                Una sucesión es creciente si se cumple que todo termino <b>n</b> es menor que el siguiente valor de la sucesión.
                                                                                <br><br>
                                                                                Es decir:
                                                                                <center><font size="5">a<sub>1</sub> &le; a<sub>2</sub> &le; a<sub>3</sub> ... a<sub>n</sub></font></center>
                                                                                <br>
                                                                                <div class="col-lg-5 alert alert-info">
                                                                                    <b>Ejemplo 1:</b>
                                                                                    <br><br>
                                                                                    Tenemos la siguiente sucesión: 
                                                                                    <br><br>
                                                                                    <font size="3">1, 3, 5, 7, 9, ...</font>
                                                                                    <br><br>
                                                                                    <b>Donde se puede observar que el primer valor de la sucesión <b>(1)</b>, es superado por su siguiente valor <b>(3)</b>, siendo la diferencia entre cada valor de <b>2</b></b>
                                                                                    <br>    
                                                                                </div>
                                                                                <div class="col-lg-2"></div>
                                                                                <div class="col-lg-5 alert alert-info">
                                                                                    <b>Ejemplo 2:</b>
                                                                                    <br><br>
                                                                                    Tenemos la siguiente sucesión: 
                                                                                    <br><br>
                                                                                    <font size="3">10, 15, 20, 25, 30, ...</font>
                                                                                    <br><br>
                                                                                    <b>Donde se puede observar que el primer valor de la sucesión <b> (10)</b>, es superado por su siguiente valor <b>(15)</b>, siendo la diferencia entre cada valor de <b>5</b></b>
                                                                                    <br>
                                                                                </div>    
                                                                            </p>   
                                                                        </div><!--cierre del codigo del ejercicio-->
                                                                    </div><!--cierre del div row-->
                                                                </div><!--cierre del div col-lg-12-->
                                                            </div><!--cierre del div row-->
                                                        </div><!--cierre del div col-lg-12-->
                                                    </div><!--cierre del div row-->
                                                </div><!--cierre panel body-->
                                            </div><!--cierre panel default-->
                                        </div><!--cierre del div animated, informacion creciente-->
                                        <!--div para controlar la informacion de las sucesiones decrecientes-->
                                        <div id="animation_decre" class="animated" style="display: none;">
                                            <br><br>
                                            <div class="panel panel-default">
                                                <div id="tituloPanelInfo" class="panel-heading">
                                                    Sucesiones Decrecientes:
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <br>
                                                                            <p style="text-align: justify;">                                
                                                                                Una sucesión es decreciente si se cumple que todo termino <b>n</b> es mayor que el siguiente valor de la sucesión.
                                                                                <br><br>
                                                                                Es decir:
                                                                                <center><font size="5">a<sub>1</sub> &ge; a<sub>2</sub> &ge; a<sub>3</sub> ... a<sub>n</sub></font></center>
                                                                                <br>
                                                                                <div class="col-lg-5 alert alert-info">
                                                                                    <b>Ejemplo 1:</b>
                                                                                    <br><br>
                                                                                    Tenemos la siguiente sucesión: 
                                                                                    <br><br>
                                                                                    <font size="3">20, 16, 12, 8, 4, ...</font>
                                                                                    <br><br>
                                                                                    <b>Donde se puede observar que el primer valor de la sucesión <b>(20)</b>, es mayor que el siguiente valor <b>(16)</b>, siendo la diferencia entre cada valor de <b>4</b></b>
                                                                                </div>
                                                                                <div class="col-lg-2"></div>
                                                                                <div class="col-lg-5 alert alert-info">
                                                                                    <b>Ejemplo 2:</b>
                                                                                    <br><br>
                                                                                    Tenemos la siguiente sucesión: 
                                                                                    <br><br>
                                                                                    <font size="3">3.5, 2, 2.50, 1, 1.50, ...</font>
                                                                                    <br><br>
                                                                                    <b>Donde se puede observar que el primer valor de la sucesión <b>(3.5)</b>, es mayor que el siguiente valor <b>(2)</b>, siendo la diferencia entre cada valor de <b>0.5</b></b>
                                                                                </div>    
                                                                            </p>   
                                                                        </div><!--cierre del codigo del ejercicio-->
                                                                    </div><!--cierre del div row-->
                                                                </div><!--cierre del div col-lg-12-->
                                                            </div><!--cierre del div row-->
                                                        </div><!--cierre del div col-lg-12-->
                                                    </div><!--cerre del div row-->
                                                </div><!--cierre del panel body-->
                                            </div><!--cierre del panel panel-default-->
                                        </div><!--cierre del div animated, informacion decrecientes-->
                                        <!--div para controlar la informacion de las sucesiones acotadas-->
                                        <div id="animation_acotadas" class="animated" style="display: none;">
                                            <br><br>
                                            <div class="panel panel-default">
                                                <div id="tituloPanelInfo" class="panel-heading">
                                                    Sucesiones Acotadas:
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <br>
                                                                            <p style="text-align: justify;">                                
                                                                                Existen 3 tipos de sucesiones acotadas, estas son: 
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="col-lg-5 alert alert-info">
                                                                                            <div class="tabs-container">
                                                                                                <ul class="nav nav-tabs">
                                                                                                    <li class="active"><a data-toggle="tab" href="#tab-i1">Acotada Inferior</a></li>
                                                                                                    <li class=""><a data-toggle="tab" href="#tab-i2">Ejemplo</a></li>
                                                                                                </ul>
                                                                                                <div class="tab-content ">
                                                                                                    <div id="tab-i1" class="tab-pane active">
                                                                                                        <div class="panel-body">
                                                                                                            <p style="text-align: justify;">
                                                                                                                <b>* Sucesiones Acotadas Inferiormente</b>
                                                                                                                <br><br>
                                                                                                                Una sucesión está acotada inferiormente si todos sus términos son mayores o iguales que un cierto número <b>k</b>, que llamaremos <b>cota inferior de la sucesión.</b>
                                                                                                                <br><br>
                                                                                                                Es decir:
                                                                                                                <center><font size="3"><b>a<sub>n</sub> &ge; k</b></font></center>
                                                                                                                <br><br>
                                                                                                                A la mayor de las cotas inferiores se le llama <b>extremo inferior o ínfimo</b>.
                                                                                                                <br><br>
                                                                                                                Si el extremo inferior o ínfimo de una sucesión es uno de sus términos se le llama <b>mínimo</b>.
                                                                                                                <br><br>
                                                                                                                Toda sucesión monótona decreciente y acotada inferiormente es convergente y su límite es igual al ínfimo de la sucesión.
                                                                                                            </p>
                                                                                                        </div><!--cierre panel body-->
                                                                                                    </div><!--cierre tab 6-->
                                                                                                    <div id="tab-i2" class="tab-pane">
                                                                                                        <div class="panel-body">
                                                                                                            Tenemos la siguiente sucesión aritmética:
                                                                                                            <br><br> 
                                                                                                            <center><font size="3"><b> a<sub>n</sub> = 1, 2, 3, 4, 5, ...n</b></font></center>
                                                                                                            <br>
                                                                                                            Está <b>acotada inferiormente</b>
                                                                                                            <br><br>
                                                                                                            El mínimo es <b>1.</b>
                                                                                                            <br><br>
                                                                                                            Cotas inferiores: <b>1, 0, -1, ... </b>
                                                                                                            <br><br>
                                                                                                            No está acotada superiormente.
                                                                                                        </div><!--cierre div panel boy-->
                                                                                                    </div><!--cierre tab 7-->
                                                                                                </div><!--cierre tab content-->
                                                                                            </div><!--cierre tabs container-->
                                                                                        </div>
                                                                                        <div class="col-lg-2"></div>
                                                                                        <div class="col-lg-5 alert alert-info">
                                                                                            <div class="tabs-container">
                                                                                                <ul class="nav nav-tabs">
                                                                                                    <li class="active"><a data-toggle="tab" href="#tab-s1">Acotada Superior</a></li>
                                                                                                    <li class=""><a data-toggle="tab" href="#tab-s2">Ejemplo</a></li>
                                                                                                </ul>
                                                                                                <div class="tab-content ">
                                                                                                    <div id="tab-s1" class="tab-pane active">
                                                                                                        <div class="panel-body">
                                                                                                            <p style="text-align: justify;">
                                                                                                                <b>* Sucesiones Acotadas Superiormente</b>
                                                                                                                <br><br>
                                                                                                                Una sucesión está acotada superiormente si todos sus términos son menores o iguales que un cierto número <b>k'</b>, que llamaremos <b>cota superior de la sucesión.</b>
                                                                                                                <br><br>
                                                                                                                Es decir:
                                                                                                                <center><font size="3"><b>a<sub>n</sub> &le; k'</b></font></center>
                                                                                                                <br><br>
                                                                                                                A la menor de las cotas superiores se le llama <b>extremo superior o supremo</b>.
                                                                                                                <br><br>
                                                                                                                Si el extremo superior o supremo de una sucesión es uno de sus términos <b>máximo</b>.
                                                                                                                <br><br>
                                                                                                                Toda sucesión monótona creciente y acotada superiormente es convergente y su límite es igual al supremo de la sucesión.
                                                                                                            </p>
                                                                                                        </div><!--cierre panel body-->
                                                                                                    </div><!--cierre tab 6-->
                                                                                                    <div id="tab-s2" class="tab-pane">
                                                                                                        <div class="panel-body">
                                                                                                            Tenemos la siguiente sucesión aritmética:
                                                                                                            <br><br> 
                                                                                                            <center><font size="3"><b> a<sub>n</sub> = -1, -2, -3, -4, -5, ... -n</b></font></center>
                                                                                                            <br>
                                                                                                            Está <b>acotada superiormente</b>
                                                                                                            <br><br>
                                                                                                            El máximo es <b>-1.</b>
                                                                                                            <br><br>
                                                                                                            Cotas superiores: <b>-1, 0, 1, ...</b>
                                                                                                            <br><br>
                                                                                                            No está acotada inferiormente.
                                                                                                        </div><!--cierre div panel boy-->
                                                                                                    </div><!--cierre tab 7-->
                                                                                                </div><!--cierre tab content-->
                                                                                            </div><!--cierre tabs container-->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="col-lg-3"></div>
                                                                                        <div class="col-lg-5 alert alert-info">
                                                                                            <div class="tabs-container">
                                                                                                <ul class="nav nav-tabs">
                                                                                                    <li class="active"><a data-toggle="tab" href="#tab-m1">Sucesiones Acotadas</a></li>
                                                                                                    <li class=""><a data-toggle="tab" href="#tab-m2">Ejemplo</a></li>
                                                                                                </ul>
                                                                                                <div class="tab-content ">
                                                                                                    <div id="tab-m1" class="tab-pane active">
                                                                                                        <div class="panel-body">
                                                                                                            <p style="text-align: justify;">
                                                                                                                <b>* Sucesiones Acotadas</b>
                                                                                                                <br><br>
                                                                                                                <b>Una sucesión se dice acotada si está acotada superior e inferiormente.</b> Es decir si hay un número <b>k</b> menor o igual que todos los términos de la sucesión y otro <b>k'</b> mayor o igual que todos los términos de la sucesión. Por lo que <b>todos los términos de la sucesión están comprendidos entre k y K'.</b>
                                                                                                                <br><br>
                                                                                                                Es decir:
                                                                                                                <center><font size="3"><b>k &le; a<sub>n</sub> &le; k'</b></font></center>
                                                                                                            </p>
                                                                                                        </div><!--cierre panel body-->
                                                                                                    </div><!--cierre tab 6-->
                                                                                                    <div id="tab-m2" class="tab-pane">
                                                                                                        <div class="panel-body">
                                                                                                            Tenemos la siguiente sucesión aritmética:
                                                                                                            <br><br> 
                                                                                                            <center><font size="3"><b> a<sub>n</sub> = 2, 3/2, 4/3, 5/4, ..., n+1 /n</b></font></center>
                                                                                                            <br>
                                                                                                            Está <b>acotada superiormente</b>
                                                                                                            <br><br>
                                                                                                            El máximo es <b>2.</b>
                                                                                                            <br><br>
                                                                                                            Cotas superiores: <b>2, 3, 4, ...</b>
                                                                                                            <br><br>
                                                                                                            Está <b>acotada inferiormente</b>
                                                                                                            <br><br>
                                                                                                            El minimo es <b>1.</b>
                                                                                                            <br><br>
                                                                                                            Cotas inferiores: <b>1, 0, -1, ...</b>
                                                                                                        </div><!--cierre div panel boy-->
                                                                                                    </div><!--cierre tab 7-->
                                                                                                </div><!--cierre tab content-->
                                                                                            </div><!--cierre tabs container-->
                                                                                        </div>  
                                                                                    </div>  
                                                                                </div>
                                                                            </p>   
                                                                        </div><!--cierre del codigo del ejercicio-->
                                                                    </div><!--cierre del div row-->
                                                                </div><!--cierre del div col-lg-12-->
                                                            </div><!--cierre del div row-->
                                                        </div><!--cierre del div col-lg-12-->
                                                    </div><!--cerre del div row-->
                                                </div><!--cierre del panel body-->
                                            </div><!--cierre del panel panel-default-->
                                        </div><!--cierre del div animated, informacion acotadas-->
                                        <!--div para controlar la informacion de las sucesiones convergentes-->
                                        <div id="animation_conver" class="animated" style="display: none;">
                                            <br><br>
                                            <div class="panel panel-default">
                                                <div id="tituloPanelInfo" class="panel-heading">
                                                    Sucesiones Convergentes:
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <br>
                                                                            <p style="text-align: justify;">                                
                                                                                Toda sucesión aritmética que tenga un limite, se dice que es convergente
                                                                                <br><br>
                                                                                <div class="col-lg-5 alert alert-info">
                                                                                    <b>Ejemplo 1:</b>
                                                                                    <br><br>
                                                                                    Tenemos la siguiente sucesión: 
                                                                                    <br><br>
                                                                                    <font size="3">1, 1/2, 1/3, 1/4 , 1/5, ..., 1/n</font>
                                                                                    <br><br>
                                                                                    Donde el limite de dicha sucesión es <b>0</b>.
                                                                                    <br><br>
                                                                                    <b>Esto significa que la sucesión continuara hasta que el ultimo termino sea cero (0)</b>
                                                                                </div>
                                                                                <div class="col-lg-2"></div>
                                                                                <div class="col-lg-5 alert alert-info">
                                                                                    <b>Ejemplo 2:</b>
                                                                                    <br><br>
                                                                                    Tenemos la siguiente sucesión: 
                                                                                    <br><br>
                                                                                    <font size="3">2, 3/2, 4/3, 5/4, ..., n+1 /n </font>
                                                                                    <br><br>
                                                                                    Donde el limite de dicha sucesión es <b>1</b>.
                                                                                    <br><br>
                                                                                    <b>Esto significa que la sucesión continuara hasta que el ultimo termino sea uno (1)</b>
                                                                                </div>    
                                                                            </p>   
                                                                        </div><!--cierre del codigo del ejercicio-->
                                                                    </div><!--cierre del div row-->
                                                                </div><!--cierre del div col-lg-12-->
                                                            </div><!--cierre del div row-->
                                                        </div><!--cierre del div col-lg-12-->
                                                    </div><!--cerre del div row-->
                                                </div><!--cierre del panel body-->
                                            </div><!--cierre del panel panel-default-->
                                        </div><!--cierre del div animated, informacion convergentes-->
                                        <!--div para controlar la informacion de las sucesiones divergentes-->
                                        <div id="animation_diver" class="animated" style="display: none;">
                                            <br><br>
                                            <div class="panel panel-default">
                                                <div id="tituloPanelInfo" class="panel-heading">
                                                    Sucesiones Divergentes:
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <br>
                                                                            <p style="text-align: justify;">                                
                                                                                Al contrarios de las sucesiones convergentes, las sucesiones divergentes son aquellas que tienen un límite infinito.
                                                                                <br><br>
                                                                                <div class="col-lg-5 alert alert-info">
                                                                                    <b>Ejemplo 1:</b>
                                                                                    <br><br>
                                                                                    Tenemos la siguiente sucesión: 
                                                                                    <br><br>
                                                                                    <font size="3">7, 5, 9, 11, 13 ..., n</font>
                                                                                    <br><br>
                                                                                    Donde el limite de dicha sucesión es <b>infinito</b>..
                                                                                </div>
                                                                                <div class="col-lg-2"></div>
                                                                                <div class="col-lg-5 alert alert-info">
                                                                                    <b>Ejemplo 2:</b>
                                                                                    <br><br>
                                                                                    Tenemos la siguiente sucesión: 
                                                                                    <br><br>
                                                                                    <font size="3">-1, -2,-3, -4, -5, ..., -n</font>
                                                                                    <br><br>
                                                                                    Donde el limite de dicha sucesión es <b>infinito</b>.
                                                                                </div>    
                                                                            </p>   
                                                                        </div><!--cierre del codigo del ejercicio-->
                                                                    </div><!--cierre del div row-->
                                                                </div><!--cierre del div col-lg-12-->
                                                            </div><!--cierre del div row-->
                                                        </div><!--cierre del div col-lg-12-->
                                                    </div><!--cerre del div row-->
                                                </div><!--cierre del panel body-->
                                            </div><!--cierre del panel panel-default-->
                                        </div><!--cierre del div animated, informacion divergentes-->
                                    </div><!--cierre del div para los cuadros informativos-->
                            </div><!--cierre div row -->
                        </div><!--panel body teoría-->
                    </div><!--cieere div collpase-->
                </div><!--cierre panel defaul teoría-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><b> Resolución de Ejercicios - Paso 1: Análisis del ejercicio</b></a>
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
                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Valores de la sucesión:
                                        </div>
                                            <div class="panel-body">
                                                <div class="row"  id="tour1-1">
                                                    <div class="col-lg-12">
                                                        <div class="alert alert-warning">
                                                            <div class="form-group">
                                                                <label>Tipo Númerico:</label>
                                                                <br>
                                                                <div class="radio radio-info radio-inline">
                                                                    <input type="radio" id="radioE" value="1" name="radioNumerico" onclick="cambioTipoDato(this)" checked>
                                                                    <label for="radioEntero">Enteros</label>
                                                                    <br>
                                                                    <input type="radio" id="radioF" value="2" name="radioNumerico" onclick="cambioTipoDato(this)">
                                                                    <label for="radioFraccionario">Fraccionarios</label>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </div>    
                                                </div>
                                                <br>
                                                <div class="row"  id="tour1-2">
                                                    <div class="col-lg-12">
                                                        <div class="alert alert-warning">
                                                            <div class="form-group">
                                                                <label>Variable a despejar:</label>
                                                                <br>
                                                                <div class="radio radio-info radio-inline">
                                                                    <input type="radio" id="terminoD" value="2" name="radioTipo" onclick="cambioMostarFormula(this)">
                                                                    <label for="radioTipo2">Término Deseado(a<sub>n</sub>)</label>
                                                                    <br>
                                                                    <input type="radio" id="numeroT" value="3" name="radioTipo" onclick="cambioMostarFormula(this)">
                                                                    <label for="radioTipo3">Número de Términos (n)</label>
                                                                    <br>
                                                                    <input type="radio" id="distanciaT" value="4" name="radioTipo" onclick="cambioMostarFormula(this)">
                                                                    <label for="radioTipo4">Distancia entre Términos(d)</label>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div id="tour1-3">
                                                    <!--<div class="col-lg-12">-->
                                                        <div class="alert alert-warning">
                                                            <div id="contenedorEnteros">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Primer Término <b>(a<sub>1</sub>)</b>:</label>
                                                                            <input type="number" placeholder="?" class="form-control" value="" id="a1"  onkeyup="DatoIngresado(this,'1');">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label id="labelTerminoD">Término Deseado <b>(a<sub>n</sub>)</b>:</label>
                                                                            <input type="number" placeholder="?" class="form-control" value="" id="an" onkeyup="DatoIngresado(this,'2');">
                                                                        </div>
                                                                    </div>                         
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label id="labelDistanciaT">Distancia entre Términos <b>(d)</b>:</label>
                                                                            <input type="number" placeholder="?" class="form-control" value="" id="distancia" onkeyup="DatoIngresado(this,'3');">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label id="labelNumeroT">Número de Términos: <b>(n)</b>:</label>
                                                                            <input type="number" placeholder="?" class="form-control" value="" id="nterminos" onkeyup="DatoIngresado(this,'4');">
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--OBTENCION DE DATOS PARA CASOS FRACCIONARIOS-->
                                                            <div id="contenedorFracciones" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Primer Término <b>(a<sub>1</sub>)</b>:</label>
                                                                            <table id="tablePrimerTermino" style="border: 1px white transparent;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td rowspan="2"><input type="text" placeholder="?" class="form-control col-lg-3" value="" id="enteroPT" onkeyup="DatoIngresadoF('1');"></td>
                                                                                        <td style="border-bottom: 1px black solid;"><input type="text" placeholder="?" class="form-control col-lg-3" value="" id="numeradorPT" onkeyup="DatoIngresadoF('1');"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><input type="text" placeholder="?" class="form-control col-lg-3" value="" id="denominadorPT" onkeyup="DatoIngresadoF('1');"></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label id="labelDistanciaTF">Distancia entre Términos <b>(d)</b>:</label>
                                                                            <table id="tableDistanciaTermino" style="border: 1px white transparent;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td rowspan="2"><input type="text" placeholder="?" class="form-control col-lg-3" value="" id="enteroDT" onkeyup="DatoIngresadoF('2');"></td>
                                                                                        <td style="border-bottom: 1px black solid;"><input type="text" placeholder="?" class="form-control col-lg-3" value="" id="numeradorDT" onkeyup="DatoIngresadoF('2');"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><input type="text" placeholder="?" class="form-control col-lg-3" value="" id="denominadorDT" onkeyup="DatoIngresadoF('2');"></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label id="labelTerminoDF">Término Deseado <b>(a<sub>n</sub>)</b>:</label>
                                                                            <table id="tableTerminoDeseado" style="border: 1px white transparent;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td rowspan="2"><input type="text" placeholder="?" class="form-control col-lg-3" value="" id="enteroTD" onkeyup="DatoIngresadoF('3');"></td>
                                                                                        <td style="border-bottom: 1px black solid;"><input type="text" placeholder="?" class="form-control col-lg-3" value="" id="numeradorTD" onkeyup="DatoIngresadoF('3');"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><input type="text" placeholder="?" class="form-control col-lg-3" value="" id="denominadorTD" onkeyup="DatoIngresadoF('3');"></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label id="labelNumeroTF">Número de Términos: <b>(n)</b>:</label>
                                                                            <input type="number" placeholder="?" class="form-control" value="" id="nterminosF" onkeyup="DatoIngresadoF('4');">
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!--</div>-->
                                                </div>
                                                <br><br>
                                                <div id="panelInformativo1" class="row">
                                                    <div class="col-lg-12">
                                                        <div class="alert alert-info">
                                                            Ingresa en los espacios correspondientes los valores que el ejercicio te presenta.
                                                            <br><br><br>
                                                            Selecciona la variable que necesitas despejar de la fórmula general.
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                             </div>
                                        </div>
                                </div>
                                <div class="col-lg-8">
                                    <div id="alertCargando" class="col-lg-12 alert alert-success">
                                        <p style="text-align: justify;">
                                            <center><img src="img/iconos/generales/settings.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Fórmula</b></i></font></center>
                                            <br><br>
                                            <div id="Cargando">
                                                <center><font size="2"><label id="cargando"><i><b>Esperando Datos, por favor ingrese la información necesaria para desarrollar el ejercicio</b></i></label></font></center>
                                                <div class="spiner-example">
                                                    <div class="sk-spinner sk-spinner-three-bounce">
                                                        <div class="sk-bounce1"></div>
                                                        <div class="sk-bounce2"></div>
                                                        <div class="sk-bounce3"></div>
                                                    </div>
                                                </div>   
                                            </div>
                                        </p>
                                    </div>
                                    <div id="creacionFormula" class="panel panel-default" style="display: none;">
                                        <div class="panel-heading">
                                            Utilización de la formula para calcular sucesiones
                                        </div>
                                        <div class="panel-body">
                                            <div class="row col-lg-12">
                                                <p style="text-align: justify;">
                                                    Tomando en cuenta la fórmula de la regla general <font size="3"><b>a<sub>n</sub>=a<sub>1</sub>+(n-1)d</b></font>, realiza el despeje de la ecuación según el valor de la sucesión que deseas buscar.
                                                </p>
                                            </div>
                                            <div class="row col-lg-12">
                                            <!--Posicion de los elementos de la formula-->
                                            <div id="tour1-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                Variables de la fórmula
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                                                    <!--llenado abajo en el script llenarDeNuevo...-->
                                                                            </div><!--cierre del div col-lg-12-->
                                                                            </div>
                                                                        </div><!--cierre del div row-->
                                                                    </div><!--cierre del div col-lg-12-->
                                                                </div><!--cierre del div row-->
                                                            </div><!--cierre del div panel body-->
                                                        </div><!--cierre del div panel default-->
                                                    </div><!--cierre div col-lg-5, debes saber-->
                                                </div><!--cierre del row-->
                                                <!--para generar la formula -->
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                Despeje de la fórmula:
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="row">
                                                                            <div id="finalContenedor" class="col-lg-12">
                                                                                <div class="row col-lg-12">
                                                                                <center>
                                                                                    <div id="tablasDetalles" class="table-responsive">
                                                                                        
                                                                                    </div>
                                                                                </center>
                                                                                <br><br>
                                                                                <center>
                                                                                    <button type="button" class="btn btn-primary btn-rounded" onclick="cambio();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                                                </center>
                                                                                </div><!--cierre del div row-->
                                                                            </div><!--cierre del div col-lg-12 termino Deseado-->
                                                                        </div><!--cierre del div row-->
                                                                    </div><!--cierre del div col-lg-12-->
                                                                </div><!--cierre del div row-->
                                                            </div><!--cierre del div panel body-->
                                                        </div><!--cierre del div panel default-->
                                                    </div><!--cierre div col-lg-12, debes saber-->
                                                </div><!--cierre del row para el despeje de la formula-->
                                            </div><!--cierre del div tour 1-4-->
                                            <br>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="alert alert-info">
                                                        <p style="text-align: justify;">
                                                            Para realizar un despeje, selecciona de la sección <b>"Variables de la fórmula"</b> un elemento de la fórmula y arrastralo hacia el espacio correspondiente según el despeje,  en la sección <b>"Despeje de la fórmula"</b>.
                                                            <br><br>
                                                            Si el ejercicio necesita despejar alguna variable de la fórmula general, únicamente traslada los elementos de la fórmula y estructura la fórmula general en la sección <b>"Despeje de la fórmula"</b>.
                                                            <br><br>
                                                            Cuando termines de estructurar la fórmula, presiona el botón <b>"verde"</b> para verificar si esta es correcta, o el boton <b>"rojo"</b> si deseas anular tu estructuración de la fórmula.
                                                        </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div><!--cierre de la segunda pestaña del acordeon....-->
                <!--acordeon paso 2...-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><b> Resolución de Ejercicios - Paso 2: Resolución del Ejercicio</b></a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                        <!--inicia la informacion para el panel de detalles...resolucion de ejercicios-->
                            <div id="resolucionEjercicios" class ="row">
                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Valores de la sucesión:
                                        </div>
                                            <div class="panel-body">
                                                <div id="rowTermino1" class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Primer Término <b>(a<sub>1</sub>)</b>:</label>
                                                            <input type="text" placeholder="?" class="form-control" value="" id="valorA1" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  id="rowTerminoD" class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label id="labelTerminoD2">Término Deseado <b>(a<sub>n</sub>)</b>:</label>
                                                            <input type="text" placeholder="?" class="form-control" value="" id="valorAn" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="rowDistanciaT" class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label id="labelDistanciaT2">Distancia entre Términos <b>(d)</b>:</label>
                                                            <input type="text" placeholder="?" class="form-control" value="" id="valorDistancia" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="rowNumeroT" class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label id="TerminoBuscar2">Número de Términos: <b>(n)</b>:</label>
                                                            <input type="text" placeholder="?" class="form-control" value="" id="valorTerminos" disabled>
                                                         </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div id="panelInformativo1" class="row">
                                                    <div class="col-lg-12">
                                                        <div class="alert alert-info">
                                                            <p style="text-align: justify;">
                                                                En esta sección se presenta la información anteriormente descrita en el ejercicio, los valores que este nos entrega, la variable que necesitamos conocer y la fórmula a utilizar para resolver la sucesión.
                                                            </p>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                             </div>
                                        </div>
                                </div>
                                <div class="col-lg-8">
                                    <div id="creacionFormula" class="panel panel-default">
                                        <div class="panel-heading">
                                            Resultado de la sucesión
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Fórmula a utilizar:</label>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                <br><br>
                                                                    <div id="formulaGeneral" style="display: none;">
                                                                        <p style="text-align: center; font: oblique bold 120% cursive;">
                                                                            <font color="blue" size="4">
                                                                                <b>a<sub>n</sub> = a<sub>1</sub> + ( n - 1 ) d</b>
                                                                            </font>
                                                                        </p>
                                                                    </div>
                                                                    <br>
                                                                    <div id="formulaN" style="display: none;">
                                                                        <table border="0" id="tablaInfoN" align="center">
                                                                            <tr>     
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">n&nbsp;</font></p></td>
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">=&nbsp;</font></p></td>
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">1&nbsp;</font></p></td>
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">+&nbsp;</font></p></td>
                                                                                <td style="border-bottom: 1px blue solid; margin-top: -15px;"><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">a<sub>n</sub>&nbsp;</font></p></td>
                                                                                <td style="border-bottom: 1px blue solid;"><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">+&nbsp;</font></p></td>
                                                                                <td style="border-bottom: 1px blue solid;"><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">a<sub>1</sub></font></p></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">d</font></p></td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div id="formulaD" style="display: none;">
                                                                        <table border="0" id="tablaInfoN" align="center">
                                                                            <tr>     
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">d&nbsp;</font></p></td>
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">=&nbsp;</font></p></td>
                                                                                <td style="border-bottom: 1px blue solid;"><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">a<sub>n</sub>&nbsp;</font></p></td>
                                                                                <td style="border-bottom: 1px blue solid;"><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">-&nbsp;</font></p></td>
                                                                                <td style="border-bottom: 1px blue solid;"><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">a<sub>1</sub></font></p></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">n&nbsp;</font></p></td>
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">-&nbsp;</font></p></td>
                                                                                <td><p style="text-align: center; font: oblique bold 120% cursive;"><font color="blue" size="4">1</font></p></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="row col-lg-12">
                                                    <center>
                                                        <font size="4">
                                                            <p style="text-align: justify;">
                                                                El resultado de la sucesión es el siguiente:
                                                            </p>
                                                        </font>
                                                    </center>
                                                </div>
                                                <br><br>
                                                <div class="row col-lg-12">
                                                    <center>
                                                        <font size="4">
                                                            <p style="text-align: justify;">
                                                                <div id="ResultadoFinal">
                                                        
                                                                </div>
                                                            </p>  
                                                        </font>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--cierre del div que abre el panel de detalles...resolucion de ejercicios-->
                            <!--abre el panel de advertencia-->
                            <div id="Advertencia" class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-3" style="margin-top: -10px;">
                                        <div class="widget yellow-bg text-center">
                                            <div class="m-b-md">
                                                <i class="fa fa-warning fa-4x"></i>
                                                <h4 class="m-xs">¡¡¡ Momento !!! </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <center>
                                                    <font size="4">Presta atención</font>
                                                </center>
                                            </div>
                                            <div class="panel-body">
                                                <p style="text-align: justify;">
                                                    Para visualizar la resolución final del ejercicio es necesario introducir la información de este en la sección <b><k>"Resolución de Ejercicios - Paso 1: Análisis del ejercicio"</k></b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--cierre del div para advertencias-->
                            <!--abre el panel de advertencia-->
                            <div id="Error" class="row" style="display: none;">
                                <div class="col-lg-12">
                                    <div class="col-lg-3" style="margin-top: -10px;">
                                        <div class="widget red-bg text-center">
                                            <div class="m-b-md">
                                                <i class="fa fa-frown-o fa-4x"></i>
                                                <h4 class="m-xs">¡¡¡ Momento !!! </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <center>
                                                    <font size="4">Presta atención</font>
                                                </center>
                                            </div>
                                            <div class="panel-body">
                                                <p style="text-align: justify;">
                                                    Los datos ingresados para el desarrollo del ejercicio no son correctos, por favor, corroboré la información en la sección <b><k>"Resolución de Ejercicios - Paso 1: Análisis del ejercicio"</k></b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                            <!--cierre del div para advertencias-->
                        </div>
                    </div>
                </div><!--cierre de la segunda pestaña del acordeon....-->
            </div><!--cierre con el class panel -- acordion -->
        </div><!--cierre con el class panel -- body -->
    </div><!--cierre con el class ibox -- content -->
</div><!--cierre con el primer div -->
<script>
var seleccionRadio="";
var seleccionTipoNumero="1";
var estadoDatosAn="0";
var estadoDatosD="0";
var estadoDatosN="0";
var estadoFormulaAn="0";
var estadoFormulaD="0";
var estadoFormulaN="0";
var imprimir=0;
var enteroRestaGlobal=0;
var enteroDivisionGlobal=0;
var enteroTDGlobal=0;
var enteroDTGlobal=0;
var numeradorRestaGlobal=0;
var numeradorDivisionGlobal=0;
var numeradorTDGlobal=0;
var numeradorDTGlobal=0;
var denominadorRestaGlobal=0;
var denominadorDivisionGlobal=0;
var denominadorTDGlobal=0;
var denominadorDTGlobal=0;
function cambioTipoDato(opc)
{
    //console.log(opc);
    seleccionTipoNumero=opc.value;
    if (opc.value=="1") {
        $("#contenedorFracciones").fadeOut(0);
        $("#contenedorEnteros").fadeIn(300);
        document.getElementById("a1").value="";
        document.getElementById("an").value="";
        document.getElementById("distancia").value="";
        document.getElementById("nterminos").value="";
        document.getElementById("enteroPT").value="";
        document.getElementById("numeradorPT").value="";
        document.getElementById("denominadorPT").value="";
        document.getElementById("enteroDT").value="";
        document.getElementById("numeradorDT").value="";
        document.getElementById("denominadorDT").value="";
        document.getElementById("enteroTD").value="";
        document.getElementById("numeradorTD").value="";
        document.getElementById("denominadorTD").value="";
        document.getElementById("nterminosF").value="";
        document.getElementById("terminoD").checked=false;
        document.getElementById("distanciaT").checked=false;
        document.getElementById("numeroT").checked=false;
        $('#a1').removeAttr('style').attr('style', '');
        $('#an').removeAttr('style').attr('style', '');
        $('#distancia').removeAttr('style').attr('style', '');
        $('#nterminos').removeAttr('style').attr('style', '');
        llenarDeNuevo();

    }
    if (opc.value=="2") {
        $("#contenedorEnteros").fadeOut(0);
        $("#contenedorFracciones").fadeIn(300);
        document.getElementById("a1").value="";
        document.getElementById("an").value="";
        document.getElementById("distancia").value="";
        document.getElementById("nterminos").value="";
        document.getElementById("enteroPT").value="";
        document.getElementById("numeradorPT").value="";
        document.getElementById("denominadorPT").value="";
        document.getElementById("enteroDT").value="";
        document.getElementById("numeradorDT").value="";
        document.getElementById("denominadorDT").value="";
        document.getElementById("enteroTD").value="";
        document.getElementById("numeradorTD").value="";
        document.getElementById("denominadorTD").value="";
        document.getElementById("nterminosF").value="";
        document.getElementById("terminoD").checked=false;
        document.getElementById("distanciaT").checked=false;
        document.getElementById("numeroT").checked=false;
        $('#tablePrimerTermino').removeAttr('style').attr('style', '');
        $('#tableDistanciaTermino').removeAttr('style').attr('style','');
        $('#tableTerminoDeseado').removeAttr('style').attr('style','');
        $('#nterminosF').removeAttr('style').attr('style','');
        llenarDeNuevo();
    }
}
 //para numero T
var nuevoAn=0;
var nuevoAd=0;
//para switch 2
var loEncontro=0
var SonIguales=0;
function cambio(){
    if(!seleccionRadio)
    {        
        $("#resolucionEjercicios").fadeOut(0);
        $("#Advertencia").fadeIn(300);
    }
    else
    {        
        /*document.getElementById("valorA1").value="";
        document.getElementById("valorDistancia").value="";
        document.getElementById("valorTerminos").value="";
        document.getElementById("valorAn").value="";*/
        //para enteros
        var pTermino="";
        var nTermino="";
        var dTermino="";
        var cantidadT="";
        var igual="";
        //Para fracciones
        var entero1="";
        var entero2="";
        var entero3="";
        var numeradorDistancia="";
        var numeradorPrimerT="";
        var numeradorNDistancia="";
        var numeradorNPrimerT="";
        var numeradorFinal="";
        var numeradoTerminoD="";
        var numeradorNTerminoD="";
        var denominadorDistancia="";
        var denominadorNDistancia="";
        var denominadorPrimerT="";
        var denominadorNPrimerT="";
        var denominadorFinal="";
        var denominadorTerminoD="";
        var denominadorNTerminoD="";
        var enteroFinal="";
        var esEntero="";
        var datoIgual="";
        //inicio de la resolucion
        comprobarFormula("2");
        switch(seleccionRadio){
            case "terminoD":{
                if(seleccionTipoNumero=="1")
                {                    
                    if(document.getElementById("a1").value=="" || document.getElementById("distancia").value=="" || document.getElementById("nterminos").value=="" || estadoFormulaAn=="0")
                    {
                        $("#resolucionEjercicios").fadeOut(0);
                        $("#Advertencia").fadeIn(300);
                    }
                    else
                    {
                        /**************************************************************************
                        INICIO DEL DISEÑO DE FORMULA PARA OBTENER LA SUCESIÓN Y EL TERMINO A BUSCAR
                        **************************************************************************/
                        pTermino=parseFloat(document.getElementById("a1").value);
                        dTermino=parseFloat(document.getElementById("distancia").value);
                        cantidadT=parseInt(document.getElementById("nterminos").value);
                        contador=1;
                        n=0;
                        d=0;
                        an=0;
                        if(imprimir==0)
                        {
                            $("#ResultadoFinal").html("");
                            for(var i=1;i<=cantidadT+2;i++)
                            {
                                n=i-1;
                                d=n*dTermino;
                                an=pTermino+d;
                                if (an % 1 == 0) {
                                }
                                else
                                {
                                    an=an.toFixed(2);
                                }
                                if (i==cantidadT) {
                                    igual=""+an;
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+an+"</font>, ");    
                                }
                                else
                                {
                                    $("#ResultadoFinal").append(an+", ");
                                }
                            }
                            imprimir=1;
                            $("#ResultadoFinal").append("...");
                            $("#ResultadoFinal").append("<br><br> Donde el "+cantidadT+" término de la sucesión es: "+igual);
                            /****************************************************
                            CIERRE DEL DISEÑO DE FORMULA PARA OBTENER LA SUCESIÓN
                            ****************************************************/
                            $("#Advertencia").fadeOut(0);
                            $("#resolucionEjercicios").fadeIn(300);
                            document.getElementById("valorA1").value=document.getElementById("a1").value;
                            document.getElementById("valorDistancia").value=document.getElementById("distancia").value;
                            document.getElementById("valorTerminos").value=document.getElementById("nterminos").value;
                            $("#formulaN").fadeOut(0);
                            $("#formulaD").fadeOut(0);
                            $("#rowTerminoD").fadeOut(0)
                            $("#rowDistanciaT").fadeIn(300);
                            $("#TerminoBuscar").html("Término a Buscar: <b>(n)</b>:");
                            $("#rowNumeroT").fadeIn(300);
                            $("#formulaGeneral").fadeIn(300);
                            swal("Excelente!", "Los datos ingresados son correctos, verifica la sucesión creada en el paso 2.", "success");  
                        }
                    }
                }//cierre del if tipo numero 1
                if (seleccionTipoNumero=="2")
                {
                    //Aqui iba a hacer algo XD jajaaja
                    var estadoD=1;
                    var estadoP=1; 
                    //***********************************************************///
                    //////////Verificando que los datos esten correctos////////////
                    //***********************************************************//
                    //Para verificar an...
                    if (document.getElementById("enteroPT").value!="") {
                        if(document.getElementById("numeradorPT").value=="" && document.getElementById("denominadorPT").value=="")
                        {
                            estadoP=0;
                        }
                        else
                        {
                            estadoP=1;
                        }
                    }
                    if (document.getElementById("numeradorPT").value!="" && document.getElementById("denominadorPT").value!="") {
                        estadoP=0;

                    }
                    else
                    {
                        if (estadoP==0) {
                            estadoP=0;
                        }
                        else
                        {
                            estadoP=1;
                        }
                    }
                    //fin de verificar an..
                    //Para verificar distancia...
                    if (document.getElementById("enteroDT").value!="") {
                        if(document.getElementById("numeradorDT").value=="" && document.getElementById("denominadorDT").value=="")
                        {
                            estadoD=0;

                        }
                        else
                        {
                            estadoD=1;
                        }
                    }
                    if (document.getElementById("numeradorDT").value!="" && document.getElementById("denominadorDT").value!="") {
                        estadoD=0;

                    }
                    else
                    {
                        if (estadoD==0) {
                            estadoD=0;
                        }
                        else
                        {
                            estadoD=1;
                        }
                    }
                    //fin de verificar distancia..
                    //***********************************************************///
                    ////// FIN Verificando que los datos esten correctos////////////
                    //***********************************************************//
                    if (document.getElementById("nterminosF").value=="" || estadoP==1 || estadoD==1 || estadoFormulaAn=="0") {
                        $("#resolucionEjercicios").fadeOut(0);
                        $("#Advertencia").fadeIn(300);
                    }
                    else
                    {
                       /**************************************************************************
                        INICIO DEL DISEÑO DE FORMULA PARA OBTENER LA SUCESIÓN Y EL TERMINO A BUSCAR
                        **************************************************************************/
                        if (document.getElementById("enteroPT").value=="") {
                            entero1=0;
                        }
                        else{
                            entero1=parseFloat(document.getElementById("enteroPT").value);
                        }
                        if (document.getElementById("enteroDT").value=="") {
                            entero2=0;
                        }
                        else{
                            entero2=parseFloat(document.getElementById("enteroDT").value);
                        } 
                        cantidadT=parseFloat(document.getElementById("nterminosF").value);
                        contador=1;
                        if (document.getElementById("numeradorDT").value=="") {
                            numeradorDistancia=0;
                        }
                        else
                        {
                            numeradorDistancia=parseFloat(document.getElementById("numeradorDT").value);
                        }
                        if (document.getElementById("denominadorDT").value=="") {
                            denominadorDistancia=0;
                        }
                        else
                        {
                            denominadorDistancia=parseFloat(document.getElementById("denominadorDT").value);
                        }
                        if (document.getElementById("numeradorPT").value=="") {
                            numeradorPrimerT=0;
                        }
                        else
                        {
                            numeradorPrimerT=parseFloat(document.getElementById("numeradorPT").value);
                        }
                        if (document.getElementById("denominadorPT").value=="") {
                            denominadorPrimerT=0;
                        }
                        else
                        {
                            denominadorPrimerT=parseFloat(document.getElementById("denominadorPT").value);
                        }
                        n=0;
                        d=0;
                        an=0;
                        if(imprimir==0)
                        {
                            sucesionGeneral(entero1,numeradorPrimerT,denominadorPrimerT,cantidadT,entero2,numeradorDistancia,denominadorDistancia);
                            /****************************************************
                            CIERRE DEL DISEÑO DE FORMULA PARA OBTENER LA SUCESIÓN
                            ****************************************************/
                            $("#Advertencia").fadeOut(0);
                            $("#resolucionEjercicios").fadeIn(300); 
                            /**Para poner los datos en el mostrar...*/
                            if (document.getElementById("enteroPT").value=="") {
                                document.getElementById("valorA1").innerHTML=(document.getElementById("numeradorPT").value) + "/" + (document.getElementById("denominadorPT").value);
                            }
                            else
                            {
                                if (document.getElementById("numeradorPT").value!="") {
                                    document.getElementById("valorA1").value=document.getElementById("enteroPT").value + " " + document.getElementById("numeradorPT").value +"/"+ document.getElementById("denominadorPT").value;    
                                }
                                else
                                {
                                    document.getElementById("valorA1").value=document.getElementById("enteroPT").value;
                                }
                                
                            }
                            if (document.getElementById("enteroDT").value=="") {
                                document.getElementById("valorDistancia").value=document.getElementById("numeradorDT").value +"/"+document.getElementById("denominadorDT").value;
                            }
                            else
                            {
                                if (document.getElementById("numeradorDT").value!="") {
                                    document.getElementById("valorDistancia").value=document.getElementById("enteroDT").value + " " + document.getElementById("numeradorDT").value +"/"+ document.getElementById("denominadorDT").value;    
                                }
                                else
                                {
                                    document.getElementById("valorDistancia").value=document.getElementById("enteroDT").value;
                                }
                                
                            }
                            /*fin de el proceso para escribir los*/
                            document.getElementById("valorTerminos").value=document.getElementById("nterminosF").value;
                            $("#formulaN").fadeOut(0);
                            $("#formulaD").fadeOut(0);
                            $("#rowTerminoD").fadeOut(0)
                            $("#rowDistanciaT").fadeIn(300);
                            $("#TerminoBuscar").html("Término a Buscar: <b>(n)</b>:");
                            $("#rowNumeroT").fadeIn(300);
                            $("#formulaGeneral").fadeIn(300);
                            swal("Excelente!", "Los datos ingresados son correctos, verifica la sucesión creada en el paso 2.", "success");
                        }
                    }//cierre del if imprimir==0
                }//cierre del if tipo numero 2
            }break;
            /*********ACA PARA DESARROLLO DEL SUCESION SEGUN EL NUMERO DE TERMINO QUE DESEA BUSCAR************/
            case "numeroT":{
                if (seleccionTipoNumero=="1") {
                    if(document.getElementById("a1").value=="" || document.getElementById("distancia").value=="" || document.getElementById("an").value=="" || estadoFormulaN=="0")
                    {
                        $("#resolucionEjercicios").fadeOut(0);
                        $("#Error").fadeOut(0);
                        $("#Advertencia").fadeIn(300);
                    }
                    else
                    {
                        
                        document.getElementById("valorA1").value=document.getElementById("a1").value;
                        document.getElementById("valorDistancia").value=document.getElementById("distancia").value;
                        document.getElementById("valorAn").value=document.getElementById("an").value;
                        /************************************************************************************
                        INICIO DEL DISEÑO DE FORMULA PARA OBTENER LA SUCESIÓN Y EL NUMERO DE TERMINO A BUSCAR
                        *************************************************************************************/
                        pTermino=parseFloat(document.getElementById("a1").value);
                        dTermino=parseFloat(document.getElementById("distancia").value);
                        nTermino=parseFloat(document.getElementById("an").value);
                        contador=1;
                        n=0;
                        d=0;
                        an=0;
                        console.log(pTermino,dTermino,nTermino);
                        if(imprimir==0)
                        {
                            a=nTermino-pTermino;
                            a2=a/dTermino;
                            n=1+a2;
                            cantidadT=n;
                            $("#ResultadoFinal").html("");
                            if (cantidadT % 1 == 0) {
                                //Es un numero entero
                                for(var i=1;i<=cantidadT+2;i++)
                                {
                                    n=i-1;
                                    d=n*dTermino;
                                    an=pTermino+d;
                                    if (an % 1 == 0) {
                                    }
                                    else
                                    {
                                        an=an.toFixed(2);
                                    }
                                    if (i==cantidadT) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+an+"</font>, ");    
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append(an+", ");
                                    }
                                }
                                imprimir=1;
                                $("#ResultadoFinal").append("..."+
                                "<br><br>"+
                                "Donde el termino a buscar es el "+cantidadT+" de la sucesión");
                                //Impresión de los datos...
                                $("#Advertencia").fadeOut(0);
                                $("#resolucionEjercicios").fadeIn(300);
                                $("#formulaGeneral").fadeOut(0);
                                $("#formulaD").fadeOut(0);
                                $("#rowNumeroT").fadeOut(0);
                                $("#Error").fadeOut(0);
                                $("#rowDistanciaT").fadeIn(300);
                                $("#rowTerminoD").fadeIn(300);
                                $("#formulaN").fadeIn(300);
                                swal("Excelente!", "Los datos ingresados son correctos, verifica la sucesión creada en el paso 2.", "success");  
                            }
                            else{
                                //no es un numero entero
                                $("#ResultadoFinal").append("");
                                $("#resolucionEjercicios").fadeOut(0);
                                $("#Advertencia").fadeOut(0);
                                $("#Error").fadeIn(300);
                                swal("Alto!", "La información ingresada es errónea, por favor verifica los datos ingresados.", "error");  
                            }
                        }
                        /****************************************************
                        cIERRE DEL DISEÑO DE FORMULA PARA OBTENER LA SUCESIÓN
                        ****************************************************/
                    }
                }//cierre del if si es entero
                if(seleccionTipoNumero=="2")
                {
                    var estadoP=0;
                    var estadoD=0;
                    var estadoT=0;
                    var caso=0;
                    var an=0,ad=0;
                    var an1=0;ad1=0;
                    var denominadorTerminoPrimero=0;
                    var enteroPrimerT=0;
                    var enteroTerminoD=0;
                    var enteroDistanciaT=0;
                    var datoNumPT=0;
                    var datoNumTD=0;
                    var datoNumDT=0;
                    var datoDenPT=0;
                    var datoDenTD=0;
                    var datoDenDT=0;
                    //***********************************************************///
                    //////////Verificando que los datos esten correctos////////////
                    //***********************************************************//
                    //Para verificar an...
                    if (document.getElementById("enteroPT").value!="") {
                        if(document.getElementById("numeradorPT").value=="" && document.getElementById("denominadorPT").value=="")
                        {
                            estadoP=0;
                        }
                        else
                        {
                            estadoP=1;
                        }
                    }
                    if (document.getElementById("numeradorPT").value!="" && document.getElementById("denominadorPT").value!="") {
                        estadoP=0;                   
                    }
                    else
                    {
                        if (estadoP==0) {
                            estadoP=0;
                        }
                        else
                        {
                            estadoP=1;
                        }
                    }
                    //fin de verificar an..
                    //Para verificar distancia...
                    if (document.getElementById("enteroDT").value!="") {
                        if(document.getElementById("numeradorDT").value=="" && document.getElementById("denominadorDT").value=="")
                        {
                            estadoD=0;

                        }
                        else
                        {
                            estadoD=1;
                        }
                    }
                    if (document.getElementById("numeradorDT").value!="" && document.getElementById("denominadorDT").value!="") {
                        estadoD=0;
                    }
                    else
                    {
                        if (estadoD==0) {
                            estadoD=0;
                        }
                        else
                        {
                            estadoD=1;
                        }
                    }
                    //fin de verificar distancia..
                    //Para verificar termio deseado...
                    if (document.getElementById("enteroTD").value!="") {
                        if(document.getElementById("numeradorTD").value=="" && document.getElementById("denominadorTD").value=="")
                        {
                            estadoT=0;

                        }
                        else
                        {
                            estadoT=1;
                        }
                    }
                    if (document.getElementById("numeradorTD").value!="" && document.getElementById("denominadorTD").value!="") {
                        estadoT=0;
                    }
                    else
                    {
                        if (estadoT==0) {
                            estadoT=0;
                        }
                        else
                        {
                            estadoT=1;
                        }
                    }
                    //fin de verificar distancia..
                    //***********************************************************///
                    ////// FIN Verificando que los datos esten correctos////////////
                    //***********************************************************//
                    if (estadoP==1 || estadoD==1 || estadoT==1 || estadoFormulaN=="0") {
                        $("#resolucionEjercicios").fadeOut(0);
                        $("#Error").fadeOut(0);
                        $("#Advertencia").fadeIn(300);
                        loEncontro=0;
                    }
                    else
                    {
                        var obtenidoEntero=0;
                        var obtenidoNume=0;
                        var obtenidoDeno=0;
                        var obtenidoEnteroDivision=0;
                        var obtenidoNumeDivision=0;
                        var obtenidoDenoDivision=0;
                        var resultadoFinal=0;
                        //obteniendo Enteros...
                        if (document.getElementById("enteroPT").value=="") {
                            enteroPrimerT=0;
                        }
                        else
                        {
                            enteroPrimerT=parseFloat(document.getElementById("enteroPT").value);
                        }
                        if (document.getElementById("enteroTD").value=="") {
                            enteroTerminoD=0;
                        }
                        else
                        {
                            enteroTerminoD=parseFloat(document.getElementById("enteroTD").value);
                        }
                        if (document.getElementById("enteroDT").value=="") {
                            enteroDistanciaT=0;
                        }
                        else
                        {
                            enteroDistanciaT=parseFloat(document.getElementById("enteroDT").value);
                        }
                        //Datos Numeradores
                        if (document.getElementById("numeradorPT").value!="") {
                            datoNumPT=parseFloat(document.getElementById("numeradorPT").value);    
                        }
                        else
                        {
                            datoNumPT=0;
                        }
                        if (document.getElementById("numeradorTD").value!="") {
                            datoNumTD=parseFloat(document.getElementById("numeradorTD").value);    
                        }                      
                        else{
                            datoNumTD=0;
                        }
                        if (document.getElementById("numeradorDT").value!="") {
                            datoNumDT=parseFloat(document.getElementById("numeradorDT").value);
                        }
                        else
                        {
                            datoNumDT=0;
                        }
                        //Datos denominadores
                        if (document.getElementById("denominadorPT").value!="") {
                            datoDenPT=parseFloat(document.getElementById("denominadorPT").value);   
                        }
                        else
                        {
                            datoDenPT=0;
                        }
                        if (document.getElementById("denominadorTD").value!="") {
                            datoDenTD=parseFloat(document.getElementById("denominadorTD").value);
                        }
                        else
                        {
                            datoDenTD=0;
                        }
                        if (document.getElementById("denominadorDT").value!="") {
                            datoDenDT=parseFloat(document.getElementById("denominadorDT").value);    
                        }
                        else
                        {
                            datoDenDT=0;
                        }
                        //resta de fracciones para determinar el resultado de an-a1
                        //si ambos son fracciones validas se realizara la resta de fracciones
                        if (loEncontro==0) {
                            //llamada a la funcion que realiza el proceso para restar fracciones
                            restaFracciones(enteroPrimerT,datoNumPT,datoDenPT,enteroTerminoD,datoNumTD,datoDenTD);
                            //Obtencion de datos...Luego de haber pasado por la funcion para realizar la resta de fracciones...
                            obtenidoEntero=enteroRestaGlobal;
                            obtenidoNume=numeradorRestaGlobal;
                            obtenidoDeno=denominadorRestaGlobal;
                            console.log("Resultado de la fraccion restada: ",obtenidoEntero," ",obtenidoNume,"/",obtenidoDeno);
                            //llamada a la funcion que divide fraccioness
                            divisionFracciones(obtenidoEntero,obtenidoNume,obtenidoDeno,enteroDistanciaT,datoNumDT,datoDenDT);
                            //Obtencion de datos...Luego de haber pasado por la funcion para realizar la division de fracciones...
                            obtenidoEnteroDivision=enteroDivisionGlobal;
                            obtenidoNumeDivision=numeradorDivisionGlobal;
                            obtenidoDenoDivision=denominadorDivisionGlobal;
                            console.log("Resultado de la fraccion dividida: ",obtenidoEnteroDivision," ",obtenidoNumeDivision,"/",obtenidoDenoDivision);
                            if (obtenidoNumeDivision==0 && obtenidoDenoDivision==0) {
                                console.log("Entro a donde si es un numero entero...");
                                //si el resultado de la division es un numero entero
                                resultadoFinal=obtenidoEnteroDivision+1;
                                console.log("ResultadoFinal: ",resultadoFinal);
                                console.log("Envia: ",enteroPrimerT,datoNumPT,datoDenPT,resultadoFinal,enteroDistanciaT,datoNumDT,datoDenDT);
                                sucesionGeneral(enteroPrimerT,datoNumPT,datoDenPT,resultadoFinal,enteroDistanciaT,datoNumDT,datoDenDT);
                                /**Para poner los datos en el mostrar...*/
                                console.log("Inicia a imprimir sobre los label la info");
                                if (document.getElementById("enteroPT").value=="") {
                                    document.getElementById("valorA1").innerHTML=(document.getElementById("numeradorPT").value) + "/" + (document.getElementById("denominadorPT").value);
                                    console.log("Entro 1");
                                }
                                else
                                {
                                    if (document.getElementById("numeradorPT").value!="") {
                                        document.getElementById("valorA1").value=document.getElementById("enteroPT").value + " " + document.getElementById("numeradorPT").value +"/"+ document.getElementById("denominadorPT").value; 
                                        console.log("Entro 2");   
                                    }
                                    else
                                    {
                                        //document.getElementById("valorA1").value = document.getElementById("enteroPT").value;
                                        $("#valorA1").val(''+document.getElementById("enteroPT").value);
                                        console.log("Entro 3, "+document.getElementById("enteroPT").value);
                                    }
                                    
                                }
                                if (document.getElementById("enteroTD").value=="") {
                                    document.getElementById("valorAn").value=document.getElementById("numeradorTD").value +"/"+document.getElementById("denominadorTD").value;
                                }
                                else
                                {
                                    if (document.getElementById("numeradorTD").value!="") {
                                        document.getElementById("valorAn").value=document.getElementById("enteroTD").value + " " + document.getElementById("numeradorTD").value +"/"+ document.getElementById("denominadorTD").value;    
                                    }
                                    else
                                    {
                                        document.getElementById("valorAn").value=document.getElementById("enteroTD").value;
                                    }
                                    
                                }
                                if (document.getElementById("enteroDT").value=="") {
                                    document.getElementById("valorDistancia").value=document.getElementById("numeradorDT").value +"/"+document.getElementById("denominadorDT").value;
                                }
                                else
                                {
                                    if (document.getElementById("numeradorDT").value!="") {
                                        document.getElementById("valorDistancia").value=document.getElementById("enteroDT").value + " " + document.getElementById("numeradorDT").value +"/"+ document.getElementById("denominadorDT").value;    
                                    }
                                    else
                                    {
                                        document.getElementById("valorDistancia").value=document.getElementById("enteroDT").value;
                                    }
                                }
                                /*$("#ResultadoFinal").append("..."+
                                "<br><br>"+
                                "Donde el termino a buscar es el "+resultadoFinal+" de la sucesión");*/
                                /*fin de el proceso para escribir los*/
                                $("#Advertencia").fadeOut(0);
                                $("#resolucionEjercicios").fadeIn(300);
                                $("#formulaGeneral").fadeOut(0);
                                $("#formulaD").fadeOut(0);
                                $("#rowNumeroT").fadeOut(0);
                                $("#Error").fadeOut(0);
                                $("#rowDistanciaT").fadeIn(300);
                                $("#rowTerminoD").fadeIn(300);
                                $("#formulaN").fadeIn(300);
                                swal("Excelente!", "Los datos ingresados son correctos, verifica la sucesión creada en el paso 2.", "success"); 
                            }
                            else
                            {
                                console.log("no es un numero entero...");
                                document.getElementById("valorA1").value="";
                                document.getElementById("valorAn").value="";
                                document.getElementById("valorDistancia").value="";
                                $("#resolucionEjercicios").fadeOut(0);
                                $("#Advertencia").fadeOut(0);
                                $("#Error").fadeIn(300);
                                swal("Alto!", "La información ingresada es errónea, por favor verifica los datos.", "error");  
                            }
                            //fin de la obtencion de informacion
                        }//fin del if si lo encontro... 
                    }//cierre del else para entrar a fraccionario si los datos estan completos...                    
                }//cierre del else para entrar al area de fraccionarios...
            }break;
            case "distanciaT":{
                if (seleccionTipoNumero==1) {
                    if(document.getElementById("a1").value=="" || document.getElementById("an").value=="" || document.getElementById("nterminos").value=="" || estadoFormulaD=="0")
                    {
                        $("#resolucionEjercicios").fadeOut(0);
                        $("#Advertencia").fadeIn(300);
                    }
                    else
                    {
                        $("#Advertencia").fadeOut(0);
                        $("#resolucionEjercicios").fadeIn(300);
                        document.getElementById("valorA1").value=document.getElementById("a1").value;
                        document.getElementById("valorTerminos").value=document.getElementById("nterminos").value;
                        document.getElementById("valorAn").value=document.getElementById("an").value;
                        /************************************************************************************
                        INICIO DEL DISEÑO DE FORMULA PARA OBTENER LA SUCESIÓN Y EL NUMERO DE TERMINO A BUSCAR
                        *************************************************************************************/
                        pTermino=parseFloat(document.getElementById("a1").value);
                        cantidadT=parseFloat(document.getElementById("nterminos").value);
                        nTermino=parseFloat(document.getElementById("an").value);
                        contador=1;
                        n=0;
                        d=0;
                        an=0;
                        console.log(pTermino,dTermino,nTermino);
                        if(imprimir==0)
                        {
                            a=nTermino-pTermino;
                            n=cantidadT-1;
                            d=a/n;
                            dTermino=d;
                            if (dTermino % 1 == 0) {
                                 
                            }
                            else
                            {
                                dTermino=dTermino.toFixed(2);
                            }
                            $("#ResultadoFinal").html("");
                            for(var i=1;i<=cantidadT+2;i++)
                            {
                                n=i-1;
                                d=n*dTermino;
                                an=pTermino+d;
                                if (an % 1 == 0) {
                                }
                                else
                                {
                                    an=an.toFixed(2);
                                }
                                $("#ResultadoFinal").append(an+", ");
                            }
                            imprimir=1;
                            $("#ResultadoFinal").append("..."+
                            "<br><br>"+
                            "Donde la distancia entre terminos es de "+dTermino);
                            /****************************************************
                            cIERRE DEL DISEÑO DE FORMULA PARA OBTENER LA SUCESIÓN
                            ****************************************************/
                            $("#formulaN").fadeOut(0);
                            $("#formulaGeneral").fadeOut(0);
                            $("#rowDistanciaT").fadeOut(0)
                            $("#Error").fadeOut(0);
                            $("#rowNumeroT").fadeIn(300);
                            $("#rowTerminoD").fadeIn(300);
                            $("#formulaD").fadeIn(300);
                            swal("Excelente!", "Los datos ingresados son correctos, verifica la sucesión creada en el paso 2.", "success");
                        }
                    }    
                }
                //para fracciones...
                if (seleccionTipoNumero==2) 
                {
                    var estadoP=0;
                    var estadoN=0;
                    var estadoT=0;
                    var enteroPrimerT=0;
                    var enteroTerminoD=0;
                    var nTerminoValor=0;
                    var datoNumPT=0;
                    var datoNumTD=0;
                    var datoDenPT=0;
                    var datoDenTD=0;
                    //***********************************************************///
                    //////////Verificando que los datos esten correctos////////////
                    //***********************************************************//
                    //Para verificar an...
                    if (document.getElementById("enteroPT").value!="") {
                        if(document.getElementById("numeradorPT").value=="" && document.getElementById("denominadorPT").value=="")
                        {
                            estadoP=0;
                        }
                        else
                        {
                            estadoP=1;
                        }
                    }
                    if (document.getElementById("numeradorPT").value!="" && document.getElementById("denominadorPT").value!="") {
                        estadoP=0;                    
                    }
                    else
                    {
                        if (estadoP==0) {
                            estadoP=0;
                        }
                        else
                        {
                            estadoP=1;
                        }
                    }
                    //fin de verificar an..
                    //Para verificar distancia...
                    if(document.getElementById("nterminosF").value=="")
                    {
                        estadoN=0;

                    }
                    else
                    {
                        estadoN=1;
                    }
                    //fin de verificar distancia..
                    //Para verificar termio deseado...
                    if (document.getElementById("enteroTD").value!="") {
                        if(document.getElementById("numeradorTD").value=="" && document.getElementById("denominadorTD").value=="")
                        {
                            estadoT=0;

                        }
                        else
                        {
                            estadoT=1;
                        }
                    }
                    if (document.getElementById("numeradorTD").value!="" && document.getElementById("denominadorTD").value!="") {
                        estadoT=0;
                    }
                    else
                    {
                        if (estadoT==0) {
                            estadoT=0;
                        }
                        else
                        {
                            estadoT=1;
                        }
                    }
                    //fin de verificar distancia..
                    //***********************************************************///
                    ////// FIN Verificando que los datos esten correctos////////////
                    //***********************************************************//
                    if (estadoP==1 || estadoN==0 || estadoT==1 || estadoFormulaD=="0") {
                        $("#resolucionEjercicios").fadeOut(0);
                        $("#Error").fadeOut(0);
                        $("#Advertencia").fadeIn(300);
                        loEncontro=0;
                    }
                    else
                    {
                        var obtenidoEntero=0;
                        var obtenidoNume=0;
                        var obtenidoDeno=0;
                        var obtenidoEnteroDivision=0;
                        var obtenidoNumeDivision=0;
                        var obtenidoDenoDivision=0;
                        var resultadoFinal=0;
                        var subResta=0;
                        var resultadoDivision=0;
                        //obteniendo Enteros...
                        if (document.getElementById("enteroPT").value=="") {
                            enteroPrimerT=0;
                        }
                        else
                        {
                            enteroPrimerT=parseFloat(document.getElementById("enteroPT").value);
                        }
                        if (document.getElementById("enteroTD").value=="") {
                            enteroTerminoD=0;
                        }
                        else
                        {
                            enteroTerminoD=parseFloat(document.getElementById("enteroTD").value);
                        }
                        //Datos Numeradores
                        if (document.getElementById("numeradorPT").value!="") {
                            datoNumPT=parseFloat(document.getElementById("numeradorPT").value);    
                        }
                        else
                        {
                            datoNumPT=0;
                        }
                        if (document.getElementById("numeradorTD").value!="") {
                            datoNumTD=parseFloat(document.getElementById("numeradorTD").value);    
                        }                      
                        else{
                            datoNumTD=0;
                        }
                        //Datos denominadores
                        if (document.getElementById("denominadorPT").value!="") {
                            datoDenPT=parseFloat(document.getElementById("denominadorPT").value);   
                        }
                        else
                        {
                            datoDenPT=0;
                        }
                        if (document.getElementById("denominadorTD").value!="") {
                            datoDenTD=parseFloat(document.getElementById("denominadorTD").value);
                        }
                        else
                        {
                            datoDenTD=0;
                        }
                        //valor numero de termino
                        if (document.getElementById("nterminosF").value!="") {
                            nTerminoValor=parseInt(document.getElementById("nterminosF").value);
                        }
                        else
                        {
                            nTerminoValor=0;
                        }
                        //INICIO DEL PROCESO DE FUNCION PARA ENCONTRAR LA SUCESION...
                        if (loEncontro==0) {
                            //llamada a la funcion que realiza el proceso para restar fracciones
                            restaFracciones(enteroPrimerT,datoNumPT,datoDenPT,enteroTerminoD,datoNumTD,datoDenTD);
                            //Obtencion de datos...Luego de haber pasado por la funcion para realizar la resta de fracciones...
                            obtenidoEntero=enteroRestaGlobal;
                            obtenidoNume=numeradorRestaGlobal;
                            obtenidoDeno=denominadorRestaGlobal;
                            console.log("Resultado de la fraccion restada (Parte Arriba): ",obtenidoEntero," ",obtenidoNume,"/",obtenidoDeno);
                            //Resta de la parte inferior..
                            subResta=nTerminoValor-1;
                            //division de las 2 restas...
                            if (obtenidoNume==0) {
                                resultadoDivision=obtenidoEntero/subResta;
                                if (resultadoDivision % 1 == 0) {
                                    obtenidoEnteroDivision=resultadoDivision;
                                    obtenidoNumeDivision=0;
                                    obtenidoDenoDivision=0;
                                }
                                else
                                {
                                    reduce(obtenidoEntero,subResta);
                                    obtenidoEnteroDivision=0;
                                    obtenidoNumeDivision=nuevoAn;
                                    obtenidoDenoDivision=nuevoAd;
                                }
                            }
                            else
                            {
                                divisionFracciones(obtenidoEntero,obtenidoNume,obtenidoDeno,subResta,0,0);
                                obtenidoEnteroDivision=enteroDivisionGlobal;
                                obtenidoNumeDivision=numeradorDivisionGlobal;
                                obtenidoDenoDivision=denominadorDivisionGlobal;
                            }
                            //Obtencion de datos...Luego de haber pasado por la funcion para realizar la division de fracciones...
                            console.log("Resultado de la fraccion dividida: ",obtenidoEnteroDivision," ",obtenidoNumeDivision,"/",obtenidoDenoDivision);
                            console.log("Envia: ",enteroPrimerT,datoNumPT,datoDenPT,nTerminoValor,obtenidoEnteroDivision,obtenidoNumeDivision,obtenidoDenoDivision);
                                sucesionGeneralDivision(enteroPrimerT,datoNumPT,datoDenPT,nTerminoValor,obtenidoEnteroDivision,obtenidoNumeDivision,obtenidoDenoDivision,enteroTerminoD,datoNumTD,datoDenTD);
                            //si los datos coinciden...
                            console.log("Son iguales: ",SonIguales);
                            if (SonIguales==0) {
                                /**Para poner los datos en el mostrar...*/
                                if (document.getElementById("enteroPT").value=="") {
                                    document.getElementById("valorA1").innerHTML=(document.getElementById("numeradorPT").value) + "/" + (document.getElementById("denominadorPT").value);
                                }
                                else
                                {
                                    if (document.getElementById("numeradorPT").value!="") {
                                        document.getElementById("valorA1").value=document.getElementById("enteroPT").value + " " + document.getElementById("numeradorPT").value +"/"+ document.getElementById("denominadorPT").value;    
                                    }
                                    else
                                    {
                                        document.getElementById("valorA1").value=document.getElementById("enteroPT").value;
                                    }
                                    
                                }
                                if (document.getElementById("enteroTD").value=="") {
                                    document.getElementById("valorAn").value=document.getElementById("numeradorTD").value +"/"+document.getElementById("denominadorTD").value;
                                }
                                else
                                {
                                    if (document.getElementById("numeradorTD").value!="") {
                                        document.getElementById("valorAn").value=document.getElementById("enteroTD").value + " " + document.getElementById("numeradorTD").value +"/"+ document.getElementById("denominadorTD").value;    
                                    }
                                    else
                                    {
                                        document.getElementById("valorAn").value=document.getElementById("enteroTD").value;
                                    }
                                    
                                }
                                document.getElementById("valorTerminos").value=document.getElementById("nterminosF").value;
                                /*fin de el proceso para escribir los*/
                                if (obtenidoEnteroDivision==0) {
                                    if (obtenidoDenoDivision==1) {
                                        $("#ResultadoFinal").append("..."+
                                        "<br><br>"+
                                        "Donde la distancia entre terminos es de "+obtenidoNumeDivision);
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append("..."+
                                        "<br><br>"+
                                        "Donde la distancia entre terminos es de <sup>"+obtenidoNumeDivision+"</sup>/<sub>"+obtenidoDenoDivision+"</sub>");    
                                    }
                                        
                                }
                                else
                                {
                                    if (obtenidoNumeDivision==0) {
                                        $("#ResultadoFinal").append("..."+
                                        "<br><br>"+
                                        "Donde la distancia entre terminos es de "+obtenidoEnteroDivision);
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append("<br><br>"+
                                        "Y donde la distancia entre terminos es de "+obtenidoEnteroDivision+" <sup>"+obtenidoNumeDivision+"</sup>/<sub>"+obtenidoDenoDivision+"</sub>");
                                    }
                                }
                                $("#Advertencia").fadeOut(0);
                                $("#resolucionEjercicios").fadeIn(300);
                                $("#Error").fadeOut(0);
                                $("#formulaN").fadeOut(0);
                                $("#formulaGeneral").fadeOut(0);
                                $("#rowDistanciaT").fadeOut(0)
                                $("#rowNumeroT").fadeIn(300);
                                $("#rowTerminoD").fadeIn(300);
                                $("#formulaD").fadeIn(300);
                                swal("Excelente!", "Los datos ingresados son correctos, verifica la sucesión creada en el paso 2.", "success");
                            }//fin del if
                        }
                    }
                }
            }break;
        }
    }
    //setTimeout("cambio()",1000);
}
//cambio();

function sucesionGeneral(entero,numeradorPrimeT,denominadorPrimeT,cantidaT,enter2,numeradorDistanci,denominadorDistanci){
    //Para fracciones
    var entero1=entero;
    var entero2=enter2;
    var entero3="";
    var numeradorDistancia=numeradorDistanci;
    var numeradorPrimerT=numeradorPrimeT;
    var numeradorNDistancia="";
    var numeradorNPrimerT="";
    var numeradorFinal="";
    var numeradoTerminoD="";
    var numeradorNTerminoD="";
    var denominadorDistancia=denominadorDistanci;
    var denominadorNDistancia="";
    var denominadorPrimerT=denominadorPrimeT;
    var denominadorNPrimerT="";
    var denominadorFinal="";
    var denominadorTerminoD="";
    var denominadorNTerminoD="";
    var enteroFinal="";
    var esEntero="";
    var datoIgual="";
    var cantidadT=cantidaT;
    var pasoResta=0;
    var entro=0;
    var entero2Respaldo=0;
    var numeRespaldo2=0;
    var pasopaso=0;
    var pasoNumIgual1=0;
    var pasoNumIgual2=0;
    var yaPinto=0;
    var yaPinto2=0;
    var interno=0;
    var realizoOperacion=0;
    console.log("obtenidos: ",entero,numeradorPrimeT,denominadorPrimeT,cantidaT,enter2,numeradorDistanci,denominadorDistanci);
    //INICIO DE LA RESOLUCION...
    $("#ResultadoFinal").html("");
    if (entero1==0) {
        if (cantidadT==1) {
            $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub></font> , ");
            datoIgual="<sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub>";
        }
        else
        {
            $("#ResultadoFinal").append("<sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub> , ");
        }
    }
    else
    {
        if (numeradorPrimerT!=0) {
            if (cantidaT==1) {
                $("#ResultadoFinal").append("<font size='5' color='black'>"+entero1+" <sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub></font> , ");
                datoIgual=""+entero1+" <sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub>";       
            }
            else
            {
                $("#ResultadoFinal").append(entero1+" <sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub> , ");       
            }
            
        }
        else
        {
            if (cantidadT==1) {
                $("#ResultadoFinal").append("<font size='5' color='black'>"+entero1+"</font> , ");
                datoIgual=""+entero1;
            }
            else
            {
                $("#ResultadoFinal").append(entero1+" , ");
            }
        }
        
    }
    for(var i=2;i<=cantidadT+2;i++)
    {
        entro=0;
        console.log("Datos: ", entero1,numeradorPrimerT+"/"+denominadorPrimerT,entero2,numeradorDistancia+"/"+denominadorDistancia, cantidadT);
        if (denominadorPrimerT==denominadorDistancia) {
            console.log("Primer IF...son iguales los denominadores");
            //si ambos terminos son menores...
            if ((entero1<0 || numeradorPrimerT<0) && (entero2<0 || numeradorDistancia<0)) {
                console.log("Menor,menor");
                if (entero1<0 && entero2<0) {
                    realizoOperacion=1;
                    if (entero2<0) {
                        entero2Respaldo=entero2 * -1;
                    }
                    else
                    {
                        entero2Respaldo=entero2;
                    }
                    if (numeradorDistancia<0) {
                        numeRespaldo2=numeradorDistancia * -1;
                    }
                    else
                    {
                        numeRespaldo2=numeradorDistancia;
                    }
                    console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                }
                //cierre if si existe un entero;
                if ((entero1==0 && numeradorPrimerT<0) && (entero2==0 && numeradorDistancia<0)) {
                    realizoOperacion=1;
                    entero2Respaldo=0;
                    if (numeradorDistancia<0) {
                        numeRespaldo2=numeradorDistancia * -1;
                    }
                    else
                    {
                        numeRespaldo2=numeradorDistancia;
                    }
                    console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                }//cierre de si no existe un entero
                if ((entero1==0 && numeradorPrimerT<0) && (entero2<0)) {
                    realizoOperacion=1;
                    if (entero2<0) {
                        entero2Respaldo=entero2 * -1;
                    }
                    else
                    {
                        entero2Respaldo=entero2;
                    }
                    if (numeradorDistancia<0) {
                        numeRespaldo2=numeradorDistancia * -1;
                    }
                    else
                    {
                        numeRespaldo2=numeradorDistancia;
                    }
                    console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                }//cierre de si no existe un entero
                if ((entero1<0) && (entero2==0 && numeradorDistancia)) {
                    realizoOperacion=1;
                    entero2Respaldo=0;
                    if (numeradorDistancia<0) {
                        numeRespaldo2=numeradorDistancia * -1;
                    }
                    else
                    {
                        numeRespaldo2=numeradorDistancia;
                    }
                    console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                }//cierre de si no existe un entero
                if (realizoOperacion==1) {
                    pasoResta=1;
                    enteroFinal=enteroRestaGlobal;
                    numeradorFinal=numeradorRestaGlobal;
                    denominadorFinal=denominadorRestaGlobal;
                    console.log("Valor restarado 1: ",enteroFinal,numeradorFinal,denominadorFinal);
                    if (i==cantidadT) {
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;
                                }
                            }  
                            else
                            {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                            }
                            yaPinto=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                            if (denominadorFinal==1) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                            datoIgual=""+numeradorFinal;    
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;    
                        }
                    }
                    else
                    {
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                            }
                            else
                            {
                                $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                            yaPinto2=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                            if (denominadorFinal==1) {
                                $("#ResultadoFinal").append(numeradorFinal+" , ");
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                            $("#ResultadoFinal").append(enteroFinal+" , ");
                        }
                    }
                }
                pasoNumIgual1=1;
            }
            realizoOperacion=0;
            if ((entero1>0 || numeradorPrimerT>0) && (entero2<0 || numeradorDistancia<0)) {
                console.log("mayor,menor");
                console.log(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                if (entero1>0 && entero2<0) {
                    realizoOperacion=1;
                    console.log(">,<...1");
                    pasoNumIgual2=1;
                    if (entero2<0) {
                        entero2Respaldo=entero2 * -1;
                    }
                    else
                    {
                        entero2Respaldo=entero2;
                    }
                    if (numeradorDistancia<0) {
                        numeRespaldo2=numeradorDistancia * -1;
                    }
                    else
                    {
                        numeRespaldo2=numeradorDistancia;
                    }
                    console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                }
                if ((entero1==0 && numeradorPrimerT>0) && (entero2==0 && numeradorDistancia<0)) {
                    realizoOperacion=1;
                    console.log(">,<...2");
                    pasoNumIgual2=1;
                    entero2Respaldo=0;
                    if (numeradorDistancia<0) {
                        numeRespaldo2=numeradorDistancia * -1;
                    }
                    else
                    {
                        numeRespaldo2=numeradorDistancia;
                    }
                    console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    existeEntero=1;
                }//cierre del if si es entero
                if ((entero1==0 && numeradorPrimerT>0) && (entero2<0)) {
                    realizoOperacion=1;
                    console.log(">,<...3");
                    pasoNumIgual2=1;
                    if (entero2<0) {
                        entero2Respaldo=entero2 * -1;
                    }
                    else
                    {
                        entero2Respaldo=entero2;
                    }
                    if (numeradorDistancia<0) {
                        numeRespaldo2=numeradorDistancia * -1;
                    }
                    else
                    {
                        numeRespaldo2=numeradorDistancia;
                    }
                    console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    existeEntero=1;
                }//cierre del if si es entero
                if ((entero1>0) && (entero2==0 && numeradorDistancia<0)) {
                    realizoOperacion=1;
                    console.log(">,<...4");
                    pasoNumIgual2=1;
                    entero2Respaldo=0;
                    if (numeradorDistancia<0) {
                        numeRespaldo2=numeradorDistancia * -1;
                    }
                    else
                    {
                        numeRespaldo2=numeradorDistancia;
                    }
                    console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                }//cierre del if si es entero
                if (realizoOperacion==1) {
                    pasoResta=1;
                    enteroFinal=enteroRestaGlobal;
                    numeradorFinal=numeradorRestaGlobal;
                    denominadorFinal=denominadorRestaGlobal;
                    console.log("Valor restarado 1: ",enteroFinal,numeradorFinal,denominadorFinal);
                    if (i==cantidadT) {
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;
                                }
                            }  
                            else
                            {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                            }
                            yaPinto=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                            if (denominadorFinal==1) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                            datoIgual=""+numeradorFinal;    
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;    
                        }
                    }
                    else
                    {
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                            }
                            else
                            {
                                $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                            yaPinto2=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                            if (denominadorFinal==1) {
                                $("#ResultadoFinal").append(numeradorFinal+" , ");
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                            $("#ResultadoFinal").append(enteroFinal+" , ");
                        }
                    }
                }
            }
            if ((entero1>0 || numeradorPrimerT>0) && (entero2>0 || numeradorDistancia>0)) {
                console.log("Mayor,mayor");
                if (entero1>=0 && entero2>=0) {
                    pasoResta=1;
                    denominadorFinal=denominadorPrimerT;
                    numeradorFinal=numeradorPrimerT+numeradorDistancia;
                    console.log("numerador: ",numeradorFinal,"denominador: ",denominadorFinal);
                    if (numeradorFinal>denominadorFinal) {
                        division=numeradorFinal/denominadorFinal;
                        division=parseInt(division);
                        console.log("division: ",division);
                        if (division!=0) {
                            numeradorFinal=numeradorFinal-(division*denominadorFinal);
                            enteroFinal=entero1+entero2+division;
                            denominadorFinal=denominadorFinal;
                        }
                    }
                    else
                    {
                        reduce(numeradorFinal,denominadorFinal);
                        numeradorFinal=nuevoAn;
                        denominadorFinal=nuevoAd;
                        enteroFinal=entero1+entero2;
                    }
                    if (i==cantidadT) {
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            console.log("1....a");
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;
                                }
                            }  
                            else
                            {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                            }
                            yaPinto=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                            console.log("2....a");
                            if (denominadorFinal==1) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                            datoIgual=""+numeradorFinal;    
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            console.log("3....a");
                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;    
                        }
                    }
                    else
                    {
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            console.log("1....b");
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                            }
                            else
                            {
                                $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                            yaPinto2=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                            console.log("2....b");
                            if (denominadorFinal==1) {
                                $("#ResultadoFinal").append(numeradorFinal+" , ");
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                            console.log("3....b");
                            $("#ResultadoFinal").append(enteroFinal+" , ");
                        }
                    }
                }
            }
            realizoOperacion=0;
            if ((entero1<0 || numeradorPrimerT<0) && (entero2>0 || numeradorDistancia>0)) {
                console.log("menor,mayor");
                if (entero1<0 && entero2>0) {
                    realizoOperacion=1;
                    if (entero1<0) {
                        entero1=entero1 * -1;
                    }
                    if (numeradorPrimerT<0) {
                        numeradorPrimerT=numeradorPrimerT * -1;
                    }
                    restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                }
                if ((entero1==0 && numeradorPrimerT<0) && (entero2==0 && numeradorDistancia>0)) {
                    realizoOperacion=1;
                    entero1=0;
                    if (numeradorPrimerT<0) {
                        numeradorPrimerT=numeradorPrimerT * -1;
                    }
                    restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                }//cierre si el entero no existe
                if ((entero1==0 && numeradorPrimerT<0) && (entero2>0)) {
                    realizoOperacion=1;
                    if (entero1<0) {
                        entero1=entero1 * -1;
                    }
                    if (numeradorPrimerT<0) {
                        numeradorPrimerT=numeradorPrimerT * -1;
                    }
                    restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                }//cierre si el entero no existe
                if ((entero1<0) && (entero2==0 && numeradorDistancia>0)) {
                    realizoOperacion=1;
                    entero1=0;
                    if (numeradorPrimerT<0) {
                        numeradorPrimerT=numeradorPrimerT * -1;
                    }
                    restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                }//cierre si el entero no existe
                if (realizoOperacion==1) {
                    pasoResta=1;
                    enteroFinal=enteroRestaGlobal;
                    numeradorFinal=numeradorRestaGlobal;
                    denominadorFinal=denominadorRestaGlobal;
                    console.log("Valor restarado 1: ",enteroFinal,numeradorFinal,denominadorFinal);
                    if (i==cantidadT) {
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;
                                }
                            }  
                            else
                            {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                            }
                            yaPinto=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                            if (denominadorFinal==1) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                            datoIgual=""+numeradorFinal;    
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;    
                        }
                    }
                    else
                    {
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                            }
                            else
                            {
                                $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                            yaPinto2=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                            if (denominadorFinal==1) {
                                $("#ResultadoFinal").append(numeradorFinal+" , ");
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                            $("#ResultadoFinal").append(enteroFinal+" , ");
                        }
                    }
                }
            }
        }
        else{
            console.log("else del primer IF...No son iguales los denominadores")
            if(denominadorDistancia==0 || denominadorPrimerT==0)
            {
                console.log("Un numero es entero...");
                if (denominadorDistancia==0) {
                    console.log("denominadorDistancia 0");
                    enteroFinal=entero1;
                    numeradorFinal=numeradorDistancia;
                    denominadorFinal=denominadorDistancia;
                }
                if(denominadorPrimerT==0 && (numeradorDistancia!=0 || entero2!=0))
                {
                    entero1=entero1+entero2;
                    console.log("Enterooo:",entero1);
                    console.log("denominadorPT 0 --- numeradorDistancia !=0");
                    if (entero>0 && (enter2<0 || numeradorDistancia<0)) {
                        console.log("(entero1>0 && numeradorDistancia<0)",entero1,denominadorDistancia,numeradorDistancia);
                        numeradorFinal=(entero1*denominadorDistancia)+numeradorDistancia;
                        denominadorFinal=denominadorDistancia;
                        enteroFinal=0;
                        division=numeradorFinal/denominadorFinal;
                        division=parseInt(division);
                        if (division!=0) {
                            enteroFinal=division;
                            numeradorFinal=numeradorFinal-(division*denominadorFinal);
                            denominadorFinal=denominadorFinal;
                        }
                    }
                    if (entero<0 && (numeradorDistancia>0 || enter2>0)) {
                        if (enter2>=0) {
                            console.log("(entero1<0 && numeradorDistancia>0)",entero1,denominadorDistancia,numeradorDistancia);
                            numeradorFinal=(entero1*denominadorDistancia)+numeradorDistancia;
                            denominadorFinal=denominadorDistancia;
                            enteroFinal=0;
                            division=numeradorFinal/denominadorFinal;
                            division=parseInt(division);
                            console.log("division floor:",division)
                            if (division!=0) {
                                enteroFinal=division;
                                numeradorFinal=numeradorFinal-(division*denominadorFinal);
                                denominadorFinal=denominadorFinal;
                            }
                        }
                    }
                    if ((entero>0 && (numeradorDistancia>0 || enter2>0)) || (entero<0 && (numeradorDistancia<0 || entero<0))) {
                        console.log("(entero1>0 && (numeradorDistancia>0 || entero2>0)) || (entero1<0 && (numeradorDistancia<0 || entero2<0))");
                        if (entero<0) {
                            if (enter2<0) {
                                ///enteroFinal=entero1+entero2;
                                enteroFinal=entero1;
                                numeradorFinal=Math.abs(numeradorPrimerT);
                                denominadorFinal=Math.abs(denominadorPrimerT);    
                            }
                            else
                            {
                                if (numeradorDistancia<0) {
                                    //enteroFinal=entero1-entero2;
                                    enteroFinal=entero1;
                                    numeradorFinal=Math.abs(numeradorPrimerT);
                                    denominadorFinal=Math.abs(denominadorPrimerT);    
                                }
                            }
                        }
                        if (entero>0) {
                            if (enter2>0 || numeradorDistancia>0) {
                                //enteroFinal=entero1+entero2;
                                enteroFinal=entero1;
                                numeradorFinal=numeradorDistancia;
                                denominadorFinal=denominadorDistancia;
                            }
                        }
                    }
                }
                console.log("ResultadoSonIguales: ",enteroFinal,numeradorFinal,denominadorFinal);
                if (i==cantidadT) {
                    if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                        if (denominadorFinal==0 || denominadorFinal==1) {
                            if (denominadorFinal==1) {
                                enteroFinal=enteroFinal+numeradorFinal;
                                numeradorFinal=0;
                                denominadorFinal=0;
                                interno=1;
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;
                            }
                            if (denominadorFinal==0 && interno==0) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;
                            }
                        }  
                        else
                        {
                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                        }
                        yaPinto=1;
                    }
                    if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                        if (denominadorFinal==1) {
                            $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                        datoIgual=""+numeradorFinal;    
                        }
                        else
                        {
                            $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                        }
                        
                    }
                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                        datoIgual=""+enteroFinal;    
                    }
                }
                else
                {
                    if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                        if (denominadorFinal==0 || denominadorFinal==1) {
                            if (denominadorFinal==1) {
                                enteroFinal=enteroFinal+numeradorFinal;
                                numeradorFinal=0;
                                denominadorFinal=0;
                                interno=1;
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                            if (denominadorFinal==0 && interno==0) {
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                        }
                        else
                        {
                            $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                        }
                        yaPinto2=1;
                    }
                    if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                        if (denominadorFinal==1) {
                            $("#ResultadoFinal").append(numeradorFinal+" , ");
                        }
                        else
                        {
                            $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                        }
                    }
                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                        $("#ResultadoFinal").append(enteroFinal+" , ");
                    }
                }
                pasoResta=1;
            }
            else
            {
                if (entero1!=0) {
                    //si el valor entero para el primer termino es negativo y el valor del entero TD es positivo
                    if (entero1<0 && entero2>0) {
                        entro=1;
                        entero1=entero1 * -1;
                        restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                        pasoResta=1;
                        enteroFinal=enteroRestaGlobal;
                        numeradorFinal=numeradorRestaGlobal;
                        denominadorFinal=denominadorRestaGlobal;
                        console.log("Valor restarado 1: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (i==cantidadT) {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;
                                    }
                                }  
                                else
                                {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                }
                                yaPinto=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                datoIgual=""+numeradorFinal;    
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                }
                                
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;    
                            }
                        }
                        else
                        {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                }
                                else
                                {
                                    $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                                yaPinto2=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append(numeradorFinal+" , ");
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                        }
                    }
                    if (entero2<0 || numeradorDistancia<0) {
                        entro=1;
                        console.log("Entro donde acabo dep oner esto...1");
                        if (entero2<0) {
                            entero2Respaldo=entero2 * -1;                            
                        }
                        if (numeradorDistancia<0) {
                            numeRespaldo2= numeradorDistancia * -1;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);                            
                        pasoResta=1;
                        enteroFinal=enteroRestaGlobal;
                        numeradorFinal=numeradorRestaGlobal;
                        denominadorFinal=denominadorRestaGlobal;
                        console.log("Valor restarado 2: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (i==cantidadT) {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;
                                        yaPinto=1;
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;
                                        yaPinto=1;
                                    }
                                }  
                                else
                                {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                }
                                yaPinto=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                datoIgual=""+numeradorFinal;  
                                yaPinto=1;  
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                yaPinto=1;
                                }
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;  
                            }
                        }
                        else
                        {
                            if (enteroFinal!=0 && numeradorFinal!=0) {
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                }
                                else
                                {
                                    $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                                yaPinto2=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append(numeradorFinal+" , ");
                                    yaPinto2=1;
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                    yaPinto2=1;
                                }
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                        }
                    }
                    if ((entero1<0 || numeradorPrimerT<0) && (entero2>0 || numeradorDistancia>0)) {
                        entro=1;
                        console.log("Entro donde acabo dep oner esto...2");
                        if (entero2>0) {
                            entero2Respaldo=entero2 * -1;                            
                        }
                        if (numeradorDistancia>0) {
                            numeRespaldo2= numeradorDistancia * -1;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);            
                        pasoResta=1;
                        enteroFinal=enteroRestaGlobal;
                        numeradorFinal=numeradorRestaGlobal;
                        denominadorFinal=denominadorRestaGlobal;
                        console.log("Valor restarado 2: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (i==cantidadT) {
                            console.log("Entro a imprimir... 1");
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                console.log("imprimir1",enteroFinal,numeradorFinal,denominadorFinal);
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;
                                        yaPinto=1;
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;
                                        yaPinto=1;
                                    }
                                }  
                                else
                                {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                yaPinto=1;
                                }                                
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                console.log("imprimir2",enteroFinal,numeradorFinal,denominadorFinal);
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                    datoIgual=""+numeradorFinal;    
                                    yaPinto=1;
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                    yaPinto=1;
                                }
                                
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                console.log("imprimir3",enteroFinal,numeradorFinal,denominadorFinal);
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;    
                            }
                        }
                        else
                        {
                            yaPinto2=0;
                            console.log("Entro a imprimir... 2");
                            if (enteroFinal!=0 && numeradorFinal!=0) {
                                console.log("imprimir4",enteroFinal,numeradorFinal,denominadorFinal);
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                        yaPinto2=1;
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                        yaPinto2=1;
                                    }
                                }
                                else
                                {
                                    $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                    yaPinto2=1;
                                }                                
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                console.log("imprimir5",enteroFinal,numeradorFinal,denominadorFinal);
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append(numeradorFinal+" , ");
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                                yapinto=1;
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                console.log("imprimir6",enteroFinal,numeradorFinal,denominadorFinal);
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                        }
                    }
                    /*if (entero1<0 && (entero2<0 || numeradorDistancia<0)) {
                        entro=1;
                        if (entero2<0) {
                            entero2Respaldo=entero2 * -1;                            
                        }
                        if (numeradorDistancia<0) {
                            numeRespaldo2= numeradorDistancia * -1;
                        }
                        pasoResta=1;
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        enteroFinal=enteroRestaGlobal;
                        numeradorFinal=numeradorRestaGlobal;
                        denominadorFinal=denominadorRestaGlobal;
                        console.log("Valor restarado 3: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (i==cantidadT) {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;    
                            }
                        }
                        else
                        {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0) {
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                        }
                    }*/
                    if (entro==0) 
                    {
                        pasoResta=0;
                        console.log("denominadores: ",denominadorPrimerT,denominadorDistancia);
                        if (denominadorPrimerT>=denominadorDistancia) {
                            entero2Respaldo=denominadorPrimerT/denominadorDistancia;
                            if (entero2Respaldo % 1 == 0) {
                                pasopaso=1;
                                numeradorNDistancia=entero2Respaldo*numeradorDistancia;
                                denominadorNDistancia=entero2Respaldo*denominadorDistancia;
                                numeradorFinal=numeradorPrimerT+numeradorNDistancia;
                                denominadorFinal=denominadorNDistancia;
                            }
                        }
                        else
                        {
                            entero2Respaldo=denominadorDistancia/denominadorPrimerT;
                            console.log("entero2Respaldo: ",entero2Respaldo);
                            if (entero2Respaldo % 1 == 0) {
                                console.log("Entro al respaldo...",numeradorPrimerT,denominadorPrimerT);
                                pasopaso=1;
                                numeradorNPrimerT=entero2Respaldo*numeradorPrimerT;
                                console.log(numeradorNPrimerT);
                                denominadorNPrimerT=entero2Respaldo*denominadorPrimerT;
                                console.log(denominadorNPrimerT);
                                numeradorFinal=numeradorDistancia+numeradorNPrimerT;
                                console.log(numeradorFinal);
                                denominadorFinal=denominadorNPrimerT;
                                console.log(denominadorFinal);
                            }
                        }
                        if (pasopaso==0) {
                            numeradorNPrimerT = numeradorPrimerT * denominadorDistancia;
                            console.log(numeradorPrimerT,denominadorDistancia,numeradorNPrimerT);
                            numeradorNDistancia = numeradorDistancia * denominadorPrimerT;
                            console.log(numeradorDistancia,denominadorPrimerT,numeradorNDistancia);
                            denominadorNPrimerT = denominadorPrimerT * denominadorDistancia;
                            console.log(denominadorPrimerT, denominadorDistancia, denominadorNPrimerT);
                            denominadorNDistancia = denominadorPrimerT * denominadorDistancia;
                            console.log(denominadorPrimerT, denominadorDistancia, denominadorNDistancia);
                            denominadorFinal = denominadorNPrimerT;
                            console.log(denominadorFinal);
                            numeradorFinal = numeradorNPrimerT + numeradorNDistancia;
                            console.log(numeradorNPrimerT, numeradorNDistancia, numeradorFinal);
                        }
                    }
                }
                else
                {
                    pasoResta=0;
                    console.log("denominadores: ",denominadorPrimerT,denominadorDistancia);
                    if (denominadorPrimerT>=denominadorDistancia) {
                        entero2Respaldo=denominadorPrimerT/denominadorDistancia;
                        if (entero2Respaldo % 1 == 0) {
                            pasopaso=1;
                            numeradorNDistancia=entero2Respaldo*numeradorDistancia;
                            denominadorNDistancia=entero2Respaldo*denominadorDistancia;
                            numeradorFinal=numeradorPrimerT+numeradorNDistancia;
                            denominadorFinal=denominadorNDistancia;
                        }
                    }
                    if (pasopaso==0) {
                        numeradorNPrimerT = numeradorPrimerT * denominadorDistancia;
                        console.log(numeradorPrimerT,denominadorDistancia,numeradorNPrimerT);
                        numeradorNDistancia = numeradorDistancia * denominadorPrimerT;
                        console.log(numeradorDistancia,denominadorPrimerT,numeradorNDistancia);
                        denominadorNPrimerT = denominadorPrimerT * denominadorDistancia;
                        console.log(denominadorPrimerT, denominadorDistancia, denominadorNPrimerT);
                        denominadorNDistancia = denominadorPrimerT * denominadorDistancia;
                        console.log(denominadorPrimerT, denominadorDistancia, denominadorNDistancia);
                        denominadorFinal = denominadorNPrimerT;
                        console.log(denominadorFinal);
                        numeradorFinal = numeradorNPrimerT + numeradorNDistancia;
                        console.log(numeradorNPrimerT, numeradorNDistancia, numeradorFinal);
                    }
                }
            }
        }
        if (pasoResta==0) {
            console.log("No paso por la resta");
            console.log(numeradorFinal,denominadorFinal);
            //reduciendo la fraccion...
            /*var arr= new Array();
            arr[0]=numeradorFinal;arr[1]=denominadorFinal;
            var hcff=hcf(arr);
            var numeradorFinal=numeradorFinal/hcff;
            var denominadorFinal=denominadorFinal/hcff;*/
            reduce(numeradorFinal,denominadorFinal);
            //hasta aca reduzco la fraccion...
            console.log(numeradorFinal,denominadorFinal);
            //si el numerador es mayor que el denominador
            if (numeradorFinal>=denominadorFinal) {
                console.log("Numerador mayor")
                esEntero=numeradorFinal/denominadorFinal;
                console.log("Division del NUM/DEN", esEntero)
                if (esEntero % 1 == 0) {
                    console.log("Es entero...")
                    enteroFinal = entero1 + entero2 + esEntero;
                    numeradorFinal=0;
                    denominadorFinal=0;
                    console.log(entero1, entero2, esEntero, enteroFinal);
                    if (i==cantidadT) {
                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                        datoIgual=""+enteroFinal;    
                    }
                    else
                    {
                        $("#ResultadoFinal").append(enteroFinal+" , ");
                    }
                    
                }
                else
                {
                    console.log("No es entero...")
                    esEntero=Math.floor(esEntero);
                    if (esEntero!=0) {
                        numeradorFinal=numeradorFinal - (esEntero * denominadorFinal);
                        enteroFinal=entero1 + entero2 + esEntero;
                        denominadorFinal=denominadorFinal;
                    }
                    else
                    {
                        numeradorFinal = numeradorFinal - denominadorFinal;
                        console.log(numeradorFinal, denominadorFinal, numeradorFinal);
                        enteroFinal = entero1 + entero2 + 1;
                        console.log(entero1, entero2, enteroFinal);
                    }
                    //reducirFraccion(numeradorFinal,denominadorFinal);
                    if(cantidadT==i){
                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                    }
                    else
                    {
                        $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub> , ");
                    }
                }
            }
            else//el numerador no es mayor...
            {
                console.log(numeradorFinal,denominadorFinal);
                if (numeradorFinal<0) {
                    numeradorFinal=Math.abs(numeradorFinal);
                    esEntero=numeradorFinal/denominadorFinal;
                    console.log("Division del NUM/DEN", esEntero)
                    if (esEntero % 1 == 0) {
                        console.log("Es entero...")
                        enteroFinal = entero1 + entero2 + (esEntero * -1);
                        numeradorFinal=0;
                        denominadorFinal=0;
                        console.log(entero1, entero2, esEntero, enteroFinal);
                        if (i==cantidadT) {
                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;    
                        }
                        else
                        {
                            $("#ResultadoFinal").append(enteroFinal+" , ");
                        }
                        
                    }
                    else
                    {
                        console.log("No es entero...")
                        esEntero=Math.floor(esEntero);
                        if (esEntero!=0) {
                            numeradorFinal=numeradorFinal - (esEntero * denominadorFinal);
                            enteroFinal=entero1 + entero2 + (esEntero * -1);
                            denominadorFinal=denominadorFinal;
                        }
                        else
                        {
                            numeradorFinal = (numeradorFinal * -1) - denominadorFinal;
                            console.log(numeradorFinal, denominadorFinal, numeradorFinal);
                            enteroFinal = entero1 + entero2 + 1;
                            console.log(entero1, entero2, enteroFinal);
                        }
                        //reducirFraccion(numeradorFinal,denominadorFinal);
                        if(cantidadT==i){
                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                        }
                        else
                        {
                            $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub> , ");
                        }
                    }
                }
                else
                {
                    //console.log("numerador menor")
                    enteroFinal= entero1 + entero2;
                    //console.log(entero1, entero2, enteroFinal);
                    if (enteroFinal==0) {
                        //console.log("Entero final 0");
                        if(cantidadT==i){
                            $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                        }
                        else
                        {
                            $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub> , ");
                        }      
                    }
                    else
                    {
                        //console.log("Entero Final mayor de 0");
                        if(cantidadT==i){
                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                        }
                        else
                        {
                            $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub> , ");
                        }
                    }
                }
            }
        }//fin del cerro resta
            entero1=enteroFinal;
            numeradorPrimerT=numeradorFinal;
            denominadorPrimerT=denominadorFinal;
    }//cierre del for
    imprimir=1;
    $("#ResultadoFinal").append("...");
    $("#ResultadoFinal").append("<br><br> Donde el "+cantidadT+" término de la sucesión es: "+datoIgual);
}//fin de la funcion que genera sucesiones fraccionarias...

function sucesionGeneralDivision(entero,numeradorPrimeT,denominadorPrimeT,cantidaT,enter2,numeradorDistanci,denominadorDistanci,enteroComparacion,numComparacion,denComparacion){
    //Para fracciones
    var entero1=entero;
    var entero2=enter2;
    var entero3="";
    var numeradorDistancia=numeradorDistanci;
    var numeradorPrimerT=numeradorPrimeT;
    var numeradorNDistancia="";
    var numeradorNPrimerT="";
    var numeradorFinal="";
    var numeradoTerminoD="";
    var numeradorNTerminoD="";
    var denominadorDistancia=denominadorDistanci;
    var denominadorNDistancia="";
    var denominadorPrimerT=denominadorPrimeT;
    var denominadorNPrimerT="";
    var denominadorFinal="";
    var denominadorTerminoD="";
    var denominadorNTerminoD="";
    var enteroFinal="";
    var esEntero="";
    var datoIgual="";
    var cantidadT=cantidaT;
    var pasoResta=0;
    var entro=0;
    var entero2Respaldo=0;
    var numeRespaldo2=0;
    var pasopaso=0;
    var pasoNumIgual1=0;
    var pasoNumIgual2=0;
    var yaPinto=0;
    var yaPinto2=0;
    var interno=0;
    var realizoOperacion=0;
    SonIguales=0;
    console.log("obtenidos: ",entero,numeradorPrimeT,denominadorPrimeT,cantidaT,enter2,numeradorDistanci,denominadorDistanci);
    //INICIO DE LA RESOLUCION...
    $("#ResultadoFinal").html("");
    if (entero1==0) {
        if (cantidadT==1) {
            $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub></font> , ");
            datoIgual="<sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub>";
        }
        else
        {
            $("#ResultadoFinal").append("<sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub> , ");
        }
    }
    else
    {
        if (numeradorPrimerT!=0) {
            if (cantidaT==1) {
                $("#ResultadoFinal").append("<font size='5' color='black'>"+entero1+" <sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub></font> , ");
                datoIgual=""+entero1+" <sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub>";       
            }
            else
            {
                $("#ResultadoFinal").append(entero1+" <sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub> , ");       
            }
            
        }
        else
        {
            if (cantidadT==1) {
                $("#ResultadoFinal").append("<font size='5' color='black'>"+entero1+"</font> , ");
                datoIgual=""+entero1;
            }
            else
            {
                $("#ResultadoFinal").append(entero1+" , ");
            }
        }
        
    }
    for(var i=2;i<=cantidadT+2;i++)
    {
        if (SonIguales==0) {
            entro=0;
            console.log("Datos: ", entero1,numeradorPrimerT+"/"+denominadorPrimerT,entero2,numeradorDistancia+"/"+denominadorDistancia, cantidadT);
            if (denominadorPrimerT==denominadorDistancia) {
                console.log("Primer IF...son iguales los denominadores");
                //si ambos terminos son menores...
                if ((entero1<0 || numeradorPrimerT<0) && (entero2<0 || numeradorDistancia<0)) {
                    console.log("Menor,menor");
                    if (entero1<0 && entero2<0) {
                        realizoOperacion=1;
                        if (entero2<0) {
                            entero2Respaldo=entero2 * -1;
                        }
                        else
                        {
                            entero2Respaldo=entero2;
                        }
                        if (numeradorDistancia<0) {
                            numeRespaldo2=numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    }
                    //cierre if si existe un entero;
                    if ((entero1==0 && numeradorPrimerT<0) && (entero2==0 && numeradorDistancia<0)) {
                        realizoOperacion=1;
                        entero2Respaldo=0;
                        if (numeradorDistancia<0) {
                            numeRespaldo2=numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    }//cierre de si no existe un entero
                    if ((entero1==0 && numeradorPrimerT<0) && (entero2<0)) {
                        realizoOperacion=1;
                        if (entero2<0) {
                            entero2Respaldo=entero2 * -1;
                        }
                        else
                        {
                            entero2Respaldo=entero2;
                        }
                        if (numeradorDistancia<0) {
                            numeRespaldo2=numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    }//cierre de si no existe un entero
                    if ((entero1<0) && (entero2==0 && numeradorDistancia)) {
                        realizoOperacion=1;
                        entero2Respaldo=0;
                        if (numeradorDistancia<0) {
                            numeRespaldo2=numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    }//cierre de si no existe un entero
                    if (realizoOperacion==1) {
                        pasoResta=1;
                        enteroFinal=enteroRestaGlobal;
                        numeradorFinal=numeradorRestaGlobal;
                        denominadorFinal=denominadorRestaGlobal;
                        console.log("Valor restarado 1: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (i==cantidadT) {
                            if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                    if (denominadorFinal==0 || denominadorFinal==1) {
                                        if (denominadorFinal==1) {
                                            enteroFinal=enteroFinal+numeradorFinal;
                                            numeradorFinal=0;
                                            denominadorFinal=0;
                                            interno=1;
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                            datoIgual=""+enteroFinal;
                                        }
                                        if (denominadorFinal==0 && interno==0) {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                            datoIgual=""+enteroFinal;
                                        }
                                    }  
                                    else
                                    {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                    }
                                    yaPinto=1;
                                }
                                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                    if (denominadorFinal==1) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                    datoIgual=""+numeradorFinal;    
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                    }
                                    
                                }
                                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;    
                                }
                            }
                            else
                            {
                                SonIguales=1;
                            }
                        }
                        else
                        {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                }
                                else
                                {
                                    $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                                yaPinto2=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append(numeradorFinal+" , ");
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                        }
                    }
                    pasoNumIgual1=1;
                }
                realizoOperacion=0;
                if ((entero1>0 || numeradorPrimerT>0) && (entero2<0 || numeradorDistancia<0)) {
                    console.log("mayor,menor");
                    console.log(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                    if (entero1>0 && entero2<0) {
                        realizoOperacion=1;
                        console.log(">,<...1");
                        pasoNumIgual2=1;
                        if (entero2<0) {
                            entero2Respaldo=entero2 * -1;
                        }
                        else
                        {
                            entero2Respaldo=entero2;
                        }
                        if (numeradorDistancia<0) {
                            numeRespaldo2=numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    }
                    if ((entero1==0 && numeradorPrimerT>0) && (entero2==0 && numeradorDistancia<0)) {
                        realizoOperacion=1;
                        console.log(">,<...2");
                        pasoNumIgual2=1;
                        entero2Respaldo=0;
                        if (numeradorDistancia<0) {
                            numeRespaldo2=numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        existeEntero=1;
                    }//cierre del if si es entero
                    if ((entero1==0 && numeradorPrimerT>0) && (entero2<0)) {
                        realizoOperacion=1;
                        console.log(">,<...3");
                        pasoNumIgual2=1;
                        if (entero2<0) {
                            entero2Respaldo=entero2 * -1;
                        }
                        else
                        {
                            entero2Respaldo=entero2;
                        }
                        if (numeradorDistancia<0) {
                            numeRespaldo2=numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        existeEntero=1;
                    }//cierre del if si es entero
                    if ((entero1>0) && (entero2==0 && numeradorDistancia<0)) {
                        realizoOperacion=1;
                        console.log(">,<...4");
                        pasoNumIgual2=1;
                        entero2Respaldo=0;
                        if (numeradorDistancia<0) {
                            numeRespaldo2=numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                    }//cierre del if si es entero
                    if (realizoOperacion==1) {
                        pasoResta=1;
                        enteroFinal=enteroRestaGlobal;
                        numeradorFinal=numeradorRestaGlobal;
                        denominadorFinal=denominadorRestaGlobal;
                        console.log("Valor restarado 1: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (i==cantidadT) {
                            if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                    if (denominadorFinal==0 || denominadorFinal==1) {
                                        if (denominadorFinal==1) {
                                            enteroFinal=enteroFinal+numeradorFinal;
                                            numeradorFinal=0;
                                            denominadorFinal=0;
                                            interno=1;
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                            datoIgual=""+enteroFinal;
                                        }
                                        if (denominadorFinal==0 && interno==0) {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                            datoIgual=""+enteroFinal;
                                        }
                                    }  
                                    else
                                    {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                    }
                                    yaPinto=1;
                                }
                                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                    if (denominadorFinal==1) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                    datoIgual=""+numeradorFinal;    
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                    }
                                    
                                }
                                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;    
                                }
                            }
                            else
                            {
                                SonIguales=1;
                            }
                        }
                        else
                        {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                }
                                else
                                {
                                    $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                                yaPinto2=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append(numeradorFinal+" , ");
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                        }
                    }
                }
                if ((entero1>0 || numeradorPrimerT>0) && (entero2>0 || numeradorDistancia>0)) {
                    console.log("Mayor,mayor");
                    if (entero1>=0 && entero2>=0) {
                        pasoResta=1;
                        denominadorFinal=denominadorPrimerT;
                        numeradorFinal=numeradorPrimerT+numeradorDistancia;
                        console.log("numerador: ",numeradorFinal,"denominador: ",denominadorFinal);
                        if (numeradorFinal>denominadorFinal) {
                            division=numeradorFinal/denominadorFinal;
                            division=parseInt(division);
                            console.log("division: ",division);
                            if (division!=0) {
                                numeradorFinal=numeradorFinal-(division*denominadorFinal);
                                enteroFinal=entero1+entero2+division;
                                denominadorFinal=denominadorFinal;
                            }
                        }
                        else
                        {
                            reduce(numeradorFinal,denominadorFinal);
                            numeradorFinal=nuevoAn;
                            denominadorFinal=nuevoAd;
                            enteroFinal=entero1+entero2;
                        }
                        if (i==cantidadT) {
                            if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                    console.log("1....a");
                                    if (denominadorFinal==0 || denominadorFinal==1) {
                                        if (denominadorFinal==1) {
                                            enteroFinal=enteroFinal+numeradorFinal;
                                            numeradorFinal=0;
                                            denominadorFinal=0;
                                            interno=1;
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                            datoIgual=""+enteroFinal;
                                        }
                                        if (denominadorFinal==0 && interno==0) {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                            datoIgual=""+enteroFinal;
                                        }
                                    }  
                                    else
                                    {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                    }
                                    yaPinto=1;
                                }
                                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                    console.log("2....a");
                                    if (denominadorFinal==1) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                    datoIgual=""+numeradorFinal;    
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                    }
                                    
                                }
                                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                    console.log("3....a");
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;    
                                }
                            }
                            else
                            {
                                SonIguales=1;
                            }
                        }
                        else
                        {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                console.log("1....b");
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                }
                                else
                                {
                                    $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                                yaPinto2=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                console.log("2....b");
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append(numeradorFinal+" , ");
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                console.log("3....b");
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                        }
                    }
                }
                realizoOperacion=0;
                if ((entero1<0 || numeradorPrimerT<0) && (entero2>0 || numeradorDistancia>0)) {
                    console.log("menor,mayor");
                    if (entero1<0 && entero2>0) {
                        realizoOperacion=1;
                        if (entero1<0) {
                            entero1=entero1 * -1;
                        }
                        if (numeradorPrimerT<0) {
                            numeradorPrimerT=numeradorPrimerT * -1;
                        }
                        restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                    }
                    if ((entero1==0 && numeradorPrimerT<0) && (entero2==0 && numeradorDistancia>0)) {
                        realizoOperacion=1;
                        entero1=0;
                        if (numeradorPrimerT<0) {
                            numeradorPrimerT=numeradorPrimerT * -1;
                        }
                        restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                    }//cierre si el entero no existe
                    if ((entero1==0 && numeradorPrimerT<0) && (entero2>0)) {
                        realizoOperacion=1;
                        if (entero1<0) {
                            entero1=entero1 * -1;
                        }
                        if (numeradorPrimerT<0) {
                            numeradorPrimerT=numeradorPrimerT * -1;
                        }
                        restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                    }//cierre si el entero no existe
                    if ((entero1<0) && (entero2==0 && numeradorDistancia>0)) {
                        realizoOperacion=1;
                        entero1=0;
                        if (numeradorPrimerT<0) {
                            numeradorPrimerT=numeradorPrimerT * -1;
                        }
                        restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                    }//cierre si el entero no existe
                    if (realizoOperacion==1) {
                        pasoResta=1;
                        enteroFinal=enteroRestaGlobal;
                        numeradorFinal=numeradorRestaGlobal;
                        denominadorFinal=denominadorRestaGlobal;
                        console.log("Valor restarado 1: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (i==cantidadT) {
                            if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                    if (denominadorFinal==0 || denominadorFinal==1) {
                                        if (denominadorFinal==1) {
                                            enteroFinal=enteroFinal+numeradorFinal;
                                            numeradorFinal=0;
                                            denominadorFinal=0;
                                            interno=1;
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                            datoIgual=""+enteroFinal;
                                        }
                                        if (denominadorFinal==0 && interno==0) {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                            datoIgual=""+enteroFinal;
                                        }
                                    }  
                                    else
                                    {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                    }
                                    yaPinto=1;
                                }
                                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                    if (denominadorFinal==1) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                    datoIgual=""+numeradorFinal;    
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                    }
                                    
                                }
                                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;    
                                }
                            }
                            else
                            {
                                SonIguales=1;
                            }
                        }
                        else
                        {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append(enteroFinal+" , ");
                                    }
                                }
                                else
                                {
                                    $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                                yaPinto2=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append(numeradorFinal+" , ");
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                        }
                    }
                }
            }
            else{
                console.log("else del primer IF...No son iguales los denominadores")
                if(denominadorDistancia==0 || denominadorPrimerT==0)
                {
                    console.log("Un numero es entero...");
                    if (denominadorDistancia==0) {
                        console.log("denominadorDistancia 0");
                        enteroFinal=entero1;
                        numeradorFinal=numeradorDistancia;
                        denominadorFinal=denominadorDistancia;
                    }
                    if(denominadorPrimerT==0 && (numeradorDistancia!=0 || entero2!=0))
                    {
                        entero1=entero1+entero2;
                        console.log("Enterooo:",entero1);
                        console.log("denominadorPT 0 --- numeradorDistancia !=0");
                        if (entero>0 && (enter2<0 || numeradorDistancia<0)) {
                            console.log("(entero1>0 && numeradorDistancia<0)",entero1,denominadorDistancia,numeradorDistancia);
                            numeradorFinal=(entero1*denominadorDistancia)+numeradorDistancia;
                            denominadorFinal=denominadorDistancia;
                            enteroFinal=0;
                            division=numeradorFinal/denominadorFinal;
                            division=parseInt(division);
                            if (division!=0) {
                                enteroFinal=division;
                                numeradorFinal=numeradorFinal-(division*denominadorFinal);
                                denominadorFinal=denominadorFinal;
                            }
                        }
                        if (entero<0 && (numeradorDistancia>0 || enter2>0)) {
                            if (enter2>=0) {
                                console.log("(entero1<0 && numeradorDistancia>0)",entero1,denominadorDistancia,numeradorDistancia);
                                numeradorFinal=(entero1*denominadorDistancia)+numeradorDistancia;
                                denominadorFinal=denominadorDistancia;
                                enteroFinal=0;
                                division=numeradorFinal/denominadorFinal;
                                division=parseInt(division);
                                console.log("division floor:",division)
                                if (division!=0) {
                                    enteroFinal=division;
                                    numeradorFinal=numeradorFinal-(division*denominadorFinal);
                                    denominadorFinal=denominadorFinal;
                                }
                            }
                        }
                        if ((entero>0 && (numeradorDistancia>0 || enter2>0)) || (entero<0 && (numeradorDistancia<0 || entero<0))) {
                            console.log("(entero1>0 && (numeradorDistancia>0 || entero2>0)) || (entero1<0 && (numeradorDistancia<0 || entero2<0))");
                            if (entero<0) {
                                if (enter2<0) {
                                    ///enteroFinal=entero1+entero2;
                                    enteroFinal=entero1;
                                    numeradorFinal=Math.abs(numeradorPrimerT);
                                    denominadorFinal=Math.abs(denominadorPrimerT);    
                                }
                                else
                                {
                                    if (numeradorDistancia<0) {
                                        //enteroFinal=entero1-entero2;
                                        enteroFinal=entero1;
                                        numeradorFinal=Math.abs(numeradorPrimerT);
                                        denominadorFinal=Math.abs(denominadorPrimerT);    
                                    }
                                }
                            }
                            if (entero>0) {
                                if (enter2>0 || numeradorDistancia>0) {
                                    //enteroFinal=entero1+entero2;
                                    enteroFinal=entero1;
                                    numeradorFinal=numeradorDistancia;
                                    denominadorFinal=denominadorDistancia;
                                }
                            }
                        }
                    }
                    console.log("ResultadoSonIguales: ",enteroFinal,numeradorFinal,denominadorFinal);
                    console.log("ResultadoComparacion: ",enteroComparacion,numComparacion,denComparacion);
                    if (i==cantidadT) {
                        if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                if (denominadorFinal==0 || denominadorFinal==1) {
                                    if (denominadorFinal==1) {
                                        enteroFinal=enteroFinal+numeradorFinal;
                                        numeradorFinal=0;
                                        denominadorFinal=0;
                                        interno=1;
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;
                                    }
                                }  
                                else
                                {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                }
                                yaPinto=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                if (denominadorFinal==1) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                datoIgual=""+numeradorFinal;    
                                }
                                else
                                {
                                    $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                }
                                
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;    
                            }
                        }//fin del if si son iguales los valores...
                        else
                        {
                            console.log("Son iguales...1");
                            SonIguales=1;
                        }
                    }
                    else
                    {
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                            }
                            else
                            {
                                $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                            yaPinto2=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                            if (denominadorFinal==1) {
                                $("#ResultadoFinal").append(numeradorFinal+" , ");
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                            }
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                            $("#ResultadoFinal").append(enteroFinal+" , ");
                        }
                    }
                    pasoResta=1;
                }
                else
                {
                    if (entero1!=0) {
                        //si el valor entero para el primer termino es negativo y el valor del entero TD es positivo
                        if (entero1<0 && entero2>0) {
                            entro=1;
                            entero1=entero1 * -1;
                            restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                            pasoResta=1;
                            enteroFinal=enteroRestaGlobal;
                            numeradorFinal=numeradorRestaGlobal;
                            denominadorFinal=denominadorRestaGlobal;
                            console.log("Valor restarado 1: ",enteroFinal,numeradorFinal,denominadorFinal);
                            if (i==cantidadT) {
                                //si el valor obtenido es igual al valor buscando...
                                if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                    if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                        if (denominadorFinal==0 || denominadorFinal==1) {
                                            if (denominadorFinal==1) {
                                                enteroFinal=enteroFinal+numeradorFinal;
                                                numeradorFinal=0;
                                                denominadorFinal=0;
                                                interno=1;
                                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                                datoIgual=""+enteroFinal;
                                            }
                                            if (denominadorFinal==0 && interno==0) {
                                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                                datoIgual=""+enteroFinal;
                                            }
                                        }  
                                        else
                                        {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                        datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                        }
                                        yaPinto=1;
                                    }
                                    if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                        if (denominadorFinal==1) {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                        datoIgual=""+numeradorFinal;    
                                        }
                                        else
                                        {
                                            $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                        datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                        }
                                        
                                    }
                                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;    
                                    }
                                }//cierre si los datos son iguales...
                                else
                                {
                                    SonIguales=1;
                                }
                            }
                            else
                            {
                                if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                    if (denominadorFinal==0 || denominadorFinal==1) {
                                        if (denominadorFinal==1) {
                                            enteroFinal=enteroFinal+numeradorFinal;
                                            numeradorFinal=0;
                                            denominadorFinal=0;
                                            interno=1;
                                            $("#ResultadoFinal").append(enteroFinal+" , ");
                                        }
                                        if (denominadorFinal==0 && interno==0) {
                                            $("#ResultadoFinal").append(enteroFinal+" , ");
                                        }
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                    }
                                    yaPinto2=1;
                                }
                                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                    if (denominadorFinal==1) {
                                        $("#ResultadoFinal").append(numeradorFinal+" , ");
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                    }
                                }
                                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                            }
                        }
                        if (entero2<0 || numeradorDistancia<0) {
                            entro=1;
                            console.log("Entro donde acabo dep oner esto...1");
                            if (entero2<0) {
                                entero2Respaldo=entero2 * -1;                            
                            }
                            if (numeradorDistancia<0) {
                                numeRespaldo2= numeradorDistancia * -1;
                            }
                            console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                            restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                            pasoResta=1;
                            enteroFinal=enteroRestaGlobal;
                            numeradorFinal=numeradorRestaGlobal;
                            denominadorFinal=denominadorRestaGlobal;
                            console.log("Valor restarado 2: ",enteroFinal,numeradorFinal,denominadorFinal);
                            if (i==cantidadT) {
                                //Si el dato obtenido es igual al buscado...
                                if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                    if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                        if (denominadorFinal==0 || denominadorFinal==1) {
                                            if (denominadorFinal==1) {
                                                enteroFinal=enteroFinal+numeradorFinal;
                                                numeradorFinal=0;
                                                denominadorFinal=0;
                                                interno=1;
                                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                                datoIgual=""+enteroFinal;
                                                yaPinto=1;
                                            }
                                            if (denominadorFinal==0 && interno==0) {
                                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                                datoIgual=""+enteroFinal;
                                                yaPinto=1;
                                            }
                                        }  
                                        else
                                        {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                        datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                        }
                                        yaPinto=1;
                                    }
                                    if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                        if (denominadorFinal==1) {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                        datoIgual=""+numeradorFinal;  
                                        yaPinto=1;  
                                        }
                                        else
                                        {
                                            $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                        datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                        yaPinto=1;
                                        }
                                    }
                                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;  
                                    }
                                }//cierre si los datos son iguales...
                                else
                                {
                                    SonIguales=1;
                                }
                            }
                            else
                            {
                                if (enteroFinal!=0 && numeradorFinal!=0) {
                                    if (denominadorFinal==0 || denominadorFinal==1) {
                                        if (denominadorFinal==1) {
                                            enteroFinal=enteroFinal+numeradorFinal;
                                            numeradorFinal=0;
                                            denominadorFinal=0;
                                            interno=1;
                                            $("#ResultadoFinal").append(enteroFinal+" , ");
                                        }
                                        if (denominadorFinal==0 && interno==0) {
                                            $("#ResultadoFinal").append(enteroFinal+" , ");
                                        }
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                    }
                                    yaPinto2=1;
                                }
                                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                    if (denominadorFinal==1) {
                                        $("#ResultadoFinal").append(numeradorFinal+" , ");
                                        yaPinto2=1;
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                        yaPinto2=1;
                                    }
                                }
                                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                            }
                        }
                        if ((entero1<0 || numeradorPrimerT<0) && (entero2>0 || numeradorDistancia>0)) {
                            entro=1;
                            console.log("Entro donde acabo dep oner esto...2");
                            if (entero2>0) {
                                entero2Respaldo=entero2 * -1;                            
                            }
                            if (numeradorDistancia>0) {
                                numeRespaldo2= numeradorDistancia * -1;
                            }
                            console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                            restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                            pasoResta=1;
                            enteroFinal=enteroRestaGlobal;
                            numeradorFinal=numeradorRestaGlobal;
                            denominadorFinal=denominadorRestaGlobal;
                            console.log("Valor restarado 2: ",enteroFinal,numeradorFinal,denominadorFinal);
                            if (i==cantidadT) {
                                //si el valor obtenido es igual al valor buscando...
                                if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                    console.log("Entro a imprimir... 1");
                                    if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                        console.log("imprimir1",enteroFinal,numeradorFinal,denominadorFinal);
                                        if (denominadorFinal==0 || denominadorFinal==1) {
                                            if (denominadorFinal==1) {
                                                enteroFinal=enteroFinal+numeradorFinal;
                                                numeradorFinal=0;
                                                denominadorFinal=0;
                                                interno=1;
                                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                                datoIgual=""+enteroFinal;
                                                yaPinto=1;
                                            }
                                            if (denominadorFinal==0 && interno==0) {
                                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                                datoIgual=""+enteroFinal;
                                                yaPinto=1;
                                            }
                                        }  
                                        else
                                        {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                        datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                        yaPinto=1;
                                        }                                
                                    }
                                    if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                        console.log("imprimir2",enteroFinal,numeradorFinal,denominadorFinal);
                                        if (denominadorFinal==1) {
                                            $("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                            datoIgual=""+numeradorFinal;    
                                            yaPinto=1;
                                        }
                                        else
                                        {
                                            $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                            yaPinto=1;
                                        }
                                        
                                    }
                                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                        console.log("imprimir3",enteroFinal,numeradorFinal,denominadorFinal);
                                        $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;    
                                    }
                                }//cierre si son iguales los datos...
                                else
                                {
                                    SonIguales=1;
                                }
                            }
                            else
                            {
                                yaPinto2=0;
                                console.log("Entro a imprimir... 2");
                                if (enteroFinal!=0 && numeradorFinal!=0) {
                                    console.log("imprimir4",enteroFinal,numeradorFinal,denominadorFinal);
                                    if (denominadorFinal==0 || denominadorFinal==1) {
                                        if (denominadorFinal==1) {
                                            enteroFinal=enteroFinal+numeradorFinal;
                                            numeradorFinal=0;
                                            denominadorFinal=0;
                                            interno=1;
                                            $("#ResultadoFinal").append(enteroFinal+" , ");
                                            yaPinto2=1;
                                        }
                                        if (denominadorFinal==0 && interno==0) {
                                            $("#ResultadoFinal").append(enteroFinal+" , ");
                                            yaPinto2=1;
                                        }
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                        yaPinto2=1;
                                    }                                
                                }
                                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto2==0) {
                                    console.log("imprimir5",enteroFinal,numeradorFinal,denominadorFinal);
                                    if (denominadorFinal==1) {
                                        $("#ResultadoFinal").append(numeradorFinal+" , ");
                                    }
                                    else
                                    {
                                        $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                    }
                                    yapinto=1;
                                }
                                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto2==0) {
                                    console.log("imprimir6",enteroFinal,numeradorFinal,denominadorFinal);
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                            }
                        }
                        /*if (entero1<0 && (entero2<0 || numeradorDistancia<0)) {
                            entro=1;
                            if (entero2<0) {
                                entero2Respaldo=entero2 * -1;                            
                            }
                            if (numeradorDistancia<0) {
                                numeRespaldo2= numeradorDistancia * -1;
                            }
                            pasoResta=1;
                            restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                            enteroFinal=enteroRestaGlobal;
                            numeradorFinal=numeradorRestaGlobal;
                            denominadorFinal=denominadorRestaGlobal;
                            console.log("Valor restarado 3: ",enteroFinal,numeradorFinal,denominadorFinal);
                            if (i==cantidadT) {
                                if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                }
                                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    
                                }
                                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;    
                                }
                            }
                            else
                            {
                                if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                    $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                    $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ");
                                }
                                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0) {
                                    $("#ResultadoFinal").append(enteroFinal+" , ");
                                }
                            }
                        }*/
                        if (entro==0) 
                        {
                            pasoResta=0;
                            console.log("denominadores: ",denominadorPrimerT,denominadorDistancia);
                            if (denominadorPrimerT>=denominadorDistancia) {
                                entero2Respaldo=denominadorPrimerT/denominadorDistancia;
                                if (entero2Respaldo % 1 == 0) {
                                    pasopaso=1;
                                    numeradorNDistancia=entero2Respaldo*numeradorDistancia;
                                    denominadorNDistancia=entero2Respaldo*denominadorDistancia;
                                    numeradorFinal=numeradorPrimerT+numeradorNDistancia;
                                    denominadorFinal=denominadorNDistancia;
                                }
                            }
                            if (pasopaso==0) {
                                numeradorNPrimerT = numeradorPrimerT * denominadorDistancia;
                                console.log(numeradorPrimerT,denominadorDistancia,numeradorNPrimerT);
                                numeradorNDistancia = numeradorDistancia * denominadorPrimerT;
                                console.log(numeradorDistancia,denominadorPrimerT,numeradorNDistancia);
                                denominadorNPrimerT = denominadorPrimerT * denominadorDistancia;
                                console.log(denominadorPrimerT, denominadorDistancia, denominadorNPrimerT);
                                denominadorNDistancia = denominadorPrimerT * denominadorDistancia;
                                console.log(denominadorPrimerT, denominadorDistancia, denominadorNDistancia);
                                denominadorFinal = denominadorNPrimerT;
                                console.log(denominadorFinal);
                                numeradorFinal = numeradorNPrimerT + numeradorNDistancia;
                                console.log(numeradorNPrimerT, numeradorNDistancia, numeradorFinal);
                            }
                        }
                    }
                    else
                    {
                        pasoResta=0;
                        console.log("denominadores: ",denominadorPrimerT,denominadorDistancia);
                        if (denominadorPrimerT>=denominadorDistancia) {
                            entero2Respaldo=denominadorPrimerT/denominadorDistancia;
                            if (entero2Respaldo % 1 == 0) {
                                pasopaso=1;
                                numeradorNDistancia=entero2Respaldo*numeradorDistancia;
                                denominadorNDistancia=entero2Respaldo*denominadorDistancia;
                                numeradorFinal=numeradorPrimerT+numeradorNDistancia;
                                denominadorFinal=denominadorNDistancia;
                            }
                        }
                        if (pasopaso==0) {
                            numeradorNPrimerT = numeradorPrimerT * denominadorDistancia;
                            console.log(numeradorPrimerT,denominadorDistancia,numeradorNPrimerT);
                            numeradorNDistancia = numeradorDistancia * denominadorPrimerT;
                            console.log(numeradorDistancia,denominadorPrimerT,numeradorNDistancia);
                            denominadorNPrimerT = denominadorPrimerT * denominadorDistancia;
                            console.log(denominadorPrimerT, denominadorDistancia, denominadorNPrimerT);
                            denominadorNDistancia = denominadorPrimerT * denominadorDistancia;
                            console.log(denominadorPrimerT, denominadorDistancia, denominadorNDistancia);
                            denominadorFinal = denominadorNPrimerT;
                            console.log(denominadorFinal);
                            numeradorFinal = numeradorNPrimerT + numeradorNDistancia;
                            console.log(numeradorNPrimerT, numeradorNDistancia, numeradorFinal);
                        }
                    }
                }
            }
            if (pasoResta==0) {
                console.log("No paso por la resta");
                console.log(numeradorFinal,denominadorFinal);
                //reduciendo la fraccion...
                /*var arr= new Array();
                arr[0]=numeradorFinal;arr[1]=denominadorFinal;
                var hcff=hcf(arr);
                var numeradorFinal=numeradorFinal/hcff;
                var denominadorFinal=denominadorFinal/hcff;*/
                reduce(numeradorFinal,denominadorFinal);
                //hasta aca reduzco la fraccion...
                console.log(numeradorFinal,denominadorFinal);
                //si el numerador es mayor que el denominador
                if (numeradorFinal>=denominadorFinal) {
                    console.log("Numerador mayor")
                    esEntero=numeradorFinal/denominadorFinal;
                    console.log("Division del NUM/DEN", esEntero)
                    if (esEntero % 1 == 0) {
                        console.log("Es entero...")
                        enteroFinal = entero1 + entero2 + esEntero;
                        numeradorFinal=0;
                        denominadorFinal=0;
                        console.log(entero1, entero2, esEntero, enteroFinal);
                        if (i==cantidadT) {
                            //si el valor obtenido es igual al valor buscando...
                            if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;
                            }
                            //no son iguales los datos...
                            else{
                                SonIguales=1;
                            }
                        }
                        else
                        {
                            $("#ResultadoFinal").append(enteroFinal+" , ");
                        }
                        
                    }
                    else
                    {
                        console.log("No es entero...")
                        esEntero=Math.floor(esEntero);
                        if (esEntero!=0) {
                            numeradorFinal=numeradorFinal - (esEntero * denominadorFinal);
                            enteroFinal=entero1 + entero2 + esEntero;
                            denominadorFinal=denominadorFinal;
                        }
                        else
                        {
                            numeradorFinal = numeradorFinal - denominadorFinal;
                            console.log(numeradorFinal, denominadorFinal, numeradorFinal);
                            enteroFinal = entero1 + entero2 + 1;
                            console.log(entero1, entero2, enteroFinal);
                        }
                        //reducirFraccion(numeradorFinal,denominadorFinal);
                        if(cantidadT==i){
                            //si el valor obtenido es igual al valor buscando...
                            if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                            }
                            //si los datos no coinciden...
                            else
                            {
                                SonIguales=1;
                            }
                        }
                        else
                        {
                            $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub> , ");
                        }
                    }
                }
                else//el numerador no es mayor...
                {
                    console.log(numeradorFinal,denominadorFinal);
                    if (numeradorFinal<0) {
                        numeradorFinal=Math.abs(numeradorFinal);
                        esEntero=numeradorFinal/denominadorFinal;
                        console.log("Division del NUM/DEN", esEntero)
                        if (esEntero % 1 == 0) {
                            console.log("Es entero...")
                            enteroFinal = entero1 + entero2 + (esEntero * -1);
                            numeradorFinal=0;
                            denominadorFinal=0;
                            console.log(entero1, entero2, esEntero, enteroFinal);
                            if (i==cantidadT) {
                                //si el valor obtenido es igual al valor buscando...
                                if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;
                                }
                                //Los datos no son iguales...
                                else
                                {
                                    SonIguales=1;
                                }
                            }
                            else
                            {
                                $("#ResultadoFinal").append(enteroFinal+" , ");
                            }
                            
                        }
                        else
                        {
                            console.log("No es entero...")
                            esEntero=Math.floor(esEntero);
                            if (esEntero!=0) {
                                numeradorFinal=numeradorFinal - (esEntero * denominadorFinal);
                                enteroFinal=entero1 + entero2 + (esEntero * -1);
                                denominadorFinal=denominadorFinal;
                            }
                            else
                            {
                                numeradorFinal = (numeradorFinal * -1) - denominadorFinal;
                                console.log(numeradorFinal, denominadorFinal, numeradorFinal);
                                enteroFinal = entero1 + entero2 + 1;
                                console.log(entero1, entero2, enteroFinal);
                            }
                            //reducirFraccion(numeradorFinal,denominadorFinal);
                            if(cantidadT==i){
                                //si el valor obtenido es igual al valor buscando...
                                if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                }
                                else
                                {
                                    SonIguales=1;
                                }
                            }
                            else
                            {
                                $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub> , ");
                            }
                        }
                    }
                    else
                    {
                        //console.log("numerador menor")
                        enteroFinal= entero1 + entero2;
                        //console.log(entero1, entero2, enteroFinal);
                        if (enteroFinal==0) {
                            //console.log("Entero final 0");
                            if(cantidadT==i){
                                //si el valor obtenido es igual al valor buscando...
                                if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                }
                                else
                                {
                                    SonIguales=1;
                                }
                            }
                            else
                            {
                                $("#ResultadoFinal").append("<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub> , ");
                            }      
                        }
                        else
                        {
                            //console.log("Entero Final mayor de 0");
                            if(cantidadT==i){
                                //si el valor obtenido es igual al valor buscando...
                                if ((enteroComparacion==enteroFinal) && (numComparacion==numeradorFinal) && (denComparacion==denominadorFinal)) {
                                    $("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";
                                }
                                else
                                {
                                    SonIguales=1;
                                }
                            }
                            else
                            {
                                $("#ResultadoFinal").append(enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub> , ");
                            }
                        }
                    }
                }
            }//fin del cerro resta
            entero1=enteroFinal;
            numeradorPrimerT=numeradorFinal;
            denominadorPrimerT=denominadorFinal;
        }//cierre del if si son iguales...
        //si el numero no coincide....
        else{
            $("#resolucionEjercicios").fadeOut(0);
            $("#Advertencia").fadeOut(0);
            $("#Error").fadeIn(300);
            console.log("Algooooooo no cuadraaaaaa");
            swal("Alto!", "La información ingresada es errónea, por favor verifica los datos ingresados", "error");          }
    }//cierre del for
    imprimir=1;
    $("#ResultadoFinal").append("...");
    $("#ResultadoFinal").append("<br><br> Donde el "+cantidadT+" término de la sucesión es: "+datoIgual);
}

function restaFracciones(enteroPrimerT,datoNumPT,datoDenPT,enteroTerminoD,datoNumTD,datoDenTD){
    //VARIABLES
    var caso=0;
    var an=0,ad=0;
    var an1=0;ad1=0;
    var denominadorTerminoPrimero=0;
    //
    var enteroPT=0;
    var enteroTD=0;
    var enteroDT=0;
    var enteroNuevo=0;
    var nuevoAn1=0;
    var nuevoAd1=0;
    var division=0;
    var divisionRespaldo;
    var enteroprincipal;
    var enteroTerminoDeseado;
    var paso=0;
    var ppaso=0;
    var paso1=0;
    var ppaso1=0;
    var paso2=0;
    var tipo=0;
    var entro1=0;
    var entro2=0;
    var estad=0;
    var respaldo=0;
    var enteroRespaldo=0;
    var enter1=0;
    var enter2=0;
    var esResta=0;
    //FIN DE DECLARACION DE VARIABLES
    if (datoNumTD!=0 && datoDenTD!=0 && datoNumPT!=0 && datoDenPT!=0){
        //reduccion de las fracciones antes de resolver la resta si es reducible...
        reduce(datoNumTD,datoDenTD);
        datoNumTD=nuevoAn;
        datoDenTD=nuevoAd;
        console.log("TD: ",enteroTerminoD,datoNumTD,datoDenTD);
        nuevoAn=0;
        nuevoAd=0;
        reduce(datoNumPT,datoDenPT);
        datoNumPT=nuevoAn;
        datoDenPT=nuevoAd;
        console.log("PT: ",enteroPrimerT,datoNumPT,datoDenPT);
        //si es necesario reasignar la fraccion....
        if (datoDenTD>datoDenPT) {
            division=datoDenTD / datoDenPT;
            if (division % 1 == 0) {
                datoNumPT=datoNumPT*division;
                if (datoNumPT<0) {
                    datoNumPT=Math.abs(datoNumPT);
                    esResta=1;
                    console.log("NoEsResta...1");
                }
                else
                {
                    esResta=0;
                    console.log("EsResta...1");
                }
                datoDenPT=datoDenPT*division;
            }
        }
        division=0;
        if (datoDenPT>datoDenTD) {
            division=datoDenPT / datoDenTD;
            if (division % 1 == 0) {
                datoNumTD=datoNumTD*division;
                datoDenTD=datoDenTD*division;
            }
        }
        console.log("Nuevo TD: ",enteroTerminoD,datoNumTD,datoDenTD);
        console.log("Nuevo PT: ",enteroPrimerT,datoNumPT,datoDenPT);
        nuevoAn=0;
        nuevoAd=0;
        //si son de denominadores iguales...
        if (datoDenPT==datoDenTD) {
            //si ambos valores enteros son negativos
            if ((enteroTerminoD<0 || datoNumTD<0) && (enteroPrimerT<0 || datoNumPT<0)) {
                if ((enteroTerminoD<0) && (enteroPrimerT<0)) {
                    console.log("1....1");
                    an=datoNumPT - datoNumTD;
                    paso=1;
                }
                if ((enteroTerminoD==0 && datoNumTD<0) && (enteroPrimerT==0 && datoNumPT<0)) {
                    console.log("1....2");
                    an=datoNumPT + datoNumTD;
                    paso=1;
                }
                if ((enteroTerminoD==0 && datoNumTD<0) && (enteroPrimerT<0)) {
                    console.log("1....3");
                    an=datoNumPT + datoNumTD;
                    paso=1;
                }
                if ((enteroTerminoD<0) && (enteroPrimerT==0 && datoNumPT<0)) {
                    console.log("1....4");
                    an=datoNumPT - datoNumTD;
                    paso=1;
                }
            }
            if ((enteroTerminoD>0 || datoNumTD>0) && (enteroPrimerT<0 || datoNumPT<0)) {
                //Entro al negativo solo del entero PT...
                if (enteroPrimerT<0 && enteroTerminoD>0) {
                    console.log("2....1");
                    if (datoNumTD<0) {
                        datoNumTD=datoNumTD*-1;
                        an=datoNumTD + datoNumPT;
                        datoNumTD=datoNumTD*-1;
                    }
                    else
                    {
                        an=datoNumTD + datoNumPT;
                    }
                    paso1=1;
                }
                if ((enteroTerminoD==0 && datoNumTD>0) && (enteroPrimerT==0 && datoNumPT<0)) {
                    console.log("2....2");
                    /*if (datoNumTD<0) {
                        datoNumTD=datoNumTD*-1;
                        an=datoNumTD + datoNumPT;
                        datoNumTD=datoNumTD*-1;
                    }
                    else
                    {
                        an=datoNumTD + datoNumPT;
                    }*/
                    an=datoNumTD - datoNumPT;
                    paso1=1;
                }
                if ((enteroTerminoD==0 && datoNumTD>0) && (enteroPrimerT<0)) {
                    console.log("2....3");
                    /*if (datoNumTD<0) {
                        datoNumTD=datoNumTD*-1;
                        an=datoNumTD + datoNumPT;
                        datoNumTD=datoNumTD*-1;
                    }
                    else
                    {
                        an=datoNumTD + datoNumPT;
                    }*/
                    an=datoNumTD - datoNumPT;
                    paso1=1;
                }
                if ((enteroTerminoD>0) && (enteroPrimerT==0 && datoNumPT<0)) {
                    console.log("2....4");
                    if (datoNumTD<0) {
                        datoNumTD=datoNumTD*-1;
                        an=datoNumTD + datoNumPT;
                        datoNumTD=datoNumTD*-1;
                    }
                    else
                    {
                        an=datoNumTD + datoNumPT;
                    }
                    paso1=1;
                }
            }
            if ((enteroPrimerT>0 || datoNumPT>0) && (enteroTerminoD<0 || datoNumTD<0)) {
                //Entro al negativo solo del entero PT...
                if (enteroPrimerT>0 && enteroTerminoD<0) {
                    console.log("3....1");
                    if (datoNumTD<0) {
                        datoNumTD=datoNumTD*-1;
                        an=datoNumTD + datoNumPT;
                        datoNumTD=datoNumTD*-1;
                    }
                    else
                    {
                        an=datoNumTD + datoNumPT;
                    }                    
                    an=an*-1;
                    paso1=1;
                }
                if ((enteroPrimerT==0 && datoNumPT>0) && (enteroTerminoD==0 && datoNumTD<0)) {
                    console.log("3....2");
                    if (datoNumTD<0) {
                        datoNumTD=datoNumTD*-1;
                        if (esResta==0) {
                            an=datoNumTD + datoNumPT;
                        }
                        else
                        {
                            an=datoNumTD - datoNumPT;
                        }
                        datoNumTD=datoNumTD*-1;
                    }
                    else
                    {
                        if (esResta==0) {
                            an=datoNumTD + datoNumPT;
                        }
                        else
                        {
                            an=datoNumTD - datoNumPT;
                        }
                        //an=datoNumTD + datoNumPT;
                    }
                    an=an*-1;
                    paso1=1;
                }
                if ((enteroPrimerT==0 && datoNumPT>0) && (enteroTerminoD<0)) {
                    console.log("3....3");
                    if (datoNumTD<0) {
                        datoNumTD=datoNumTD*-1;
                        if (esResta==0) {
                            an=datoNumTD + datoNumPT;
                        }
                        else
                        {
                            an=datoNumTD - datoNumPT;
                        }
                        datoNumTD=datoNumTD*-1;
                    }
                    else
                    {
                        if (esResta==0) {
                            an=datoNumTD + datoNumPT;
                        }
                        else
                        {
                            an=datoNumTD - datoNumPT;
                        }
                    }
                    an=an*-1;
                    paso1=1;
                }
                if ((enteroPrimerT>0) && (enteroTerminoD==0 && datoNumTD<0)) {
                    console.log("3....4");
                    if (datoNumTD<0) {
                        datoNumTD=datoNumTD*-1;
                        an=datoNumTD + datoNumPT;
                        datoNumTD=datoNumTD*-1;
                    }
                    else
                    {
                        an=datoNumTD + datoNumPT;
                    }
                    an=an*-1;
                    paso1=1;
                }                
            }
            //si ninguno es negativo
            if ((enteroPrimerT>0 || datoNumPT>0) && (enteroTerminoD>0 || datoNumTD>0)) {
                //Entro al negativo solo del entero PT...
                if (enteroPrimerT>0 && enteroTerminoD>0) {
                    console.log("4....1");
                    an=datoNumTD - datoNumPT;
                }
                if ((enteroPrimerT==0 && datoNumPT>0) && (enteroTerminoD==0 && datoNumTD>0)) {
                    console.log("4....2");
                    an=datoNumTD - datoNumPT;
                }
                if ((enteroPrimerT==0 && datoNumPT>0) && (enteroTerminoD>0)) {
                    console.log("4....3");
                    an=datoNumTD - datoNumPT;
                }
                if ((enteroPrimerT>0) && (enteroTerminoD==0 && datoNumTD>0)) {
                    console.log("4....4");
                    an=datoNumTD - datoNumPT;
                }
            }
            ad=datoDenTD;
        }
        else
        {//si son de denominadores distintos...
            if (enteroTerminoD!=0) {
                if (enteroTerminoD<0 && enteroPrimerT<0) {
                    if (datoDenTD>datoDenPT) {
                        respaldo=datoDenTD/datoDenPT;
                        if (respaldo % 1 == 0) {
                            datoDenPT=datoDenPT*respaldo;
                            datoNumPT=datoNumPT*respaldo;
                            //obteniendo los nuevos valores de an y ad
                            //si ambos valores enteros son negativos
                            if (enteroTerminoD<0 && enteroPrimerT<0) {
                                an=datoNumPT - datoNumTD;
                                ppaso=1;
                            }
                            if (enteroPrimerT<0 && paso==0) {
                                //Entro al negativo solo del entero PT...
                                an=datoNumTD + datoNumPT;
                                ppaso1=1;
                                
                            }
                            //si ninguno es negativo
                            if (ppaso1==0 && ppaso==0)
                            {
                                an=datoNumTD - datoNumPT;
                            }
                            ad=datoDenTD;
                        }//cierre del if
                        else
                        {
                            an=(datoNumPT * datoDenTD) - (datoNumTD * datoDenPT);
                            ad=(datoDenTD * datoDenPT);
                        }
                    }
                    else
                    {
                        respaldo=datoDenPT/datoDenTD;
                        if (respaldo % 1 == 0) {
                            datoDenTD=datoDenTD*respaldo;
                            datoNumTD=datoNumTD*respaldo;
                            //obteniendo los nuevos valores de an y ad
                            //si ambos valores enteros son negativos
                            if (eenteroTerminoD<0 && enteroPrimerT<0) {
                                an=datoNumPT - datoNumTD;
                                ppaso=1;
                            }
                            if (enteroPrimerT<0 && paso==0) {
                                //Entro al negativo solo del entero PT...
                                an=datoNumTD + datoNumPT;
                                ppaso1=1;
                                
                            }
                            //si ninguno es negativo
                            if (ppaso1==0 && ppaso==0)
                            {
                                an=datoNumTD - datoNumPT;
                            }
                            ad=datoDenTD;
                        }//cierre del if
                        else
                        {
                            an=(datoNumPT * datoDenTD) - (datoNumTD * datoDenPT);
                            ad=(datoDenTD * datoDenPT);
                        }
                    }
                    paso=1;
                }
            }
            if (enteroPrimerT<0 && paso==0) {
                console.log("Entro al negativo...");
                if (datoDenTD>datoDenPT) {
                    respaldo=datoDenTD/datoDenPT;
                    if (respaldo % 1 == 0) {
                        datoDenPT=datoDenPT*respaldo;
                        datoNumPT=datoNumPT*respaldo;
                        //obteniendo los nuevos valores de an y ad
                        //si ambos valores enteros son negativos
                        if (enteroTerminoD<0 && enteroPrimerT<0) {
                            an=datoNumPT - datoNumTD;
                            ppaso=1;
                        }
                        if (enteroPrimerT<0 && paso==0) {
                            //Entro al negativo solo del entero PT...
                            an=datoNumTD + datoNumPT;
                            ppaso1=1;
                            
                        }
                        //si ninguno es negativo
                        if (ppaso1==0 && ppaso==0)
                        {
                            an=datoNumTD - datoNumPT;
                        }
                        ad=datoDenTD;
                    }//cierre del if
                    else
                    {
                        an=(datoNumTD * datoDenPT) + (datoNumPT * datoDenTD);
                        ad=(datoDenTD * datoDenPT);
                    }
                }
                else
                {
                    respaldo=datoDenPT/datoDenTD;
                    if (respaldo % 1 == 0) {
                        datoDenTD=datoDenTD*respaldo;
                        datoNumTD=datoNumTD*respaldo;
                        //obteniendo los nuevos valores de an y ad
                        //si ambos valores enteros son negativos
                        if (enteroTerminoD<0 && enteroPrimerT<0) {
                            an=datoNumPT - datoNumTD;
                            ppaso=1;
                        }
                        if (enteroPrimerT && paso==0) {
                            //Entro al negativo solo del entero PT...
                            an=datoNumTD + datoNumPT;
                            ppaso1=1;
                            
                        }
                        //si ninguno es negativo
                        if (ppaso1==0 && ppaso==0)
                        {
                            an=datoNumTD - datoNumPT;
                        }
                        ad=datoDenTD;
                    }//cierre del if
                    else
                    {
                        an=(datoNumTD * datoDenPT) + (datoNumPT * datoDenTD);
                        ad=(datoDenTD * datoDenPT);
                    }
                }
                paso1=1;                
            }
            if (enteroTerminoD<0 && datoNumPT<0) {
                console.log("DatoNumPT: ",datoNumPT);
                datoNumPT=datoNumPT*-1;
                console.log("DatoNumPT: ",datoNumPT);
                if (datoDenTD>datoDenPT) {
                        respaldo=datoDenTD/datoDenPT;
                        if (respaldo % 1 == 0) {
                            datoDenPT=datoDenPT*respaldo;
                            datoNumPT=datoNumPT*respaldo;
                            console.log("DatoNumPT: ",datoNumPT);
                            //obteniendo los nuevos valores de an y ad
                            //si ambos valores enteros son negativos
                            if (enteroTerminoD<0 && datoNumPT<0) {
                                an=datoNumPT - datoNumTD;
                                ppaso=1;
                            }
                            if (datoNumPT<0 && ppaso==0) {
                                //Entro al negativo solo del entero PT...
                                an=datoNumTD + datoNumPT;
                                ppaso1=1;
                                
                            }
                            //si ninguno es negativo
                            if (ppaso1==0 && ppaso==0)
                            {
                                console.log("DatoNumPT: ",datoNumPT,datoNumTD);
                                an=datoNumPT - datoNumTD;
                            }
                            ad=datoDenTD;
                        }//cierre del if
                        else
                        {
                            an=(datoNumPT * datoDenTD) - (datoNumTD * datoDenPT);
                            ad=(datoDenTD * datoDenPT);
                        }
                    }
                    else
                    {
                        respaldo=datoDenPT/datoDenTD;
                        if (respaldo % 1 == 0) {
                            datoDenTD=datoDenTD*respaldo;
                            datoNumTD=datoNumTD*respaldo;
                            //obteniendo los nuevos valores de an y ad
                            //si ambos valores enteros son negativos
                            if (eenteroTerminoD<0 && enteroPrimerT<0) {
                                an=datoNumPT - datoNumTD;
                                ppaso=1;
                            }
                            if (enteroPrimerT<0 && paso==0) {
                                //Entro al negativo solo del entero PT...
                                an=datoNumTD + datoNumPT;
                                ppaso1=1;
                                
                            }
                            //si ninguno es negativo
                            if (ppaso1==0 && ppaso==0)
                            {
                                an=datoNumTD - datoNumPT;
                            }
                            ad=datoDenTD;
                        }//cierre del if
                        else
                        {
                            an=(datoNumPT * datoDenTD) - (datoNumTD * datoDenPT);
                            ad=(datoDenTD * datoDenPT);
                        }
                    }
                    paso2=1;
            }
            if (paso1==0 && paso==0 && paso2==0)
            {
                console.log("Entro al positivo...",datoNumTD,datoNumPT);
                if (enteroTerminoD<0) {
                    if (datoDenTD>datoDenPT) {
                        respaldo=datoDenTD/datoDenPT;
                        if (respaldo % 1 == 0) {
                            datoDenPT=datoDenPT*respaldo;
                            datoNumPT=datoNumPT*respaldo;
                            console.log(enteroTerminoD,enteroPrimerT,datoNumTD,datoNumPT);
                            //obteniendo los nuevos valores de an y ad
                            //si ambos valores enteros son negativos
                            if (enteroTerminoD<0 && enteroPrimerT<0) {
                                an=datoNumPT - datoNumTD;
                                ppaso=1;
                            }
                            if ((enteroPrimerT<0 || datoNumPT>0) && ppaso==0) {
                                //Entro al negativo solo del entero PT...
                                an=datoNumTD + datoNumPT;
                                an=an*-1;
                                ppaso1=1;
                            }
                            //si ninguno es negativo
                            if (ppaso1==0 && ppaso==0)
                            {
                                an=datoNumTD - datoNumPT;
                            }
                            ad=datoDenTD;
                        }//cierre del if
                        else
                        {
                            an=(datoNumTD * datoDenPT) + (datoNumPT * datoDenTD);
                            ad=(datoDenTD * datoDenPT);
                            if (enteroPrimerT>=0 || datoNumPT>=0) {
                                an=an*-1;
                            }
                        }
                    }
                    else
                    {
                        respaldo=datoDenPT/datoDenTD;
                        if (respaldo % 1 == 0) {
                            datoDenTD=datoDenTD*respaldo;
                            datoNumTD=datoNumTD*respaldo;
                            //obteniendo los nuevos valores de an y ad
                            //si ambos valores enteros son negativos
                            if (enteroTerminoD<0 && enteroPrimerT<0) {
                                an=datoNumPT - datoNumTD;
                                ppaso=1;
                            }
                            if (enteroPrimerT<0 && ppaso==0) {
                                //Entro al negativo solo del entero PT...
                                an=datoNumTD + datoNumPT;
                                ppaso1=1;
                            }
                            //si ninguno es negativo
                            if (ppaso1==0 && ppaso==0)
                            {
                                an=datoNumTD - datoNumPT;
                            }
                            ad=datoDenTD;
                        }//cierre del if
                        else
                        {
                            an=(datoNumTD * datoDenPT) + (datoNumPT * datoDenTD);
                            ad=(datoDenTD * datoDenPT);
                        }
                    }
                }
                else
                {
                    if (datoDenTD>datoDenPT) {
                        respaldo=datoDenTD/datoDenPT;
                        if (respaldo % 1 == 0) {
                            datoDenPT=datoDenPT*respaldo;
                            datoNumPT=datoNumPT*respaldo;
                            //obteniendo los nuevos valores de an y ad
                            //si ambos valores enteros son negativos
                            if (enteroTerminoD<0 && enteroPrimerT<0) {
                                an=datoNumPT - datoNumTD;
                                ppaso=1;
                            }
                            if (enteroPrimerT<0 && ppaso==0) {
                                //Entro al negativo solo del entero PT...
                                an=datoNumTD + datoNumPT;
                                ppaso1=1;
                            }
                            //si ninguno es negativo
                            if (ppaso1==0 && ppaso==0)
                            {
                                an=datoNumTD - datoNumPT;
                            }
                            ad=datoDenTD;
                        }//cierre del if
                        else
                        {
                            an=(datoNumTD * datoDenPT) - (datoNumPT * datoDenTD);
                            ad=(datoDenTD * datoDenPT);
                        }
                    }
                    else
                    {
                        respaldo=datoDenPT/datoDenTD;
                        if (respaldo % 1 == 0) {
                            datoDenTD=datoDenTD*respaldo;
                            datoNumTD=datoNumTD*respaldo;
                            //obteniendo los nuevos valores de an y ad
                            //si ambos valores enteros son negativos
                            if (enteroTerminoD<0 && enteroPrimerT<0) {
                                an=datoNumPT - datoNumTD;
                                paso=1;
                            }
                            if (enteroPrimerT<0 && paso==0) {
                                //Entro al negativo solo del entero PT...
                                an=datoNumTD + datoNumPT;
                                paso1=1;
                                
                            }
                            //si ninguno es negativo
                            if (paso1==0 && paso==0)
                            {
                                an=datoNumTD - datoNumPT;
                            }
                            ad=datoDenTD;
                        }//cierre del if
                        else
                        {
                            an=(datoNumTD * datoDenPT) - (datoNumPT * datoDenTD);
                            ad=(datoDenTD * datoDenPT);
                        }
                    }
                }//fin del if
            }
            //ad=(datoDenTD * datoDenPT);
        }//cierre del else, son denominadores distintos..                          
        console.log("original.... an: ",an," ad: ",ad);
        //Aca poner condicion para cuando un valor sera 0
        if (an==0) {
            enteroTD=enteroTerminoD;
            enteroPT=enteroPrimerT;
            enteroNuevo=enteroTD-enteroPT;
            console.log("Resultado: ",enteroNuevo);
            enteroRestaGlobal=enteroNuevo;
            numeradorRestaGlobal=0;
            denominadorRestaGlobal=0;
        }
        else
        {
            enteroTD=enteroTerminoD;
            enteroPT=enteroPrimerT;

            if (enteroTerminoD<0 && enteroPrimerT<0) {
                //si es necesario cambiar los valores de los enteros segun el valor negativo de los enteros de las fracciones
                enteroPT*-1;
                enteroNuevo=enteroTD-enteroPT;
                console.log("entero 1",enteroTD,enteroPT);
            }
            else
            {
                //no existe rotacion de las fracciones se maneja igual la reduccion de enteros
                enteroNuevo=enteroTD-enteroPT;
                console.log("entero 2",enteroPT,enteroTD);
            }
            //enteroNuevo=enteroTD-enteroPT;
            console.log(enteroNuevo);

            //meter if para verificar si el resultado de an es negativo...
           if (an<0) {
                if (enteroNuevo>0) {
                    an=(enteroNuevo * ad) + an;
                    console.log("Nueva fraccion: ",an,ad);
                    reduce(an,ad);
                    enteroNuevo=0;
                    estad=1;
                }
                else
                {
                    reduce(an,ad);
                }
           }
           else
           {
                reduce(an,ad);
           }
           console.log("Despues de reducirlo......an: ",nuevoAn," ad: ",nuevoAd);
            if (enteroNuevo!=0) {
                if (enteroPT!=0) {
                    //nuevoAn1=(enteroNuevo*nuevoAd)-nuevoAn;
                    //nuevoAd1=nuevoAd;
                    var dg=nuevoAn+'';
                    if(dg.indexOf('-')!=-1){
                    console.log("Es  negativo...",enteroPT,enteroTD);  //check to see if answer is negative.
                        if (enteroPT>=enteroTD) {
                            console.log("Entro al enteroNuevo...",enteroNuevo,nuevoAd,nuevoAn);
                            if (enteroNuevo<0 && nuevoAn<0) {
                                nuevoAn=(enteroNuevo * nuevoAd) + nuevoAn;
                                enteroNuevo=0;
                            }
                            else
                            {
                                if (enteroNuevo<0) {
                                    nuevoAn=(enteroNuevo * nuevoAd) + nuevoAn;
                                    enteroNuevo=0;
                                }
                                else
                                {
                                    nuevoAn=(enteroNuevo * nuevoAd) - nuevoAn;
                                    enteroNuevo=0;
                                }
                            }
                        }
                      }
                      else
                      {
                        console.log("No es negativo...",enteroPT,enteroTD)
                        if (enteroPT>=enteroTD) {
                            if (enteroNuevo<0 && nuevoAn<0) {
                                nuevoAn=(enteroNuevo * nuevoAd) - nuevoAn;
                                enteroNuevo=0;
                            }
                            else
                            {
                                if (enteroNuevo<0 && enteroPT<0) {
                                    nuevoAn=(enteroNuevo * nuevoAd) + nuevoAn;
                                    enteroNuevo=0;
                                }
                                else
                                {
                                    if (enteroPT<0) {
                                        nuevoAn=(enteroNuevo * nuevoAd) + nuevoAn;
                                        enteroNuevo=0;
                                    } 
                                    if (enteroNuevo<0 && enteroTD>0) {
                                        nuevoAn=(enteroNuevo * nuevoAd) + nuevoAn;
                                        enteroNuevo=0;
                                    }                                                         
                                }
                            }
                            
                        }                                    
                      }
                }//cierre del if si pt es distinto de 0
                //nuevoAd1=nuevoAd;
            }//cierre del if para saber si es negativo
            console.log("an: ",nuevoAn," ad:",nuevoAd," entero: ",enteroNuevo);

            if (enteroNuevo<0 && nuevoAn>0) {
                nuevoAn=(enteroNuevo*nuevoAd) + nuevoAn;
                enteroNuevo=0;
            }
            console.log("an: ",nuevoAn," ad:",nuevoAd," entero: ",enteroNuevo);

            if (nuevoAn<0 && nuevoAd>0) {
                entro1=1;
                if (Math.abs(nuevoAn)>=nuevoAd) {
                    division=nuevoAn/nuevoAd;
                    //division=Math.floor(division);
                    division=parseInt(division);
                    console.log("division: ",division);
                    if (division!=0) {
                        nuevoAn=Math.abs(nuevoAn);
                        divisionRespaldo=Math.abs(division);
                        console.log("abs de an: ",nuevoAn," abs de division: ",division);
                        nuevoAn=nuevoAn-(divisionRespaldo*nuevoAd);
                        console.log("1: ",estad);
                        if (estad==0) {
                            division=enteroNuevo+division;
                        }
                        if (nuevoAn==0) {
                            enteroRestaGlobal=division;
                            numeradorRestaGlobal=0;
                            denominadorRestaGlobal=0;
                        }
                        else
                        {
                            enteroRestaGlobal=division;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                        }
                        //console.log("Resultado Final: ",division," ",nuevoAn,"/",nuevoAd);    
                    }
                    else
                    {
                        if (enteroNuevo!=0) 
                        {
                            if (nuevoAn==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;
                            }
                            //console.log("Resultado Final: ",enteroNuevo," ",nuevoAn,"/",nuevoAd);    
                        }
                        else
                        {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                            //console.log("Resultado Final: ",nuevoAn,"/",nuevoAd);    
                        }
                    }
                    loEncontro=1;
                }//cierre del if nuevoAn>nuevoAd
                else
                {
                    if (paso==1) {
                        //nuevoAn=Math.abs(nuevoAn);
                        if (enteroNuevo==0) {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                            //console.log("ResultadoFinal: ",nuevoAn,"/",nuevoAd);    
                        }
                        else
                        {
                            if (nuevoAn==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;
                            }
                            //console.log("ResultadoFinal: ",enteroNuevo," ",nuevoAn,"/",nuevoAd);
                        }
                        
                    }
                    else
                    {
                        if (enteroNuevo==0) {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                            //console.log("ResultadoFinal: ",nuevoAn,"/",nuevoAd);    
                        }
                        else
                        {
                            if (nuevoAn==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;
                            }
                            //console.log("ResultadoFinal: ",enteroNuevo," ",nuevoAn,"/",nuevoAd);
                        }
                        
                    }//cierre del else
                    loEncontro=1;
                }//cierre del else 
            }
            if (nuevoAn>0 && nuevoAd<0) {
                entro2=1;
                if (nuevoAn>=Math.abs(nuevoAd)) {
                    division=nuevoAn/nuevoAd;
                    //division=Math.floor(division);
                    division=parseInt(division);
                    console.log("division: ",division);
                    if (division!=0) {
                        nuevoAn=Math.abs(nuevoAn);
                        divisionRespaldo=Math.abs(division);
                        console.log("abs de an: ",nuevoAn," abs de division: ",division);
                        nuevoAn=nuevoAn-(divisionRespaldo*nuevoAd);
                        console.log("2: ",estad);
                        if (estad==0) {
                            division=enteroNuevo+division;
                        }
                        if (nuevoAn==0) {
                            enteroRestaGlobal=division;
                            numeradorRestaGlobal=0;
                            denominadorRestaGlobal=0;
                        }
                        else
                        {
                            enteroRestaGlobal=division;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                        }
                        //console.log("Resultado Final: ",division," ",nuevoAn,"/",nuevoAd);    
                    }
                    else
                    {
                        if (enteroNuevo==0) 
                        {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                            //console.log("Resultado Final: ",nuevoAn,"/",nuevoAd);    
                        }
                        else
                        {
                            if (nuevoAn==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;
                            }
                            //console.log("Resultado Final: ",enteroNuevo," ",nuevoAn,"/",nuevoAd);    
                        }
                    }
                    loEncontro=1;
                }//cierre del if nuevoAn>nuevoAd
                else
                {
                    if (paso==1) {
                        //nuevoAn=Math.abs(nuevoAn);
                        if (enteroNuevo==0) {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                            //console.log("ResultadoFinal: ",nuevoAn,"/",nuevoAd);    
                        }
                        else
                        {
                            if (nuevoAn==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;
                            }
                            //console.log("ResultadoFinal: ",enteroNuevo," ",nuevoAn,"/",nuevoAd);
                        }
                        
                    }
                    else
                    {
                        if (enteroNuevo==0) {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                            //console.log("ResultadoFinal: ",nuevoAn,"/",nuevoAd);    
                        }
                        else
                        {
                            if (nuevoAn==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;
                            }
                            //console.log("ResultadoFinal: ",enteroNuevo," ",nuevoAn,"/",nuevoAd);
                        }
                        
                    }//cierre del else
                    loEncontro=1;
                }//cierre del else 
            }

            if (entro1==0 && entro2==0) {
                if (nuevoAn>=nuevoAd) {
                    division=nuevoAn/nuevoAd;
                    //division=Math.floor(division);
                    division=parseInt(division);
                    console.log("division: ",division);
                    if (division!=0) {
                        nuevoAn=Math.abs(nuevoAn);
                        divisionRespaldo=Math.abs(division);
                        console.log("abs de an: ",nuevoAn," abs de division: ",division);
                        nuevoAn=nuevoAn-(divisionRespaldo*nuevoAd);
                        console.log("3: ",estad);
                        if (estad==0 && enteroPT<0) {
                            division=enteroNuevo+division;
                        }
                        if (estad==0 && enteroPT>0) {
                            division=enteroNuevo-division;   
                        }
                        if (estad==0 && enteroPT==0) {
                            division=enteroNuevo+division;
                        }
                        if (nuevoAn==0) {
                            enteroRestaGlobal=division;
                            numeradorRestaGlobal=0;
                            denominadorRestaGlobal=0;
                        }
                        else
                        {
                            enteroRestaGlobal=division;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                        }
                        //console.log("Resultado Final: ",division," ",nuevoAn,"/",nuevoAd);    
                    }
                    else
                    {
                        if (enteroNuevo==0) {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                            //console.log("Resultado Final: ",nuevoAn,"/",nuevoAd);    
                        }
                        else{
                            if (nuevoAn==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;
                            }
                            //console.log("Resultado Final: ",enteroNuevo," ",nuevoAn,"/",nuevoAd);    
                        }
                    }
                    loEncontro=1;
                }//cierre del if nuevoAn>nuevoAd
                else
                {
                    if (paso==1) {
                        //nuevoAn=Math.abs(nuevoAn);
                        if (enteroNuevo==0) {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                            //console.log("ResultadoFinal: ",nuevoAn,"/",nuevoAd);    
                        }
                        else
                        {
                            if (enteroNuevo==1) {
                                enteroRestaGlobal=0;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;
                                //console.log("ResultadoFinal: ",nuevoAn,"/",nuevoAd);    
                                enteroNuevo=0;
                            }
                            else
                            {
                                if (nuevoAn==0) {
                                    enteroRestaGlobal=enteroNuevo;
                                    numeradorRestaGlobal=0;
                                    denominadorRestaGlobal=0;
                                }
                                else
                                {
                                    enteroRestaGlobal=enteroNuevo;
                                    numeradorRestaGlobal=nuevoAn;
                                    denominadorRestaGlobal=nuevoAd;
                                }
                                /*enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;*/
                                //console.log("ResultadoFinal: ",enteroNuevo," ",nuevoAn,"/",nuevoAd);
                            }                        
                        }                    
                    }
                    else
                    {
                        if (enteroNuevo==0) {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;
                            //console.log("ResultadoFinal: ",nuevoAn,"/",nuevoAd);    
                        }
                        else
                        {
                            if (nuevoAn==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=nuevoAn;
                                denominadorRestaGlobal=nuevoAd;
                            }
                            /*enteroRestaGlobal=enteroNuevo;
                            numeradorRestaGlobal=nuevoAn;
                            denominadorRestaGlobal=nuevoAd;*/
                            //console.log("ResultadoFinal: ",enteroNuevo," ",nuevoAn,"/",nuevoAd);
                        }
                    }//cierre del else
                    loEncontro=1;
                }//cierre del else 
            }
        }                                
    }//cierre del if principal
    else
    {
        //si la fraccion del primer termino esta vacia...
        if (datoNumPT==0 && datoDenPT==0 && datoNumTD!=0 && datoDenTD!=0) {
            //para saber si el entero no esta vacio y cual es su valor...
            if (enteroPrimerT!=0) {
                enteroprincipal=document.getElementById("enteroPT").value;
                //conocer si el entero es negativo...
                if (enteroPrimerT<0) {
                    enteroTD=enteroTerminoD;
                    enteroPT=enteroPrimerT;
                    console.log("entero original: ",enteroPT,enteroTD);                    
                    if (enteroTD<0) {
                        if (enteroTD>enteroPT) {
                            tipo=1;
                        }
                        else
                        {
                            tipo=0;
                        }
                    }
                    else
                    {
                       if (enteroTD<enteroPT) {
                            tipo=1;
                        }
                        else
                        {
                            tipo=0;
                        } 
                    }
                    //enteroPT=Math.abs(enteroPT);
                    //console.log("entero despues del abs: ",enteroPT);
                    //si el valor de la sucesion es fraccionaria...
                    enteroNuevo=enteroTD-enteroPT;
                    an=datoNumTD;
                    ad=datoDenTD;
                    //si no el entero es menor al PT
                    console.log("tipo: ",tipo);
                    if (tipo==0) {
                        console.log("todo bien");
                        if (enteroNuevo==0) {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=an;
                            denominadorRestaGlobal=ad;
                            //console.log("Resultado Final: - ",an,"/",ad);
                        }
                        else
                        {
                            if (an==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=an;
                                denominadorRestaGlobal=ad;
                            }
                            /*enteroRestaGlobal=enteroNuevo;
                            numeradorRestaGlobal=an;
                            denominadorRestaGlobal=ad;*/
                            //console.log("Resultado Final: ",enteroNuevo," ",an,"/",ad);    
                        }  
                        loEncontro=1;                                          
                    }
                    else
                    {
                        //reconfigurar la fraccion...
                        console.log("Reconfigurar Fraccion");
                        an1=enteroNuevo*ad;
                        an=an1-an;
                        console.log(an,ad,enteroNuevo);
                        if (an>=ad) {
                            enteroNuevo=an/ad;
                            if (enteroNuevo % 1 == 0) {
                                console.log("Es entero...")
                                an=0;
                                ad=0;
                                enteroRestaGlobal=esEntero;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                                //console.log("Resultado Final: ",esEntero);
                            }
                            else
                            {
                                console.log("No es entero...")
                                enteroNuevo=Math.floor(enteroNuevo);
                                an = an - (enteroNuevo*ad);
                                if (an==0) {
                                    enteroRestaGlobal=enteroNuevo;
                                    numeradorRestaGlobal=0;
                                    denominadorRestaGlobal=0;
                                }
                                else
                                {
                                    enteroRestaGlobal=enteroNuevo;
                                    numeradorRestaGlobal=an;
                                    denominadorRestaGlobal=ad;
                                }
                                /*enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=an;
                                denominadorRestaGlobal=ad;*/
                                /////DE AQUI EN ADELANTE HAY QUE SEGUIIIIIIIIR//
                                //console.log("Resultado Final: ",enteroNuevo," ",an,"/",ad);
                                //reducirFraccion(numeradorFinal,denominadorFinal);
                            }
                        }
                        else
                        {
                            enteroNuevo=0;
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=an;
                            denominadorRestaGlobal=ad;
                            //console.log("Resultado Final: ",an,"/",ad);
                        }//cierre del else
                    }//cierre del else mayor
                }//cierre del if si el valor es negativo
                else
                {
                    enteroTD=enteroTerminoD;
                    enteroPT=enteroPrimerT;
                    console.log("entero original: ",enteroPT,enteroTD);
                    
                    if (enteroTD<0) {
                        if (enteroTD>enteroPT) {
                            tipo=1;
                        }
                        else
                        {
                            tipo=0;
                        }
                    }
                    else
                    {
                       if (enteroTD<enteroPT) {
                            tipo=1;
                        }
                        else
                        {
                            tipo=0;
                        } 
                    }
                    //enteroPT=Math.abs(enteroPT);
                    //console.log("entero despues del abs: ",enteroPT);
                    //si el valor de la sucesion es fraccionaria...
                    enteroNuevo=enteroTD-enteroPT;
                    an=datoNumTD;
                    ad=datoDenTD;
                    //si no el entero es menor al PT
                    console.log("tipo: ",tipo);
                    if (tipo==0) {
                        console.log("todo bien");
                        if (enteroNuevo==0) {
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=an;
                            denominadorRestaGlobal=ad;
                            //console.log("Resultado Final: - ",an,"/",ad);
                        }
                        else
                        {
                            if (an==0) {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                            }
                            else
                            {
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=an;
                                denominadorRestaGlobal=ad;
                            }
                            //enteroRestaGlobal=enteroNuevo;
                            //numeradorRestaGlobal=an;
                            //denominadorRestaGlobal=ad;
                            //console.log("Resultado Final: ",enteroNuevo," ",an,"/",ad);    
                        }  
                        loEncontro=1;                                          
                    }
                    else
                    {
                        //reconfigurar la fraccion...
                        console.log("Reconfigurar Fraccion");
                        an1=enteroNuevo*ad;
                        an=an1+an;
                        console.log(an,ad,enteroNuevo);
                        if (an>=ad) {
                            enteroNuevo=an/ad;
                            if (enteroNuevo % 1 == 0) {
                                console.log("Es entero...")
                                an=0;
                                ad=0;
                                enteroRestaGlobal=esEntero;
                                numeradorRestaGlobal=0;
                                denominadorRestaGlobal=0;
                                //console.log("Resultado Final: ",esEntero);
                            }
                            else
                            {
                                console.log("No es entero...")
                                enteroNuevo=Math.floor(enteroNuevo);
                                an = an - (enteroNuevo*ad);
                                enteroRestaGlobal=enteroNuevo;
                                numeradorRestaGlobal=an;
                                denominadorRestaGlobal=ad;
                                //console.log("Resultado Final: ",enteroNuevo," ",an,"/",ad);
                                //reducirFraccion(numeradorFinal,denominadorFinal);
                            }
                            loEncontro=1;
                        }
                        else
                        {
                            enteroNuevo=0;
                            enteroRestaGlobal=0;
                            numeradorRestaGlobal=an;
                            denominadorRestaGlobal=ad;
                            //console.log("Resultado Final: ",an,"/",ad);
                            loEncontro=1;
                        }//cierre del else
                    }//cierre del else mayor 
                }//cierre del else si el valor es positivo
            }//si el primer termino no esta vacio
        }//fin del if para evaluar la fraccion de PT
        //si la fraccion del termino deseado esta vacia
        if (datoNumTD==0 && datoDenTD==0 && datoNumPT!=0 && datoDenPT!=0)
        {
            //pienso en cmbiar a lo que saldra aca.....modificandolo  
            if (enteroPrimerT!=0) {
                //si existe un valor entero para el primer termino
                enteroPT=enteroPrimerT;
                enteroTD=enteroTerminoD;
                //obtenemos el valor de la resta de los enteros
                enteroRespaldo=enteroTerminoD - enteroPrimerT;
            } 
            else
            {
                enteroRespaldo=enteroTerminoD;   
            }
            if ((enteroTerminoD<0) && (enteroPrimerT>=0 || datoNumPT>0)) {
                //si se realizara una resta de fracciones
                enteroRestaGlobal=enteroRespaldo;
                numeradorRestaGlobal=Math.abs(datoNumPT);
                denominadorRestaGlobal=Math.abs(datoDenPT);
                enter1=1;
            }
            if ((enteroTerminoD>0) && (enteroPrimerT<=0 || datoNumPT<0)) {
                //si se realizara una resta de fracciones
                enteroRestaGlobal=enteroRespaldo;
                numeradorRestaGlobal=Math.abs(datoNumPT);
                denominadorRestaGlobal=Math.abs(datoDenPT);
                enter2=1;
            }
            //si es necesario hacer una distribucion de la fraccion
            if (enter1==0 && enter2==0) {
                enter1=0;
                //si los 2 son negativos
                if (enteroTerminoD<0 && (enteroPrimerT<0 || datoNumPT<0)) {
                    an=Math.abs(datoNumPT);
                    an1=(enteroRespaldo*datoDenPT) + datoNumPT;
                    ad1=datoDenPT;
                    enter1=1;
                }
                //si los 2 son positivos
                if (enteroTerminoD>0 && (enteroPrimerT>0 || datoNumPT>0)) {
                    if (enter1==0) {
                        an=Math.abs(datoNumPT);
                        an1=(enteroRespaldo*datoDenPT) - datoNumPT;
                        ad1=datoDenPT;
                    }
                }                
                //inicio de la reconfiguracion de fracciones
                //si es necesario Reconfigurar la fraccion
                console.log("Reconfigurar Fraccion");
                enteroNuevo=0;
                console.log(an1,ad1,enteroNuevo);
                if (Math.abs(an1)>=ad1) {
                    enteroNuevo=an1/ad1;
                    if (enteroNuevo % 1 == 0) {
                        console.log("Es entero...")
                        an1=0;
                        ad1=0;
                        enteroRestaGlobal=esEntero;
                        numeradorRestaGlobal=0;
                        denominadorRestaGlobal=0;
                        //console.log("Resultado Final: ",esEntero);
                    }
                    else
                    {
                        console.log("No es entero...");                        
                        var pase=0;
                        if (enteroNuevo<0) {
                            pase=1;
                        }
                        enteroNuevo=Math.abs(enteroNuevo);
                        enteroNuevo=Math.floor(enteroNuevo);
                        an1=an1-(enteroNuevo*ad1);
                        if (paso==1) {
                            enteroNuevo=enteroNuevo*-1;
                        }
                        enteroRestaGlobal=enteroNuevo;
                        numeradorRestaGlobal=an1;
                        denominadorRestaGlobal=ad1
                        //reducirFraccion(numeradorFinal,denominadorFinal);
                    }
                    loEncontro=1;
                }
                else
                {
                    enteroNuevo=0;
                    enteroRestaGlobal=0;
                    numeradorRestaGlobal=an1;
                    denominadorRestaGlobal=ad1;
                    //console.log("Resultado Final: ",an,"/",ad);
                    loEncontro=1;
                }//cierre del else
            }//cierre del if si es necesario reconfigurar la fracciones

            /****/
        }//fin del if para evaluar la fraccion TD
        if (datoNumTD==0 && datoDenTD==0 && datoNumPT==0 && datoDenPT==0) {
            enteroRestaGlobal=enteroTerminoD - enteroPrimerT;
            numeradorRestaGlobal=0;
            denominadorRestaGlobal=0;
        }
    }//cierre del else si uno no es fracciones
}//fin de funcion que realiza la resta

function divisionFracciones(obtenidoEntero,obtenidoNume,obtenidoDeno,enteroDistanciaDivision,datoNumDT,datoDenDT){
    //DECLARACION DE VARIABLES
    var numGlobalNuevo=0;
    var numGlobalRespaldo=0;
    var denGlobalNuevo=0;
    var numDivisionNuevo=0;
    var numDivisionRespaldo=0;
    var respaldoCambio=0;
    var respaldoCambio2=0;
    var denDivisionNuevo=0;
    var estadoEnteroGlobal=0;
    var estadoEnteroDivision=0;
    var enteroRespaldoGlobal=0;
    //var enteroDistanciaDivision=0;
    var numResultado=0;
    var denResultado=0;
    var division=0;
    //FIN DE LA DECLARACION DE VARIABLES
    //verificar si el entero de distancia no esta vacio...
    console.log(obtenidoEntero,obtenidoNume,obtenidoDeno,enteroDistanciaDivision,datoNumDT,datoDenDT);
    //si el dividendo o el divisor es igual a 0
    if ((obtenidoEntero==0 && obtenidoNume==0 && obtenidoDeno==0) || (enteroDistanciaDivision==0 && datoNumDT==0 && datoDenDT==0)) {
        enteroDivisionGlobal=0;
        numeradorDivisionGlobal=0;
        denominadorDivisionGlobal=0;
    }
    else
    {
        //si no existe ninguna operacion igual a 0
        //si el resultado de la resta es una fraccion combinada
        if (obtenidoEntero!=0 && obtenidoNume!=0 && obtenidoDeno!=0) {
            console.log("Entro1R");
            if (obtenidoEntero<0) {
                estadoEnteroGlobal=1;
                enteroRespaldoGlobal=Math.abs(obtenidoEntero);
                numGlobalNuevo=(enteroRespaldoGlobal*obtenidoDeno) + obtenidoNume;    
            }
            else
            {
                estadoEnteroGlobal=0;
                numGlobalNuevo=(obtenidoEntero*obtenidoDeno) + obtenidoNume;       
            }
            denGlobalNuevo=obtenidoDeno;            
        }//fin del if para saber si es una fraccion combinada la obtenida en la resta
        //si la fracciones es negativa y no existe un valor entero
        if (obtenidoEntero==0 && obtenidoNume!=0 && obtenidoDeno!=0) {
            console.log("Entro2R");
            if (obtenidoNume<0) {
                estadoEnteroGlobal=1;
                numGlobalRespaldo=Math.abs(obtenidoNume);
                /*if (numGlobalRespaldo<obtenidoDeno) {
                    numGlobalNuevo=obtenidoDeno;
                    denGlobalNuevo=numGlobalRespaldo;
                }
                else
                {*/
                    numGlobalNuevo=numGlobalRespaldo;
                    denGlobalNuevo=obtenidoDeno;
                //}
            }
            else
            {
                estadoEnteroGlobal=0;
                /*if (obtenidoNume<obtenidoDeno) {
                    if (obtenidoNume==1) {
                        numGlobalNuevo=obtenidoDeno;
                        denGlobalNuevo=obtenidoNume;
                    }
                    else
                    {*/
                        numGlobalNuevo=obtenidoNume;
                        denGlobalNuevo=obtenidoDeno;
                   /* }
                }
                else
                {
                    if (obtenidoDeno!=1) {
                        numGlobalNuevo=obtenidoDeno;
                        denGlobalNuevo=obtenidoNume;
                    }
                    else
                    {
                        numGlobalNuevo=obtenidoNume;
                        denGlobalNuevo=obtenidoDeno;
                    }
                }*/
            }
            //denGlobalNuevo=obtenidoDeno;
        }//fin si no existe un numero entero
        //si no existe fraccion y existe un valor entero
        if (obtenidoEntero!=0 && obtenidoNume==0 && obtenidoDeno==0) {
            console.log("Entro3R");
            if (obtenidoEntero<0) {
                estadoEnteroGlobal=1;
                numGlobalNuevo=Math.abs(obtenidoEntero);
            }
            else
            {
                estadoEnteroGlobal=0;
                numGlobalNuevo=obtenidoEntero;
            }
            denGlobalNuevo=1;
        }//fin si no existe una fraccion
        //si el valor obtenido de la distancia no es 0 y existe un valor fraccionario
        if (enteroDistanciaDivision!=0 && datoNumDT!=0 && datoDenDT!=0) {
            console.log("Entro1D");
            if (enteroDistanciaDivision<0) {
                estadoEnteroDivision=1;
                enteroDistanciaDivision=Math.abs(enteroDistanciaDivision);
                denDivisionNuevo=(enteroDistanciaDivision*datoDenDT) + datoNumDT;    
            }
            else
            {
                estadoEnteroDivision=0;
                denDivisionNuevo=(enteroDistanciaDivision*datoDenDT) + datoNumDT;       
            }
            numDivisionNuevo=datoDenDT;
        }//fin del if para saber si es distinto de 0 el valor de distancia
        //si la fracciones es negativa y no existe un valor entero
        if (enteroDistanciaDivision==0 && datoNumDT!=0 && datoDenDT!=0) {
            console.log("Entro2D");
            if (datoNumDT==1) {
                datoNumDT=datoDenDT;
                datoDenDT=1;
            }
            if (datoNumDT<0) {
                estadoEnteroDivision=1;
                numDivisionRespaldo=Math.abs(datoNumDT);
                //if (numDivisionRespaldo<datoDenDT) {
                    numDivisionNuevo=datoDenDT;
                    denDivisionNuevo=numDivisionRespaldo;
                /*}
                else
                {
                    numDivisionNuevo=numDivisionRespaldo;
                    denDivisionNuevo=datoDenDT;
                }*/
            }
            else
            {
                estadoEnteroDivision=0;
                if (datoNumDT<datoDenDT) {
                    //if (datoNumDT==1) {
                        numDivisionNuevo=datoDenDT;
                        denDivisionNuevo=datoNumDT;
                    //}
                    //else
                    //{
                        // numDivisionNuevo=datoNumDT;
                        // denDivisionNuevo=datoDenDT;
                    //}
                }
                else
                {
                    if (datoDenDT!=1) {
                        numDivisionNuevo=datoDenDT;
                        denDivisionNuevo=datoNumDT;
                    }
                    else
                    {
                        numDivisionNuevo=datoNumDT;
                        denDivisionNuevo=datoDenDT;
                    }
                }
            }
            //denDivisionNuevo=datoDenDT;
        }//fin si no existe un valor entero en la fraccion
        //si no existe fraccion y existe un valor entero
        if (enteroDistanciaDivision!=0 && datoNumDT==0 && datoDenDT==0) {
            console.log("Entro3D");
            if (enteroDistanciaDivision<0) {
                estadoEnteroDivision=1;
                numDivisionNuevo=Math.abs(enteroDistanciaDivision);
            }
            else
            {
                estadoEnteroDivision=0;
                numDivisionNuevo=enteroDistanciaDivision;
            }
            denDivisionNuevo=1;
        }//fin si no existe un numero entero
        //************** PROCESO PARA MULTIPLICAR LAS FRACCIONES YA RECONFIGURADAS *******************//
        console.log(numGlobalNuevo,denGlobalNuevo,numDivisionNuevo,denDivisionNuevo);
        if (denGlobalNuevo==numDivisionNuevo) {
            if (denDivisionNuevo==1) {
                numDivisionNuevo=1;
                denDivisionNuevo=1;
                denGlobalNuevo=1;
                //numeradorDivisionGlobal=numDivisionNuevo;
                //denominadorDivisionGlobal=0;
                //enteroDivisionGlobal=0;
            }
            else
            {
                if (numDivisionNuevo<denDivisionNuevo) {
                    respaldoCambio=denDivisionNuevo;
                    denDivisionNuevo=numDivisionNuevo;
                    numDivisionNuevo=respaldoCambio;
                }
            }
            numResultado=numGlobalNuevo*numDivisionNuevo;
            denResultado=denGlobalNuevo*denDivisionNuevo;
            console.log("Antes de reducir: ",numResultado,denResultado);
            reduce(numResultado,denResultado);
            numResultado=nuevoAn;
            denResultado=nuevoAd;
            console.log("Despues de reducir: ",numResultado,denResultado);
            if (denResultado==1) {
                enteroDivisionGlobal=numResultado;
                numeradorDivisionGlobal=0;
                denominadorDivisionGlobal=0;
            }
            else
            {
                //para saber si es necesario reescribir la fraccion..
                if (numResultado>=denResultado) {
                    division=numResultado/denResultado;
                    //division=Math.floor(division);
                    division=parseInt(division);
                    console.log("division: ",division);
                    if (division!=0) {
                        if ((estadoEnteroGlobal==1 && estadoEnteroDivision==1) || (estadoEnteroGlobal==0 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=division;
                            numeradorDivisionGlobal=numResultado-(division*denResultado);
                            denominadorDivisionGlobal=denResultado;
                        }
                        if ((estadoEnteroGlobal==0 && estadoEnteroDivision==1) || (estadoEnteroGlobal==1 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=division*-1;
                            numeradorDivisionGlobal=numResultado-(division*denResultado);
                            denominadorDivisionGlobal=denResultado;
                        }
                    }
                    else
                    {
                        if ((estadoEnteroGlobal==1 && estadoEnteroDivision==1) || (estadoEnteroGlobal==0 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=0;
                            numeradorDivisionGlobal=numResultado;
                            denominadorDivisionGlobal=denResultado;
                        }
                        if ((estadoEnteroGlobal==0 && estadoEnteroDivision==1) || (estadoEnteroGlobal==1 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=0;
                            numeradorDivisionGlobal=numResultado*-1;
                            denominadorDivisionGlobal=denResultado;
                        }
                    }
                }//numResultado>=denResultado
                else{
                    if ((estadoEnteroGlobal==1 && estadoEnteroDivision==1) || (estadoEnteroGlobal==0 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=0;
                            numeradorDivisionGlobal=numResultado;
                            denominadorDivisionGlobal=denResultado;
                        }
                        if ((estadoEnteroGlobal==0 && estadoEnteroDivision==1) || (estadoEnteroGlobal==1 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=0;
                            numeradorDivisionGlobal=numResultado*-1;
                            denominadorDivisionGlobal=denResultado;
                        }
                }//cierre del else
            }
        }
        if (denGlobalNuevo!=numDivisionNuevo) {
            if (numDivisionNuevo>denDivisionNuevo) {
                if (denGlobalNuevo!=1) {
                    respaldoCambio=denDivisionNuevo;
                    denDivisionNuevo=numDivisionNuevo;
                    numDivisionNuevo=respaldoCambio;
                }
            }
            respaldoCambio=numGlobalNuevo/denDivisionNuevo;
            respaldoCambio2=denGlobalNuevo/numDivisionNuevo;
            if (respaldoCambio % 1 == 0) {
                numGlobalNuevo=respaldoCambio;
                denDivisionNuevo=1;
            }
            if (respaldoCambio2 %1 == 0) {
                denGlobalNuevo=respaldoCambio2;
                numDivisionNuevo=1;
            }
            numResultado=numGlobalNuevo*numDivisionNuevo;
            denResultado=denGlobalNuevo*denDivisionNuevo;
            console.log("Antes de reducir: ",numResultado,denResultado);
            reduce(numResultado,denResultado);
            numResultado=nuevoAn;
            denResultado=nuevoAd;
            console.log("Despues de reducir: ",numResultado,denResultado);
            if (denResultado==1) {
                enteroDivisionGlobal=numResultado;
                numeradorDivisionGlobal=0;
                denominadorDivisionGlobal=0;
            }
            else
            {
                //para saber si es necesario reescribir la fraccion..
                if (numResultado>=denResultado) {
                    division=numResultado/denResultado;
                    //division=Math.floor(division);
                    division=parseInt(division);
                    console.log("division: ",division);
                    if (division!=0) {
                        if ((estadoEnteroGlobal==1 && estadoEnteroDivision==1) || (estadoEnteroGlobal==0 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=division;
                            numeradorDivisionGlobal=numResultado-(division*denResultado);
                            denominadorDivisionGlobal=denResultado;
                        }
                        if ((estadoEnteroGlobal==0 && estadoEnteroDivision==1) || (estadoEnteroGlobal==1 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=division*-1;
                            numeradorDivisionGlobal=numResultado-(division*denResultado);
                            denominadorDivisionGlobal=denResultado;
                        }
                    }
                    else
                    {
                        if ((estadoEnteroGlobal==1 && estadoEnteroDivision==1) || (estadoEnteroGlobal==0 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=0;
                            numeradorDivisionGlobal=numResultado;
                            denominadorDivisionGlobal=denResultado;
                        }
                        if ((estadoEnteroGlobal==0 && estadoEnteroDivision==1) || (estadoEnteroGlobal==1 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=0;
                            numeradorDivisionGlobal=numResultado*-1;
                            denominadorDivisionGlobal=denResultado;
                        }
                    }
                }//numResultado>=denResultado
                else{
                    if ((estadoEnteroGlobal==1 && estadoEnteroDivision==1) || (estadoEnteroGlobal==0 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=0;
                            numeradorDivisionGlobal=numResultado;
                            denominadorDivisionGlobal=denResultado;
                        }
                        if ((estadoEnteroGlobal==0 && estadoEnteroDivision==1) || (estadoEnteroGlobal==1 && estadoEnteroDivision==0)) {
                            enteroDivisionGlobal=0;
                            numeradorDivisionGlobal=numResultado*-1;
                            denominadorDivisionGlobal=denResultado;
                        }
                }//cierre del else
            }
        }
        //***********  FIN PROCESO PARA MULTIPLICAR LAS FRACCIONES YA RECONFIGURADAS *****************//   
    }//cierre del else si se puede efectuar la division
    loEncontro=1;
}//fin de la funcion para divir fracciones

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

function hcf(arr) {
    var gcd=0;
    var flag=false;
    var min1=find_min(arr);
    for(var i=min1;i>0;i--){
        var don=0;
        for(var j=0;j<arr.length;j++){
            if(arr[j]%i!=0)
                don=1;
        }
        if(don==0){
            gcd=i;
            break;
        }
    }
    return gcd;
}

function find_min(array_input) {
var min2 = parseInt(array_input[0]);
var len = array_input.length;
for (var i = 1; i < len; i++){
    array_input[i]=parseInt(array_input[i]);
     if (array_input[i] < min2) {
        min2 = array_input[i];
    }
}
return min2;
}

function reducirFraccion(numerador,denominador){
    var arr= new Array();
    arr[0]=numerador;arr[1]=denominador;
    var hcff=hcf(arr);
    var numerador=numerador/hcff;
    var denominador=denominador/hcff;
}
function CambioInformacion(opc)
{
    switch(opc)
    {
        case 1:{
            $('#animation_creci').fadeOut(0);
            $('#animation_decre').fadeOut(0);
            $('#animation_acotadas').fadeOut(0);
            $('#animation_conver').fadeOut(0);
            $('#animation_diver').fadeOut(0);
            $('#animation_info').fadeIn(100);
            $('#animation_info').removeAttr('class').attr('class', '');
            $('#animation_info').addClass('animated');
            $('#animation_info').addClass('fadeInRightBig');
            $('#btnRegla').removeAttr('class').attr('class','');
            $('#btnRegla').addClass('btn btn-info animation_select');
            $('#btnCreciente').removeAttr('class').attr('class','');
            $('#btnCreciente').addClass('btn btn-white animation_select');
            $('#btnDecreciente').removeAttr('class').attr('class','');
            $('#btnDecreciente').addClass('btn btn-white animation_select');
            $('#btnAcotadas').removeAttr('class').attr('class','');
            $('#btnAcotadas').addClass('btn btn-white animation_select');
            $('#btnConvergentes').removeAttr('class').attr('class','');
            $('#btnConvergentes').addClass('btn btn-white animation_select');
            $('#btnDivergentes').removeAttr('class').attr('class','');
            $('#btnDivergentes').addClass('btn btn-white animation_select');
        }break;
        case 2:{
            $('#animation_info').fadeOut(0);
            $('#animation_decre').fadeOut(0);
            $('#animation_acotadas').fadeOut(0);
            $('#animation_conver').fadeOut(0);
            $('#animation_diver').fadeOut(0);
            $('#animation_creci').fadeIn(100);
            $('#animation_creci').removeAttr('class').attr('class', '');
            $('#animation_creci').addClass('animated');
            $('#animation_creci').addClass('fadeInUp');
            $('#btnCreciente').removeAttr('class').attr('class','');
            $('#btnCreciente').addClass('btn btn-info animation_select');
            $('#btnRegla').removeAttr('class').attr('class','');
            $('#btnRegla').addClass('btn btn-white animation_select');
            $('#btnDecreciente').removeAttr('class').attr('class','');
            $('#btnDecreciente').addClass('btn btn-white animation_select');
            $('#btnAcotadas').removeAttr('class').attr('class','');
            $('#btnAcotadas').addClass('btn btn-white animation_select');
            $('#btnConvergentes').removeAttr('class').attr('class','');
            $('#btnConvergentes').addClass('btn btn-white animation_select');
            $('#btnDivergentes').removeAttr('class').attr('class','');
            $('#btnDivergentes').addClass('btn btn-white animation_select');
        }break;
        case 3:{
            $('#animation_info').fadeOut(0);
            $('#animation_creci').fadeOut(0);
            $('#animation_acotadas').fadeOut(0);
            $('#animation_conver').fadeOut(0);
            $('#animation_diver').fadeOut(0);
            $('#animation_decre').fadeIn(100);
            $('#animation_decre').removeAttr('class').attr('class', '');
            $('#animation_decre').addClass('animated');
            $('#animation_decre').addClass('rotateInDownLeft');
            $('#btnDecreciente').removeAttr('class').attr('class','');
            $('#btnDecreciente').addClass('btn btn-info animation_select');
            $('#btnRegla').removeAttr('class').attr('class','');
            $('#btnRegla').addClass('btn btn-white animation_select');
            $('#btnCreciente').removeAttr('class').attr('class','');
            $('#btnCreciente').addClass('btn btn-white animation_select');
            $('#btnAcotadas').removeAttr('class').attr('class','');
            $('#btnAcotadas').addClass('btn btn-white animation_select');
            $('#btnConvergentes').removeAttr('class').attr('class','');
            $('#btnConvergentes').addClass('btn btn-white animation_select');
            $('#btnDivergentes').removeAttr('class').attr('class','');
            $('#btnDivergentes').addClass('btn btn-white animation_select');
        }break;
        case 4:{
            $('#animation_info').fadeOut(0);
            $('#animation_creci').fadeOut(0);
            $('#animation_decre').fadeOut(0);
            $('#animation_conver').fadeOut(0);
            $('#animation_diver').fadeOut(0);
            $('#animation_acotadas').fadeIn(100);
            $('#animation_acotadas').removeAttr('class').attr('class', '');
            $('#animation_acotadas').addClass('animated');
            $('#animation_acotadas').addClass('tada');
            $('#btnAcotadas').removeAttr('class').attr('class','');
            $('#btnAcotadas').addClass('btn btn-info animation_select');
            $('#btnRegla').removeAttr('class').attr('class','');
            $('#btnRegla').addClass('btn btn-white animation_select');
            $('#btnCreciente').removeAttr('class').attr('class','');
            $('#btnCreciente').addClass('btn btn-white animation_select');
            $('#btnDecreciente').removeAttr('class').attr('class','');
            $('#btnDecreciente').addClass('btn btn-white animation_select');
            $('#btnConvergentes').removeAttr('class').attr('class','');
            $('#btnConvergentes').addClass('btn btn-white animation_select');
            $('#btnDivergentes').removeAttr('class').attr('class','');
            $('#btnDivergentes').addClass('btn btn-white animation_select');
        }break;
        case 5:{
            $('#animation_info').fadeOut(0);
            $('#animation_creci').fadeOut(0);
            $('#animation_decre').fadeOut(0);
            $('#animation_acotadas').fadeOut(0);
            $('#animation_diver').fadeOut(0);
            $('#animation_conver').fadeIn(100);
            $('#animation_conver').removeAttr('class').attr('class', '');
            $('#animation_conver').addClass('animated');
            $('#animation_conver').addClass('lightSpeedIn');
            $('#btnConvergentes').removeAttr('class').attr('class','');
            $('#btnConvergentes').addClass('btn btn-info animation_select');
            $('#btnRegla').removeAttr('class').attr('class','');
            $('#btnRegla').addClass('btn btn-white animation_select');
            $('#btnCreciente').removeAttr('class').attr('class','');
            $('#btnCreciente').addClass('btn btn-white animation_select');
            $('#btnDecreciente').removeAttr('class').attr('class','');
            $('#btnDecreciente').addClass('btn btn-white animation_select');
            $('#btnAcotadas').removeAttr('class').attr('class','');
            $('#btnAcotadas').addClass('btn btn-white animation_select');
            $('#btnDivergentes').removeAttr('class').attr('class','');
            $('#btnDivergentes').addClass('btn btn-white animation_select');
        }break;
        case 6:{
            $('#animation_info').fadeOut(0);
            $('#animation_creci').fadeOut(0);
            $('#animation_decre').fadeOut(0);
            $('#animation_acotadas').fadeOut(0);
            $('#animation_conver').fadeOut(0);
            $('#animation_diver').fadeIn(100);
            $('#animation_diver').removeAttr('class').attr('class', '');
            $('#animation_diver').addClass('animated');
            $('#animation_diver').addClass('bounceInDown');
            $('#btnDivergentes').removeAttr('class').attr('class','');
            $('#btnDivergentes').addClass('btn btn-info animation_select');
            $('#btnRegla').removeAttr('class').attr('class','');
            $('#btnRegla').addClass('btn btn-white animation_select');
            $('#btnCreciente').removeAttr('class').attr('class','');
            $('#btnCreciente').addClass('btn btn-white animation_select');
            $('#btnDecreciente').removeAttr('class').attr('class','');
            $('#btnDecreciente').addClass('btn btn-white animation_select');
            $('#btnAcotadas').removeAttr('class').attr('class','');
            $('#btnAcotadas').addClass('btn btn-white animation_select');
            $('#btnConvergentes').removeAttr('class').attr('class','');
            $('#btnConvergentes').addClass('btn btn-white animation_select');
        }break;
    }
}
$(document).ready(function(){
        $('.file-box').each(function() {
            animationHover(this, 'swing');
        });

        toastr.options = {          
          "preventDuplicates": true
        }
    });
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
    if (e.target.id == "contenedorPiezas" || e.target.className == "contenedores")
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

function comprobarFormula(opc){
    //console.log(seleccionRadio);
    switch(seleccionRadio)
    {
        case "terminoD":{
            //console.log(seleccionRadio);
            if((document.getElementById('piezaA1').parentNode.id=='a1') &&
            ((document.getElementById('piezaMas').parentNode.id=='mas') ||
            (document.getElementById('piezaMas2').parentNode.id=='mas')) &&
            (document.getElementById('piezaParen1').parentNode.id=='paren1') &&
            (document.getElementById('piezaN').parentNode.id=='n') &&
            ((document.getElementById('piezaMenos').parentNode.id=='menos') ||
            (document.getElementById('piezaMenos2').parentNode.id=='menos')) &&
            (document.getElementById('pieza1').parentNode.id=='uno') &&
            (document.getElementById('piezaParen2').parentNode.id=='paren2') &&
            (document.getElementById('piezaD').parentNode.id=='d'))
            {
                if (opc=="1") {
                    //toastr.success("Has colocado la fórmula correctamente","Excelente");
                    swal("Excelente!", "Has despejado la fórmula correctamente", "success");
                    estadoFormulaAn="1";
                }
                else
                {
                    estadoFormulaAn="1";
                }
            }
            else
            {
                if (opc=="1") {
                    //toastr.error("Algo en la fórmula está mal, verifica tu procedimiento de despeje.","Alto"); 
                    swal("Alto!", "Algo en la fórmula está mal, verifica tu procedimiento de despeje.", "error");  
                }
                else
                {
                    estadoFormulaAn="0";
                }
            }
        }break;
        case "numeroT":{
           //console.log(seleccionRadio);
           if((document.getElementById('piezaAn').parentNode.id=='ann') &&
            (document.getElementById('piezaA1').parentNode.id=='a1n') &&
            (document.getElementById('piezaMenos').parentNode.id=='menosn') &&
            (document.getElementById('piezaMas').parentNode.id=='masn') &&
            (document.getElementById('pieza1').parentNode.id=='1n') &&
            (document.getElementById('piezaD').parentNode.id=='dn'))
            {
                if (opc=="1") {
                    //toastr.success("Has colocado la fórmula correctamente","Excelente");
                    swal("Excelente!", "Has despejado la fórmula correctamente", "success");
                    estadoFormulaN="1";
                }
                else
                {
                    estadoFormulaN="1";
                }
            }
            else
            {
                if (opc=="1") {
                    //toastr.error("Algo en la fórmula está mal, verifica tu procedimiento de despeje.","Alto");   
                    swal("Alto!", "Algo en la fórmula está mal, verifica tu procedimiento de despeje.", "error");
                }
                else
                {
                    estadoFormulaN="0";
                }
            }
        }break;
        case "distanciaT":{
           //console.log(seleccionRadio);
           if((document.getElementById('piezaAn').parentNode.id=='and') &&
            (document.getElementById('piezaA1').parentNode.id=='a1d') &&
            ((document.getElementById('piezaMenos').parentNode.id=='menosd') ||
            (document.getElementById('piezaMenos2').parentNode.id=='menosd')) &&
            ((document.getElementById('piezaMenos').parentNode.id=='menos2d') ||
            (document.getElementById('piezaMenos2').parentNode.id=='menos2d')) &&
            (document.getElementById('piezaN').parentNode.id=='nd') &&
            (document.getElementById('pieza1').parentNode.id=='unod'))
            {
                if (opc=="1") {
                    //toastr.success("Has colocado la fórmula correctamente","Excelente");
                    swal("Excelente!", "Has despejado la fórmula correctamente", "success");
                    estadoFormulaD="1";
                }
                else
                {
                    estadoFormulaD="1";
                }
            }
            else
            {
                if (opc=="1") {
                    //toastr.error("Algo en la fórmula está mal, verifica tu procedimiento de despeje.","Alto");   
                    swal("Alto!", "Algo en la fórmula está mal, verifica tu procedimiento de despeje.", "error");
                }
                else{
                    estadoFormulaD="0";
                }
            }
        }break;
        default:{
            toastr.error("Primero debes seleccionar el tipo de variable que deseas despejar","Alto");   
        }
    }

}
var siPanel="0";//a1
var siPanel2="0";//an
var siPanel3="0";//distancia
var siPanel4="0";//nterminos
//PARA FRACCIONES
var siPanelF="0";//a1
var siPanelF2="0";//an
var siPanelF3="0";//distancia
var siPanelF4="0";//nterminos
function cambioMostarFormula(e){
    seleccionRadio=e.id;
    //console.log(seleccionRadio);
    $("#alertCargando").fadeOut();
    $("#creacionFormula").fadeIn(300);
    $('#creacionFormula').removeAttr('class').attr('class', '');
    $('#creacionFormula').addClass('panel panel-default animated');
    $('#creacionFormula').addClass('tada');
    $('#a1').removeAttr('style').attr('style', '');
    $('#an').removeAttr('style').attr('style', '');
    $('#distancia').removeAttr('style').attr('style', '');
    $('#nterminos').removeAttr('style').attr('style', '');
    $('#tablePrimerTermino').removeAttr('style').attr('style', '');
    $('#tableDistanciaTermino').removeAttr('style').attr('style','');
    $('#tableTerminoDeseado').removeAttr('style').attr('style','');
    $('#nterminosF').removeAttr('style').attr('style','');
    llenarDeNuevo();
    switch(e.id)
    {
        case "terminoD":{
            imprimir=0;
            document.getElementById("an").value="";
            document.getElementById("an").disabled=true;
            document.getElementById("enteroTD").value="";
            document.getElementById("numeradorTD").value="";
            document.getElementById("denominadorTD").value="";
            document.getElementById("distancia").disabled=false;
            document.getElementById("enteroDT").disabled=false;
            document.getElementById("numeradorDT").disabled=false;
            document.getElementById("denominadorDT").disabled=false;
            document.getElementById("nterminosF").disabled=false;
            document.getElementById("enteroTD").disabled=true;
            document.getElementById("numeradorTD").disabled=true;
            document.getElementById("denominadorTD").disabled=true;
            document.getElementById("nterminos").disabled=false;
            document.getElementById("distancia").disabled=false;
            $("#labelNumeroT").html("Término a Buscar:");
            $("#labelNumeroTF").html("Término a Buscar:");
            $("#TerminoBuscar2").html("Término a Buscar:");
            $("#labelTerminoD").html("Término Deseado (a<sub>n</sub>):");
            $("#labelTerminoDF").html("Término Deseado (a<sub>n</sub>):");
            $("#labelTerminoD2").html("Término Deseado (a<sub>n</sub>):");
            $('#tablePrimerTermino').attr('style','border: 1px red solid');
            //$('#tableTerminoDeseado').attr('style','border: 1px red solid');
            $('#tableDistanciaTermino').attr('style','border: 1px red solid');
            var if1="0";
            var if2="0";
            var if3="0";
            //Para fracciones
            var tablaPT="";
            var tableDT="";
            var if1F="0";
            var if2F="0";
            var if3F="0";
            //Hasta aca variables para fracciones
            //if para evaluar si los campos a vverificar son los de enteros o fraccionarios
            if (seleccionTipoNumero=="1") {
                //
                if(document.getElementById("a1").value=="")
                {
                   $('#a1').attr('style','border-color: #ed5565');
                   if1="1";
                   siPanel="1";
                }
                else
                {
                    $('#a1').attr('style','border-color: #1ab394');
                    if1="0";
                    siPanel="0";
                }
                if(document.getElementById("distancia").value=="")
                {
                   $('#distancia').attr('style','border-color: #ed5565');
                   if2="1";
                   siPanel3="1";
                }
                else
                {
                    $('#distancia').attr('style','border-color: #1ab394');
                    if2="0";
                    siPanel3="0";
                }
                if(document.getElementById("nterminos").value=="")
                {
                   $('#nterminos').attr('style','border-color: #ed5565');
                   if3="1";
                   siPanel4="1";
                }
                else
                {
                    $('#nterminos').attr('style','border-color: #1ab394');
                    if3="0";
                    siPanel4="0";
                }
                if(if1=="1" || if2=="1" || if3=="1"){
                    toastr.error("Completa los campos resaltados en rojo", "Alto");
                }
            }
            else
            {
                //Para verificar an...
                if (document.getElementById("enteroPT").value!="") {
                    if(document.getElementById("numeradorPT").value=="" && document.getElementById("denominadorPT").value=="")
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px green solid');
                        siPanelF="1";
                        if1F="1";

                    }
                    else
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px red solid');
                        siPanelF="0";
                        if1F="0";
                    }
                }
                if (document.getElementById("numeradorPT").value!="" && document.getElementById("denominadorPT").value!="") {
                    $('#tablePrimerTermino').attr('style','border: 1px green solid');
                    siPanelF="1";
                    if1F="1";

                }
                else
                {
                    if (siPanelF=="1") {
                        $('#tablePrimerTermino').attr('style','border: 1px green solid');
                        siPanelF="1";
                        if1F="1";
                    }
                    else
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px red solid');
                        siPanelF="0";
                        if1F="0";
                    }
                }
                //fin de verificar an..
                //Para verificar distancia...
                if (document.getElementById("enteroDT").value!="") {
                    if(document.getElementById("numeradorDT").value=="" && document.getElementById("denominadorDT").value=="")
                    {
                        $('#tableDistanciaTermino').attr('style','border: 1px green solid');
                        siPanelF3="1";
                        if2F="1";

                    }
                    else
                    {
                        $('#tableDistanciaTermino').attr('style','border: 1px red solid');
                        siPanelF3="0";
                        if2F="0";
                    }
                }
                if (document.getElementById("numeradorDT").value!="" && document.getElementById("denominadorDT").value!="") {
                    $('#tableDistanciaTermino').attr('style','border: 1px green solid');
                    siPanelF3="1";
                    if2F="1";

                }
                else
                {
                    if (siPanelF3=="1") {
                        $('#tableDistanciaTermino').attr('style','border: 1px green solid');
                        siPanelF3="1";
                        if2F="1";
                    }
                    else
                    {
                        $('#tableDistanciaTermino').attr('style','border: 1px red solid');
                        siPanelF3="0";
                        if2F="0";
                    }
                }
                //fin de verificar distancia..
                //para verificar el termino a buscar...
                if(document.getElementById("nterminosF").value=="")
                {
                   $('#nterminosF').attr('style','border-color: #ed5565');
                   if3F="0";
                   siPanelF4="0";
                }
                else
                {
                    $('#nterminosF').attr('style','border-color: #1ab394');
                    if3F="1";
                    siPanelF4="1";
                }
                if(if1F=="0" || if2F=="0" || if3F=="0"){
                    toastr.error("Completa los campos resaltados en rojo", "Alto");
                }
                //fin de terminos a buscar

            }
                $('#TerminoN').fadeOut(0);
                $('#piezaMas2').fadeOut(0);
                $('#piezaMenos2').fadeOut(0)
                $('#piezaAn').fadeOut(0)
                $('#TerminoDistancia').fadeOut(0);
                $('#TerminoDeseado').fadeIn(300);
                $('#piezaParen1').fadeIn(300);
                $('#piezaParen2').fadeIn(300);
                $('#piezaMas').fadeIn(300);
                $('#piezaMenos').fadeIn(300);
                $('#piezaN').fadeIn(300);
                $('#piezaD').fadeIn(300);
        }break;
        case "numeroT":{
            imprimir=0;
            document.getElementById("nterminos").value="";
            document.getElementById("nterminosF").value="";
            document.getElementById("nterminos").disabled=true;
            document.getElementById("distancia").disabled=false;
            document.getElementById("enteroDT").disabled=false;
            document.getElementById("numeradorDT").disabled=false;
            document.getElementById("denominadorDT").disabled=false;
            document.getElementById("nterminosF").disabled=true;
            document.getElementById("enteroTD").disabled=false;
            document.getElementById("numeradorTD").disabled=false;
            document.getElementById("denominadorTD").disabled=false;
            document.getElementById("an").disabled=false;
            document.getElementById("distancia").disabled=false;
            $("#labelNumeroT").html("Número de Término (a<sub>n</sub>):");
            $("#labelNumeroTF").html("Número de Término (a<sub>n</sub>):");
            $("#TerminoBuscar2").html("Número de Término (a<sub>n</sub>):");
            $("#labelTerminoD").html("Valor Término Deseado (a<sub>n</sub>):");
            $("#labelTerminoDF").html("Valor Término Deseado (a<sub>n</sub>):");
            $("#labelTerminoD2").html("Valor Término Deseado (a<sub>n</sub>):");
            var if1="0";
            var if2="0";
            var if3="0";
            if (seleccionTipoNumero=="1") {
                if(document.getElementById("a1").value=="")
                {
                   $('#a1').attr('style','border-color: #ed5565');
                   if1="1";
                   siPanel="1";
                }
                else
                {
                    $('#a1').attr('style','border-color: #1ab394');
                    if1="0";
                    siPanel="0";
                }
                if(document.getElementById("distancia").value=="")
                {
                   $('#distancia').attr('style','border-color: #ed5565');
                   if2="1";
                   siPanel2="1";
                }
                else
                {
                    $('#distancia').attr('style','border-color: #1ab394');
                    if2="0";
                    siPanel2="0";
                }
                if(document.getElementById("an").value=="")
                {
                   $('#an').attr('style','border-color: #ed5565');
                   if3="1";
                   siPanel3="1";
                }
                else
                {
                    $('#an').attr('style','border-color: #1ab394');
                    if3="0";
                    siPanel3="0";
                }
               if(if1=="1" || if2=="1" || if3=="1"){
                    toastr.error("Completa los campos resaltados en rojo", "Alto");
                }   
            }
            else
            {
                //Para verificar que los datos ingresados en la seccion de fracciones no esten vacios
                //Para verificar an...
                if (document.getElementById("enteroPT").value!="") {
                    if(document.getElementById("numeradorPT").value=="" && document.getElementById("denominadorPT").value=="")
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px green solid');
                        siPanelF="1";
                        if1F="1";

                    }
                    else
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px red solid');
                        siPanelF="0";
                        if1F="0";
                    }
                }
                if (document.getElementById("numeradorPT").value!="" && document.getElementById("denominadorPT").value!="") {
                    $('#tablePrimerTermino').attr('style','border: 1px green solid');
                    siPanelF="1";
                    if1F="1";

                }
                else
                {
                    if (siPanelF=="1") {
                        $('#tablePrimerTermino').attr('style','border: 1px green solid');
                        siPanelF="1";
                        if1F="1";
                    }
                    else
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px red solid');
                        siPanelF="0";
                        if1F="0";
                    }
                }
                //fin de verificar an..
                //Para verificar distancia...
                if (document.getElementById("enteroDT").value!="") {
                    if(document.getElementById("numeradorDT").value=="" && document.getElementById("denominadorDT").value=="")
                    {
                        $('#tableDistanciaTermino').attr('style','border: 1px green solid');
                        siPanelF3="1";
                        if2F="1";

                    }
                    else
                    {
                        $('#tableDistanciaTermino').attr('style','border: 1px red solid');
                        siPanelF3="0";
                        if2F="0";
                    }
                }
                if (document.getElementById("numeradorDT").value!="" && document.getElementById("denominadorDT").value!="") {
                    $('#tableDistanciaTermino').attr('style','border: 1px green solid');
                    siPanelF3="1";
                    if2F="1";

                }
                else
                {
                    if (siPanelF3=="1") {
                        $('#tableDistanciaTermino').attr('style','border: 1px green solid');
                        siPanelF3="1";
                        if2F="1";
                    }
                    else
                    {
                        $('#tableDistanciaTermino').attr('style','border: 1px red solid');
                        siPanelF3="0";
                        if2F="0";
                    }
                }
                //fin de verificar distancia..
                //para verificar el termino a buscar...
                if (document.getElementById("enteroTD").value!="") {
                    if(document.getElementById("numeradorTD").value=="" && document.getElementById("denominadorTD").value=="")
                    {
                        $('#tableTerminoDeseado').attr('style','border: 1px green solid');
                        siPanelF3="1";
                        if2F="1";

                    }
                    else
                    {
                        $('#tableTerminoDeseado').attr('style','border: 1px red solid');
                        siPanelF3="0";
                        if2F="0";
                    }
                }
                if (document.getElementById("numeradorTD").value!="" && document.getElementById("denominadorTD").value!="") {
                    $('#tableTerminoDeseado').attr('style','border: 1px green solid');
                    siPanelF3="1";
                    if2F="1";

                }
                else
                {
                    if (siPanelF3=="1") {
                        $('#tableTerminoDeseado').attr('style','border: 1px green solid');
                        siPanelF3="1";
                        if2F="1";
                    }
                    else
                    {
                        $('#tableTerminoDeseado').attr('style','border: 1px red solid');
                        siPanelF3="0";
                        if2F="0";
                    }
                }
                if(if1F=="0" || if2F=="0" || if3F=="0"){
                    toastr.error("Completa los campos resaltados en rojo", "Alto");
                }
                //fin de terminos a buscar
            }            
            $('#TerminoDeseado').fadeOut(0);
            $('#TerminoDistancia').fadeOut(0);
            $('#piezaMas2').fadeOut(0);
            $('#piezaMenos2').fadeOut(0)
            $('#piezaParen1').fadeOut(0);
            $('#piezaParen2').fadeOut(0);
            $('#piezaN').fadeOut(0);
            $('#TerminoN').fadeIn(300);
            $('#piezaMas').fadeIn(300);
            $('#piezaMenos').fadeIn(300);
            $('#piezaAn').fadeIn(300);
            $('#piezaD').fadeIn(300);
        }break;
        case "distanciaT":{
            imprimir=0;
            document.getElementById("distancia").value="";
            document.getElementById("enteroDT").value="";
            document.getElementById("numeradorDT").value="";
            document.getElementById("denominadorDT").value="";
            document.getElementById("distancia").disabled=true;
            document.getElementById("enteroDT").disabled=true;
            document.getElementById("numeradorDT").disabled=true;
            document.getElementById("denominadorDT").disabled=true;
            document.getElementById("nterminosF").disabled=false;
            document.getElementById("enteroTD").disabled=false;
            document.getElementById("numeradorTD").disabled=false;
            document.getElementById("denominadorTD").disabled=false;
            document.getElementById("an").disabled=false;
            document.getElementById("nterminos").disabled=false;
            $("#labelNumeroT").html("Número de Término (a<sub>n</sub>):");
            $("#labelNumeroTF").html("Número de Término (a<sub>n</sub>):");
            $("#TerminoBuscar2").html("Número de Término (a<sub>n</sub>):");
            $("#labelTerminoD").html("Valor Término Deseado (a<sub>n</sub>):");
            $("#labelTerminoDF").html("Valor Término Deseado (a<sub>n</sub>):");
            $("#labelTerminoD2").html("Valor Término Deseado (a<sub>n</sub>):");
            var if1="0";
            var if2="0";
            var if3="0";
            if (seleccionTipoNumero=="1") {
                if(document.getElementById("a1").value=="")
                {
                   $('#a1').attr('style','border-color: #ed5565');
                   if1="1";
                   siPanel="1";
                }
                else
                {
                    $('#a1').attr('style','border-color: #1ab394');
                    if1="0";
                    siPanel="0";
                }
                if(document.getElementById("an").value=="")
                {
                   $('#an').attr('style','border-color: #ed5565');
                   if2="1";
                   siPanel2="1";
                }
                else
                {
                    $('#an').attr('style','border-color: #1ab394');
                    if2="0";
                    siPanel2="0";
                }
                if(document.getElementById("nterminos").value=="")
                {
                   $('#nterminos').attr('style','border-color: #ed5565');
                   if3="1";
                   siPanel4="1";
                }
                else
                {
                    $('#nterminos').attr('style','border-color: #1ab394');
                    if3="0";
                    siPanel4="0";
                }
                if(if1=="1" || if2=="1" || if3=="1"){
                    toastr.error("Completa los campos resaltados en rojo", "Alto");
                }
            }
            else
            {
                //para fracciones
                //Para verificar an...
                if (document.getElementById("enteroPT").value!="") {
                    if(document.getElementById("numeradorPT").value=="" && document.getElementById("denominadorPT").value=="")
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px green solid');
                        siPanelF="1";
                        if1F="1";

                    }
                    else
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px red solid');
                        siPanelF="0";
                        if1F="0";
                    }
                }
                if (document.getElementById("numeradorPT").value!="" && document.getElementById("denominadorPT").value!="") {
                    $('#tablePrimerTermino').attr('style','border: 1px green solid');
                    siPanelF="1";
                    if1F="1";

                }
                else
                {
                    if (siPanelF=="1") {
                        $('#tablePrimerTermino').attr('style','border: 1px green solid');
                        siPanelF="1";
                        if1F="1";
                    }
                    else
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px red solid');
                        siPanelF="0";
                        if1F="0";
                    }
                }
                //fin de verificar an..
                //para verificar el termino a buscar...
                if(document.getElementById("nterminosF").value=="")
                {
                   $('#nterminosF').attr('style','border-color: #ed5565');
                   if3F="0";
                   siPanelF4="0";
                }
                else
                {
                    $('#nterminosF').attr('style','border-color: #1ab394');
                    if3F="1";
                    siPanelF4="1";
                }
                //fin de terminos a buscar
                //para verificar el termino a buscar...
                if (document.getElementById("enteroTD").value!="") {
                    if(document.getElementById("numeradorTD").value=="" && document.getElementById("denominadorTD").value=="")
                    {
                        $('#tableTerminoDeseado').attr('style','border: 1px green solid');
                        siPanelF3="1";
                        if2F="1";

                    }
                    else
                    {
                        $('#tableTerminoDeseado').attr('style','border: 1px red solid');
                        siPanelF3="0";
                        if2F="0";
                    }
                }
                if (document.getElementById("numeradorTD").value!="" && document.getElementById("denominadorTD").value!="") {
                    $('#tableTerminoDeseado').attr('style','border: 1px green solid');
                    siPanelF3="1";
                    if2F="1";

                }
                else
                {
                    if (siPanelF3=="1") {
                        $('#tableTerminoDeseado').attr('style','border: 1px green solid');
                        siPanelF3="1";
                        if2F="1";
                    }
                    else
                    {
                        $('#tableTerminoDeseado').attr('style','border: 1px red solid');
                        siPanelF3="0";
                        if2F="0";
                    }
                }
                if(if1F=="0" || if2F=="0" || if3F=="0"){
                    toastr.error("Completa los campos resaltados en rojo", "Alto");
                }
                //fin de terminos a buscar
            }
            $('#TerminoDeseado').fadeOut(0);
            $('#TerminoN').fadeOut(0);
            $('#piezaMas').fadeOut(0);
            $('#piezaMas2').fadeOut(0)
            $('#piezaParen1').fadeOut(0);
            $('#piezaParen2').fadeOut(0);
            $('#piezaD').fadeOut(0);
            $('#TerminoDistancia').fadeIn(300);
            $('#piezaMenos').fadeIn(300);
            $('#piezaMenos2').fadeIn(300);
            $('#piezaAn').fadeIn(300);
            $('#piezaN').fadeIn(300);
        }break;
    }
    verificarEstado();
}
//llena la información de las secciones....
function llenarDeNuevo(){
    imagenVariables();
    ////////////////////////////////////////////////////////
    //llena las tablas donde se agregaran las imagenes...///
    ////////////////////////////////////////////////////////
    $("#tablasDetalles").html("<table id='TerminoDeseado'  border='0'>"+
        "<tbody>"+
            "<tr></tr>"+
            "<tr>"+
                "<td>"+
                    "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/an.png')}}'>"+
                "</td>"+
                "<td></td>"+
                "<td>"+
                    "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                "</td>"+
                "<td>"+
                    "<div class='contenedores' id='a1' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='mas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='paren1' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='menos' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='uno' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='paren2' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-repeat'></i></button>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                "</td>"+
            "</tr>"+
        "</tbody>"+
    "</table>"+
    "<!-- Creando la tabla de n-->"+
    "<table id='TerminoN'  border='0' style='display: none;'>"+
        "<tbody>"+
            "<tr></tr>"+
            "<tr>"+
                "<td>"+
                    "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/n.png')}}'>"+
                "</td>"+
                "<td>"+
                    "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                "</td>"+
                "<td>"+
                    "<div class='contenedores' id='1n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='masn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td style='border-bottom: 3px black solid;'>"+
                    "<div class='contenedores' id='ann' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                "<td style='border-bottom: 3px black solid;'>"+
                    "<div class='contenedores' id='menosn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                "<td style='border-bottom: 3px black solid;'>"+
                    "<div class='contenedores' id='a1n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-repeat'></i></button>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                "</td>"+
            "</tr>"+
            "<tr>"+
                "<td></td>"+
                "<td></td>"+
                "<td></td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td></td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td></td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='dn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'>"+
                    "</div>"+
                "</td>"+
            "</tr>"+
        "</tbody>"+
    "</table>"+
    "<!-- Creando la tabla de distancia-->"+
    "<table id='TerminoDistancia' border='0' style='display: none;'>"+
        "<tbody>"+
            "<tr>"+
                "<td>"+
                    "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/d.png')}}'>"+
                "</td>"+
                "<td>"+
                    "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                "</td>"+
                "<td style='border-bottom: 3px black solid;'>"+
                    "<div class='contenedores' id='and' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                "<td style='border-bottom: 3px black solid;'>"+
                    "<div class='contenedores' id='menosd' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                "<td style='border-bottom: 3px black solid;'>"+
                    "<div class='contenedores' id='a1d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                    "</div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-repeat'></i></button>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                "</td>"+
            "</tr>"+
            "<tr style='background-color: #ffffff; border-color: #ffffff;'>"+
                "<td></td>"+
                "<td></td>"+
                "<td>"+
                    "<div class='contenedores' id='nd' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='menos2d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                "</td>"+
                "<td>&nbsp;&nbsp;</td>"+
                "<td>"+
                    "<div class='contenedores' id='unod' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                "</td>"+
            "</tr>"+
        "</tbody>"+
    "</table>");
}
function imagenVariables(){
   //LLenando la caja de variables...
    $("#contenedorPiezas").html("<div style='background-color: #ffffff; border-color: #ffffff; width: 50px; height: 34px;'></div>"+
        "<img id='piezaAn' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/an.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='piezaMas' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/mas.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='piezaD' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/d.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='piezaMenos' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/menos.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='piezaMenos2' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/menos2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='piezaN' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='pieza1' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/1.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='piezaA1' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/a1.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='piezaMas2' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/mas2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='piezaParen1' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/parentesis1.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"+
        "<img id='piezaParen2' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/parentesis2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>"); 
}
function limpiarTermino(){
    swal({
        title: "¿Esta Seguro?",
        text: "Al limpiar el espacio para despejar la fórmula, se borrará el progreso realizado hasta el momento",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí, borrar!",
        closeOnConfirm: false
    }, function () {
        swal("Limpiado!", "El proceso de limpieza se ha realizado con éxito", "success");
        //proceso de limpieza...
        imagenVariables();
        switch(seleccionRadio){
            case "terminoD":{
                $('#piezaMas2').fadeOut(0);
                $('#piezaMenos2').fadeOut(0)
                $('#piezaAn').fadeOut(0)
                $('#piezaParen1').fadeIn(300);
                $('#piezaParen2').fadeIn(300);
                $('#piezaMas').fadeIn(300);
                $('#piezaMenos').fadeIn(300);
                $('#piezaN').fadeIn(300);
                $('#piezaD').fadeIn(300);
                $("#tablasDetalles").html("<table id='TerminoDeseado'  border='0'>"+
                "<tbody>"+
                    "<tr></tr>"+
                    "<tr>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/an.png')}}'>"+
                        "</td>"+
                        "<td></td>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                        "</td>"+
                        "<td>"+
                            "<div class='contenedores' id='a1' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='mas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='paren1' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='menos' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='uno' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='paren2' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-trash'></i></button>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                        "</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>"+
            "<!-- Creando la tabla de n-->"+
            "<table id='TerminoN'  border='0'  style='display: none;'>"+
                "<tbody>"+
                    "<tr></tr>"+
                    "<tr>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/n.png')}}'>"+
                        "</td>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                        "</td>"+
                        "<td>"+
                            "<div class='contenedores' id='1n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='masn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='ann' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='menosn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='a1n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-trash'></i></button>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                        "</td>"+
                    "</tr>"+
                    "<tr>"+
                        "<td></td>"+
                        "<td></td>"+
                        "<td></td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td></td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td></td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='dn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'>"+
                            "</div>"+
                        "</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>"+
            "<!-- Creando la tabla de distancia-->"+
            "<table id='TerminoDistancia' border='0' style='display: none;'>"+
                "<tbody>"+
                    "<tr>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/d.png')}}'>"+
                        "</td>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='and' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='menosd' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='a1d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-trash'></i></button>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                        "</td>"+
                    "</tr>"+
                    "<tr style='background-color: #ffffff; border-color: #ffffff;'>"+
                        "<td></td>"+
                        "<td></td>"+
                        "<td>"+
                            "<div class='contenedores' id='nd' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='menos2d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='unod' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                        "</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>");
            }break;
            case "numeroT":{
                $('#piezaMenos2').fadeOut(0);
                $('#piezaMas2').fadeOut(0)
                $('#piezaParen1').fadeOut(0);
                $('#piezaParen2').fadeOut(0);
                $('#piezaN').fadeOut(0);
                $('#piezaMas').fadeIn(300);
                $('#piezaMenos').fadeIn(300);
                $('#piezaAn').fadeIn(300);
                $('#piezaD').fadeIn(300);
                $("#tablasDetalles").html("<table id='TerminoDeseado'  border='0'  style='display: none;'>"+
                "<tbody>"+
                    "<tr></tr>"+
                    "<tr>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/an.png')}}'>"+
                        "</td>"+
                        "<td></td>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                        "</td>"+
                        "<td>"+
                            "<div class='contenedores' id='a1' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='mas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='paren1' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='menos' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='uno' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='paren2' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-trash'></i></button>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                        "</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>"+
            "<!-- Creando la tabla de n-->"+
            "<table id='TerminoN'  border='0'>"+
                "<tbody>"+
                    "<tr></tr>"+
                    "<tr>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/n.png')}}'>"+
                        "</td>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                        "</td>"+
                        "<td>"+
                            "<div class='contenedores' id='1n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='masn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='ann' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='menosn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='a1n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-trash'></i></button>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                        "</td>"+
                    "</tr>"+
                    "<tr>"+
                        "<td></td>"+
                        "<td></td>"+
                        "<td></td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td></td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td></td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='dn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'>"+
                            "</div>"+
                        "</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>"+
            "<!-- Creando la tabla de distancia-->"+
            "<table id='TerminoDistancia' border='0' style='display: none;'>"+
                "<tbody>"+
                    "<tr>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/d.png')}}'>"+
                        "</td>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='and' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='menosd' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='a1d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-trash'></i></button>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                        "</td>"+
                    "</tr>"+
                    "<tr style='background-color: #ffffff; border-color: #ffffff;'>"+
                        "<td></td>"+
                        "<td></td>"+
                        "<td>"+
                            "<div class='contenedores' id='nd' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='menos2d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='unod' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                        "</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>");
            }break;
            case "distanciaT":{
                $('#piezaMas').fadeOut(0);
                $('#piezaMas2').fadeOut(0)
                $('#piezaParen1').fadeOut(0);
                $('#piezaParen2').fadeOut(0);
                $('#piezaD').fadeOut(0);
                $('#piezaMenos').fadeIn(300);
                $('#piezaMenos2').fadeIn(300);
                $('#piezaAn').fadeIn(300);
                $('#piezaN').fadeIn(300);
                $("#tablasDetalles").html("<table id='TerminoDeseado'  border='0'  style='display: none;'>"+
                "<tbody>"+
                    "<tr></tr>"+
                    "<tr>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/an.png')}}'>"+
                        "</td>"+
                        "<td></td>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                        "</td>"+
                        "<td>"+
                            "<div class='contenedores' id='a1' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='mas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='paren1' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='menos' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='uno' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='paren2' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-trash'></i></button>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                        "</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>"+
            "<!-- Creando la tabla de n-->"+
            "<table id='TerminoN'  border='0' style='display: none;'>"+
                "<tbody>"+
                    "<tr></tr>"+
                    "<tr>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/n.png')}}'>"+
                        "</td>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                        "</td>"+
                        "<td>"+
                            "<div class='contenedores' id='1n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='masn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='ann' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='menosn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='a1n' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-trash'></i></button>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                        "</td>"+
                    "</tr>"+
                    "<tr>"+
                        "<td></td>"+
                        "<td></td>"+
                        "<td></td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td></td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td></td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='dn' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'>"+
                            "</div>"+
                        "</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>"+
            "<!-- Creando la tabla de distancia-->"+
            "<table id='TerminoDistancia' border='0'>"+
                "<tbody>"+
                    "<tr>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/d.png')}}'>"+
                        "</td>"+
                        "<td>"+
                            "<img id='piezaIgual' src='{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas/ejercicios/igual.png')}}' width='30px' height='34px'>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='and' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='menosd' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td style='border-bottom: 3px black solid;'>&nbsp;&nbsp;</td>"+
                        "<td style='border-bottom: 3px black solid;'>"+
                            "<div class='contenedores' id='a1d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;'>"+
                            "</div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-danger dim' type='button'  title='Limpiar' onclick='limpiarTermino();'><i class='fa fa-trash'></i></button>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<button class='btn btn-primary dim' type='button' title='Comprobar' onclick='comprobarFormula(1);'><i class='fa fa-check'></i></button>"+
                        "</td>"+
                    "</tr>"+
                    "<tr style='background-color: #ffffff; border-color: #ffffff;'>"+
                        "<td></td>"+
                        "<td></td>"+
                        "<td>"+
                            "<div class='contenedores' id='nd' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='menos2d' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                        "</td>"+
                        "<td>&nbsp;&nbsp;</td>"+
                        "<td>"+
                            "<div class='contenedores' id='unod' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)' style='background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px; margin-top: 10px;'></div>"+
                        "</td>"+
                    "</tr>"+
                "</tbody>"+
            "</table>");
            }break;
        }
    });//cierre del swal
}
function DatoIngresado(e,opc){
    //console.log(e.value);
    switch (opc)
    {
        case "1":{
            imprimir=0;
            console.log(e.value,opc);
            if(e.value=="")
            {
                $('#a1').attr('style','border-color: #ed5565');
                siPanel="1";
            }
            else
            {
                $('#a1').attr('style','border-color: #1ab394');
                siPanel="0";
            }
        }break;
        case "2":{
            imprimir=0;
            console.log(e.value,opc);
            if(e.value=="")
            {
                $('#an').attr('style','border-color: #ed5565');
                siPanel2="1";
            }
            else
            {
                $('#an').attr('style','border-color: #1ab394');
                siPanel2="0";
            }
        }break;
        case "3":{
            imprimir=0;
            console.log(e.value,opc);
            if(e.value=="")
            {
                $('#distancia').attr('style','border-color: #ed5565');
                siPanel3="1";
            }
            else
            {
                $('#distancia').attr('style','border-color: #1ab394');
                siPanel3="0";
            }
        }break;
        case "4":{
            imprimir=0;
            console.log(e.value,opc);
            if(e.value=="")
            {
                $('#nterminos').attr('style','border-color: #ed5565');
                siPanel4="1";
            }
            else
            {
                $('#nterminos').attr('style','border-color: #1ab394');
                siPanel4="0";
            }
        }break;
    }//cierre del switch
    verificarEstado();
}
function DatoIngresadoF(opc){
    switch(opc){
        case "1":{
            imprimir=0;
            loEncontro=0;
            if (document.getElementById("enteroPT").value!="") {
                    if(document.getElementById("numeradorPT").value=="" && document.getElementById("denominadorPT").value=="")
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px green solid');
                        siPanelF="1";

                    }
                    else
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px red solid');
                        siPanelF="0";
                    }
                }
                if (document.getElementById("numeradorPT").value!="" && document.getElementById("denominadorPT").value!="") {
                    $('#tablePrimerTermino').attr('style','border: 1px green solid');
                    siPanelF="1";

                }
                else
                {
                    if (siPanelF=="1") {
                        $('#tablePrimerTermino').attr('style','border: 1px green solid');
                        siPanelF="1";
                    }
                    else
                    {
                        $('#tablePrimerTermino').attr('style','border: 1px red solid');
                        siPanelF="0";
                    }
                }
        }break;
        case "2":
        {
            imprimir=0;
            loEncontro=0;
            if (document.getElementById("enteroDT").value!="") {
                    if(document.getElementById("numeradorDT").value=="" && document.getElementById("denominadorDT").value=="")
                    {
                        $('#tableDistanciaTermino').attr('style','border: 1px green solid');
                        siPanelF3="1";

                    }
                    else
                    {
                        $('#tableDistanciaTermino').attr('style','border: 1px red solid');
                        siPanelF3="0";
                    }
                }
                if (document.getElementById("numeradorDT").value!="" && document.getElementById("denominadorDT").value!="") {
                    $('#tableDistanciaTermino').attr('style','border: 1px green solid');
                    siPanelF3="1";

                }
                else
                {
                    if (siPanelF3=="1") {
                        $('#tableDistanciaTermino').attr('style','border: 1px green solid');
                        siPanelF3="1";
                    }
                    else
                    {
                        $('#tableDistanciaTermino').attr('style','border: 1px red solid');
                        siPanelF3="0";
                    }
                }
            }break;
            case "3":
            {
                imprimir=0;
                loEncontro=0;
                if (document.getElementById("enteroTD").value!="") {
                    if(document.getElementById("numeradorTD").value=="" && document.getElementById("denominadorTD").value=="")
                    {
                        $('#tableTerminoDeseado').attr('style','border: 1px green solid');
                        siPanelF2="1";

                    }
                    else
                    {
                        $('#tableTerminoDeseado').attr('style','border: 1px red solid');
                        siPanelF2="0";
                    }
                }
                if (document.getElementById("numeradorTD").value!="" && document.getElementById("denominadorTD").value!="") {
                    $('#tableTerminoDeseado').attr('style','border: 1px green solid');
                    siPanelF2="1";

                }
                else
                {
                    if (siPanelF2=="1") {
                        $('#tableTerminoDeseado').attr('style','border: 1px green solid');
                        siPanelF2="1";
                    }
                    else
                    {
                        $('#tableTerminoDeseado').attr('style','border: 1px red solid');
                        siPanelF2="0";
                    }
                }
            }break;
            case "4":
            {
                imprimir=0;
                loEncontro=0;
                if(document.getElementById("nterminosF").value=="")
                {
                   $('#nterminosF').attr('style','border-color: #ed5565');
                   siPanelF4="0";
                }
                else
                {
                    $('#nterminosF').attr('style','border-color: #1ab394');
                    siPanelF4="1";
                }
            }break;
    }//cierre del switch
    verificarEstado();
}
function verificarEstado(){
    console.log(siPanel,siPanel2,siPanel3,siPanel4);
    console.log(siPanelF,siPanelF2,siPanelF3,siPanelF4);
    switch(seleccionRadio)
    {
        case "terminoD":{
            if (seleccionTipoNumero=="1") {
                if(siPanel=="0" && siPanel3=="0" && siPanel4=="0")
                {
                    toastr.success("Ahora continua con el siguiente paso","Excelente");
                    estadoDatosAn="1";
                }
            }
            else
            {
               if(siPanelF=="1" && siPanelF3=="1" && siPanelF4=="1")
                {
                    toastr.success("Ahora continua con el siguiente paso","Excelente");
                    estadoDatosAn="1";
                } 
            }
        }break;
        case "numeroT":{
            //console.log(seleccionRadio);
            if (seleccionTipoNumero=="1") {
                if(siPanel=="0" && siPanel2=="0" && siPanel3=="0")
                {
                    toastr.success("Ahora continua con el siguiente paso","Excelente");
                    estadoDatosN="1";
                }
           }
           else
           {
               if(siPanelF=="1" && siPanelF2=="1" && siPanelF3=="1")
                {
                    toastr.success("Ahora continua con el siguiente paso","Excelente");
                    estadoDatosAn="1";
                } 
           }
        }break;
        case "distanciaT":{
           //console.log(seleccionRadio);
            if (seleccionTipoNumero=="1") {
                if(siPanel=="0" && siPanel2=="0" && siPanel4=="0")
                {
                    toastr.success("Ahora continua con el siguiente paso","Excelente");
                    estadoDatosD="1";
                }
            }
            else
            {
                if(siPanelF=="1" && siPanelF2=="1" && siPanelF4=="1")
                {
                    toastr.success("Ahora continua con el siguiente paso","Excelente");
                    estadoDatosAn="1";
                }
            }
           
        }break;
    }
}
function tour1(){
    var tour = new Tour({
    steps: [{
        element: "#tour1-1",
        title: "Paso 1",
        content: "Selecciona el tipo de dato numerico con el cual generaras la sucesión.",
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
        content: "Selecciona el procedimiento que deseas realizar para generar la sucesión.",
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
        element: "#tour1-3",
        title: "Paso 3",
        content: "Ingresa los valores correspondientes a la sucesión que se desea generar.",
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
        element: "#tour1-4",
        title: "Paso 4",
        content: "Selecciona un elemento de la pestaña \"Variables de la fórmula\" y colocala en los espacios asignados en la pestaña \"Despeje de la fórmula\"",
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
</script>