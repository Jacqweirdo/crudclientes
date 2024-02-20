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
    console.log("Validando el formulario de edición");
    var nombre1 = $("#nombreFormEdit").val();
    console.log("Nombre:", nombre1);
    var telefono1 = $("#telefonoFormEdit").val();
    console.log("Telefono:", telefono1);
    var correo1 = $("#correoFormEdit").val();
    console.log("Correo:", correo1);

    if (nombre1 === "" || telefono1 === "" || correo1 === "") {
        alert("Por favor, complete todos los campos.");
        return false;
    }

    if (!nombre1.match(/^[a-zA-Z\s]+$/)) {
        alert("El nombre debe contener solo letras.");
        return false;
    }

    if (!telefono1.match(/^\d{10}$/)) {
        alert("El teléfono debe tener 10 dígitos numéricos.");
        return false;
    }

    if (!isValidEmail(correo1)) {
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
    
