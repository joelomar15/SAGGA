<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAGGA</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
            </td>
            
          </tr>
          <tr>
            <td>SI</td>
            <td>NO</td>
            <td>TIPO</td>
          </tr>
 
  <!--Insertar los datos en la tabla -->
 
 <script type="text/javascript" charset="utf-8">
    var contador=0;
    
        $("#btnInsertar").click(function(){
            if(contador==0){
              contador=1;
              addFila();	
            }else{
              var verdad=false;
              //alert(contador);
              for(let i=1;i<contador;i++){
                if(($("#nombreApellido"+i).val()==""||$("#parentesco"+i).val()==""||$("#edad"+i).val()==""||$("#ProfesionOcupacion"+i).val()=="")||(!$("input[name='Dis-Enf"+i+"']").is(':checked'))){
                  verdad=false;
                }else{
                  var radioDisEnfer = $('input[name=Dis-Enf'+i+']:checked', '#form1').val();
                  if(radioDisEnfer=="No" && $("#tipo"+i).val()==""){
                    verdad=true;
                  }else if(radioDisEnfer=="Si" && $("#tipo"+i).val()==""){
                    verdad=false;   
                  }else{
                    verdad=true;
                  }
                }
              }
              if(verdad){
                addFila();
              }else{
                alert("Debe llenar todos los campos");
              }
            }
        });	
	    
    function addFila(){
      
      var tablaDatos= $("#tblDatos");	
      
      tablaDatos.append("<tr><td><input type='text' name='nombreApellido"+contador+"' id='nombreApellido"+contador+"' class='' /></td><td><input type='text' name='parentesco"+contador+"' id='parentesco"+contador+"' class='' /></td><td><input type='text' name='edad"+contador+"' id='edad"+contador+"' class='' /></td><td><input type='text'  name='ProfesionOcupacion"+contador+"' id='ProfesionOcupacion"+contador+"' class='' /></td><td><input type='radio' id='siDis-Enf"+contador+"' name='Dis-Enf"+contador+"' value='Si' class='validarTipo"+contador+"' ></td><td><input type='radio' id='noDis-Enf"+contador+"' name='Dis-Enf"+contador+"' value='No' class='validarTipo"+contador+"' ></td><td><input type='text' name='tipo"+contador+"' id='tipo"+contador+"' class='activarTipo"+contador+"' /></td><td><input type='button' onclick='borrar(this)' value='ELIMINAR' /></td></tr>");
      var classTipo=".activarTipo"+contador;
      $(classTipo).prop('disabled', true);
      var classOption = ".validarTipo"+contador;
      $(classOption).click(function(event) {
          if($(this).val()=="Si"){
              $(classTipo).prop('disabled', false);
          }else{
              $(classTipo).prop('disabled', true);
              $(classTipo).val("");
          }
      });
      contador++;
    }
</script>

</tbody>
</table>
 
 
 </form>
 
</body>
</html>