$(document).ready(function(){
    var contador=0;
    
        $("#btnInsertar").click(function(){
            if(contador==0){
              contador=1;
              addFila();	
            }else{
              var verdad=false;
              var stringValidar="";
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
                stringValidar=stringValidar+"-"+verdad;
              }
              //alert(stringValidar);
              
              if(verdad&&stringValidar.includes("false")==false){
                addFila();
              }else{
                alert("Existen campos en la tabla que estan vacios\nVerifique...");
              }
            }
        });	
      
    function addFila(){
      
      var tablaDatos= $("#tblDatos");	
      
      tablaDatos.append("<tr><td><input type='text' name='nombreApellido"+contador+"' id='nombreApellido"+contador+"' class='' /></td><td><input type='text' name='parentesco"+contador+"' id='parentesco"+contador+"' class='' /></td><td><input type='text' name='edad"+contador+"' id='edad"+contador+"' class='' /></td><td><input type='text'  name='ProfesionOcupacion"+contador+"' id='ProfesionOcupacion"+contador+"' class='' /></td><td><input type='radio' id='siDis-Enf"+contador+"' name='Dis-Enf"+contador+"' value='Si' class='validarTipo"+contador+"' ></td><td><input type='radio' id='noDis-Enf"+contador+"' name='Dis-Enf"+contador+"' value='No' class='validarTipo"+contador+"' ></td><td><input type='text' name='tipo"+contador+"' id='tipo"+contador+"' class='activarTipo"+contador+"' /></td><td><input type='button' class='Eliminar' onclick='borrar(this)' value='ELIMINAR' /></td></tr>");
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

    
});