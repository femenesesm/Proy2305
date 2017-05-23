<?php
class Producto {
    var $nombre="";
    var $precio=0;
    public $codigo="";        
    public function _constructor($nombre="", $precio=0, $codigo=""){
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->codigo=$codigo;
    }
}
