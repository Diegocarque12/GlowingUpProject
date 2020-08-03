<?php
   // $title = 'Inicio';
    //include_once "layout/header.php";
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="/css/stylesheet.css?v=<?php echo(rand()); ?>" /><!-- borrar luego de usar -->
    <title>Glowing Up - Incio <?//php echo $title ?></title>
  </head>
  <body>

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