<?php
require('configs/include.php');

class c_login extends super_controller {

    protected $em;

    public function validarlogin() {

        $code['empleado']['cedula'] = $this->post->Usuario;
        $code['empleado']['contrasena'] = $this->post->Contrasena;

        $options['empleado']['lvl2'] = "validar";
        $this->orm->connect();
        $this->orm->read_data(array("empleado"), $options, $code);
        $this->em = $this->orm->get_objects("empleado");
        $this->orm->close();
        $this->engine->assign('em', $em);
           // print_r2($this->post);
            if($this->em[0]->get('tipo1') == 'miembro'){
                $this->temp = 'proponer_idea.tpl';
            }
    }

    public function display() {

        
        if (is_object($this->em[0])){
            $this->engine->display($this->temp);
        }else{
            $this->engine->display('login.tpl');
        }
    }

    public function run() {

        if (isset($this->get->option)) {
            $this->{$this->get->option}();
        }
        $this->display();
    }

}

$ob = new c_login();
$ob->run();
?>