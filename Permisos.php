<?php
    require("conexion.php");
    $conexion = new mysqli($servername, $username, $password,$database);
    $usuario=$_POST["usuario"];
    $contraseña=$_POST["contrasenia"];

    $sql =  $sql = "SELECT  u.id, r.permisos AS role, Contrasenia FROM registro u INNER JOIN permiso r ON r.id = u.id_permiso WHERE Usuario = '$usuario' AND Contrasenia = $contraseña;";
    $resultado = $conexion->query($sql);

    if($resultado -> num_rows > 0){
       while($fila = $resultado->fetch_assoc()){
          if($fila['role'] == "Lector"){
            session_start();
            $_SESSION["usuario"] = $_POST["usuario"];
            header('Location: Sesion.php');
          }
          if($fila['role'] == "Administrador"){
            session_start();
            $_SESSION["usuario"] = $_POST["usuario"];
            header('Location:Administrador.php');
          }
       }
    }else{
      header("Location:index.html");
    }



?>
    