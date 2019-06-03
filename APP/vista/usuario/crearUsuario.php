<fieldset>
	<legend>crear usuario</legend>
	<form action="?controlador=usuario&accion=regUsuario" method="post">

			<td><label  for="nombre">nombre</label></td>
			<td><input id="nombre"   type="text" name="nombre" required=""  class="form-control"></td>
			<td><label for="correo">correo</label></li></td>
			<td><input id="correo" type="email" name="correo" required="" class="form-control"></td>
			<td><label for="telefono">telefono</label></td>
			<td><input id="telefono" type="text" name="telefono" required="" class="form-control"></td>
	
	<input type="submit" name="enviar" value="guardar" class="btn btn-primary">
</form>
</fieldset>