$(document).ready(function(){
    
  $.validator.addMethod("ochoHoras", function(value, element) {
    return this.optional(element) || (value <=8 && value > 0);
}, "El campo solo puede contener numeros.");
    
    $("#formulario").validate({
        rules:{
          lunes:{
                required: true,
                number: true,
                normalizer: function(value){
                    return $.trim(value); 
                }
            },
            martes:{
              required: true,
              number: true,
              normalizer: function(value){
                  return $.trim(value); 
              }
          
            },
            miercoles:{
            required: true,
            number: true,
            normalizer: function(value){
                return $.trim(value); 
            }
            },
            jueves:{
            required: true,
            number: true,
            normalizer: function(value){
              return $.trim(value); 
            }
            },
            viernes:{
            required: true,
            number: true,
            normalizer: function(value){
            return $.trim(value); 
            }
          },
        },
        messages: {
            
            lunes:{
                required: "Por favor ingrese las horas de cursado",
                number: "Ingrese una hora valida",
            },
            martes:{
              required: "Por favor ingrese las horas de cursado",
              number: "Ingrese una hora valida",
          },
          miercoles:{
            required: "Por favor ingrese las horas de cursado",
            number: "Ingrese una hora valida",
        },
        jueves:{
          required: "Por favor ingrese las horas de cursado",
          number: "Ingrese una hora valida",
      },
      viernes:{
        required: "Por favor ingrese las horas de cursado",
        number: "Ingrese una hora valida",
    },
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

