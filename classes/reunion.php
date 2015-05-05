<?php

class reunion extends object_standard {

    //attribute variables
    protected  $id;
    protected $fecha;
    protected $idea;
 
    var $components = array();
    //auxiliars for primary key and for files
    var $auxiliars = array();

    //data about the attributes
    public function metadata() {
        return array( "id"=>array(), "fecha" => array(), "idea" => array("foreign_name"=>"r_idea", "foreign"=>"idea", "foreign_attribute"=>"id"));
    }

    public function primary_key() {
        return array("id");
    }

    public function relational_keys($class, $rel_name) {
        switch ($class) {
            case "idea":
                switch ($rel_name)
            {
                    case "i_idea":
                        return array("idea");
                        break;
            }
            break;           
            default:
                break;
        }
    }

}

?>