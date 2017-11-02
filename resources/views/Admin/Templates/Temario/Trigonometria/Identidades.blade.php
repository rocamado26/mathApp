<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                            <img src="{{asset('img/iconos/trigonometria/identidades/identidades-basicas.png')}}" style="height: 90px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Identidades básicas<br/>
                            <small>csc x = 1/sen x <br>sec x = 1/cos x <br>cot x = 1/tan x</small>
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
                                <img src="{{asset('img/iconos/trigonometria/identidades/identidades-cociente.png')}}" style="height: 90px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Identidades de cociente
                                <br/>
                                <small>tan x = sen x/ cos x <br>cot x = cos x/ sen x</small>
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
                                <img src="{{asset('img/iconos/trigonometria/identidades/identidades-pitagoras.png')}}" style="height: 90px; width:150px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Identidades pitagóricas
                                <br/>
                                <small>1 = sen<sup>2</sup> x + cos<sup>2</sup> x = 1 <br>csc<sup>2</sup> x + cot<sup>2</sup> x = 1</small>
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
                                <img src="{{asset('img/iconos/trigonometria/identidades/identidades-varias.png')}}" style="height: 90px; width:150px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Otras Identidades
                                <br/>
                                <small>sen (A-B)= senA cosB - cosA senB <br>cos (A-B)= cosA cosB - senA senB <br>tan(A-B)=(tanA-tanB)/(1+tanA.tanB)</small>
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