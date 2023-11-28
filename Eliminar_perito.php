<?php
   require("conexion.php");
   $conexion = new mysqli($servername, $username, $password,$database);
   if (!$conexion) {
       die("Conexion fallida: " . mysqli_connect_error());
   }

   $sql = "DELETE * FROM contactos Where Nombre=: ";

?>