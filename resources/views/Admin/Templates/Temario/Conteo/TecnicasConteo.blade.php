<!--  -->
<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/Conteo','','Desarrollo')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/conteo/factorial.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Factorial de un número<br/>
                            <small>Notación factorial<br/> n! = n.(n-1).(n-2)... 2.1 <br/> Propiedades especiales<br/> 0! = 1</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/Permutacion','','Desarrollo')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/conteo/permutacion.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Permutaciones<br/>
                            <small>Tomando todos los elementos<br/>nPr = (n!) / (n.r)!</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a onclick="CargaOpciones('/Combinacion','','Desarrollo')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/conteo/combinacion.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Combinaciones<br/>
                            <small>nCr = (n!) / (r! (n-r)! )</small>
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