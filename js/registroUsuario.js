$(function() {
    console.log("Im ready")
  $("#formPub").on("submit", function(event) {
    var regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{7,15}$/;
    var $formPub = $(this);
    var formData = {
      primerNombre: $("#primerNombre", $formPub).val(),
      primerApellido: $("#primerApellido", $formPub).val(),
      password: $("#password", $formPub).val(),
      password2: $("#password2", $formPub).val()
    };
    if (regexPassword.test(formData.password) === false) {
      $("#errorMsg")
        .text(
          "La contraseña debe tener entre 7 y 15 caracteres y deben contener al menos una letra mayuscula, una minuscula, un número y un caracter especial"
        )
        .show();
      return false;
    } else if (formData.password != formData.password2) {
      $("#errorMsg")
        .text("Las contraseñas deben ser iguales")
        .show();
      return false;
    }
    $("#errorMsg").hide();
    $.ajax({
      type: "post",
      url: "operaciones.php",
      data: $("#formPub").serialize(),
      dataType: "json",
      success: function (response) {
        console.log("Me fui")
      }
    });
  });
});
