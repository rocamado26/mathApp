<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/identidades_trigonometricas','','Desarrollo')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/trigonometria/identidades/identidades-basicas.png')}}" style="height: 90px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Identidades básicas<br/>
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