$(document).ready(function(){
    

    $("#formulario").validate({
        rules:{
            edad:{
                required: true,
                number: true,
                min: 0,
                max:120,
                normalizer: function(value){
                    return $.trim(value); 
                }
            },
            estudiante:{
                required: true
            }
        },
        messages: {
            edad:{
                required: "Por favor ingrese su edad",
                number: "Ingrese un numero valido",
                min: "La edad no puede ser menor a 0",
                max: "La edad no puede ser mayor a 120"
            },
            estudiante:{
                required: "Por favor seleccione NO o SI"
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

