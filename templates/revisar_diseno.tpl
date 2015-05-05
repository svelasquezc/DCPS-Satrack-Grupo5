<html>
    {if isset($diseno)}
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}revisar_diseno.php?option=add" method="post">

            <table>
                <tbody>
                    <b>Seleccionar prediseño: </b>
                        <select name="codigo" id="mySelect" onchange="myFunction()">
                                {section loop=$diseno name=i }
                                    <option value= {$diseno[i]->get('codigo')}>  {$diseno[i]->get('codigo')}</option>                 
                                {/section}
                        </select><br />
                    <tr>
                        <td>
                            <a  class="des" id="desc"> Imagen del diseño:</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>  
                            <!-- <div class="outter"><img src="images/perro.jpg" class="image-circle"/></div> 
                            en imagen esta la ruta hay que hacer un cambio para mostrar las imagenes en vez del string
                            -->
                            {section loop=$diseno name=i }
                                <a  class="res_viabilidad" id="res_viabilidad_{$diseno[i]->get('codigo')}" name="imagen" value="{$diseno[i]->get('imagen')}" > {$diseno[i]->get('imagen')}</a>                 
                            {/section}
                        </td>
                    </tr>
                    <tr>
                        <td class="des1" id="desc1">
                            <br />
                            <a >Calificar diseño:</a> <br />
                            
                            <select name="evaluacion">
                                <option > aprobado</option>
                                <option > No aprobado</option>
                            </select><br />
                            
                            <input type="submit" value="Enviar"/>

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