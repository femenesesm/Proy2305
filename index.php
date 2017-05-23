<?php
session_start();
?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div><?php if(isset($_SESSION['USR'])) { ?>
            <a href="cerrar.php">Cerrar Sesión</a>
            <?php } ?>
        </div>
        <a href="revision.php">Revisi&oacute;n sesi&oacute;n</a>
        <a href="Formulario.php">Formulario Producto</a>
        <?php if (!isset($_SESSION['USR'])){?>
        <form action="revision.php" method="post">
            <div><label>Usuario<input type="text" name="nombre"></div>
            <div><label>Clave<input type="password" name="clave"></div>
            <input type="submit" value="Acceder">
        </form>
        <?php }
        ?>
    </body>
</html>