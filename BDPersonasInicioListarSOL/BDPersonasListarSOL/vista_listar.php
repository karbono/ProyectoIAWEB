<?php
    include "cabecera.php";
    echo "<table><tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Est. civil</th><th>G&eacute;nero</th></tr>";
    foreach ($personas as $persona)
    {
        echo "<tr>";
        echo "<td>".filtrarDato($persona['nombre'])."</td>";
        echo "<td>".filtrarDato($persona['apellido'])."</td>";
        echo "<td>".filtrarDato($persona['edad'])."</td>";
        echo "<td>".filtrarDato($persona['eCivil'])."</td>";
        echo "<td>".filtrarDato($persona['genero'])."</td>";
        echo "</tr>";    
         
    }
    echo "</table>";
    include "pie.php";
?>
