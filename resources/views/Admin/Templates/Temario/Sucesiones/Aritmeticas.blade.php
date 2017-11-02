<!--  -->
<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/sucesionesCaracteristicas','','Sucesiones Aritméticas - Caracteristicas')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/sucesiones/aritmeticas/caracteristicas.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Características<br/>
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
                    <a onclick="CargaOpciones('/sucesionesTerminoGeneral','','Sucesiones Aritméticas- Término General')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/sucesiones/aritmeticas/general.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Término general<br/>
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
                    <a onclick="CargaOpciones('/sucesionesMediosAritmeticos','','Sucesiones Aritméticas- Medios Aritméticos')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/sucesiones/aritmeticas/aritmeticos.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Medios aritméticos<br/>
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
                    <a onclick="CargaOpciones('/sumaTerminosAritmeticos','','Sucesiones Aritméticas- Suma de Términos')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/sucesiones/aritmeticas/suma.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Suma de términos<br/>
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
            animationHover(this, 'swing');
        });
    });
</script>