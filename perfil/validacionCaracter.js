function soloLetras(e){
    
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key).toLowerCase();
    letras = " abcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-38-46-164";
    //8:space; 37:flecha isquierda ; 38:flecha derecha ; 46:suprimir ; 164: ñ

    teclado_especial = false;
    
    for(var i in especiales){
        if(key==especiales[i]){
            teclado_especial=true;break;
        }
    }
    
    if(letras.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }

}