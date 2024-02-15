function validar(){
    var correo, contrasena;
    var expresion=/\w+@\w+\.+[a-zA-Z]/;  //expresion para validar correo (letras, arroba, mas letras, . , mas letras)
    
  
    correo=document.getElementById("email").value;
    contrasena=document.getElementById("contraseña").value;

    //validaciones para no estar vacio
    if(correo==""||contrasena==""){
        alert("Por favor ingrese sus datos");
        return false;
    } 
    //validaciones de longitud (muy largo)
    if(correo.length>35){
        alert("su correo es demasiado largo, maximo 35 caracteres")
        return false;
    }else if(contrasena.length>15){
        alert("la contraseña es demasiado larga, maximo 15 caracteres")
        return false;
    }
        //validaciones de longitud (muy corto)
    
    if(correo.length<5){
        alert("su correo es demasiado corto")
        return false;
    }else if(contrasena.length<3){
        alert("la contraseña es demasiado corta")
        return false;
    }
    //validacion de correo
    if(!expresion.test(correo)){
        alert("correo invalido");
        return false;
    }
    //TAREA, VALIDACIONES GENERALES DE TODO
     
    //intento validar solo letras para nombre
    if (!letras.test(nombre)){
        alert("el nombre debe contener solamente letras");
        return false;
    }else if(!letras.test(apellido)){
        alert("el apellido debe contener solamente letras");
        return false;
    }
    }
