<?php

class idea extends object_standard {

    //attribute variables
    protected $ididea;
    protected $nombre;
    protected $descripcion;
    protected $cliente;
    protected $fecha;
    //components
    var $components = array();
    //auxiliars for primary key and for files
    var $auxiliars = array();

    //data about the attributes
    public function metadata() {
        return array("nombre" => array(), "descripcion" => array(), "cliente" => array(), "fecha" => array());
    }

    public function primary_key() {
        return array("ididea");
    }

    public function relational_keys($class, $rel_name) {
        switch ($class) {
            default:
                break;
        }
    }

}

?>