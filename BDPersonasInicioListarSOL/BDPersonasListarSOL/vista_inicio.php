<?php
    include "cabecera.php";
   
    
    foreach ($personas as $persona)
    {
        echo "<div class='persona'>";
        echo "<p> " . filtrarDato($persona['nombre']) . " " .
            strtoupper(filtrarDato($persona['apellido'])) . "</p>";
        echo "</div>\n";
    }
    include "pie.php";
?>
