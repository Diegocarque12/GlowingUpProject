<div class="container">
    <h1 class="tituloPrincipal text-center">Lista de Productos</h1>
        <div class="row m-2">
            <div class=" col-sm-9 col-md-9 col-lg-10 col-xl-10">
            </div>
            <div class=" col-sm-3 col-md-3 col-lg-2 col-xl-2">
             <a class="btn btn-warning" href="<?php echo SERVERURL;?>crudProducto/">Nuevo Producto</a>
            </div>
        </div>
        

        <div class="table-responsive">
            <table class="table">
                <thead class="table-warning">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Precio V</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a class="btn btn-warning">M</a>
                            <a class="btn btn-warning">D</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <a class="btn btn-warning">M</a>
                            <a class="btn btn-warning">D</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

</div>
 