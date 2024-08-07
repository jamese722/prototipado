
function inicioSession(){
    var correo = $('#Correo_ingrese').val();
    var contraseña =  $('#contrasena_ingreso').val();
    if(correo.length > 6 && contraseña.length > 6){
        localStorage.setItem('correo', correo)
        console.log('correo guardado');
        $.ajax({
            url:'/prototipado/conf/login.php',
            type: 'POST',
            data:{'correo': correo, 'id_user':contraseña},
            success:function(response){
                response
                //window.location.href = "http://localhost:8000/prototipado/Views/ventas/OrdenVenta.php";
            }
        });
        
    } else{

    }
}    
