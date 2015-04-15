<?php
    class analista_de_negocios extends object_standard{
        
        protected $miembro;
        
        var $components = array();
        var $auxiliars = array();
        
        public function metadata(){
            return array("miembro" => array("foreign_name" => "m_ana", "foreign" => "miembro", "foreign_attribute" => "empleado"));
        }
        
        public function primary_key(){
            return array("miembro");
        }
        
        public function relational_keys($class, $rel_name){
            
            switch($class){
                case "miembro":
                    switch($rel_name){
                        case "m_ana":
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