<fieldset>
	<legend>crear producto</legend>
	<form action="?controlador=producto&accion=edtProducto" method="post" >
		<table border="1">
			<tr>
				<td><label>nombre</label></td>
				<td><input type="text" name="nombre" value="<?php echo $datos['pro_nombre']; ?>"></td>
			</tr>
			<tr>
				<td><label>precio</label></td>
				<td><input type="number" name="precio" value="<?php echo $datos['pro_precio']; ?>"></td>
			</tr>
			<tr>
				<td><label>descripcion</label></td>
				<td><input type="text" name="escripcion" value="<?php echo $datos['pro_escripcion']; ?>"></td>
			</tr>
		</table>
		<input type="hidden" name="id" value="<?php echo $datos['pro_id']; ?>">
		<input type="submit" name="enviar">
	</form>
</fieldset>