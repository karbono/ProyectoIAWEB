<?php
 // conectar con el servidor
 $conexion = mysqli_connect("localhost", "pepe", "pepa");
 if (!$conexion) // no se puede establecer conexión
 {
 $error = "Imposible establecer conexión con el servidor de BD";
 include "error.php";
 exit();
 }
 // seleccionar la base de datos de trabajo
 $bd = "bd_csgo";
 $resul = mysqli_select_db($conexion, $bd);
 if (!$resul)
 {
 $error = "Imposible localizar la base de datos $bd";
 include "error.php";
 exit();
 }
?>