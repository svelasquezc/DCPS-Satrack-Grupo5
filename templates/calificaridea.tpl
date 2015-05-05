
<html>
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}calificaridea.php?option=calificar" method="post">

            Realizar Calificacion:
            <table>
                <tbody>


                    <tr>
                        <td><select name="idea" id="mySelect" onchange="myFunction()" >
                                <option > Seleccione idea</option>
                                {section loop=$idea name=i }

                                    <option value= {$idea[i]->get('nombre')}>  {$idea[i]->get('nombre')}</option> 
                                                   
                                {/section}

                            </select></td>
                    </tr>
                    <tr>
                        <td>
                            <a  class="des" id="desc"> Descripcion:</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>  
                            {section loop=$idea name=i }
                                <a  class="idea_descripcion" id="idea_descripcion_{$idea[i]->get('nombre')}" > {$idea[i]->get('descripcion')}</a>                 
                            {/section}

                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <a  class="nec" id="nece"> Necesidad:</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>  
                            {section loop=$idea name=i }
                                <a  class="idea_necesidad" id="idea_necesidad_{$idea[i]->get('nombre')}" > {$idea[i]->get('necesidad')}</a>                 
                            {/section}

                        </td>
                    </tr>
                    <tr>
                    
                        <td class="des1" id="desc1">
                            <a >Califique la idea:</a> </br>

                            1   <input type="radio" name="calificacion" value="1"> 2   <input type="radio" name="calificacion" value="2"> 3   <input type="radio" name="calificacion" value="3"> 4   <input type="radio" name="calificacion" value="4"> 5   <input type="radio" name="calificacion" value="5"></br>
                            <!-- <input type="button" onclick="val()" value="Calificar">   -->
                            <input type="submit" value="Calificar" />


                        </td>


                    </tr>

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
            
            -->




            <script>
                function myFunction() {
                    var x = $("#mySelect").val();
                    $('.idea_descripcion').hide();
                    $('#idea_descripcion_' + x).show();

                    $('.des').hide();
                    $('#desc').show();
                    
                    $('.idea_necesidad').hide();
                    $('#idea_necesidad_' + x).show();

                    $('.nec').hide();
                    $('#nece').show();

                    $('.des1').hide();
                    $('#desc1').show();
                    
                    

                }
                $(document).ready(function () {
                    $('.idea_descripcion').hide();
                    $('.des').hide();
                     $('.idea_necesidad').hide();
                    $('.nec').hide();
                    $('.des1').hide();
                });
            </script>
        </form>
    </body>
</html>