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
                                            <div class="alert alert-info">
                                                Ingresa tu ejercicio de la forma <b>ax + b > c</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="input-group">
                                                <input type="text" id="termino1" onkeyup="validaCadena1(value)" class="form-control" placeholder="Introducir desigualdad">
                                                <div class="input-group-btn">
                                                    <button type="button" id="btn1" onclick="cambiaBoton(2)" class="btn btn-danger"><b>></b></button>
                                                    <button type="button" id="btn2" onclick="cambiaBoton(3)" style="display: none;" class="btn btn-danger"><b>≥</b></button>
                                                    <button type="button" id="btn3" onclick="cambiaBoton(4)" style="display: none;" class="btn btn-danger"><b><</b></button>
                                                    <button type="button" id="btn4" onclick="cambiaBoton(1)" style="display: none;" class="btn btn-danger"><b>≤</b></button>
                                                </div>
                                                <input type="text" id="termino2" class="form-control" onkeyup="validaCadena2(value)"  placeholder="Introducir desigualdad">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-primary" onclick="inciarFuncion()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
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
                                                    <div class="col-xs-6 text-right" id="areaResolucion1">

                                                    </div>
                                                    <div class="col-xs-1 text-center" id="areaResolucion2">

                                                    </div>
                                                    <div class="col-xs-5 text-left" id="areaResolucion3">

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
                                                    <div class="col-xs-3 text-center">
                                                        <button type="button" onclick="operaciones(1)" class="btn btn-info">&nbsp; + &nbsp;</button>
                                                    </div>
                                                    <div class="col-xs-3 text-center">
                                                        <button type="button" onclick="operaciones(2)" class="btn btn-info">&nbsp; - &nbsp;</button>
                                                    </div>
                                                    <div class="col-xs-3 text-center">
                                                        <button type="button" onclick="operaciones(3)" class="btn btn-info">&nbsp; * &nbsp;</button>
                                                    </div>
                                                    <div class="col-xs-3 text-center">
                                                        <button type="button" onclick="operaciones(4)" class="btn btn-info">&nbsp; / &nbsp;</button>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-3 text-center">
                                                        <button type="button" onclick="moverTermimno(false)" class="btn btn-info"><font face='symbol'>&#222</font></button>
                                                    </div>
                                                    <div class="col-xs-3 text-center">
                                                        <button type="button" onclick="moverTermimno(true)" class="btn btn-info"><font face='symbol'>&#220</font></button>
                                                    </div>
                                                    <div class="col-xs-3 text-center">

                                                    </div>
                                                    <div class="col-xs-3 text-center">

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
    /*
    * Inicia el proceso de resolución de l ejercicio
    * función puente para unir los procesos con las funciones encargadas de realizar funciones especificas
    * */
    function inciarFuncion() {
        limpiaDesarrollo();
        if(validaCadena1($('#termino1').val())){
            if(validaCadena2($('#termino2').val())){
                pasaLabel($('#termino1').val(),$('#termino2').val());//Pasa los datos a los label para mostrarlos
            }else{
                alert('error');
            }
        }else{
            alert('error');
        }
    }

    /**
     * Inserta en el label donde se hara el desarrollo del ejercicio
     */
    function pasaLabel(termino1,termino2) {
        divideTerminos(termino1,termino2);
        if(opBtn==1){
            $('#areaResolucion1').append('<label style="font-size: 20px">'+termino1+'</label><br>');
            $('#areaResolucion2').append('<label style="font-size: 20px">></label>');
            $('#areaResolucion3').append('<label style="font-size: 20px">'+termino2+'</label><br>');
        }else{
            if(opBtn==2){
                $('#areaResolucion1').append('<label style="font-size: 20px">'+termino1+'</label><br>');
                $('#areaResolucion2').append('<label style="font-size: 20px">≥</label>');
                $('#areaResolucion3').append('<label style="font-size: 20px">'+termino2+'</label><br>');
            }else{
                if(opBtn==3){
                    $('#areaResolucion1').append('<label style="font-size: 20px">'+termino1+'</label><br>');
                    $('#areaResolucion2').append('<label style="font-size: 20px"><</label>');
                    $('#areaResolucion3').append('<label style="font-size: 20px">'+termino2+'</label><br>');
                }else{
                    $('#areaResoliucion1').append('<label style="font-size: 20px">'+termino1+'</label><br>');
                    $('#areaResolucion2').append('<label style="font-size: 20px">≤</label>');
                    $('#areaResolucion3').append('<label style="font-size: 20px">'+termino2+'</label><br>');
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
    function divideTerminos(termino1,termino2){
        var funcion=termino1;
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
        funcion=termino2;
        inicio=0;
        for(var i=1;i<=funcion.length;i++){
            if(funcion.charAt(i)=='+' || funcion.charAt(i)=='-'){
                Terminos.push(funcion.substr(inicio,i-inicio));
                lado.push(false);
                inicio=i;
            }
            if(i==funcion.length){
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
        switch (op){
                    /*Suma de terminos*/
                case 1:{
                    if(valida(1)){
                        if(valida(4)){
                            console.warn('suma de terminos:',a+b);
                            reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(a+b),lado[$('#T1').val()-1],"");
                        }else{
                            e=Terminos[$('#T1').val()-1].split('x');
                            f=Terminos[$('#T2').val()-1].split('x');
                            reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(Number(e[0])+Number(f[0])),lado[$('#T1').val()-1],"x");
                        }
                    }
                }break;
                    /*Reta de terminos*/
                case 2:{
                    if(valida(1) && valida(4)){
                        console.warn('suma de terminos:',a-b);
                        reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(a-b),lado[$('#T1').val()-1],"");
                    }
                }break;
                    /*Multiplicacion de terminos*/
                case 3:{
                    if(valida(3)){
                        if(Terminos[$('#T1').val()-1].indexOf('x')!=-1){
                            var coeficiente=Terminos[$('#T1').val()-1].split('x');
                            console.warn('multi de terminos:',coeficiente);
                            reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(Number(coeficiente[0])*b)*-1,false);
                        }else{
                            if(Terminos[$('#T2').val()-1]){
                                var coeficiente=Terminos[$('#T2').val()-1].split('x');
                                reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(a*Number(coeficiente[0]))*-1,false);
                            }else{

                            }
                        }
                    }
                }break;
                    /*Division de terminos*/
                case 4:{
                    if(valida(3)){
                        if(Terminos[$('#T1').val()-1].indexOf('x')!=-1){
                            var coeficiente=Terminos[$('#T1').val()-1].split('x');
                            //console.warn('multi de terminos:',coeficiente);
                            reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(b/Number(coeficiente[0])),false,"");
                        }else{
                            if(Terminos[$('#T2').val()-1]){
                                var coeficiente=Terminos[$('#T2').val()-1].split('x');
                                reduceTerminos($('#T1').val()-1,$('#T2').val()-1,(a/Number(coeficiente[0])),false,"");
                            }else{

                            }
                        }
                    }
                }break;
            }
    }


    function creaCadena() {
        var a="";
        var b="";
        Terminos.forEach(function (item,index) {
            if(lado[index]==true){
                a=a+item;
            }else{
                b=b+item;
            }
        });
        pasaLabel(a,b);
    }

    function moverTermimno(miembro){
        cambiaLado(miembro,$('#T1').val()-1);
    }

    /**
     * Cambia de lado el término seleccionado
     * @param miembro boolean que indica al lado para el cual se movera
     */
    function cambiaLado(miembro,index){
        //debugger;
        var c=0;
        var a=[];
        var d=[];
        var b=0;
        c=index;
        if(valida(2,miembro)){
            if(miembro==false){
                for(var i=0;i<lado.length;i++){
                    if(i!=c){
                        a.push(Terminos[i]);
                        d.push(lado[i]);
                    }else{
                        b=i;
                    }
                }

                if(Terminos[b].indexOf('x')!=-1){
                    var co=Terminos[b].split('x');
                    a.push(signoMas(Number(co[0])*(-1))+"x");
                }else{
                    a.push(signoMas(Number(Terminos[b])*(-1)));
                }
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
                if(Terminos[c].indexOf('x')!=-1){
                    var co=Terminos[c].split('x');
                    a[b]=signoMas(Number(co[0])*(-1))+"x";
                }else{
                    a[b]=signoMas(Number(Terminos[c])*(-1));
                }
                lado=d;
                Terminos=a;
            }
        }
        creaCadena();
        console.warn('terminos:',Terminos);
        console.warn('lados:',lado);

    }

    /**
     * Se encarga de validar los datos a ingresar al ejercicio
     * @param op que opcion de validacion
     * @returns {boolean} true si esta correcto de lo contrario false
     */
    function valida(op,mover){
        switch (op){
            /*Valida las operaciones de terminos de lados diferentes*/
            case 1:{
                if((lado[$('#T1').val()-1]==true && lado[$('#T2').val()-1]==true) || (lado[$('#T1').val()-1]==false && lado[$('#T2').val()-1]==false)){
                    //alert('Si es posible operar');
                    return true;
                }else{
                    //alert('No es posible operar');
                    return false;
                }
            }break;
            /*Valida si el término a mover está en el lado contrario, para ser posible moverlo*/
            case 2:{
                if((lado[$('#T1').val()-1])==mover){
                    return false;
                }else{
                    return true;
                }
            }break;
            /*Evalua si aun quedan terminos independientes por operar*/
            case 3:{
                var cont1=0;
                var cont2=0
                Terminos.forEach(function (item) {
                    if(item.indexOf('x')!=-1){
                        cont1++;
                    }else{
                        cont2++;
                    }
                });
                if(cont1==1 && cont2==1){
                    return true;
                }else{
                    return false;
                }
            }break;
            /*Valida que no se operen terminos no semejantes*/
            case 4:{
                if(Terminos[$('#T1').val()-1].indexOf('x')!=-1 && Terminos[$('#T2').val()-1].indexOf('x')!=-1){
                    return false;
                }else{
                    return true;
                }
            }break;
            /*valida que el termino a mover sea o no el que tiene x */
            case 5:{
                if(Terminos[$('#T1').val()-1].indexOf('x')!=-1){
                    return false;
                }else{
                    return true;
                }
            }break;
        }
    }

    /**
     * Reduce los termino cuando se operan entre si.
     * @param Termino1 primer término a eliminar del areglo Terminos
     * @param Termino2 Segundo término a eliminar del areglo Terminos
     * @param valor Valor de la operacion entre los dos términos
     * @param miembro Miembro donde quedará el nuevo término.
     */
    function reduceTerminos(Termino1,Termino2, valor,miembro,x){
        var a=[];
        var b=[];
        var c=[];
        var d=[];
        var e=true;
        Terminos.forEach(function (item,index) { //Buscamos los términos a eliminar
            if(index!=Termino1 && index!=Termino2){//inserta todos aquellos que sean diferentes
                a.push(item);
                b.push(lado[index]);//areglo que controla los lados miembros donde estan los terminos
            }
        });
        //Luego le damos el nuevo arreglo a términos dejndo de lado los que eliminaríamos y el nuevo valor lo insertamos
        //al final del arreglo.
        if(valor!=0){
            if(miembro){
                b.forEach(function (item, index) {
                    if(item==true){
                        c.push(a[index]);
                        d.push(item);
                    }else{
                        if(e){
                            c.push(signoMas(valor)+""+x);
                            d.push(miembro);
                            e=false;
                        }
                        c.push(a[index]);
                        d.push(item);
                    }
                });
                Terminos=c;
                lado=d;
            }else{
                a.push(signoMas(valor)+""+x);
                b.push(miembro);
                Terminos=a;
                lado=b;
            }
        }else{
            Terminos=a;
            lado=b;
        }
        // miembro positivo
        console.warn('Terminos',Terminos);
        console.warn('Lados',lado);
        creaCadena();
    }

    /**
     * Retorna una cadena con signo positivo
     * @param valor dato a evaluar
     * @returns {*}
     */
    function signoMas(valor){
        //debugger;
        if(Math.sign(Number(valor))==1){
            return "+"+valor;
        }else{
            return ""+valor;
        }
    }

    /**
     * Valida que solo se ingrese numeros y la letra x
     * @param palabra palabra a evaluar
     * @returns {boolean} true si es correcto y false de lo contrario
     */
    function validaCadena1(palabra){
        var clave=/^[x0-9+-]+$/;
        var a=true;
        for(var i=0;i<palabra.length;i++){
            if(clave.test(palabra.charAt(i))){
                a=true;
            }else{
                a=false;
                $('#termino1').val(palabra.substr(0,i));
                return a;
            }
        }
        return a;
    }

    /**
     * Limpia los label de la resolucion del ejercicio
     * */
    function limpiaDesarrollo(){
        $('#areaResolucion1').html('');
        $('#areaResolucion2').html('');
        $('#areaResolucion3').html('');
    }

    /**
     * Valida que solo se ingrese numeros y la letra x
     * @param palabra palabra a evaluar
     * @returns {boolean} true si es correcto y false de lo contrario
     */
    function validaCadena2(palabra){
        var clave=/^[x0-9+-]+$/;
        var a=true;
        for(var i=0;i<palabra.length;i++){
            if(clave.test(palabra.charAt(i))){
                a=true;
            }else{
                a=false;
                $('#termino2').val(palabra.substr(0,i));
                return a;
            }
        }
        return a;
    }
</script>