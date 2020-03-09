<!DOCTYPE>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Inicio</title>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/slides.min.jquery.js"></script>

        <script>
            $(function () {
                $("#slideshow").slides();
            });
        </script>
    </head>

    <body>

        <video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50"/>
    <source src="imagenes/fondo.mp4" type="video/mp4" />
</video>
<img src="imagenes/transicion.png" id="transicion"/>
<header>
    <div id="subheader">
        <div id="logotipo"><img src="imagenes/logo.png" width="400"></div>
        <nav>
            
                <?php include "menu.php" ?>
   
        </nav>
    </div>
</header>

<section id="wrap">

    <section id="main">