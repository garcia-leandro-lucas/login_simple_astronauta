$(function(){
  
  var mayusculas = new RegExp("^(?=.*[A-Z].*[A-Z])");
  var minusculas = new RegExp("^(?=.*[a-z].*[a-z])");
  var numeros = new RegExp("^(?=.*[0-9].*[0-9].*[0-9])");
  var cantidad_de_caracteres = new RegExp("^(?=.{8,12})");
  var caracter_especial = new RegExp("^(?=.*[!@#$%&*])");
  
  var reg_exp = [mayusculas, minusculas, numeros, cantidad_de_caracteres, caracter_especial];
  var id_reg_exp = [ $("#mayusculas"), $("#minusculas"), $("#numeros"), $("#cantidad_de_caracteres"), $("#caracter_especial") ];
  
  $("#password").on("keyup", function(){
    
    var password = $("#password").val();
    var check = 0;
    
    for (var i = 0; i < reg_exp.length; i++) {
      if (reg_exp[i].test(password)) {
        id_reg_exp[i].hide();
        check++;
      }else {
        id_reg_exp[i].show();
      }
    }
    
    if (check >= 0 && check <= 2) {
      $("#mensaje_de_validacion").text("Contraseña insegura").css("color", "red");
    }else if (check >= 3 && check <= 4) {
      $("#mensaje_de_validacion").text("Contraseña poco segura").css("color", "orange");
    }else if (check >= 5) {
      $("#mensaje_de_validacion").text("Contraseña segura").css("color", "green");
    }
    
  });
  
  
});