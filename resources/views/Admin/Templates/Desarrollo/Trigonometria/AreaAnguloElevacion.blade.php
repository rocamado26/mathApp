<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins animated fadeInUpBig">
            <div class="ibox-title">
                <h5>Ángulos de elevación y depresión</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
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
                                        <div class="col-xs-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <strong> Ángulo de elevación</strong>
                                                    <p style="text-align: justify;">
                                                        <br>Cuando observas un objeto arriba de tí, hay un ángulo de elevación entre el plano horizontal y tu línea de visión hacia el objeto.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <center><img src="{{asset('img/iconos/trigonometria/areadesarrollo/teoria-globo.png')}}"></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <strong> Ángulo de depresión</strong>
                                                    <p style="text-align: justify;">
                                                        <br>Cuando observas un objeto abajo de tí, hay un ángulo de depresión entre el plano horizontal y tu línea de visión hacia el objeto.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <center><img src="{{asset('img/iconos/trigonometria/areadesarrollo/depresion.png')}}"></center>
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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">Ejemplos</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12" align="center">
                                            <button class="btn btn-outline btn-primary dim" type="button" onclick="ejemplos45(1)">1</button>
                                            <button class="btn btn-outline btn-primary dim" type="button" onclick="ejemplos45(2)">2</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                        <div class="ibox">
                                            <div class="ibox-content">
                                                <div style="" id="ej4" class="animated bounceInRight">
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
                                                                                    Un piloto de un barco observa al vigía de un faro con un ángulo de <b>elevación de 32°</b>. Si la <b>altura</b> del faro es de <b>135 m</b>, calcular la distancia del faro al barco(d), y la visual del piloto(v):<br>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-3"></div>
                                                                            <div class="col-md-6">
                                                                                <center><img src="{{asset('img/iconos/trigonometria/areadesarrollo/ej-faro-barco.png')}}"></center>
                                                                            </div>
                                                                            <div class="col-xs-3"></div>
                                                                        </div>  
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-xs-12"> Calculando " <b>d</b> " de la seguiente manera:</div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="well">
                                                                    <div class="row diff-wrapper">
                                                                        <div class="col-xs-12" align="center">
                                                                           <font size="3">tan 32° = </font><font size="4"><sup>135</sup>/<sub>d</sub></font><br><br>
                                                                           <b>-- Despejamos d: </b><br><br>
                                                                           <font size="3">d = </font><font size="4"><sup>135</sup>/<sub>tan 32°</sub></font><br><br>
                                                                           <b>--El valor de d es:</b><br><br>
                                                                           <font size="3">d = 216.05 m</font><br><br>
                                                                           La distancia del faro al barco es : <b>216.05 metros.</b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    Hallamos <b>d</b> con la función tangente, ya que conocemos el cateto opuesto al ángulo de 32°  y vamos a buscar el cateto adyacente. <br><br>
                                                                    Calculando " <b>v</b> " de la seguiente manera:
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="well">
                                                                    <div class="row diff-wrapper">
                                                                         <div class="col-xs-12" align="center">
                                                                            <font size="3">sen 32° = </font><font size="4"><sup>135</sup>/<sub>v</sub></font><br><br>
                                                                            <b>-- Despejamos v: </b><br><br>
                                                                            <font size="3">v = </font><font size="4"><sup>135</sup>/<sub>sen 32°</sub></font><br><br>
                                                                            <b>--El valor de v es:</b><br><br>
                                                                            <font size="3">v = 254.76 m</font><br><br>
                                                                            la visual (v) del piloto es de: <b>254.76 metros</b>.
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
                                                                            <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;<font size="4"><i><b>Punto de apoyo</b></i></font></center>
                                                                        </div>
                                                                        <div class="panel-body">
                                                                            <p style="text-align: justify;">
                                                                            <br>
                                                                            La <b>hipotenusa</b> nunca cambia, siempre es el lado más largo. 
                                                                            <br><b>H</b> = Hipotenusa <br><br>
                                                                            El lado <b>Adyacente</b> es el que se encuentra a la par o contiguo del ángulo de análisis. 
                                                                            <br><b>A</b> = Adyacente <br><br>
                                                                            El lado <b>Opuesto</b> se encuentre frente a la abertura del ángulo de análisis.
                                                                            <br><b>O</b> = Opuesto <br>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="panel panel-info">
                                                                        <div class="panel-heading">
                                                                            <center><img src="img/iconos/generales/brainstorm.png">&nbsp;&nbsp;<font size="4"><i><b>Comprende</b></i></font></center>
                                                                        </div>
                                                                        <div class="panel-body">
                                                                            <br>
                                                                            <p style="text-align: justify;">
                                                                            Pasos a seguir para resolver el ejercicio:
                                                                            <br><br>
                                                                            1-  Lee detenidamente el enunciado del problema para determinar lo que se te pide. <br><br>
                                                                            2-  Identifica la función trigonométrica a utilizar. (Para este ejemplo se utiliza <b>Tangente</b> que es igual a Opuesto entre Adyacente).<br><br>
                                                                            3-  Despejamos la variable. <br><br>
                                                                            4-  Operar los valores.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="ej5" class="animated bounceInRight" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/notebook.png">&nbsp;&nbsp;<font size="4"><i><b>Problema</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <p style="text-align: justify;">
                                                                                Un electricista subido en una torre, observa a su ayudante que está en el piso a <b>25 metros </b>del pie de la torre, con un <b>ángulo de depresión de 40°</b>. Calcular la <b>altura</b> de la torre.
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <center><img src="{{asset('img/iconos/trigonometria/areadesarrollo/ej-electricista.png')}}"></center>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                Calculamos la altura (h) de la torre :
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="well">
                                                                    <div class="row diff-wrapper">
                                                                        <div class="col-xs-12" align="center">
                                                                            
                                                                            <font size="3">Tan 40° = </font><font size="4"><sup>h</sup>/<sub>25</sub></font><br><br>
                                                                            <b>Despejamos h:</b><br><br>
                                                                            <font size="3">tan 40° ( 25 ) = h </font><br><br>
                                                                            <b>Operamos :</b><br><br>
                                                                            <font size="3">h = 20.98 m </font><br><br>
                                                                            La altura del poste es de <b>20.98 metros.</b>
                                                                        </div>
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
                                                                        <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;<font size="4"><i><b>Punto de apoyo</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <p style="text-align: justify;">
                                                                        <br>
                                                                        La <b>hipotenusa</b> nunca cambia, siempre es el lado más largo. 
                                                                        <br><b>H</b> = Hipotenusa <br><br>
                                                                        El lado <b>Adyacente</b> es el que se encuentra a la par o contiguo del ángulo de análisis. 
                                                                        <br><b>A</b> = Adyacente <br><br>
                                                                        El lado <b>Opuesto</b> se encuentre frente a la abertura del ángulo de análisis.
                                                                        <br><b>O</b> = Opuesto <br>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="panel panel-info">
                                                                    <div class="panel-heading">
                                                                        <center><img src="img/iconos/generales/brainstorm.png">&nbsp;&nbsp;<font size="4"><i><b>Comprende</b></i></font></center>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <br>
                                                                        <p style="text-align: justify;">
                                                                        Pasos a seguir para resolver el ejercicio:
                                                                        <br><br>
                                                                        1-  Lee detenidamente el enunciado del problema para determinar lo que se te pide. <br><br>
                                                                        2-  Identifica la función trigonométrica a utilizar. (Para este ejemplo se utiliza <b>Tangente</b> que es igual a Opuesto entre Adyacente).<br><br>
                                                                        3-  Despejamos la variable. <br><br>
                                                                        4-  Operar los valores.
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">Prática</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12" align="center">
                                        <button class="btn btn-outline btn-primary dim" type="button" onclick="cambiaEd(1)">1</button>
                                        <button class="btn btn-outline btn-primary dim" type="button" onclick="cambiaEd(2)">2</button>
                                    </div>
                                </div>
                                    <div class="box">
                                        <div class="ibox-content">
                                            <div class="row">
                                                <div class="col-lg-5 animated bounceInRight" id="ed1">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            El piloto de un avión observa a un hombre en la calle de una ciudad con un ángulo de <b>42°</b>, como se muestra en la figura:  
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <center><img src="{{asset('img/iconos/trigonometria/areadesarrollo/avion.png')}}"></center>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            Si la visual del piloto es de <b>15.95 km</b>, la <b>horizontal</b>  del piloto en ese momento es:
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 animated bounceInRight" style="display: none" id="ed2">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                           Una persona observa un ovni volando con un ángulo de <b>37°</b>. La referencia que tiene es un vehículo a una distancia de <b>110 m</b>.

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <center><img src="{{asset('img/iconos/trigonometria/areadesarrollo/ovni.png')}}"></center>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            ¿A qué <b>altura</b> está el ovni?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="alert alert-info">Selecciona la respuesta correcta en cada pregunta.</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-10">
                                                            <label>1- ¿Qué tipo de ángulo es?</label><br>
                                                        </div>
                                                        <div class="col-lg-2" id="chek1"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="1rpe1" value="1" name="1rpe">
                                                                <label for="1rpe1">Elevación</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="1rpe2" value="2" name="1rpe">
                                                                <label for="1rpe2">Depresión</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col-lg-10">
                                                            <label>2- ¿Qué función trigonométrica necesitas para resolver el ejercicio?</label><br>
                                                        </div>
                                                        <div class="col-lg-2" id="chek2"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="2rpe1" value="1" name="2rpe">
                                                                <label for="2rpe1">Seno</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="2rpe2" value="2" name="2rpe">
                                                                <label for="2rpe2">Tangente</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="2rpe3" value="3" name="2rpe">
                                                                <label for="2rpe3">Coseno</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="row animated bounceIn" id="pregunta3">
                                                        <div class="col-lg-10">
                                                            <label>3- La <b>horizontal</b> del piloto es:</label>
                                                        </div>
                                                        <div class="col-lg-2" id="chek3"></div>
                                                    </div>
                                                    <div class="row animated bounceIn" id="respuestas3">
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="3rpe1" value="1" name="3rpe">
                                                                <label for="3rpe1">9.52 m</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="3rpe2" value="2" name="3rpe">
                                                                <label for="3rpe2">8.39 m</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="3rpe3" value="3" name="3rpe">
                                                                <label for="3rpe3">11.85 m</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row animated bounceIn" style="display: none" id="pregunta4">
                                                        <div class="col-lg-10">
                                                            <label>3- La <b>altura</b> del ovni es:</label>
                                                        </div>
                                                        <div class="col-lg-2" id="chek4"></div>
                                                    </div>
                                                    <div class="row animated bounceIn" style="display: none" id="respuestas4">
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="4rpe1" value="1" name="4rpe">
                                                                <label for="4rpe1">82.89 m</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="4rpe2" value="2" name="4rpe">
                                                                <label for="4rpe2">83.50 m</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" id="4rpe3" value="3" name="4rpe">
                                                                <label for="4rpe3">81.89 m</label>
                                                            </div>
                                                        </div>
                                                    </div><br><br>
                                                    <div class="row">
                                                        <div class="col-xs-12" id="RP">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-8"></div>
                                                <div class="col-xs-2">
                                                    <button type="button" class="btn btn-danger btn-rounded" onclick="limpiarPracticaED();"><i class="fa fa-repeat"></i>&nbsp;Reestablecer</button>
                                                </div>
                                                <div class="col-xs-2">
                                                    <button type="button" class="btn btn-primary btn-rounded" onclick="VerificaEvalucion();"><i class="fa fa-check"></i>&nbsp;Comprobar</button></div>
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

    var practica=1;
    /**
     * Cambia de ejemplo
     * @param  int op Numero de ejemplo a mostrar.
     * @return sin retorno    
     */
    function ejemplos45(op){
        if (op==1) {
            document.getElementById('ej4').style.display = 'block';
            document.getElementById('ej5').style.display = 'none';
        } else {
            document.getElementById('ej5').style.display = 'block';
            document.getElementById('ej4').style.display = 'none';
        }
    }

    /**
     * Cambia los ejemplos de la prática
     * @param  {int} op determina la prática.
     * @return {}    sin retorno.
     */
    function cambiaEd(op){
        if (op==1) {
            limpiarPracticaED();
            document.getElementById('ed1').style.display = 'block';
            document.getElementById('pregunta3').style.display = 'block';
            document.getElementById('respuestas3').style.display = 'block';
            document.getElementById('ed2').style.display = 'none';
            document.getElementById('pregunta4').style.display = 'none';
            document.getElementById('respuestas4').style.display = 'none';
            practica=1;
        } else {
            limpiarPracticaED();
            document.getElementById('ed1').style.display = 'none';
            document.getElementById('pregunta4').style.display = 'block';
            document.getElementById('respuestas4').style.display = 'block';
            document.getElementById('ed2').style.display = 'block';
            document.getElementById('pregunta3').style.display = 'none';
            document.getElementById('respuestas3').style.display = 'none';
            practica=2;
        }
    }

    /**
     * Comprueba si la evalución es correcta.
     */
    function VerificaEvalucion(){
        var a=0;
        if (practica==1) {
            if ($('input:radio[name=1rpe]:checked').val()==2) {
                $('#chek1').html('<span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>');
                a++;
            } else {$('#chek1').html('<span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>');}
            if ($('input:radio[name=2rpe]:checked').val()==3) {
                $('#chek2').html('<span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>');
                a++;
            } else {$('#chek2').html('<span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>');}
            if ($('input:radio[name=3rpe]:checked').val()==3) {
                $('#chek3').html('<span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>');
                a++;
            } else {$('#chek3').html('<span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>');}
            if (a==3) {
                swal("¡Buen trabajo!", "Has resuelto correctamente el ejercicio.", "success");
                $('#RP').html('<div class="alert alert-success animated bounceIn"><div class="row"><div class="col-xs-4"></div><div class="col-xs-6"><font size="3">cos 42° = </font><font size="4"><sup><b>horizontal</b></sup>/<sub>15.95 km</sub></font><br><font size="3"><b>horizontal</b> = 15.95 (cos 42°)<br><b>horizontal</b> = 11.85 km</font></div><div class="col-xs-2"></div></div></div>')
            } else {
                
            }
        } else {
            if (practica==2) {
                if ($('input:radio[name=1rpe]:checked').val()==1) {
                    $('#chek1').html('<span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>');
                    a++;
                } else {$('#chek1').html('<span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>');}
                if ($('input:radio[name=2rpe]:checked').val()==2) {
                    $('#chek2').html('<span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>');
                    a++;
                } else {$('#chek2').html('<span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>');}
                if ($('input:radio[name=4rpe]:checked').val()==1) {
                    $('#chek4').html('<span class="badge badge-primary"><i class="fa fa-thumbs-up"></i></span>');
                    a++;
                } else {$('#chek4').html('<span class="badge badge-danger"><i class="fa fa-thumbs-down"></i></span>');}
            }
            if (a==3) {
                swal("¡Buen trabajo!", "Has resuelto correctamente el ejercicio.", "success");
                $('#RP').html('<div class="alert alert-success animated bounceIn"><div class="row"><div class="col-xs-4"></div><div class="col-xs-6"><font size="3">tan 37° = </font><font size="4"><sup><b>altura</b></sup>/<sub>110 m</sub></font><br><font size="3"><b>altura</b> = 110 (tan 37°)<br><b>altura</b> = 82.89 m</font></div><div class="col-xs-2"></div></div></div>');
            } else {
              
            }
        }
    }

    function limpiarPracticaED(){
        $('input[name=1rpe]').attr('checked',false);
        $('input[name=2rpe]').attr('checked',false);
        $('input[name=3rpe]').attr('checked',false);
        $('input[name=4rpe]').attr('checked',false);
        $('#chek1').html('');
        $('#chek2').html('');
        $('#chek3').html('');
        $('#chek4').html('');
        $('#RP').html('');
        toastr.success('Infomación borrada','Muy Bien');
    }
</script>
