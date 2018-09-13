

function todos(){
    document.getElementById("todos").style.backgroundColor = "rgba(4, 124, 204, 0.979)";
    document.getElementById("todos").style.color = "white";

    document.getElementById("evaluados").style.backgroundColor = "white";
    document.getElementById("evaluados").style.color = "rgba(4, 124, 204, 0.979)";    

    // DESACTIVAR    
    $('#datos').hide();
    $('#todosALumnos').show();
}

function evaluados(){
    document.getElementById("todos").style.backgroundColor = "white";
    document.getElementById("todos").style.color = "rgba(4, 124, 204, 0.979)";

    document.getElementById("evaluados").style.backgroundColor = "rgba(4, 124, 204, 0.979)";
    document.getElementById("evaluados").style.color = "white";    

    // DESACTIVAR    
    $('#datos').show();
    $('#todosALumnos').hide();
}