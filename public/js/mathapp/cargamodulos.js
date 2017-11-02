/**
 * Carga todos los temas del menú
 * @param text url [Dirección url del archivo solicitado]
 * @param text op1 [Primera opción seleccinada del menú]
 * @param text op2 [Segunda opción seleccinada del menú]
 */
function CargaOpciones(url,op1,op2){
    $.ajax({   
        type: "get",
        url:url,
        data:{},
        success: function(datos){       
            $('#contenido').html(datos);
            ActualizarBarraNavegacion(op1,op2);
        }
    });
}
/**
 * Barra de navegación.
 * @param {text} opcion1 [primera opción]
 * @param {text} opcion2 [segunda opción]
 */
function ActualizarBarraNavegacion(opcion1,opcion2){
    $('#BarraNavegacion1').html('<a href="/">'+opcion1+'</a>');
    $('#BarraNavegacion2').html('<strong>'+opcion2+'</strong>');
}