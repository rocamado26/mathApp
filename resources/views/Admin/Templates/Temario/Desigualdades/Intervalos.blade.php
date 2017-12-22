<!-- Temario unidad 1 primer año "Utilicemos las razones aritméticas" -->
<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/intervalosDes','','Desarrollo')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/desigualdades/intervalos/intervalos.png')}}" style="height: 90px; width:150px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Tipos de intervalos<br/>
                            <small><br>&nbsp;</small>
                            <span class="label label-danger pull-right">Primer Año</span>
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
                        <!-- Debe de ser clase image si se pone una imagen "<div class="image">" y si es un icono debe ser icon <div class="icon"> -->
                            <div class="icon">
                            <!-- Imagen <img alt="image" class="img-responsive" src="img/p1.jpg"> -->
                                <img src="{{asset('img/iconos/desigualdades/intervalos/line-graph.png')}}" style="height: 90px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Gráficas
                                <br/>
                                <small><br>&nbsp;</small>
                            <span class="label label-danger pull-right">Primer Año</span>
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
                        <!-- Imagen en blanco -->
                            <img src="{{asset('img/iconos/desigualdades/intervalos/operaciones-intervalos.png')}}" style="height: 90px; width:150px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Operaciones con intervalos
                            <br/>
                            <small><br>&nbsp;</small>
                            <span class="label label-danger pull-right">Primer Año</span>
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