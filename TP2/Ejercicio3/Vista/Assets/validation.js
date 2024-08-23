$(document).ready(function() {

    $.validator.addMethod("sinEspacios", function(value, element) {
        return this.optional(element) || /^[^\s]+$/.test(value);
    }, "Los usuarios no pueden contener espacios.");
    
    $.validator.addMethod("noMatch", function(value, element, params) {
        var usuario = $(params).val();
        return value !== usuario;
    }, "La contraseña no puede ser igual al usuario");

    $("#formulario").validate({
        rules: {
            usuario: {
                required: true,
                sinEspacios: true
            },
            clave: {
                required: true,
                minlength: 8,
                alphanumeric: true,
                noMatch: "[name='usuario']"
            }
        },
        messages: {
            usuario: {
                required: "Por favor ingrese usuario",
                sinEspacios: "Los usuarios no pueden contener espacios"
            },
            clave: {
                required: "Por favor ingrese su contraseña",
                minlength: "La contraseña debe tener al menos 8 caracteres",
                alphanumeric: "La contraseña debe ser alfanumérica",
                noMatch: "La contraseña no puede ser igual al usuario"
            }
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.mb-3').append(error);
        },
        highlight: function(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
