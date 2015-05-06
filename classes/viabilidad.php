<?php
    class viabilidad extends object_standard{
        //atribute variables
        protected $codigo;
        protected $resultado;
        protected $causa;
        protected $analista;
        protected $prediseno;
        
        //components
        var $components = array();
        
        //auxiliar for primary key and for file
        var $auxiliars = array();
        
        //data about the attributes
        public function metadata() {
            return array("codigo" => array(), "resultado" => array(), "causa" => array(), 
                "analista" => array("foreign_name" => "a_v","foreign" => "empleado", "foreign_attribute" => "cedula"), 
                "prediseno" => array("foreign_name" => "p_v","foreign" => "prediseno", "foreign_attribute" => "codigo"));
        }
        
        public function primary_key() {
            return array("codigo");
        }
        
        public function relational_keys($class, $rel_name) {
            switch ($class){
                case "analista":
                    switch ($rel_name){
                        case "a_v":
                        return array("analista");
                        break;
                    }
                break;
            
                case "prediseno":
                        switch ($rel_name){
                            case "p_v":
                            return array("prediseno");
                            break;
                        }
                    break;
            
                default:
                break;
            }
        }
    }
?>