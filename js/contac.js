$(document).ready(function () {
    const formulario = document.getElementById("formCategory");
    $('#form-contact').on("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("name");
        const email = document.getElementById("email");
        const message = document.getElementById("message");

        if (name.value == "" || email.value == "" || message == "") {
            Swal.fire("RELLENE LOS CAMPOS VACIOS", "", "error")
        } else {
            Swal.fire("FORMULARIO ENVIADO CON EXITO", "¡Muchas gracias por tu comentario!", "success");
            name.value = "";
            email.value = "";
            message.value = "";
        }
    })
});