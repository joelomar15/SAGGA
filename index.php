<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="js/validaciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

	<div class="container">
	<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo familiar</h4>
      </div>
      <div class="modal-body" id="divFormulario">
        	<label>Apellidos y Nombres</label>
        	<input type="text" name="" id="nombreApellido" class="form-control input-sm">
        	<label>Parentesco</label>
        	<input type="text" name="" id="parentesco" class="form-control input-sm">
        	<label>Edad</label>
        	<input type="number" name="" id="edad" class="form-control input-sm">
        	<label>Profesión/Ocupación</label>
        	<input type="text" name="" id="profesionOcupacion" class="form-control input-sm">
            <label>Discapacidad o enfermedad crónica</label><br>
            <input type="radio" id="siDis-Enf" name="Dis-Enf" value="Si">
            <label for="si">Si</label><br>
            <input type="radio" id="noDis-Enf" name="Dis-Enf" value="No">
            <label for="no">No</label><br>
            <label id="labelTipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
        <label>Apellidos y Nombres</label>
        	<input type="text" name="" id="nombreApellidoActualizar" class="form-control input-sm">
        	<label>Parentesco</label>
        	<input type="text" name="" id="parentescoActualizar" class="form-control input-sm">
        	<label>Edad</label>
        	<input type="number" name="" id="edadActualizar" class="form-control input-sm">
        	<label>Profesión/Ocupación</label>
        	<input type="text" name="" id="profesionOcupacionActualizar" class="form-control input-sm">
            <label>Discapacidad o enfermedad crónica</label><br>
            <input type="radio" id="siDis-EnfActualizar" name="Dis-Enf" value="Si">
            <label for="si">Si</label><br>
            <input type="radio" id="noDis-EnfActualizar" name="Dis-Enf" value="No">
            <label for="no">No</label><br>
            <label id="labelTipo">Tipo</label>
            <input type="text" name="tipo" id="tipoActualizar" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
	});
</script>
<script src="js/funciones.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          nombreApellido=$('#nombreApellido').val();
          //alert(nombreApellido);
          parentesco=$('#parentesco').val();
          //alert(parentesco);
          edad=$('#edad').val();
          //alert(edad);
          profesionOcupacion=$('#profesionOcupacion').val();
          //alert(profesionOcupacion);
          tipo=$('#tipo').val();
          //alert(tipo);
          DisEnf=$("input[name='Dis-Enf']").val();
          alert(DisEnf);
          
            agregardatos(nombreApellido,parentesco,edad,profesionOcupacion,tipo,DisEnf);
        });

        function agregardatos(nombreApellido,parentesco,edad,profesionOcupacion,tipo,DisEnf){
        alert(DisEnf);
        if(DisEnf=="Si"){
            alert("Si");
            $("#tabla>tbody").append("<tr><td>"+nombreApellido+"</td><td>"+parentesco+"</td><td>"+edad+"</td><td>"+profesionOcupacion+"</td><td>"+DisEnf+"</td><td></td><td>"+tipo+"</td></tr>");

        }else if(DisEnf=="No"){
            alert("No");
	        $("#tabla>tbody").append("<tr><td>"+nombreApellido+"</td><td>"+parentesco+"</td><td>"+edad+"</td><td>"+profesionOcupacion+"</td><td></td><td>"+DisEnf+"</td><td>"+tipo+"</td></tr>");

        }

        $('#actualizadatos').click(function(){
          //actualizaDatos();
        });

    });
</script>