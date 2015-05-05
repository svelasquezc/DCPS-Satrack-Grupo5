<html>
    {if isset($prediseno)}
    <script lang="javascript" src="js/jquery-2.1.3.min.js"></script>
    <body>    
        <form action="{$gvar.l__global}asignar_viabilidad.php?option=add" method="post">

            <table>
                <tbody>

                    <b>Código de viabilidad: </b> <input type="text" name="codigo" /><br />
                    <b>Código del prediseño: </b>
                        <select name="prediseno" >
                                {section loop=$prediseno name=i }
                                    <option >  {$prediseno[i]->get('codigo')}</option>                 
                                {/section}
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
    {/if}
</html>