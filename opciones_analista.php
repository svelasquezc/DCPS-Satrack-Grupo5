<?php

require('configs/include.php');

class c_opciones_analista extends super_controller {

    public function display() {


        $this->engine->display('opciones_analista.tpl');
    }

    public function run() {


        $this->display();
    }

}

$ob = new c_opciones_analista();
$ob->run();
?>