<?php /* Smarty version Smarty-3.0.9, created on 2015-05-05 20:40:47
         compiled from "C:/wamp/www/ProyectoDCPS/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:467455490eaf659b02-38612664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ca1441684d74ee97711f413a2470bff56afa5cd' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\message.tpl',
      1 => 1429247934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '467455490eaf659b02-38612664',
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
