<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/circulo','','Desarrollo')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/trigonometria/funciones/Círculo-trigonometrico.png')}}" style="height: 90px; width:110px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Circulo trigonométrico unitario<br/>
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
                    <a onclick="CargaOpciones('/graficas','','Desarrollo')">
                        <span class="corner"></span>
                            <div class="icon">
                                <img src="{{asset('img/iconos/trigonometria/funciones/dominio-recorrido-periodo.png')}}" style="height: 90px; width:170px; overflow: hidden; padding: 2px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Dominio recorrido y periodo 
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