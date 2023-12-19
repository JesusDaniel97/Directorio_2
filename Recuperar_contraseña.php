<?php
  $usuario = "";
  $contraseña = "";
  $confirmar_contraseña = "";

  while(empty($_POST["usuario"]) && empty($_POST["password"])){
      echo "es necesario ingresar un usuario y una la contraseña";
      break;
  }
   $usuario = $_POST["usuario"];
   $contraseña = $_POST["password"];
   $confirmar_contraseña = $_POST["confirmarcon"];
   

   if($contraseña == $confirmar_contraseña){
        $conexion = mysqli_connect("localhost","root","","directorio");
        $consulta = "UPDATE registro SET Contrasenia='$confirmar_contraseña' WHERE Usuario='$usuario'";
        mysqli_query($conexion,$consulta);
   }else{
      echo "la contraseña no coincide";
   }
  

?>