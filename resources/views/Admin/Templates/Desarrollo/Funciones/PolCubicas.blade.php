<div class="ibox float-e-margins animated fadeInUpBig">
	<div class="ibox-title">
   	<h5>Funciones Polinomiales - <small> Cúbicas</small></h5>
   </div>
   <div class="ibox-content">
	   <div class="panel-body">
	   	<div class="panel-group" id="accordion">
         	<div class="panel panel-default">
         		<div class="panel-heading">
               	<h5 class="panel-title">
               		<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>Teoría</b></a>
               	</h5>
						</div>
           	<div id="collapse1" class="panel-collapse in">
              	<div class="panel-body">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<p style="text-align: justify;">
												La <b>función cúbica</b> se define como polinomio de tercer grado; es decir, el mayor exponente de <b>x</b> es <b>3</b>(x<sup>3</sup>) y su gráfico es una curva, cuyo dominio y recorrido es el conjunto de los números reales.
									        Tiene la forma:
									          <center>
									              <img src="img/iconos/funciones/polinomiales/cubica/fcubica.png" width="100%" style="position: center; max-width: 350px;"/>
									          </center>
							          <div class="panel panel-default">
							              <div class="panel-body">
							                  <b>Donde:</b>
							                 <br><br>
							                 <b>a, b, c : </b> Pertenecen a los números reales.
							                 <br><br>
							                 <b>x : </b> Variable de la ecuación y con exponente maximo 3.
							                 <br><br>
							                 <b>a : </b> Distinta de cero(0).
							              </div>
							          </div>
									    </p>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div id="t_graf_01" class="jxgbox" style="width:100%; height:300px; border-radius: 15px;"></div>
											<p style="text-align: center;">
												<br>
												Grafica de <strong id="valor">f ( x ) = 3 x <sup>3</sup> + 2 x <sup>2</sup> - 2 x + 1</strong>
											</p>
										</div>
									</div><!-- row teoria -->
									<div class="row">
										<div class="ibox">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="ibox-title">
													<h3><center>EJEMPLOS</center></h3>
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
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="ibox-content">
													<div id="Ejemplo1" class="animated row">
															<div class="col-lg-8">
																	<div class="panel panel-default">
																			<div class="panel-heading">
																					<center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
																			</div>
																			<div class="panel-body">
																				<div class="row">
																					<div class="col-lg-6">
																						<p style="text-align: Justify">
																							El volumen de una esfera está en función de su radio viene dado por la expresión <b>V = (4/3) &pi; r <sup>3</sup></b>, en términos de función; <b>f ( r ) = (4/3) &pi; r <sup>3</sup>. </b> </b>
																							<br>Realiza su representación gráfica y observa su comportamiento.
																						</p>
																					</div>
																					<div class="col-lg-6">
																						<center>
								                                  <img src="img/iconos/funciones/polinomiales/cubica/sphere.png" style="position: center; max-width: 128px;" width="100%">
								                            </center>
																					</div>
																				</div>
																			</div>
																	</div>
																	<br>
																	Primero identifiquemos los datos que nos facilitan.
																	<br><br>
																	<div class="well" align="Justify">
																			<font size="3">
																				<p>Función que expresa el volumen: f( r ) = (4/3) &pi; r <sup>3</sup></p>
																			</font>
																	</div>
																	<p>Elaboramos tabla de datos.</p>
																	<br>
																	<div class="well" align="center">
																			<font size="3">
																				<p>Al disponer de una función podemos elaborar tabla de datos.</p>
																				<center>
																					<img src="/img/iconos/funciones/polinomiales/cubica/t_e1_f_cub.png" width="100%" style="position: center; max-width: 350px;"/>
																				</center>
																			</font>
																	</div>
																			Graficamos los datos obtenidos.
																			<br><br>
																			<div class="well" align="center">
																			<font size="3">
																				<center>
																					<!--<div id="elineal_01" class="jxgbox" style="width:100%; height:300px; border-radius: 15px;"></div>-->
																					<div id="t_graf_02" class="jxgbox" style="width:350px; height:300px; border-radius: 15px;"></div>
																					<p style="text-align: center;">
																						Grafica de <b>V = (4/3) &pi;r <sup>3</sup></b>
																					</p>
																				</center>
																			</font>
																	</div>
																		Respuesta.
																		<br><br>
																		<div class="well" align="Justify">
																			<font size="3">
																				<p>Puedes notar como cambia el valor de V(volumen); segun el radio)</p>
																				<p>¿Cuál es el volumen de la esfera si r = 2.00?</p>
																				<p>En este caso la grafica inicia en 0, dado que no puede haber radios(de la esfera) con valor negativo.</p>
																			</font>
																	</div>
															</div>
															<div class="col-lg-4">
																	<div class="panel panel-warning">
																			<div class="panel-heading">
																					<center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
																			</div>
																			<div class="panel-body">
																				<p style="text-align: justify;">
																					El gráfico de una función lineal es siempre una línea curva.
																					<br>El Dominio es el conjunto de números reales.
	                                        <br>El Recorrido es el conjunto de números reales.
	                                      </p>
																			</div>
																	</div>
															</div>
													</div><!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
													<div id="Ejemplo2" class="animated row" style="display: none;">
															<div class="col-lg-8">
																	<div class="panel panel-default">
																			<div class="panel-heading">
																					<center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
																			</div>
																			<div class="panel-body">
																				<div class="row">
																					<div class="col-lg-6">
																					<p>Grafica f ( x ) = x <sup>3</sup> – 5 y determina su dominio y recorrido.</p>
																					</div>
																					<div class="col-lg-6">
																						<center>
																									<img src="img/iconos/funciones/polinomiales/cubica/function.png" style="position: center; max-width: 128px;" width="100%">
																						</center>
																					</div>
																				</div>
																			</div>
																	</div>
																	<br>
																	Primero identifiquemos los datos que nos facilitan.
																	<br><br>
																	<div class="well" align="Justify">
																			<font size="3">
																				<p>En este caso disponemos de una función: <b>f ( x ) = x <sup>3</sup> - 5</b></p>
																			</font>
																	</div>
																	<p>Elaboramos tabla de datos.</p>
																	<br>
																	<div class="well" align="center">
																			<font size="3">
																				<p>Al disponer de una función podemos elaborar tabla de datos.</p>
																				<center>
																					<img src="/img/iconos/funciones/polinomiales/cubica/t_e2_f_cub.png" width="100%" style="position: center; max-width: 350px;"/>
																				</center>
																			</font>
																	</div>
																	<p>Graficamos los datos obtenidos.</p>
																	<div class="well" align="center">
																	<font size="3">
																		<center>
																			<!--<div id="elineal_01" class="jxgbox" style="width:100%; height:300px; border-radius: 15px;"></div>-->
																			<div id="t_graf_03" class="jxgbox" style="width:350px; height:300px; border-radius: 15px;"></div>
																			<p style="text-align: center;">
																				Grafica de <b>f ( x ) = x <sup>3</sup> - 5</b>
																			</p>
																		</center>
																	</font>
																	</div>
																	Identificamos el Dominio.
																	<br><br>
																	<div class="well" align="Justify">
																			<font size="3">
																				<p>¿Puedes notar que <b>x</b> puede tomar cualquier valor? </p>
																				<p>Entonces: </p>
																				<p>&emsp;&emsp; Dominio: <b>&real;</b></p>
																			</font>
																	</div>
																	Identificamos el Recorrido.
																	<br><br>
																	<div class="well" align="Justify">
																			<font size="3">
																				<p>Nota que el valor resultante de evaluar la función puede ser cualqueir valor.</p>
																				<p>Entonces:</p>
																				<p>&emsp;&emsp; Recorrido: <b>&real;</b> </p>
																			</font>
																	</div>
															</div>
															<div class="col-lg-4">
																<div class="panel panel-info">
                                  <div class="panel-heading">
                                      <center><img src="img/iconos/generales/brainstorm.png">&nbsp;&nbsp;<font size="4"><i><b>Comprende</b></i></font></center>
                                  </div>
                                  <div class="panel-body">
                                      <p style="text-align: justify;">
																				Para funciones f ( x ) = x <sup>3</sup> - d; la grafica es una curva que pasa por el punto [0,5] y no por el origen.
                                      </p>
                                  </div>
                              	</div>
																	<div class="panel panel-warning">
																			<div class="panel-heading">
																					<center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
																			</div>
																			<div class="panel-body">
																				<p style="text-align: justify;">
																					El gráfico de una función cúbica es siempre una línea curva.
																					<br>El Dominio es el conjunto de números reales.
	                                        <br>El Recorrido es el conjunto de números reales.
	                                      </p>
																			</div>
																	</div>
															</div>
													</div><!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
													<div id="Ejemplo3" class="animated row" style="display: none;">
															<div class="col-lg-8">
																	<div class="panel panel-default">
																			<div class="panel-heading">
																					<center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
																			</div>
																			<div class="panel-body">
																				<div class="row">
																					<div class="col-lg-6">
																					<p>Grafíca f ( x ) = x <sup>3</sup> </p>
																					<p>Menciona sus caracteristicas</p>
																					</div>
																					<div class="col-lg-6">
																						<center>
																									<img src="img/iconos/funciones/polinomiales/cubica/function.png" style="position: center; max-width: 128px;" width="100%">
																						</center>
																					</div>
																				</div>
																			</div>
																	</div>
																	<br>
																	Primero identifiquemos los datos que nos facilitan.
																	<br><br>
																	<div class="well" align="Justify">
																			<font size="3">
																				<p>En este caso disponemos de una función: <b>f ( x ) = x <sup>3</sup></b></p>
																			</font>
																	</div>
																	<p>Elaboramos tabla de datos.</p>
																	<br>
																	<div class="well" align="center">
																			<font size="3">
																				<p>Al disponer de una función podemos elaborar tabla de datos.</p>
																				<center>
																					<img src="/img/iconos/funciones/polinomiales/cubica/t_e3_f_cub.png" width="100%" style="position: center; max-width: 350px;"/>
																				</center>
																			</font>
																	</div>
																	Graficamos los datos obtenidos.
																	<br><br>
																	<div class="well" align="center">
																	<font size="3">
																		<center>
																			<!--<div id="elineal_01" class="jxgbox" style="width:100%; height:300px; border-radius: 15px;"></div>-->
																			<div id="t_graf_04" class="jxgbox" style="width:350px; height:300px; border-radius: 15px;"></div>
																			<p style="text-align: center;">
																				Grafica de <b>f ( x ) = x <sup>3</sup></b>
																			</p>
																		</center>
																	</font>
																	</div>
																	Respuesta.
																	<br><br>
																	<div class="well" align="Justify">
																			<font size="3">
																				<p>La gráfica es una curva que pasa por el origen.</p>
																				<p>El Dominio y Recorrido de la función pertence al conjunto de números reales.</p>
																				<p>Es una función creciente.</p>
																			</font>
																	</div>
															</div>
															<div class="col-lg-4">
																<div class="panel panel-info">
                                  <div class="panel-heading">
                                      <center><img src="img/iconos/generales/brainstorm.png">&nbsp;&nbsp;<font size="4"><i><b>Comprende</b></i></font></center>
                                  </div>
                                  <div class="panel-body">
                                      <p style="text-align: justify;">
																				Para funciones f ( x ) = x <sup>3</sup>; la grafica es una curva que pasa por el origen.
																				<br>El punto de corte con el eje Y se obtiene haciendo x = 0 en la ecuación de la parábola. Por tanto, será (0, 0).
																				<br>Cuado el coeficiente de x <sup>3</sup> es negativo la función es decreciente, caso contrario será creciente.
                                      </p>
                                  </div>
                              	</div>
																	<div class="panel panel-warning">
																			<div class="panel-heading">
																					<center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
																			</div>
																			<div class="panel-body">
																				<p style="text-align: justify;">
																					El gráfico de una función cúbica es siempre una línea curva.
																					<br>El Dominio es el conjunto de números reales.
	                                        <br>El Recorrido es el conjunto de números reales.
																					<br>Sustituyendo f (x) por 0 en la función obtienes la ecuación de tercer grado.
																				</p>
																			</div>
																	</div>
															</div>
													</div><!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
												</div>
											</div>
										</div>
									</div>
              	</div>
              </div>

         	</div> <!-- Panel Default Teoria-->

         	<div class="panel panel-default">
         		<div class="panel-heading">
               	<h5 class="panel-title">
               		<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><b>Resolución de Ejercicios</b></a>
									<div class="nav navbar-top-links navbar-right ">
									    <div class="col-lg-3">
									        <button type="button"  onclick="tour1()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
									    </div>
									</div>
               	</h5>
						</div>
           	<div id="collapse3" class="panel-collapse collapse">
              	<div class="panel-body">
									<div class="row">
										<div id="tour1_10" class="col-lg-6 col-md-6 col-sm-6">
											<p>Deslice los puntos sobre la barra para cambiar valores de a, b y c.</p>
											<p> <b>Considere que se aproximara al entero más proximo.</b> </p>
											<div id='slider1' class='jxgbox' style='width:350px; height:100px;'>
											</div>
											<br>
											<script type="text/javascript">
												var brd1 = JXG.JSXGraph.initBoard('slider1', {boundingbox: [2, 0, 20, -25], showNavigation:false, showCopyright: false, axis:false});
												var a0 = brd1.create('slider',[[3,-5],[15,-5],[0.01,0,7]], {name:'a'});
												var a1 = brd1.create('slider',[[3,-10],[15,-10],[0,0,6]], {name:'b'});
												var a2 = brd1.create('slider',[[3,-15],[15,-15],[0,0,6]], {name:'c'});
												var a3 = brd1.create('slider',[[3,-20],[15,-20],[0,0,6]], {name:'d'});
											</script>
										</div>
										<div id="tour1_11" class="col-lg-6 col-md-6 col-sm-6">
											<br><br>
											<font size="3">
												f ( x ) = a x <sup>3</sup> + b x <sup>2</sup> + c x d
											<br><br>
												f ( x ) =
													<button type="button" id="btn1" onclick="fsigno(1)" class="btn btn-danger"><b>+</b></button>
													<button type="button" id="btn11" onclick="fsigno(11)" style="display: none;" class="btn btn-danger"><b>-</b></button> <strong id="a">0.01</strong> x <sup>3</sup>
													<button type="button" id="btn2" onclick="fsigno(2)" class="btn btn-danger"><b>+</b></button>
													<button type="button" id="btn22" onclick="fsigno(22)" style="display: none;" class="btn btn-danger"><b>-</b></button> <strong id="b" >0</strong> x <sup>2</sup>
													<button type="button" id="btn3" onclick="fsigno(3)" class="btn btn-danger"><b>+</b></button>
													<button type="button" id="btn33" onclick="fsigno(33)" style="display: none;" class="btn btn-danger"><b>-</b></button> <strong id="c">0</strong> x
													<button type="button" id="btn4" onclick="fsigno(4)" class="btn btn-danger"><b>+</b></button>
													<button type="button" id="btn44" onclick="fsigno(44)" style="display: none;" class="btn btn-danger"><b>-</b></button> <strong id="d">0</strong>
											</font>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-7">
											<div class="alert alert-warning">
												<div class="form-group">
													<center>
														<table id="tour1_12" border="0" width="80%">
															<tr>
																<td width="40%">
																	<div class="checkbox checkbox-info"><input id="opc1" type="checkbox"><label for="opc1">Tabla de datos</label></div>
																</td>
																<td width="20%"></td>
																<td width="40%">
																	<div class="checkbox checkbox-info"><input id="opc2" type="checkbox"><label for="opc2">Dominio</label></div>
																</td>
															</tr>
															<tr>
																<td width="40%">
																	<div class="checkbox checkbox-info"><input id="opc3" type="checkbox"><label for="opc3">Recorrido</label></div>
																</td>
																<td width="20"></td>
																<td width="40%">
																 <!-- <div class="checkbox checkbox-info"><input id="opc4" type="checkbox"><label for="opc4">Recorrido:</label></div>-->
																</td>

															</tr>
														</table>
													</center>
												</div>
											</div>
											<div class="row">
												<center>
													<button id="tour1_13" type="button" class="btn btn-primary btn-rounded" onclick="resolver();"><i class="fa fa-check"></i>&nbsp;Generar</button>
													<button type="button" class="btn btn-danger btn-rounded" onclick="cancelar();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
												</center>
											</div>
										</div>
										<div class="col-lg-5">
											<div id="alertCargando" class="col-lg-12 alert alert-success">
													<p style="text-align: justify;">
															<center><img src="img/iconos/generales/settings.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Resultado</b></i></font></center>
													</p>
													<div id="resultado"></div>
														<div id="resultadotabla">

														</div>

														<div class="" id="resultadodominio">

														</div>
														<div class="" id="resultadorecorrido">

														</div>
											</div>
										</div>
									</div>
								</div>
              </div>
         	</div> <!-- Panel Default Resolucion-->
         </div>
      </div>
    </div>
</div><!-- cierre ibox primer-->
<script>
var sig1=1;
var sig2=1;
var sig3=1;
var sig4=1;
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

function tgraf_01(){
	var b_tgraf_01 = JXG.JSXGraph.initBoard('t_graf_01',
	{boundingbox: [-10, 10, 10, -10], axis:true, grid:true, showCopyright:false});
	var p1 = b_tgraf_01.create('point',[0,1], {name:'',size:4});
	var f = b_tgraf_01.create('functiongraph',[function(x){
		return 3*x*x*x + 2*x*x - 2* x + 1;
	}]);
}
tgraf_01();
function tgraf_02(){
	var b_tgraf_02 = JXG.JSXGraph.initBoard('t_graf_02',
	{boundingbox: [-0.5, 600, 7, -100], axis:true, grid:true, showCopyright:false});
	var p1 = b_tgraf_02.create('point',[0,0], {name:'',size:4});
	var p1 = b_tgraf_02.create('point',[1,4.19], {name:'',size:4});
	var p1 = b_tgraf_02.create('point',[2,33.51], {name:'',size:4});
	var p1 = b_tgraf_02.create('point',[3,113.09], {name:'',size:4});
	var p1 = b_tgraf_02.create('point',[4,268.08], {name:'',size:4});
	var p1 = b_tgraf_02.create('point',[5,523.59], {name:'',size:4});
	var f = b_tgraf_02.create('functiongraph',[function(x){
		return (4/3) * 3.1416 *x*x*x;
	}]);
}
tgraf_02();
function tgraf_03(){
	var b_tgraf_03 = JXG.JSXGraph.initBoard('t_graf_03',
	{boundingbox: [-5, 25, 5, -35], axis:true, grid:true, showCopyright:false});
	var p1 = b_tgraf_03.create('point',[-3,-32], {name:'',size:4});
	var p1 = b_tgraf_03.create('point',[-2,-13], {name:'',size:4});
	var p1 = b_tgraf_03.create('point',[-1,-6], {name:'',size:4});
	var p1 = b_tgraf_03.create('point',[0,-5], {name:'',size:4});
	var p1 = b_tgraf_03.create('point',[1,-4], {name:'',size:4});
	var p1 = b_tgraf_03.create('point',[2,3], {name:'',size:4});
	var p1 = b_tgraf_03.create('point',[3,22], {name:'',size:4});
	var f = b_tgraf_03.create('functiongraph',[function(x){
		return 1*x*x*x - 5;
	}]);
}
tgraf_03();
function tgraf_04(){
	var b_tgraf_04 = JXG.JSXGraph.initBoard('t_graf_04',
	{boundingbox: [-5, 25, 5, -35], axis:true, grid:true, showCopyright:false});
	var p1 = b_tgraf_04.create('point',[-3,-27], {name:'',size:4});
	var p1 = b_tgraf_04.create('point',[-2,-8], {name:'',size:4});
	var p1 = b_tgraf_04.create('point',[-1,-1], {name:'',size:4});
	var p1 = b_tgraf_04.create('point',[0,0], {name:'',size:4});
	var p1 = b_tgraf_04.create('point',[1,1], {name:'',size:4});
	var p1 = b_tgraf_04.create('point',[2,8], {name:'',size:4});
	var p1 = b_tgraf_04.create('point',[3,27], {name:'',size:4});
	var f = b_tgraf_04.create('functiongraph',[function(x){
		return 1*x*x*x;
	}]);
}
tgraf_04();
function fsigno(opc) {
	if (opc==1 || opc==11) {
		switch(opc){
				case 1:{$('#btn11').show();$('#btn1').hide();sig1=2;}break;
				case 11:{$('#btn11').hide();$('#btn1').show();sig1=1;}break;
		}
		//toastr.error(opBtn,'Error');
	} else {
		if (opc==2 ||opc==22) {
			switch(opc){
					case 2:{$('#btn22').show();$('#btn2').hide();sig2=2;}break;
					case 22:{$('#btn22').hide();$('#btn2').show();sig2=1;}break;
			}
			//toastr.error(opBtn,'Error');
		} else {//tres
			if (opc==3 || opc == 33) {
				switch(opc){
						case 3:{$('#btn33').show();$('#btn3').hide();sig3=2;}break;
						case 33:{$('#btn33').hide();$('#btn3').show();sig3=1;}break;
				}
			} else {
				switch(opc){
						case 4:{$('#btn44').show();$('#btn4').hide();sig4=2;}break;
						case 44:{$('#btn44').hide();$('#btn4').show();sig4=1;}break;
				}
			}

			//toastr.error(opBtn,'Error');
		}
	}
}
a3.on('drag',function(){ $("#d").text(Math.round(a3.Value()*100)/100); });
a2.on('drag',function(){ $("#c").text(Math.round(a2.Value()*100)/100); });
a1.on('drag',function(){ $("#b").text(Math.round(a1.Value()*100)/100); });
a0.on('drag',function(){ $("#a").text(Math.round(a0.Value()*100)/100); });


function resolver(){
$("#resultadotabla").html('');
$("#resultadodominio").html('');
$("#resultadorecorrido").html('');
	var rec="";
	var valora=$("#a").text();
	var valorb=$("#b").text();
	var valorc=$("#c").text();
	var valord=$("#d").text();
	if(valora==0){
	toastr.error('El coeficiente de <b>a</b> no debe ser CERO','Alto');
	}else{
		if ($("#opc1").prop('checked') || $("#opc2").prop('checked') || $("#opc3").prop('checked') || $("#opc4").prop('checked')) {
				if ($("#opc1").prop('checked')) {
					var nn=-3;
					var an=0;
					$("#resultadotabla").html('<center><h3>Tabla de Datos</h3></center>');
					while (nn<4) {
						//var aux=(parseFloat(valora)*nn*nn)+parseFloat(valorb)*nn+parseFloat(valorc);
						if (sig1==1 && sig2==1 && sig3==1 && sig4==1) {

							var aux=(parseFloat(valora)*nn*nn*nn)+parseFloat(valorb)*nn*nn+parseFloat(valorc)*nn+parseFloat(valord);
						}
						if (sig1==1 && sig2==1 && sig3==2 && sig4==1) {
							var aux=(parseFloat(valora)*nn*nn*nn)+parseFloat(valorb)*nn*nn-parseFloat(valorc)*nn+parseFloat(valord);
						}
						if (sig1==1 && sig2==2 && sig3==1 && sig4==1) {
							var aux=(parseFloat(valora)*nn*nn*nn)-parseFloat(valorb)*nn*nn+parseFloat(valorc)*nn+parseFloat(valord);
						}
						if (sig1==1 && sig2==2 && sig3==2 && sig4==1) {
							var aux=(parseFloat(valora)*nn*nn*nn)-parseFloat(valorb)*nn*nn-parseFloat(valorc)*nn+parseFloat(valord);
						}
						if (sig1==2 && sig2==1 && sig3==1 && sig4==1) {
							var aux=-1*(parseFloat(valora)*nn*nn*nn)+parseFloat(valorb)*nn*nn+parseFloat(valorc)*nn+parseFloat(valord);
						}
						if (sig1==2 && sig2==1 && sig3==2 && sig4==1) {
							var aux=-1*(parseFloat(valora)*nn*nn*nn)+parseFloat(valorb)*nn*nn-parseFloat(valorc)*nn+parseFloat(valord);
						}
						if (sig1==2 && sig2==2 && sig3==1 && sig4==1) {
							var aux=-1*(parseFloat(valora)*nn*nn*nn)-parseFloat(valorb)*nn*nn+parseFloat(valorc)*nn+parseFloat(valord);
						}
						if (sig1==2 && sig2==2 && sig3==2 && sig4==1) {
							var aux=-1*(parseFloat(valora)*nn*nn*nn)-parseFloat(valorb)*nn*nn-parseFloat(valorc)*nn+parseFloat(valord);
						}
						////////////////////////
						if (sig1==1 && sig2==1 && sig3==1 && sig4==2) {

							var aux=(parseFloat(valora)*nn*nn*nn)+parseFloat(valorb)*nn*nn+parseFloat(valorc)*nn-parseFloat(valord);
						}
						if (sig1==1 && sig2==1 && sig3==2 && sig4==2) {
							var aux=(parseFloat(valora)*nn*nn*nn)+parseFloat(valorb)*nn*nn-parseFloat(valorc)*nn-parseFloat(valord);
						}
						if (sig1==1 && sig2==2 && sig3==1 && sig4==2) {
							var aux=(parseFloat(valora)*nn*nn*nn)-parseFloat(valorb)*nn*nn+parseFloat(valorc)*nn-parseFloat(valord);
						}
						if (sig1==1 && sig2==2 && sig3==2 && sig4==2) {
							var aux=(parseFloat(valora)*nn*nn*nn)-parseFloat(valorb)*nn*nn-parseFloat(valorc)*nn-parseFloat(valord);
						}
						if (sig1==2 && sig2==1 && sig3==1 && sig4==2) {
							var aux=-1*(parseFloat(valora)*nn*nn*nn)+parseFloat(valorb)*nn*nn+parseFloat(valorc)*nn-parseFloat(valord);
						}
						if (sig1==2 && sig2==1 && sig3==2 && sig4==2) {
							var aux=-1*(parseFloat(valora)*nn*nn*nn)+parseFloat(valorb)*nn*nn-parseFloat(valorc)*nn-parseFloat(valord);
						}
						if (sig1==2 && sig2==2 && sig3==1 && sig4==2) {
							var aux=-1*(parseFloat(valora)*nn*nn*nn)-parseFloat(valorb)*nn*nn+parseFloat(valorc)*nn-parseFloat(valord);
						}
						if (sig1==2 && sig2==2 && sig3==2 && sig4==2) {
							var aux=-1*(parseFloat(valora)*nn*nn*nn)-parseFloat(valorb)*nn*nn-parseFloat(valorc)*nn-parseFloat(valord);
						}
						rec=rec+Math.round(aux*100)/100+', ';
						if (nn==-3) {
							$("#resultadotabla").append('<table border="1" width="80%"><tr align="center"><td width="40%"><b>f(x)</b></td><td width="20%">'+'='+'</td><td width="40%"><b>y</b></td></tr></table>');
							$("#resultadotabla").append('<table border="1" width="80%"><tr align="center"><td width="40%">'+nn+'</td><td width="20%">'+'--'+'</td><td width="40%">'+Math.round(aux*100)/100+'</td></tr></table>');
						}else {
							$("#resultadotabla").append('<table border="1" width="80%"><tr align="center"><td width="40%">'+nn+'</td><td width="20%">'+'--'+'</td><td width="40%">'+Math.round(aux*100)/100+'</td></tr></table>');
						}
						nn++;
						an++;
					}
					} //fin tabla

					if ($("#opc2").prop('checked')) {
							$("#resultadodominio").html('<br><h3>Dominio</h3>');
						$("#resultadodominio").append('<p>El dominio esta compuesto por los valores que puede tomar la variable <b>x</b>:</p><p align="center"><b>Dominio:&nbsp;&nbsp;&nbsp;{...,- 3, -2, -1, 0, 1, 2, 3,...}</b></p>');
											}
					if ($("#opc3").prop('checked')) {

						if ($("#opc1").prop('checked')) {
						$("#resultadorecorrido").html('<br><h3>Recorrido</h3>');
						$("#resultadorecorrido").append('<p>El recorrido son todos los valores que resultan de evaluar la expresión con valores los valores del <b>Dominio</b></p><p align="center"><b>Recorrido:&nbsp;&nbsp;&nbsp;{'+rec+'}</b></p>');
						}else {
							toastr.error('Tiene que seleccionar la "Tabla de Datos"','Alto');
						}
					}
			}
		 else {//Debe seleccionar que desea buscar
			toastr.error('Debe seleccionar al menos una opción','Aviso');
		}
	}//termina valores a validos
}
function cancelar() {
	a0.setValue(a0._smin);
	a1.setValue(a1._smin);
	a2.setValue(a2._smin);
	a3.setValue(a3._smin);
	brd1.update();
	$('#opc1').prop('checked', false); // Unchecks it
	$('#opc2').prop('checked', false); // Unchecks it
	$('#opc3').prop('checked', false); // Unchecks it
	$("#a").html('0.01');
	$("#b").html('0');
	$("#c").html('0');
	$("#d").html('0');
	$("#resultadotabla").html('');
	$("#resultadorecorrido").html('');
	$("#resultadodominio").html('');
}
////////////////////////////////////////////
function randomPractica()
{
    var inferior = 1;
    var superior = 3;
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
            $("#ExitoPrac1").fadeOut(0);
            $("#comppract1").fadeIn(300);
            $("#botonesPrac1").fadeIn(300);
            $("#ejemplo1").fadeIn(300);
            ReestablecerPractica1(1);
        }break;
        case 2:
        {
            $("#ejemplo1").fadeOut(0);
            $("#ejemplo3").fadeOut(0);;
            $("#ExitoPrac2").fadeOut(0);
            $("#comppract2").fadeIn(300);
            $("#botonesPrac2").fadeIn(300);
            $("#ejemplo2").fadeIn(300);
            ReestablecerPractica2(1);
        }break;
        case 3:
        {
            $("#ejemplo2").fadeOut(0);
            $("#ejemplo1").fadeOut(0);
            $("#ExitoPrac3").fadeOut(0);
            $("#comppract3").fadeIn(300);
            $("#botonesPrac3").fadeIn(300);
            $("#ejemplo3").fadeIn(300);
            ReestablecerPractica3(1);
        }break;
    }

}
//randomPractica();
function tour1() {
	var tour1 = new Tour({
	steps: [{
			element: "#tour1_10",
			title: "Paso 1",
			content: "Deslice los puntos para asignar valores a la función.",
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
			element: "#tour1_11",
			title: "Paso 2",
			content: "Visualice la función formada con los valores selecionados.",
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
			element: "#tour1_12",
			title: "Paso 3",
			content: "Seleccione que desea visualizar.",
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
			element: "#tour1_13",
			title: "Paso 4",
			content: "Presione para visualizar las respuestas al lador derecho.",
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
	tour1.init();
	tour1.restart();
	// Start the tour
	tour1.start();
}
///////////////////////////////////////////////
</script>
