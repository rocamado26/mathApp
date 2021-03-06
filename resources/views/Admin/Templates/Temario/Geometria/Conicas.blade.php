<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/radioCirculo','','Geometría - Ecuación Canónica y Ecuación Ordinaria')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/conicas/circunferencia.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            La circunferencia
                            <br/>
                            <small><br>&nbsp;</small>
                            <span class="label label-info pull-right">Segundo Año</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--<div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/conicas/ordinaria.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Ecuación ordinaria<br/>
                            <small>(x - h)<sup>2</sup> + (y + k)<sup>2</sup> = r<sup>2</sup></small>
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
                            <img src="{{asset('img/iconos/geometria/conicas/general.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Ecuación general<br/>
                            <small>x<sup>2</sup> + y<sup>2</sup> + Dx + Ey + F = 0</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>-->
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/parabola','','Geometría - Parabola')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/conicas/parabola.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            La parábola<br/>
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
                    <a onclick="CargaOpciones('/elipse','','Geometría - Elipse')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/conicas/elipse.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            La Elipse<br/>
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
                    <a onclick="CargaOpciones('/hiperbola','','Geometría - Hipérbola')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/conicas/hiperbola.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            La hipérbola<br/>
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