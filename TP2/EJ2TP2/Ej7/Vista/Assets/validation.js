$(document).ready(function(){
    

    $("#formulario").validate({
        rules:{
            numero1:{
                required: true,
                number: true
            },
            numero2:{
                required: true,
                number: true
            },
            Operacion:{
                required: true
            }
        },
        messages: {
            numero1: {
                required: "Por favor ingrese un numero",
                number: "El campo solo puede contener numeros"
            },
            numero2:{
                required: "Por favor ingrese un numero",
                number: "El campo solo puede contener numeros"
            },
            Operacion:{
                required: "Por favor seleccione una opcion"
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

