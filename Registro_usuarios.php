<?php
     session_start();
     if(!isset($_SESSION["usuario"])){
        header("Location:index.html");
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro2.css">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="/imagenes/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
</head>
<body>
  <div class="card mb-3" id="main">
    <div id="tarjeta_izquierda" >
       <div id="imagen">
        <img src="imagenes/imagen_sin_fondo.png" alt="">
       </div>  
       <div id="tarjeta_mensaje">
          <h5 style="color: white;">Centro moderno de Valuacion y Servicios Inmobiliarios</h5>
         
       </div>
    </div>
    <div id="formulario">
      <form action="Registro.php" method="post">
        <div class="mb-3">
          <h5>Registro de Usuarios</h5>
          <input type="text" class="form-control" id="validationCustom01"  name="nombre" placeholder="Nombre" required><br>
          <input type="text" class="form-control" id="validationCustom02"  name="apellidos" placeholder="apellidos" required><br>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" placeholder="email" ><br>
           <select name="permiso" id="permiso" class="form-select">
            <option selected disabled value="">usuario...</option>
             <option value="Lector">lector</option>
             <option value="Administrador">administrador</option>
             <option value="Archivo">Archivo</option>
           </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Ingrese una contraseña</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="contrasenia"  required>
        </div>
        <center><button type="submit" class="btn btn-primary" >Registrar</button></center>
      </form>

  </div>  

</body>
</html>
