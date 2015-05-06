<?php
    class diseno extends object_standard{
        //atribute variables
        protected $codigo;
        protected $imagen;
        protected $evaluacion;
        protected $tipo;
        protected $dispositivo;
        protected $software;
        
        //components
        var $components = array();
        
        //auxiliar for primary key and for file
        var $auxiliars = array();
        
        //data about the attributes
        public function metadata() {
            return array("codigo" => array(), "imagen" => array(), "evaluacion" => array(), "tipo" => array(),
                "dispositivo" => array("foreign_name" => "d_d","foreign" => "dispositivo", "foreign_attribute" => "codigo"), 
                "software" => array("foreign_name" => "s_d","foreign" => "software", "foreign_attribute" => "codigo"));
        }
        
        public function primary_key() {
            return array("codigo");
        }
        
        public function relational_keys($class, $rel_name) {
            switch ($class){
                default:
                break;
            }
        }
    }
?>