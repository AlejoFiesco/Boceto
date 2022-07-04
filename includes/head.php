<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boceto</title>
    <?php $archivo = basename($_SERVER['PHP_SELF'], '.php'); ?>

    <!-- Se importa la hoja de estilos según el nombre de la página actual -->
    <link rel="stylesheet" href="<?php echo './src/css/'.$archivo ?>.css"> 
    <link rel="stylesheet" href="./src/css/header.css">
    <link rel="stylesheet" href="./src/css/footer.css">

    <!-- Se importa JQuery -->
    <!--<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>-->

    <!-- Se importa FontAwesome -->
    <script src="https://kit.fontawesome.com/775ef16a72.js" crossorigin="anonymous"></script>
</head>
<body>
