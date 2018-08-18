$("#btn-registro").click(function(){
    var paramteros = "nombre="+$("#nombre").val()+"&"
                    +"apellido="+$("#apellido").val()+"&"
                    +"email="+$("#email").val()+"&"
                    +"password="+$("#password-registro").val()+"&"
                    +"fecha="+$("#date").val();
    $.ajax({
        method: "POST",
        data: paramteros,
        dataType: "json",
        url: "guardarUsuario.php",
        success: function(respuesta){
            console.log(respuesta);
        },
        onerror: function(error){
            console.log(error);
        }
        
    });
});