<!--  -->
<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/sucesionesGeoCaracteristicas','','Sucesiones Geométricas- Caracteristicas')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/sucesiones/geometricas/caracteristicas.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Características y Término General <br/>
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
                    <a onclick="CargaOpciones('/sucesionesGeoMediosAritmeticos','','Sucesiones Geométricas- Medios Aritméticos')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/sucesiones/geometricas/geometricas.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Medidas geométricas<br/>
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
                    <a onclick="CargaOpciones('/sumaGeoTerminosAritmeticos','','Sucesiones Geométricas- Suma de Términos')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/sucesiones/geometricas/suma.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
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