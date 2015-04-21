<?php /* Smarty version Smarty-3.0.9, created on 2015-04-17 18:00:54
         compiled from "C:/wamp/www/DCPS-2015-1-master/templates\proponer_idea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2612455312e367224b3-38463427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91637a3e72ae0a3c82e9763fc2433552c1e87841' => 
    array (
      0 => 'C:/wamp/www/DCPS-2015-1-master/templates\\proponer_idea.tpl',
      1 => 1429286170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2612455312e367224b3-38463427',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<link rel="stylesheet" href="css/login.css">

<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
proponer_idea.php?option=Agregar" method="post">

    <div class="container">
        <div class="row login_box">
            <div class="col-md-12 col-xs-12" align="center">
                <div class="line"><h1>Satrack</h1></div>
                <div class="outter"><img src="images/perro.jpg" class="image-circle"/></div>   
                <h3>PROPONER IDEA</h3>
            </div>

            <div>

                <div>
                    <p>
                        &nbsp;&nbsp;  <label for="textfield">Fecha:</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input style="font-size:14px; text-align:center;background-color:#2F4F4F; " size=20 type="date" name="fecha">
                    </p>
                </div>

                <div>
                    <p >
                        &nbsp;&nbsp;  <label  for="textfield">Nombre idea :</label>
                        <input style="font-size:14px; text-align:center;background-color:#2F4F4F; " size=20 type = text name="nombre" class="input"  ></td>

                    </p>
                </div>

                <div>
                    &nbsp;&nbsp;Descripcion
                    <h1>    &nbsp;&nbsp;<TEXTAREA style="font-size:14px; text-align:center;background-color:#2F4F4F; " size=20 COLS=40 ROWS=7 name="descripcion"> 
                 </TEXTAREA> &nbsp;</h1>
                </div>
                <div align="center">

                    <a><button class="btn btn-orange">Proponer</button></a>
          
                </div>

            </div>



        </div>
    </div>

</form>