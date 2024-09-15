$("#formAuto").validate({
    rules:{
        Patente:{
            minlength: 7,
            maxlength: 10,
            required: true
        },
        Marca:{
            required: true
        },
        Modelo:{
            required: true
        },
        DniDuenio:{
            minlength: 8,
            maxlength: 10,
            digits: true,
            required: true
        }
    },
    messages: {
        Patente: {
            required: "Dato requerido",
            minlength: "Ingrese al menos 7 dígitos",
            maxlength: "Ingrese hasta 10 dígitos"
        },
        Marca:{
            required: "Dato requerido",
        },
        Modelo:{
            required: "Dato requerido",
        },
        DniDuenio:{
            required: "Dato requerido",
            minlength: "Ingrese al menos 8 dígitos",
            maxlength: "Ingrese hasta 10 dígitos",
            digits: "El dni solo debe contener números"
        }
    }  
});
