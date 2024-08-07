<?php 
include '../../log.php';
?>

<div class="container pt-4 d-flex">
    <div class="container">
        <div class="d-flex gap-1">
            <button type="button" id="" class="btn btn-primary">Nuevo</button>
            <button type="button" id="" class="btn btn-secondary">Reguistro</button>
            <button type="button" id="" class="btn btn-success">Editar</button>
            <button type="button" id="" class="btn btn-danger">Eliminar</button>
            <button type="button" id="" class="btn btn-warning">Buscar</button>
        </div>
        <div>
            <div>
                <h3>Datos del Cliente</h3>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombre" placeholder="Nombre" disabled>
                    <label for="Nombre">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Direccion" placeholder="Direccion" disabled>
                    <label for="Direccion">Direccion</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Telefono" placeholder="Telefono" disabled>
                    <label for="Telefono">Telefono</label>
                </div>
            </div>
            <div>
                <h3>Datos del Vendedor</h3>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Nombre" placeholder="Nombre" disabled>
                    <label for="Nombre">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="fechaReguistro" placeholder="fecha de reguistro" disabled>
                    <label for="fechaReguistro">fecha de reguistro</label>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3>Detalle del Producto</h3>
        <div class="form-floating mb-3">
            <textarea  type="text" class="form-control" id="Descripcion" placeholder="Descripcion" disabled></textarea>
            <label for="Descripcion">Descripcion</label>
        </div>
        <div class="d-flex gap-2">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Precio" placeholder="Precio" disabled>
                <label for="Precio">Precio</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Cantidad" placeholder="Cantidad">
                <label for="Cantidad">Cantidad</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Stock" placeholder="Stock" disabled>
                <label for="Stock">Stock</label>
            </div>
        </div>
        <div class="d-flex gap-3">
            <button type="button" id="" class="btn btn-primary">Agregar</button>
            <button type="button" id="" class="btn btn-secondary">Cancelar</button>
        </div>
        <div class="py-3">
            <table class="table">
                <thead>
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                        </tr>
                </thead>
                <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>