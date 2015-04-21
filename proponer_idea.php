<?php

require('configs/include.php');

class c_proponer_idea extends super_controller {

    public function Agregar() {

        $id = new idea($this->post);
        $this->orm->connect();
        $this->orm->insert_data("insert", $id);
        $this->orm->close();
    
    }

    public function display() { 
         $this->engine->display('mensajedatosguardados.tpl');
    }

    public function run() {

        if (isset($this->get->option)) {
            $this->{$this->get->option}();
        }
        $this->display();
    }
}

$ob = new c_proponer_idea();
$ob->run();
?>