<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/pendienteRecta','','Geometría - Pendiente de una Recta')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/pendiente/pendiente.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Pendiente de una recta<br/>
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
                    <a onclick="CargaOpciones('/pendienteParalelismoYPerpendicularidad','','Geometría - Paralelismo y Perpendicularidad entre dos rectas')">
                        <span class="corner"></span>
                            <div class="icon">
                                <img src="{{asset('img/iconos/geometria/pendiente/paralelismo.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Paralelismo y perpendicularidad entre dos rectas
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
                    <a href="#">
                        <span class="corner"></span>
                            <div class="icon">
                                <img src="{{asset('img/iconos/geometria/pendiente/2rectas.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Ángulo entre dos restas
                                <br/>
                                <small>tan x = (m<sub>1</sub> - m<sub>2</sub>) / (1 + m<sub>1</sub> . m<sub>2</sub>)</small>
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