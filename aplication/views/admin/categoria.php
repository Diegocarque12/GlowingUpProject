<?php
$controller = new CategoriaController();
$categorias = $controller->ConsultarTodas();
?>

<div class="container">
    <h1 class="tituloPrincipal text-center">Categoría</h1>
        <div class="row m-2">
            <div class=" col-sm-9 col-md-9 col-lg-10 col-xl-10">
            </div>
            <div class=" col-sm-3 col-md-3 col-lg-2 col-xl-2">
             <a class="btn btn-warning" href="<?php echo SERVERURL;?>crudCategoria/">Nueva Categoría</a>
            </div>
        </div>
        

        <div class="table-responsive">
            <table class="table">
                <thead class="table-warning">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                    <tbody>
                    <?php
                        foreach ($categorias as $categoria) {
                    ?>
                    <tr>
                        <td><?php echo $categoria['nombre'] ?></td>
                        <td><?php echo $categoria['estado'] ?></td>
                    </tr>
                        <?php }?>
                </tbody>
            </table>
        </div>

</div>