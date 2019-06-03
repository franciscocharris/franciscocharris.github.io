<div class="row">
	<div class="col-md-12">

<fieldset>
	<legend>crear producto</legend>
	<form action="?controlador=producto&accion=regProducto" method="post" enctype="multipart/form-data" >
		<td><label  for="nombre" >nombre</label></td>
		<td><input  id="nombre" type="text" name="nombre" class="form-control"></td>

		<td><label for="precio" >precio</label></td>
		<td><input id="precio" type="number" name="precio"  class="form-control"></td>

		<td><label for="descripcion" >descripcion</label></td>
		<td><input id="descripcion" type="text" name="escripcion" class="form-control"></td>

		<td>foto: <input type="file" name="foto" class="form-control">
		<input type="submit" name="enviar" class="btn btn-primary">
	</form>
	</div>
        </div>
</td>
</fieldset>
