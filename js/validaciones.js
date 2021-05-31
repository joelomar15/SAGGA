$(document).ready(function(){
    alert("asd");
    $(".activarTipo").prop("disabled", true);

    $(".validarTipo").click(function(event) {
        if($(this).val()=="Si"){
            $(".activarTipo").prop("disabled", false);
        }else{
            $(".activarTipo").prop("disabled", true);
        }
    });

    // $("#guardarnuevo").click(function(event) {
    //     $("#divFormulario input[name='Dis-Enf']").prop('checked',false);
    //     $("#divFormulario input[type='text'],input[type='number']").val('');
    //     $("#labelTipo,#tipo").css({
    //         "display": "none"
    //     });
    //   });

});