<div class="container">
    <h1 class="tituloPrincipal text-center m-4 ">Registrar Producto</h1>
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
                    <label for="validationDefault01">Imagenes</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text"  name="txtImagen" class="form-control" placeholder="Nombre" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Descripción Extensa</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <textarea type="text"  name="txtDescripcionE" class="form-control" rows="3"required></textarea>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Descripción Breve</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text"  name="txtDescripcionB" class="form-control" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Marca</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text"  name="txtMarca" class="form-control"  required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Categoría</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtCategoria" class="form-control" required  >
                 </div>
             </div>
             
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Precio Venta</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtPrecioV" class="form-control" placeholder="Precio venta" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Cantidad</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="number" name="txtCantidad" class="form-control" placeholder="Cantidad" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Colores</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtColores" class="form-control" placeholder="Colores" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Estado</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtEstado" class="form-control" placeholder="Estado" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Descuento</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtDescuento" class="form-control" placeholder="Descuento" required>
                 </div>
             </div>
             <div class="form-row mb-4">
                <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label for="validationDefault01">Valoración General</label>
                </div>
                <div class="col-auto col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <input type="text" name="txtValoracionG" class="form-control" placeholder="Valoración" required>
                 </div>
             </div>
            
        <input class="btn btn-warning mb-3" type="submit" value="Registrar Producto"></input>
        </div>
        </form>
</div>

<?php

$registrar = new ProductoC();
$registrar -> RegistrarProductoC();
?>