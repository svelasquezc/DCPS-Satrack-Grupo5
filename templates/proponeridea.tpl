<div class="square">
<form action="{$gvar.l_global}proponeridea.php?option=add" method="post">
  <p>
    <label for="textfield">Nombre de idea:</label>
    <input type="text" name="nombre">
  </p>
  <p>Descripcion</p>
  <p>
    <textarea name="descripcion" cols="40" rows="10"></textarea>
  </p>
  <p>
    <label for="select">Necesidad:</label>
    <select name="necesidad">
    <option > Seleccione necesidad</option>
    {section loop=$necesidad name=i}
    <option value="{$necesidad[i]->get('codigo')}">{$necesidad[i]->get('nombre')}</option>
    {/section}
    </select>
  </p>
  <p>
    <input type="submit" name="submit" value="Enviar">
    <input type="reset" name="reset" value="Cancelar">
  </p>
  <p>&nbsp;</p>
</form>
</div>