<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/conicas/circunferencia.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            La circunferencia<br/>
                            <small>Centro, Radio y Diámetro</small>
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
        </div>
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/conicas/parabola.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            La parábola<br/>
                            <small>Foco, vértice, diretriz, parámetro. <br> Ecuación ordinária <br>(x - h)<sup>2</sup> = 4p (y - k)</small>
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
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/geometria/conicas/general2.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Ecuación general<br/>
                            <small>x<sup>2</sup> + Dx + Ey + F = 0</small>
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
                            <img src="{{asset('img/iconos/geometria/conicas/elipse.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            La Elipse<br/>
                            <small>Foco, vértice, excentricidad <br>((x-b)<sup>2</sup>/(a<sup>2</sup>)) + ((y-k)<sup>2</sup>/(b<sup>2</sup>)) = 1</small>
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
                            <img src="{{asset('img/iconos/geometria/conicas/hiperbola.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            La hipérbola<br/>
                            <small>Focos, vértices, ejes y excentricidad. <br>((x-b)<sup>2</sup>/(a<sup>2</sup>)) + ((y-k)<sup>2</sup>/(b<sup>2</sup>)) = 1</small>
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