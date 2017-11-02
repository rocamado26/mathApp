<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/analiticaDistanciaRecta','','Geometría Analítica - Distancia entre dos puntos')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/analitica/puntos.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Distancia entre dos puntos<br/>
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
                    <a onclick="CargaOpciones('/analiticaPuntoMedio','','Geometría Analítica - Punto Medio')">
                        <span class="corner"></span>
                            <div class="icon">
                                <img src="{{asset('img/iconos/geometria/analitica/corte.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Punto de división de un segmento de recta.
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