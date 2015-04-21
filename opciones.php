<?php
require('configs/include.php');


class c_opciones extends super_controller {


    public function display() {
 
            $this->engine->display('opciones.tpl');
    }

    public function run() {


        $this->display();
    }

}

$ob = new c_opciones();
$ob->run();
?>