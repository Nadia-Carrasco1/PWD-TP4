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