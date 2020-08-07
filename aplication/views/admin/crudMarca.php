<div class="container">
    <h1 class="tituloPrincipal text-center m-4 ">Pruebas de marca</h1>
        <form method="post" name="marca">
            <div class="container text-center mt-3">
                <div class="form-row mb-4">
                    <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                </div>
                <input class="btn btn-warning mb-3" type="submit" value="Registrar Marca"></input>
            </div>
        </form>
</div>

<?php

$registrar = new ProductoC();
$registrar -> RegistrarProductoC();
?>