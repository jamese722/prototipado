<?php
session_start();

class login {
    public function inicioSesion(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (empty($_POST['correo']) || empty($_POST['id_user'])) {

                return false;
            }
            $correo = $_POST['contrasena_ingreso'];
        
            $_SESSION['id_user'] = '1';
            $_SESSION['correo'] = $correo;

            

            exit;
        }
    }

    public function cerrarSession(){
        // Destruye la sesión
        session_destroy();
        // Redirige al usuario a la página de inicio de sesión o a otra página deseada
        header('Location: login.php');
        exit();
    }
}

// Ejemplo de cómo llamar a la función cerrarSession()
if (isset($_GET['logout'])) {
    $login = new login();
    $login->cerrarSession();
}