$(document).ready(function(){
    
    $.validator.addMethod("onlyLetters", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
    }, "El campo solo puede contener letras y espacios.");
    
    
    $("#formulario").validate({
        rules:{
            nombre:{
                required: true,
                minlength: 2,
                onlyLetters: true,
                normalizer: function(value){
                    return $.trim(value); //elimina espacios en blanco
                }
            },
            apellido:{
                required: true,
                minlength: 2,
                onlyLetters: true,
                normalizer: function(value){
                    return $.trim(value); 
                }
            },
            edad:{
                required: true,
                number: true,
                min: 0,
                max:120,
                normalizer: function(value){
                    return $.trim(value); 
                }
            },
            direccion:{
                required: true,
                minlength: 4,
                normalizer: function(value){
                    return $.trim(value); 
                }
            },
            opcion:{
                required: true,
                normalizer: function(value){
                    return $.trim(value); 
                }
            },
            genero:{
                required: true,
                normalizer: function(value){
                    return $.trim(value); 
                }
            },
            deporte:{
                required: true,
                normalizer: function(value){
                    return $.trim(value); 
                }
            }
        },
        messages: {
            nombre: {
                required: "Por favor ingrese su nombre",
                minlength: "El nombre debe tener al menos 2 caracteres",
                onlyLetters: "El nombre solo puede contener letras y espacios"
            },
            apellido:{
                required: "Por favor ingrese su apellido",
                minlength: "El apellido debe tener al menos 2 caracteres",
                onlyLetters: "El apellido solo puede contener letras y espacios"
            },
            edad:{
                required: "Por favor ingrese su edad",
                number: "Ingrese un numero valido",
                min: "La edad no puede ser menor a 0",
                max: "La edad no puede ser mayor a 120"
            },
            direccion:{
                required: "Por favor ingrese su direccion",
                minlength: "La direccion debe tener al menos 4 caracteres"
            },
            opcion:{
                required: "Por favor marque una opcion"
            },
            genero:{
                required: "Por favor seleccione una opcion"
            },
            deporte:{
                required: "Por favor marque al menos una opcion"
            }
        },
        errorElement: 'div',

  errorPlacement: function (error, element) {
    error.addClass('invalid-feedback');
    element.closest('.mb-3').append(error);
  },

  highlight: function (element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
  },

  unhighlight: function (element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
  },

  submitHandler: function (form) {
    form.submit();
  }
    });
});

