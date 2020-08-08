<div class="container">
    <h1 class="tituloPrincipal text-center m-4 ">Registrar Categoría</h1>
        <form method="POST">
        <div class="container text-center mt-3">
            <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Nombre</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtNombre" class="form-control" placeholder="Nombre" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Estado</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text"  name="txtEstado" class="form-control" placeholder="Estado" required>
                 </div>
             </div>
            
        <input class="btn btn-warning mb-3" type="submit" value="Registrar Categoría"></input>
        </div>
        </form>
</div>

<?php

//$registrar = new ProductoC();
//$registrar -> RegistrarProductoC();
?>