<?php
   require("conexion.php");
   $conexion = new mysqli($servername, $username, $password,$database);
   $correo = $_POST['correo'];

   $consulta = "SELECT * FROM registros WHERE Correo = '$correo'";
   $nr = mysqli_num_rows($consulta);

   if($nr == 1){
       $mostrar = mysqli_fetch_array($consulta);
       $enviarpass = $mostrar['pass'];
       $paracorreo = $correo;
       $titulo	= "Recuperar contraseña";
       $mensaje = $enviarpass;
       $tucorreo = "From:xxx@gmail.com";  
   }

   if(mail($paracorreo,$titulo,$mensaje,$tucorreo)){
      
   }



?>
