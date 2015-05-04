<?php /* Smarty version Smarty-3.0.9, created on 2015-05-02 20:19:34
         compiled from "C:/wamp/www/ProyectoDCPS1/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37755451536481225-00520341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68eaa5def8ba0147bc439bb217d727880d853d6c' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS1/templates\\message.tpl',
      1 => 1429247934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37755451536481225-00520341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div>
<div class="alert alert-<?php echo $_smarty_tpl->getVariable('type_warning')->value;?>
">
<strong><?php echo ucfirst($_smarty_tpl->getVariable('type_warning')->value);?>
</strong> <?php echo $_smarty_tpl->getVariable('msg_warning')->value;?>

</div>
</div>
