<?php /* Smarty version Smarty-3.0.9, created on 2015-04-01 22:55:13
         compiled from "C:/wamp/www/ProyectoDCPS/templates\Admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32476551c7751357a85-73773424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67ac08effac91455d4ba44ea150b7611f94d9e51' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\Admin.tpl',
      1 => 1427928897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32476551c7751357a85-73773424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
Admin.php?option=validar" method="post">

    <table border="1">

        <caption>Registrar usuario</caption>
        <thead>
            <tr>
                <th>Usuario(Cedula)</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Tipo</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><input type="text" name="cedula" /> </td>
                <td><input type="text" name="nombre" /></td>
                <td><input type="text" name="correo" /></td>
                <td><input type="text" name="contraseña" /></td>
                <td> <select name="Tipo">
                        <option> </option>
                        <option value="Analista" >Analista de negocios</option>
                        <option value="Arquitecto">Arquitecto de software</option>
                        <option value="Cliente">Cliente</option>
                        <option value="Especialista">Especialista en desarrollo de producto</option>
                        <option value="Gerente">Gerente de negocios</option>
                    </select>  </td>
            </tr>
        </tbody> 

    </table>

    <input type="submit" name="Agregar" value="Agregar" />


</form>