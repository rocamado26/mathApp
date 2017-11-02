<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/puntoPendiente','','Geometría - Punto Pendiente')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/recta/recta.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Punto Pendiente
                            <br/>
                            <small><br>&nbsp;</small>
                            <span class="label label-info pull-right">Segundo Año</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/pendienteIntercepto','','Geometría - Pendiente Intercepto')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/pendiente/paralelismo.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Pendiente Intercepto
                            <br/>
                            <small><br>&nbsp;</small>
                            <span class="label label-info pull-right">Segundo Año</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/ecuacionLineaRecta','','Geometría - Ecuación General de la Linea Recta')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/pendiente/2rectas.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Ecuación General de la Linea Recta
                            <br/><br>&nbsp;</small>
                                <span class="label label-info pull-right">Segundo Año</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/distanciaPuntoRecta','','Geometría - Distancia de un Punto a una Recta')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/pendiente/paralelismo.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Distancia de un Punto a una Recta
                            <br/>
                            <small><br>&nbsp;</small>
                            <span class="label label-info pull-right">Segundo Año</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('.file-box').each(function() {
        animationHover(this, 'tada');
    });
});
</script>