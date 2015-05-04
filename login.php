<?php
require('configs/include.php');
require('modules/m_phpass/PasswordHash.php');

class c_login extends super_controller {

    protected $em;

    public function validarlogin() {


        $hasher = new PasswordHash(8, FALSE);
        $code['empleado']['cedula'] = $this->post->Usuario;
        $options['empleado']['lvl2'] = "validar";
        $this->orm->connect();
        $this->orm->read_data(array("empleado"), $options, $code);
        $this->em = $this->orm->get_objects("empleado");
        $this->orm->close();

       /* $codec['cliente']['nombre'] = $this->post->Usuario;
        $codec['cliente']['identificacion'] = $this->post->Contrasena;
        $optionss['cliente']['lvl2'] = "validar";
        $this->orm->connect();
        $this->orm->read_data(array("cliente"), $optionss, $codec);
        $this->cl = $this->orm->get_objects("cliente");
        $this->orm->close();

        $_SESSION['idcliente'] = $this->post->Contrasena;*/

        //echo $this->em->get('identificacion');

        
        if (isset($this->cl[0])) {
            header('Location: analista.php');
        } elseif (isset($this->em[0]) && $hasher->CheckPassword($this->post->Contrasena, $this->em[0]->get('contrasena')))  {
            if ($this->em[0]->get('tipo1') == 'miembro') {
                if ($this->em[0]->get('tipo2') == 'especialista en desarrollo del producto') {
                    header('Location: analista.php');
                } elseif ($this->em[0]->get('tipo2') == 'analista de negocios') {
                    header('Location: opciones_analista.php');
                } elseif ($this->em[0]->get('tipo2') == 'gerente de negocios') {
                    header('Location: analista.php');
                } elseif ($this->em[0]->get('tipo2') == ' gerente.tpl') {
                    header('Location: analista.php');
                } elseif ($this->em[0]->get('tipo2') == 'arquitecto de software') {
                    header('Location: analista.php');
                }
            }
        } else {
            if($this->post->Usuario == "" || $this->post->Contrasena == ""){
                $this->engine->assign(alerta, "ms.alertify()");
            }
        }
    }

    public function display() {
        //if (is_object($this->em[0]) || is_object($this->cl[0])) {
         //   $this->engine->display($this->temp);
            //  $this->engine->display('login.tpl');
       // } else {

            $this->engine->display('ensayo_login.tpl');
                    
        //}
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