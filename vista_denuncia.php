<?php include "cabecera.php" ?>
<section id="contenido">
    <form id="form" action="index.php" method="post">

        <fieldset>
            <legend style="text-align:center">Datos personales</legend>
            <br/>
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?php if (isset($nombre)) echo filtrarDato($nombre) ?>"/> 
            <span class="error"><?php if (isset($errores["nombre"])) echo $errores["nombre"] ?></span><br/><br/>
            <label>Apellidos:</label>
            <input type="text" name="apellidos" value="<?php if (isset($apellidos)) echo filtrarDato($apellidos) ?>"/> 
            <span class="error"><?php if (isset($errores["apellidos"])) echo $errores["apellidos"] ?></span><br/><br/>
            <label>Correo Electrónico:</label>
            <input type="email" name="email" value="<?php if (isset($email)) echo filtrarDato($email) ?>"/> 
            <span class="error"><?php if (isset($errores["email"])) echo $errores["email"] ?></span><br/><br/>
            <label>Usuario de Steam:</label>
            <input type="text" name="usuario" value="<?php if (isset($usuario)) echo filtrarDato($usuario) ?>"/>
            <span class="error"><?php if (isset($errores["usuario"])) echo $errores["usuario"] ?></span><br /><br/>
        </fieldset>

        <br/>

        <fieldset>
            <legend style="text-align:center">Datos de denuncia</legend> <br/>
            <label>Motivo:</label>
            <select name="motivos">
                <?php
                      $motiv = array('Toxicidad', 'Ratekid', 'Uso de hacks', 'Problemas de conexíon');
                      foreach ($motiv as $valor) {
                          echo "<option value='$valor' ";
                          if (isset($motivos) && ($motivos == $valor)) {
                              echo "selected = 'selected' ";
                          };
                          echo ">$valor</option>";
                      }
                ?>


            </select> 
            <span class="error" ><?php if (isset($errores['motivos'])) echo $errores['motivos'] ?></span><br/><br/>

            <label>Frecuencia:</label>
            <select name="frecuencias">
                <?php
                      $frecuen = array('Muy pocas veces', 'Pocas veces', 'Habitualmente', 'Frecuentemente', 'Muy frecuentemente');
                      foreach ($frecuen as $valor) {
                          echo "<option value='$valor' ";
                          if (isset($frecuencias) && ($frecuencias == $valor)) {
                              echo "selected = 'selected' ";
                          };
                          echo ">$valor</option>";
                      }
                ?> 
            </select> <br/><br/>
            <label>Sistema anticheto:</label>
            <input type="radio" name="anticheto" value="Faceit AC" 
            <?php
                  if (isset($anticheto) && ($anticheto == "Faceit AC")) {
                      echo 'checked = "checked"';
                  }
            ?>/>Faceit AC
            <input type="radio" name="anticheto" value="Prime" 
                   <?php
                         if (isset($anticheto) && ($anticheto == "Prime")) {
                             echo 'checked = "checked"';
                         }
                   ?>/>Prime

            <span class="error" ><?php if (isset($errores['anticheto'])) echo $errores['anticheto'] ?></span>  <br/></br>


            <input type="submit" name="enviar" value="Enviar">
        </fieldset>
    </form>
</section>

<?php include "pie.php" ?>