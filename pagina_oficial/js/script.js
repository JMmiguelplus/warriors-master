$(document).ready(function(){

    $('#enviar').click(function(){

        var errores = '';

        // Validado Nombre ==============================
        if( $('#nombre').val() == '' ){
            errores += '<p>Escriba un nombre</p>';
            $('#nombre').css("border-bottom-color", "#F14B4B")
        } else{
            $('#nombre').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Correo ==============================
        if( $('#email').val() == '' ){
            errores += '<p>Ingrese un correo</p>';
            $('#email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#email').css("border-bottom-color", "#d1d1d1")
        }

        // Validado rfc ==============================
        if( $('#rfc').val() == '' ){
            errores += '<p>Escriba un RFC</p>';
            $('#rfc').css("border-bottom-color", "#F14B4B")
        } else{
            $('#rfc').css("border-bottom-color", "#d1d1d1")
        }

        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
