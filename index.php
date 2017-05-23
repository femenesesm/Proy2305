<?php
session_start();
var_dump($_SESSION);
?>
<?php session_start()?>
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
        <div><?php if (!isset($_SESSION['USR'])){?>
        <a href="cerrar.php">Cerrar Sesión</a>
            <?php } ?>
        </div>
        <a href="revision.php"> Revisi&oacute;n sesi&oacute;n</a> 
        <form>
            
            <div><label>Usuario</label><imput type="text" name="nombre"></div>
            <div><label>Clave</label><imput type="password" name="clave"></div>
            <imput type="submit" value="Acceder"></imput>            
        </form>       
        
        <?php
        echo md5('#holamundo&');
        echo '<br>';
        echo md5('holamundo');
        echo '<br>';
        echo md5('HolaMundo');
        echo '<br>';
        echo md5('HOLA MUNDO');
        echo '<br>';
        ?>
    </body>
</html>