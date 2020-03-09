<?php include "cabecera.php" ?>


<section id="contenido">
    <form id="form" action="index.php" method="post">
        <br/>
        &nbsp;Buscar noticia: <input type="text" name="texto" value="<?php if (isset($texto)) echo filtrarDato($texto) ?>"/>
        <input type="submit" name="buscar" value="Buscar">
        <span class="error"><?php if (isset($errores["texto"])) echo $errores["texto"] ?></span>


    </form>

<?php
if (isset($noticias)) // para que la primera vez que se presenta
                          // el formualrio no de error
    {
    
        foreach ($noticias as $noticia) {
          echo "<article id='" . $noticia['ID'] . "'>";
          echo "<hgroup><h2 class='titulo'>" . $noticia['Titulo'] . "</h2></hgroup>";
          echo "	<p class='fecha'>" . $noticia['Fecha'] . "</p>";
     /*   echo	"	<img class='thumb' src='data:".$noticia['Imagen'].";base64' alt=''/>"; */
          echo "	<p>" . $noticia['Noticia'] . "</p> ";
          echo "</article>";
      }
    }
?>
</section>
 <?php   include "pie.php" ?>			