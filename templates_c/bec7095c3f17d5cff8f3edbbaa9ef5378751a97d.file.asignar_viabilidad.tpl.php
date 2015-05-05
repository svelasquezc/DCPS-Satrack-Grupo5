<?php /* Smarty version Smarty-3.0.9, created on 2015-05-05 20:40:47
         compiled from "C:/wamp/www/ProyectoDCPS/templates\asignar_viabilidad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:469155490eaf905522-29118126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bec7095c3f17d5cff8f3edbbaa9ef5378751a97d' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS/templates\\asignar_viabilidad.tpl',
      1 => 1430789748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469155490eaf905522-29118126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <?php if (isset($_smarty_tpl->getVariable('prediseno',null,true,false)->value)){?>
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
asignar_viabilidad.php?option=add" method="post">

            <table>
                <tbody>

                    <b>Código de viabilidad: </b> <input type="text" name="codigo" /><br />
                    <b>Código del prediseño: </b>
                        <select name="prediseno" >
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('prediseno')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <option >  <?php echo $_smarty_tpl->getVariable('prediseno')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
</option>                 
                                <?php endfor; endif; ?>
                        </select><br />
                    <b>Resultado: </b>
                        <select name="resultado" >
                                <option > Viable</option>
                                <option > No viable</option>
                                <option > Modificable</option>
                        </select><br />
                        <!--se debe usar variable sesion para saber quien esta logeado -->
                    <input type="hidden" name="analista" value="2345" />
                    <a >Causa:</a> <br />
                    <textarea name = "causa" rows = "8" cols = "40" ></textarea> <br />
                    <input type="submit" value="Asignar Viabilidad" />
                </tbody>
            </table>

            <!--
                        <script>
                            function val()
                            {
                                if (document.getElementById("textAread_id").value == null || document.getElementById("textAread_id").value == "")
                                    alert("El campo: 'Nueva descripcion esta vacio'.")
                                else
                                        act Modificar_idea.php?option = pr
                            }
                        </script>
                        
                <script>
                function myFunction() {
                    var x = $("#mySelect").val();
                    $('.idea_descripcion').hide();
                    $('#idea_descripcion_' + x).show();

                    $('.des').hide();
                    $('#desc').show();

                    $('.des1').hide();
                    $('#desc1').show();

                }
                $(document).ready(function () {
                    $('.idea_descripcion').hide();
                    $('.des').hide();
                    $('.des1').hide();
                });
            </script>
            -->
        </form>
    </body>
    <?php }?>
</html>