
console.log('cargado');

//selectIntereses

$( document ).ready(function() {
    $("#selectIntereses").change(function () {

        var opc = this.value;
        //console.log('opc' + opc);  
        
        $('#selectOpcIntereses').empty();

        if(opc==0){
            $('#selectOpcIntereses').append('<option value="0">No aplica</option>');

        }else if(opc==1){
            $('#selectOpcIntereses').append('<option value="0">No aplica</option>');           

        }
        else if(opc==2){
            $('#selectOpcIntereses').append('<option value="1">Lic. en Derecho</option>');
            $('#selectOpcIntereses').append('<option value="2">Lic. en Finanzas</option>');

        }
        else if(opc==3){
            $('#selectOpcIntereses').append('<option value="3">Mtria. Admon de Negocios</option>');
            $('#selectOpcIntereses').append('<option value="4">Mtria. Direccion de Proyectos</option>');
        }
        
        
        
    
    
        
    });
});




