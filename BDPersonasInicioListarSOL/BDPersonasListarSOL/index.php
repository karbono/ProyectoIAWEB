<?php

      require_once 'conexion.php';
      require_once 'funciones.php';

      //-----------------------------------------------------------------------------
      // se ha hecho click en el enlace Listar
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'listar')
      {
          $sql = 'SELECT * FROM personas';
          $resul = mysqli_query($conexion, $sql);
          if ( ! $resul) // ha ocurrido un error
          {
              $error = "Error en consulta - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
          $personas = array();
          while ($fila = mysqli_fetch_array($resul))
          {
              $personas[] = $fila;
          }
          include "vista_listar.php";
          exit();
      }


      //-----------------------------------------------------------------------------
      // vale para click en Inicio o cuando se solicita el script index.php la primera vez
      $sql = 'SELECT nombre, apellido FROM personas';
      $resul = mysqli_query($conexion, $sql);
      if ( ! $resul) // ha ocurrido un error
      {
          $error = "Error en consulta - " . mysqli_error($conexion);
          include "error.php";
          exit();
      }

      $personas = array(); // guardo en esta array las personas devueltas por la consulta
      // para mostrar la plantilla de vista_inicio.php

      while ($fila = mysqli_fetch_array($resul))
      {
          $personas[] = $fila;
      }

      include "vista_inicio.php";
?>
