<?php
    class empleado extends object_standard {
        
        //attribute variables
        protected $cedula;
        protected $nombre;
        protected $correo;
        protected $contrasena;
        protected $tipo1;
        protected $tipo2;


        //components
        var $components = array();

        //auxiliars for primary key and for files
        var $auxiliars = array();

        //data about the attributes
        public function metadata() {
            return array("cedula" => array(), "nombre" => array(), "correo" => array(), "contrasena" => array(), "tipo1" => array(), "tipo2" => array());
        }

        public function primary_key() {
            return array("cedula");
        }

        public function relational_keys($class, $rel_name) {
            switch($class) {
                default:
                break;
            }
        }
    }
?>