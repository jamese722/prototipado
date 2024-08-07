<?php 
include '../../log.php';
?>

<div class="contenedor mt-3">
    <div class="container d-flex gap-4">
        <div class="w-100">
            <h3>Mantenimiento de clientes</h3>
            <div class="container">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
                    <label for="Nombre">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="direccion" placeholder="Direccion">
                    <label for="Direccion">Direccion</labe>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Telefono" placeholder="Telefono">
                    <label for="Telefono">Telefono</labe>
                </div>
                <div class="pt-2 d-flex gap-2 text-center">
                    <div class="d-grid gap-2">
                        <a href="home.php" type="button" name="" id="" class="btn btn-warning">
                            Reguistrar
                        </a>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" name="" id="" class="btn btn-light">
                            Editar
                        </button>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" name="" id="" class="btn btn-danger">
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100">
            <h3>Datos de Clientes</h3>
            <div
                class="table-responsive rounded-2"
            >
                <table
                    class="table"
                >
                    <thead>
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Direccion </th>
                            <th scope="col">Telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                            <td>R1C3</td>
                        </tr>
                        <tr class="">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>