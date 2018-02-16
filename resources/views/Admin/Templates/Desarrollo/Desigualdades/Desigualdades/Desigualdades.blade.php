<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins  animated fadeInUpBig">
            <div class="ibox-title">
                <h5>Desigualdades <small>-Generalidades</small></h5>
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
                                        <div class="col-md-8">
                                            <strong>Tipos de intervalos</strong><br><br>
                                            <p style="text-align: justify;">
                                                Un subconjunto de la recta real se llama intervalo, y contiene a todos los números reales que están comprendidos entre dos cualesquiera de sus elementos.
                                                Geométricamente los intervalos corresponden a segmentos de recta, semirrectas o la misma recta real.
                                                <br>
                                                Los intervalos de números correspondientes a segmentos de recta son intervalos finitos, los intervalos correspondientes a semirrectas y a la recta real son intervalos infinitos.
                                                <br>Los intervalos finitos pueden ser cerrados, abiertos o semiabiertos.
                                                Sean <b> a </b>y <b>b</b> dos números reales tales que <b> a < b</b>.
                                                <br><br>
                                                <strong>Intervalo cerrado</strong><br>
                                                Es el conjunto de números reales formado por a, b y todos los comprendidos entre ambos.
                                                <br><br>
                                                <strong>Intervalo cerrado</strong><br>
                                                Es el conjunto de los números reales comprendidos entre a y b. <br><br>
                                                <strong>Intervalo semiabierto a izquierda (o semicerrado a derecha)</strong><br>
                                                Es el conjunto de números reales formado por b y los números comprendidos entre a y b.
                                                <br><br>
                                                <strong>Intervalo semiabierto a derecha (o semicerrado a izquierda)</strong><br>
                                                Es el conjunto de números reales formado por a y los números comprendidos entre a y b.
                                                <br><br>
                                                <strong></strong><br>
                                            </p>
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

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"><br>
                                                <div class="col-lg-12">
                                                    <div class="panel panel-warning">
                                                        <div class="panel-heading">
                                                            <center><img src="img/iconos/generales/target.png">&nbsp;&nbsp;<font size="4"><i><b>Punto de apoyo</b></i></font></center>
                                                        </div>
                                                        <div class="panel-body">
                                                            <p style="text-align: justify;">
                                                                <b>Notación y clasificación :</b>
                                                                <br><br>
                                                                <b>[ m, n ]</b>: Los dos límites pertenecen al intervalo. (Intervalo cerrado – cerrado)<br><br>
                                                                <b>[ m, n [</b>: El límite superior n, no pertenece al intervalo. (Intervalo cerrado – abierto)<br><br>
                                                                <b>] m, n ]</b>: El límite inferior m, no pertenece al intervalo. (Intervalo abierto – cerrado)<br><br>
                                                                <b>] m, n [</b>: Ninguno de los límites pertenece al intervalo. (Intervalo abierto – abierto)<br><br>
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
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">Práctica</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-group">
                                                <input type="text" id="termino1" class="form-control" placeholder="Introducir desigualdad">
                                                <div class="input-group-btn">
                                                    <button type="button" id="btn1" onclick="cambiaBoton(2)" class="btn btn-danger"><b>></b></button>
                                                    <button type="button" id="btn2" onclick="cambiaBoton(3)" style="display: none;" class="btn btn-danger"><b>≥</b></button>
                                                    <button type="button" id="btn3" onclick="cambiaBoton(4)" style="display: none;" class="btn btn-danger"><b><</b></button>
                                                    <button type="button" id="btn4" onclick="cambiaBoton(1)" style="display: none;" class="btn btn-danger"><b>≤</b></button>
                                                </div>
                                                <input type="text" id="termino2" class="form-control" placeholder="Introducir desigualdad">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-primary" onclick="pasaLabel()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="alert alert-info">
                                                <label for="">Terminos: <b id="nTerminos"></b></label>
                                            </div>

                                            <div class="alert alert-warning">
                                                <div class="row">
                                                    <div class="col-xs-6 text-right">
                                                        <label style="font-size: 20px" id="areaResolucion1"></label>
                                                    </div>
                                                    <div class="col-xs-1 text-center">
                                                        <label style="font-size: 20px" id="areaResolucion2"></label>
                                                    </div>
                                                    <div class="col-xs-5 text-left">
                                                        <label style="font-size: 20px" id="areaResolucion3"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="alert alert-warning">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">N° Termino</label>
                                                        <input type="number" class="form-control" id="T1" placeholder="Primer termino">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">N° Termino</label>
                                                        <input type="number" class="form-control" id="T2" placeholder="Segundo termino">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3 text-center">
                                                        <button type="button" onclick="operaciones(1)" class="btn btn-info">&nbsp; + &nbsp;</button>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <button type="button" onclick="operaciones(2)" class="btn btn-info">&nbsp; - &nbsp;</button>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <button type="button" onclick="operaciones(3)" class="btn btn-info">&nbsp; * &nbsp;</button>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <button type="button" onclick="operaciones(4)" class="btn btn-info">&nbsp; / &nbsp;</button>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3 text-center">
                                                        <button type="button" onclick="cambiaLado(false)" class="btn btn-info"><font face='symbol'>&#222</font></button>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <button type="button" onclick="cambiaLado(true)" class="btn btn-info"><font face='symbol'>&#220</font></button>
                                                    </div>
                                                    <div class="col-md-3 text-center">

                                                    </div>
                                                    <div class="col-md-3 text-center">

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
<script>
    var opBtn=1;
    function pasoSolucion() {
        console.warn('Holaaaa');
    }

    function operar(op){
        switch (op){
            case 1:{

            }break;
            case 2:{

            }break;
            case 3:{

            }break;
            case 4:{

            }break;
            case 5:{

            }break;
        }
    }

    /**
     * Inserta en el label donde se hara el desarrollo del ejercicio
     */
    function pasaLabel() {
        divideTerminos();
        if(opBtn==1){
            $('#areaResolucion1').html(''+$('#termino1').val());
            $('#areaResolucion2').html('>');
            $('#areaResolucion3').html(''+$('#termino2').val());
        }else{
            if(opBtn==2){
                $('#areaResolucion1').html(''+$('#termino1').val());
                $('#areaResolucion2').html('≥');
                $('#areaResolucion3').html(''+$('#termino2').val());
            }else{
                if(opBtn==3){
                    $('#areaResolucion1').html(''+$('#termino1').val());
                    $('#areaResolucion2').html('<');
                    $('#areaResolucion3').html(''+$('#termino2').val());
                }else{
                    $('#areaResoliucion1').html(''+$('#termino1').val());
                    $('#areaResolucion2').html('≤');
                    $('#areaResolucion3').html(''+$('#termino2').val());
                }
            }
        }
    }

    /**
     * Cambia el boton segun se presione.
     * @param op boton a visualizar.
     */
    function cambiaBoton(op){
        switch(op){
            case 1:{$('#btn1').show();$('#btn2').hide();$('#btn3').hide();$('#btn4').hide();opBtn=1;}break;
            case 2:{$('#btn1').hide();$('#btn2').show();$('#btn3').hide();$('#btn4').hide();opBtn=2;}break;
            case 3:{$('#btn1').hide();$('#btn2').hide();$('#btn3').show();$('#btn4').hide();opBtn=3;}break;
            case 4:{$('#btn1').hide();$('#btn2').hide();$('#btn3').hide();$('#btn4').show();opBtn=4;}break;
        }
    }

    var Terminos=[];
    var lado=[];
    /**
     * Divide la cadena en términos.
     */
    function divideTerminos(){
        var funcion=$('#termino1').val();
        Terminos=[];
        lado=[];
        var inicio=0;
        for(var i=1;i<funcion.length;i++){
            if(funcion.charAt(i)=='+' || funcion.charAt(i)=='-'){
                Terminos.push(funcion.substr(inicio,i-inicio));
                lado.push(true);
                inicio=i;
            }
            if(i+1==funcion.length){
                lado.push(true);
                Terminos.push(funcion.substr(inicio,funcion.length-inicio));
            }
        }
        funcion=$('#termino2').val();
        inicio=0;
        for(var i=1;i<funcion.length;i++){
            if(funcion.charAt(i)=='+' || funcion.charAt(i)=='-'){
                Terminos.push(funcion.substr(inicio,i-inicio));
                lado.push(false);
                inicio=i;
            }
            if(i+1==funcion.length){
                lado.push(false);
                Terminos.push(funcion.substr(inicio,funcion.length-inicio));
            }
        }
        $('#nTerminos').html('');
        for(var i=0;i<Terminos.length;i++){
            $('#nTerminos').append('&nbsp;&nbsp;&nbsp; t'+''+(i+1)+' ( '+Terminos[i]+' )&nbsp;&nbsp;&nbsp;');
        }
        console.warn('terminos:',Terminos);
        console.warn('lados:',lado);
    }

    /**
     * Realiza las 4 operaciones básicas
     * @param op según la operación a realizar
     */
    function operaciones(op){
        var a=Number(Terminos[$('#T1').val()-1]);
        var b=Number(Terminos[$('#T2').val()-1]);
        console.warn('termino a:',a);
        console.warn('termino b:',b);
        if(valida(1)){
            switch (op){
                    /*Suma de terminos*/
                case 1:{
                    console.warn('suma de terminos:',a+b);

                }break;
                    /*Reta de terminos*/
                case 2:{
                    console.warn('suma de terminos:',a-b);
                }break;
                    /*Multiplicacion de terminos*/
                case 3:{
                    console.warn('suma de terminos:',a*b);
                }break;
                    /*Division de terminos*/
                case 4:{
                    console.warn('suma de terminos:',a/b);
                }break;
            }
        }
    }

    /**
     * Cambia de lado el término seleccionado
     * @param miembro boolean que indica al lado para el cual se movera
     */
    function cambiaLado(miembro){
        var c=0;
        var a=[];
        var d=[];
        var b=0;
        c=$('#T1').val()-1;
        if(miembro==false){
            for(var i=0;i<lado.length;i++){
                if(i!=c){
                    a.push(Terminos[i]);
                    d.push(lado[i]);
                }else{
                    b=i;
                }
            }
            a.push(''+Number(Terminos[b])*(-1));
            d.push(false);
            lado=d;
            Terminos=a;
        }else{
            for(var i=0;i<lado.length;i++){
                if(lado[i]!=false){
                    a.push(Terminos[i]);
                    d.push(lado[i]);
                }else{
                    if(b==0){
                        a.push("");
                        d.push(true);
                        b=i
                    }
                    if(i!=c){
                        a.push(Terminos[i]);
                        d.push(lado[i]);
                    }
                }
            }
            a[b]=""+Number(Terminos[c])*(-1);
            lado=d;
            Terminos=a;
        }
        console.warn('terminos:',Terminos);
        console.warn('lados:',lado);

    }

    function valida(op){
        switch (op){
            case 1:{
                if((lado[$('#T1').val()-1]==true && lado[$('#T2').val()-1]==true) || (lado[$('#T1').val()-1]==false && lado[$('#T2').val()-1]==false)){
                    alert('Si es posible operar');
                    return true;
                }else{
                    alert('No es posible operar');
                    return false;
                }
            }break;
            case 2:{

            }break;
        }
    }
</script>