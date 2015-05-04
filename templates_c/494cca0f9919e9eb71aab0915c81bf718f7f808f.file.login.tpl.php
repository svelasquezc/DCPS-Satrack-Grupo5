<?php /* Smarty version Smarty-3.0.9, created on 2015-04-23 22:30:43
         compiled from "C:/wamp/www/ProyectoDCPS/templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1315355395673c74fe2-98416010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '494cca0f9919e9eb71aab0915c81bf718f7f808f' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\login.tpl',
      1 => 1429821024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1315355395673c74fe2-98416010',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
login.php?option=validarlogin" method="post">
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/alertify/lib/alertify.min.js"></script>
        <script src="js/app.js" type="text/javascript"></script>
        <link href="css/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="js//alertify/themes/alertify.default.css">
        <link rel="stylesheet" type="text/css" href="js/alertify/themes/alertify.core.css">
    <title>Login</title>
    <body <?php if (isset($_smarty_tpl->getVariable('alerta',null,true,false)->value)){?> onload="<?php echo $_smarty_tpl->getVariable('alerta')->value;?>
"<?php }?>>

    <div class="container">
        <div class="row login_box">
            <div class="col-md-12 col-xs-12 login" align="center">
                <div class="line"><h1>Satrack</h1></div>
                <div class="outter"><img src="images/perro.jpg" class="image-circle"/></div>   
                <h3>Bienvenido</h3><br/><br/><br/><br/><br/>
            

            <div class="col-md-12 col-xs-12 login_control">

                <div class="control">
                    <input type="text" class="form-control" name="Usuario" placeholder="Usuario"/>
                </div>

                <div class="control">
                    <input type="password" class="form-control" name="Contrasena" placeholder="Contraseña"/>
                </div>
                <div class="boton" align="center">

                    <button class="btn btn-orange">Ingresar</button></a>


                </div>

            </div>
            </div>


        </div>
    </div>
</body>
    <form>