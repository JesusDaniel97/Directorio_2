<?php
   session_start();
   if(!isset($_SESSION["usuario"])){
      header("Location:index.html");
   }

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

<p>Perito <?php echo $_GET['nombre'];?></p>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#info"> mostrar informacion </button>
<a href="Sesion.php"></a>

<div class="modal fade" id="info" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Perito <?php echo $_GET['nombre'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
       <?php

          $archivo = filter_input(INPUT_GET,'Datos_adjuntos');
          require('conexion.php');
          $conexion = new mysqli($servername, $username, $password,$database);
          $nombre = $_GET['nombre'];
          if(isset($nombre)){
              $consulta = "SELECT * FROM contactos WHERE Nombre='$nombre'";
              $resultado = $conexion->query($consulta);
              if($resultado->num_rows>0){
                while($fila = $resultado->fetch_assoc()){
                      echo "<H5>DATOS GENERALES</H5>";
                      echo "<p> Nombre: ".$fila["Nombre"]."</p>";
                      echo "<p> Apellidos: ".$fila["Apellidos"]."</p>";
                      echo "<p> <i class='bi bi-envelope-fill' style='font-size:20px;color:blue;'></i> Correo: ".$fila["Correoelectronico"]."</p>";
                      echo "<p> <i class='bi bi-telephone-fill' style='font-size:20px;color:blue;'></i>  Telefono Particular: ".$fila["Telefonoparticular"]."</p>"; 
                      echo "<p> <i class='bi bi-phone-fill' style='font-size:20px;color:blue;'></i> Telefono Movil: ".$fila["Telefonomovil"]."</p>";
                      echo "<H5>UBICACION</H5>"; 
                      echo "<p> <i class='bi bi-house-door-fill' style='font-size:20px;color:blue;'></i> Residencia: ".$fila["Residencia"]."</p>";
                      echo "<p> <i class='bi bi-folder-symlink-fill' style='font-size:20px;color:blue;'></i> Registro: ".$fila["Registros"]."</p>";  
                      echo "<p> <i class='bi bi-geo-alt-fill' style='font-size:20px;color:blue;'></i> Estado Provincia: ".$fila["Estado_provincia"]."</p>";
                      echo "<p> <i class='bi bi-building-fill' style='font-size:20px;color:blue;'></i> Ciudad: ".$fila["Ciudad"]."</p>";
                      echo "<H5>COBERTURA</H5>";
                      echo "<p> Sin viaticos: ".$fila["Sin_viaticos"]."</p>";
                      echo "<p> Con viaticos: ".$fila["Con_viaticos"]."</p>"; 
                      echo "<H5>Datos adjuntos </H5>";
                      echo "<p> Datos adjuntos ".$fila["Datos_adjuntos"]."</p>";
                      $archivo = $fila['Datos_adjuntos'];  
                      echo "<textarea class='form-control' id='message-text'></textarea>";           
                }
              }

          } else{
             echo "no exsite";
          }

       ?>

            <img src="/documentos/<?php echo $archivo?>" width="400" height="400"> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
