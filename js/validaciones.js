$(document).ready(function(){
    $("#labelTipo,#tipo").css({
        "display": "none"
    }); 

    $("input[name='Dis-Enf']").click(function(event) {
        if($(this).val()=="Si"){
            $("#labelTipo,#tipo").css({
                "display": "block"
            }); 
        }else{
            $("#labelTipo,#tipo").css({
                "display": "none"
            });
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