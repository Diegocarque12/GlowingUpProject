<div class="container">
    <h1 class="tituloPrincipal text-center m-4 ">Registrar Proveedor</h1>
        <form method="POST">
        <div class="container text-center mt-3">
            <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="txtCedula">Cédula</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text name="txtCedula" class="form-control" placeholder="Cédula" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="txtNombre">Nombre</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtNombre" class="form-control" placeholder="Nombre" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="txtTelefono">Teléfono</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtTelefono" class="form-control" placeholder="Telefono" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="txtDireccion">Dirección</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtDireccion" class="form-control" placeholder="Direccion" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="txtEmail">Email</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtEmail" class="form-control" placeholder="ejemplo@gmail.com" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="txtProvincia">Provincia</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtProvincia" class="form-control" placeholder="Seleccione" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="txtEstado">Estado</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtEstado" class="form-control" placeholder="Estado" required>
                 </div>
             </div>
            
        <input class="btn btn-warning mb-3" type="submit" value="Registrar Proveedor"></input>
        </div>
        </form>
</div>

<?php

$controller = new ProveedorController();
$controller -> registrarProveedor();
?>