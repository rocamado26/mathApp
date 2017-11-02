<!-- Temario unidad 3 segundo año "Analicemos la función exponelcial y logarítmica" -->
<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/funciones/logaritmicas/logaritmo.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Logaritmos<br/>
                            <small> y = log <sub>a</sub> x </small>
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
                                <img src="{{asset('img/iconos/funciones/logaritmicas/propiedades.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Propiedades
                                <br/>
                                <small>Log<sub>a</sub> (M.N) = log<sub>a</sub> M + log<sub>a</sub> N <br>log<sub>a</sub> (M/N) = log<sub>a</sub> M - log<sub>a</sub> N <br>log<sub>a</sub> (M) <sup>n</sup>= n . log<sub>a</sub> M</small>
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
                            <img src="{{asset('img/iconos/funciones/logaritmicas/funcion.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Función logarítmica
                            <br/>
                            <small> y = log <sub>a</sub> x,y </small>
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
                            <img src="{{asset('img/iconos/funciones/logaritmicas/graficos.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Dominio, recorrido y gráfica
                            <br/>
                            <small> ...</small>
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
                        <!-- Imagen en blanco -->
                            <img src="{{asset('img/iconos/funciones/logaritmicas/caracteristicas.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Características logarítmicas
                            <br/>
                            <small>Pasa por (1,0) <br>Si a > 1 Crece <br> Si 0 < a < 1 Decrese</small>
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