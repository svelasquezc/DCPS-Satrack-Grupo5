<?php
require('configs/include.php');
import 'login.php';

class c_analista extends super_controller {

print_r2($em);
    public function display() {

        
    }

    public function run() {


        $this->display();
    }

}

$ob = new c_analista();
$ob->run();
?>