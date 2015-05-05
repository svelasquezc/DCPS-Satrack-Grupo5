<html>
    {if isset($viabilidad)}
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}calificar_prediseno.php?option=calificar" method="post">

            <table>
                <tbody>
                    <b>Código del prediseño: </b>
                        <select name="codigo" id="mySelect" onchange="myFunction()">
                                {section loop=$viabilidad name=i }
                                    <option value= {$viabilidad[i]->get('prediseno')}>  {$viabilidad[i]->get('prediseno')}</option>                 
                                {/section}
                        </select><br />
                    <tr>
                        <td>
                            <a  class="des" id="desc"> Resultado:</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>  
                            {section loop=$viabilidad name=i }
                                <a  class="res_viabilidad" id="res_viabilidad_{$viabilidad[i]->get('prediseno')}" > {$viabilidad[i]->get('resultado')}</a>                 
                            {/section}
                        </td>
                    </tr>
                    <tr>
                        <td class="des1" id="desc1">
                            <br />
                            <a >Causa:</a> <br />
                            
                            {section loop=$viabilidad name=i }
                                <a  class="res_causa" id="res_causa_{$viabilidad[i]->get('prediseno')}" > {$viabilidad[i]->get('causa')}</a>                 
                            {/section}
                            <br />
                             <a >Mas Detalle</a> <br /><br />
                            <!--se debe usar variable sesion para saber quien esta logeado -->
                            <input type="hidden" name="gerente" value="3456" />
                            <input type="submit" value="Aceptado" name="resultado" /><br /><br />
                            <input type="submit" value="Rechazado" name="resultado" />

                        </td>

                    </tr>
                    
                </tbody>
            </table>
            
            <script>
                function myFunction() {
                    var x = $("#mySelect").val();
                    $('.res_viabilidad').hide();
                    $('#res_viabilidad_' + x).show();

                    $('.des').hide();
                    $('#desc').show();
                    
                    $('.res_causa').hide();
                    $('#res_causa_' + x).show();
                    
                    $('.des1').hide();
                    $('#desc1').show();

                }
                $(document).ready(function () {
                    $('.idea_descripcion').hide();
                    $('.des').hide();
                    $('.des1').hide();
                });
            </script>
        </form>
    </body>
    {/if}
</html>