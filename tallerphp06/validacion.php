<!DOCTYPE html>
<html>
<head>
  <title>Validación de Formularios</title>
</head>
<body>
  <form id="formulario">
    <table cellspacing="2" cellpadding="2" border="1">
      <tr>
        <td align="right">Nombre de Usuario</td>
        <td><input type="text" id="usuario" /></td>
      </tr>
      <tr>
        <td align="right">Email</td>
        <td><input type="text" id="email" /></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Submit" id="btn-enviar" /></td>
      </tr>
    </table>
  </form>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Selecciona el formulario por su ID
      var formulario = $("#formulario");

      formulario.submit(function(event) {
        // Aca obtenemos el usuario y email
        var usuario = $("#usuario").val();
        var email = $("#email").val();

        // Verifica si los campos están vacíos
        if (usuario === "" || email === "") {
          // Evita que se envie en caso de que esten vacios
          event.preventDefault();
          alert("Los campos de usuario y email no pueden estar vacíos.");
        } else if (email.indexOf("@") === -1) {
          // Verifica si el campo de correo electrónico contiene @
          event.preventDefault();
          alert("El campo de correo electrónico debe contener un '@'");
        }
      });
    });
  </script>
</body>
</html>
