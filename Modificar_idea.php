<?php

require('configs/include.php');

class c_Modificar_idea extends super_controller {

    public function Modificaridea() {
        if ($this->post->descripcion == NULL) {
            $message1 = "Ingrese Nueva descripcion por favor. ";
        }
        if (!is_empty($message1))
            throw_exception($message1);

        $_SESSION['nombre'] = $this->post->ddl;
        //acà actualizo
        $ide = new idea($this->post);
        $this->orm->connect();
        $this->orm->update_data("normal", $ide);
        $this->orm->close();
        //acà finaliza la actualizacion 
        $this->msg_warning = "Modificacion de la idea exitosa";
        $this->temp_aux = 'message.tpl';
        $this->type_warning = "Completo";
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning);
    }

    public function selectideas() {

        $options['idea']['lvl2'] = 'all';
        $this->orm->connect();
        $this->orm->read_data(array("idea"), $options);
        $idea = $this->orm->get_objects("idea");
        $this->orm->close();
        $this->engine->assign('ide', $idea);
        //echo $idea[1]->get('nombre');
    }

    public function display() {

        $this->selectideas();
        $this->engine->display($this->temp_aux);
        $this->engine->display('Modificar_idea.tpl');
        //    $this->engine->display('header.tpl');
        //  $this->engine->display('footer.tpl');
    }

    public function run() {
        try {
            if (isset($this->get->option)) {
                //if ($this->get->option == "conversion")
                $this->{$this->get->option}();
                //else {
                //throw_exception("OpciÃ³n ". $this->get->option." no disponible");
                //}
            }
        } catch (Exception $e) {
            $this->error = 1;
            $this->msg_warning = $e->getMessage();
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
        }
        $this->display();
    }

}

$ob = new c_Modificar_idea();
$ob->run();
?>