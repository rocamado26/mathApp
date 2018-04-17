<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/TriangulosTeoremaSeno','','Triángulos - Teorema del Seno')">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/triangulos/seno.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Teorema del seno<br/>
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
                    <a onclick="CargaOpciones('/TriangulosTeoremaCoseno','','Triángulos - Teorema del Coseno')">
                        <span class="corner"></span>
                            <div class="icon">
                                <img src="{{asset('img/iconos/triangulos/cos.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Teorema del coseno
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