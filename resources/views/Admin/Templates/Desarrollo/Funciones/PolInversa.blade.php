<div class="ibox float-e-margins animated fadeInUpBig">
	<div class="ibox-title">
   	<h5>Funciones Polinomiales - <small> Función Inversa</small></h5>
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
													Una función es uno a uno, si para cada elemento del dominio existe un único elemento del rango. Por lo que también puedes decir que una función f es uno a uno, si cada f (x) en el recorrido es la imagen de exactamente un único elemento del dominio
													<br>Si utilizas <strong>f</strong> para denotar una función, la función inversa será:
													    <center>
										              <img src="img/iconos/funciones/polinomiales/inversa/finversa.png" width="90px" style="position: center; max-width:75 px;"/>
										          </center>
														<h3>Metodo para encontrar la función inversa</h3>
														<h4>Caso I</h4>
														<h5>Dispones de pares ordenados de la forma <strong>(x,y)</strong></h5>
														<p>Cuando dispones de pares ordenados(x,y) que pertencecen a la función(f), es una función uno a uno con pares ordenados de la forma (y, x).</p>
														<br>
														<h4>Caso II</h4>
														<h5>Dispones de una función</h5>
														<p>Cuando tienes una función de la forma <strong>f (x) = ax +b</strong>, para encontrar su inversa debes seguir los siguientes pasos.</p>
														<p>1. Escribir o plantea la ecuacion: f (x) = ax + b</p>
														<p>2. Hacer f (x) = y</p>
														<p>3. Intercambia las variable "x" e "y", respectivamente: x = ay + b</p>
														<p>4. Resuelve(despeja) la ecuación para y: y = (x - b)/a</p>
										    </p>

											</div>
											<div class="col-lg-6 col-md-6 col-sm-6">
												<div id="t_graf_01" class="jxgbox" style="width:100%; height:300px; border-radius: 15px;"></div>
												<p style="text-align: center;">
													<br>
													Grafica de <strong id="valor">f ( x ) = x + 2</strong>
												</p>
											</div>
										</div>
                    <br>
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
																						<div class="col-lg-12">
																							<p style="text-align:Justify;">
																								Tienes la siguiente función:
																							</p>
																							<h3>f = {(−3, −5), (−2,−3), (−1, −1), (0,1),(1, 3), (2, 5)}</h3>
																							<p style="text-align:Justify;">
																								Observa los pares ordenados que la forman, determina si es uno a uno; si lo es, encuentra la función inversa y determina dominio y rango de ambas funciones.
																							</p>
																						</div>
																					</div>
																				</div>
																		</div>
																		<br>
																		Primero identifiquemos los datos que nos facilitan.
																		<br><br>
																		<div class="well" align="Justify">
																				<font size="3">
																					<p>Por definición sabemos que la función es uno a uno si para cada valor de x existe un unico valor de f(x) y viceversa.
																					<p>Disponemos de un conjunto de pares ordenados <strong>{(−3, −5), (−2,−3), (−1, −1), (0,1),(1, 3), (2, 5)}</strong>.</p>
																				</font>
																		</div>
																		<p>Encontrando f <sup>-1</sup> </p>
																		<br>
																		<div class="well" align="center">
																				<font size="3">
																					<p>Sabemos que para funciones con pares ordenados de la forma (x,y) su inversa será de la forma (y,x). por tanto:</p>
																					<p>Si f (x) = {(−3, −5), (−2,−3), (−1, −1), (0,1),(1, 3), (2, 5)}, entonces:</p>
																					<p>f <sup>-1</sup> = {(-5, -3), (-3, -2), (-1, -1), (1, 0), (3, 1), (5, 2)}</p>
																				</font>
																		</div>
																		<p>Encontrando el Dominio de ambas funciones.</p>
																		<br>
																		<div class="well" align="center">
																				<font size="3">
																					<p>Para f (x); <strong>Dominio: {-3, -2, -1, 0, 1, 2}</strong> </p>
																					<br><p>Para f <sup>-1</sup> ; <strong>Dominio: {-5, -3, -1, 1, 3, 5}</strong> </p>
																				</font>
																		</div>
																		<p>Encontrando el Recorrido de ambas funciones.</p>
																		<br>
																		<div class="well" align="center">
																				<font size="3">
																					<p>Para f (x); <strong>Recorrido: {-5, -3, -1, 1, 3, 5}</strong> </p>
																					<br><p>Para f <sup>-1</sup> ; <strong>Recorrido: {-3, -2, -1, 0, 1, 2}</strong> </p>
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
																					En las funciones inversas para cada valor "x" existe un unico valor de f(x) y viceversa.
																					<br><br>Al graficar los pares ordenados y trazar una recta horizontal, si la recta horizontal corta una sola vez a la grafica; la funcion es uno a uno y tiene inversa.
	                                      </p>
	                                  </div>
	                              	</div>
																		<div class="panel panel-warning">
																				<div class="panel-heading">
																						<center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
																				</div>
																				<br>
																				<div class="panel-body">
																					<p style="text-align: justify;">
																					Cuando tienes pares ordenados (x,y) la inversa estará dada por los pares (y,x).
																					<br><br>El dominio de f (x) sera el recorrido de f <sup>-1</sup>.
																					<br><br>El recorrido de f (x) sera el dominio de f <sup>-1</sup>.
		                                      </p>
																				</div>
																		</div>
																</div>
														</div><!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
														<div id="Ejemplo2" class="animated row" style="display:none">
																<div class="col-lg-8">
																		<div class="panel panel-default">
																				<div class="panel-heading">
																						<center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
																				</div>
																				<div class="panel-body">
																					<div class="row">
																						<div class="col-lg-6">
																							<p style="text-align: Justify">
																								La función f (x) = <sup>5</sup>&frasl;<sub>9</sub>(x - 32), convierte grados Fahrenheit(&ordm;F) a  Centrigrados(&ordm;C)</p>
																								<br><br>¿Cómo harías para convertir grados Centígrados a Fahrenheit?
																								<br>¿Cuál es la expresión a utilizar?.
																							</p>
																						</div>
																						<div class="col-lg-6">
																							<center>
								                                  <img src="img/iconos/funciones/polinomiales/inversa/temperature.png" width="100%" style="position: center; max-width: 128px;"/>
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
																					Disponemos de una función: <strong>f (x) = <sup>5</sup>&frasl;<sub>9</sub>(x - 32)</strong>
																					<br>Para convertir &ordm;F a &ordm;C, tendremos que encontrar la inversa de la función dada.
																				</font>
																		</div>
																		<p>Encontrando la inversa</p>
																		<br>
																		<div class="well" align="center">
																				<font size="3">
																					<p>1. Escribir la función</p>
																					<p><strong>f (x) = <sup>5</sup>&frasl;<sub>9</sub>(x - 32)</strong></p>
																					<p>2. Hacer f (x) = y</p>
																					<p><strong>y = <sup>5</sup>&frasl;<sub>9</sub>(x - 32)</strong></p>
																					<p>3. Intercambia "x" e "y" respectivamente.</p>
																					<p><strong> x = <sup>5</sup>&frasl;<sub>9</sub>(y - 32)</strong></p>
																					<p>4. Despejar de "y"</p>
																					<strong>
																						<p>9 x = 5 (y - 32)</p>
																						<p><sup>9</sup>&frasl;<sub>5</sub>x = y - 32</p>
																						<p><sup>9</sup>&frasl;<sub>5</sub>x + 32 = y</p>
																					</strong>
																					<p>Reescribiendo y ordenando: f <sup>-1</sup>(x) = <sup>9</sup>&frasl;<sub>5</sub>x + 32</p>

																					<!--<center>
																						<img src="/img/iconos/funciones/polinomiales/raiz2/t_e1_f_raiz2.png" width="100%" style="position: center; max-width: 350px;"/>
																					</center>-->
																				</font>
																		</div>
																		<p>Escribiendo la función</p>
																		<br>
																		<div class="well" align="center">
																				<font size="3">
																					<p> <strong>f <sup>-1</sup>(x) = <sup>9</sup>&frasl;<sub>5</sub>x + 32</strong> </p>
																					<br>
																					<p>Haciendo tabla de valores.</p>
																					<table width="80%" border="1">
																						<tbody>
																							<tr style="text-align:center">
																								<td style="text-align:right"><strong>&ordm;F(x)</strong></td>
																								<td width="20%">−20</td>
																								<td width="20%">−10</td>
																								<td width="20%">0</td>
																								<td width="20%">10</td>
																								<td width="20%">20</td>
																							</tr>
																							<tr style="text-align:center">
																								<td style="text-align:right"><strong>&ordm;C(y)</strong></td>
																								<td width="20%">-4</td>
																								<td width="20%">14</td>
																								<td width="20%">32</td>
																								<td width="20%">50</td>
																								<td width="20%">68</td>
																							</tr>
																						</tbody>
																					</table>
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
																							<br>
																							Grafica de <b>f <sup>-1</sup>(x) = <sup>9</sup>&frasl;<sub>5</sub>x + 32</b>
																						</p>
																					</center>
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
																					En la proporcionalidad directa la forma general es f (x) k x, donde k es una constante de la proporcionalidad.
	                                      </p>
	                                  </div>
	                              	</div>
																	<br>
																		<div class="panel panel-warning">
																				<div class="panel-heading">
																						<center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
																				</div>
																				<br>
																				<div class="panel-body">
																					<p style="text-align: justify;">
																						El gráfico de una función de proporcionalidad directa es siempre una línea recta.
																						<br>Si para cada valor de <b>x</b> divido entre el valor de <b>f(x)</b> dá el mismo resultado (k), entonces es una funcion de proporcionalidad.
		                                      </p>
																				</div>
																		</div>
																</div>
														</div><!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
														<div id="Ejemplo3" class="animated row" style="display:none">
																<div class="col-lg-8">
																		<div class="panel panel-default">
																				<div class="panel-heading">
																						<center><img src="img/iconos/generales/calculation.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Problema a Resolver</b></i></font></center>
																				</div>
																				<div class="panel-body">
																					<div class="row">
																						<div class="col-lg-6">
																							<p style="text-align: Justify">
																								Encuentra la inversa de la función: f ( x ) = 2 x + 1
																								<br>Grafica ambas en un mismo plano cartesiano y determina dominio y recorrido de cada una.
																							</p>
																						</div>
																						<div class="col-lg-6">
																							<center>
								                                  <img src="img/iconos/funciones/polinomiales/inversa/graph.png" width="100%" style="position: center; max-width: 128px;"/>
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
																					Disponemos de una función: <strong>f ( x ) = 2 x + 1</strong>
																					<br>Tendremos que encontrar su inversa.
																				</font>
																		</div>
																		<p>Encontrando la inversa</p>
																		<br>
																		<div class="well" align="center">
																				<font size="3">
																					<p>1. Escribir la función</p>
																					<p><strong>f ( x ) = 2 x + 1</strong></p>
																					<p>2. Hacer f (x) = y</p>
																					<p><strong>y = 2 x + 1</strong></p>
																					<p>3. Intercambia "x" e "y" respectivamente.</p>
																					<p><strong> x = 2 y + 1</strong></p>
																					<p>4. Despejar de "y"</p>
																					<strong>
																						<p>x - 1 = 2 y</p>
																						<p> <sup>(x - 1)&frasl; <sub>2</sub> = y</sup> </p>
																					</strong>
																					<p>Reescribiendo y ordenando: f <sup>-1</sup>(x) = <sup>(x - 1)&frasl; <sub>2</sub></p>

																					<!--<center>
																						<img src="/img/iconos/funciones/polinomiales/raiz2/t_e1_f_raiz2.png" width="100%" style="position: center; max-width: 350px;"/>
																					</center>-->
																				</font>
																		</div>
																		<p>Escribiendo la función</p>
																		<br>
																		<div class="well" align="center">
																				<font size="3">
																					<p> <strong>f <sup>-1</sup>(x) = <sup>(x - 1)&frasl;<sub>2</sub></strong> </p>
																					<br>
																					<p>Haciendo tabla de valores.</p>
																					<table width="80%" border="1">
																						<tbody>
																							<tr style="text-align:center">
																								<td style="text-align:right"><strong>x</strong></td>
																								<td width="20%">-2</td>
																								<td width="20%">−1</td>
																								<td width="20%">0</td>
																								<td width="20%">1</td>
																								<td width="20%">2</td>
																							</tr>
																							<tr style="text-align:center">
																								<td style="text-align:right"><strong>y</strong></td>
																								<td width="20%">-1.5</td>
																								<td width="20%">-1</td>
																								<td width="20%">-0.50</td>
																								<td width="20%">0</td>
																								<td width="20%">0.5</td>
																							</tr>
																						</tbody>
																					</table>
																				</font>
																		</div>

																				Graficamos los datos obtenidos.
																				<br><br>
																				<div class="well" align="center">
																				<font size="3">
																					<center>
																						<!--<div id="elineal_01" class="jxgbox" style="width:100%; height:300px; border-radius: 15px;"></div>-->
																						<div id="t_graf_03" class="jxgbox" style="width:350px; height:300px; border-radius: 15px;"></div>
																						<p style="text-align: center;">
																							<br>
																							Grafica de <b>f <sup>-1</sup>(x) = <sup>(x - 1)&frasl;<sub>2</sub></b>
																						</p>
																					</center>
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
																					Para cada valor "x" existe un unico valor f(x) y viceversa.
																					<br>Para que tenga inversa una funcion debe ser uno a uno.
																					<br>f y f <sup>-1</sup> son simétricas con respecto a la recta y = x.
	                                      </p>
	                                  </div>
	                              	</div>
																	<br>
																		<div class="panel panel-warning">
																				<div class="panel-heading">
																						<center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Punto de Apoyo</b></i></font></center>
																				</div>
																				<br>
																				<div class="panel-body">
																					<p style="text-align: justify;">
																						El gráfico de una función inversa puede ser una linea recta o curva.
																						<br>El dominio de f(x) será el recorrido de f <sup>-1</sup>(x).
																						<br>El recorrido de f(x) será el dominio de f <sup>-1</sup>(x).
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
											<div class="col-lg-12 col-md-12 col-sm-12">
												<p>Digite los valores..</p>
												<div class="row">
													<div id="tour1_10" class="col-lg-6">
													<div class="col-lg-6">
														<div class="form-group form-horizontal ">
                              <label class="col-lg-6 control-label">
                                  Valor a
                              </label>
                              <div class="col-lg-6">
                                  <input onkeyup="hacer(this)" onchange="hacer(this)" id="a" class="form-control" placeholder="a" style="border-color: #1bb394;" type="number">
                              </div>
                            </div>
													</div>
													<div class="col-lg-6">
														<div class="form-group form-horizontal ">
                              <label class="col-lg-6 control-label">
                                  Valor b
                              </label>
                              <div class="col-lg-6">
                                  <input onkeyup="hacer(this)" onchange="hacer(this)" id="b" class="form-control" placeholder="b" style="border-color: #1bb394;" type="number">
                              </div>
                            </div>
													</div>
												</div>
													<div id="tour1_11" class="col-lg-6">
														<font size="3">
															<strong id="f_g">f (x) =</strong><strong id="f_ga">a</strong><strong> x</strong><strong id="f_gb">+ b</strong>
														</font>
													</div>
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-lg-6">
												<div class="row">
													<center>
														<button id="tour1_12" type="button" class="btn btn-primary btn-rounded" onclick="resolver();"><i class="fa fa-check"></i>&nbsp;Generar</button>
														<button type="button" class="btn btn-danger btn-rounded" onclick="cancelar();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
													</center>
												</div>
											</div>
											<div class="col-lg-6">
												<div id="alertCargando" class="col-lg-12 alert alert-success">
														<p style="text-align: justify;">
																<center><img src="img/iconos/generales/settings.png">&nbsp;&nbsp;&nbsp;<font size="4"><i><b>Resultado</b></i></font></center>
														</p>
														<div id="resultadodes"></div>
														<div id="resultadok">

														</div>
														<div id="resultadotabla" style="text-align:center">
															<center>
																<br>
															<div id="t_graf_fin" class="jxgbox" style="width:350px; height:300px; border-radius: 15px;"></div>
														</center>
															<p style="text-align: center;">
																<br>
																Grafica de <b>f (x) = <strong id="fgra"></strong> </b>
															</p>
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
var g_opc=0;
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
	//var p1 = b_tgraf_03.create('point',[30,6], {name:'',size:4});
	var f = b_tgraf_01.create('functiongraph',[function(x){
		return x+2;
	}]);
}
tgraf_01();
function tgraf_02(){
	var b_tgraf_02 = JXG.JSXGraph.initBoard('t_graf_02',
	{boundingbox: [-25, 80, 40, -10], axis:true, grid:true, showCopyright:false});
	var p1 = b_tgraf_02.create('point',[-20,-4], {name:'',size:4});
	var p1 = b_tgraf_02.create('point',[0,32], {name:'',size:4});
	var p1 = b_tgraf_02.create('point',[20,68], {name:'',size:4});
	var f = b_tgraf_02.create('functiongraph',[function(x){
		return (9/5)*x+32;
	}]);
}
tgraf_02();
function tgraf_03(){
	var b_tgraf_03 = JXG.JSXGraph.initBoard('t_graf_03',
	{boundingbox: [-5,5,6,-5], axis:true, grid:true, showCopyright:false});
	//var p1 = b_tgraf_03.create('point',[1,1], {name:'',size:4});
	var f = b_tgraf_03.create('functiongraph',[function(x){
		return (x-1)/2;
	}]);
	b_tgraf_03.create('text',[4,2,"f <sup>-1</sup> (x)"],{strokeColor:'black',fontSize:'14px'});
	var f1 = b_tgraf_03.create('functiongraph',[function(x){
		return 2*x+1;
	}]);
	b_tgraf_03.create('text',[1,4,"f(x)"],{strokeColor:'black',fontSize:'14px'});
}
tgraf_03();
///Resolucion
function tgraf_061(){
	var b_tgraf_06 = JXG.JSXGraph.initBoard('t_graf_fin',
	{boundingbox: [-10, 10, 10, -10], axis:true, grid:true, showCopyright:false});
}
tgraf_061();
function tgraf_06(){
	var b_tgraf_06 = JXG.JSXGraph.initBoard('t_graf_06',
	{boundingbox: [-4, 40, 4, -40], axis:true, grid:true, showCopyright:false});
	var p1 = b_tgraf_06.create('point',[-3,parseFloat($("#k").val())*-3], {name:'',size:4});
	var p1 = b_tgraf_06.create('point',[0,0], {name:'',size:4});
	var p1 = b_tgraf_06.create('point',[3,parseFloat($("#k").val())*3], {name:'',size:4});
	var f = b_tgraf_06.create('functiongraph',[function(x){
		return parseFloat($("#k").val())*x;
	}]);
}
function tgraf_07(){
	var b_tgraf_06 = JXG.JSXGraph.initBoard('t_graf_06',
	{boundingbox: [-4, 40, 4, -40], axis:true, grid:true, showCopyright:false});
	//var p1 = b_tgraf_06.create('point',[1,parseFloat($("#k").val())/1], {name:'',size:4});
	//var p1 = b_tgraf_06.create('point',[7,parseFloat($("#k").val())/7], {name:'',size:4});
	var f = b_tgraf_06.create('functiongraph',[function(x){
		return parseFloat($("#k").val())/x;
	}]);
}
///////////////////////////////////////////////
function hacer() {
	var va=$("#a").val();
	if (va!='') {
		if (va==0) {
			toastr.error('"a" debe ser distinta de cero(0)','Alto');
			$("#f_ga").text('a');
		}else {
			$("#f_ga").text(va);//valor de "a"
			if ($("#b").val()!='' && $("#b").val()!=0) {
				var n=$("#b").val();
				if(n>0){
					$("#f_gb").text(' + '+$("#b").val());
				}else {
						$("#f_gb").text(' '+$("#b").val());
					}
			} else {
				$("#f_gb").text('');
			}
		}
	} else {
		$("#f_ga").text('a');
	}
}
function hacer2(f){
	}

function resolver(){
	var caso =0;
	var v_a=$("#a").val();
	var v_b=$("#b").val();
	switch (v_a) {
		case '':
			toastr.error('Asigne un valor para "a"','Alto');
			break;
		case '0':
			toastr.error('"a" debe ser distinta de cero(0)','Alto');
			break;
		default:{
				$("#resultadodes").html(' <p> Escribiendo la función. </p>');
				if (v_b!='' && v_b!=0) {
					if (v_b<0) {
						$("#resultadodes").append(' <strong>f (x) = '+ v_a + 'x '+ v_b+'</strong>');
						caso=0;
					} else {
						$("#resultadodes").append(' <strong>f (x) = '+ v_a + 'x +'+ v_b+'</strong>');
						caso=1;
					}
				} else {
					$("#resultadodes").append(' <strong>f (x) = '+ v_a + 'x'+'</strong>');
					caso=2;
				}
				$("#resultadodes").append(' <br><br><p>Hacer f (x) = y</p>');
				switch (caso) {
					case 0:
						$("#resultadodes").append(' <strong>y = '+ v_a + 'x '+ v_b+'</strong>');
						break;
					case 1:
						$("#resultadodes").append(' <strong>y = '+ v_a + 'x +'+ v_b+'</strong>');
						break;
					case 2:
						$("#resultadodes").append(' <strong>y = '+ v_a + 'x'+'</strong>');
						break;
					default:
				}
				$("#resultadodes").append('<br><br><p>Intercambiar "x" e "y" respectivamente.</p>');
				switch (caso) {
					case 0:
						$("#resultadodes").append(' <strong>x = '+ v_a + 'y '+ v_b+'</strong>');
						break;
					case 1:
						$("#resultadodes").append(' <strong>x = '+ v_a + 'y +'+ v_b+'</strong>');
						break;
					case 2:
						$("#resultadodes").append(' <strong>x = '+ v_a + 'y'+'</strong>');
						break;
					default:
				}
				$("#resultadodes").append('<br><br><p>Despejar "y"</p>');
				switch (caso) {
					case 0:
						$("#resultadodes").append(' <strong>x = '+ v_a + 'y '+ v_b+'</strong>');
						$("#resultadodes").append(' <br><strong>x +'+ (parseFloat(v_b)*-1)+' = '+ v_a + 'y</strong>');
						$("#resultadodes").append(' <br><strong>(x +'+(parseFloat(v_b)*-1)+') / '+v_a+' = y</strong>');
						break;
					case 1:
						$("#resultadodes").append(' <strong>x = '+ v_a + 'y +'+ v_b+'</strong>');
						$("#resultadodes").append(' <br><strong>x - '+v_b+' = '+ v_a + 'y</strong>');
						$("#resultadodes").append(' <br><strong>(x - '+v_b+') / '+v_a+' = y</strong>');
						break;
					case 2:
						$("#resultadodes").append(' <strong>x = '+ v_a + 'y'+'</strong>');
						$("#resultadodes").append(' <br><strong>x /'+v_a+' = y'+'</strong>');
						break;
					default:
				}
				$("#resultadodes").append('<br><br><p>Reescribir la función</p>');
				switch (caso) {
					case 0:
						$("#resultadodes").append('<strong>f <sup>-1</sup>(x) = ( x +'+(parseFloat(v_b)*-1)+') / '+v_a+'</strong>');
						$("#fgra").append('<strong>f <sup>-1</sup>(x) = ( x +'+(parseFloat(v_b)*-1)+') / '+v_a+'</strong>');
						tgraf_fin(0,v_a,parseFloat(v_b)*-1);
						toastr.success('Visualiza y analiza el resultado', 'Respuesta');
						break;
					case 1:
					$("#resultadodes").append('<strong>f <sup>-1</sup>(x) = ( x - '+v_b+') / '+v_a+'</strong>');
					$("#fgra").append('<strong>f <sup>-1</sup>(x) = ( x - '+v_b+') / '+v_a+'</strong>');
					tgraf_fin(1,v_a,v_b);
					toastr.success('Visualiza y analiza el resultado', 'Respuesta');
						break;
					case 2:
						$("#resultadodes").append('<strong> f <sup>-1</sup>(x) = x /'+v_a+'</strong>');
						$("#fgra").append('<strong> f <sup>-1</sup>(x) = x /'+v_a+'</strong>');
						tgraf_fin(2,v_a,0);
						toastr.success('Visualiza y analiza el resultado', 'Respuesta');
						break;
					default:
				}
				$("#resultadodes").append('');
				$("#resultadodes").append('');
		}//Default
	}

	/*if (!$("#pro").prop('checked') && !$("#pro1").prop('checked')) {
		toastr.error('Indique que tipo de proporcionalidad usar','Error');
	} else {
		if ($("#k").val()=='') {
			toastr.error('Ingrese una constante válida','Error');
		}else {
			if ($("#pro").prop('checked')) {//Directa
				$("#resultadok").html('');
				$("#resultadok").append('<p> Haciendo uso de la forma general de la funcion de proporcionalidad directa tenemos: </p> ');
				$("#resultadok").append('<strong> f (x) = '+$("#k").val()+' x</strong> ');
				$("#resultadok").append('<br><br>Haciendo uso de la función elaboramos tabla de valores.');
				var nn=-3;
				var tabla="<br><br><center><table border='2' width='75%' style='text-align:center'><tr><td width='20'>x</td><td width='10'>-3</td><td width='10'>-2</td><td width='10'>-1</td><td width='10'>0</td><td width='10'>1</td><td width='10'>2</td><td width='10'>3</td></tr><tr><td width='10'>y</td>";
				while (nn<=3) {
					tabla=tabla+"<td width='10'>"+parseFloat($("#k").val())*nn+"</td>";
					nn+=1;
				}
				tabla=tabla+"</tr></table></center><br><br>";
				$("#resultadok").append(tabla);
				tgraf_06();
				$("#fgra").text($("#k").val()+' x');
			} else {//Inversa
				$("#resultadok").html('');
				$("#resultadok").append('<p> Haciendo uso de la forma general de la funcion de proporcionalidad inversa tenemos: </p> ');
				$("#resultadok").append('<strong> f (x) = '+$("#k").val()+'/ x</strong> ');
				$("#resultadok").append('<br><br>Haciendo uso de la función elaboramos tabla de valores.');
				var nn=1;
				var tabla="<br><br><center><table border='2' width='75%' style='text-align:center'><tr><td width='20'>x</td><td width='10'>1</td><td width='10'>2</td><td width='10'>3</td><td width='10'>4</td><td width='10'>5</td><td width='10'>6</td><td width='10'>7</td></tr><tr><td width='10'>y</td>";
				while (nn<=7) {
					tabla=tabla+"<td width='10'>"+Math.round((parseFloat($("#k").val())/nn) * 100) / 100+"</td>";
					nn+=1;
				}
				tabla=tabla+"</tr></table></center><br><br>";
				$("#resultadok").append(tabla);
				tgraf_07();
				$("#fgra").text($("#k").val()+'/ x');
			}
		}
	}*/
}
function tgraf_fin(g,a,b){
	var b_tgraf_01 = JXG.JSXGraph.initBoard('t_graf_fin',
	{boundingbox: [-10, 10, 10, -10], axis:true, grid:true, showCopyright:false});
	//var p1 = b_tgraf_01.create('point',[0,1], {name:'',size:4});
	switch (g) {
		case 0:
		var f = b_tgraf_01.create('functiongraph',[function(x){
			//( x +'+(parseFloat(v_b)*-1)+') / '+v_a
			return (x+b)/a;
		}]);
		break;
		case 1:
		var f = b_tgraf_01.create('functiongraph',[function(x){
			//( x - '+v_b+') / '+v_a
			return (x-b)/a;
		}]);
		break;
		case 2:
		var f = b_tgraf_01.create('functiongraph',[function(x){
			//x /'+v_a+'
			return x/a;
		}]);
		break;
		default:
	}
}
function tour1() {
	var tour1 = new Tour({
	steps: [{
			element: "#tour1_10",
			title: "Paso 1",
			content: "Ingrese los valores de 'a' y 'b'.",
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
			content: "Visualice la función descrita.",
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
			content: "Presione para ver la solución al lado derecho.",
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
</script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
