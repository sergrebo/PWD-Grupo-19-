$(document).ready(function(){
    
   
    
    $("#formulario").validate({
        rules:{
            numero:{
                required: true,
                number: true,
                normalizer: function(value){
                    return $.trim(value); 
                }
            },
        },
        messages: {
            
            numero:{
                required: "Por favor ingrese un numero",
                number: "Ingrese un numero valido",
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

