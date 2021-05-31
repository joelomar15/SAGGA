<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAGGA</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>
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
    <table width='90%' height='' align='center' bgcolor='#FFFFFF' class='tabl' id="tblDatos" border="1px">
      <tbody id="tabla">
        <tr>
          <td rowspan="2">Apellidos y Nombres</td>
          <td rowspan="2">Parentesco</td>
          <td rowspan="2">Edad</td>
          <td rowspan="2">Profesión/Ocupación</td>
          <td colspan="3">
          Discapacidad o enfermedad crónica 
          <td rowspan="2">Eliminar</td>
        </tr>	               
        <tr>
          <td>SI</td>
          <td>NO</td>
          <td>TIPO</td>
        </tr>
        <!--Insertar los datos en la tabla -->


      </tbody>
    </table>

  
  
  </form>
 
</body>
</html>