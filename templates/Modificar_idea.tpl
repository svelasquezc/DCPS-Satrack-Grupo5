
<html>
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}Modificar_idea.php?option=Modificaridea" method="post">

            Modificar idea:
            <table>
                <tbody>


                    <tr>
                        <td><select name="ddl" id="mySelect" onchange="myFunction()" >
                                <option > Seleccione idea</option>
                                {section loop=$ide name=i }

                                    <option value= {$ide[i]->get('nombre')}>  {$ide[i]->get('nombre')}</option>                 
                                {/section}

                            </select></td>
                    </tr>
                    <tr>
                        <td>
                            <a  class="des" id="desc"> Descripcion actual :</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>  
                            {section loop=$ide name=i }
                                <a  class="idea_descripcion" id="idea_descripcion_{$ide[i]->get('nombre')}" > {$ide[i]->get('descripcion')}</a>                 
                            {/section}

                        </td>
                    </tr>
                    <tr>
                        <td class="des1" id="desc1">
                            <a >Nueva descripcion:</a> </br>

                            <textarea id="textAread_id" name = "descripcion" rows = "8" cols = "40" class = "input" WRAP ></textarea> </br>
                            <!-- <input type="button" onclick="val()" value="Modificar">   -->
                            <input type="submit" value="Modificar" />


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
</html>