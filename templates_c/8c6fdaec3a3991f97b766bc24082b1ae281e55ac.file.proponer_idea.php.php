<?php /* Smarty version Smarty-3.0.9, created on 2015-04-17 05:04:37
         compiled from "proponer_idea.php" */ ?>
<?php /*%%SmartyHeaderCode:265585530946554cc97-36937896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c6fdaec3a3991f97b766bc24082b1ae281e55ac' => 
    array (
      0 => 'proponer_idea.php',
      1 => 1429245765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265585530946554cc97-36937896',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<<?php ?>?php
require('configs/include.php');

class c_proponer_idea extends super_controller {


    public function display() {

        
        if (is_object($this->em[0])){
            $this->engine->display($this->temp);
        }else{
        	$this->engine->display('header.tpl');
        	$this->engine->display($this->temp_aux);
            $this->engine->display('proponer_idea.tpl');
            $this->engine->display('footer.tpl');
        }
    }

    public function run() {

        if (isset($this->get->option)) {
            $this-><?php echo $_smarty_tpl->getVariable('this')->value->get->option;?>
();
        }
        $this->display();
    }

}

$ob = new c_proponer_idea();
$ob->run();
?<?php ?>>