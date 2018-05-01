<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
	Llamada a la vista main colocando "/" en la barra de navegación.
*/
Route::get('/', function () {
    return view('welcome');
});
/*
____________________________________________________________________________________________
	Llamada a la vista Razones que contiene los temarios de razones trigonométricas.
*/
Route::get('/razones', function () {
    return view('Admin.Templates.Temario.Trigonometria.Razones');
});
/*
	Llamada a la vista Funciones que contiene los temarios de funciones trigonométricas.
*/
Route::get('/funciones', function () {
    return view('Admin.Templates.Temario.Trigonometria.Funciones');
});
/*
	Llamada a la vista Identidades que contiene los temarios de lidentidades trigonométricas.
*/
Route::get('/identidades', function () {
    return view('Admin.Templates.Temario.Trigonometria.Identidades');
});
/*
	Llamada a la vista Ecuaciones que contiene los temarios de ecuaciones trigonométricas.
*/
Route::get('/ecuaciones', function () {
    return view('Admin.Templates.Temario.Trigonometria.Ecuaciones');
});
/*
___________________________________________________________________________________________
	Llamada a la vista Intervalos que contiene los temarios de intervalos.
*/
Route::get('/intervalos', function () {
    return view('Admin.Templates.Temario.Desigualdades.Intervalos');
});
/*
	Llamada a la vista Desigualdades que contiene los temarios de desigualdades.
*/
Route::get('/desigualdades', function () {
    return view('Admin.Templates.Temario.Desigualdades.Desigualdades');
});
/*
_________________________________________________________________________________________________
	Llamada a la vista Algebraicas que contiene los temarios de funciones algebraicas.
*/
Route::get('/algebraicas', function () {
    return view('Admin.Templates.Temario.Funciones.Algebraicas');
});
/*
	Llamada a la vista Polinomiales que contiene los temarios de funciones polinomiales.
*/
Route::get('/polinomiales', function () {
    return view('Admin.Templates.Temario.Funciones.Polinomiales');
});
/*
	Llamada a la vista Exponenciales que contiene los temarios de funciones exponenciales.
*/
Route::get('/exponenciales', function () {
    return view('Admin.Templates.Temario.Funciones.Exponenciales');
});
/*
	Llamada a la vista Logaritmicas que contiene los temarios de funciones logarítmicas.
*/
Route::get('/logaritmicas', function () {
    return view('Admin.Templates.Temario.Funciones.Logaritmicas');
});
/*
___________________________________________________________________________________________________________
	Llamada a la vista Aritmeticas que contiene los temarios de sucesiones aritméticas.
*/
Route::get('/aritmeticas', function () {
    return view('Admin.Templates.Temario.Sucesiones.Aritmeticas');
});
/*
	Llamada a la vista Logaritmicas que contiene los temarios de sucesiones Geométricas.
*/
Route::get('/geometricas', function () {
    return view('Admin.Templates.Temario.Sucesiones.Geometricas');
});
/*
___________________________________________________________________________________________________________
	Llamada a la vista TecnicasConteo que contiene los temarios de las tecnicas de conteo.
*/
Route::get('/tecnicasconteo', function () {
    return view('Admin.Templates.Temario.Conteo.TecnicasConteo');
});
/*
___________________________________________________________________________________________________________
	Llamada a la vista Oblicuangulos que contiene los temarios de los triángulos.
*/
Route::get('/oblicuangulos', function () {
    return view('Admin.Templates.Temario.Triangulos.Oblicuangulos');
});
/*
___________________________________________________________________________________________________________
	Llamada a la vista Analitica que contiene los temarios de geometría.
*/
Route::get('/analitica', function () {
    return view('Admin.Templates.Temario.Geometria.Analitica');
});
/*
	Llamada a la vista Logaritmicas que contiene los temarios de sucesiones Geométricas.
*/
Route::get('/pendiente', function () {
    return view('Admin.Templates.Temario.Geometria.Pendiente');
});
/*
	Llamada a la vista Logaritmicas que contiene los temarios de sucesiones Geométricas.
*/
Route::get('/recta', function () {
    return view('Admin.Templates.Temario.Geometria.Recta');
});
/*
	Llamada a la vista Intersecciones que contiene los temarios .
*/
Route::get('/intersecciones', function () {
    return view('Admin.Templates.Temario.Geometria.Intersecciones');
});
/*
	Llamada a la vista Conicas que contiene los temarios .
*/
Route::get('/conicas', function () {
    return view('Admin.Templates.Temario.Geometria.Conicas');
});
/*
________________________________________________________________________________________________
	Llamada a la vista AreaDesarrollo que contiene el área de desarrollo de ejercicios
*/
Route::get('/arearazonesangulos', function () {
    return view('Admin.Templates.Desarrollo.Trigonometria.AreaRazonesAngulos');
});
/*
	Llamada al area de desarrollo de para razones trigonométricas.
*/
Route::get('/arearazones', function () {
    return view('Admin.Templates.Desarrollo.Trigonometria.AreaRazones');
});
///////////////////////////
//SUCESIONES ARITMETICAS//
/////////////////////////
/*
	Llamada al area de desarrollo para Sucesiones aritmeticas, caracteristicas
*/
Route::get('/sucesionesCaracteristicas', function () {
    return view('Admin.Templates.Desarrollo.Sucesiones.Aritmeticas.sucecaracteristicas');
});
/*
	Llamada al area de desarrollo para Sucesiones aritmeticas, terminoGeneral
*/
Route::get('/sucesionesTerminoGeneral', function () {
    return view('Admin.Templates.Desarrollo.Sucesiones.Aritmeticas.suceterminogeneral');
});
/*
	Llamada al area de desarrollo para Sucesiones aritmeticas, Medios Aritmeticos
*/
Route::get('/sucesionesMediosAritmeticos', function () {
    return view('Admin.Templates.Desarrollo.Sucesiones.Aritmeticas.mediosaritmeticos');
});
/*
	Llamada al area de desarrollo para Sucesiones aritmeticas, Suma de Términos
*/
Route::get('/sumaTerminosAritmeticos', function () {
    return view('Admin.Templates.Desarrollo.Sucesiones.Aritmeticas.sumaterminos');
});
///////////////////////////
//SUCESIONES GEOMETRICAS//
/////////////////////////
/*
	Llamada al area de desarrollo para Sucesiones aritmeticas, caracteristicas
*/
Route::get('/sucesionesGeoCaracteristicas', function () {
    return view('Admin.Templates.Desarrollo.Sucesiones.Geometricas.sucecaracteristicas');
});
/*
	Llamada al area de desarrollo para Sucesiones aritmeticas, Medios Aritmeticos
*/
Route::get('/sucesionesGeoMediosAritmeticos', function () {
    return view('Admin.Templates.Desarrollo.Sucesiones.Geometricas.mediosaritmeticos');
});
/*
	Llamada al area de desarrollo para Sucesiones aritmeticas, Suma de Términos
*/
Route::get('/sumaGeoTerminosAritmeticos', function () {
    return view('Admin.Templates.Desarrollo.Sucesiones.Geometricas.sumaterminos');
});
////////////////////////////////
/////GEOMETRIA ANALITICA///////
//////////////////////////////
/*
	Llamada al area de desarrollo para geometría analítica, distancia entre puntos
*/
Route::get('/analiticaDistanciaRecta', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Analitica.distanciaentrepuntos');
});
/*
	Llamada al area de desarrollo para Geometría analítica, punto medio
*/
Route::get('/analiticaPuntoMedio', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Analitica.puntomedio');
});
/*
	Llamada al area de desarrollo para Geometría analítica, pendiente
*/
Route::get('/pendienteRecta', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Pendiente.pendienterecta');
});
/*
	Llamada al area de desarrollo para Geometría analítica, pendiente
*/
Route::get('/pendienteParalelismoYPerpendicularidad', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Pendiente.rectasparayperpen');
});
//NUEVAS 02/10/2017
/*
	Llamada al area de desarrollo para Geometría analítica, pendiente
*/
Route::get('/puntoPendiente', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Recta.puntopendiente');
});
/*
	Llamada al area de desarrollo para Geometría analítica, pendiente
*/
Route::get('/pendienteIntercepto', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Recta.pendienteintercepto');
});
/*
	Llamada al area de desarrollo para Geometría analítica, pendiente
*/
Route::get('/ecuacionLineaRecta', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Recta.ecuacionlinearecta');
});
/*
	Llamada al area de desarrollo para Geometría analítica, pendiente
*/
Route::get('/distanciaPuntoRecta', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Recta.distanciapuntorecta');
});
/*
	Llamada al area de desarrollo para Geometría - conica, circulo, radio, circunferencia
*/
Route::get('/radioCirculo', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Conicas.circulogeneral');
});
/*
	Llamada al area de desarrollo para Geometría - parabola
*/
Route::get('/parabola', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Conicas.parabola');
});
/*
	Llamada al area de desarrollo para Geometría - parabola
*/
Route::get('/elipse', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Conicas.elipse');
});
/*
	Llamada al area de desarrollo para Geometría - parabola
*/
Route::get('/hiperbola', function () {
    return view('Admin.Templates.Desarrollo.Geometria.Conicas.hiperbola');
});
/////////////////////////////////
///FIN GEOMETRIA ANALITICA/////
//////////////////////////////
/*
	Llamada al area de desarrollo para ángulos de elevación
*/
Route::get('/AnguloElevacion', function () {
    return view('Admin.Templates.Desarrollo.Trigonometria.AreaAnguloElevacion');
});
/*
	Llamada al area de desarrollo para círculo trigonométrico
*/
Route::get('/circulo', function () {
    return view('Admin.Templates.Desarrollo.Trigonometria.circulo_trigonometrico');
});
/*
	Llamada al area de desarrollo para Gráfica de funciones.
*/
Route::get('/graficas', function () {
    return view('Admin.Templates.Desarrollo.Trigonometria.grafica_funciones');
});
/*
	Llamada al area de desarrollo para identidades.
*/
Route::get('/identidades_trigonometricas', function () {
    return view('Admin.Templates.Desarrollo.Trigonometria.identidades_trigonometricas');
});

/*
*	Llamada al area de desarrollo para intervalos.
*/
Route::get('/intervalosDes', function () {
    return view('Admin.Templates.Desarrollo.Desigualdades.Intervalos.intervalos');
});

/*
*	Llamada al area de desarrollo para intervalos.
*/
Route::get('/DesigualdadesDes', function () {
    return view('Admin.Templates.Desarrollo.Desigualdades.Desigualdades.Desigualdades');
});
////////////////////////////////
/////TRIANGULOS///////
//////////////////////////////
///
/*
*	Llamada al area de desarrollo para intervalos.
*/
Route::get('/TriangulosTeoremaSeno', function () {
    return view('Admin.Templates.Desarrollo.Triangulos.Oblicuangolos.TeoremaSeno');
});

/*
*	Llamada al area de desarrollo para intervalos.
*/
Route::get('/TriangulosTeoremaCoseno', function () {
    return view('Admin.Templates.Desarrollo.Triangulos.Oblicuangolos.TeoremaCoseno');
});
////////////////////////////////
/////LOGARITMOS///////
//////////////////////////////
///
/*
*	Llamada al area de desarrollo para intervalos.
*/
Route::get('/Logaritmos', function () {
    return view('Admin.Templates.Desarrollo.Funciones.Logaritmica.Logaritmos');
});


/*
*	Llamada al area de desarrollo para desigualdades cuadraticas.
*/
Route::get('/Desigualdadesq', function () {
    return view('Admin.Templates.Desarrollo.Desigualdades.Desigualdades.Desigualdadesq');
});