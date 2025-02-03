function openGmail() {
    // Obtener los valores de los campos del formulario
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    // Dirección de correo electrónico del destinatario
    var destinatario = "ajfamilyhandyman@gmail.com";

    // Asunto del correo
    var asunto = "Request Service - " + name;

    // Cuerpo del correo con los datos del formulario
    var cuerpo = "Name: " + name + "\n" +
                 "Phone Number: " + phone + "\n" +
                 "Email: " + email + "\n" +
                 "Message: " + message;

    // Crear el enlace con el esquema mailto
    var enlaceMailto = "mailto:" + destinatario + "?subject=" + encodeURIComponent(asunto) + "&body=" + encodeURIComponent(cuerpo);

    // Abrir el enlace en una nueva ventana o pestaña
    window.open(enlaceMailto);
  }
