<?php
   $nombre = "";
   $apellido = "";
   $correo = "";
   $contraseña = "";
   $usuario = "";
   $permiso = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(empty($_POST["nombre"])){
         echo "el nombre es requerido";
      }else{
         $nombre = $_POST["nombre"];
      }
      if(empty($_POST["apellidos"])){
            echo "el apellido es requerido ";
      }else{
            $apellido = $_POST["apellidos"];
      }
         
      if(empty($_POST["correo"])){
         echo "el correo es requerido";
      }else{
         $correo = $_POST["correo"];
      }
      
      if(empty($_POST["contrasenia"])){
         echo "la contraseña es requerda ";
      }else{
         $contraseña = $_POST["contrasenia"];
      }

      if(empty($_POST["permiso"])){
         echo "el permiso es requerido ";
      }else{
         $permiso = $_POST["permiso"];
      }
      
   }     

   $usuario = $nombre."_".$apellido;
   require('conexion.php');
   $conexion = new mysqli($servername, $username, $password,$database);
   if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
  }

   $sql = "INSERT INTO registro (Usuario, Contrasenia ,Correo, permiso)
   VALUES ('$usuario', '$contraseña', '$correo','$permiso');";

   if (mysqli_multi_query($conexion, $sql)) {
        header("Location:Registro.html");
    } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
  
  mysqli_close($conexion);

?>
