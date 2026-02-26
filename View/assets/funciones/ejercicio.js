$(document).ready(function () {

    $("#formRegistroEjercicio").validate({

        rules: {
            Identificacion: {
                required: true,
            },
            Monto: {
                required: true,
                number: true,
                min: 1
            },
            TipoEjercicio: {
                required: true
            }
        },

        messages: {
            Identificacion: {
                required: "Campo requerido",
            },
            Monto: {
                required: "Campo requerido",
                number: "Ingrese un número válido",
                min: "Debe ser mayor a 0"
            },
            TipoEjercicio: {
                required: "Campo requerido"
            }
        },

        errorElement: "span",
        errorClass: "text-white",

        highlight: function(element) {
            $(element).addClass("is-invalid");
        },

        unhighlight: function(element) {
            $(element).removeClass("is-invalid");
        }

    });

});