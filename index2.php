<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAGGA</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>
<link rel="stylesheet" href="css/estilos.css">
<script type="text/javascript">
  function borrar(obj) {
    fila = obj.parentNode.parentNode;
    document.getElementById('tabla').removeChild(fila);
    contador--;
    if(contador==1){
      contador=0;
    }
  }
</script>

</head>
 
<body>
  <form name='form1' id='form1' action='guardar.php' method='post'>
    <input name="btnInsertar" id="btnInsertar" type="button" value="Insertar" class="" /></td>
    <table width='90%' height='' align='center' class='tabl' id="tblDatos">
      <thead>
        <tr>
          <th rowspan="2">Apellidos y Nombres</th>
          <th rowspan="2">Parentesco</th>
          <th rowspan="2">Fecha de nacimiento</th>
          <th rowspan="2">Profesión/Ocupación</th>
          <th rowspan="2">Sueldo</th>
          <th colspan="3">Discapacidad o enfermedad crónica</th>
          <th rowspan="2">Eliminar</th>
        </tr>	               
        <tr>
          <th>SI</th>
          <th>NO</th>
          <th>TIPO</th>
        </tr>
      </thead>
      <tbody id="tabla">
      </tbody>
    </table>

  
  
  </form>
  <script type="text/javascript" src="js/validaciones.js"></script>
</body>
</html>