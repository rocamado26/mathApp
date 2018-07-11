<!-- Temario unidad 1 primer año "Utilicemos las funciones algebraicas" -->
<div class="col-lg-12 wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="file-box">
                <div class="file">
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen del tema -->
                            <img src="{{asset('img/iconos/funciones/polinomiales/propiedades.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            f(x) = ax<sup>n</sup> + b<br/>
                            <small>...</small>
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
                                <img src="{{asset('img/iconos/funciones/polinomiales/constante.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                            </div>
                            <div class="file-name">
                                Constante
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
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen en blanco -->
                            <img src="{{asset('img/iconos/funciones/polinomiales/lineal.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Lineal
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
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen en blanco -->
                            <img src="{{asset('img/iconos/funciones/polinomiales/cuadratica.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Cuadátrica
                            <br/>
                            <small><br>&nbsp;</small>
                            <span class="label label-danger pull-right">Primer Año</span>
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
                            <img src="{{asset('img/iconos/funciones/polinomiales/cubica.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Cúbica
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
                    <a onclick="CargaOpciones('/FuncionRaiz','','Polinomiales - Raíz Cuadrada')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen en blanco -->
                            <img src="{{asset('img/iconos/funciones/polinomiales/raiz.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Raiz cuadrada
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
                    <a href="#">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen en blanco -->
                            <img src="{{asset('img/iconos/funciones/polinomiales/proporcional.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Proporcionalidad directa e indirecta
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
                    <a onclick="CargaOpciones('/FuncionInversa','','Polinomiales - Funciones Inversa')">
                        <span class="corner"></span>
                        <div class="icon">
                        <!-- Imagen en blanco -->
                            <img src="{{asset('img/iconos/funciones/polinomiales/inversa.png')}}" style="height: 85px; width:120px; overflow: hidden; padding: 5px 10px;  text-align: center;"/>
                        </div>
                        <div class="file-name">
                            Método para encontrar la funcion inversa
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