<?php 
include "cabecera.php" ;

echo "<section id='contenido'>";
      foreach ($noticias as $noticia) {
          echo "<article id='" . $noticia['ID'] . "'>";
          echo "<hgroup><h2 class='titulo'>" . $noticia['Titulo'] . "</h2></hgroup>";
          echo "	<p class='fecha'>" . $noticia['Fecha'] . "</p>";
     /*   echo	"	<img class='thumb' src='data:".$noticia['Imagen'].";base64' alt=''/>"; */
          echo "	<p>" . $noticia['Noticia'] . "</p> ";
          echo "</article>";
      }

echo "</section>";

      include "pie.php" ;
        ?>