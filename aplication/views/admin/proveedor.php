<?php
$controller = new ProveedorController();
$proveedores = $controller->ConsultarTodas();
?>
<div class="container">
    <h1 class="tituloPrincipal text-center">Lista de proveedores</h1>
        <div class="row m-2">
            <div class=" col-sm-9 col-md-9 col-lg-10 col-xl-10">
            </div>
            <div class=" col-sm-3 col-md-3 col-lg-2 col-xl-2">
             <a class="btn btn-warning" href="<?php echo SERVERURL;?>crudProveedores/">Nuevo Proveedor</a>
            </div>
        </div>
        

        <div class="table-responsive">
            <table class="table">
                <thead class="table-warning">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($proveedores as $proveedor) {
                    ?>
                    <tr>
                        <td><?php echo $proveedor['nombre'] ?></td>
                        <td><?php echo $proveedor['telefono'] ?></td>
                        <td><?php echo $proveedor['email'] ?></td>
                        <td><?php echo $proveedor['provincia'] ?></td>
                        <td><?php echo $proveedor['estado'] ?></td>
                        <td>
                            <a class="btn btn-warning">M</a>
                            <a class="btn btn-warning">D</a>
                        </td>
                    </tr>
                        <?php }?>
                </tbody>
            </table>
        </div>

</div>