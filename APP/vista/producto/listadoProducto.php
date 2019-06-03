<a href="?controlador=producto&accion=frmCrearProducto" class="btn btn-primary">crear producto</a>
<?php
echo "<table class='table table-hover'>";

echo "<th>NOMBRES</th>";
echo "<th>PRECIO</th>";
echo "<th>DESCRIPCION</th>";
echo "<th>FOTO</th>";
echo "<th></th>";
echo "<th></th>";
echo "</tr>";
foreach ($datos as $key => $value) {
	
echo "<th>".$value['pro_nombre']."</th>";
echo "<th>".$value['pro_precio']."</th>";
echo "<th>".$value['pro_escripcion']."</th>";
echo "<th>".$value['pro_foto']."</th>";
echo "<th> <a href='?controlador=producto&accion=frmEditar&id=".$value['pro_id']."'>EDITAR<a/></th>";
echo "<th> <a href='?controlador=producto&accion=eliminar&id=".$value['pro_id']."'>ELIMINAR<a/></th>";
echo "</tr>";
}
echo "</table >";