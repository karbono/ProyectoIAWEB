<?php include "cabecera.php" ?>

<section id="slideshow">
    <div class="slides_container">
        <div><a href="#"><img src="imagenes/slider/caution.jpg"/></a></div>
        <div><a href="#"><img src="imagenes/slider/m4.jpg"/></a></div>
        <div><a href="#"><img src="imagenes/slider/dragonlore.jpg"/></a></div>
    </div>
</section>
<section id="bienvenidos">
    <article>
        <hgroup><h3>Bienvenidos a nuestro blog de CS:GO</h3></hgroup>
        <p>
        <ul>
            <li>Artículos de CS:GO.</li>
            <li>Acceso a las mejores casas de apuestas.</li>
            <li>Como subir de rango rapidamente.</li>
            <li>Consejos para ser un mejor jugador.</li>
            <li>Restransmisión de los mejores partídos en directo.</li>

            <p>¿Qué equipos vivirán para luchar otro día y qué dos tendrán que 
                volver a empezar de cero?</p>
        </ul>
        </p>
    </article>
</section>
<?php

      echo "<section id='contenido'>";
      foreach ($noticias as $noticia) {
          echo "<article id='" . $noticia['ID'] . "'>";
          echo "<hgroup><h2 class='titulo'>" . $noticia['Titulo'] . "</h2></hgroup>";
          echo "<p class='fecha'>" . $noticia['Fecha'] . "</p>";
     /*   echo	"<img class='thumb' src='data:".$noticia['Imagen'].";base64' alt=''/>"; */
          echo "<p>" . $noticia['Noticia'] . "</p> ";
          echo "</article>";
      }

      echo "</section>";

      include "pie.php"
?>