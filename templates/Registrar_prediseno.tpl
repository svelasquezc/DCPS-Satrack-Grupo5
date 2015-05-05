<form action="{$gvar.l__global}Registrar_prediseno.php?option=Agregar_prediseno" method="post">

<header>
    <title>Opciones del empleado</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/opciones.css">
</header>
<body>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div id="sidebar-wrapper" class="sidebar-toggle">
                <ul class="sidebar-nav">
                    <li>
                        <a href="opciones_especialista.php">Proponer Idea</a>
                    </li>
                    <li>
                        <a href="#item2">Realizar Calificación</a>
                    </li>
                    <li>
                        <a href="#item3">Modificar Idea</a>
                    </li>
                    <li>
                        <a href="#item3">Definir dispositivo</a>
                    </li>
                    <li>
                        <a href="#item3">Revisar diseño</a>
                    </li>
                    <li>
                        <a href="Registrar_prediseno.php">Registrar prediseño</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <table>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ingrese el codigo del prediseño por favor: </td>
                <td><input type="text" name="codigo" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Registrar" name="Registrar" /></td>
            </tr>
        </tbody>
    </table>
</body>
</form>