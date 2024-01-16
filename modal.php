<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
          <div class="modal fade" id="modal<?php echo $fila['ID']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="alert alert-danger text-center">
                    <p>¿Desea confirmar la eliminacion del Perito <?php echo $fila["Nombre"]?></p>
                </div>    
                <div class="row">
                    <div class="col-sm-6">
                        <form action="" method="POST">
                            <input type="hidden" name="accion" value="eliminar_registro">
                            <input type="hidden" name="nombre" value="<?php echo $fila['Nombre']; ?>">
                            <input type="submit" name="eliminar" value="Eliminar" class= " btn btn-danger">
                            <a href="Administrador.php" class="btn btn-success">Cancelar</a>
                      </form>    
                                          
                    </div>
                </div>  


                <?php
                  if(isset($_POST["eliminar"])){
                        require("conexion.php");
                        $nombre = $fila['nombre'];
                        $conexion = mysqli_connect("localhost","root","","directorio");
                        $consulta = "DELETE FROM contactos WHERE Nombre='$nombre'" ;
                        mysqli_query($conexion,$consulta);
                        header("Location:Administrador.php");  
                    } 
            ?> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
</body>
</html>
