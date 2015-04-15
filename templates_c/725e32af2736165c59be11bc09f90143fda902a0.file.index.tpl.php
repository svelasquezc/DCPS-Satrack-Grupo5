<?php /* Smarty version Smarty-3.0.9, created on 2015-04-01 15:39:18
         compiled from "C:/wamp/www/ProyectoDCPS/templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18376551c1126f04012-43589013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '725e32af2736165c59be11bc09f90143fda902a0' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\index.tpl',
      1 => 1427902757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18376551c1126f04012-43589013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="wrapper">
    <link rel="stylesheet" href="css/miestilo.css">
    <form class="form-signin">       
        <h2 class="form-signin-heading">Entrar</h2>
        Usuario:&nbsp; &nbsp; &nbsp; <input type="text" class="form-control" name="Usuario" placeholder="Usuario" required="" autofocus="" /></br>
        Contraseña: <input type="password" class="form-control" name="Contraseña" placeholder="Contraseña" required=""/>    </br>  
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recordar nombre de usuario
        </label></br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>   </br>
    </form>
</div>