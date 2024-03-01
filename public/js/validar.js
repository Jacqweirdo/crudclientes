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
        if(nombre.length>20){
            alert("El nombre es demasiado largo.");
            return false;
        }else if(nombre.length<3){
            alert("el nombre es muy corto.");
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
        if(correo.length<10){
            alert("El correo elecrónico no puede ser tan corto");
            return false;
        }else if(correo.length>45){
            alert("El correo es demasiado largo")
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
  

$(document).ready(function(){
// Validación del formulario de edición
$("#formularioEdit").submit(function () {
    
    var nombre1 = $("#nombreFormEdit").val();    
    var telefono1 = $("#telefonoFormEdit").val();
    var correo1 = $("#correoFormEdit").val();
    

    if (nombre1 === "" || telefono1 === "" || correo1 === "") {
        alert("Por favor, complete todos los campos.");
        return false;
    }
    if(nombre.length>20){
        alert("El nombre es demasiado largo.");
        return false;
    }else if(nombre.length<3){
        alert("el nombre es muy corto.");
        return false;
    }

    if (!nombre1.match(/^[a-zA-Z\s]+$/)) {
        alert("El nombre debe contener solo letras.");
        return false;
    }

    if (!telefono1.lenght<10) {
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
if(correo1.length<10){
    alert("El correo elecrónico no puede ser tan corto");
    return false;
}else if(correo1.length>45){
    alert("El correo es demasiado largo")
    return false;
}
});
