var expreEmail = /^[a-zA-Z0-9_.+-]+@upemor\.edu\.mx$/;
var expreContrasena = /^[a-zA-Z0-9#@]{7,14}$/;

function validacion(){

    var usuario = document.getElementById("usuario"); //elemento de usuario
    var email = usuario.value; //  valor del input

    //Contrasena
    var contra = document.getElementById("contrasena");
    var password = contra.value;
    
    // Verificar longitud del valor y si el correo coincide con la expresión regular
    if (email.length < 16 || email.length > 32 || !expreEmail.test(email)) {
        usuario.focus();  // Enfocar el campo si hay error
        document.getElementById("aema").style.display = "block";  // Mostrar mensaje de error
        return false;  // Prevenir el envío del formulario
    }
    
    document.getElementById("aema").style.display = "none"; 

    if(password.length < 7 || password.length > 14 || !expreContrasena.test(password)){
        contra.focus();
        document.getElementById("contra").style.display = "block";
        return false;
    }

    document.getElementById("contra").style.display = "none"; 

    alerta.style.display = "block"; // Oculta la alerta después de 3 segundos
    setTimeout(function() {
        
        document.getElementById("frm1").submit(); // Enviar el formulario
    }, 3000);

}