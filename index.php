<?php

      require_once 'utils.php';
      require_once 'conexion.php';
      require_once 'mimodelo.php';
      

      if (isset($_GET['oper']) && $_GET['oper'] == 'inser')
    {
        $mensaje = 'Registro insertado correctamente';
        include "vista_denuncia.php";
        exit();
    }
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'denuncias') {
          include "vista_denuncia.php";
          exit();
      }

      if (isset($_POST['enviar'])) {

          $errores = [];
          $nombre = trim($_POST['nombre']);
          if (empty($nombre)) {
              $errores['nombre'] = "Introduzca nombre";
          }
          $apellidos = trim($_POST['apellidos']);
          if (empty($apellidos)) {
              $errores['apellidos'] = "Introduzca apellidos";
          }
          $email = trim($_POST['email']);
          if (empty($email)) {
              $errores['email'] = "Introduzca email";
          }
          $usuario = trim($_POST['usuario']);
          if (empty($usuario)) {
              $errores['usuario'] = "Introduzca usuario";
          }

          $motivos = $_POST['motivos'];

          $frecuencias = $_POST['frecuencias'];

          if (!isset($_POST['anticheto'])) {
              $errores['anticheto'] = "Seleccione un sistema anticheto";
          } else {
              $anticheto = trim($_POST['anticheto']);
          }

          if (!empty($errores)) {

              include "vista_denuncia.php";
              exit();
          }

          $nombre = mysqli_real_escape_string($conexion, $nombre);
          $apellidos = mysqli_real_escape_string($conexion, $apellidos);
          $email = mysqli_real_escape_string($conexion, $email);
          $usuario = mysqli_real_escape_string($conexion, $usuario);
          $motivos = mysqli_real_escape_string($conexion, $motivos);
          $frecuencias = mysqli_real_escape_string($conexion, $frecuencias);
          $anticheto = mysqli_real_escape_string($conexion, $anticheto);


          $sql1 = "INSERT INTO datos_personales (Nombre, Apellidos, correo_electronico, cuenta_steam) 
                      VALUES ('$nombre','$apellidos','$email','$usuario')";

          $sql2 = "INSERT INTO datos_denuncia (cuenta_steam, Motivo, Frecuencia, sistemas_anticheto)
                    VALUES ('$usuario','$motivos','$frecuencias','$anticheto')";

          $personales = obtenerResultados($conexion, $sql1);
          $denuncias = obtenerResultados($conexion, $sql2);

          include "vista_denuncia.php";
          exit();
      
      header('Location: index.php?oper=inser');
        exit();
    }

      if (isset($_GET['opcion']) && $_GET['opcion'] == 'blog') {
          // Consulta persona con cada curso que ha realizado
          $sql = "SELECT ID, Titulo, Fecha, Imagen, Noticia FROM noticia ORDER BY Fecha DESC";

          $noticias = obtenerResultados($conexion, $sql);
          include "blog.php";
          exit();
      }


      if (isset($_GET['opcion']) && $_GET['opcion'] == 'buscar') {
          include "vista_buscar.php";
          exit();
      }

      if (isset($_POST['buscar'])) {

          $texto = trim($_POST['texto']);
          if (empty($texto)) {
              $errores = "Introduzca texto";
              include "vista_buscar.php";
              exit();
          }

          $texto = mysqli_real_escape_string($conexion, $texto);
          $sql = "SELECT ID, Titulo, Fecha, Imagen, Noticia FROM noticia WHERE Titulo LIKE '%$texto%' ORDER BY Fecha DESC";

          $noticias = obtenerResultados($conexion, $sql);
          include "vista_buscar.php";
          exit();
      }

      $sql = "SELECT ID, Titulo, Fecha, Imagen, Noticia FROM noticia ORDER BY Fecha DESC LIMIT 2";

      $noticias = obtenerResultados($conexion, $sql);


      include "inicio.php";
?>
