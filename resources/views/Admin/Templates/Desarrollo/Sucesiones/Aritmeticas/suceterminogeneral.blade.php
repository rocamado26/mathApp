<div class="ibox float-e-margins animated fadeInUpBig">
    <div class="ibox-title">
        <h5>Sucesiones Geométricas - <small> Término General</small></h5>
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
                                       El <b>término general</b> de una sucesión es una fórmula que permite conocer el valor de un determinado término, si se conoce previamente el lugar que ocupa en la misma. Por costumbre, al término general de una sucesión se le denota por <b>a<sub>n</sub></b> y se le conoce de <b>"término n-ésimo"</b>. 
                                       <br><br>
                                       <div class="col-lg-12">
                                           <div class="ibox">
                                                <div class="ibox-title">
                                                    <h3><center>EJEMPLOS</center></h3>
                                                    <br>
                                                    <div class="row">
                                                        <table border="0" align="center">
                                                            <tr>
                                                                <td><button id="btnE1" type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemplo(1)">1</button></td>
                                                                <td><button id="btnE2" type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemplo(2)">2</button></td>
                                                                <td><button id="btnE3" type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemplo(3)">3</button></td>
                                                                <td><button id="btnE4" type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemplo(4)">4</button></td>
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
                                                                    La cooperativa “El buen amigo” necesita hacer un pozo para satisfacer sus necesidades de agua. El costo por metro excavado es de: 
                                                                <br><br>
                                                                <center>
                                                                    <img src="img/iconos/sucesiones/aritmeticas/terminoGeneral/ejer1.png" width="100%" style="position: center; max-width: 390px;"/>
                                                                </center>
                                                                <br>
                                                                ¿Qué observas en los precios? ¿Cuánto aumenta el precio de un metro a otro? Puedes ver que cada metro excavado cuesta $20 más que el anterior.
                                                                <br><br>
                                                                Si al excavar 16 metros aún no aparece agua, ¿cuánto cuesta el 17º metro?
                                                                </div>                                                   
                                                            </div>
                                                            <br>
                                                            Para resolver esta situación, primero relacionamos cada término con la posicion que ocupa:
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3"><b>
                                                                    a<sub>1</sub> ----->  15
                                                                    <br><br>
                                                                    a<sub>2</sub> ----->  35
                                                                    <br><br>
                                                                    a<sub>3</sub> ----->  55
                                                                    <br><br>
                                                                    a<sub>4</sub> ----->  75
                                                                    </b>
                                                                </font>
                                                            </div>                                                    
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    En forma general, la diferencia entre un elemento y otro consecutivo se expresa así:
                                                                    <br><br>
                                                                    <b>d = a<sub>n</sub> – (a<sub>n</sub>–1)</b>
                                                                    <br><br>
                                                                    DONDE: 
                                                                    <br><br><b>d</b>, es la diferencia; 
                                                                    <br><br><b>a<sub>n</sub></b>, es un número; 
                                                                    <br><br>y <b>a<sub>n</sub>–1</b>, es el número anterior a ese número.
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="panel panel-info">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    Cada término se obtiene sumando <b>d</b> al anterior.
                                                                    <br><br>
                                                                    Al segundo, le sumas <b>1d</b>; al tercero, <b>2d</b>; al cuarto, <b>3d</b>, hasta el n–ésimo término al cual le sumas <b>(n – 1) d.</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="col-lg-6">
                                                                    Primero observas que la diferencia entre dos valores consecutivos es la misma.
                                                                    <br><br>
                                                                    <div class="well" align="center">
                                                                        <font size="3">
                                                                        <br>
                                                                            <b>a<sub>2</sub> – a<sub>1</sub></b> = 35 – 15 = <b>20</b>
                                                                            <br><br>
                                                                            <b>a<sub>3</sub> – a<sub>2</sub></b> = 55 – 35 = <b>20</b>
                                                                            <br><br>
                                                                            <b>a<sub>4</sub> – a<sub>3</sub></b> = 75 – 55 = <b>20</b>
                                                                            <br><br><br>
                                                                            <b>Para este caso <i>d</i> = 20</b>
                                                                            <br>&nbsp;
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    El término general de una sucesión aritmética lo encontrarás así:
                                                                    <br><br>
                                                                    <div class="well" align="center">
                                                                        <font size="3">a<sub>1</sub> = a<sub>1</sub>
                                                                        <br><br>
                                                                        a<sub>2</sub> = a<sub>1</sub> + d
                                                                        <br><br>
                                                                        a<sub>3</sub> = a<sub>1</sub> + 2d
                                                                        <br><br>
                                                                        a<sub>4</sub> = a<sub>1</sub> + 3d
                                                                        <br><br>
                                                                        Por lo tanto la fórmula general es:
                                                                        <br><b>a<sub>n</sub> = a<sub>1</sub> + (n – 1)d</b>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                Sustituyendo los valores en la fórmula comprobaremos el término general obtenido:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">Colocamos los datos en la fórmula general <br>
                                                                    <b>a<sub>n</sub> = a<sub>1</sub> + (n – 1)d</b>
                                                                    <br><br>
                                                                    a<sub>1</sub> = 15
                                                                    <br><br>
                                                                    d = 20
                                                                    <br><br>
                                                                    a<sub>n</sub> = 15 + (n-1)(20)
                                                                    <br><br>
                                                                    a<sub>n</sub> = 15 + 20n - 20
                                                                    <br><br>
                                                                    Asi obtenemos que, el término general para este ejercicio es:
                                                                    <br><br><b>a<sub>n</sub> = 20n - 5</b>
                                                                    <br><br>
                                                                    Para el término 17 tendríamos:
                                                                    <br><br>
                                                                    a<sub>17</sub> = 20(17) - 5 = <i>335</i>
                                                                    <br><br>
                                                                    Por lo tanto, el precio para perforar el metro 17, es <b>$ 335</b></font>
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
                                                                    Encuentra el término general y el 9 término para la siguiente sucesión de número reales:
                                                                    <br><br>
                                                                    <center>
                                                                        <img src="img/iconos/sucesiones/aritmeticas/terminoGeneral/ejer2.png" width="50%" style="position: center;"/>
                                                                    </center>
                                                                </div>                                                   
                                                            </div>
                                                            <br><br>
                                                            Para resolver esta situación, primero relacionamos cada término con la posicion que ocupa:
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                    <font size="3"><b>
                                                                    a<sub>1</sub> ----->  10
                                                                    <br><br>
                                                                    a<sub>2</sub> ----->  7
                                                                    <br><br>
                                                                    a<sub>3</sub> ----->  4
                                                                    <br><br>
                                                                    a<sub>4</sub> ----->  1
                                                                    <br><br>
                                                                    a<sub>5</sub> ----->  -2
                                                                    </b></font>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    En forma general, la diferencia entre un elemento y otro consecutivo se expresa así:
                                                                    <br><br>
                                                                    <b>d = a<sub>n</sub> – (a<sub>n</sub>–1)</b>
                                                                    <br><br>
                                                                    DONDE: 
                                                                    <br><br><b>d</b>, es la diferencia; 
                                                                    <br><br><b>a<sub>n</sub></b>, es un número; 
                                                                    <br><br>y <b>a<sub>n</sub>–1</b>, es el número anterior a ese número.
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="panel panel-info">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    Cada término se obtiene sumando <b>d</b> al anterior.
                                                                    <br><br>
                                                                    Al segundo, le sumas <b>1d</b>; al tercero, <b>2d</b>; al cuarto, <b>3d</b>, hasta el n–ésimo término al cual le sumas <b>(n – 1) d.</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <br>
                                                                <div class="col-lg-6">
                                                                    Podemos observar que la diferencia entre cada término es constante:
                                                                    <br><br>
                                                                    <div class="well" align="center">
                                                                        <font size="3">
                                                                        <br><br><br><br>
                                                                        <b>a<sub>2</sub> – a<sub>1</sub></b> = 7 – 10 = <b>-3</b>
                                                                        <br><br>
                                                                        <b>a<sub>3</sub> – a<sub>2</sub></b> = 4 – 7 = <b>-3</b>
                                                                        <br><br>
                                                                        <b>a<sub>4</sub> – a<sub>3</sub></b> = 1 – 4 = <b>-3</b>
                                                                        <br><br>
                                                                        <b>a<sub>5</sub> – a<sub>4</sub></b> = -2 – 1 = <b>-3</b>
                                                                        <br><br>
                                                                        <b>Para este caso <i>d</i> = -3</b>
                                                                        <br><br><br><br>&nbsp;
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    Conociendo la fórmula general de la sucesión, el término general lo encuentras así:
                                                                    <br><br>
                                                                    <div class="well" align="center">
                                                                        <font size="3">
                                                                        Siendo la fórmula general:
                                                                        <br><b>a<sub>n</sub> = a<sub>1</sub> + (n – 1)d</b>
                                                                        <br><br>
                                                                        Reemplazamos los valores que conocemos por los términos de la fórmula general
                                                                        <br><br>
                                                                        a<sub>1</sub> = 10
                                                                        <br><br>
                                                                        d = -3
                                                                        <br><br>
                                                                        a<sub>n</sub> = 10 + (n-1)(-3)
                                                                        <br><br>
                                                                        a<sub>n</sub> = 10 - 3n + 3
                                                                        <br><br>
                                                                        Asi obtenemos que, el término general para este ejercicio es:
                                                                        <br><br><b>a<sub>n</sub> = 13 -3n</b>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                Para encontrar el 9 termino de la sucesión realizaremos lo siguiente:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                    Colocamos los datos en el término general encontrado:
                                                                    <br><br><b>a<sub>n</sub> = 13 - 3n</b>
                                                                    <br><br>
                                                                    a<sub>9</sub> = 13 -3(9)
                                                                    <br><br>
                                                                    a<sub>9</sub> = 13 - 27
                                                                    <br><br>
                                                                    a<sub>9</sub> = -14
                                                                    <br><br>
                                                                    Por lo tanto, el valor para el término 9, es <b>-14</b></font>
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
                                                                    Ahora analiza la siguiente sucesión aritmética y encuentra el 6 término de la sucesión.
                                                                    <br><br>
                                                                    <center>
                                                                        <img src="img/iconos/sucesiones/aritmeticas/terminoGeneral/ejer3.png" width="50%" style="position: center;"/>
                                                                    </center>
                                                                </div>                                                   
                                                            </div>
                                                            <br>
                                                            Para resolver esta situación, primero relacionamos cada término con la posición que ocupa:
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3"><b>
                                                                a<sub>1</sub> ----->  <sup>1</sup>/<sub>2</sub>
                                                                <br><br>
                                                                a<sub>2</sub> ----->  1
                                                                <br><br>
                                                                a<sub>3</sub> ----->  <sup>3</sup>/<sub>2</sub>
                                                                <br><br>
                                                                a<sub>4</sub> ----->  2
                                                                </b></font>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    En forma general, la diferencia entre un elemento y otro consecutivo se expresa así:
                                                                    <br><br>
                                                                    <b>d = a<sub>n</sub> – (a<sub>n</sub>–1)</b>
                                                                    <br><br>
                                                                    DONDE: 
                                                                    <br><br><b>d</b>, es la diferencia; 
                                                                    <br><br><b>a<sub>n</sub></b>, es un número; 
                                                                    <br><br>y <b>a<sub>n</sub>–1</b>, es el número anterior a ese número.
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="panel panel-info">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/binoculars.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Observa</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    Cada término se obtiene sumando <b>d</b> al anterior.
                                                                    <br><br>
                                                                    Al segundo, le sumas <b>1d</b>; al tercero, <b>2d</b>; al cuarto, <b>3d</b>, hasta el n–ésimo término al cual le sumas <b>(n – 1) d.</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <br>
                                                                <div class="col-lg-6">
                                                                    Podemos observar que la diferencia entre cada término es de <sup>1</sup>/<sub>2</sub> 
                                                                    <br><br>
                                                                    <div class="well" align="center">
                                                                        <font size="3">
                                                                            <br><br><br><br>
                                                                            <b>a<sub>2</sub> - a<sub>1</sub></b> = 1 - <sup>1</sup>/<sub>2</sub> = <b><sup>1</sup>/<sub>2</sub></b>
                                                                            <br><br><br>
                                                                            <b>a<sub>3</sub> - a<sub>2</sub></b> = <sup>3</sup>/<sub>2</sub> - 1 = <b><sup>1</sup>/<sub>2</sub></b>
                                                                            <br><br><br>
                                                                            <b>a<sub>4</sub> - a<sub>3</sub></b> = <sup>3</sup>/<sub>2</sub> - 2 = <b><sup>1</sup>/<sub>2</sub></b>
                                                                            <br><br><br>
                                                                            <b>Para este caso <i>d</i> = <sup>1</sup>/<sub>2</sub></b>
                                                                            <br><br><br>&nbsp;
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    Conociendo la fórmula general de la sucesión, el término general lo encuentras así:
                                                                    <br><br>
                                                                    <div class="well" align="center">
                                                                        <font size="3">
                                                                        Siendo la fórmula general
                                                                        <br><b>a<sub>n</sub> = a<sub>1</sub> + (n – 1)d</b>
                                                                        <br><br>
                                                                        Reemplazamos los valores que conocemos por los términos de la fórmula general
                                                                        <br><br>
                                                                        a<sub>1</sub> = <sup>1</sup>/<sub>2</sub>
                                                                        <br><br>
                                                                        d = <sup>1</sup>/<sub>2</sub>
                                                                        <br><br>
                                                                        a<sub>n</sub> = <sup>1</sup>/<sub>2</sub> + (n-1)(<sup>1</sup>/<sub>2</sub>)
                                                                        <br><br>
                                                                        a<sub>n</sub> = <sup>1</sup>/<sub>2</sub> - <sup>1</sup>/<sub>2</sub>n - <sup>1</sup>/<sub>2</sub>
                                                                        <br><br>
                                                                        Asi obtenemos que, el término general para este ejercicio es:
                                                                        <br><br><b>a<sub>n</sub> = <sup>1</sup>/<sub>2</sub>n</b>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                Para encontrar el 6 termino de la sucesión realizaremos lo siguiente:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                        Colocamos los datos en el término general encontrado:
                                                                        <br><br>
                                                                        <b>a<sub>n</sub> = <sup>1</sup>/<sub>2</sub> n</b>
                                                                        <br><br>
                                                                        a<sub>9</sub> = <sup>1</sup>/<sub>2</sub>(6)
                                                                        <br><br>
                                                                        a<sub>9</sub> = 3
                                                                        <br><br>
                                                                        Por lo tanto, el valor para el término 6, es: <b>3</b>
                                                                    </font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Ejemplo4" class="animated col-lg-12" style="display: none;">
                                                        <div class="row col-lg-12">
                                                            <div class="col-lg-8">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        Escribe el término general y los cuatro primeros términos de una sucesión aritmética cuyo primer término <b>a<sub>1</sub></b>=5 y <b>d</b>=4
                                                                    </div>                                                  
                                                                </div>  
                                                                <br><br>
                                                                Lo primero que debemos hacer es asignar los valores que tenemos en la fórmula general que ya conocemos:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                        <b>
                                                                            a<sub>n</sub> = a<sub>1</sub> + (n − 1)d
                                                                            <br><br>
                                                                            a<sub>n</sub> = 5 + (n − 1)(4)
                                                                            <br><br>
                                                                            a<sub>n</sub> = 5 + 4n − 4
                                                                            <br><br>
                                                                            a<sub>n</sub> = 1 + 4n
                                                                        </b>
                                                                    </font>
                                                                </div>
                                                                Por lo que el término general es:
                                                                <br><br>
                                                                <div class="well" align="center">
                                                                    <font size="3">
                                                                        <b>
                                                                            a<sub>n</sub> = 1 + 4n
                                                                        </b>
                                                                    </font>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="panel panel-warning">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        En este tipo de ejercicios no es necesario realizar un despeje a la fórmula general, ni realizar otro tipo de operación para encontrar algun dato ya que conocemos la distancia y el primer valor de la sucesión.
                                                                        <br><br>
                                                                        Por lo cual, lo único que se realiza es sustituir los datos en la fórmula general, y así obtendremos el término general de nuestra sucesión.
                                                                    </div>
                                                                </div>
                                                                <br><br>
                                                                <div class="panel panel-info">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/brainstorm.png">&nbsp;&nbsp;<font size="4"><i><b>Comprende</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        Es importante entender que en todas las sucesiones aritméticas se puede encontrar una expresión que permita obtener cualquier término, sabiendo el lugar que ocupa y la distancia que existe entre términos.
                                                                        <br><br>
                                                                        El practicar constantemente te facilitara comprender y encontrar un termino general mas rapidamentes.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <br>
                                                                    Ahora encontremos los primeros 4 valores de la sucesión:
                                                                    <br><br>
                                                                    <div class="well" align="center">
                                                                        <font size="3">
                                                                            <table width="100%" border="0">
                                                                                <tr>
                                                                                    <td width="50%"><center><b>Primer Término</b></center>
                                                                                    <br>
                                                                                    Sustituimos el valor de "n":
                                                                                    <br><br>
                                                                                    a<sub>1</sub> = 1 + 4 (1)
                                                                                    <br><br>
                                                                                    a<sub>1</sub> = 1 + 4
                                                                                    <br><br>
                                                                                    a<sub>1</sub> = 5
                                                                                    </td>
                                                                                    <td width="50%"><center><b>Segundo Término</b></center>
                                                                                    <br>
                                                                                    Sustituimos el valor de "n":
                                                                                    <br><br>
                                                                                    a<sub>2</sub> = 1 + 4 (2)
                                                                                    <br><br>
                                                                                    a<sub>3</sub> = 1 + 8
                                                                                    <br><br>
                                                                                    a<sub>4</sub> = 9</td>
                                                                                </tr>
                                                                                <tr><td><br><br></td></tr>
                                                                                <tr>
                                                                                    <td width="50%"><center><b>Tercer Término</b></center>
                                                                                    <br>
                                                                                    Sustituimos el valor de "n":
                                                                                    <br><br>
                                                                                    a<sub>3</sub> = 1 + 4 (3)
                                                                                    <br><br>
                                                                                    a<sub>3</sub> = 1 + 12
                                                                                    <br><br>
                                                                                    a<sub>3</sub> = 13</td>
                                                                                    <td width="50%"><center><b>Cuarto Término</b></center>
                                                                                    <br>
                                                                                    Sustituimos el valor de "n":
                                                                                    <br><br>
                                                                                    a<sub>4</sub> = 1 + 4 (4)
                                                                                    <br><br>
                                                                                    a<sub>4</sub> = 1 + 16
                                                                                    <br><br>
                                                                                    a<sub>4</sub> = 7</td>
                                                                                </tr>
                                                                            </table>
                                                                        </font>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <br><br><br>
                                                                    <div class="panel panel-primary">      
                                                                        <div class="panel-body">
                                                                            Por lo que la sucesión es:
                                                                            <br><br>
                                                                            <div class="well" align="center">
                                                                                <font size="3">
                                                                                    <b>
                                                                                        5, 9, 13, 17,...
                                                                                    </b>
                                                                                </font>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div><!--cierre del ibox-content-->                                               
                                           </div><!--cierre del ibox-->
                                       </div><!--cierre de etiqueta div col-lg-12-->
                                    </p><!--cierre de etiqueta p, inicio de teoría-->
                                </div><!--cierre div col-lg-12, inicio de teoría-->
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
                                        <table width="100%" border="0">
                                            <tr>
                                                <td width="80%" style="text-align: center;">Ahora que ya aprendimos un poco sobre como obtener el término general de una sucesión, completa los siguientes ejemplos, arrastrando los elementos de la parte derecha a los espacios correspondientes en el ejercicio.</td>
                                                <td width="20%" style="text-align: center;"><button id="tour1-1" type="button" class="btn btn-primary btn-circle btn-lg" title="Recagar nuevo ejemplo" onclick="randomPractica()"><i class="fa fa-refresh"></i></button></td>
                                            </tr>
                                        </table>
                                    </p><!--cierre de etiqueta p, inicio de teoría-->
                                </div>
                            </div>
                            <br><br>
                            <div id="tour1-2" class="row col-lg-12">
                                <!--Ejemplo 1-->
                                <div id="ejemplo1" class="row col-lg-12" style="display: none;">
                                    <div class="col-lg-8">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                            </div>
                                            <div class="panel-body">
                                                <font size="3">
                                                    <center>
                                                        Encuentre el término general de la siguiente sucesión:
                                                        <br><br>
                                                        <img src="img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1.png" width="50%"/>
                                                    </center>
                                                </font>
                                            </div>                                                   
                                        </div>
                                        <p style="text-align: justify;">
                                            <center>
                                            <br><br>
                                            Primero identifiquemos el primer término y la distancia entre términos de la sucesión:
                                            <br><br>
                                            <table border="0">
                                                <tr>
                                                    <td>Primer Termino (a<sub>1</sub>):&nbsp;&nbsp;&nbsp;</td>
                                                    <td><div class="contenedor" id="primerTerminoE1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                                <tr><td><br></td></tr>
                                                <tr>
                                                    <td>Distancia (d): </td>
                                                    <td><div class="contenedor" id="distanciaE1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                            </table>
                                            <br><br>
                                            Ahora que hemos identificado los valores para el primer término y distancia, despejemos la fórmula para encontrar el término general:
                                            <br><br>
                                            <table border="0">
                                                <tr>
                                                    <td><font size="4">a<sub>n</sub> = </font>&nbsp;&nbsp;</td>
                                                    <td><div class="contenedor" id="12E1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td colspan="3"><font size="4">&nbsp;&nbsp;+ (n - 1 )(4)</font></td>
                                                </tr>
                                                <tr>
                                                    <td><font size="4">a<sub>n</sub> = </font></td>
                                                    <td><font size="4">-12 +</font></td>
                                                    <td><div class="contenedor" id="4nE1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td><font size="4">&nbsp;&nbsp;-</font>&nbsp;&nbsp;</td>
                                                    <td><div class="contenedor" id="4E1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                                <tr>
                                                    <td><font size="4">a<sub>n</sub> = </font></td>
                                                    <td><div class="contenedor" id="16E1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td colspan="3"><font size="4">+ 4n</font></td>
                                                </tr>
                                            </table>
                                            </center>
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row col-lg-12">
                                            <div id="compenentesPractica1" class="col-lg-12 alert alert-warning">
                                                <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                <br>
                                                <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                    <img id="pieza12" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/12.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza4n" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/4n.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza12x2" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/12x2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza4" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/4.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza16" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/16.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza4x2" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/4x2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                </div> 
                                            </div>
                                            <div id="ExitoPrac1" class="col-lg-12 alert alert-success" style="display: none;">
                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                <br>
                                                <p style="text-align: justify;">
                                                    Excelente, has resuelto de manera correcta la practica, por lo cual ahora sabes que el término general de nuestra sucesión es:
                                                    <br><br>
                                                    <center><font size="3"><b>a<sub>n</sub> = -16 + 4n</b></font></center>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="botonesPrac1" class="row col-lg-12">
                                            <center>
                                                <button type="button" class="btn btn-primary btn-rounded" onclick="ComprobarPractica1();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                <button type="button" class="btn btn-danger btn-rounded" onclick="ReestablecerPractica1(0);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                            </center>
                                        </div>
                                    </div>       
                                </div>
                                <!--Ejemplo 2-->
                                <div id="ejemplo2" class="row col-lg-12" style="display: none;">
                                    <div class="col-lg-8">
                                    <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                            </div>
                                            <div class="panel-body">
                                                <font size="3">
                                                    <center>
                                                        Encuentre el término general de la siguiente sucesión:
                                                        <br><br>
                                                        <img src="img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2.png" width="50%"/>
                                                    </center>
                                                </font>
                                            </div>                                                   
                                        </div>
                                        <p style="text-align: justify;">
                                            <center>
                                            <br><br>
                                            Primero identifiquemos el primer término y la distancia entre términos de la sucesión:
                                            <br><br>
                                            <table border="0">
                                                <tr>
                                                    <td>Primer Termino (a<sub>1</sub>):&nbsp;&nbsp;&nbsp;</td>
                                                    <td><div class="contenedor" id="primerTerminoE2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                                <tr><td><br></td></tr>
                                                <tr>
                                                    <td>Distancia (d): </td>
                                                    <td><div class="contenedor" id="distanciaE2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                            </table>
                                            <br><br>
                                            Ahora que hemos identificado los valores para el primer término y distancia, despejemos la fórmula para encontrar el término general:
                                            <br><br>
                                            <table border="0">
                                                <tr>
                                                    <td  style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td  style="text-align: center;"><font size="4"><sup>1</sup>/<sub>5</sub></font></td>
                                                    <td colspan="2"  style="text-align: center;"><font size="4">+ (n - 1)(&nbsp;&nbsp;</font></td>
                                                    <td colspan="2"><div class="contenedor" id="12E2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td><font size="4">&nbsp;&nbsp;)</font></td>
                                                </tr>
                                                <tr><td colspan="5">&nbsp;&nbsp;</td></tr>
                                                <tr>
                                                    <td  style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td><div class="contenedor" id="15E2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td style="text-align: center;"><font size="4">&nbsp;&nbsp;+&nbsp;&nbsp;</font></td>
                                                    <td><div class="contenedor" id="12nE2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td>&nbsp;&nbsp;</td>
                                                    <td><div class="contenedor" id="menosE2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td style="text-align: center;"><font size="4">&nbsp;&nbsp;<sup>1</sup>/<sub>2</sub></font></td>
                                                </tr>
                                                <tr><td colspan="5">&nbsp;&nbsp;</td></tr>
                                                <tr>
                                                    <td  style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td><div class="contenedor" id="310E2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td colspan="3"><font size="4">&nbsp;&nbsp;+ <sup>1</sup>/<sub>2</sub>n</font></td>
                                                </tr>
                                            </table>
                                            </center>
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row col-lg-12">
                                            <div id="compenentesPractica2" class="col-lg-12 alert alert-warning">
                                                <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                <br>
                                                <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                    <img id="pieza310E2" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/310.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza15E2" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/15.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza12x2E2" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/12x2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza12E2" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/12.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza12nE2" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/12n.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza15x2E2" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/15x2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="piezaMenosE2" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/menos.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                </div> 
                                            </div>
                                            <div id="ExitoPrac2" class="col-lg-12 alert alert-success" style="display: none;">
                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                <br>
                                                <p style="text-align: justify;">
                                                    Excelente, has resuelto de manera correcta la practica, por lo cual ahora sabes que el término general de nuestra sucesión es:
                                                    <br><br>
                                                    <center><font size="3"><b>a<sub>n</sub> = -<sup>3</sup>/<sub>10</sub> + <sup>1</sup>/<sub>2</sub>n</b></font></center>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="botonesPrac2" class="row col-lg-12">
                                            <center>
                                                <button type="button" class="btn btn-primary btn-rounded" onclick="ComprobarPractica2();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                <button type="button" class="btn btn-danger btn-rounded" onclick="ReestablecerPractica2(0);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                            </center>
                                        </div>
                                    </div>       
                                </div>
                                <!--Ejemplo 3-->
                                <div id="ejemplo3" class="row col-lg-12" style="display: none;">
                                    <div class="col-lg-8">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                            </div>
                                            <div class="panel-body">
                                                <font size="3">
                                                    Escribe el término general de una sucesión aritmética cuyo primer término <b>a1= 22</b> y la distancia <b>d= -4</b>
                                                </font>
                                            </div>                                                   
                                        </div>
                                        <p style="text-align: justify;">
                                            <center>
                                            <br>
                                            Como ya conocemos los valores para el primer término y distancia, despejemos la fórmula para encontrar el término general:
                                            <br><br>
                                            <table border="0">
                                                <tr>
                                                    <td style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td style="text-align: center;"><font size="4">22</font></td>
                                                    <td colspan="2"  style="text-align: center;"><font size="4">+ (n - 1)(&nbsp;</font></td>
                                                    <td><div class="contenedor" id="4E3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td><font size="4">&nbsp;)</font></td>
                                                </tr>
                                                <tr><td colspan="5">&nbsp;&nbsp;</td></tr>
                                                <tr>
                                                    <td style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td style="text-align: center;"><font size="4">22</font></td>
                                                    <td><div class="contenedor" id="menosE3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td>&nbsp;</td>
                                                    <td><div class="contenedor" id="4nE3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td>&nbsp;</td>
                                                    <td><div class="contenedor" id="masE3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td>&nbsp;</td>
                                                    <td><div class="contenedor" id="4x2E3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                                <tr><td colspan="5">&nbsp;&nbsp;</td></tr>
                                                <tr>
                                                    <td  style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td><div class="contenedor" id="26E3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td colspan="3"><font size="4">&nbsp;&nbsp;- 4n</font></td>
                                                </tr>
                                            </table>
                                            </center>
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row col-lg-12">
                                            <div id="compenentesPractica3" class="col-lg-12 alert alert-warning">
                                                <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                <br>
                                                <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                    <img id="pieza4x2E3" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/4x2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="piezaMenosE3" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/menos.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza26E3" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/26.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza4E3" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/4.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="piezaMasE3" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/mas.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza4nE3" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/4n.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                </div> 
                                            </div>
                                            <div id="ExitoPrac3" class="col-lg-12 alert alert-success" style="display: none;">
                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                <br>
                                                <p style="text-align: justify;">
                                                    Excelente, has resuelto de manera correcta la practica, por lo cual ahora sabes que el término general de nuestra sucesión es:
                                                    <br><br>
                                                    <center><font size="3"><b>a<sub>n</sub> = 26 - 4n</b></font></center>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="botonesPrac3" class="row col-lg-12">
                                            <center>
                                                <button type="button" class="btn btn-primary btn-rounded" onclick="ComprobarPractica3();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                <button type="button" class="btn btn-danger btn-rounded" onclick="ReestablecerPractica3(0);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                            </center>
                                        </div>
                                    </div>       
                                </div>
                                <!--Ejemplo 4-->
                                <div id="ejemplo4" class="row col-lg-12" style="display: none;">
                                    <div class="col-lg-8">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                            </div>
                                            <div class="panel-body">
                                                <font size="3">
                                                    Escribe el término general de una sucesión aritmética cuyo primer término <b>a1= 2.50</b> y la distancia <b>d= -4.75</b>
                                                </font>
                                            </div>                                                   
                                        </div>
                                        <p style="text-align: justify;">
                                            <center>
                                            <br>
                                            Como ya conocemos los valores para el primer término y distancia, despejemos la fórmula para encontrar el término general:
                                            <br><br>
                                            <table border="0">
                                                <tr>
                                                    <td style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td><div class="contenedor" id="250E4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td colspan="2"  style="text-align: center;"><font size="4">+ (n - 1)</font></td>
                                                    <td  colspan="2" style="text-align: center;"><font size="4">( -4.75 )</font></td>
                                                </tr>
                                                <tr><td colspan="5">&nbsp;&nbsp;</td></tr>
                                                <tr>
                                                    <td style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td style="text-align: center;"><font size="4">2.50</font></td>
                                                    <td><div class="contenedor" id="menosE4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td>&nbsp;</td>
                                                    <td><div class="contenedor" id="475nE4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td>&nbsp;</td>
                                                    <td><div class="contenedor" id="masE4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td>&nbsp;</td>
                                                    <td><div class="contenedor" id="475E4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                                <tr><td colspan="5">&nbsp;&nbsp;</td></tr>
                                                <tr>
                                                    <td  style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td><div class="contenedor" id="725E4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td><font size="4">&nbsp;&nbsp;-&nbsp;&nbsp;</font></td>
                                                    <td colspan="2"><div class="contenedor" id="475nx2E4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                            </table>
                                            </center>
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row col-lg-12">
                                            <div id="compenentesPractica4" class="col-lg-12 alert alert-warning">
                                                <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                <br>
                                                <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                    <img id="pieza725E4" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/725.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="piezaMenosE4" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/menos.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza475nx2E4" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/475nx2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza250E4" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/250.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="piezaMasE4" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/mas.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza475E4" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/475.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza475nE4" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/475n.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                </div> 
                                            </div>
                                            <div id="ExitoPrac4" class="col-lg-12 alert alert-success" style="display: none;">
                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                <br>
                                                <p style="text-align: justify;">
                                                    Excelente, has resuelto de manera correcta la practica, por lo cual ahora sabes que el término general de nuestra sucesión es:
                                                    <br><br>
                                                    <center><font size="3"><b>a<sub>n</sub> = 7.25 - 4.75n</b></font></center>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="botonesPrac4" class="row col-lg-12">
                                            <center>
                                                <button type="button" class="btn btn-primary btn-rounded" onclick="ComprobarPractica4();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                <button type="button" class="btn btn-danger btn-rounded" onclick="ReestablecerPractica4(0);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <!--Ejemplo 5-->
                                <div id="ejemplo5" class="row col-lg-12" style="display: none;">
                                    <div class="col-lg-8">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                            </div>
                                            <div class="panel-body">
                                                <font size="3">
                                                    <center>
                                                        Encuentre el término general de la siguiente sucesión:
                                                        <br><br>
                                                        <img src="img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5.png" width="50%"/>
                                                    </center>
                                                </font>
                                            </div>                                                   
                                        </div>
                                        <p style="text-align: justify;">
                                            <center>
                                            <br><br>
                                            Primero identifiquemos el primer término y la distancia entre términos de la sucesión:
                                            <br><br>
                                            <table border="0">
                                                <tr>
                                                    <td>Primer Termino (a<sub>1</sub>):&nbsp;&nbsp;&nbsp;</td>
                                                    <td><div class="contenedor" id="primerTerminoE5" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                                <tr><td><br></td></tr>
                                                <tr>
                                                    <td>Distancia (d): </td>
                                                    <td><div class="contenedor" id="distanciaE5" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                            </table>
                                            <br><br>
                                            Ahora que hemos identificado los valores para el primer término y distancia, despejemos la fórmula para encontrar el término general:
                                            <br><br>
                                            <table border="0">
                                                <tr>
                                                    <td style="text-align: center;"><font size="4">a<sub>n</sub> = </font></td>
                                                    <td style="text-align: center;"><font size="4">- <sup>1</sup>/<sub>5</sub></font></td>
                                                    <td colspan="2" style="text-align: center;"><font size="4">+ (n - 1)(&nbsp;</font></td>
                                                    <td><div class="contenedor" id="35E5" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td><font size="4">&nbsp;)</font></td>
                                                </tr>
                                                <tr>
                                                    <td><font size="4">a<sub>n</sub> = </font></td>
                                                    <td><font size="4">- <sup>1</sup>/<sub>5</sub></font></td>
                                                    <td><font size="4">&nbsp;&nbsp;-&nbsp;&nbsp;</font></td>
                                                    <td><div class="contenedor" id="35nE5" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td><font size="4" style="text-align: center;">&nbsp;&nbsp;&nbsp;+</font>&nbsp;&nbsp;</td>
                                                    <td><div class="contenedor" id="35pE5" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                </tr>
                                                <tr>
                                                    <td><font size="4">a<sub>n</sub> = </font></td>
                                                    <td><div class="contenedor" id="25E5" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    <td colspan="3"><font size="4">- <sup>3</sup>/<sub>5</sub>n</font></td>
                                                </tr>
                                            </table>
                                            </center>
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row col-lg-12">
                                            <div id="compenentesPractica5" class="col-lg-12 alert alert-warning">
                                                <center><img src="img/iconos/generales/pencil-case.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Elementos</b></i></font></center>
                                                <br>
                                                <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                                    <img id="pieza35pE5" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35p.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza15E5" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/15.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza35E5" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza25E5" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/25.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza35nE5" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35n.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza35x2E5" src="{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35x2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                </div> 
                                            </div>
                                            <div id="ExitoPrac5" class="col-lg-12 alert alert-success" style="display: none;">
                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                <br>
                                                <p style="text-align: justify;">
                                                    Excelente, has resuelto de manera correcta la practica, por lo cual ahora sabes que el término general de nuestra sucesión es:
                                                    <br><br>
                                                    <center><font size="3"><b>a<sub>n</sub> = <sup>2</sup>/<sub>5</sub> - <sup>3</sup>/<sub>5</sub>n</b></font></center>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="botonesPrac5" class="row col-lg-12">
                                            <center>
                                                <button type="button" class="btn btn-primary btn-rounded" onclick="ComprobarPractica5();"><i class="fa fa-check"></i>&nbsp;Comprobar</button>
                                                <button type="button" class="btn btn-danger btn-rounded" onclick="ReestablecerPractica5(0);"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                            </center>
                                        </div>
                                    </div>
                                </div><!--cierre de ejemplos para la practica-->
                            </div>
                            <br>
                        </div>
                    </div>
                </div><!--cierre de la segunda pestaña del acordeon....-->
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
                        <!--inicia la informacion para el panel de detalles...resolucion de ejercicios-->
                            <div class ="row">
                                <div class="col-lg-12">
                                    <p style="text-align: justify;">
                                        Para conocer el Término General de la sucesión ingresa el primer término y la distancia entre términos.
                                    </p><!--cierre de etiqueta p, inicio de teoría-->
                                    <br>
                                    <div class="col-lg-7">
                                        <div class="col-lg-12">
                                            <div id="tour2-1" class="col-lg-5">
                                                <div class="alert alert-warning">
                                                    <div class="form-group">
                                                       <table border="0">
                                                            <tr>
                                                                <td rowspan="3">Tipo de dato:</td>
                                                                <td><input type="radio" id="enteroSucesion" value="2" name="radioTipo" onclick="TipoDato(this)" checked>
                                                                    <label for="radioTipo2">Enteros.</label></td>
                                                            </tr>
                                                            <tr><td><br></td></tr>
                                                            <tr>
                                                                <td><input type="radio" id="fraccionSucesion" value="3" name="radioTipo" onclick="TipoDato(this)">
                                                                <label for="radioTipo3">Fraccinario.</label></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-lg-1"></div>
                                            <div id="tour2-2" class="col-lg-6">
                                                <div class="alert alert-warning">
                                                    <div class="form-group">    
                                                        <table id="tableEnteros" border="0">
                                                            <tr>
                                                                <td width="60%"><b>Primer Termino (a<sub>1</sub>):</b>&nbsp;&nbsp;&nbsp;</td>
                                                                <td width="40%"><input class="form-control" type="number" id="primerTerminoRE" name="primerTerminoRE" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                            <tr><td><br></td></tr>
                                                            <tr>
                                                                <td width="60%"><b>Distancia (d): </b></td>
                                                                <td width="40%"><input class="form-control" type="number" id="distanciaRE" name="distanciaRE" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                        </table>
                                                        <table id="tableFraccionaria" border="0"  style="display: none;">
                                                            <tr>
                                                                <td rowspan="2"><b>Primer Termino (a<sub>1</sub>):</b>&nbsp;&nbsp;&nbsp;</td>
                                                                <td rowspan="2"><input class="form-control" type="number" id="enteroFraccionE" name="enteroFraccionE" style="border-color: #1bb394;"></td>
                                                                <td><input class="form-control" type="number" id="numeradorFraccionE" name="numeradorFraccionE" style="border-color: #1bb394;"></td>

                                                            </tr>
                                                            <tr>
                                                                <td><input class="form-control" type="number" id="denominadorFraccionE" name="denominadorFraccionE" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                            <tr><td>&nbsp;</td></tr>
                                                            <tr>
                                                                <td rowspan="2" width="50%"><b>Distancia (d): </b></td>
                                                                 <td rowspan="2" width="25%"><input class="form-control" type="number" id="enteroFraccionD" name="enteroFraccionD" style="border-color: #1bb394;"></td>
                                                                <td width="25%"><input class="form-control" type="number" id="numeradorFraccionD" name="numeradorFraccionD" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%"><input class="form-control" type="number" id="denominadorFraccionD" name="denominadorFraccionD" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div id="tour2-3" class="col-xs-12">
                                                <center>
                                                    <table border="0">
                                                        <tr>
                                                            <td><button type="button" class="btn btn-primary btn-rounded" onclick="generarOperacion();"><i class="fa fa-check"></i>&nbsp;Generar</button></td>
                                                            <td>&nbsp;</td>
                                                            <td><button type="button" class="btn btn-danger btn-rounded" onclick="reestablecerOperacion();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button></td>
                                                        </tr>
                                                    </table>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tour2-4" class="col-lg-5">
                                        <div id="alertCargando" class="col-lg-12 alert alert-success" style="display: none;">
                                            <p style="text-align: justify;">
                                                <center><img src="img/iconos/generales/settings.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Resultado</b></i></font></center>
                                                <br><br>
                                                <div id="Cargando">
                                                    
                                                </div>
                                                <div class="panel panel-success" style="display: none;">
                                                    <div class="panel-heading">
                                                        Resultado
                                                    </div>
                                                    <div id="Resultado" class="panel-body">
                                                        
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--cierre del div que abre el panel de detalles...resolucion de ejercicios-->
                        </div>
                    </div>
                </div><!--cierre de la segunda pestaña del acordeon....-->
            </div><!--cierre con el class panel -- acordion -->
        </div><!--cierre con el class panel -- body -->
    </div><!--cierre con el class ibox -- content -->
</div><!--cierre con el primer div -->
<script>

var datoRadio="2";
var enteroRestaGlobal=0;
var numeradorRestaGlobal=0;
var denominadorRestaGlobal=0;
var enteroSumaGlobal=0;
var numeradorSumaGlobal=0;
var denominadorSumaGlobal=0;
var nuevoAn=0;
var nuevoAd=0;
function randomPractica()
{
    var inferior = 1; 
    var superior = 5;
    var numPosibilidades = (superior + 1) - inferior; 
    var aleat = Math.random() * numPosibilidades; 
    aleat = Math.floor(aleat); 
    aleat = (inferior + aleat);
    switch(aleat)
    {
        case 1:
        {
            $("#ejemplo2").fadeOut(0);
            $("#ejemplo3").fadeOut(0);
            $("#ejemplo4").fadeOut(0);
            $("#ejemplo5").fadeOut(0);
            $("#ExitoPrac1").fadeOut(0);
            $("#compenentesPractica1").fadeIn(300);
            $("#botonesPrac1").fadeIn(300);
            $("#ejemplo1").fadeIn(300);
            ReestablecerPractica1(1);
        }break;
        case 2:
        {
            $("#ejemplo1").fadeOut(0);
            $("#ejemplo3").fadeOut(0);
            $("#ejemplo4").fadeOut(0);
            $("#ejemplo5").fadeOut(0);
            $("#ExitoPrac2").fadeOut(0);
            $("#compenentesPractica2").fadeIn(300);
            $("#botonesPrac2").fadeIn(300);
            $("#ejemplo2").fadeIn(300);
            ReestablecerPractica2(1);
        }break;
        case 3:
        {
            $("#ejemplo2").fadeOut(0);
            $("#ejemplo1").fadeOut(0);
            $("#ejemplo4").fadeOut(0);
            $("#ejemplo5").fadeOut(0);
            $("#ExitoPrac3").fadeOut(0);
            $("#compenentesPractica3").fadeIn(300);
            $("#botonesPrac3").fadeIn(300);
            $("#ejemplo3").fadeIn(300);
            ReestablecerPractica3(1);
        }break;
        case 4:
        {
            $("#ejemplo2").fadeOut(0);
            $("#ejemplo3").fadeOut(0);
            $("#ejemplo1").fadeOut(0);
            $("#ejemplo5").fadeOut(0);
            $("#ExitoPrac4").fadeOut(0);
            $("#compenentesPractica4").fadeIn(300);
            $("#botonesPrac4").fadeIn(300);
            $("#ejemplo4").fadeIn(300);
            ReestablecerPractica4(1);
        }break;
        case 5:
        {
            $("#ejemplo2").fadeOut(0);
            $("#ejemplo3").fadeOut(0);
            $("#ejemplo4").fadeOut(0);
            $("#ejemplo1").fadeOut(0);
            $("#ExitoPrac5").fadeOut(0);
            $("#compenentesPractica5").fadeIn(300);
            $("#botonesPrac5").fadeIn(300);
            $("#ejemplo5").fadeIn(300);
            ReestablecerPractica5(1);
        }break;
    }
    
}
randomPractica();
function cambioEjemplo(opc)
{
    switch(opc)
    {
        case 1:
        {
            $("#Ejemplo2").fadeOut(0);
            $("#Ejemplo3").fadeOut(0);
            $("#Ejemplo4").fadeOut(0);
            $("#Ejemplo1").fadeIn(300);
            /*$('#btnE1').removeAttr('class').attr('class','');
            $('#btnE1').addClass('btn btn-primary');
            $('#btnE2').removeAttr('class').attr('class','');
            $('#btnE2').addClass('btn btn-white');
            $('#btnE3').removeAttr('class').attr('class','');
            $('#btnE3').addClass('btn btn-white');
            $('#btnE4').removeAttr('class').attr('class','');
            $('#btnE4').addClass('btn btn-white');*/
            $('#Ejemplo1').removeAttr('class').attr('class', '');
            $('#Ejemplo1').addClass('animated');
            $('#Ejemplo1').addClass('fadeInRightBig');
        }break;
        case 2:
        {
            $("#Ejemplo1").fadeOut(0);
            $("#Ejemplo3").fadeOut(0);
            $("#Ejemplo4").fadeOut(0);
            $("#Ejemplo2").fadeIn(300);
            /*$('#btnE2').removeAttr('class').attr('class','');
            $('#btnE2').addClass('btn btn-primary');
            $('#btnE1').removeAttr('class').attr('class','');
            $('#btnE1').addClass('btn btn-white');
            $('#btnE3').removeAttr('class').attr('class','');
            $('#btnE3').addClass('btn btn-white');
            $('#btnE4').removeAttr('class').attr('class','');
            $('#btnE4').addClass('btn btn-white');*/
            $('#Ejemplo2').removeAttr('class').attr('class', '');
            $('#Ejemplo2').addClass('animated');
            $('#Ejemplo2').addClass('fadeInRightBig');
        }break;
        case 3:
        {
            $("#Ejemplo1").fadeOut(0);
            $("#Ejemplo2").fadeOut(0);
            $("#Ejemplo4").fadeOut(0);
            $("#Ejemplo3").fadeIn(300);
            /*$('#btnE3').removeAttr('class').attr('class','');
            $('#btnE3').addClass('btn btn-primary');
            $('#btnE2').removeAttr('class').attr('class','');
            $('#btnE2').addClass('btn btn-white');
            $('#btnE1').removeAttr('class').attr('class','');
            $('#btnE1').addClass('btn btn-white');
            $('#btnE4').removeAttr('class').attr('class','');
            $('#btnE4').addClass('btn btn-white animation_select');*/
            $('#Ejemplo3').removeAttr('class').attr('class', '');
            $('#Ejemplo3').addClass('animated');
            $('#Ejemplo3').addClass('fadeInRightBig');
        }break;
        case 4:
        {
            $("#Ejemplo1").fadeOut(0);
            $("#Ejemplo2").fadeOut(0);
            $("#Ejemplo3").fadeOut(0);
            $("#Ejemplo4").fadeIn(300);
            /*$('#btnE4').removeAttr('class').attr('class','');
            $('#btnE4').addClass('btn btn-primary animation_select');
            $('#btnE2').removeAttr('class').attr('class','');
            $('#btnE2').addClass('btn btn-white animation_select');
            $('#btnE3').removeAttr('class').attr('class','');
            $('#btnE3').addClass('btn btn-white animation_select');
            $('#btnE1').removeAttr('class').attr('class','');
            $('#btnE1').addClass('btn btn-white animation_select');*/
            $('#Ejemplo4').removeAttr('class').attr('class', '');
            $('#Ejemplo4').addClass('animated');
            $('#Ejemplo4').addClass('fadeInRightBig');
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
function ComprobarPractica1()
{
    if((document.getElementById('pieza4n').parentNode.id=='4nE1') &&
            ((document.getElementById('pieza12').parentNode.id=='primerTerminoE1') ||
            (document.getElementById('pieza12x2').parentNode.id=='primerTerminoE1')) &&
            (document.getElementById('pieza16').parentNode.id=='16E1') &&
            ((document.getElementById('pieza12').parentNode.id=='12E1') ||
            (document.getElementById('pieza12x2').parentNode.id=='12E1')) &&
            ((document.getElementById('pieza4').parentNode.id=='distanciaE1') ||
            (document.getElementById('pieza4x2').parentNode.id=='distanciaE1')) &&
            ((document.getElementById('pieza4').parentNode.id=='4E1') ||
            (document.getElementById('pieza4x2').parentNode.id=='4E1')))
            {
                swal("Excelente!", "Has despejado la fórmula correctamente", "success");
                $("#compenentesPractica1").fadeOut(0);
                $("#botonesPrac1").fadeOut(0);
                $("#ExitoPrac1").fadeIn(300);

            }
            else
            {
                swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                ReestablecerPractica1(1);
            }
}
function ReestablecerPractica1(opc){
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
            $("#compenentesPractica1").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                    "<div id='contenedorPiezasE1' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                        "<img id='pieza4n' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/4n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza16' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/16.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza12x2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/12x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza4x2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/4x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza12' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/12.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/4.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                    "</div>");
            //Limpiando espacios libres...
            $("#primerTerminoE1").html("");
            $("#distanciaE1").html("");
            $("#12E1").html("");
            $("#4nE1").html("");
            $("#4E1").html("");
            $("#16E1").html("");
         });//cierre del swal
    }
    else
    {
        $("#compenentesPractica1").html(""+
        "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
        "<br>"+
            "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                "<img id='pieza12' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/12.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza4n' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/4n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza12x2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/12x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/4.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza16' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/16.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza4x2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica1/4x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
            "</div>");
        //Limpiando espacios libres...
        $("#primerTerminoE1").html("");
        $("#distanciaE1").html("");
        $("#12E1").html("");
        $("#4nE1").html("");
        $("#4E1").html("");
        $("#16E1").html("");
    }
}
function ComprobarPractica2()
{
    if((document.getElementById('pieza310E2').parentNode.id=='310E2') &&
            ((document.getElementById('pieza15E2').parentNode.id=='primerTerminoE2') ||
            (document.getElementById('pieza15x2E2').parentNode.id=='primerTerminoE2')) &&
            (document.getElementById('pieza12nE2').parentNode.id=='12nE2') &&
            ((document.getElementById('pieza12E2').parentNode.id=='distanciaE2') ||
            (document.getElementById('pieza12x2E2').parentNode.id=='distanciaE2')) &&
            ((document.getElementById('pieza15E2').parentNode.id=='15E2') ||
            (document.getElementById('pieza15x2E2').parentNode.id=='15E2')) &&
            ((document.getElementById('pieza12E2').parentNode.id=='12E2') ||
            (document.getElementById('pieza12x2E2').parentNode.id=='12E2'))&&
            (document.getElementById('piezaMenosE2').parentNode.id=='menosE2'))
            {
                swal("Excelente!", "Has despejado la fórmula correctamente", "success");
                $("#compenentesPractica2").fadeOut(0);
                $("#botonesPrac2").fadeOut(0);
                $("#ExitoPrac2").fadeIn(300);

            }
            else
            {
                swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                ReestablecerPractica2(1);
            }
}
function ReestablecerPractica2(opc){
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
            $("#compenentesPractica2").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                    "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                        "<img id='pieza15E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/15.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza12E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/12.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza12x2E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/12x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza15x2E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/15x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza12nE2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/12n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='piezaMenosE2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/menos.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza310E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/310.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                    "</div>");
            //Limpiando espacios libres...
            $("#primerTerminoE2").html("");
            $("#distanciaE2").html("");
            $("#12E2").html("");
            $("#15E2").html("");
            $("#12nE2").html("");
            $("#menosE2").html("");
            $("#310E2").html("");
         });//cierre del swal
    }
    else
    {
        $("#compenentesPractica2").html(""+
        "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
        "<br>"+
            "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                "<img id='pieza15E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/15.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza12E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/12.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza12x2E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/12x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza15x2E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/15x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza12nE2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/12n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='piezaMenosE2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/menos.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<img id='pieza310E2' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica2/310.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
            "</div>");
        //Limpiando espacios libres...
        $("#primerTerminoE2").html("");
        $("#distanciaE2").html("");
        $("#12E2").html("");
        $("#15E2").html("");
        $("#12nE2").html("");
        $("#menosE2").html("");
        $("#310E2").html("");
    }
}
function ComprobarPractica3()
{
    if((document.getElementById('pieza4E3').parentNode.id=='4E3') &&
            (document.getElementById('piezaMenosE3').parentNode.id=='menosE3') &&
            (document.getElementById('piezaMasE3').parentNode.id=='masE3') &&
            (document.getElementById('pieza4x2E3').parentNode.id=='4x2E3') &&
            (document.getElementById('pieza26E3').parentNode.id=='26E3') &&
            (document.getElementById('pieza4nE3').parentNode.id=='4nE3'))
            {
                swal("Excelente!", "Has despejado la fórmula correctamente", "success");
                $("#compenentesPractica3").fadeOut(0);
                $("#botonesPrac3").fadeOut(0);
                $("#ExitoPrac3").fadeIn(300);

            }
            else
            {
                swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                ReestablecerPractica3(1);
            }
}
function ReestablecerPractica3(opc){
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
            $("#compenentesPractica3").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                    "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                        "<img id='pieza4x2E3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/4x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='piezaMenosE3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/menos.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza26E3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/26.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza4E3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/4.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='piezaMasE3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/mas.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza4nE3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/4n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                    "</div>");
            //Limpiando espacios libres...
            $("#4E3").html("");
            $("#menosE3").html("");
            $("#4nE3").html("");
            $("#masE3").html("");
            $("#4x2E3").html("");
            $("#26E3").html("");
         });//cierre del swal
    }
    else
    {
        $("#compenentesPractica3").html(""+
        "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
        "<br>"+
            "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                "<img id='pieza4x2E3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/4x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='piezaMenosE3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/menos.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza26E3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/26.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza4E3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/4.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='piezaMasE3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/mas.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza4nE3' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica3/4n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
            "</div>");
        //Limpiando espacios libres...
        $("#4E3").html("");
        $("#menosE3").html("");
        $("#4nE3").html("");
        $("#masE3").html("");
        $("#4x2E3").html("");
        $("#26E3").html("");
    }
}
function ComprobarPractica4()
{
    if((document.getElementById('pieza725E4').parentNode.id=='725E4') &&
            (document.getElementById('piezaMenosE4').parentNode.id=='menosE4') &&
            (document.getElementById('pieza250E4').parentNode.id=='250E4') &&
            (document.getElementById('piezaMasE4').parentNode.id=='masE4') &&
            (document.getElementById('pieza475E4').parentNode.id=='475E4') &&
            ((document.getElementById('pieza475nE4').parentNode.id=='475nE4') ||
            (document.getElementById('pieza475nE4').parentNode.id=='475nx2E4')) &&
            ((document.getElementById('pieza475nx2E4').parentNode.id=='475nE4') ||
            (document.getElementById('pieza475nx2E4').parentNode.id=='475nx2E4')))
            {
                swal("Excelente!", "Has despejado la fórmula correctamente", "success");
                $("#compenentesPractica4").fadeOut(0);
                $("#botonesPrac4").fadeOut(0);
                $("#ExitoPrac4").fadeIn(300);

            }
            else
            {
                swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                ReestablecerPractica4(1);
            }
}
function ReestablecerPractica4(opc){
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
            $("#compenentesPractica4").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                    "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                        "<img id='pieza725E4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/725.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='piezaMenosE4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/menos.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza475nx2E4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/475nx2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza250E4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/250.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='piezaMasE4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/mas.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza475E4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/475.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza475nE4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/475n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                    "</div>");
            //Limpiando espacios libres...
            $("#250E4").html("");
            $("#menosE4").html("");
            $("#475nE4").html("");
            $("#masE4").html("");
            $("#475E4").html("");
            $("#725E4").html("");
            $("#475nx2E4").html("");
         });//cierre del swal
    }
    else
    {
        $("#compenentesPractica4").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                    "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                        "<img id='pieza725E4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/725.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='piezaMenosE4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/menos.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza475nx2E4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/475nx2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza250E4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/250.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='piezaMasE4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/mas.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza475E4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/475.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza475nE4' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica4/475n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                    "</div>");
            //Limpiando espacios libres...
            $("#250E4").html("");
            $("#menosE4").html("");
            $("#475nE4").html("");
            $("#masE4").html("");
            $("#475E4").html("");
            $("#725E4").html("");
            $("#475nx2E4").html("");
    }
}
function ComprobarPractica5()
{
    if((document.getElementById('pieza35pE5').parentNode.id=='35pE5') &&
            (document.getElementById('pieza15E5').parentNode.id=='primerTerminoE5') &&
            (document.getElementById('pieza25E5').parentNode.id=='25E5') &&
            (document.getElementById('pieza35nE5').parentNode.id=='35nE5') &&
            ((document.getElementById('pieza35E5').parentNode.id=='35E5') ||
            (document.getElementById('pieza35E5').parentNode.id=='distanciaE5')) &&
            ((document.getElementById('pieza35x2E5').parentNode.id=='35E5') ||
            (document.getElementById('pieza35x2E5').parentNode.id=='distanciaE5')))
            {
                swal("Excelente!", "Has despejado la fórmula correctamente", "success");
                $("#compenentesPractica5").fadeOut(0);
                $("#botonesPrac5").fadeOut(0);
                $("#ExitoPrac5").fadeIn(300);

            }
            else
            {
                swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
                ReestablecerPractica5(1);
            }
}
function ReestablecerPractica5(opc){
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
            $("#compenentesPractica5").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                    "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                        "<img id='pieza35pE5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35p.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza15E5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/15.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza35E5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza25E5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/25.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza35nE5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza35x2E5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                    "</div>");
            //Limpiando espacios libres...
            $("#primerTerminoE5").html("");
            $("#distanciaE5").html("");
            $("#35E5").html("");
            $("#35nE5").html("");
            $("#35pE5").html("");
            $("#25E5").html("");
         });//cierre del swal
    }
    else
    {
        $("#compenentesPractica5").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                    "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                        "<img id='pieza35pE5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35p.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza15E5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/15.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza35E5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza25E5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/25.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza35nE5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35n.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza35x2E5' src='{{asset('img/iconos/sucesiones/aritmeticas/terminoGeneral/practica5/35x2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                    "</div>");
            //Limpiando espacios libres...
            $("#primerTerminoE5").html("");
            $("#distanciaE5").html("");
            $("#35E5").html("");
            $("#35nE5").html("");
            $("#35pE5").html("");
            $("#25E5").html("");
    }
}
function TipoDato(objeto){
    datoRadio=objeto.value;
    if (objeto.value=="2") {
        //alert("Entero");
        $("#tableFraccionaria").fadeOut(0);
        $("#tableEnteros").fadeIn(300);
        //$("#primerTerminoRE").value="";
        document.getElementById("primerTerminoRE").value="";
        document.getElementById("distanciaRE").value="";
        //$("#distanciaRE").value="";
        $("#alertCargando").removeClass("col-lg-12 alert alert-danger");
        $("#alertCargando").addClass("col-lg-12 alert alert-success");
        $("#Cargando").html(""+
            "<center><font size='2'><label id='cargando'><i><b>Analizando datos, por favor espere</b></i></label></font></center>"+
                "<div class='spiner-example'>"+
                    "<div class='sk-spinner sk-spinner-three-bounce'>"+
                        "<div class='sk-bounce1'></div>"+
                        "<div class='sk-bounce2'></div>"+
                        "<div class='sk-bounce3'></div>"+
                    "</div>"+
                "</div>");
    }
    if (objeto.value=="3") {
        //alert("Fraccinario");
        $("#tableEnteros").fadeOut(0);
        $("#tableFraccionaria").fadeIn(300);
        //$("#enteroFraccionE").value="";
        document.getElementById("enteroFraccionE").value="";
        //$("#numeradorFraccionE").value="";
        document.getElementById("numeradorFraccionE").value="";
        //$("#denominadorFraccionE").value="";
        document.getElementById("denominadorFraccionE").value="";
        //$("#numeradorFraccionD").value="";
        document.getElementById("numeradorFraccionD").value="";
        //$("#enteroFraccionD").value="";
        document.getElementById("enteroFraccionD").value="";
        //$("#numeradorFraccionD").value="";
        document.getElementById("denominadorFraccionD").value="";
        $("#alertCargando").removeClass("col-lg-12 alert alert-danger");
        $("#alertCargando").addClass("col-lg-12 alert alert-success");
        $("#Cargando").html(""+
            "<center><font size='2'><label id='cargando'><i><b>Analizando datos, por favor espere</b></i></label></font></center>"+
                "<div class='spiner-example'>"+
                    "<div class='sk-spinner sk-spinner-three-bounce'>"+
                        "<div class='sk-bounce1'></div>"+
                        "<div class='sk-bounce2'></div>"+
                        "<div class='sk-bounce3'></div>"+
                    "</div>"+
                "</div>");   
    }
}
function generarOperacion(){
    console.log(datoRadio);
    $("#alertCargando").fadeIn(300);
    $("#alertCargando").removeClass("col-lg-12 alert alert-danger");
    $("#alertCargando").addClass("col-lg-12 alert alert-success");
    $("#Cargando").html(""+
        "<center><font size='2'><label id='cargando'><i><b>Analizando datos, por favor espere</b></i></label></font></center>"+
            "<div class='spiner-example'>"+
                "<div class='sk-spinner sk-spinner-three-bounce'>"+
                    "<div class='sk-bounce1'></div>"+
                    "<div class='sk-bounce2'></div>"+
                    "<div class='sk-bounce3'></div>"+
                "</div>"+
            "</div>");
    setTimeout(function(){generarOperacion2()},1000);
}
function generarOperacion2()
{
    if (datoRadio=="2") {
        //realiza proceso de numeros enteros
        var pt=document.getElementById("primerTerminoRE").value;
        var dt=document.getElementById("distanciaRE").value;
        if (pt=="" || dt=="") {
           //toastr.error("Completa los campos antes de continuar...","Alto");
           $("#alertCargando").removeClass("col-lg-12 alert alert-success");
           $("#alertCargando").addClass("col-lg-12 alert alert-danger");
           $("#Cargando").html(""+
            "<center><font size='2'><label id='cargando'><i><b>Datos erroneos, por favor verifique la información</b></i></label></font>"+
                "<br><img src='img/iconos/generales/cancel-bold.png'/></center>");
        }
        else
        {
            //desarrollo del término general...
            $("#Cargando").html("<font size='3'><center>a<sub>n</sub> = a<sub>1</sub> + (n - 1)(d) </font>"+
                "<br><br><b>Sustituimos los datos en la posición que ocupan dentro de la fórmula general</b>"+
                "<br><br><font size='3'>a<sub>n</sub> = "+pt+" + (n - 1)("+dt+")</center></font>");
            pt=parseFloat(pt);
            dt=parseFloat(dt);
            var nuevaDt;
            var nuevoEntero;
            //distancia positivo
            if (dt>0) {
                nuevaDt=1*dt;
                $("#Cargando").append("<br><font size='3'><center>a<sub>n</sub> = "+pt+" + "+dt+"n - "+nuevaDt+"</center></font>");
                nuevoEntero=pt - nuevaDt;
                nuevoEntero.toFixed(2);
                if (nuevoEntero==0) {
                    $("#Cargando").append("<br><font size='3'><center>a<sub>n</sub> = "+dt+"n</center></font>");
                    $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+dt+"n</b></h3><center>");
                }
                else
                {
                    $("#Cargando").append("<br><font size='3'><center>a<sub>n</sub> = "+nuevoEntero+" + "+dt+"n</center></font>");
                    $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEntero+" + "+dt+"n</b></h3><center>");
                }
            }
            else{
                //distancia negativo...
                dt=dt*-1;
                nuevaDt=1*dt;
                $("#Cargando").append("<br><font size='3'><center>a<sub>n</sub> = "+pt+" - "+dt+"n + "+nuevaDt+"<center></font>");
                nuevoEntero=pt + nuevaDt;
                if (nuevoEntero==0) {
                    $("#Cargando").append("<br><font size='3'><center>a<sub>n</sub> = "+dt+"n<center></font>");
                    $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b></b>a<sub>n</sub> = "+dt+"n</b></font><center>");
                }
                else
                {
                    $("#Cargando").append("<br><font size='3'><center>a<sub>n</sub> = "+nuevoEntero+" - "+dt+"n<center></font>");
                    $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEntero+" - "+dt+"n</b></font><center>");
                }
            }            
            //$("#Cargando").fadeOut(0);
            //$("#Resultado").fadeIn(300);
        }
    }
    else
    {
        var paso1PT=0;
        var paso2PT=0;
        var paso1D=0;
        var paso2D=0;
        //realiza proceso para fraccionarios
        var efe=document.getElementById("enteroFraccionE").value;
        var nfe=document.getElementById("numeradorFraccionE").value;
        var dfe=document.getElementById("denominadorFraccionE").value;
        var efd=document.getElementById("enteroFraccionD").value;
        var nfd=document.getElementById("numeradorFraccionD").value;
        var dfd=document.getElementById("denominadorFraccionD").value;
        var datosOkE=0;
        var datosOkD=0;
        if ((efe=="" && (nfe!="" && dfe!="")) || (efe!="" && nfe!="" && dfe!="") || (efe!="" && (nfe=="" && dfe==""))) {
            console.log("fraccionario primer termino bien");
            datosOkE=1;
        }
        else
        {
            datosOkE=0;
            console.log("Hay que arreglar algo primer termino...");
        }
        if ((efd=="" && (nfd!="" && dfd!="")) || (efd!="" && nfd!="" && dfd!="") || (efd!="" && (nfd=="" && dfd==""))) {
            console.log("fraccionario distancia bien");
            datosOkD=1;
        }
        else
        {
            datosOkD=0;
            console.log("Hay que arreglar algo distancia...");
        }
        if (datosOkE==1 && datosOkD==1) {
            //Inicia el proceso para generar el término general...
            $("#Cargando").html("<font size='3'><center>a<sub>n</sub> = a<sub>1</sub> + (n - 1)(d) </font>"+
                "<br><br><b>Sustituimos los datos en la posición que ocupan dentro de la fórmula general</b>"+
                "<br><br></center>");
            //determinar tipo de fraccion primer termino...
            if (efe=="" && (nfe!="" && dfe!="")) {
                efe=0;
                nfe=parseInt(nfe);
                dfe=parseInt(dfe);
                paso1PT=1;
            }
            if (paso1PT==0 && efe!="" && nfe!="" && dfe!="") {
                efe=parseInt(efe);
                nfe=parseInt(nfe);
                dfe=parseInt(dfe);
                paso1PT=1;  
            }
            if (paso1PT==0 && (efe!="" && (nfe=="" && dfe==""))) {
                efe=parseInt(efe);
                nfe=0;
                dfe=0;
                paso1PT=1;    
            }
            //determinar tipo de fraccion distancia...
            if (efd=="" && (nfd!="" && dfd!="")) {
                efd=0;
                nfd=parseInt(nfd);
                dfd=parseInt(dfd);
                paso1D=1;
            }
            if (paso1D==0 && efd!="" && nfd!="" && dfd!="") {
                efd=parseInt(efd);
                nfd=parseInt(nfd);
                dfd=parseInt(dfd);
                paso1D=1;  
            }
            if (paso1D==0 && (efd!="" && (nfd=="" && dfd==""))) {
                efd=parseInt(efd);
                nfd=0;
                dfd=0;
                paso1D=1;    
            }
            //Imprimir primeros datos en pantalla...
            //primera fila...
            //$("#Cargando").append("<font size='3'><center>a<sub>n</sub> = ");
            //primer termino
            var impresionPT;
            var impresionD;
            if (efe==0) {
                //$("#Cargando").append("<font size='3'><center>a<sub>n</sub> = <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub> + (n - 1) ");
                impresionPT="a<sub>n</sub> = <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub> ";
            }
            else
            {
                if (nfe==0) {
                    //$("#Cargando").append("<font size='3'><center>a<sub>n</sub> = "+efe+" + (n - 1) ");
                    impresionPT="a<sub>n</sub> = "+efe+" ";
                }
                else
                {
                    impresionPT="a<sub>n</sub> = "+efe+" <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub>";
                    //$("#Cargando").append("<font size='3'><center>a<sub>n</sub> = "+efe+" <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub> + (n - 1) ");
                }
            }
            //distancia
            if (efd==0) {
                //$("#Cargando").append("<font size='3'>( <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> )");
                impresionD="( <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> )";
            }
            else
            {
                if (nfd==0) {
                    //$("#Cargando").append("<font size='3'>( "+efd+" )");
                    impresionD="( "+efd+" )";
                }
                else
                {
                    //$("#Cargando").append("<font size='3'>( "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> )");
                    impresionD="( "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> )";
                }
            }
            //impresion de primera linea
            $("#Cargando").append("<font size='3'><center> "+impresionPT+" + (n - 1) "+impresionD+" </center></font>");
            //Segunda parte del despeje....
            //primer parte de el parentesis n
            var parteN;
            //estado...1->positivo...2->negativo
            var estado=1;
            if (efd!=0) {
                if (efd<0) {
                    efd=efd*-1;
                    estado=2;
                    if (nfd==0) {
                        //$("#Cargando").append("<font size='3'>( "+efd+" )");
                        impresionD=" - "+efd+"n + "+efd+"";
                    }
                    else
                    {
                        //$("#Cargando").append("<font size='3'>( "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> )");
                        impresionD=" - "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>n + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>";
                    }
                }
                else
                {
                    estado=1;
                    if (nfd==0) {
                        //$("#Cargando").append("<font size='3'>( "+efd+" )");
                        impresionD=" + "+efd+"n - "+efd+"";
                    }
                    else
                    {
                        //$("#Cargando").append("<font size='3'>( "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> )");
                        impresionD=" + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>n - "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>";
                    }
                }
            }
            if (efd==0) {
                if (nfd!=0) {
                    if (nfd<0) {
                        nfd=nfd*-1;
                        estado=2;
                        impresionD="- <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>n + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>";
                    }
                    else
                    {
                        estado=1;
                        impresionD="+ <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>n - <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>";
                    }
                }
            }
            //parte FINAL
            //si es positivo se resta las fracciones
            if (estado==1) {
                $("#Cargando").append("<br><br><font size='3'><center> "+impresionPT+" "+impresionD+"</center></font>");
                var nuevoEF;
                var nuevoNF;
                var nuevoDF;
                restaFracciones(efd,nfd,dfd,efe,nfe,dfe);
                nuevoEF=enteroRestaGlobal;
                nuevoNF=numeradorRestaGlobal;
                nuevoDF=denominadorRestaGlobal;
                console.log("Obtenido Resta: ",nuevoEF,nuevoNF,nuevoDF);
                if (nuevoEF!=0) {
                    if (nuevoEF<0 && nuevoNF!=0) {
                        if (nuevoNF<0) {
                            nuevoNF=nuevoNF * -1;
                        }
                    }
                }
                if (nuevoEF==0) {
                    if (efd==0) {
                        $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</center></font>"); 
                        $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");                       
                    }
                    else
                    {
                        if (nfd==0) {
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" n </center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" n</b></h3><center>");
                        }
                        else{
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");
                        }   
                    }
                }
                if (nuevoEF!=0 && nuevoEF<0) {
                    if (efd==0) {
                        $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n </center></font>"); 
                        $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");                       
                    }
                    else
                    {
                        if (nfd==0) {
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" n </center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" n</b></h3><center>");
                        }
                        else{
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n </center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");
                        }   
                    }
                }
                else
                {
                    if (nuevoEF!=0) {
                        if (efd==0) {
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n </center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> - <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");                        
                        }
                        else
                        {
                            if (nfd==0) {
                                $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" n </center></font>");
                                $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> - "+efd+" n</b></h3><center>");
                            }
                            else{
                                $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n </center></font>");
                                $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> - "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");
                            }   
                        }
                    }
                }
            }//Sino, es negativo, se suman las fracciones...
            else{
                $("#Cargando").append("<br><br><font size='3'><center> "+impresionPT+" "+impresionD+"</center></font>");
                var nuevoEF;
                var nuevoNF;
                var nuevoDF;
                sumaFracciones(efd,nfd,dfd,efe,nfe,dfe);
                nuevoEF=enteroSumaGlobal;
                nuevoNF=numeradorSumaGlobal;
                nuevoDF=denominadorSumaGlobal;
                console.log("Obtenido Suma: ",nuevoEF,nuevoNF,nuevoDF);
                if (nuevoEF!=0) {
                    if (nuevoEF<0 && nuevoNF!=0) {
                        if (nuevoNF<0) {
                            nuevoNF=nuevoNF * -1;
                        }
                    }
                }
                if (nuevoEF==0) {
                    if (efd==0) {
                        $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</center></font>"); 
                        $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");
                    }
                    else
                    {
                        if (nfd==0) {
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" n </center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" n</b></h3><center>");
                        }
                        else{
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");
                        }   
                    }
                }
                if (nuevoEF!=0 && nuevoEF<0) {
                    if (efd==0) {
                        $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n </center></font>");  
                        $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");                      
                    }
                    else
                    {
                        if (nfd==0) {
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" n </center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" n</b></h3><center>");
                        }
                        else{
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n </center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> + "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");
                        }   
                    }
                }
                else
                {
                    if (nuevoEF!=0) {
                        if (efd==0) {
                            $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> - <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n </center></font>");
                            $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> - <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");                        
                        }
                        else
                        {
                            if (nfd==0) {
                                $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> - "+efd+" n </center></font>");
                                $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> - "+efd+" n</b></h3><center>");
                            }
                            else{
                                $("#Cargando").append("<br><br><font size='3'><center>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> - "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n </center></font>");
                                $("#Cargando").append("<br><center><font size='3'>Por lo tanto el término general es: <b>a<sub>n</sub> = "+nuevoEF +" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> - "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> n</b></h3><center>");
                            }   
                        }
                    }
                }
            }//cierre del else, si no es porsitivo
        }//cierre del if principal...
        else
        {
            $("#alertCargando").removeClass("col-lg-12 alert alert-success");
            $("#alertCargando").addClass("col-lg-12 alert alert-danger");
            $("#Cargando").html(""+
            "<center><font size='2'><label id='cargando'><i><b>Datos erroneos, por favor verifique la información</b></i></label></font>"+
                "<br><img src='img/iconos/generales/cancel-bold.png'/></center>");
        }
    }
}
function reestablecerOperacion()
{
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
            $("#alertCargando").removeClass("col-lg-12 alert alert-danger");
                $("#alertCargando").addClass("col-lg-12 alert alert-success");
                $("#Cargando").html(""+
                    "<center><font size='2'><label id='cargando'><i><b>Analizando datos, por favor espere</b></i></label></font></center>"+
                        "<div class='spiner-example'>"+
                            "<div class='sk-spinner sk-spinner-three-bounce'>"+
                                "<div class='sk-bounce1'></div>"+
                                "<div class='sk-bounce2'></div>"+
                                "<div class='sk-bounce3'></div>"+
                            "</div>"+
                        "</div>");

            //Limpiando enteros
            document.getElementById("primerTerminoRE").value="";
            document.getElementById("distanciaRE").value="";
            //Limpiando fracciones
            document.getElementById("enteroFraccionE").value="";
            document.getElementById("numeradorFraccionE").value="";
            document.getElementById("denominadorFraccionE").value="";
            document.getElementById("denominadorFraccionD").value="";
            document.getElementById("enteroFraccionD").value="";
            document.getElementById("numeradorFraccionD").value="";            
         });//cierre del swal
}
function restaFracciones(enteroPrimerT,datoNumPT,datoDenPT,enteroTerminoD,datoNumTD,datoDenTD){
    //VARIABLES
    console.log("LLego a la resta");
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
                enteroNuevo=enteroNuevo * -1;
                nuevoAn=(enteroNuevo*nuevoAd) + nuevoAn;
                nuevoAn=nuevoAn * -1;
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
                        console.log("abs de an: ",nuevoAn," abs de division: ",divisionRespaldo);
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
                        console.log("Resultado Final: ",division," ",nuevoAn,"/",nuevoAd);    
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
function sumaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia){
    var numeradorNDistancia="";
    var numeradorNPrimerT="";
    var numeradorFinal="";
    var numeradoTerminoD="";
    var numeradorNTerminoD="";
    var denominadorNDistancia="";
    var denominadorNPrimerT="";
    var denominadorFinal="";
    var denominadorTerminoD="";
    var denominadorNTerminoD="";
    var enteroFinal="";
    var esEntero="";
    var datoIgual="";
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
        entro=0;
        console.log("Datos: ", entero1,numeradorPrimerT+"/"+denominadorPrimerT,entero2,numeradorDistancia+"/"+denominadorDistancia);
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
                    if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                        if (denominadorFinal==0 || denominadorFinal==1) {
                            if (denominadorFinal==1) {
                                enteroFinal=enteroFinal+numeradorFinal;
                                numeradorFinal=0;
                                denominadorFinal=0;
                                interno=1;
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;*/
                            }
                            if (denominadorFinal==0 && interno==0) {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;*/
                            }
                        }  
                        else
                        {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                        }
                        yaPinto=1;
                    }
                    if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                        if (denominadorFinal==1) {
                            enteroSumaGlobal=numeradorFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                        datoIgual=""+numeradorFinal;  */  
                        }
                        else
                        {
                            enteroSumaGlobal=0;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                        }
                        
                    }
                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                        enteroSumaGlobal=enteroFinal;
                        numeradorSumaGlobal=0;
                        denominadorSumaGlobal=0;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                        datoIgual=""+enteroFinal; */   
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
                    if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                        if (denominadorFinal==0 || denominadorFinal==1) {
                            if (denominadorFinal==1) {
                                enteroFinal=enteroFinal+numeradorFinal;
                                numeradorFinal=0;
                                denominadorFinal=0;
                                interno=1;
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;*/
                            }
                            if (denominadorFinal==0 && interno==0) {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;*/
                            }
                        }  
                        else
                        {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                        }
                        yaPinto=1;
                    }
                    if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                        if (denominadorFinal==1) {
                            enteroSumaGlobal=numeradorFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                        datoIgual=""+numeradorFinal;    */
                        }
                        else
                        {
                            enteroSumaGlobal=0;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";  */  
                        }
                        
                    }
                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                        enteroSumaGlobal=enteroFinal;
                        numeradorSumaGlobal=0;
                        denominadorSumaGlobal=0;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                        datoIgual=""+enteroFinal;    */
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
                    if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                        console.log("1....a");
                        if (denominadorFinal==0 || denominadorFinal==1) {
                            if (denominadorFinal==1) {
                                enteroFinal=enteroFinal+numeradorFinal;
                                numeradorFinal=0;
                                denominadorFinal=0;
                                interno=1;
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;*/
                            }
                            if (denominadorFinal==0 && interno==0) {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;*/
                            }
                        }  
                        else
                        {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                        }
                        yaPinto=1;
                    }
                    if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                        console.log("2....a");
                        if (denominadorFinal==1) {
                            enteroSumaGlobal=numeradorFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                        datoIgual=""+numeradorFinal; */   
                        }
                        else
                        {
                            enteroSumaGlobal=0;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                        }
                        
                    }
                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                        console.log("3....a");
                        enteroSumaGlobal=enteroFinal;
                        numeradorSumaGlobal=0;
                        denominadorSumaGlobal=0;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                        datoIgual=""+enteroFinal;   */ 
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
                    if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                        if (denominadorFinal==0 || denominadorFinal==1) {
                            if (denominadorFinal==1) {
                                enteroFinal=enteroFinal+numeradorFinal;
                                numeradorFinal=0;
                                denominadorFinal=0;
                                interno=1;
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;*/
                            }
                            if (denominadorFinal==0 && interno==0) {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;*/
                            }
                        }  
                        else
                        {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                        }
                        yaPinto=1;
                    }
                    if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                        if (denominadorFinal==1) {
                            enteroSumaGlobal=numeradorFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                        datoIgual=""+numeradorFinal;    */
                        }
                        else
                        {
                            enteroSumaGlobal=0;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                        }
                        
                    }
                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                        enteroSumaGlobal=enteroFinal;
                        numeradorSumaGlobal=0;
                        denominadorSumaGlobal=0;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                        datoIgual=""+enteroFinal;    */
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
                    if (entero1>0 && (entero2<0 || numeradorDistancia<0)) {
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
                    if (entero1<0 && (numeradorDistancia>0 || entero2>0)) {
                        if (entero2>=0) {
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
                    if ((entero1>0 && (numeradorDistancia>0 || entero2>0)) || (entero1<0 && (numeradorDistancia<0 || entero21<0))) {
                        console.log("(entero1>0 && (numeradorDistancia>0 || entero2>0)) || (entero1<0 && (numeradorDistancia<0 || entero2<0))");
                        if (entero1<0) {
                            if (entero2<0) {
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
                        if (entero1>0) {
                            if (entero2>0 || numeradorDistancia>0) {
                                //enteroFinal=entero1+entero2;
                                enteroFinal=entero1;
                                numeradorFinal=numeradorDistancia;
                                denominadorFinal=denominadorDistancia;
                            }
                        }
                    }
                }
                console.log("ResultadoSonIguales: ",enteroFinal,numeradorFinal,denominadorFinal);
                if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                    if (denominadorFinal==0 || denominadorFinal==1) {
                        if (denominadorFinal==1) {
                            enteroFinal=enteroFinal+numeradorFinal;
                            numeradorFinal=0;
                            denominadorFinal=0;
                            interno=1;
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;*/
                        }
                        if (denominadorFinal==0 && interno==0) {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;*/
                        }
                    }  
                    else
                    {
                        enteroSumaGlobal=enteroFinal;
                        numeradorSumaGlobal=numeradorFinal;
                        denominadorSumaGlobal=denominadorFinal;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                    datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                    }
                    yaPinto=1;
                }
                if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                    if (denominadorFinal==1) {
                        enteroSumaGlobal=numeradorFinal;
                        numeradorSumaGlobal=0;
                        denominadorSumaGlobal=0;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                    datoIgual=""+numeradorFinal;    */
                    }
                    else
                    {
                        enteroSumaGlobal=0;
                        numeradorSumaGlobal=numeradorFinal;
                        denominadorSumaGlobal=denominadorFinal;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                    }
                    
                }
                if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                    enteroSumaGlobal=enteroFinal;
                    numeradorSumaGlobal=0;
                    denominadorSumaGlobal=0;
                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                    datoIgual=""+enteroFinal;    */
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
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                }
                            }  
                            else
                            {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                            }
                            yaPinto=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                            if (denominadorFinal==1) {
                                enteroSumaGlobal=numeradorFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                            datoIgual=""+numeradorFinal;    */
                            }
                            else
                            {
                                enteroSumaGlobal=0;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;    */
                        }
                    }
                    if (entero2<0 || numeradorDistancia<0) {
                        entro=1;
                        console.log("Entro donde acabo dep oner esto...1");
                        if (entero2<0) {
                            entero2Respaldo=entero2 * -1;                            
                        }
                        else
                        {
                            entero2Respaldo=entero2;
                        }
                        if (numeradorDistancia<0) {
                            numeRespaldo2= numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);                            
                        pasoResta=1;
                        enteroFinal=enteroRestaGlobal;
                        numeradorFinal=numeradorRestaGlobal;
                        denominadorFinal=denominadorRestaGlobal;
                        console.log("Valor restarado 2: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                    yaPinto=1;
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                    yaPinto=1;
                                }
                            }  
                            else
                            {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                            }
                            yaPinto=1;
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                            if (denominadorFinal==1) {
                                enteroSumaGlobal=numeradorFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                            datoIgual=""+numeradorFinal;  */
                            yaPinto=1;  
                            }
                            else
                            {
                                enteroSumaGlobal=0;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                            yaPinto=1;
                            }
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;  */
                        }
                    }
                    if ((entero1<0 || numeradorPrimerT<0) && (entero2>0 || numeradorDistancia>0)) {
                        entro=1;
                        console.log("Entro donde acabo dep oner esto...2");
                        if (entero2>0) {
                            entero2Respaldo=entero2 * -1;                            
                        }
                        else
                        {
                            entero2Respaldo=entero2;
                        }
                        if (numeradorDistancia>0) {
                            numeRespaldo2= numeradorDistancia * -1;
                        }
                        else
                        {
                            numeRespaldo2=numeradorDistancia;
                        }
                        console.log(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2Respaldo,numeRespaldo2,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);            
                        pasoResta=1;
                        enteroFinal=enteroRestaGlobal;
                        numeradorFinal=numeradorRestaGlobal;
                        denominadorFinal=denominadorRestaGlobal;
                        console.log("Valor restarado 2: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                            console.log("imprimir1",enteroFinal,numeradorFinal,denominadorFinal);
                            if (denominadorFinal==0 || denominadorFinal==1) {
                                if (denominadorFinal==1) {
                                    enteroFinal=enteroFinal+numeradorFinal;
                                    numeradorFinal=0;
                                    denominadorFinal=0;
                                    interno=1;
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                    yaPinto=1;
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                    yaPinto=1;
                                }
                            }  
                            else
                            {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                            yaPinto=1;
                            }                                
                        }
                        if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                            console.log("imprimir2",enteroFinal,numeradorFinal,denominadorFinal);
                            if (denominadorFinal==1) {
                                enteroSumaGlobal=0;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                datoIgual=""+numeradorFinal;    */
                                yaPinto=1;
                            }
                            else
                            {
                                enteroSumaGlobal=0;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                                yaPinto=1;
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            console.log("imprimir3",enteroFinal,numeradorFinal,denominadorFinal);
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;    */
                        }
                    }
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
                        if (entero2!=0) {
                            if (entero2<0) {
                                numeradorFinal = numeradorNPrimerT - numeradorNDistancia;
                            }
                            else
                            {
                                numeradorFinal = numeradorNPrimerT + numeradorNDistancia;
                            }
                        }
                        else
                        {
                            if (numeradorDistancia!=0) {
                                if (numeradorDistancia<0) {
                                    numeradorFinal = numeradorNPrimerT + numeradorNDistancia;
                                }
                                else
                                {
                                    numeradorFinal = numeradorNPrimerT + numeradorNDistancia;
                                }
                            }
                        }
                        //numeradorFinal = numeradorNPrimerT - numeradorNDistancia;
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
                    enteroSumaGlobal=enteroFinal;
                    numeradorSumaGlobal=0;
                    denominadorSumaGlobal=0;
                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                    datoIgual=""+enteroFinal;    */
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
                    enteroSumaGlobal=enteroFinal;
                    numeradorSumaGlobal=numeradorFinal;
                    denominadorSumaGlobal=denominadorFinal;
                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                    datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
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
                        enteroSumaGlobal=enteroFinal;
                        numeradorSumaGlobal=0;
                        denominadorSumaGlobal=0;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                        datoIgual=""+enteroFinal;  */  
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
                        enteroSumaGlobal=enteroFinal;
                        numeradorSumaGlobal=numeradorFinal;
                        denominadorSumaGlobal=denominadorFinal;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                        datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                    }
                }
                else
                {
                    //console.log("numerador menor")
                    if (entero2!=0 && entero2<0) {
                        //dato negativo...
                        numeradorFinal= (entero2 * denominadorFinal) + numeradorFinal;
                        numeradorFinal= numeradorFinal * -1;
                        denominadorFinal=denominadorFinal;
                        enteroFinal=0;
                        console.log("Nueva fraccion: ",enteroFinal,numeradorFinal,denominadorFinal);
                        if (numeradorFinal>denominadorFinal) {
                            esEntero=numeradorFinal/denominadorFinal;
                            console.log("Division del NUM/DEN", esEntero)
                            if (esEntero % 1 == 0) {
                                console.log("Es entero...")
                                enteroFinal = esEntero * -1;
                                numeradorFinal=0;
                                denominadorFinal=0;
                            }
                            else
                            {
                                console.log("No es entero...")
                                esEntero=Math.floor(esEntero);
                                if (esEntero!=0) {
                                    numeradorFinal=numeradorFinal - (esEntero * denominadorFinal);
                                    enteroFinal= esEntero * -1;
                                    denominadorFinal=denominadorFinal;
                                }
                                else
                                {
                                    numeradorFinal = (numeradorFinal * -1) - denominadorFinal;
                                    enteroFinal = 1;
                                }
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                }
                        }
                        else
                        {
                            enteroSumaGlobal=0;
                            numeradorSumaGlobal=numeradorFinal * -1;
                            denominadorSumaGlobal=denominadorFinal;  
                        }
                    }
                    else
                    {
                        enteroFinal= entero1 + entero2;
                        //console.log(entero1, entero2, enteroFinal);
                        if (enteroFinal==0) {
                            //console.log("Entero final 0");
                            enteroSumaGlobal=0;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/     
                        }
                        else
                        {
                            //console.log("Entero Final mayor de 0");
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                        }
                    }
                }
            }
        }//fin del cerro resta
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
        content: "Presiona este botón para generar una nuevo ejercicio de práctica.",
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
        content: "Arrastra los elementos del área \"Elementos\" a los espacios correspondientes al ejercicio, para verificar los datos presiona el botón \"Verificar\" o restaura la información presionando el botón \"Reestablecer\"",
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
        content: "Selecciona el tipo de dato númerico con el que deseas trabajar.",
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
        element: "#tour2-2",
        title: "Paso 2",
        content: "Ingresa los datos correspondientes al primer termino y distancia de la sucesión.",
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
        element: "#tour2-3",
        title: "Paso 3",
        content: "Para generar el término general de la sucesión presiona el botón \"Verificar\" o restaura la información presionando el botón \"Reestablecer\"",
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
        element: "#tour2-4",
        title: "Paso 4",
        content: "En esta área se cargara el resultado del ejercicio de acuerdo a los datos ingresados",
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