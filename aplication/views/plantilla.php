<?php
    $title = 'Inicio';
    include_once "layout/header.php";
?>


<?php
    include_once "layout/menu.php";
?>

<section>
    <?php
        $rutas = new RutasControlador();
        $rutas -> Rutas();
    ?>
</section>

<?php
    include_once "layout/footer.php";
?>