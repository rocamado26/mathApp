<!--  -->
<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/funciones/algebraicas/open-book.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Características<br/>
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
            animationHover(this, 'swing');
        });
    });
</script>