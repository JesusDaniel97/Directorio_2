

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Perito <?php echo $_GET['nombre'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php

            require('conexion.php');
            $conexion = new mysqli($servername, $username, $password,$database);
            $nombre = $_GET['nombre'];
            if(isset($nombre)){
                $consulta = "SELECT * FROM contactos WHERE Nombre='$nombre'";
                $resultado = $conexion->query($consulta);
                if($resultado->num_rows>0){
                while($fila = $resultado->fetch_assoc()){
                        echo "<H5> ARCHIVOS </H5>"; 
                        echo "<p> Datos adjuntos ".$fila["Datos_adjuntos"]."</p>";
                        $archivo = $fila['Datos_adjuntos'];                     
                   }
                }

            } else{
            echo "no exsite";
            }

        ?>
            <img src="/documentos/<?php echo $archivo?>" width="100" height="100">
            <iframe src="/documentos/<?php echo $archivo?>" width="300" height="300"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

