<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/arearazones','','Desarrollo')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/trigonometria/razones/open-book.png')}}" style="height: 95px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Razones<br/>
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
                    <a onclick="CargaOpciones('/arearazonesangulos','','Desarrollo')">
                        <span class="corner"></span>
                            <div class="icon">
                                <img src="{{asset('img/iconos/trigonometria/razones/angle.png')}}" style="height: 90px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Razones para ángulos.
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
                    <a onclick="CargaOpciones('/AnguloElevacion','','Desarrollo')">
                        <span class="corner"></span>
                        <div class="icon">
                             <img src="{{asset('img/iconos/trigonometria/razones/elevacion-angulo.png')}}" style="height: 90px; width:150px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Ángulos de elevación y presión
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