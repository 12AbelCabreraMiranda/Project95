
function selec_vocal(){

    if( $('#id_estudiante').val() ){
        $('.selec_boton').show();
    }else if( !$('#id_estudiante').val()){
        $('.selec_boton').hide();

    }

}