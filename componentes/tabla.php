
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>GRUPO FAMILIAR DEL ESTUDIANTE</h2>
		<table class="table table-hover table-condensed table-bordered" id="tabla">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
		<tr>
			<td rowspan="2">Apellidos y Nombres</td>
			<td rowspan="2">Parentesco</td>
			<td rowspan="2">Edad</td>
			<td rowspan="2">Profesión/Ocupación</td>
			<td colspan="3">
				Discapacidad o enfermedad crónica 
				<td rowspan="2">Editar</td>
				<td rowspan="2">Eliminar</td>
		</tr>	
			</td>
			
		</tr>
		<tr>
			<td>SI</td>
			<td>NO</td>
			<td>TIPO</td>
		</tr>
	
		</table>
	</div>
</div>