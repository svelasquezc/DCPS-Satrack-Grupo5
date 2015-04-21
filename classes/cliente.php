<?php
    class cliente extends object_standard{
        
        protected $identificacion;
        protected $nombre;
        protected $correo;
        
        var $components = array();
        var $auxiliars = array();
        
        public function metadata(){
            return array("identificacion" => array(), "nombre" => array(), "correo" => array());
        }
        
        public function primary_key(){
            return array("identificacion");
        }
        
        public function relational_keys($class, $rel_name) {
            switch($class) {
                default:
                break;
            }
        }
    }
?>