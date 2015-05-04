<form action="{$gvar.l__global}Programar_reunion.php?option=Agregar_reuniones" method="post">
    <table>
        <tbody>
            <tr>
                <td>Seleccione fecha de la reunion: </td>
                <td> <input name="fecha" type="date"></td>
            </tr>
            <tr>
                <td>Seleccionar idea:</td>
                <td><select name="ddl">
                        <option value=""> Seleccione idea</option>
                        {section loop=$ide name=i}
                            <option value= {$ide[i]->get('id')}>  {$ide[i]->get('nombre')}</option>
                        {/section}

                    </select></td>
            </tr>
            <tr>
                <td> <input type="submit" value="Programar reunion" name="reunion" /></td>

            </tr>

        </tbody>
    </table>
</form>

{section loop=$ide name=i}
    Id Idea:  {$ide[i]->get('id')}
    Nombre Idea :{$ide[i]->get('nombre')}</br>
{/section}     

{section loop=$reuniones name=i}
    Id de la reunion:  {$reuniones[i]->get('id')}
    Fecha de la reunion:{$reuniones[i]->get('fecha')}
    Nombre de la idea: {$reuniones[i]->auxiliars['Nombre_de_la_idea']}</br>
{/section}    