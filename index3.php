<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Factura</title>
 
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.js" charset="utf-8"></script>
        <script src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
 
<script type="text/javascript">
  function borrar(obj,valor,iva,totales,descuento) {
  fila = obj.parentNode.parentNode;
  document.getElementById('tabla').removeChild(fila);
 
 
  total = total - valor;
$("#txttotal").val(total);
 
 
 
 iva  = total * 0.19;
$("#txtiva").val(iva);
 
 
totales=total + iva- descuento ;
  $("#txttotales").val(totales);
 
  }
</script>
 
</head>
 
<body>
<form name='form1' id='form1' action='guardar.php' method='post'>
 
 <table width='90%' height='180' align='center'  class='tabl' >
 
 <!--Ingreso de productos cantidad y valor -->
 
            <tr>
            <td>PRODUCTO</td>
            <td><input type='text' name='txtNombres' id='txtNombres' /></div></td>
            <td>CANTIDAD</td>
            <td><input type='text' name='txtApellidos' id='txtApellidos'/></td>
			<td>VALOR</td>
            <td><input type='text' name='txtTelefono' id='txtTelefono' /><input name="btnInsertar" id="btnInsertar" type="button" value="Insertar" class="" /></td>
            </tr>
            </table>
 
<table width='90%' height='' align='center' bgcolor='#FFFFFF' class='tabl' id="tblDatos" >
           <tbody id="tabla">
           <tr>
           <td><strong>Producto</strong></td>
           <td><strong>Cantidad</strong></td>
           <td><strong>Precio</strong></td>
            <td><strong>Subtotal</strong></td>
           <td><strong>Eliminar</strong></td>
           </tr>
 
  <!--Insertar los datos en la tabla -->
 
 <script type="text/javascript" charset="utf-8">
 var total = 0;
 var iva = 0;
 var totales = 0;
 var i = 0;
    $(function() {
		$("#btnInsertar").click(addUsuario);	
 
	});
 
	function addUsuario(){
		var Nombres=$('#txtNombres').val();
		var apellidos=$("#txtApellidos").val();
		var telefono=$("#txtTelefono").val();			
		var descuento=$("#txtDescuento").val();			
		var tablaDatos= $("#tblDatos");		
		var valor=(apellidos*telefono)
 
		if(Nombres!="" || apellidos!="" || telefono!=""  ){
        tablaDatos.append("<tr><td><input type='text' name='fruit[]' value='"+Nombres+"' autofocus readonly style='background-color:#FFF' /></td><td><input type='text' name='cantidad[]' value='"+apellidos+"'  autofocus readonly style='background-color:#FFF' aling='center' class='Campo' /></td><td><input type='text' name='precio[]' value='"+telefono+"' autofocus readonly style='background-color:#FFF' class='Campo' /></td><td><input type='text'  name='valor[]' value='"+valor+"'  autofocus readonly style='background-color:#FFF' class='Campo'/></td><td align='center'><input type='button' onclick='borrar(this,"+valor+","+iva+","+totales+","+descuento+")' value='ELIMINAR' /></td><td><input type='hidden'  name='valor[]' value='"+descuento+"'/></td></tr>");
 
 total = total + valor;
 iva  = total * 0.19;
 
 totales=total + iva - descuento
$("#txttotal").val(total);
$("#txtiva").val(iva);
$("#txtdescuento").val(descuento);
$("#txttotales").val(totales);
		reset_campos();
		}
	}
	function reset_campos(){
		$("#txtNombres").val("");
		$("#txtApellidos").val("");
		$("#txtTelefono").val("");
   }
 
$(".delete").live('click', function(event) {
	$(this).parent().parent().remove(tr);
});
</script>
</tbody>
</table>
 
 
 </form>
 
</body>
</html>