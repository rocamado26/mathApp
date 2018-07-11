<div class="ibox float-e-margins animated fadeInUpBig">
	<div class="ibox-title">
		<h5>Función Constante</h5>
	</div>
	<div class="ibox-content">
		<div class="panel-body">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default"  style="border-color: #23c6c8">
					<div class="panel-heading">
						<h5 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-plus-square-o"></i>  <b>Teoría</b></a>
						</h5>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-6">
									<strong>Función Constante</strong>
									<br> <br>
									<p style="text-align: justify;">
										En general, una <strong>constante</strong> es un valor permanente que no puede modificarse, al menos no dentro del contexto o situación en la cual se esta presentando.
										<br><br>
										Dentro de la matemática se le denomina <strong>función constante</strong> a una función matemática que para cada valor de su dominio hay un único valor de su codominio.
										<br><br>
										Su representación general es: <strong>f(x) = k.</strong>
										<br>
										Donde:
										<br>
										&emsp;&emsp;<strong>k</strong> es un valor númerico Real.
										<br>
										&emsp;&emsp;<strong>Dominio</strong> es el conjunto de números reales.
										<br>
										&emsp;&emsp;<strong>Recorrido</strong> siempre será el valor de <strong>k</strong>.
										<br> <br>

										<strong>La gráfica es una recta horizontal paralela a al eje de abscisas.</strong>
									</p>
								</div>
								<div class="col-lg-6">
									<div id="kx" class="jxgbox" style="width:100%; height:300px; border-radius: 15px;"></div>
									<p style="text-align: center;">
										Grafica de <strong id="valor"></strong>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default"  style="border-color: #23c6c8">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a onclick="ejemplos(1)" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plus-square-o"></i>  <b>Ejemplos</b></a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse on">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<center>
										<button id="btnejercicio1" class="btn btn-outline btn-primary dim active" aria-pressed="true" onclick="ejemplos(1)">1</button>
		                                <button id="btnejercicio2" class="btn btn-outline btn-primary dim" onclick="ejemplos(2)">2</button>
		                                <button id="btnejercicio2" class="btn btn-outline btn-primary dim" onclick="ejemplos(3)">3</button>
		                            </center>
								</div>
							</div>
							<div class="ibox">
                                <div class="ibox-content">
									<div id="fade1" class="row animated fadeInRightBig">
										<div class="col-lg-8">
											<div class="panel panel-default">
		                                        <div class="panel-heading">
		                                            <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
		                                        </div>
		                                        <div class="panel-body">
		                                            <p>Dada la función <strong>f(x) = - 2</strong> encuentre su dominio, recorrido y grafíquela</p>
		                                        </div>
		                                    </div>
		                                    <p></p>
		                                    <p><a name="paso1">1.</a> Sustituye la variable <strong>x</strong> por números reales.</p>
		                                    <div class="well">
			                                    <font size="3">
			                                    	<p>Asignando valores a la variable <b>"x"</b> de la función.</p>
			                                    </font>
				                                    	<div class="row">
				                                    	<div class="col-lg-4"></div>
				                                    	<div class="col-lg-4">
					                                    	<table class="table table-bordered">
							                                    <thead>
								                                    <tr>
								                                        <th>x</th>
								                                        <th>f(x) = - 2</th>
							                                    </thead>
							                                    <tbody>
							                                    	<tr>
								                                        <td>-3</td>
								                                        <td>-2</td>
								                                    </tr>
								                                    <tr>
								                                        <td>-2</td>
								                                        <td>-2</td>
								                                    </tr>
								                                    <tr>
								                                        <td>-1</td>
								                                        <td>-2</td>
								                                    </tr>
								                                    <tr>
								                                        <td>0</td>
								                                        <td>-2</td>
								                                    </tr>
								                                    <tr>
								                                        <td>1</td>
								                                        <td>-2</td>
								                                    </tr>
								                                    <tr>
								                                        <td>2</td>
								                                        <td>-2</td>
								                                    </tr>
								                                    <tr>
								                                        <td>3</td>
								                                        <td>-2</td>
								                                    </tr>
							                                    </tbody>
							                                </table>
							                             </div>
							                             <div class="col-lg-4"></div>
							                             </div>
			                                </div>
			                                <p>2. Identifica el <b>dominio</b> y <b>recorrido</b></p>
			                                <div class="well">
		                                        <font size="3">
		                                        	<p>El <b>Dominio</b> es: <b>]- &#x221e; , &#x221e; [</b></p>
		                                        	<p>El <b>Recorrido</b> es: <b>-2</b></p>
		                                        </font>
		                                    </div>
		                                    <p>3. Grafica la función</p>
		                                    <div class="well">
		                                        <font size="3">
		                                        	<p>Haciendo uso de valores obtenidos.</p>
		                                        </font>
		                                        <center>
		                                        <!--width:75% -->
												<div id="kx1" class="jxgbox" style="width:500px; height:300px;"></div>
												<p>Gráfica de <b>f(x) = - 2</b></p>
												</center>
											</div>

										</div>
										<div class="col-lg-4">
				                            <div class="panel panel-warning">
												<div class="panel-heading">
													<center>
														<img src="img/iconos/generales/target.png">&nbsp;&nbsp;
															<font size="4">
																<i><b>Punto de apoyo</b></i>
															</font>
													</center>
												</div>
												<div class="panel-body">
													<p>Las funciones polinomiales constantes tienen como <strong>dominio</strong> al conjunto de números reales.</p>
													<p>La <strong>gráfica</strong> es una linea recta.</p>
													<p>El <strong>recorrido</strong> de una función es siempre la constante.</p>
													<p>La función <strong>no crece ni decrece</strong>.</p>
												</div>
											</div>
											<div class="panel panel-info">
												<div class="panel-heading">
													<center>
														<img src="img/iconos/generales/brainstorm.png">&nbsp;&nbsp;
															<font size="4">
																<i><b>Comprende</b></i>
															</font>

													</center>
												</div>
												<div class="panel-body">
													<p>Pasos a seguir para resolver el ejercicio:</p>

													<p>1- Lee detenidamente el enunciado del problema para determinar lo que se te pide.</p>
													<p>2- Identifica la constante de la función.</p>
													<p>3- Elije que puntos graficar(Si es posible incluye negativos y positivos) y elabora una tabla de valores.</p>
													<p>4- Identifica el dominio y recorrido de la función.</p>
													<p>5- Gráfica cada punto en el plano cartesiano.</p>
												</div>
											</div>
										</div>
									</div>
									<div id="fade2" class="row animated fadeInRightBig">
										<div class="col-lg-8">
											<div class="panel panel-default">
		                                        <div class="panel-heading">
		                                            <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
		                                        </div>
		                                        <div class="panel-body">
		                                            <p>Berta y Auxiliadora lanzan una pelota sobre una
													superficie pulida y ésta se mantiene en movimiento a
													una velocidad constante durante 7 segundos. Si esta
													velocidad es de 1m/s, la expresión que representa la
													velocidad es f(t) = 1.Grafica, determina dominio
													y recorrido.</p>
		                                        </div>
		                                    </div>
		                                    <p></p>
		                                    <p>1. Identifica la función que describe el problema.</p>
			                                <div class="well">
		                                        <font size="3">
		                                        	Donde:
		                                        	<br>
		                                        	<p>&emsp;&emsp;<b>t</b> : Tiempo(en segundos). {t &#8712; <b>N</b> / t &#8805; 0}</p>
		                                        	<p>&emsp;&emsp;<b>k</b> : 1(en metros por segundo -m/s-).</p>
		                                        	<br>
		                                        	Entonces:
		                                        	<p>&emsp;&emsp;<b>f(t) = 1</b></p>
		                                        </font>
		                                    </div>
		                                    <p><a name="paso1">1.</a> Sustituye la variable <strong>t</strong> por números reales.</p>
		                                    <div class="well">
			                                    <font size="3">
			                                    	<p>Dado que el movimiento se mantiene por siete segundo la variable <b>"t"</b> tomará valores de 0 a 7.</p>
			                                    </font>
				                                    	<div class="row">
				                                    	<div class="col-lg-4"></div>
				                                    	<div class="col-lg-4">
					                                    	<table class="table table-bordered">
							                                    <thead class="thead-default">
								                                    <tr>
								                                        <th>t</th>
								                                        <th>f(t) = 1</th>
							                                    </thead>
							                                    <tbody>
							                                    	<tr>
								                                        <td>0</td>
								                                        <td>1</td>
								                                    </tr>
								                                    <tr>
								                                        <td>1</td>
								                                        <td>1</td>
								                                    </tr>
								                                    <tr>
								                                        <td>2</td>
								                                        <td>1</td>
								                                    </tr>
								                                    <tr>
								                                        <td>3</td>
								                                        <td>1</td>
								                                    </tr>
								                                    <tr>
								                                        <td>4</td>
								                                        <td>1</td>
								                                    </tr>
								                                    <tr>
								                                        <td>5</td>
								                                        <td>1</td>
								                                    </tr>
								                                    <tr>
								                                        <td>6</td>
								                                        <td>1</td>
								                                    </tr>
								                                    <tr>
								                                        <td>7</td>
								                                        <td>1</td>
								                                    </tr>
							                                    </tbody>
							                                </table>
							                             </div>
							                             <div class="col-lg-4"></div>
							                             </div>
			                                </div>
			                                <p>2. Identifica el <b>dominio</b> y <b>recorrido</b></p>
			                                <div class="well">
		                                        <font size="3">
		                                        	<p>El <b>Dominio</b> es: <b>[0 , 7 ]</b> , ya que el movimiento se mantiene por un tiempo máximo de 7 segundos</p>
		                                        	<p>El <b>Recorrido</b> es: <b>1</b> , debido a que es a velocidad(1 m/s) constante</p>
		                                        </font>
		                                    </div>
		                                    <p>3. Grafica la función</p>
		                                    <div class="well">
		                                        <font size="3">
		                                        	<p>Haciendo uso de valores obtenidos en el paso 1, graficamos. </p>
		                                        </font>
		                                        <center>
												<div id="kx2" class="jxgbox" style="width:75%; height:300px;"></div>
												<p>Gráfica de <b>f(t) = 1</b></p>
												</center>
											</div>

										</div>
										<div class="col-lg-4">
				                            <div class="panel panel-warning">
												<div class="panel-heading">
													<center>
														<img src="img/iconos/generales/target.png">&nbsp;&nbsp;
															<font size="4">
																<i><b>Punto de apoyo</b></i>
															</font>
													</center>
												</div>
												<div class="panel-body">
													<p>El <strong>dominio</strong> de la funcion puede ser limitado a un interválo de valores(en este caso <strong>[0-7]</strong>).</p>
													<p>La <strong>gráfica</strong> es una linea recta.</p>
													<p>El <strong>recorrido</strong> de una función es la constante.</p>
													<p>Es una función que <strong>no crece ni decrece</strong>.</p>
												</div>
											</div>
											<div class="panel panel-info">
												<div class="panel-heading">
													<center>
														<img src="img/iconos/generales/brainstorm.png">&nbsp;&nbsp;
															<font size="4">
																<i><b>Comprende</b></i>
															</font>

													</center>
												</div>
												<div class="panel-body">
													<p>Pasos a seguir para resolver el ejercicio:</p>

													<p>1- Lee detenidamente el enunciado del problema para determinar lo que se te pide.</p>
													<p>2- Identifica la constante dentro del enunciado.</p>
													<p>3- Elije los puntos a graficar(para este ejemplo los valores deberan ser igual o mayor a <strong>0</strong> y menores o iguales a <strong>7</strong>).</p>
													<p>4. Elabora una tabla de valores.</p>
													<p>5- Identifica el dominio y recorrido de la función.</p>
													<p>6- Gráfica cada punto en el plano cartesiano.</p>
												</div>
											</div>
										</div>
									</div>
									<div id="fade3" class="row animated fadeInRightBig">
										<div class="col-lg-8">
											<div class="panel panel-default">
		                                        <div class="panel-heading">
		                                            <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
		                                        </div>
		                                        <div class="panel-body">
		                                            <p>La distancia de un satélite artificial a la Tierra es de 32,000 km, como esta distancia no varía con el tiempo, es decir es constante, grafica la distancia en función del tiempo en años.</p>
		                                        </div>
		                                    </div>
		                                    <p></p>
		                                    <p>1. Formula la función que describe el problema.</p>
			                                <div class="well">
		                                        <font size="3">
		                                        	Donde:
		                                        	<br>
		                                        	<p>&emsp;&emsp;<b>t</b> : Tiempo(en años). {t &#8712; <b>N</b> / t &#8805; 0}</p>
		                                        	<p>&emsp;&emsp;<b>k</b> : 32(en miles de kilometros).</p>
		                                        	<br>
		                                        	Entonces:
		                                        	<p>&emsp;&emsp;<b>f(t) = 32</b></p>
		                                        </font>
		                                    </div>
		                                    <p><a name="paso2">2.</a> Sustituye la variable <strong>x</strong> por números enteros(años).</p>
		                                    <div class="well">
			                                    <font size="3">
			                                    	<p>Dado que se desea graficar la distancia en función del tiempo, la variable <b>"x"</b> tomará valores iguales o mayores a 0.</p>
			                                    	<br>
			                                    	<p>Datos para los primeros 7 años.</p>
			                                    </font>
				                                    	<div class="row">
				                                    	<div class="col-lg-4"></div>
				                                    	<div class="col-lg-4">
					                                    	<table class="table table-bordered">
							                                    <thead class="thead-default">
								                                    <tr>
								                                        <th>t</th>
								                                        <th>f(t) = 32</th>
							                                    </thead>
							                                    <tbody>
							                                    	<tr>
								                                        <td>0</td>
								                                        <td>32</td>
								                                    </tr>
								                                    <tr>
								                                        <td>1</td>
								                                        <td>32</td>
								                                    </tr>
								                                    <tr>
								                                        <td>2</td>
								                                        <td>32</td>
								                                    </tr>
								                                    <tr>
								                                        <td>3</td>
								                                        <td>32</td>
								                                    </tr>
								                                    <tr>
								                                        <td>4</td>
								                                        <td>32</td>
								                                    </tr>
								                                    <tr>
								                                        <td>5</td>
								                                        <td>32</td>
								                                    </tr>
								                                    <tr>
								                                        <td>6</td>
								                                        <td>32</td>
								                                    </tr>
								                                    <tr>
								                                        <td>7</td>
								                                        <td>32</td>
								                                    </tr>
							                                    </tbody>
							                                </table>
							                             </div>
							                             <div class="col-lg-4"></div>
							                             </div>
			                                </div>
		                                    <p>3. Grafica la función</p>
		                                    <div class="well">
		                                        <font size="3">
		                                        	<p>Haciendo uso de valores obtenidos en el <a href="#paso2">paso 2</a>, graficamos.</p>
		                                        </font>
		                                        <center>
													<div id="kx3" class="jxgbox" style="width:75%; height:300px;"></div>
													<p>Gráfica de <b>f(t) = 32</b></p>
												</center>
											</div>

										</div>
										<div class="col-lg-4">
				                            <div class="panel panel-warning">
												<div class="panel-heading">
													<center>
														<img src="img/iconos/generales/target.png">&nbsp;&nbsp;
															<font size="4">
																<i><b>Punto de apoyo</b></i>
															</font>
													</center>
												</div>
												<div class="panel-body">
													<p>El <strong>dominio</strong> de la funcion puede ser limitado a un interválo de valores(en este caso a periodo de tiempo -años-).</p>
													<p>La <strong>gráfica</strong> es una linea recta.</p>
													<p>El <strong>recorrido</strong> de una función es la constante.</p>
													<p>Es una función que <strong>no crece ni decrece</strong>.</p>
												</div>
											</div>
											<div class="panel panel-info">
												<div class="panel-heading">
													<center>
														<img src="img/iconos/generales/brainstorm.png">&nbsp;&nbsp;
															<font size="4">
																<i><b>Comprende</b></i>
															</font>

													</center>
												</div>
												<div class="panel-body">
													<p>Pasos a seguir para resolver el ejercicio:</p>

													<p>1- Lee detenidamente el enunciado del problema para determinar lo que se te pide.</p>
													<p>2- Identifica la constante dentro del enunciado.</p>
													<p>3- Elije los puntos a graficar(para este ejemplo los valores deberan ser igual o mayor a <strong>0</strong>).</p>
													<p>4. Elabora una tabla de valores.</p>
													<p>5- Identifica el dominio y recorrido de la función.</p>
													<p>6- Gráfica cada punto en el plano cartesiano.</p>
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
<div class="ibox float-e margins animated fadeInUpBig">
	<div class="ibox-title">
		<h5>Práctica</h5>

	</div>
	<div class="ibox-content">
		<div class="panel-body"><!--Uno-->
			<div id="accordion2" class="panel-group">
				<div class="panel panel-default" style="border-color: #23c6c8">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree3" onclick="cerrarteoria()">
								<i class="fa fa-plus-square-o">

								</i>
								<b>Analisis del ejercicio</b>
							</a>
							<div class="nav navbar-top-links navbar-right ">
	                            <div class="col-lg-3">
	                                <button type="button"  onclick="tour1()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
	                            </div>
                        	</div>
						</h4>

					</div>
					<div id="collapseThree3" class="panel-collapse collapse">
						<div class="panel-body">
							<!-- ACA-->
								<div class="panel panel-default">
									<div class="panel-heading">
										<center>
											<img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;
											<font size="4">
												<i><b>Problema</b></i>
											</font>
										</center>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-12">
												<p>De acuerdo a la gráfica que se muestra, describa la función, e identifique el dominio y recorrido.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-8">
												<div align="center">
	                                        		<a class="btn btn-primary btn-rounded" id="tour1_01" onclick="practica1()" >Generar Gráfica</a>
	                                        	</div>
	                                        	<p></p>
	                                        	<!-- width:100% -->
			                                    <div id="plano5" class="jxgbox" style="width:600px; height:350px; border-radius: 15px;">
			                                    </div>
	                                        </div>
	                                        <div class="col-lg-4">
	                                        	<div class="alert alert-info">
	                                                <p style="text-align: justify;">
	                                                    Observe la gráfica, luego seleccione las afirmaciones corectas.
	                                                </p>
		                                        </div>
		                                        <div class="alert alert-warning" id="tour1_03">
			                                        <div class="checkbox checkbox-info">
			                                			<input id="opc1" type="checkbox">
			                                			<label for="opc1">Tienes que graficar la función</label>
			                                		</div>
			                                		<div class="checkbox checkbox-info">
			                                			<input id="opc2" type="checkbox">
			                                			<label for="opc2">Puedes identifcar el dominio</label>
			                                        </div>
			                                        <div class="checkbox checkbox-info">
			                                			<input id="opc3" type="checkbox">
			                                			<label for="opc3">Un punto de la gráfica es <strong id="puntograf">[]</strong></label>
			                                		</div>
			                                		<div class="checkbox checkbox-info">
			                                			<input id="opc4" type="checkbox">
			                                			<label for="opc4">Se dispone la información suficiente</label>
			                                		</div>
			                                		<div align="right">
			                                			<a id="tour1_04" class="btn btn-primary btn-rounded" onclick="verificar()" >Verificar</a>
			                                		</div>
		                                        </div>
	                                        </div>
	                                    </div><!--row grafica-->
									</div>
								</div>

							<!-- ACA2-->
						</div><!-- /panel-body[collapseThree3] -->
					</div>
				</div>
				<div class="panel panel-default" style="border-color: #23c6c8">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree4" onclick="">
								<i class="fa fa-plus-square-o">

								</i>
								<b>Configuración y desarrolo</b>
							</a>
							<div class="nav navbar-top-links navbar-right ">
	                            <div class="col-lg-3">
	                                <button type="button"  onclick="tour1_1()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
	                            </div>
                        	</div>
						</h4>
					</div>
					<div id="collapseThree4" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-4">
									<div class="alert alert-info">
										<p>
											Seleccione la o las <strong>funciones</strong> que describen la gráfica.
										</p>
									</div>
									<div class="alert alert-warning" id="tour1_05">
										<font size="3">
											<div class="checkbox checkbox-info">
	                                			<input id="opcF1" type="checkbox">
	                                			<label for="opF1"><strong>f(</strong><strong id="valF1"></strong>) = <strong id="valF11"></strong></label>
	                                		</div>
	                                		<div class="checkbox checkbox-info">
	                                			<input id="opcF2" type="checkbox">
	                                			<label for="opF2"><strong>f(</strong><strong id="valF2"></strong>) = <strong id="valF22"></strong></label>
	                                        </div>
	                                        <div class="checkbox checkbox-info">
	                                			<input id="opcF3" type="checkbox">
	                                			<label for="opF3"><strong>f(</strong><strong id="valF3"></strong>) = <strong id="valF33"></strong></label>
	                                		</div>
	                                		<div class="checkbox checkbox-info">
	                                			<input id="opcF4" type="checkbox">
	                                			<label for="opF4"><strong>f(</strong><strong id="valF4"></strong>) = <strong id="valF44"></strong></label>
	                                		</div>
	                                	</font>
											<div align="right">
	                                			<a id="tour1_06" class="btn btn-primary btn-rounded" onclick="verificarF()" >Verificar</a>
	                                		</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="alert alert-info">
										<p>Identifique y seleccione el <strong>dominio</strong> de la grafica o función presentada.</p>
									</div>
									<div id="tour1_07" class="alert alert-warning">
										<font size="3">
											<div class="checkbox checkbox-info">
	                                			<input id="opcD1" type="checkbox">
	                                			<label for="opcD1">Dominio: <strong id="valD1"></strong></label>
	                                		</div>
	                                		<div class="checkbox checkbox-info">
	                                			<input id="opcD2" type="checkbox">
	                                			<label for="opcD2">Dominio: <strong id="valD2"></strong></label>
	                                		</div>
	                                		<div class="checkbox checkbox-info">
	                                			<input id="opcD3" type="checkbox">
	                                			<label for="opcD3">Dominio: <strong id="valD3"></strong></label>
	                                		</div>
	                                		<div class="checkbox checkbox-info">
	                                			<input id="opcD4" type="checkbox">
	                                			<label for="opcD4">Dominio: <strong id="valD4"></strong></label>
	                                		</div>
			                            </font>
											<div align="right">
			                                	<a id="tour1_08" class="btn btn-primary btn-rounded" onclick="verificarD()" >Verificar</a>
			                                </div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="alert alert-info">
										<p>Seleccione el <strong>recorrido</strong> de la gráfica o función presentada</p>
									</div>
									<div class="alert alert-warning" id="tour1_09">
									<font size="3">
											<div class="checkbox checkbox-info">
	                                			<input id="opcR1" type="checkbox">
	                                			<label for="opcR1">Recorrido: <strong id="valR1"></strong></label>
	                                		</div>
	                                		<div class="checkbox checkbox-info">
	                                			<input id="opcR2" type="checkbox">
	                                			<label for="opcR2">Recorrido: <strong id="valR2"></strong></label>
	                                		</div>
	                                		<div class="checkbox checkbox-info">
	                                			<input id="opcR3" type="checkbox">
	                                			<label for="opcR3">Recorrido: <strong id="valR3"></strong></label>
	                                		</div>
	                                		<div class="checkbox checkbox-info">
	                                			<input id="opcR4" type="checkbox">
	                                			<label for="opcR4">Recorrido: <strong id="valR4"></strong></label>
	                                		</div>
			                            </font>
										<div align="right">
		                                	<a id="tour1_10" class="btn btn-primary btn-rounded" onclick="verificarR()" >Verificar</a>
		                                </div>
									</div>
								</div>
							</div>
						</div><!-- /panel-body[collapseThree4] -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ibox float-e margins animated fadeInUpBig">
	<div class="ibox-title">
		<h5>Ejerciciós</h5>

	</div>
	<div class="ibox-content">
		<div class="panel-body"><!--Uno-->
			<div id="accordion3" class="panel-group">
				<div class="panel panel-default" style="border-color: #23c6c8">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion3" href="#collapseF" onclick="cerrarteoria()">
								<i class="fa fa-plus-square-o">

								</i>
								<b>Resolución de problemas</b>
							</a>
							<div class="nav navbar-top-links navbar-right ">
	                            <div class="col-lg-3">
	                                <button type="button"  onclick="tour2()" class="btn btn-primary btn-xs"><i class="fa fa-question-circle"></i></button>
	                            </div>
                        	</div>
                        </h4>
					</div>
					<div id="collapseF" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-6">
									<p>Ingrese los valores de la función dada.</p>
									<div class="alert alert-warning">
										<div id="tour2_01" class="row">
											<div class="col-lg-4">
												<table border="0">
													<tbody>
														<tr>
															<td width="40%" align="">
																<strong>f ( x ) = </strong>
															</td>
															<td width="60%">
																<div class="form-group">
																	<input class="form-control" id="ink" name="inc1" style="border-color: #1bb394;" type="number">
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-lg-8">

											</div>
										</div>
										<div class="row">
											<div class="col-lg-8">
												<table border="0">
													<tbody>
														<tr id="tour2_02">
															<td width="35%" align="">
																Punto Inicial <strong>x</strong>:
															</td>
															<td width="30%">
																<div class="form-group">
																	<input class="form-control" id="inpi" name="inc2" style="border-color: #1bb394;" type="number">
																</div>
															</td>
															<td width="5%"></td>
															<td width="30%">
																<div class="checkbox checkbox-info">
																	<input id="opcPI" type="checkbox" onclick="infinito(1)">
																	<label for="opcPI">Infinito</label>
																</div>
															</td>
														</tr>
														<tr id="tour2_03">
															<td width="35%">
																Punto Final <strong>x</strong>:
															</td>
															<td width="30%">
																<div class="form-group">
																	<input class="form-control" id="inpf" name="inc3" style="border-color: #1bb394;" type="number">
																</div>
															</td>
															<td width="5%"></td>
															<td width="30%">
																<div class="checkbox checkbox-info">
																	<input id="opcPF" type="checkbox" onclick="infinito(2)">
																	<label for="opcPF">Infinito</label>
																</div>
															</td>

														</tr>
													</tbody>
												</table>

												<p align="right">
													<a id="tour2_04" class="btn btn-primary btn-rounded" onclick="funcK()" >Procesar</a>
												</p>
											</div>
											<div class="col-lg-4">

											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<p>Dominio y recorrido</p>
									<div id="tour2_05" class="alert alert-warning">
										<p>Dominio:   <strong id="domF">Esperando...</strong></p>
										<p></p>
										<p>Recorrido: <strong id="recF">Esperando...</strong></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
								<div class="panel-body">
									<p align="center">Datos</p>
									<div id="tour2_06" class="alert alert-warning">
										<div class="row">
											<div class="col-lg-3">
												<strong>x</strong>
												<div id="datosf1"></div>
											</div>
											<div class="col-lg-2"></div>
											<div class="col-lg-4">
												<strong>f( x ) = </strong><strong id="kon">Esperando...</strong>
												<div id="datosf2"></div>
											</div>
											<div class="col-lg-3"></div>
										</div>
									</div>
								</div>
								</div>
								<div class="col-lg-8">
								<p align="center">Gráfico</p>
								<div class="panel-body">
									<div id="kf" class="jxgbox" style="width:100%; height:300px; border-radius: 15px;"></div>
									<p style="text-align: center;">
										Grafica de <strong>f( x ) = </strong> <strong id="valorkf"></strong>
									</p>
								</div>
								</div>
							</div>
						</div><!--//panel-body -->
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<script>
var valx=0,valy=0,valx1=0;//puntos reales
var tipo=0; //Punto de la grafica 0>Valido 1>Invalido
var vFuncion=0;//funcion correcta 1-4
var vDominio=0;//Dominio correcto 1-4
var vRecorrido=0;//Recorrido correcto 1-4
var cortaGraf=0;//Grafica corta? 0=verdadera 1=Falso
var fme=0,fma=0,fko=0,fvi=0,fvf=0;//para problemas

function yy(){
	var boardx = JXG.JSXGraph.initBoard('kx',
		{boundingbox: [-10, 10, 10, -10], axis:true, grid:true, showCopyright:false});
	var p1 = boardx.create('point', [0,1]);
	var graph = boardx.create('functiongraph', [
		function() {
			var a = p1.Y().toFixed(2);
			$('#valor').html('f(x) = '+a);
			return a;
		}],
		{strokeColor:'#00ff00',strokeWidth:4});
}
yy();
//creando grafica teoria
		/**
		 * [iniciar1 description]
		 * @return {[type]} [description]
		 */
function iniciar1(){
	var b = JXG.JSXGraph.initBoard('kx1', {boundingbox: [-7, 3, 7,-6], axis:true,grid:true,showCopyright:false});
	var pe1 = b.create('point',[-3,-2], {name:'',size:4});
	var pe2 = b.create('point',[-2,-2], {name:'',size:4});
	var pe3 = b.create('point',[-1,-2], {name:'',size:4});
	var pe4 = b.create('point',[0,-2], {name:'',size:4});
	var pe5 = b.create('point',[1,-2], {name:'',size:4});
	var pe6 = b.create('point',[2,-2], {name:'',size:4});
	var pe7 = b.create('point',[3,-2], {name:'',size:4});
	var const1 =b.create('line',[pe1,pe7]);
}
/**
 * [iniciar2 description]
 * @return {[type]} [description]
 */
function iniciar2(){
	var c = JXG.JSXGraph.initBoard('kx2', {boundingbox: [-1, 6, 11,-2], axis:true,grid:true,showCopyright:false});
	var pe1 = c.create('point',[0,1], {name:'',size:4});
	var pe2 = c.create('point',[1,1], {name:'',size:4});
	var pe3 = c.create('point',[2,1], {name:'',size:4});
	var pe4 = c.create('point',[3,1], {name:'',size:4});
	var pe5 = c.create('point',[4,1], {name:'',size:4});
	var pe6 = c.create('point',[5,1], {name:'',size:4});
	var pe7 = c.create('point',[6,1], {name:'',size:4});
	var pe8 = c.create('point',[7,1], {name:'',size:4});
	var const2 =c.create('line',[pe1,pe8],{straightFirst:false, straightLast:false, strokeWidth:2});
	c.create('text', [0.5, 5, "Distancia(metros)"], {anchorY:'bottom', cssClass:'mytext'});
	c.create('text', [8, -1, "Tiempo(segundos)"], {anchorY:'bottom', cssClass:'mytext'});
}
/**
 * [iniciar3 description]
 * @return {[type]} [description]
 */
function iniciar3(){
	var d = JXG.JSXGraph.initBoard('kx3', {boundingbox: [-1, 38, 8,-10], axis:true,grid:true,showCopyright:false});
	var pe1 = d.create('point',[0,32], {name:'',size:4});
	var pe2 = d.create('point',[1,32], {name:'',size:4});
	var pe3 = d.create('point',[2,32], {name:'',size:4});
	var pe4 = d.create('point',[3,32], {name:'',size:4});
	var pe5 = d.create('point',[4,32], {name:'',size:4});
	var pe6 = d.create('point',[5,32], {name:'',size:4});
	var pe5 = d.create('point',[6,32], {name:'',size:4});
	var pe6 = d.create('point',[7,32], {name:'',size:4});
	var const3 =d.create('line',[pe1,pe6],{straightFirst:false, straightLast:false, strokeWidth:2});
	d.create('text', [0.5, 33, "Distancia(miles de km)"], {anchorY:'bottom', cssClass:'mytext'});
	d.create('text', [6, -5, "Tiempo(años)"], {anchorY:'bottom', cssClass:'mytext'});
}
/**
 * [ejemplos description]
 * @param  {[type]} nejemplo [description]
 * @return {[type]}          [description]
 */
function ejemplos(nejemplo){
	switch(nejemplo){
		case 1:{
			$("#btnejercicio1").addClass("active");
			$("#fade1").show();
			$("#fade2").hide();
			$("#fade3").hide();
			iniciar1();
		}break;
		case 2:{
			$( "#btnejercicio1").removeClass("active");
			$("#fade1").hide();
			$("#fade2").show();
			$("#fade3").hide();
			iniciar2();
		}break;
		case 3:{
			$( "#btnejercicio1").removeClass("active");
			$("#fade1").hide();
			$("#fade2").hide();
			$("#fade3").show();
			iniciar3();
		}break;
		default:{

		}
	}
}
/**
 * Genera números pseudoaleatorios entre dos valores dados.
 * @param  {int} min Mínimo número pseudoaleatorio a generar.
 * @param  {int} max Máximo número pseudoaleatorio a generar.
 * @return {int}     Númerp pseudo aleatorio generado.
 */
function getRand(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
/**
 * [practica1 description]
 * @return {[type]} [description]
 */
function practica1(){
	var b1 = JXG.JSXGraph.initBoard('plano5',{boundingbox: [-30, 30, 30, -30], axis:true, grid:false,showCopyright:false});
	var x1 =getRand(-29,29);
	var y1= getRand(-28,28);
	valx=x1;
	valy=y1;
	var p1 = b1.create('point', [x1,y1],{name:'['+x1+','+y1+']',size:4});//punto real X(),Y()
	/**
	* [if description]
	* @param  {[type]} Math.floor(Math.random()*100)%2 [description]
	* @return {[type]}                                 [description]
	*/
	if(Math.floor(Math.random()*100)%2===0){
		cortaGraf=0;//grafica corta
		tipo=0;//sera punto valido
		if(x1<0)//punto valido
		{
			x1+=getRand(1,20);//
		}else{
			x1+=getRand(1,5);//
		}
		valx1=getRand(-27,28);
		if (valx1<x1) {tipo=1;}

		var p2 = b1.create('point',[valx1,function(){return p1.Y()}],{size:4});

		$('#puntograf').html('['+x1+','+y1+']');
		var li=b1.create('line',[p2,p1],{straightFirst:false, straightLast:false,strokeColor:'#00ff00',strokeWidth:4});
	}else{
		cortaGraf=1;//grafica larga
		tipo=1;//sera punto invalido
		if(y1<0)//punto invalido
		{
			y1+=getRand(1,20);
		}else{
			y1+=getRand(0,5);
		}
		valx1=getRand(-28,28);
		if (valx==x1 && valy==y1) {tipo=0;}//El punto es el mismo -->Punto Valido

		$('#puntograf').html('['+x1+','+y1+']');//Opcion de respuesta.

		var li=b1.create('line',[[valx1,function(){return p1.Y()}],p1],{straightFirst:true, straightLast:true, strokeWidth:2,strokeColor:'#00ff00'});
	}
	funcion();
	dominio();
	recorrido();
}
practica1();
/**
 * Verfica si ha seleccionado correctamente las afirmaciones.
 * @return {[type]} [description]
 */
function verificar(){
	var pasa=0;
	if ($("#opc1").prop('checked')) {

		//swal("Alto!", "Has colocado uno o varios elementos incorrectamente", "error");
		//toastr.error("Primero debes seleccionar el tipo de variable que deseas despejar","Alto");
		toastr.error("Verifica si dispone de una gráfica","Alto");
	} else {
		if ($("#opc2").prop('checked')) {
			if (tipo==0) {//verdadero
				if ($("#opc3").prop('checked')) {
					if ($("#opc4").prop('checked')) {
						toastr.success("Pasa a Configuracion y desarrolo","Excelente");
						abrirResDes();
					} else {
						toastr.error("Revise la teoría","Alto");
					}
				} else {
					toastr.error("Visualice en la gráfica el punto dado","Alto");
				}
			}else{//tipo=1 falso
				if ($("#opc3").prop('checked')) {
					toastr.error("verifique si el punto coincide con alguno de la grafica","Alto");
				} else {
					if ($("#opc4").prop('checked')) {
						toastr.success("Pasa a Configuracion y desarrolo","Excelente");
						abrirResDes();
					} else {
						toastr.error("Revise la teoría","Alto");
					}
				}
			}
		} else {
			toastr.error("Revisa la teoría del dominio de gráficas constantes","Alto");
		}
	}
}
/**
 * Verifica que ha elegido corredtamente la función
 * @return {[type]} [description]
 */
function verificarF() {
	if (vFuncion==1 && $("#opcF1").prop('checked') && !$("#opcF2").prop('checked') && !$("#opcF3").prop('checked') && !$("#opcF4").prop('checked')) {
		toastr.success("Continue identificando el dominio","Excelente");
	} else {
		if (vFuncion==2 &&  $("#opcF2").prop('checked') && !$("#opcF1").prop('checked') && !$("#opcF3").prop('checked') && !$("#opcF4").prop('checked')) {
			toastr.success("Continue identificando el dominio","Excelente");
		} else {
			if (vFuncion==3 &&  $("#opcF3").prop('checked') && !$("#opcF2").prop('checked') && !$("#opcF1").prop('checked') && !$("#opcF4").prop('checked')) {
				toastr.success("Continue identificando el dominio","Excelente");
			} else {
				if (vFuncion==4 &&  $("#opcF4").prop('checked') && !$("#opcF3").prop('checked') && !$("#opcF2").prop('checked') && !$("#opcF1").prop('checked')) {
					toastr.success("Continue identificando el dominio","Excelente");
				} else {
					toastr.error("Revise la teoria e intentelo nuevamente","Alto");
				}
			}
		}
	}
}

function verificarD() {
	if (vDominio==1 && $("#opcD1").prop('checked') && !$("#opcD2").prop('checked') && !$("#opcD3").prop('checked') && !$("#opcD4").prop('checked')) {
		toastr.success("Continue, identificando el recorrido de la grafica o función.","Excelente");
	} else {
		if (vDominio==2 && $("#opcD2").prop('checked') && !$("#opcD1").prop('checked') && !$("#opcD3").prop('checked') && !$("#opcD4").prop('checked')) {
			toastr.success("Continue, identificando el recorrido de la grafica o función.","Excelente");
		} else {
			if (vDominio==3 && $("#opcD3").prop('checked') && !$("#opcD2").prop('checked') && !$("#opcD1").prop('checked') && !$("#opcD4").prop('checked')) {
				toastr.success("Continue, identificando el recorrido de la grafica o función.","Excelente");
			} else {
				if (vDominio==4 && $("#opcD4").prop('checked') && !$("#opcD3").prop('checked') && !$("#opcD2").prop('checked') && !$("#opcD1").prop('checked')) {
					toastr.success("Continue, identificando el recorrido de la grafica o función.","Excelente");
				} else {
					toastr.error("Revise la teoria e intentelo nuevamente","Alto");
				}
			}
		}
	}
}
function verificarR() {
	if (vRecorrido==1 && $("#opcR1").prop('checked') && !$("#opcR2").prop('checked') && !$("#opcR3").prop('checked') && !$("#opcR4").prop('checked')) {
		toastr.success("Ha identificado el recorrido de la función","Excelente");
	} else {
		if (vRecorrido==2 && $("#opcR2").prop('checked') && !$("#opcR1").prop('checked') && !$("#opcR3").prop('checked') && !$("#opcR4").prop('checked')) {
			toastr.success("Ha identificado el recorrido de la función","Excelente");
		} else {
			if (vRecorrido==3 && $("#opcR3").prop('checked') && !$("#opcR2").prop('checked') && !$("#opcR1").prop('checked') && !$("#opcR4").prop('checked')) {
				toastr.success("Ha identificado el recorrido de la función","Excelente");
			} else {
				if (vRecorrido==4 && $("#opcR4").prop('checked') && !$("#opcR3").prop('checked') && !$("#opcR2").prop('checked') && !$("#opcR1").prop('checked')) {
					toastr.success("Ha identificado el recorrido de la función","Excelente");
				} else {
					toastr.error("Revise la teoria e intentelo nuevamente","Alto");
				}
			}
		}
	}
}
function cerrarteoria() {
	$( "#collapseOne").removeClass("in");
	//$('body').addClass('t
}
function abrirResDes() {
	$( "#collapseThree4").addClass("in");
	//$('body').addClass('t
}
function funcion() {
	vFuncion=getRand(1,4);
	switch(vFuncion){
		case 1: {
			$('#valF1').html(' x ');
			$('#valF11').html(valy);

			$('#valF2').html(' 0 ');
			$('#valF22').html(valy+'+k');

			$('#valF3').html(valx);
			$('#valF33').html(valy);

			$('#valF4').html(' y ');
			$('#valF44').html(valy);
		}break;
		case 2:{
			$('#valF1').html(' x ');
			$('#valF11').html(valy+'+k');

			$('#valF2').html(' x ');
			$('#valF22').html(valy);

			$('#valF3').html(' y ');
			$('#valF33').html(valy);

			$('#valF4').html(valx);
			$('#valF44').html(valy);
		}break;
		case 3:{
			$('#valF1').html(' '+getRand(-10,10)+' ');
			$('#valF11').html(valy);

			$('#valF2').html(' y ');
			$('#valF22').html(valy+'+k');

			$('#valF3').html(' x ');
			$('#valF33').html(valy);

			$('#valF4').html(' 0 ');
			$('#valF44').html(valy);
		}break;
		case 4:{
			$('#valF1').html(' 0 ');
			$('#valF11').html(valy);

			$('#valF2').html(' y ');
			$('#valF22').html(valy+'+k');

			$('#valF3').html(' ' +valx+' ');
			$('#valF33').html(valy);

			$('#valF4').html(' x ');
			$('#valF44').html(valy);
		}break;
	}
}
function dominio() {
	vDominio=getRand(1,4);
	var me=0,ma=0;//ordenar dominio
	if (valx<=valx1) {
		me=valx;
		ma=valx1;
	}else{
		me=valx1;
		ma=valx;
	}
	switch(vDominio){
		case 1:{
			if(cortaGraf==0){
				$('#valD1').html('[ '+me+' , '+ma+' ]');
				$('#valD2').html('&real; (Reales)');
			}else{
				$('#valD1').html('&real; (Reales)');
				$('#valD2').html('[ '+valx+' , '+valy+' ]');
			}
			$('#valD3').html('[ '+valx1+' , '+valy+' ]');
			$('#valD4').html('[ 0 , '+ma+' ]');
		}break;
		case 2:{
			$('#valD1').html('[ 0 , '+ma+' ]');
			if(cortaGraf==0){
				$('#valD2').html('[ '+me+' , '+ma+' ]');
			}else{
				$('#valD2').html('&real; (Reales)');
			}
			$('#valD3').html('[ '+valx1+' , '+valy+' ]');
			$('#valD4').html('[ '+valx+' , '+valy+' ]');
		}break;
		case 3:{
			$('#valD1').html('[ '+valx1+' , '+valy+' ]');
			if(cortaGraf==0){
				$('#valD2').html('&real; (Reales)');
				$('#valD3').html('[ '+me+' , '+ma+' ]');

			}else{
				$('#valD2').html('[ '+valx+' , '+valy+' ]');
				$('#valD3').html('&real; (Reales)');
			}
			$('#valD4').html('[ '+me+' , 0 ]');
		}break;
		case 4:{
			$('#valD1').html('[ '+valx1+' , '+valy+' ]');
			$('#valD2').html('[ '+me+' , 0 ]');
			$('#valD3').html('[ '+valx+' , '+valy+' ]');
			if(cortaGraf==0){
				$('#valD4').html('[ '+me+' , '+ma+' ]');
			}else{
				$('#valD4').html('&real; (Reales)');
			}
		}break;
	}
}
function recorrido() {
	vRecorrido=getRand(1,4);
	switch(vRecorrido){
		case 1:{
			$('#valR1').html(' '+valy);
			$('#valR2').html(' '+valx1);
			$('#valR3').html(' '+getRand(-15,15));
			$('#valR4').html(' '+valx);
		}break;
		case 2:{
			$('#valR1').html(' '+valx);
			$('#valR2').html(' '+valy);
			$('#valR3').html(' '+valx1);
			$('#valR4').html(' '+getRand(-15,15));
		}break;
		case 3:{
			$('#valR1').html(' '+getRand(-15,15));
			$('#valR2').html(' '+valx);
			$('#valR3').html(' '+valy);
			$('#valR4').html(' '+valx1);
		}break;
		case 4:{
			$('#valR1').html(' '+valx1);
			$('#valR2').html(' '+getRand(-15,15));
			$('#valR3').html(' '+valx+'>');
			$('#valR4').html(' '+valy+'>');
		}break;
	}
}
function resolucion(nres){
		switch(nres){
			case 1:{
				$("#btnP1").addClass("active");
				$("#fadeP1").show();
				$("#fadeP2").hide();
			}break;
			case 2:{
				$("#btnP1").removeClass("active");
				$("#fadeP1").hide();
				$("#fadeP2").show();
			}break;
			default:{

			}
		}
	}
function infinito(vif) {
	if (vif==1) {
		if ($("#opcPI").prop('checked')) {
			//document.getElementById("inpi").disabled;
			$("#inpi").prop('disabled', true);
		} else {
			//document.getElementById("inpi").enabled;
			$("#inpi").prop('disabled', false)
		}
	} else {
		if ($("#opcPF").prop('checked') ){
			$("#inpf").prop('disabled', true);

		} else {
			$("#inpf").prop('disabled', false);

		}
	}
}
function funcK() {
	var konstante=document.getElementById("ink").value;
	var kpi=document.getElementById("inpi").value;
	var kpf=document.getElementById("inpf").value;
	if ($("#opcPI").prop('checked')) {
		if ($("#opcPF").prop('checked')) {
			if (konstante=="") {
				toastr.error("Ingrese una constante valida","Alto");
			} else {
				$('#domF').html('] - &#x221e; , + &#x221e; [ ');
				$('#recF').html($("#ink").val());
				fko=konstante;
				datosf(-3);
			}
		} else {
			if (konstante=="" || kpf=="") {
				toastr.error("Ingrese datos validos","Alto");
			} else {
				$('#domF').html('[ -&#x221e; , '+kpf+' [ ');
				$('#recF').html($("#ink").val());
				fvf=kpf;
				fko=konstante;
				datosf(-2);
			}
		}
	}else{//no check opcpI
		if ($("#opcPF").prop('checked')) {
			if (konstante=="" || kpi=="") {
				toastr.error("Ingrese datos validos","Alto");
			} else {
				$('#domF').html('[ '+kpi+' , + &#x221e; [ ');
				$('#recF').html($("#ink").val());
				fvi=kpi;
				fko=konstante;
				datosf(-1);
			}
		}
		else{
			if (konstante=="" || kpi=="" || kpf=="") {
				toastr.error("Ingrese datos validos","Alto");
			} else {
				if (kpi!=kpf) {
					if(kpi<kpf){
						$('#domF').html('[ '+kpi+' , ' +kpf+' ] ');
						fme=kpi;
						fma=kpf;
					}else{
						$('#domF').html('[ '+kpf+' , ' +kpi+' ] ');
						fme=kpf;
						fma=kpi;
					}
					$('#recF').html($("#ink").val());
					fvi=fme;
					fvf=fma;
					fko=konstante;
					datosf(0);
				} else {
					toastr.error("El valor inicial y final deben ser distintos","Alto")
				}

			}
		}
	}
}
function datosf(vdatos){
	var boardxx = JXG.JSXGraph.initBoard('kf',{boundingbox: [-20, 20, 20, -20], axis:true, grid:true,showCopyright:false});
	var valtabla=1;//Control while
	if(vdatos==-3){
		$("#valorkf").html(''+fko);
		var p2 = boardxx.create('point', [0,fko],{name:'['+0+','+fko+']',size:4});
		var li=boardxx.create('line',[[-1,fko],[1,fko]],{straightFirst:true, straightLast:true, strokeWidth:2,strokeColor:'#00ff00',strokeWidth:4});
	}else{
		if (vdatos==-2) {
			$("#valorkf").html(''+fko);
			//var p1 = boardxx.create('point', [-1000,fko]);
			var p2 = boardxx.create('point', [fvf,fko],{name:'['+fvf+','+fko+']',size:4});
			var li=boardxx.create('line',[[-1000,fko],p2],{straightFirst:true, straightLast:false, strokeWidth:2,strokeColor:'#00ff00',strokeWidth:4});
		} else {
			if (vdatos==-1) {
				$("#valorkf").html(''+fko);
				var p1 = boardxx.create('point', [fvi,fko],{name:'['+fvi+','+fko+']',size:4});
				//var p2 = boardxx.create('point', [5000,fko]);
				var li=boardxx.create('line',[p1,[1000,fko]],{straightFirst:false, straightLast:true, strokeWidth:2,strokeColor:'#00ff00',strokeWidth:4});
			} else {
				$("#valorkf").html(''+fko);
				var p1 = boardxx.create('point', [fvi,fko],{name:'['+fvi+','+fko+']',size:4});
				var p2 = boardxx.create('point', [fvf,fko],{name:'['+fvf+','+fko+']',size:4});
				var li=boardxx.create('line',[p1,p2],{straightFirst:false, straightLast:false, strokeWidth:2,strokeColor:'#00ff00',strokeWidth:4});
			}
		}
	}
	$("#kon").html(fko);
	$("#datosf1").html('');
	$("#datosf2").html('');
	var dat1=0;
	var dat2=0;
	dat1=(fvi);
	dat2=(fvf);
	valtabla=8;
	if (vdatos==-3) {
		$("#datosf1").append('<p> . . . </p>');
		$("#datosf2").append('<p>'+fko+'</p>');
		dat1=-3;
		while(valtabla>0)
		{
			$("#datosf1").append('<p>'+dat1+'</p>');
			$("#datosf2").append('<p>'+fko+'</p>');
			valtabla-=1;
			dat1+=1;
		}
		$("#datosf1").append('<p> . . .</p>');
		$("#datosf2").append('<p>'+fko+'</p>');
	} else {
		if (vdatos==-2) {
			while(valtabla>0)
			{
				$("#datosf1").append('<p>'+dat2+'</p>');
				$("#datosf2").append('<p>'+fko+'</p>');
				valtabla-=1;
				dat2-=1;
			}
			$("#datosf1").append('<p> . . . </p>');
			$("#datosf2").append('<p>'+fko+'</p>');
		} else {
			if (vdatos==-1) {
				while(valtabla>0)
				{
					$("#datosf1").append('<p>'+dat1+'</p>');
					$("#datosf2").append('<p>'+fko+'</p>');
					valtabla-=1;
					dat1++;
				}
				$("#datosf1").append('<p> . . . </p>');
				$("#datosf2").append('<p>'+fko+'</p>');
			} else {
				if (dat1<dat2) {
					if(dat1<0 && dat2>-1){//Complete
						//$("#datosf1").append('<p>MeN1:'+dat1+'==='+dat2+'</p>');
						//$("#datosf2").append('<p>'+fko+'</p>');
						while(dat1<=dat2 && valtabla>0){
							$("#datosf1").append('<p>'+dat1+'</p>');
							$("#datosf2").append('<p>'+fko+'</p>');
							dat1++;
							valtabla--;
						}
					}else{
						if (dat2<0 && dat1>-1) {//JAMAS SUCEDE
							//$("#datosf1").append('<p>MeN2:'+dat2+'==='+dat1+'</p>');
							//$("#datosf2").append('<p>'+fko+'</p>');
							while(dat2>=dat1 && valtabla>0){
								$("#datosf1").append('<p>'+dat2+'</p>');
								$("#datosf2").append('<p>'+fko+'</p>');
								dat2++;
								valtabla--;
							}
						} else {
							if(dat1>0 && dat2>0){//Complete
								//$("#datosf1").append('<p>MeP:'+dat1+'==='+dat2+'</p>');
								//$("#datosf2").append('<p>'+fko+'</p>');
								if (Math.abs(dat1)<Math.abs(dat2)) {
									while(Math.abs(dat1)<=Math.abs(dat2) && valtabla>0){
										$("#datosf1").append('<p>'+dat1+'</p>');
										$("#datosf2").append('<p>'+fko+'</p>');
										dat1++;
										valtabla--;
									}
								} else {
									while(Math.abs(dat2)<=Math.abs(dat1) && valtabla>0){
										$("#datosf1").append('<p>'+dat2+'</p>');
										$("#datosf2").append('<p>'+fko+'</p>');
										dat2++;
										valtabla--;
									}
								}
							}else{
								//$("#datosf1").append('<p>MeNs:'+dat2+'==='+dat1+'</p>');
								//$("#datosf2").append('<p>'+fko+'</p>');
								if (Math.abs(dat2) < Math.abs(dat1)) {
									$("#datosf1").append('<p>MeNs1:'+dat1+'==='+dat1+'</p>');
									$("#datosf2").append('<p>'+fko+'</p>');
									while(Math.abs(dat1)>=Math.abs(dat2) && valtabla>0){
										$("#datosf1").append('<p>'+dat1+'</p>');
										$("#datosf2").append('<p>'+fko+'</p>');
										dat1++;
										valtabla--;
									}
								} else {
									$("#datosf1").append('<p>MeNs2:'+dat2+'==='+dat1+'</p>');
									$("#datosf2").append('<p>'+fko+'</p>');
								//while(Math.abs(dat2)>=Math.abs(dat1) && valtabla>0){
									while(Math.abs(dat2)>=Math.abs(dat1) && valtabla>0){
										$("#datosf1").append('<p>'+dat2+'</p>');
										$("#datosf2").append('<p>'+fko+'</p>');
										dat2++;
										valtabla--;
									}
								}
							}
						}
					}

				}else{
					$("#datosf1").append('<p>Necesita Soporte Técnico</p>');
				}
			}
		}
	}
}
function tour1(){
    var tour = new Tour({
    steps: [{
        element: "#tour1_01",
        title: "Paso 1",
        content: "Presione este botón para generar una nueva grafica.",
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
        element: "#plano5",
        title: "Paso 2",
        content: "Analice detenidamente el gráfico, con los controles de la esquina inferior derecha puede acercar, alejar el gráfico para mayor detalle.",
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
        element: "#tour1_03",
        title: "Paso 3",
        content: "Seleccione las afirmaciones correctas acerca de la grafica.",
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
        element: "#tour1_04",
        title: "Paso 4",
        content: "Presione para verificar la opción seleccionada.",
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
function tour1_1(){
    var tour = new Tour({
    steps: [
    {
        element: "#tour1_05",
        title: "Paso 5",
        content: "Debe seleccionar la función que describe la grafica presentada.",
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
        element: "#tour1_06",
        title: "Paso 6",
        content: "Presione para verificar la opción seleccionada.",
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
        element: "#tour1_07",
        title: "Paso 7",
        content: "Identifique el \"Dominio\" de la función y gráfica presentada..",
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
        element: "#tour1_08",
        title: "Paso 8",
        content: "Presione para verificar la opción seleccionada.",
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
        element: "#tour1_09",
        title: "Paso 09",
        content: "Finalmente seleccionar el \"Recorrido\" de la gráfica y función.",
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
        element: "#tour1_10",
        title: "Paso 10",
        content: "Presione para verificar la opción seleccionada.",
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
        element: "#tour2_01",
        title: "Paso 1",
        content: "Ingrese el valor de la constante(Debe ser número Real).",
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
        element: "#tour2_02",
        title: "Paso 2",
        content: "Ingrese o seleccione el valor inicial de función.",
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
        element: "#tour2_03",
        title: "Paso 3",
        content: "Ingrese o seleccione el valor final de función.",
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
        element: "#tour2_04",
        title: "Paso 4",
        content: "Presione para resolver el ejercicio.",
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
        element: "#tour2_05",
        title: "Paso 5",
        content: "Se muestra el valor del \"Dominio\" y \"Recorrido\" de la función.",
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
        element: "#tour2_06",
        title: "Paso 6",
        content: "Se muestran algunos valores que tomará la función(Recuerda con dos puntos se dibuja la línea recta).",
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
        element: "#kf",
        title: "Paso 6",
        content: "Visualice la gráfica resultante.",
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
	   <script type="text/javascript">
	$(document).ready(function () {
		//practica1();
	});
	$(document).ready(function () {

		$(".ibox").resizable({
			helper: "ui-resizable-helper",
			grid: 20
		});
	});
</script>
<script>
$(document).ready(function () {
	$('.i-checks').iCheck({
		checkboxClass: 'icheckbox_square-green',
		radioClass: 'iradio_square-green',
	});
	});
/*$("#btnejercicio1").click(function() {
     ejemplos(1);
});
$("#btnejercicio1").click();
*/
	</script>
