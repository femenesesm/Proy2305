
<?php
class usuario {
    var $idusuario;
    var $nombre;
    var $clave;
    
    //Valida la existencia
    function VerificaUsuario()
    {
       $oConn=new Conexion();
        if ($oConn->conectar())
            $db=$oConn->objconn;
        else
            return false;
        
        $clavemd5=md5($this->clave);
    $sql="SELECT * FROM accseso WHERE nomusuario='$this->nombre' and pwdusuario";
    
    $resultado=$db->query($sql);
    
    if($resultado->num_rows>=1 || $resultado)
        return true;
    else 
        return false;
    }
}