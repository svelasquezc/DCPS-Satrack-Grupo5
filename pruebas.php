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

        if(isset($this->em[0])){
        $_SESSION['empleado']['cedula']=$this->em[0]->get('cedula');
        $_SESSION['empleado']['nombre']=$this->em[0]->get('nombre');
        $_SESSION['empleado']['contrasena']=$this->em[0]->get('contrasena');
        $this->session=$_SESSION;
        }
           // print_r2($this->post);
            if($this->em[0]->get('tipo1') == 'miembro'){
                $this->temp = 'opciones_roles.tpl';
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