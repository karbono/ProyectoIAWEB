<?php

     function validar($nombre, $apellido, $edad)
     {
         $errores = array();
         if (empty($nombre))
         {
             $errores['nombre'] = 'Introduzca nombre';
         }
         if (empty($apellido))
         {
             $errores['apellido'] = 'Introduzca apellido';
         }
         if (empty($edad))
         {
             $errores['edad'] = 'Introduzca edad';
         }
         else if (!is_numeric($edad))
         {
             $errores['edad'] = 'Introduzca un valor entero';
         }

         return $errores;
     }
     
     function verArray($array)
     {
         echo "<pre>";
         print_r($array);
         echo "</pre>";
     }
     
     function filtrarDato($dato)
     {
        
          return htmlspecialchars($dato);
     }
?>
