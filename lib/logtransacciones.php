<?php
include 'conexion.php';
    $nombre = $_POST['nombre'];
    $totalusd = $_POST['totalusd'];
    $ano = $_POST['ano'];
    
    /* Consultas SQL */
    $oConn = new Conexion();
    if ($oConn->Conectar()){
        $db = $oConn -> objconn;
    }else{
        return false;
    }
    $sql = "INSERT INTO productos(nombre, totalusd, ano) VALUES('$nombre', $totalusd, $ano);";
    $resultado = $db->query($sql);
