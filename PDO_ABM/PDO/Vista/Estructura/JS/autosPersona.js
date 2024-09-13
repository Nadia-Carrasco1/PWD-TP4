$("#formDni").validate({
    rules: {
        NroDni: {
            minlength: 8,
            maxlength: 10,
            digits: true,
            required: true
        }
    },
    messages: {
        NroDni: {
            required: "Dato requerido",
            minlength: "Ingrese al menos 8 dígitos",
            maxlength: "Ingrese hasta 10 dígitos",
            digits: "El dni solo debe contener números"
        }
    }  
})