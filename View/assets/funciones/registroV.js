$(document).ready(function () {

    $("#formRegistroV").validate({

        rules: {
            Cedula: {
                required: true,
                digits: true
            },
            Nombre: {
                required: true,
                minlength: 3
            },
            Correo: {
                required: true,
                email: true
            }
        },

        messages: {
            Cedula: {
                required: "La cédula es obligatoria",
                digits: "Solo se permiten números"
            },
            Nombre: {
                required: "El nombre es obligatorio",
                minlength: "Debe tener al menos 3 caracteres"
            },
            Correo: {
                required: "El correo es obligatorio",
                email: "Ingrese un correo válido"
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