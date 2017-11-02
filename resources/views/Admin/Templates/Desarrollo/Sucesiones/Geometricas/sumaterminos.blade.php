<div class="ibox float-e-margins animated fadeInUpBig">
    <div class="ibox-title">
        <h5>Sucesiones Geométricas - <small> Suma de Términos</small></h5>
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
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="text-align: justify;">
                                                Al igual que ocurría con las sucesiones aritméticas, la suma de los <b>n</b> primeros términos de una sucesión geométrica también admite una expresión muy simplificada, en la que sólo intervienen los términos extremos y la razón, su fórmula es denotada como <b>S<sub>n</sub></b>.
                                                <br><br>
                                                Para encontrar la suma de los primeros n términos de una serie geométrica use la fórmula,
                                                <br><br>
                                                <div class="col-lg-8">
                                                    <center>
                                                    <br><br>
                                                        <img src="img/iconos/sucesiones/geometricas/sumaTerminos/teoria.png" width="100%" style="position: center; max-width: 350px;"/>
                                                    </center>    
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <b>Donde:</b>
                                                           <br><br>
                                                           <b>n = </b> número de términos
                                                           <br><br>
                                                           <b>a<sub>1</sub> = </b> primer término
                                                           <br><br>
                                                           <b>r = </b> razón 
                                                        </div>                                                   
                                                    </div>
                                                </div>
                                            </p>
                                            <br>&nbsp;
                                        </div>
                                    </div>
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
                                                                <td><button type="button" class="btn btn-outline btn-primary dim" onclick="cambioEjemplo(4)">4</button></td>
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
                                                                    En una pequeña fnca de café, se cortan tres arrobas de café el primer día, seis el segundo, doce el tercero y así sucesivamente.
                                                                    <br><br>
                                                                    ¿Cuántas arrobas se cortan luego de siete días?
                                                                </div>                                                   
                                                            </div>
                                                            <br>  
                                                            Primero identifiquemos los elementos de la sucesión.
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3">
                                                                    <b>a<sub>1</sub>= </b> 3
                                                                    <br><br>
                                                                    <b>a<sub>2</sub> = </b> 6
                                                                    <br><br>
                                                                    <b>a<sub>3</sub> = </b> 12
                                                                    <br><br>
                                                                    <b>n = </b> 7
                                                                    <br><br>
                                                                    Encontrando la razón:
                                                                    <br><br>
                                                                    <b>r = </b> 6 / 3
                                                                    <br><br>
                                                                    <b>n = </b> 2
                                                                </font>
                                                            </div>                
                                                            Sustituimos los valores dados en la fórmula: 
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3">
                                                                <br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td rowspan="2"><b>S<sub>n</sub> = &nbsp;</b></td>
                                                                            <td style="border-bottom: 1px black solid;"> a<sub>1</sub> ( r <sup>n</sup> - 1)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center"> r - 1</td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                    <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>S<sub>7</sub> =&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;"> 3 (2<sup>7</sup> - 1)</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center">2 - 1</td>
                                                                            </tr>
                                                                        </table>
                                                                    <br>
                                                                    <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>S<sub>7</sub> =&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;"> 381</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center"> 1</td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                    <b>Para este caso <i>S<sub>7</sub></i> = 381</b>
                                                                    <br>&nbsp;
                                                                </font>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    Se denotará por <b>S<sub>n</sub></b> a la suma de <b>n</b> términos consecutivos de una progresión geométrica:
                                                                    <br><br>
                                                                    S<sub>n</sub>   = a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub>
                                                                    <br><br>
                                                                    Para obtener una fórmula que permita hacer este cálculo de un modo rápido, se multiplican ambos miembros de la igualdad por la razón:
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub>  · r</td>
                                                                            <td>=</td>
                                                                            <td align="left">(a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub>) . r</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td align="right">S<sub>n</sub>  · r</td> 
                                                                           <td>=</td>
                                                                           <td align="left">a<sub>1</sub> . r + a<sub>2</sub> . r + ... + a<sub>n-1</sub> . r   +  a<sub>n</sub> . r</td>
                                                                        </tr>
                                                                    </table>
                                                                    <br><br>
                                                                    y teniendo en cuenta que al multiplicar un término por la razón se obtiene el término siguiente,
                                                                    <br><br>
                                                                    S<sub>n</sub>   · r   = a<sub>2</sub> + a<sub>3</sub> + ... + a<sub>n</sub>   + a<sub>n</sub>   · r
                                                                    <br><br>
                                                                    Restando ahora a esta igualdad la primera:
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub>   · r </td>
                                                                            <td>=</td>
                                                                            <td align="left">a<sub>2</sub> + a<sub>3</sub> + ... + a<sub>n</sub>   + a<sub>n</sub>   · r</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub></td>
                                                                            <td>=</td>
                                                                            <td align="left" style="border-bottom: 1px black solid;">a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub> . r - S<sub>n</sub></td>
                                                                            <td>=</td>
                                                                            <td align="left">a<sub>1</sub> - a<sub>1</sub>   · r<sup>n</sup></td>
                                                                        </tr>
                                                                    </table>
                                                                    <br><br>
                                                                    Resumiendo términos:
                                                                    <br><br>
                                                                    S<sub>n</sub>   (r   - 1) =  a1 (r<sup>n</sup> - 1)
                                                                    <br><br></b>
                                                                    despejando S<sub>n</sub>
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td rowspan="2"><b>S<sub>n</sub> = &nbsp;</b></td>
                                                                            <td style="border-bottom: 1px black solid;"> a<sub>1</sub> (r<sup>n</sup> - 1)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center"> r - 1</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="panel panel-primary">
                                                                <div class="panel-body">
                                                                    Por lo tanto la suma de los 7 primeros terminos de la sucesion dada es: <b>381</b>
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
                                                                    Calcule la suma de los primeros ocho términos de la sucesión 5, 10, 20, 40,. . .
                                                                    <br>
                                                                </div>                                                   
                                                            </div>
                                                            <br>  
                                                            Primero debemos encontrar la razón:
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3">
                                                                    Utilizamos la fórmula para calcular la razón:
                                                                    <br><br>
                                                                    <b>r = a<sub>2</sub> / a<sub>1</sub></b>
                                                                    <br><br>
                                                                    Sustituimos los valores:
                                                                    <br><br>
                                                                    r = 10 / 5
                                                                    <br><br>
                                                                    <b>r = 2</b>
                                                                </font>
                                                            </div>                
                                                            Ahora que conocemos el valor de la razón, sustituimos los valores encontrados en la fórmula para encontrar la sumatoria de los términos: 
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3">
                                                                <br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td rowspan="2"><b>S<sub>n</sub> = &nbsp;</b></td>
                                                                            <td style="border-bottom: 1px black solid;"> a<sub>1</sub> ( r <sup>n</sup> - 1)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center"> r - 1</td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                    <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>S<sub>8</sub> =&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;"> 5 (2<sup>8</sup> - 1)</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center">2 - 1</td>
                                                                            </tr>
                                                                        </table>
                                                                    <br>
                                                                    <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>S<sub>8</sub> =&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;"> 1,275</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center"> 1</td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                    <b>Para este caso <i>S<sub>8</sub></i> = 1,275</b>
                                                                    <br>&nbsp;
                                                                </font>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    Se denotará por <b>S<sub>n</sub></b> a la suma de <b>n</b> términos consecutivos de una progresión geométrica:
                                                                    <br><br>
                                                                    S<sub>n</sub>   = a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub>
                                                                    <br><br>
                                                                    Para obtener una fórmula que permita hacer este cálculo de un modo rápido, se multiplican ambos miembros de la igualdad por la razón:
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub>  · r</td>
                                                                            <td>=</td>
                                                                            <td align="left">(a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub>) . r</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td align="right">S<sub>n</sub>  · r</td> 
                                                                           <td>=</td>
                                                                           <td align="left">a<sub>1</sub> . r + a<sub>2</sub> . r + ... + a<sub>n-1</sub> . r   +  a<sub>n</sub> . r</td>
                                                                        </tr>
                                                                    </table>
                                                                    <br><br>
                                                                    y teniendo en cuenta que al multiplicar un término por la razón se obtiene el término siguiente,
                                                                    <br><br>
                                                                    S<sub>n</sub>   · r   = a<sub>2</sub> + a<sub>3</sub> + ... + a<sub>n</sub>   + a<sub>n</sub>   · r
                                                                    <br><br>
                                                                    Restando ahora a esta igualdad la primera:
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub>   · r </td>
                                                                            <td>=</td>
                                                                            <td align="left">a<sub>2</sub> + a<sub>3</sub> + ... + a<sub>n</sub>   + a<sub>n</sub>   · r</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub></td>
                                                                            <td>=</td>
                                                                            <td align="left" style="border-bottom: 1px black solid;">a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub> . r - S<sub>n</sub></td>
                                                                            <td>=</td>
                                                                            <td align="left">a<sub>1</sub> - a<sub>1</sub>   · r<sup>n</sup></td>
                                                                        </tr>
                                                                    </table>
                                                                    <br><br>
                                                                    Resumiendo términos:
                                                                    <br><br>
                                                                    S<sub>n</sub>   (r   - 1) =  a1 (r<sup>n</sup> - 1)
                                                                    <br><br></b>
                                                                    despejando S<sub>n</sub>
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td rowspan="2"><b>S<sub>n</sub> = &nbsp;</b></td>
                                                                            <td style="border-bottom: 1px black solid;"> a<sub>1</sub> (r<sup>n</sup> - 1)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center"> r - 1</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="panel panel-primary">
                                                                <div class="panel-body">
                                                                    Por lo tanto la suma de los 8 primeros terminos de la sucesion dada es: <b>1,275</b>
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
                                                                    En una progresión geométrica, sabemos que el primer término es 6 y el cuarto 48. Calcular la razón y la suma de los 5 primeros términos.
                                                                    <br>
                                                                </div>                                                   
                                                            </div>
                                                            <br>  
                                                            Primero debemos encontrar la razón:
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3">
                                                                    Identificamos la posición que ocupa el término en la sucesión y su valor según la fórmula de la razón.
                                                                    <br><br>
                                                                    48 = a<sub>4</sub>=  6 . r<sup>3</sup>
                                                                    <br><br>
                                                                    48 = 6r<sup>3</sup>
                                                                    <br><br>
                                                                    r<sup>3</sup> = 48 / 6
                                                                    <br><br>
                                                                    r<sup>3</sup> = 8
                                                                    <br><br>
                                                                    r = <sup>3</sup>√ 8
                                                                    <br><br>
                                                                    <b>r= 2</b>
                                                                </font>
                                                            </div>                
                                                            Ahora que conocemos el valor de la razón, sustituimos los valores encontrados en la fórmula para encontrar la sumatoria de los términos: 
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3">
                                                                <br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td rowspan="2"><b>S<sub>n</sub> = &nbsp;</b></td>
                                                                            <td style="border-bottom: 1px black solid;"> a<sub>1</sub> ( r <sup>n</sup> - 1)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center"> r - 1</td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                    <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>S<sub>5</sub> =&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;"> 6 (2<sup>5</sup> - 1)</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center">2 - 1</td>
                                                                            </tr>
                                                                        </table>
                                                                    <br>
                                                                    <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>S<sub>5</sub> =&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;"> 186</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center"> 1</td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                    <b>Para este caso <i>S<sub>5</sub></i> = 186</b>
                                                                    <br>&nbsp;
                                                                </font>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    Se denotará por <b>S<sub>n</sub></b> a la suma de <b>n</b> términos consecutivos de una progresión geométrica:
                                                                    <br><br>
                                                                    S<sub>n</sub>   = a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub>
                                                                    <br><br>
                                                                    Para obtener una fórmula que permita hacer este cálculo de un modo rápido, se multiplican ambos miembros de la igualdad por la razón:
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub>  · r</td>
                                                                            <td>=</td>
                                                                            <td align="left">(a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub>) . r</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td align="right">S<sub>n</sub>  · r</td> 
                                                                           <td>=</td>
                                                                           <td align="left">a<sub>1</sub> . r + a<sub>2</sub> . r + ... + a<sub>n-1</sub> . r   +  a<sub>n</sub> . r</td>
                                                                        </tr>
                                                                    </table>
                                                                    <br><br>
                                                                    y teniendo en cuenta que al multiplicar un término por la razón se obtiene el término siguiente,
                                                                    <br><br>
                                                                    S<sub>n</sub>   · r   = a<sub>2</sub> + a<sub>3</sub> + ... + a<sub>n</sub>   + a<sub>n</sub>   · r
                                                                    <br><br>
                                                                    Restando ahora a esta igualdad la primera:
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub>   · r </td>
                                                                            <td>=</td>
                                                                            <td align="left">a<sub>2</sub> + a<sub>3</sub> + ... + a<sub>n</sub>   + a<sub>n</sub>   · r</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub></td>
                                                                            <td>=</td>
                                                                            <td align="left" style="border-bottom: 1px black solid;">a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub> . r - S<sub>n</sub></td>
                                                                            <td>=</td>
                                                                            <td align="left">a<sub>1</sub> - a<sub>1</sub>   · r<sup>n</sup></td>
                                                                        </tr>
                                                                    </table>
                                                                    <br><br>
                                                                    Resumiendo términos:
                                                                    <br><br>
                                                                    S<sub>n</sub>   (r   - 1) =  a1 (r<sup>n</sup> - 1)
                                                                    <br><br></b>
                                                                    despejando S<sub>n</sub>
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td rowspan="2"><b>S<sub>n</sub> = &nbsp;</b></td>
                                                                            <td style="border-bottom: 1px black solid;"> a<sub>1</sub> (r<sup>n</sup> - 1)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center"> r - 1</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="panel panel-primary">
                                                                <div class="panel-body">
                                                                    Por lo tanto la suma de los 5 primeros terminos de la sucesion dada es: <b>186</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="Ejemplo4" class="animated col-lg-12" style="display: none;">
                                                        <div class="col-lg-8">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    Calcular la suma de los primeros 5 términos de una progresión geométrica en la que a<sub>1</sub> = 1000 y a<sub>3</sub> = 40
                                                                    <br>
                                                                </div>                                                   
                                                            </div>
                                                            <br>  
                                                            Primero debemos encontrar la razón:
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3">
                                                                    Identificamos la posición que ocupa el término en la sucesión y su valor según la fórmula de la razón.
                                                                    <br><br>
                                                                    40 = a<sub>3</sub>=  1000 . r<sup>2</sup>
                                                                    <br><br>
                                                                    40 = 1000r<sup>2</sup>
                                                                    <br><br>
                                                                    r<sup>2</sup> = 2 / 1000
                                                                    <br><br>
                                                                    r<sup>2</sup> = 0.04
                                                                    <br><br>
                                                                    r = √ 0.04
                                                                    <br><br>
                                                                    <b>r= 0.2</b>
                                                                </font>
                                                            </div>                
                                                            Ahora que conocemos el valor de la razón, sustituimos los valores encontrados en la fórmula para encontrar la sumatoria de los términos: 
                                                            <br><br>
                                                            <div class="well" align="center">
                                                                <font size="3">
                                                                <br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td rowspan="2"><b>S<sub>n</sub> = &nbsp;</b></td>
                                                                            <td style="border-bottom: 1px black solid;"> a<sub>1</sub> ( r <sup>n</sup> - 1)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center"> r - 1</td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                    <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>S<sub>5</sub> =&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;"> 1000 (0.2<sup>5</sup> - 1)</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center">0.2 - 1</td>
                                                                            </tr>
                                                                        </table>
                                                                    <br>
                                                                    <table border="0">
                                                                            <tr>
                                                                                <td rowspan="2"><b>S<sub>5</sub> =&nbsp;</b></td>
                                                                                <td style="border-bottom: 1px black solid;"> -999.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center"> -0.8</td>
                                                                            </tr>
                                                                        </table>
                                                                        <br>
                                                                    <b>Para este caso <i>S<sub>5</sub></i> = 1249.60</b>
                                                                    <br>&nbsp;
                                                                </font>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading">
                                                                    <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
                                                                </div>
                                                                <div class="panel-body">
                                                                    Se denotará por <b>S<sub>n</sub></b> a la suma de <b>n</b> términos consecutivos de una progresión geométrica:
                                                                    <br><br>
                                                                    S<sub>n</sub>   = a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub>
                                                                    <br><br>
                                                                    Para obtener una fórmula que permita hacer este cálculo de un modo rápido, se multiplican ambos miembros de la igualdad por la razón:
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub>  · r</td>
                                                                            <td>=</td>
                                                                            <td align="left">(a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub>) . r</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td align="right">S<sub>n</sub>  · r</td> 
                                                                           <td>=</td>
                                                                           <td align="left">a<sub>1</sub> . r + a<sub>2</sub> . r + ... + a<sub>n-1</sub> . r   +  a<sub>n</sub> . r</td>
                                                                        </tr>
                                                                    </table>
                                                                    <br><br>
                                                                    y teniendo en cuenta que al multiplicar un término por la razón se obtiene el término siguiente,
                                                                    <br><br>
                                                                    S<sub>n</sub>   · r   = a<sub>2</sub> + a<sub>3</sub> + ... + a<sub>n</sub>   + a<sub>n</sub>   · r
                                                                    <br><br>
                                                                    Restando ahora a esta igualdad la primera:
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub>   · r </td>
                                                                            <td>=</td>
                                                                            <td align="left">a<sub>2</sub> + a<sub>3</sub> + ... + a<sub>n</sub>   + a<sub>n</sub>   · r</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub></td>
                                                                            <td>=</td>
                                                                            <td align="left" style="border-bottom: 1px black solid;">a<sub>1</sub> + a<sub>2</sub> + ... + a<sub>n-1</sub>  +  a<sub>n</sub></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">S<sub>n</sub> . r - S<sub>n</sub></td>
                                                                            <td>=</td>
                                                                            <td align="left">a<sub>1</sub> - a<sub>1</sub>   · r<sup>n</sup></td>
                                                                        </tr>
                                                                    </table>
                                                                    <br><br>
                                                                    Resumiendo términos:
                                                                    <br><br>
                                                                    S<sub>n</sub>   (r   - 1) =  a1 (r<sup>n</sup> - 1)
                                                                    <br><br></b>
                                                                    despejando S<sub>n</sub>
                                                                    <br><br>
                                                                    <table border="0">
                                                                        <tr>
                                                                            <td rowspan="2"><b>S<sub>n</sub> = &nbsp;</b></td>
                                                                            <td style="border-bottom: 1px black solid;"> a<sub>1</sub> (r<sup>n</sup> - 1)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center"> r - 1</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="panel panel-primary">
                                                                <div class="panel-body">
                                                                    Por lo tanto la suma de los 5 primeros terminos de la sucesion dada es: <b>1249.60</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div><!--cierre del ibox-content-->                                               
                                           </div><!--cierre del ibox-->
                                       </div><!--cierre de etiqueta div col-lg-12-->
                                    </div>
                                    <!--</p>cierre de etiqueta p, inicio de teoría-->
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
                                                <td width="80%" style="text-align: center;">Ahora que ya aprendimos un poco sobre el proceso a realizar para obtener la suma de una serie aritmética de términoss, completa los siguientes ejemplos, arrastrando los elementos de la parte derecha a los espacios correspondientes en el ejercicio.</td>
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
                                        <p style="text-align: justify;">
                                            <center>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                    </div>
                                                    <div class="panel-body">
                                                        <font size="3" style="text-align: center;">
                                                            María preparará un jugo de naranja que será servido en una fiesta familiar, si en el primer litro de agua para preparar el jugo se hizo uso de una cuchara de azúcar, en el segundo litro utilizó media cucharada de azúcar y en el tercer litro vertido utilizó un cuarto de la cuchara de azúcar, ¿Cuantas cucharadas de azúcar necesita usar María si utiliza 5 litros de agua para preparar el jugo de naranja?
                                                        </font>
                                                    </div>                                                   
                                                </div>
                                                <br><br>
                                                Primero identifiquemos el término inicial y final de la sucesión y la cantidad de términos que se desean sumar:
                                                <br><br>
                                                <table border="0">
                                                    <tr>
                                                        <td>Primer Término (a<sub>1</sub>):&nbsp;</td>
                                                        <td><font size="3"><b>1</b></font></td>
                                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                                        <td>Razón (r):&nbsp;</td>
                                                        <td><font size="3"><b><sup>1</sup>/<sub>2</sub></b></font></td>
                                                    </tr>
                                                    <tr><td><br></td></tr>
                                                    <tr>
                                                        <td>N° de Términos (n): &nbsp;</td>
                                                        <td><font size="3"><b>5</b></font></td>
                                                    </tr>
                                                </table>
                                                <br><br>
                                                Ahora que hemos identificado los valores, procedemos a asignarlos en el lugar correspondiente:
                                                <br><br>
                                                <table border="0"  style="text-align: center; font-size: 165%;">
                                                    <tr >
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="a1P1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;(&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="rEP1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;- 1)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><div class="contenedor" id="rP1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td>&nbsp;- 1)</td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Realizamos la operación exponencial y la resta inferior de la división: 
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%;">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;">1</td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;(&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="rESP1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;- 1)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2"><div class="contenedor" id="abajoP1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    </tr>                                               
                                                </table>
                                                <br>
                                                Ejecutamos la resta superior de la división:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%;">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;">1 (&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="multiP1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;)</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">- <sup>1</sup>/<sub>2</sub></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Por último ejecutamos la multiplicación:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;">- <sup>31</sup>/<sub>32</sub></td>
                                                    </tr>
                                                    <tr>
                                                        <td>- <sup>1</sup>/<sub>2</sub></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Para finalizar realizamos la división obteniendo como resultado la suma de:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%">
                                                    <tr>
                                                        <td><b>Sn =</b></td>
                                                        <td><div class="contenedor" id="finalP1" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
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
                                                    <img id="pieza12MenosE1" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/12menos.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza125E1" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/125.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza11516E1" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/11516.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza132E1" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/132.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza1E1" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/1.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza3132E1" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/3132.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza12E1" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/12.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                </div> 
                                            </div>
                                            <div id="ExitoPrac1" class="col-lg-12 alert alert-success" style="display: none;">
                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                <br>
                                                <p style="text-align: justify;">
                                                    Excelente, has resuelto de manera correcta la práctica, ahora sabes que María utilizó: <b>1<sup>15</sup>/<sub>16</sub></b> cucharadas de azucar para preparar el jugo de naranja.     
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
                                        <p style="text-align: justify;">
                                            <center>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                    </div>
                                                    <div class="panel-body">
                                                        <font size="3" style="text-align: center;">
                                                            Encontrar la suma de los primeros 7 términos de una sucesión cuyo primer término es <b>-18</b> y su razón es <b>3</b>
                                                        </font>
                                                    </div>                                                   
                                                </div>
                                                <br><br>
                                                Primero identifiquemos el término inicial y final de la sucesión y la cantidad de términos que se desean sumar:
                                                <br><br>
                                                <table border="0">
                                                    <tr>
                                                        <td>Primer Término (a<sub>1</sub>):&nbsp;</td>
                                                        <td><font size="3"><b>-18</b></font></td>
                                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                                        <td>Razón (r):&nbsp;</td>
                                                        <td><font size="3"><b>3</font></td>
                                                    </tr>
                                                    <tr><td><br></td></tr>
                                                    <tr>
                                                        <td>N° de Términos (n): &nbsp;</td>
                                                        <td><font size="3"><b>7</b></font></td>
                                                    </tr>
                                                </table>
                                                <br><br>
                                                Ahora que hemos identificado los valores, procedemos a asignarlos en el lugar correspondiente:
                                                <br><br>
                                                <table border="0"  style="text-align: center; font-size: 165%;">
                                                    <tr >
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="a1P2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;(&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="rEP2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;- 1)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><div class="contenedor" id="rP2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td>&nbsp;- 1)</td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Realizamos la operación exponencial y la resta inferior de la división: 
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%;">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;">-18</td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;(&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="rESP2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;- 1)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2"><div class="contenedor" id="abajoP2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    </tr>                                               
                                                </table>
                                                <br>
                                                Ejecutamos la resta superior de la división:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%;">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;">-18 (&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="multiP2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;)</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">2</td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Por último ejecutamos la multiplicación:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="arribaP2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Para finalizar realizamos la división obteniendo como resultado la suma de:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%">
                                                    <tr>
                                                        <td><b>Sn =</b></td>
                                                        <td><div class="contenedor" id="finalP2" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
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
                                                    <img id="pieza2186E2" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/2186.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza3E2" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/3.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza19674E2" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/19674.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza18E2" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/18.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza2187E2" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/2187.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza37E2" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/37.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza39348E2" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/39348.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza2E2" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                </div> 
                                            </div>
                                            <div id="ExitoPrac2" class="col-lg-12 alert alert-success" style="display: none;">
                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                <br>
                                                <p style="text-align: justify;">
                                                     Excelente, has resuelto de manera correcta la práctica, ahora conoces la sumatoria de los términos de la serie geométrica dada, siendo el valor de la sumatoria: <b>-19,674</b>
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
                                        <p style="text-align: justify;">
                                            <center>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                    </div>
                                                    <div class="panel-body">
                                                        <font size="3" style="text-align: center;">
                                                            Encontrar la suma de los primeros 5 términos de una sucesión cuyo primer término es <b><sup>2</sup>/<sub>5</sub></b> y su razón es <b><sup>1</sup>/<sub>3</sub></b>
                                                        </font>
                                                    </div>                                                   
                                                </div>
                                                <br><br>
                                                Primero identifiquemos el término inicial y final de la sucesión y la cantidad de términos que se desean sumar:
                                                <br><br>
                                                <table border="0">
                                                    <tr>
                                                        <td>Primer Término (a<sub>1</sub>):&nbsp;</td>
                                                        <td><font size="3"><b><sup>2</sup>/<sub>5</sub></b></font></td>
                                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                                        <td>Razón (r):&nbsp;</td>
                                                        <td><font size="3"><b><sup>1</sup>/<sub>3</sub></b></font></td>
                                                    </tr>
                                                    <tr><td><br></td></tr>
                                                    <tr>
                                                        <td>N° de Términos (n): &nbsp;</td>
                                                        <td><font size="3"><b>5</b></font></td>
                                                    </tr>
                                                </table>
                                                <br><br>
                                                Ahora que hemos identificado los valores, procedemos a asignarlos en el lugar correspondiente:
                                                <br><br>
                                                <table border="0"  style="text-align: center; font-size: 165%;">
                                                    <tr >
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="a1P3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;(&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="rEP3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;- 1)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><div class="contenedor" id="rP3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td>&nbsp;- 1)</td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Realizamos la operación exponencial y la resta inferior de la división: 
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%;">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;"><sup>2</sup>/<sub>5</sub></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;(&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="rESP3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;- 1)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2"><div class="contenedor" id="abajoP3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    </tr>                                               
                                                </table>
                                                <br>
                                                Ejecutamos la resta superior de la división:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%;">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;"><sup>2</sup>/<sub>5</sub> (&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="multiP3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;)</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">- <sup>2</sup>/<sub>3</sub></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Por último ejecutamos la multiplicación:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="arribaP3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                    </tr>
                                                    <tr>
                                                        <td>- <sup>2</sup>/<sub>3</sub></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Para finalizar realizamos la división obteniendo como resultado la suma de:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%">
                                                    <tr>
                                                        <td><b>Sn =</b></td>
                                                        <td><div class="contenedor" id="finalP3" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
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
                                                    <img id="pieza242E3" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/242.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza135E3" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/135.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza405E3" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/405.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza25E3" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/25.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza23E3" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/23.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza13E3" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/13.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza1243E3" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/1243.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza484E3" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/484.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                </div> 
                                            </div>
                                            <div id="ExitoPrac3" class="col-lg-12 alert alert-success" style="display: none;">
                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                <br>
                                                <p style="text-align: justify;">
                                                    Excelente, has resuelto de manera correcta la práctica, ahora conoces la sumatoria de los términos de la serie aritmética dada, siendo el valor de la sumatoria: <b><sup>242</sup>/<sub>405</sub></b>
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
                                <div id="ejemplo4" class="row col-lg-12" >
                                    <div class="col-lg-8">
                                        <p style="text-align: justify;">
                                            <center>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
                                                    </div>
                                                    <div class="panel-body">
                                                        <font size="3" style="text-align: center;">
                                                            En una pequeña finca de café, se cortan veinte arrobas de café el primer día y ochenta el tercer día, ¿Cuantas arrobas de café se cortan luego de 5 días?.
                                                        </font>
                                                    </div>                                                   
                                                </div>
                                                <br><br>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordionR" href="#collapseRazon">Obtención de la razón</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseRazon" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            Primero debemos conocer el valor de la razón para ello utilizamos la formula para generar términos geométricos (<b>a<sub>n</sub> = a<sub>1</sub> . r<sup>n -1</sup></b>) y despejamos la varibale <b>r</b>.
                                                            <br><br>
                                                            <table border="0" style="text-align: center; font-size: 165%;">
                                                                <tr>
                                                                    <td colspan="2">a<sub>3</sub> = a<sub>1</sub> . r<sup>2</sup></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">80 = 20r<sup>2</sup></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="2">r<sup>2</sup> = </td>
                                                                    <td style="border-bottom: 1px black solid;">80</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>20</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>r<sup>2</sup> = 4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>r = √4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>r = 2</td>
                                                                </tr>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                Ahora que hemos identificado los valores, procedemos a asignarlos en el lugar correspondiente:
                                                <br><br>
                                                <table border="0"  style="text-align: center; font-size: 165%;">
                                                    <tr >
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="a1P4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;(&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="rEP4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;- 1)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><div class="contenedor" id="rP4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td>&nbsp;- 1)</td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Realizamos la operación exponencial y la resta inferior de la división: 
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%;">
                                                    <tr>
                                                        <td rowspan="2"><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;">20</td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;(&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="rESP4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;- 1)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">1</td>
                                                    </tr>                                               
                                                </table>
                                                <br>
                                                Ejecutamos la resta interna:
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%;">
                                                    <tr>
                                                        <td><b>Sn =</b></td>
                                                        <td style="border-bottom: 1px black solid;">20 (&nbsp;</td>
                                                        <td style="border-bottom: 1px black solid;"><div class="contenedor" id="multiP4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
                                                        <td style="border-bottom: 1px black solid;">&nbsp;)</td>
                                                    </tr>
                                                </table>
                                                <br>
                                                Por último ejecutamos la multiplicación obteniendo como resultado::
                                                <br><br>
                                                <table border="0" style="text-align: center; font-size: 165%">
                                                    <tr>
                                                        <td><b>Sn =</b></td>
                                                        <td><div class="contenedor" id="finalP4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)" style="background-color: #b9b8b8; border-color: #ddd; width: 50px; height: 34px;"></div></td>
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
                                                    <img id="pieza32E4" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/32.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza2E4" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/2.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza620E4" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/620.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza20E4" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/20.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza31E4" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/31.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <img id="pieza25E4" src="{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/25.png')}}" draggable="true" ondragstart="start(event)" ondragend="end(event)"/>&nbsp;&nbsp;
                                                    <div style="background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;"></div>
                                                </div> 
                                            </div>
                                            <div id="ExitoPrac4" class="col-lg-12 alert alert-success" style="display: none;">
                                                <center><img src="img/iconos/generales/badge.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Muy Bien</b></i></font></center>
                                                <br>
                                                <p style="text-align: justify;">
                                                    Excelente, has resuelto de manera correcta la práctica, ahora conoces la sumatoria de los términos de la serie aritmética dada, siendo el valor de la sumatoria: <b>620</b>
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
                                        Para conocer la suma de los término de una sucesión ingresa los valores dados en el ejercicio en los espacios correspondientes.
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
                                                                <td width="60%"><b>Primer Término (a<sub>1</sub>):</b>&nbsp;&nbsp;&nbsp;</td>
                                                                <td width="'40%"><input class="form-control" type="number" id="primerTerminoP3" name="primerTerminoP3" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                            <tr><td><br></td></tr>
                                                            <tr>
                                                                <td width="60%"><b>N° de Términos (n): </b></td>
                                                                <td width="40%"><input class="form-control" type="number" id="nTerminosP3" name="nTerminosP3" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                            <tr><td><br></td></tr>
                                                            <tr>
                                                                <td colspan="2" width="100%"><input type="checkbox" id="conozco" name="conozco" value="Si" onclick="Estado();">&nbsp;&nbsp;<b>No conozco la razón</b></td>
                                                            </tr>
                                                            <tr><td><br></td></tr>
                                                            <tr>
                                                                <td width="60%" id="ultimoValorP3"><b>Razón (r): </b></td>
                                                                <td width="40%"><input class="form-control" type="number" id="razonTerminoP3" name="razonTerminoP3" style="border-color: #1bb394;"></td>
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
                                                                <td width="50%"><b>N° Terminos (n): </b></td>
                                                                <td width="20%" colspan="2"><input class="form-control" type="number" id="nTerminosFP3" name="nTerminosFP3" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                            <tr><td><br></td></tr>
                                                            <tr>
                                                                <td colspan="3" width="100%"><input type="checkbox" id="conozcoF" name="conozcoF" value="Si" onclick="EstadoF();">&nbsp;&nbsp;<b>No conozco la razón</b></td>
                                                            </tr>
                                                            <tr><td><br></td></tr>
                                                            <tr>
                                                                <td rowspan="2" width="50%"><b>Razón (r): </b></td>
                                                                <td rowspan="2" width="25%"><input class="form-control" type="number" id="enteroFraccionD" name="enteroFraccionD" style="border-color: #1bb394;"></td>
                                                                <td width="20%"><input class="form-control" type="number" id="numeradorFraccionD" name="numeradorFraccionD" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%"><input class="form-control" type="number" id="denominadorFraccionD" name="denominadorFraccionD" style="border-color: #1bb394;"></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--MODAL ENTEROS-->
                                            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                            <h4 class="modal-title">Razón</h4>
                                                            <small class="font-bold">Para encontrar la razón entre términos es importante conocer el primer término, la posición que ocupa el siguiente término dentro de la sucesíon y su respectivo valor y, sustituirlos en la formula para encontrar el término n-enésimo <i>(a<sub>n</sub> = a<sub>1</sub> . r<sup>n-1</sup>)</i>.</small>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Complementa la siguiente información:
                                                            <br><br>
                                                            <table id="tableEnteros" border="0" width="50%" align="center">
                                                                    <tr>
                                                                        <td width="30%"><b>Primer Término (a<sub>1</sub>):</b>&nbsp;&nbsp;&nbsp;</td>
                                                                        <td width="30%"><input class="form-control" type="number" id="primerTerminoM5" name="primerTerminoM5" style="border-color: #1bb394;"></td>
                                                                    </tr>
                                                                    <tr><td><br></td></tr>
                                                                    <tr>
                                                                        <td width="30%"><b>Posición Término (a<sub>n</sub>): </b></td>
                                                                        <td width="30%"><input class="form-control" type="number" id="posicionTerminoM5" name="posicionTerminoM5" style="border-color: #1bb394;"></td>
                                                                    </tr>
                                                                    <tr><td><br></td></tr>
                                                                    <tr>
                                                                        <td width="30%"><b>Valor Término (a<sub>n</sub>): </b></td>
                                                                        <td width="30%"><input class="form-control" type="number" id="valorTerminoM5" name="valorTerminoM5" style="border-color: #1bb394;"></td>
                                                                    </tr>
                                                                    <tr><td><br></td></tr>
                                                                    <tr>
                                                                        <td width="30%" id="ultimoValorP3"><b>Razón (r): </b></td>
                                                                        <td width="30%"><input class="form-control" type="number" id="razonM5" name="razonM5" style="border-color: #1bb394;" disabled></td>
                                                                    </tr>
                                                                </table>
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                                            <button type="button" class="btn btn-primary" onclick="GenerarUltimo()">Generar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--FIN MODAL-->
                                            <!--MODAL FRACCIONARIOS-->
                                            <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                            <h4 class="modal-title">Último Término</h4>
                                                            <small class="font-bold">Para encontrar la razón entre términos es importante conocer el primer término, la posición que ocupa el siguiente término dentro de la sucesíon y su respectivo valor y, sustituirlos en la formula para encontrar el término n-enésimo <i>(a<sub>n</sub> = a<sub>1</sub> . r<sup>n-1</sup>)</i>.</small>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Complementa la siguiente información:
                                                            <br><br>
                                                            <table id="tableFraccionaria" border="0" width="50%" align="center">
                                                                <tr>
                                                                    <td rowspan="2"><b>Primer Termino (a<sub>1</sub>):</b>&nbsp;&nbsp;&nbsp;</td>
                                                                    <td rowspan="2"><input class="form-control" type="number" id="enteroFM6" name="enteroFM6" style="border-color: #1bb394;"></td>
                                                                    <td><input class="form-control" type="number" id="numeradorFM6" name="numeradorFM6" style="border-color: #1bb394;"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="number" id="denominadorFM6" name="denominadorFM6" style="border-color: #1bb394;"></td>
                                                                </tr>
                                                                <tr><td>&nbsp;</td></tr>
                                                                <tr>
                                                                    <td width="50%"><b>Posición Término (a<sub>n</sub>): </b></td>
                                                                    <td width="20%" colspan="2"><input class="form-control" type="number" id="nTerminosM6" name="nTerminosM6" style="border-color: #1bb394;"></td>
                                                                </tr>
                                                                <tr><td>&nbsp;</td></tr>
                                                                <tr>
                                                                    <td rowspan="2"><b>Valor Término (a<sub>n</sub>):</b>&nbsp;&nbsp;&nbsp;</td>
                                                                    <td rowspan="2"><input class="form-control" type="number" id="enteroDM6" name="enteroDM6" style="border-color: #1bb394;"></td>
                                                                    <td><input class="form-control" type="number" id="numeradorDM6" name="numeradorDM6" style="border-color: #1bb394;"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="number" id="denominadorDM6" name="denominadorDM6" style="border-color: #1bb394;"></td>
                                                                </tr>
                                                                <tr><td>&nbsp;</td></tr>
                                                                <tr>
                                                                    <td rowspan="2" width="50%"><b>Razón (r): </b></td>
                                                                    <td rowspan="2" width="25%"><input class="form-control" type="number" id="enteroUM6" name="enteroUM6" style="border-color: #1bb394;" disabled></td>
                                                                    <td width="20%"><input class="form-control" type="number" id="numeradorUM6" name="numeradorUM6" style="border-color: #1bb394;" disabled></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="20%"><input class="form-control" type="number" id="denominadorUM6" name="denominadorUM6" style="border-color: #1bb394;" disabled></td>
                                                                </tr>
                                                            </table>
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                                            <button type="button" class="btn btn-primary" onclick="GenerarUltimoF()">Generar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--FIN MODAL-->
                                        </div>
                                        <div class="row">
                                            <div id="tour2-3" class="col-ls-12">
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
                                                <div id="Sucesion" style="display: none;">
                                                    
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
var enteroDivisionGlobal=0;
var numeradorDivisionGlobal=0;
var denominadorDivisionGlobal=0;
var denominadorSumaGlobal=0;
var enteroMultiGlobal=0;
var numeradorMultiGlobal=0;
var denominadorMultiGlobal=0;
var nuevoAn=0;
var nuevoAd=0;
function Estado(){
    var firstTermino;
    var numberofTerminos;
    if($("#conozco").is(':checked')) {  
        document.getElementById("razonTerminoP3").disabled = true;
        firstTermino=document.getElementById("primerTerminoP3").value;
        numberofTerminos=document.getElementById("nTerminosP3").value;
        document.getElementById("primerTerminoM5").value=firstTermino;
        //document.getElementById("nTerminosM5").value=numberofTerminos;
        $("#myModal5").modal()
        console.log("Seleccionado");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        document.getElementById("ultimoTerminoP3").disabled = false;
        console.log("No seleccionado");
    }
}
function EstadoF(){
    var firstTerminoE;
    var firstTerminoN;
    var firstTerminoD;
    var numberofTerminos;
    if($("#conozcoF").is(':checked')) {  
        document.getElementById("enteroFraccionD").disabled = true;
        document.getElementById("numeradorFraccionD").disabled = true;
        document.getElementById("denominadorFraccionD").disabled = true;
        firstTerminoE=document.getElementById("enteroFraccionE").value;
        firstTerminoN=document.getElementById("numeradorFraccionE").value;
        firstTerminoD=document.getElementById("denominadorFraccionE").value;
        numberofTerminos=document.getElementById("nTerminosFP3").value;
        document.getElementById("enteroFM6").value=firstTerminoE;
        document.getElementById("numeradorFM6").value=firstTerminoN;
        document.getElementById("denominadorFM6").value=firstTerminoD;
        //document.getElementById("nTerminosM6").value=numberofTerminos;
        $("#myModal6").modal()
        console.log("Seleccionado");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        document.getElementById("enteroFraccionD").disabled = false;
        document.getElementById("numeradorFraccionD").disabled = false;
        document.getElementById("denominadorFraccionD").disabled = false;
        console.log("No seleccionado");
    }
}
function randomPractica()
{
    var inferior = 1; 
    var superior = 4;
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
function ComprobarPractica1(){
    if((document.getElementById('pieza1E1').parentNode.id=='a1P1') &&
        (document.getElementById('pieza125E1').parentNode.id=='rEP1') &&
        (document.getElementById('pieza12E1').parentNode.id=='rP1') &&
        (document.getElementById('pieza132E1').parentNode.id=='rESP1') &&
        (document.getElementById('pieza12MenosE1').parentNode.id=='abajoP1') &&
        (document.getElementById('pieza3132E1').parentNode.id=='multiP1') &&
        (document.getElementById('pieza11516E1').parentNode.id=='finalP1'))
        {
            swal("Excelente!", "Has colocado los datos correctamente", "success");
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
                    "<img id='pieza12MenosE1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/12menos.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza125E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/125.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza11516E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/11516.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza132E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/132.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza1E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/1.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza3132E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/3132.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza12E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/12.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                "</div>");
            //Limpiando espacios libres...
            $("#a1P1").html("");
            $("#rEP1").html("");
            $("#rP1").html("");
            $("#rESP1").html("");
            $("#abajoP1").html("");
            $("#multiP1").html("");
            $("#finalP1").html("");
         });//cierre del swal
    }
    else
    {
        //Limpiando componentes...
        $("#compenentesPractica1").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                    "<br>"+
                    "<img id='pieza12MenosE1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/12menos.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza125E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/125.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza11516E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/11516.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza132E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/132.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza1E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/1.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza3132E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/3132.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza12E1' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica1/12.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                "</div>");
            //Limpiando espacios libres...
            $("#a1P1").html("");
            $("#rEP1").html("");
            $("#rP1").html("");
            $("#rESP1").html("");
            $("#abajoP1").html("");
            $("#multiP1").html("");
            $("#finalP1").html("");
    }
}
function ComprobarPractica2(){
    if((document.getElementById('pieza18E2').parentNode.id=='a1P2') &&
        (document.getElementById('pieza37E2').parentNode.id=='rEP2') &&
        (document.getElementById('pieza3E2').parentNode.id=='rP2') &&
        (document.getElementById('pieza2187E2').parentNode.id=='rESP2') &&
        (document.getElementById('pieza2186E2').parentNode.id=='multiP2') &&
        (document.getElementById('pieza2E2').parentNode.id=='abajoP2') &&
        (document.getElementById('pieza39348E2').parentNode.id=='arribaP2') &&
        (document.getElementById('pieza19674E2').parentNode.id=='finalP2'))
            {
                swal("Excelente!", "Has colocado los datos correctamente", "success");
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
                    "<img id='pieza2186E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/2186.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza3E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/3.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza19674E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/19674.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza18E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/18.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza2187E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/2187.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza37E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/37.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza39348E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/39348.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza2E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                "</div>");
            //Limpiando espacios libres...
            $("#a1P2").html("");
            $("#rEP2").html("");
            $("#rP2").html("");
            $("#rESP2").html("");
            $("#abajoP2").html("");
            $("#multiP2").html("");
            $("#arribaP2").html("");
            $("#finalP2").html("");
         });//cierre del swal
    }
    else
    {
        $("#compenentesPractica2").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                    "<br>"+
                    "<img id='pieza2186E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/2186.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza3E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/3.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza19674E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/19674.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza18E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/18.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza2187E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/2187.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza37E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/37.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza39348E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/39348.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza2E2' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica2/2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                "</div>");
            //Limpiando espacios libres...
            $("#a1P2").html("");
            $("#rEP2").html("");
            $("#rP2").html("");
            $("#rESP2").html("");
            $("#abajoP2").html("");
            $("#multiP2").html("");
            $("#arribaP2").html("");
            $("#finalP2").html("");
    }
}
function ComprobarPractica3(){
    if((document.getElementById('pieza25E3').parentNode.id=='a1P3') && 
        (document.getElementById('pieza135E3').parentNode.id=='rEP3') &&
        (document.getElementById('pieza13E3').parentNode.id=='rP3') && 
        (document.getElementById('pieza1243E3').parentNode.id=='rESP3') &&
        (document.getElementById('pieza23E3').parentNode.id=='abajoP3') &&
        (document.getElementById('pieza242E3').parentNode.id=='multiP3') &&
        (document.getElementById('pieza484E3').parentNode.id=='arribaP3') &&
        (document.getElementById('pieza405E3').parentNode.id=='finalP3'))
        {
            swal("Excelente!", "Has colocado los datos correctamente", "success");
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
                    "<img id='pieza242E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/242.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza135E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/135.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza405E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/405.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza25E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/25.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza23E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/23.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza13E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/13.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza1243E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/1243.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza484E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/484.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                "</div>");
            //Limpiando espacios libres...
            $("#a1P3").html("");
            $("#rEP3").html("");
            $("#rP3").html("");
            $("#rESP3").html("");
            $("#abajoP3").html("");
            $("#multiP3").html("");
            $("#arribaP3").html("");
            $("#finalP3").html("");
         });//cierre del swal
    }
    else
    {
        $("#compenentesPractica3").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                    "<img id='pieza242E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/242.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza135E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/135.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza405E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/405.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza25E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/25.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza23E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/23.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza13E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/13.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza1243E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/1243.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<img id='pieza484E3' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica3/484.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                    "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                "</div>");
            //Limpiando espacios libres...
            $("#a1P3").html("");
            $("#rEP3").html("");
            $("#rP3").html("");
            $("#rESP3").html("");
            $("#abajoP3").html("");
            $("#multiP3").html("");
            $("#arribaP3").html("");
            $("#finalP3").html("");
    }
}
function ComprobarPractica4(){
    if((document.getElementById('pieza20E4').parentNode.id=='a1P4') &&
            (document.getElementById('pieza25E4').parentNode.id=='rEP4') &&
            (document.getElementById('pieza2E4').parentNode.id=='rP4') &&
            (document.getElementById('pieza32E4').parentNode.id=='rESP4') &&
            (document.getElementById('pieza31E4').parentNode.id=='multiP4') &&
            (document.getElementById('pieza620E4').parentNode.id=='finalP4'))
            {
                swal("Excelente!", "Has colocado los datos correctamente", "success");
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
                        "<img id='pieza32E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/32.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza2E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza620E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/620.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza20E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/20.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza31E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/31.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza25E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/25.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                    "</div>");
            //Limpiando espacios libres...
            $("#a1P4").html("");
            $("#rEP4").html("");
            $("#rP4").html("");
            $("#rESP4").html("");
            $("#multiP4").html("");
            $("#finalP4").html("");
         });//cierre del swal
    }
    else
    {
        //Limpiando componentes...
            $("#compenentesPractica4").html(""+
                "<center><img src='img/iconos/generales/pencil-case.png'>&nbsp;&nbsp;&nbsp;<font size='4'><i><b>Elementos</b></i></font></center>"+
                "<br>"+
                    "<div id='contenedorPiezas' ondragenter='return enter(event)' ondragover='return over(event)' ondrop='return drop(event)'>"+
                        "<img id='pieza32E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/32.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza2E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/2.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza620E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/620.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza20E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/20.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza31E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/31.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<img id='pieza25E4' src='{{asset('img/iconos/sucesiones/geometricas/sumaTerminos/practica4/25.png')}}' draggable='true' ondragstart='start(event)' ondragend='end(event)'/>&nbsp;&nbsp;"+
                        "<div style='background-color: #fcf8e3; border-color: #fcf8e3; width: 75px; height: 34px;'></div>"+
                    "</div>");
            //Limpiando espacios libres...
            $("#a1P4").html("");
            $("#rEP4").html("");
            $("#rP4").html("");
            $("#rESP4").html("");
            $("#multiP4").html("");
            $("#finalP4").html("");
    }
}
function TipoDato(objeto){
    datoRadio=objeto.value;
    if (objeto.value=="2") {
        //alert("Entero");
        $("#tableFraccionaria").fadeOut(0);
        $("#tableEnteros").fadeIn(300);
        //$("#primerTerminoRE").value="";
        document.getElementById("primerTerminoP3").value="";
        document.getElementById("nTerminosP3").value="";
        document.getElementById("razonTerminoP3").value="";
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
        ///cambio de vista
        $("#Sucesion").fadeOut();
        $("#Cargando").fadeIn(300);
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
        document.getElementById("nTerminosFP3").value="";
        document.getElementById("enteroFM6").value="";
        document.getElementById("numeradorFM6").value="";
        document.getElementById("denominadorFM6").value="";
        document.getElementById("nTerminosM6").value="";
        document.getElementById("enteroDM6").value="";
        document.getElementById("numeradorDM6").value="";
        document.getElementById("denominadorDM6").value="";
        document.getElementById("enteroUM6").value="";
        document.getElementById("numeradorUM6").value="";
        document.getElementById("denominadorUM6").value="";
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
        ///cambio de vista
        $("#Sucesion").fadeOut();
        $("#Cargando").fadeIn(300);  
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
function generarOperacion2(){
    if (datoRadio=="2") {
        //realiza proceso de numeros enteros
        var pt=document.getElementById("primerTerminoP3").value;
        var dt=document.getElementById("razonTerminoP3").value;
        var nt=document.getElementById("nTerminosP3").value;
        if (pt=="" || dt=="" || nt=="") {
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
            $("#Cargando").html("<font size='3'><center><table border='0'>"+
                                                "<tr>"+
                                                    "<td rowspan='3'>S<sub>n</sub> =</td>"+
                                                    "<td style='text-align: center;'> a<sub>1</sub> (r<sup>n</sup> - 1)</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td>-------------------</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td style='text-align: center;'>r - 1</td>"+
                                                "</tr>"+
                                                "</table></font>"+
                "<br><b>Sustituimos los datos en la posición que ocupan dentro de la fórmula general</b>"+
                "<br></center>");
            pt=parseFloat(pt);
            dt=parseFloat(dt);
            nt=parseInt(nt);
            var nuevaDt;
            var suma;
            var multiplicacion;
            var division;
            var resta;
            var restaInterna;
            var powOperacion;
            var n;
            var d;
            var an;
            //escribir la formula con los datos reales
            nuevaDt=pt;
            $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                            "<tr>"+
                                                "<td rowspan='3'>S<sub>"+nt+"</sub> =</td>"+
                                                "<td style='text-align: center;'>"+pt+" ("+dt+"<sup>"+nt+"</sup> -1)</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td>-------------------------</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td style='text-align: center;'>"+dt+" -1</td>"+
                                            "</tr>"+
                                            "</table></center></font>");
            powOperacion=Math.pow(dt,nt);
            resta=dt - 1;
            if (resta % 1 !=0) {
                resta=resta.toFixed(2);
            }
            if (powOperacion % 1 ==0) {
                $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                        "<tr>"+
                                            "<td rowspan='3'>S<sub>"+nt+"</sub> =</td>"+
                                            "<td style='text-align: center;'>"+pt+" ("+powOperacion+" -1)</td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td>---------------------</td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td style='text-align: center;'>"+resta+"</td>"+
                                        "</tr>"+
                                        "</table></center></font>");
            }
            else
            {
                $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                            "<tr>"+
                                            "<td rowspan='3'>S<sub>"+nt+"</sub> =</td>"+
                                            "<td style='text-align: center;'>"+pt+" ("+powOperacion.toFixed(2)+" -1)</td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td>---------------------</td>"+
                                        "</tr>"+
                                        "<tr>"+
                                            "<td style='text-align: center;'>"+resta+"</td>"+
                                        "</tr>"+
                                        "</table></center></font>");
            }
            //resta del parentesis
            restaInterna=powOperacion - 1;
            if (restaInterna % 1 ==0) {
                $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                            "<tr>"+
                                                "<td rowspan='3'>S<sub>"+nt+"</sub> =</td>"+
                                                "<td style='text-align: center;'>"+pt+" ("+restaInterna+")</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td>---------------------</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td style='text-align: center;'>"+resta+"</td>"+
                                            "</tr>"+
                                            "</table></center></font>");
            }
            else
            {
                $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                            "<tr>"+
                                                "<td rowspan='3'>S<sub>"+nt+"</sub> =</td>"+
                                                "<td style='text-align: center;'>"+pt+" ("+restaInterna.toFixed(2)+")</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td>---------------------</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td style='text-align: center;'>"+resta+"</td>"+
                                            "</tr>"+
                                            "</table></center></font>");
            }
            //multiplicacion superior
            multiplicacion=pt * restaInterna;
            if (multiplicacion % 1 ==0) {
                $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                            "<tr>"+
                                                "<td rowspan='3'>S<sub>"+nt+"</sub> =</td>"+
                                                "<td style='text-align: center;'>"+multiplicacion+"</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td>---------------------</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td style='text-align: center;'>"+resta+"</td>"+
                                            "</tr>"+
                                            "</table></center></font>");
            }
            else
            {
                $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                            "<tr>"+
                                                "<td rowspan='3'>S<sub>"+nt+"</sub> =</td>"+
                                                "<td style='text-align: center;'>"+multiplicacion.toFixed(2)+"</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td>---------------------</td>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<td style='text-align: center;'>"+resta+"</td>"+
                                            "</tr>"+
                                            "</table></center></font>");
            }
            //division final
            division=multiplicacion / resta;
            if (division % 1 ==0) {
                $("#Cargando").append("<br><center><font size='3'>Por lo tanto la suma es: <b> "+ division +"</b></font></center>"); 
            }
            else
            {
                $("#Cargando").append("<br><center><font size='3'>Por lo tanto la suma es: <b> "+ division.toFixed(2) +"</b></font></center>");
            }
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
        var interF=document.getElementById("nTerminosFP3").value;
        var datosOkE=0;
        var datosOkD=0;
        var datosOkI=0;
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
        if (interF!="") {
            console.log("Cantidad Terminos OK!");
            datosOkI=1;
        }
        else
        {
            console.log("Cantidad Terminos FAIL!");
            datosOkI=0;
        }
        if (datosOkE==1 && datosOkD==1 && datosOkI==1) {
            //Inicia el proceso para generar el término general...
            //desarrollo del término general...
            $("#Cargando").html("<font size='3'><center><table border='0'>"+
                                                "<tr>"+
                                                    "<td rowspan='3'><b>S<sub>n</sub> =</b></td>"+
                                                    "<td style='text-align: center;'> a<sub>1</sub> (r<sup>n</sup> - 1)</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td>-------------------</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td style='text-align: center;'>r - 1</td>"+
                                                "</tr>"+
                                                "</table></font>"+
                "<br><b>Sustituimos los datos en la posición que ocupan dentro de la fórmula general</b>"+
                "<br></center>");
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
            //obtener valor de los datos que seran interpolados
            //interF=parseInt(interF);
            //Imprimir primeros datos en pantalla...
            //primera fila...
            //$("#Cargando").append("<font size='3'><center>a<sub>n</sub> = ");
            //primer termino
            var impresionPTS;
            var impresionPT;
            var impresionD;
            var impresionExpo;
            var esRestaF=0;
            //primer parte, elevar la fraccion al exponente ingresado
            var exponenteFraccionN;
            var exponenteFraccionD;
            console.log("Datos normales: ",efd,nfd,dfd);
            if (efd!=0) {
                if (nfd==0) {
                    nfd=efd;
                    dfd=1;
                    efd=0;
                }
                else
                {
                    nfd=(efd * dfd) + nfd;
                    dfd=dfd;
                    efd=0;
                    console.log("Entro...");
                }
            }
            console.log("Datos: ",nfd,dfd,interF);
            exponenteFraccionN=Math.pow(nfd,interF);
            exponenteFraccionD=Math.pow(dfd,interF);
            //PRIMER TERMINO
            if (efe==0) {
                //$("#Cargando").append("<font size='3'><center>a<sub>n</sub> = <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub> + (n - 1) ");
                /*if (nfe<0) {
                    impresionPT=" <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub> ";
                    //esRestaF=1;
                }
                else
                {*/
                    impresionPTS=" <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub> (";
                    //esRestaF=0;
                //}
            }
            else
            {
                if (nfe==0) {
                    //if (efe<0) {
                        impresionPTS=" "+efe+" (";
                      //  esRestaF=1;
                    //}
                    //else
                    //{
                      //  impresionPT=""+efe+"";
                        //esRestaF=0;
                    //}
                    //$("#Cargando").append("<font size='3'><center>a<sub>n</sub> = "+efe+" + (n - 1) ");
                }
                else
                {
                    //if (efe<0) {
                        impresionPTS=efe+" <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub> (";
                    /*    esRestaF=1;
                    }
                    else{
                        impresionPT=""+efe+" <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub>";
                        esRestaF=0;
                    }*/
                    //$("#Cargando").append("<font size='3'><center>a<sub>n</sub> = "+efe+" <sup>"+nfe+"</sup>/<sub>"+dfe+"</sub> + (n - 1) ");
                }
            }
            //SEGUNDO TERMINO
            console.log(efd,nfd,dfd);
            if (efd==0) {
                //$("#Cargando").append("<font size='3'>( <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> )");
                /*if (nfd<0) {
                    impresionPT=impresionPT+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> - 1)"; 
                    esRestaF=1;   
                }
                else
                {*/
                    if (dfd==1) {
                        impresionPT=impresionPTS+" ("+nfd+")<sup>"+interF+"</sup>  - 1)";
                        impresionD=nfd+" - 1";
                    }
                    else
                    {
                        impresionPT=impresionPTS+" (<sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>)<sup>"+interF+"</sup>  - 1)";
                        impresionD="<sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>  - 1";
                    }
                    if (exponenteFraccionD==1) {
                        impresionExpo=impresionPTS+" "+exponenteFraccionN+" - 1)";
                    }
                    else
                    {
                        impresionExpo=impresionPTS+ "<sup>"+exponenteFraccionN+"</sup>/<sub>"+exponenteFraccionD+"</sub>  - 1)";    
                    }
                    
                   /* esRestaF=0;
                }*/                
            }
            else
            {
                if (nfd==0) {
                    //$("#Cargando").append("<font size='3'>( "+efd+" )");
                    /*if (efd<0) {
                        impresionPT=impresionPT+" ( "+efd+" ) )";
                        esRestaF=1;
                    }
                    else
                    {*/
                        impresionPT=impresionPTS+" ("+efd+")<sup>"+interF+"</sup> - 1)";
                        impresionD=efd+" - 1";
                        impresionExpo=impresionPTS+ "<sup>"+exponenteFraccionN+"</sup>/<sub>"+exponenteFraccionD+"</sub>  - 1)";
                        /*esRestaF=0;
                    }*/                    
                }
                else
                {
                    //$("#Cargando").append("<font size='3'>( "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> )");
                   /* if (efd<0) {
                        impresionPT=impresionPT+" ( "+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> ) )";
                        esRestaF=1;
                    }
                    else
                    {*/
                        impresionPT=impresionPTS+" ("+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub>)<sup>"+interF+"</sup> - 1)";
                        impresionD=efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub> - 1";
                        impresionExpo=impresionPTS+ "<sup>"+exponenteFraccionN+"</sup>/<sub>"+exponenteFraccionD+"</sub>  - 1)";
                       /* esRestaF=0;
                    }*/                    
                }
            }
            //impresion de primera linea
            $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                                "<tr>"+
                                                    "<td rowspan='3'><b>S<sub>"+interF+"</sub> =</b></td>"+
                                                    "<td style='text-align: center;'>"+impresionPT+"</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td>--------------------------</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td style='text-align: center;'>"+impresionD+"</td>"+
                                                "</tr>"+
                                                "</table></center></font>");
            restaFracciones(efd,nfd,dfd,-1,0,0);
            nuevoER=enteroRestaGlobal;
            nuevoNR=numeradorRestaGlobal;
            nuevoDR=denominadorRestaGlobal;
            if (nuevoER!=0) {
                if (nuevoNR!=0) {
                    if (efd<0 || nfd<0) {
                        nuevoNR=(nuevoER * nuevoDR) - nuevoNR;
                        nuevoDR=nuevoDR;
                        nuevoER=0;
                    }
                    else
                    {
                        nuevoNR=(nuevoER * nuevoDR) + nuevoNR;
                        nuevoDR=nuevoDR;
                        nuevoER=0;
                    }
                }
            }
            if (nuevoDR==1) {
                impresionD=" "+nuevoNR;
            }
            else
            {
                impresionD=" <sup>"+nuevoNR+"</sup>/<sub>"+nuevoDR+"</sub>";
            }
            //Impresion con la fraccion ya elevada al exponente
            $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                                "<tr>"+
                                                    "<td rowspan='3'><b>S<sub>"+interF+"</sub> =</b></td>"+
                                                    "<td style='text-align: center;'>"+impresionExpo+"</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td>--------------------------</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td style='text-align: center;'>"+impresionD+"</td>"+
                                                "</tr>"+
                                                "</table></center></font>");
            //resta de la fraccion ya elevada al exponente con -1
            var nuevoEF;
            var nuevoNF;
            var nuevoDF;
            var nuevoER;
            var nuevoNR;
            var nuevoDR;
            restaFracciones(0,exponenteFraccionN,exponenteFraccionD,-1,0,0);
            nuevoEF=enteroRestaGlobal;
            nuevoNF=numeradorRestaGlobal;
            nuevoDF=denominadorRestaGlobal;
            if (nuevoEF!=0) {
                if (nuevoNF!=0) {
                    if (exponenteFraccionN<0) {
                        nuevoNF=(nuevoEF * nuevoDF) - nuevoNF;
                        nuevoDF=nuevoDF;
                        nuevoEF=0;
                    }
                    else{
                        nuevoNF=(nuevoEF * nuevoDF) + nuevoNF;
                        nuevoDF=nuevoDF;
                        nuevoEF=0;
                    }
                }
            }
            
            console.log("Resta: ",nuevoEF,nuevoNF,nuevoDF);
            console.log("Resta: ",nuevoER,nuevoNR,nuevoDR);
            if (nuevoDF==1) {
                impresionPT=impresionPTS+" "+nuevoNF+")";
            }
            else
            {
                impresionPT=impresionPTS+" <sup>"+nuevoNF+"</sup>/<sub>"+nuevoDF+"</sub> )";
            }
            //Impresion con la fraccion ya restada, arriba y abajo
            $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                                "<tr>"+
                                                    "<td rowspan='3'><b>S<sub>"+interF+"</sub> =</b></td>"+
                                                    "<td style='text-align: center;'>"+impresionPT+"</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td>--------------------------</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td style='text-align: center;'>"+impresionD+"</td>"+
                                                "</tr>"+
                                                "</table></center></font>");
            //Proceso de multiplicacion....
            var enteroMulti;
            var numeradorMulti;
            var denominadorMulti;
            if (efe!=0) {
                if (efe<0) {
                    efe=Math.abs(efe);
                    nfe=(efe * dfe) + nfe;
                    nfe=nfe * -1;
                    dfe=dfe;
                    efe=0;
                }
                else
                {
                    if (nfe==0) {
                        nfe=efe;
                        dfe=1;
                    }
                    else
                    {
                        nfe=(efe * dfe) + nfe;
                        dfe=dfe;
                        efe=0;
                    }
                }
            }
            multiplicarF(nuevoNF,nuevoDF,nfe,dfe);
            enteroMulti=enteroMultiGlobal;
            numeradorMulti=numeradorMultiGlobal;
            denominadorMulti=denominadorMultiGlobal;
            console.log("Multiplicacion: ",enteroMulti,numeradorMulti,denominadorMulti);
            if (enteroMulti==0) {
                if (denominadorMulti==1) {
                    impresionPT=" "+numeradorMulti;
                }
                else{
                    impresionPT="<sup>"+numeradorMulti+"</sup>/<sub>"+denominadorMulti+"</sub>";
                }
            }
            else
            {
                if (numeradorMulti==0) {
                    impresionPT=enteroMulti;
                    denominadorMulti=0;
                    /*numeradorMulti=enteroMulti;
                    denominadorMulti=1;
                    enteroMulti=0;*/
                }
                else
                {
                    impresionPT=enteroMulti+"   <sup>"+numeradorMulti+"</sup>/<sub>"+denominadorMulti+"</sub>";
                }
            } 
            $("#Cargando").append("<br><font size='3'><center><table border='0'>"+
                                                "<tr>"+
                                                    "<td rowspan='3'><b>S<sub>"+interF+"</sub> =</b></td>"+
                                                    "<td style='text-align: center;'>"+impresionPT+"</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td>--------------------------</td>"+
                                                "</tr>"+
                                                "<tr>"+
                                                    "<td style='text-align: center;'>"+impresionD+"</td>"+
                                                "</tr>"+
                                                "</table></center></font>");
            //multiplicacion final
            var nuevoED;
            var nuevoND;
            var nuevoDD; 
            divisionFracciones(enteroMulti,numeradorMulti,denominadorMulti,nuevoER,nuevoNR,nuevoDR);
            nuevoED=enteroDivisionGlobal;
            nuevoND=numeradorDivisionGlobal;
            nuevoDD=denominadorDivisionGlobal;
            console.log("Final: ",nuevoED,nuevoND,nuevoDD);
            if (nuevoED==0) {
                if (nuevoDD==1 || nuevoDD==0) {
                    $("#Cargando").append("<br><font size='3'><center><b>S<sub>"+interF+"</sub> = </b>"+nuevoND+"</center></font>");
                    $("#Cargando").append("<br><center><font size='3'>Por lo tanto la sumatoria es:<b> "+nuevoND+"</b></font></center>");
                }
                else
                {
                    $("#Cargando").append("<br><font size='3'><center><b>S<sub>"+interF+"</sub> = </b><sup>"+nuevoND+"</sup>/<sub>"+nuevoDD+"</sub></center></font>");
                    $("#Cargando").append("<br><center><font size='3'>Por lo tanto la sumatoria es:<b> <sup>"+nuevoND+"</sup>/<sub>"+nuevoDD+"</sub> </b></font></center>");
                }
                
            }
            else
            {
                if (nuevoND==0) {
                    $("#Cargando").append("<br><font size='3'><center><b>S<sub>"+interF+"</sub> =</b> "+nuevoED+"</center></font>");
                    $("#Cargando").append("<br><center><font size='3'>Por lo tanto la sumatoria es:<b> "+nuevoED+"</b></font></center>");
                }
                else
                {
                    $("#Cargando").append("<br><font size='3'><center><b>S<sub>"+interF+"</sub> = </b>"+nuevoED+" <sup>"+nuevoND+"</sup>/<sub>"+nuevoDD+"</sub></center></font>");
                    $("#Cargando").append("<br><center><font size='3'>Por lo tanto la sumatoria es:<b> "+nuevoED+" <sup>"+nuevoND+"</sup>/<sub>"+nuevoDD+"</sub> </b></font></center>");
                }
            }
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
function reestablecerOperacion(){
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
            document.getElementById("primerTerminoP3").value="";
            document.getElementById("nTerminosP3").value="";
            document.getElementById("razonTerminoP3").value="";
            document.getElementById("conozco").checked=false;
            document.getElementById("razonTerminoP3").disabled=false;
            //Limpiando fracciones
            document.getElementById("enteroFraccionE").value="";
            document.getElementById("numeradorFraccionE").value="";
            document.getElementById("denominadorFraccionE").value="";
            document.getElementById("denominadorFraccionD").value="";
            document.getElementById("enteroFraccionD").value="";
            document.getElementById("numeradorFraccionD").value="";            
            document.getElementById("nTerminosFP3").value="";
            document.getElementById("conozcoF").checked=false;
            //MODAL ENTEROS
            document.getElementById("primerTerminoM5").value="";
            document.getElementById("distanciaM5").value="";
            document.getElementById("nTerminosM5").value="";
            document.getElementById("ultimoM5").value="";
            //MODAL FRACCION
            document.getElementById("enteroFM6").value="";
            document.getElementById("numeradorFM6").value="";
            document.getElementById("denominadorFM6").value="";
            document.getElementById("nTerminosM6").value="";
            document.getElementById("enteroDM6").value="";
            document.getElementById("numeradorDM6").value="";            
            document.getElementById("denominadorDM6").value="";
            document.getElementById("enteroUM6").value="";
            document.getElementById("numeradorUM6").value="";            
            document.getElementById("denominadorUM6").value="";
            ///cambio de vista
            $("#Sucesion").fadeOut();
            $("#Cargando").fadeIn(300);
         });//cierre del swal
}
///funcion para multiplicar fracciones
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
//funcion que realiza la suma de fracciones
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
                    yaPinto=0;
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
                    yaPinto=0;
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
                    yaPinto=0;
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
                    enteroFinal=entero1+entero2;
                    if (enteroFinal==0) {
                        if (entero1<0) {
                            numeradorFinal=numeradorPrimerT*-1;
                        }
                        else
                        {
                            numeradorFinal=numeradorPrimerT;
                        }
                        denominadorFinal=denominadorPrimerT;
                    }
                    else
                    {
                        numeradorFinal=numeradorPrimerT;
                        denominadorFinal=denominadorPrimerT;
                    }
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
                        yaPinto=0;
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
                        yaPinto=0;                           
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
                        /*if (entero2>0) {
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
                        }*/
                        console.log(entero2,numeradorDistancia,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                        restaFracciones(entero2,numeradorDistancia,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);            
                        pasoResta=1;
                        yaPinto=0;
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
}//fin de funcion para suma de fracciones
//Division de fracciones
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
    //divisones para reducir fracciones
    var reduccionUno;
    var reduccionDos;
    var reduccionTres;
    var reduccionCuatro;
    var reduccionCinco;
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
        //reducciones de las fracciones
        //entre ellas mismas
        if (Math.abs(obtenidoNume)!=1) {
            reduccionUno=obtenidoDeno/obtenidoNume;
            if (reduccionUno % 1 ==0) {
                obtenidoNum=1;
                obtenidoDeno=parseInt(reduccionUno);
            }
        }
        if (Math.abs(datoNumDT)!=1) {
            reduccionDos=datoDenDT/datoNumDT;
            if (reduccionDos % 1 ==0) {
                datoNumDT=1;
                datoDenDT=parseInt(reduccionDos);
            }
        }
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
            console.log(datoNumDT,datoDenDT);
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
                   // if (datoDenDT!=1) {
                        numDivisionNuevo=datoDenDT;
                        denDivisionNuevo=datoNumDT;
                    /*}
                    else
                    {
                        numDivisionNuevo=datoNumDT;
                        denDivisionNuevo=datoDenDT;
                    }*/
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
        console.log("Nuevos datos (division): ",numGlobalNuevo,denGlobalNuevo);
        console.log("Nuevos datos (division): ",numDivisionNuevo,denDivisionNuevo);
        //************** PROCESO PARA MULTIPLICAR LAS FRACCIONES YA RECONFIGURADAS *******************//
        //reduccion de fracciones
        if (denGlobalNuevo!=1) {
            reduccionTres=numDivisionNuevo/denGlobalNuevo;
            if (reduccionTres % 1 ==0) {
                denGlobalNuevo=1;
                numDivisionNuevo=parseInt(reduccionTres);
            }
        }
        if (denDivisionNuevo!=1) {
            reduccionCuatro=numGlobalNuevo/denDivisionNuevo;
            if (reduccionCuatro % 1 ==0) {
                denDivisionNuevo=1;
                numGlobalNuevo=parseInt(reduccionCuatro);
            }
        }
        if (numDivisionNuevo!=1) {
            reduccionCinco=denGlobalNuevo/numDivisionNuevo;
            if (reduccionCinco % 1 ==0) {
                numDivisionNuevo=1;
                denGlobalNuevo=parseInt(reduccionCinco);
            }
        }
        console.log(numGlobalNuevo,denGlobalNuevo,numDivisionNuevo,denDivisionNuevo);
        if (denGlobalNuevo==numDivisionNuevo) {
            if (denDivisionNuevo==1) {
                //numDivisionNuevo=1;
                //denDivisionNuevo=1;
                //denGlobalNuevo=1;
                respaldoCambio=denDivisionNuevo;
                denDivisionNuevo=numDivisionNuevo;
                numDivisionNuevo=respaldoCambio;
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
//funcion que realiza las sucesiones
function sucesionFracciones(entero1,numeradorPrimerT,denominadorPrimerT,cantidadT,entero2,numeradorDistancia,denominadorDistancia,efd,nfd,dfd){
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
    var impreSuce;
        entro=0;
        console.log("Datos: ", entero1,numeradorPrimerT+"/"+denominadorPrimerT,entero2,numeradorDistancia+"/"+denominadorDistancia," cantidadT:",cantidadT);
        //IMPRESION DEL PRIMER TERMINO DE LA SUCESION
        if (entero2==0) {
            if (denominadorDistancia==1) {
                $("#Sucesion").html("<center>Una vez que se conoce el valor la distancia (<b>"+ numeradorDistancia +"</b>) entre términos, se conocen los medios aritméticos entre los extremos dados, los cuales son: <center>");
            }
            else
            {
                $("#Sucesion").html("<center>Una vez que se conoce el valor la distancia (<b><sup>"+numeradorDistancia+"</sup>/<sub>"+denominadorDistancia+"</sub></b>) entre términos, se conocen los medios aritméticos entre los extremos dados, los cuales son: <center>");
            }
        }
        else
        {
            if (numeradorDistancia==0) {
                $("#Sucesion").html("<center>Una vez que se conoce el valor la distancia (<b>"+ entero2 +"</b>) entre términos, se conocen los medios aritméticos entre los extremos dados, los cuales son: <center>");
            }
            else
            {
                $("#Sucesion").html("<center>Una vez que se conoce el valor la distancia (<b>"+ entero2 +" <sup>"+numeradorDistancia+"</sup>/<sub>"+denominadorDistancia+"</sub></b>) entre términos, se conocen los medios aritméticos entre los extremos dados, los cuales son: <center>");
            }
        }
        //inicio de impresion en una variable del siguiente dato de la sucesion...
        if (entero1==0) {
            impreSuce="<b><sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub>, </b>";
        }
        else
        {
            if (numeradorPrimerT!=0) {
                //$("#ResultadoFinal").append(entero1+" <sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub> , ");
                impreSuce="<b>"+entero1+" <sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub> , </b>";       
            }
            else
            {
                //$("#ResultadoFinal").append(entero1+" , ");
                impreSuce="<b>"+entero1+", </b>";
            }            
        }
        for(var i=1;i<=cantidadT;i++){
            console.log("Datos: ", entero1,numeradorPrimerT+"/"+denominadorPrimerT,entero2,numeradorDistancia+"/"+denominadorDistancia," cantidadT:",cantidadT);
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
                                    impreSuce=impreSuce+""+enteroFinal+", ";
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                    impreSuce=impreSuce+""+enteroFinal+", ";
                                }
                            }  
                            else
                            {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                            impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                            impreSuce=impreSuce+""+numeradorFinal+", ";
                            }
                            else
                            {
                                enteroSumaGlobal=0;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                            impreSuce=impreSuce+"<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal; */  
                            impreSuce=impreSuce+""+enteroFinal+", "; 
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
                        yaPinto=0;
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
                                    impreSuce=impreSuce+""+enteroFinal+", ";
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                    impreSuce=impreSuce+""+enteroFinal+", ";
                                }
                            }  
                            else
                            {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                            impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                            impreSuce=impreSuce+""+numeradorFinal+", ";
                            }
                            else
                            {
                                enteroSumaGlobal=0;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";  */
                            impreSuce=impreSuce+"<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";  
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;    */
                            impreSuce=impreSuce+""+enteroFinal+", ";
                        }
                        
                    }
                }
                if ((entero1>0 || numeradorPrimerT>0) && (entero2>0 || numeradorDistancia>0)) {
                    console.log("Mayor,mayor");
                    if (entero1>=0 && entero2>=0) {
                        pasoResta=1;
                        yaPinto=0;
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
                                    impreSuce=impreSuce+""+enteroFinal+", ";
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                    impreSuce=impreSuce+""+enteroFinal+", ";
                                }
                            }  
                            else
                            {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                            impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                            impreSuce=impreSuce+""+numeradorFinal+", ";  
                            }
                            else
                            {
                                enteroSumaGlobal=0;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                            impreSuce=impreSuce+"<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            console.log("3....a");
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;   */ 
                            impreSuce=impreSuce+""+enteroFinal+", ";
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
                        //entero1=0;
                        if (numeradorPrimerT<0) {
                            numeradorPrimerT=numeradorPrimerT * -1;
                        }
                        restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                    }//cierre si el entero no existe
                    if (realizoOperacion==1) {
                        yaPinto=0;
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
                                    impreSuce=impreSuce+""+enteroFinal+", ";
                                }
                                if (denominadorFinal==0 && interno==0) {
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                    datoIgual=""+enteroFinal;*/
                                    impreSuce=impreSuce+""+enteroFinal+", ";
                                }
                            }  
                            else
                            {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                            impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                                impreSuce=impreSuce+""+numeradorFinal+", ";
                            }
                            else
                            {
                                enteroSumaGlobal=0;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                                impreSuce=impreSuce+"<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
                            }
                            
                        }
                        if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=0;
                            denominadorSumaGlobal=0;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                            datoIgual=""+enteroFinal;    */
                            impreSuce=impreSuce+""+enteroFinal+", ";
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
                                impreSuce=impreSuce+""+enteroFinal+", ";
                            }
                            if (denominadorFinal==0 && interno==0) {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;*/
                                impreSuce=impreSuce+""+enteroFinal+", ";
                            }
                        }  
                        else
                        {
                            enteroSumaGlobal=enteroFinal;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                            impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                            impreSuce=impreSuce+""+numeradorFinal+", ";
                        }
                        else
                        {
                            enteroSumaGlobal=0;
                            numeradorSumaGlobal=numeradorFinal;
                            denominadorSumaGlobal=denominadorFinal;
                            /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                            datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                            impreSuce=impreSuce+"<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
                        }
                        
                    }
                    if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                        enteroSumaGlobal=enteroFinal;
                        numeradorSumaGlobal=0;
                        denominadorSumaGlobal=0;
                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                        datoIgual=""+enteroFinal;    */
                        impreSuce=impreSuce+""+enteroFinal+", ";
                    }
                    pasoResta=1;
                }
                else
                {
                    if (entero1!=0) {
                        //si el valor entero para el primer termino es negativo y el valor del entero TD es positivo
                        if (entero1<0 && entero2>0) {
                            entro=1;
                            yaPinto=0;
                            entero1=entero1 * -1;
                            restaFracciones(entero1,numeradorPrimerT,denominadorPrimerT,entero2,numeradorDistancia,denominadorDistancia);
                            pasoResta=1;
                            enteroFinal=enteroRestaGlobal;
                            numeradorFinal=numeradorRestaGlobal;
                            denominadorFinal=denominadorRestaGlobal;
                            console.log("Valor restarado 1: ",enteroFinal,numeradorFinal,denominadorFinal);
                            if (enteroFinal!=0 && numeradorFinal!=0 && denominadorFinal!=0) {
                                console.log("Pinto....2");
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
                                        impreSuce=impreSuce+""+enteroFinal+", ";
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        enteroSumaGlobal=enteroFinal;
                                        numeradorSumaGlobal=0;
                                        denominadorSumaGlobal=0;
                                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;*/
                                        impreSuce=impreSuce+""+enteroFinal+", ";
                                    }
                                }  
                                else
                                {
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=numeradorFinal;
                                    denominadorSumaGlobal=denominadorFinal;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                                    impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
                                }
                                yaPinto=1;
                            }
                            if (enteroFinal==0 && numeradorFinal!=0 && denominadorFinal!=0 && yaPinto==0) {
                                console.log("Pinto....2");
                                if (denominadorFinal==1) {
                                    enteroSumaGlobal=numeradorFinal;
                                    numeradorSumaGlobal=0;
                                    denominadorSumaGlobal=0;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+numeradorFinal+"</font> , ");
                                    datoIgual=""+numeradorFinal;    */
                                    impreSuce=impreSuce+""+numeradorFinal+", ";
                                }
                                else
                                {
                                    enteroSumaGlobal=0;
                                    numeradorSumaGlobal=numeradorFinal;
                                    denominadorSumaGlobal=denominadorFinal;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                                    impreSuce=impreSuce+"<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
                                }
                               yaPinto=1; 
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                console.log("Pinto....3");
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;    */
                                impreSuce=impreSuce+""+enteroFinal+", ";
                            }
                        }
                        if (entero2<0 || numeradorDistancia<0) {
                            entro=1;
                            yaPinto=0;
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
                                        impreSuce=impreSuce+""+enteroFinal+", ";
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        enteroSumaGlobal=enteroFinal;
                                        numeradorSumaGlobal=0;
                                        denominadorSumaGlobal=0;
                                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;*/
                                        yaPinto=1;
                                        impreSuce=impreSuce+""+enteroFinal+", ";
                                    }
                                }  
                                else
                                {
                                    enteroSumaGlobal=enteroFinal;
                                    numeradorSumaGlobal=numeradorFinal;
                                    denominadorSumaGlobal=denominadorFinal;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual=""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                                    impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                                    impreSuce=impreSuce+""+numeradorFinal+", ";
                                    yaPinto=1;  
                                }
                                else
                                {
                                    enteroSumaGlobal=0;
                                    numeradorSumaGlobal=numeradorFinal;
                                    denominadorSumaGlobal=denominadorFinal;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                                    impreSuce=impreSuce+"<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
                                    yaPinto=1;
                                }
                            }
                            if (enteroFinal!=0 && numeradorFinal==0 && denominadorFinal==0 && yaPinto==0) {
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=0;
                                denominadorSumaGlobal=0;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                datoIgual=""+enteroFinal;  */
                                impreSuce=impreSuce+""+enteroFinal+", ";
                            }
                        }
                        if ((entero1<0 || numeradorPrimerT<0) && (entero2>0 || numeradorDistancia>0)) {
                            entro=1;
                            yaPinto=0;
                            console.log("Entro donde acabo dep oner esto...2");
                            /*if (entero2>0) {
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
                            }*/
                            console.log(entero2,numeradorDistancia,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
                            restaFracciones(entero2,numeradorDistancia,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);            
                            pasoResta=1;
                            enteroFinal=enteroRestaGlobal;
                            numeradorFinal=numeradorRestaGlobal;
                            denominadorFinal=denominadorRestaGlobal;
                            if (enteroFinal!=0) {
                                if (enteroFinal>0) {
                                    if (numeradorFinal<0) {
                                        numeradorFinal=numeradorFinal * -1;
                                    }
                                }
                                if (enteroFinal<0) {
                                    if (numeradorFinal<0) {
                                        numeradorFinal=numeradorFinal * -1;
                                    }
                                }
                            }
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
                                        impreSuce=impreSuce+""+enteroFinal+", ";
                                        yaPinto=1;
                                    }
                                    if (denominadorFinal==0 && interno==0) {
                                        enteroSumaGlobal=enteroFinal;
                                        numeradorSumaGlobal=0;
                                        denominadorSumaGlobal=0;
                                        /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+"</font> , ");
                                        datoIgual=""+enteroFinal;*/
                                        impreSuce=impreSuce+""+enteroFinal+", ";
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
                                    impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                                    impreSuce=impreSuce+""+numeradorFinal+", ";
                                    yaPinto=1;
                                }
                                else
                                {
                                    enteroSumaGlobal=0;
                                    numeradorSumaGlobal=numeradorFinal;
                                    denominadorSumaGlobal=denominadorFinal;
                                    /*$("#ResultadoFinal").append("<font size='5' color='black'><sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                    datoIgual="<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";    */
                                    impreSuce=impreSuce+"<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                                impreSuce=impreSuce+""+enteroFinal+", ";
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
                        impreSuce=impreSuce+""+enteroFinal+", ";
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
                        impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                            impreSuce=impreSuce+""+enteroFinal+", ";
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
                            impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
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
                                impreSuce=impreSuce+"<sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";   
                            }
                            else
                            {
                                //console.log("Entero Final mayor de 0");
                                enteroSumaGlobal=enteroFinal;
                                numeradorSumaGlobal=numeradorFinal;
                                denominadorSumaGlobal=denominadorFinal;
                                /*$("#ResultadoFinal").append("<font size='5' color='black'>"+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub></font> , ");
                                datoIgual=enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>";*/
                                impreSuce=impreSuce+""+enteroFinal+" <sup>"+numeradorFinal+"</sup>/<sub>"+denominadorFinal+"</sub>, ";
                            }
                        }
                    }
                }
            }//fin del cerro resta
            entero1=enteroSumaGlobal;
            numeradorPrimerT=numeradorSumaGlobal;
            denominadorPrimerT=denominadorSumaGlobal;
        }//cierre del for
        //inicio de impresion en una variable del siguiente dato de la sucesion...
        if (efd==0) {
            impreSuce=impreSuce+"<b><sup>"+nfd+"</sup>/<sub>"+dfd+"</sub></b>";
        }
        else
        {
            if (nfd!=0) {
                //$("#ResultadoFinal").append(entero1+" <sup>"+numeradorPrimerT+"</sup>/<sub>"+denominadorPrimerT+"</sub> , ");
                impreSuce=impreSuce+"<b>"+efd+" <sup>"+nfd+"</sup>/<sub>"+dfd+"</sub></b>";       
            }
            else
            {
                //$("#ResultadoFinal").append(entero1+" , ");
                impreSuce=impreSuce+"<b>"+efd+"</b>";
            }            
        }
        $("#Sucesion").append("<br><center><h3 class='btn btn-white' style='border-color: #23c6c8;'>"+impreSuce+"</h3></center>");
        $("#Sucesion").append("<br><font size='3'><center><button style='button' class='btn btn-warning btn-rounded' onclick='mostrarProceso()'>Proceso</button></center></font>");
}//fin de funcion que realiza la sucesiones...
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
        content: "Ingresa los datos correspondientes al primer termino y cantidad de términos y ultimo término",
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
function mostrarComprobacion(){
    $("#Cargando").fadeOut(0);
    $("#Sucesion").fadeIn(300);
}
function mostrarProceso(){
    $("#Sucesion").fadeOut(0);
    $("#Cargando").fadeIn(300);
}
function GenerarUltimo(){
    var pt;
    var nt;
    var vnt;
    var division;
    var multi;
    var suma;
    var powOperacion;
    pt=document.getElementById("primerTerminoM5").value;
    nt=document.getElementById("posicionTerminoM5").value;
    vnt=document.getElementById("valorTerminoM5").value;
    pt=parseFloat(pt);
    nt=parseFloat(nt);
    vnt=parseInt(vnt);
    division=vnt / pt;
    nt=nt - 1;
    powOperacion=Math.pow(division,1/nt);
    if (powOperacion % 1 ==0) {
        powOperacion=powOperacion;
    }
    else
    {
        powOperacion=powOperacion.toFixed(2);
    }
    document.getElementById("razonM5").value=powOperacion;
    document.getElementById("primerTerminoP3").value=pt;
    //document.getElementById("nTerminosP3").value=nt;
    document.getElementById("razonTerminoP3").value=powOperacion;
}
function GenerarUltimoF(){
  var entero1;
  var numeradorPrimerT;
  var denominadorPrimerT;
  var cantidadT;
  var entero2;
  var numeradorDistancia;
  var denominadorDistancia;
  //para division
  var enteroObtenidoD;
  var numeradorObtenidoD;
  var denominadorObtenidoD;
  //variables para la raiz
  var powNumerador;
  var powDenominador;
  //validacion de los datos ingresados
  var nTerminos;
  nTerminos=document.getElementById("nTerminosM6").value;
  nTerminos=parseInt(nTerminos);
  nTerminos=nTerminos - 1;
  //variables para resultadoFinal
  var enteroFinal;
  var numeradorFinal;
  var denominadorFinal;
  var division;
  //
  if (document.getElementById("enteroFM6").value=="") {
    entero1=0;
  }
  else{
    entero1=parseInt(document.getElementById("enteroFM6").value);
  }
  if (document.getElementById("numeradorFM6").value=="") {
    numeradorPrimerT=0;
  }
  else{
    numeradorPrimerT=parseInt(document.getElementById("numeradorFM6").value);
  }
  if (document.getElementById("denominadorFM6").value=="") {
    denominadorPrimerT=0;
  }
  else{
    denominadorPrimerT=parseInt(document.getElementById("denominadorFM6").value);
  }
  if (document.getElementById("nTerminosM6").value=="") {
    cantidadT=0;
  }
  else{
    cantidadT=parseInt(document.getElementById("nTerminosM6").value);
  }
  if (document.getElementById("enteroDM6").value=="") {
    entero2=0;
  }
  else{
    entero2=parseInt(document.getElementById("enteroDM6").value);
  }
  if (document.getElementById("numeradorDM6").value=="") {
    numeradorDistancia=0;
  }
  else{
    numeradorDistancia=parseInt(document.getElementById("numeradorDM6").value);
  }
  if (document.getElementById("denominadorDM6").value=="") {
    denominadorDistancia=0;
  }
  else{
    denominadorDistancia=parseInt(document.getElementById("denominadorDM6").value);
  }
  //division del termino n y primer termino
  divisionFracciones(entero2,numeradorDistancia,denominadorDistancia,entero1,numeradorPrimerT,denominadorPrimerT);
  enteroObtenidoD=enteroDivisionGlobal;
  numeradorObtenidoD=numeradorDivisionGlobal;
  denominadorObtenidoD=denominadorDivisionGlobal;
  console.log("Division: ",enteroObtenidoD,numeradorObtenidoD,denominadorObtenidoD);
  //ejecutar la raiz...
  if (enteroObtenidoD!=0) {
    numeradorObtenidoD=(enteroObtenidoD * denominadorObtenidoD) + numeradorObtenidoD;
    denominadorObtenidoD=denominadorObtenidoD; 
  }
  powNumerador=Math.pow(numeradorObtenidoD,1/nTerminos);
  powDenominador=Math.pow(denominadorObtenidoD,1/nTerminos);
  reduce(powNumerador,powDenominador);
  numeradorFinal=nuevoAn;
  denominadorFinal=nuevoAd;
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
        enteroFinal=0;
    }
    console.log("Final: ",enteroFinal,numeradorFinal,denominadorFinal);
    if (enteroFinal==0) {
        if (denominadorFinal==1) {
            document.getElementById("enteroUM6").value=numeradorFinal;
            document.getElementById("numeradorUM6").value="";
            document.getElementById("denominadorUM6").value="";
            document.getElementById("enteroFraccionD").value=numeradorFinal;
            document.getElementById("numeradorFraccionD").value="";
            document.getElementById("denominadorFraccionD").value="";
        }
        else
        {
            document.getElementById("enteroUM6").value="";
            document.getElementById("numeradorUM6").value=numeradorFinal;
            document.getElementById("denominadorUM6").value=denominadorFinal;
            document.getElementById("enteroFraccionD").value="";
            document.getElementById("numeradorFraccionD").value=numeradorFinal;
            document.getElementById("denominadorFraccionD").value=denominadorFinal;
        }
    }
    else
    {
        if (numeradorFinal==0) {
            document.getElementById("enteroUM6").value=enteroFinal;
            document.getElementById("numeradorUM6").value="";
            document.getElementById("denominadorUM6").value="";
            document.getElementById("enteroFraccionD").value=enteroFinal;
            document.getElementById("numeradorFraccionD").value="";
            document.getElementById("denominadorFraccionD").value="";
        }
        else
        {
            document.getElementById("enteroUM6").value=enteroFinal;
            document.getElementById("numeradorUM6").value=numeradorFinal;
            document.getElementById("denominadorUM6").value=denominadorFinal;
            document.getElementById("enteroFraccionD").value=enteroFinal;
            document.getElementById("numeradorFraccionD").value=numeradorFinal;
            document.getElementById("denominadorFraccionD").value=denominadorFinal;
        }
    }
    document.getElementById("enteroFraccionE").value=document.getElementById("enteroFM6").value;
    document.getElementById("numeradorFraccionE").value=document.getElementById("numeradorFM6").value;
    document.getElementById("denominadorFraccionE").value=document.getElementById("denominadorFM6").value;
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
              //  enteroprincipal=document.getElementById("enteroPT").value;
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
</script>