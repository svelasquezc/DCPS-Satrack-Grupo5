<?php
require('configs/include.php');

class c_analista extends super_controller {

    public function display() {

        
    }

    public function run() {


        $this->display('empty.tpl');
    }

}

$ob = new c_analista();
$ob->run();
?>