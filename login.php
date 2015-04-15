<?php
require('configs/include.php');

class c_login extends super_controller {

    protected $lo;

    public function validarlogin() {

        $code['login']['cedula'] = $this->post->Usuario;
        $code['login']['contraseña'] = $this->post->Contraseña;

        $options['login']['lvl2'] = "validalogin";
        $this->orm->connect();
        $this->orm->read_data(array("login"), $options, $code);
        //$auxiliars['login'] = array('tipo');
        $this->lo = $this->orm->get_objects("login");
        $this->orm->close();
        $this->engine->assign('lo', $lo);

            if($this->lo[0]->get('tipo') == 1){
                $this->temp = 'analista.tpl';
                        print_r2($this->lo);
            }
    }

    public function display() {

        
        if (is_object($this->lo[0])){
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