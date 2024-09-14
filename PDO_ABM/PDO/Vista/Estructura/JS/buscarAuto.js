$("#formBuscarAuto").validate({
    rules:{
        Patente:{
            minlength: 7,
            maxlength: 10,
            required: true
        }
    },
    messages: {
        Patente: {
            required: "Dato requerido",
            minlength: "Ingrese al menos 7 dígitos",
            maxlength: "Ingrese hasta 10 dígitos"
        }
    }  
});

$(document).ready(function() {
    $("#formAccionBuscarAuto").validate({
        rules: {
            Marca: {
                required: true
            },
            Modelo: {
                required: true
            }
        },
        messages: {
            Marca: {
                required: "Dato requerido"
            },
            Modelo: {
                required: "Dato requerido"
            }
        }
    });
});