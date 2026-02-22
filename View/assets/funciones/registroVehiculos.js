$(document).ready(function () {

    $("#formRegistroVehiculo").validate({

        rules: {
            Marca: {
                required: true,
                minlength: 2
            },
            Modelo: {
                required: true,
                minlength: 1
            },
            Color: {
                required: true,
                minlength: 3
            },
            Precio: {
                required: true,
                number: true,
                min: 1
            },
            IdVendedor: {
                required: true
            }
        },

        messages: {
            Marca: {
                required: "La marca es obligatoria",
                minlength: "Debe tener al menos 2 caracteres"
            },
            Modelo: {
                required: "El modelo es obligatorio",
                minlength: "Debe tener al menos 1 caracter"
            },
            Color: {
                required: "El color es obligatorio",
                minlength: "Debe tener al menos 3 caracteres"
            },
            Precio: {
                required: "El precio es obligatorio",
                number: "Ingrese un número válido",
                min: "Debe ser mayor a 0"
            },
            IdVendedor: {
                required: "Debe seleccionar un vendedor"
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