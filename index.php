<?php
require 'log.php';
?>

<div class="contenedor d-flex">
    <div class="container">
        <img src="publico/img/pixelcut-export (9).jpeg" alt="">
    </div>
    <div class="container align-content-center">
        <h3>Inicio de session</h3>
        <h5>Sisitema de gestion y control de ventas</h5>
        <div class="container">
            
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="Correo_ingrese" name="email_ingreso" placeholder="name@example.com">
                <label for="Correo_ingrese">Correo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="contrasena_ingreso" name="contrasena_ingreso" placeholder="Password">
                <label for="contrasena_ingreso">Password</labe>
            </div>
            
            <div class="d-flex gap-3">
                <div class="form-floating mb-3">
                    <button onclick="inicioSession()" type="button" class="btn btn-warning"> Iniciar</button>
                </div>
                <div class="d-grid gap-2 mb-3">
                    <button type="button" name="" id="" class="btn btn-danger">
                        Canselar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
