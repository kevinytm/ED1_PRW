<?php include 'includes/header.php';?>

 <H2>Autentificación</H2>
<form method="POST" name="frm1" id="frm1" action="validation.php">
    <div class="form_container">
        <label for="usuario" class="formulario_label">User:
        <input type="text" name="usuario" id="usuario" class="formulario_input">
        </label>  
    </div> 
    <p class="alert alert-danger" id="aema" name="aema" style="display: none">
        ¡Ingresa una email válido!
    </p>    
    <div class="form_container">
        <label for="contrasena" class="formulario_label">Password:
        <input type="password" name="contrasena" id="contrasena" class="formulario_input">
        </label>
    </div>    
    <p class="alert alert-danger" id="contra" name="contra" style="display: none">
        ¡Ingresa una contraseña válida!
    </p>                
    <div class="form_container">            
        <input type="button" class="formulario_btn" value="Enviar" onclick="validacion()"></input> 
    </div> 
    <div class="alert alert-success" role="alert" type="hidden" id="alerta" style="display:none;">
        Enviando los datos
    </div>
  
</form> 

<a href="index.php"><img src="Static/img/back.png"></a>

<script src="Static/js/validaciones.js"></script>