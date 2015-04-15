<?php
    class miembro extends object_standard{
        
        protected $empleado;
        
        var $components = array();
        var $auxiliars = array();
        
        public function metadata(){
            return array("empleado" => array("foreign_name" => "e_mie", "foreign" => "empleado", "foreign_attribute" => "cedula"));
        }
        
        public function primary_key(){
            return array("empleado");
        }
        
        public function relational_keys($class, $rel_name){
            
            switch($class){
                case "empleado":
                    switch($rel_name){
                        case "e_mie":
                            return array("empleado");
                            break;                    
                    }
                    break;
                default:
                    break;
            }
        }
    }
?>