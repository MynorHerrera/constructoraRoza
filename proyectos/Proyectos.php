<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
      <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>
<body>
    <header>
        <div class="contenedor">
            <img src="img/lg-constructora-roza.png" alt="logo">
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="../index.html">Inicio</a>
                <a href="Proyectos.php">Proyectos</a>
                <a href="../contactanos/contactanos.html">Contáctanos</a>
            </nav>
        </div>
    </header>
    <section class="information">
        <h1>NOG3485930</h1>
            <form action="Proyectos.php" method="POST">
                <input class="fecha" type="date" value="<?php echo date("Y-m-d");?>" name="date">
                <input class="enviar" type="submit" name="Buscar" value="Buscar">
            </form>
            <div></div>
            <h2>Nombre del Proyecto</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Vel rem consectetur facere repudiandae suscipit iusto, 
                commodi architecto deserunt est maiores neque, voluptatibus 
                praesentium asperiores nemo, nostrum facilis incidunt natus 
                aperiam!</p>
    </section>
        <div id="galeria">
            <ul>
            <div class="row">
                <?php
                include("mostrar.php");
                ?>
            </div>
            </ul>
        </div>
    <footer class="pie">
            <small>Constructora Roza</small> 
            <small>Copyright © 2018 | by TECNICENTER</small> 
    </footer>
</body>
</html>