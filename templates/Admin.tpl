<form action="{$gvar.l__global}Admin.php?option=validar" method="post">

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