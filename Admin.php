<?php
require('configs/include.php');

class c_Admin extends super_controller {

    public function validar() {



        $code['login']['cedula'] = $this->post->cedula;
        $options['login']['lvl2'] = "uno";
        $this->orm->connect();
        $this->orm->read_data(array("login"), $options, $code);
        $lo = $this->orm->get_objects("login");
        $this->orm->close();
        $this->engine->assign('lo', $em);


        $var = $_POST['Tipo'];



        if (isset($_POST['cedula'])) {
            $campo1 = $_POST['cedula'];

            if ($campo1 == '') {
                echo "Ingrese la cedula por favor";
            } else {
                if (count($lo) == 0) {
                    if ($var == "Analista") {
                        $_SESSION['Tipo'] = 1;
                        $this->Agregar(login);
                        $this->Agregar(analista);
                    } elseif ($var == "Arquitecto") {
                        $_SESSION['Tipo'] = 2;
                        $this->Agregar(login);
                        $this->Agregar(arquitecto);
                    } elseif ($var == "Cliente") {
                        $_SESSION['Tipo'] = 3;
                        $this->Agregar(login);
                        $this->Agregar(cliente);
                    } elseif ($var == "Especialista") {
                        $_SESSION['Tipo'] = 4;
                        $this->Agregar(login);
                        $this->Agregar(especialista);
                    } elseif ($var == "Gerente") {
                        $_SESSION['Tipo'] = 5;
                        $this->Agregar(login);
                        $this->Agregar(gerente);
                    } else {
                        echo 'Seleccione el tipo de usuario';
                    }
                } else {
                    echo 'Ya existe un usuario registrado con esta cedula';
                }
            }
        }
    }

    public function Agregar($tabla) {

        $ob = new $tabla($this->post);
        $this->orm->connect();
        $this->orm->insert_data("normal", $ob);
        $this->orm->close();
    }

    public function display() {

        $this->engine->display('Admin.tpl');
    }

    public function run() {
        if (isset($this->get->option)) {
            $this->{$this->get->option}();
        }
        $this->display();
    }

}

$call = new c_Admin();
$call->run();
?>