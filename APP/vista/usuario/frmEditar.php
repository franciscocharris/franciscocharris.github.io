<fieldset>
	<legend>editar usuario</legend>
	<form action="?controlador=usuario&accion=edtUsuario" method="post">
	<table>
		<tr>
			<td><label>nombre</label></td>
			<td><input type="text" name="nombre" value="<?php echo $datos['usu_nombre']; ?>" required=""></td>
		</tr>
		<tr>
			<td><label>correo</label></li></td>
			<td><input type="email" name="correo" value="<?php echo $datos['usu_correo']; ?>" required=""></td>
		</tr>
		<tr>
			<td><label>telefono</label></td>
			<td><input type="text" name="telefono" value="<?php echo $datos['usu_telefono']; ?>" required=""></td>
		</tr>
	</table>
	<input type="hidden" name="id" value="<?php echo $datos['usu_id']; ?>">
	<input type="submit" name="enviar" value="guardar">
</form>
</fieldset>