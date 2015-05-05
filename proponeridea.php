<?php

require ('configs/include.php');

class c_proponeridea extends super_controller {

    public function add() {
        $idea = new idea($this->post);
        if (is_empty($idea->get('nombre')) or is_empty($idea->get('descripcion'))) {
            throw_exception("Campos incompletos");
        }
        /* $options['idea']['lvl2'] = "normal";
          $options['necesidad']['lvl2'] = "normal";
          $this->orm->connect();
          $this->orm->insert_data("normal", $idea);

          $this->orm->close(); */
        $ide = new idea($this->post);
        //$_SESSION["ididea"] = $this->post->ddl;
        $this->orm->connect();
        $this->orm->insert_data("normal", $ide);
        $this->orm->close();


        $this->type_warning = "sucess";
        $this->msg_warning = "Idea propuesta correctamente";

        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning);
    }

    public function display() {
        $options['necesidad']['lvl2'] = "all";
        $this->orm->connect();
        $this->orm->read_data(array("necesidad"), $options);
        $necesidad = $this->orm->get_objects("necesidad");
        $this->orm->close();

        $this->engine->assign('necesidad', $necesidad);
        $this->engine->assign('title', 'proponer idea');
        $this->engine->display($this->temp_aux);
        $this->engine->display('proponeridea.tpl');
    }

    public function run() {
        try {
            if (isset($this->get->option)) {
                $this->{$this->get->option}();
            }
        } catch (Exception $e) {
            $this->error = 1;
            $this->msg_warning = $e->getMessage();
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
            $this->temp_aux = 'message.tpl';
        }
        $this->display();
    }

}

$call = new c_proponeridea();
$call->run();
?>