<?php
require('configs/include.php');

class c_proponer_idea extends super_controller {


    public function display() {

        
        if (is_object($this->em[0])){
            $this->engine->display($this->temp);
        }else{
            $this->engine->display('proponer_idea.tpl');
        }
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