<?php
    class ingeniero_de_hardware extends object_standard{
        
        protected $miembro;
        
        var $components = array();
        var $auxiliars = array();
        
        public function metadata(){
            return array("miembro" => array("foreign_name" => "m_ing", "foreign" => "miembro", "foreign_attribute" => "empleado"));
        }
        
        public function primary_key(){
            return array("miembro");
        }
        
        public function relational_keys($class, $rel_name){
            
            switch($class){
                case "miembro":
                    switch($rel_name){
                        case "m_ing":
                            return array("miembro");
                            break;                    
                    }
                    break;
                default:
                    break;
            }
        }
    }
?>