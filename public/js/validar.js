$(document).ready(function () {
    // Validación del formulario de creación
    $("#formularioCrear").submit(function () {
        var nombre = $("#nombreFormCrear").val();
        var telefono = $("#telefonoFormCrear").val();
        var correo = $("#correoFormCrear").val();

        if (nombre === "" || telefono === "" || correo === "") {
            alert("Por favor, complete todos los campos.");
            return false;
        }

        if (!nombre.match(/^[a-zA-Z\s]+$/)) {
            alert("El nombre debe contener solo letras.");
            return false;
        }

        if (!telefono.match(/^\d{10}$/)) {
            alert("El teléfono debe tener 10 dígitos numéricos.");
            return false;
        }

        if (!isValidEmail(correo)) {
            alert("Ingrese un correo electrónico válido.");
            return false;
        }

        return true;
    });
// Validación del formulario de edición
$("#formularioEdit").submit(function () {
    var nombre = $("#nombreFormEdit").val();
    var telefono = $("#telefonoFormEdit").val();
    var correo = $("#correoFormEdit").val();

    if (nombre === "" || telefono === "" || correo === "") {
        alert("Por favor, complete todos los campos.");
        return false;
    }

    if (!nombre.match(/^[a-zA-Z\s]+$/)) {
        alert("El nombre debe contener solo letras.");
        return false;
    }

    if (!telefono.match(/^\d{10}$/)) {
        alert("El teléfono debe tener 10 dígitos numéricos.");
        return false;
    }

    if (!isValidEmail(correo)) {
        alert("Ingrese un correo electrónico válido.");
        return false;
    }

    return true;
});

    // Función auxiliar para validar el correo electrónico
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
    
