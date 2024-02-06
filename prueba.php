<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="prueba.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
</head>
<body>
<div>
      <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
    <div class="bg-dark p-4">
        <a>Cerrar Sesion</a><br>  
        <center><h2 style="color:white;"> PERITOS MODVAL</h2></center>
    </div>
  </div>    
  </div> 
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>      
  </nav> 
 
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <form class="row g-3 needs-validation" novalidate method="POST" action="">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  BUSQUEDA GENERAL
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <div class="col-md-4">
                      <label for="validationCustom01" class="form-label">Nombre</label>
                      <input type="search" class="form-control" id="validationCustom01" name="nombre" placeholder="Nombre" required><br>
                </div>

                    <div class="col-md-4">
                      <label for="validationCustom02" class="form-label">Apellido</label>
                      <input type="text" class="form-control" id="validationCustom02" name="apellido" placeholder="Apellido" required><br>
                    </div>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  BUSQUEDA POR UBICACION
                </button>
              </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="input-field col s12 m12 l6">
                                <select id="estado" name="estado" class="form-select" aria-label="Default select example"></select>
                                <label for="estado">Estado</label>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <select id="municipio" name="municipio" class="form-select" aria-label="Default select example"></select>
                                <label for="municipio">Municipio</label>
                          </div> 
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          BUSQUEDA POR COBERTURA
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="input-field col s12 m12 l6">
                                  <select id="cobertura" name="cobertura" class="form-select" aria-label="Default select example"></select>
                                  <label for="cobertura">Estado</label>
                            </div>

                                  <div class="input-field col s12 m12 l6">
                                    <select id="municipios_cobertura" name="municipios_cobertura" class="form-select" aria-label="Default select example"></select>
                                    <label for="municipios_cobertura">Municipio</label>
                                  </div>
                        </div>
                      </div>
                    </div>
          </div>

              <center>
              <button type="submit" name="buscar" class="btn btn-primary"><i class="fa fa-search"></i> buscar</button>
            </center>
       </form>  
       <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script type="text/javascript" src="select_estados.js"></script>
       <script type="text/javascript" src="municipios.js"></script>
       <script type="text/javascript" src="coberturas.js"></script>
        
       <script type="text/javascript">
        $(document).ready(function(){
          $('select').material_select();
        });
        </script>
         <div id="tabla_peritos">
        <table class="table table-striped table-hover">

                                        
                        <thead>    
                        <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Telefono Movil</th>
                        <th>Residencia</th>
                        <th>Ciudad</th>
                        <th>Estado Provincia</th>
                        <th>Notas</th>
                        <th>Mostrar archivo</th>
                        </tr>
                        </thead>
                        <tbody> 

                            <?php
                                
                                    require("conexion.php");
                                    

                                $conexion = new mysqli($servername, $username, $password,$database);
                                $salida="";
                                $query = "SELECT * FROM contactos ORDER BY ID";

                                if(isset($_POST['buscar'])){
                                  $nombre = $conexion->real_escape_string($_POST['nombre']);
                                  $apellido = $conexion->real_escape_string($_POST['apellido']); // Added line for last name
                                  $cobertura = $conexion->real_escape_string($_POST['cobertura']); // Added line for state
                                  $municipio = $conexion->real_escape_string($_POST['municipio']);
                                  $query = "SELECT * FROM contactos WHERE Nombre LIKE '%$nombre%'";
                              
                                  // Check if the last name is provided, then include it in the query
                                  if (!empty($apellido)) {
                                      $query .= " AND Apellidos LIKE '%$apellido%'";
                                  }
                              
                                  // Check if the state is selected, then include it in the query
                                  if (!empty($cobertura)) {
                                      $query .= " AND Estado_provincia = '$cobertura'";
                                  }    

                                  

                                  if (!empty($municipio)) {
                                    $query .= " AND Ciudad = '$municipio'";
                                  } 
                              }
            
                                $resultado = $conexion->query($query);
                                if($resultado -> num_rows > 0){
                                      while($fila = $resultado->fetch_assoc()){
                                  ?>  
                                  <tr>
          
                                        <td><?php echo $fila['Nombre']; ?></td>
                                        <td><?php echo $fila['Apellidos']; ?></td>
                                        <td><?php echo $fila['Correoelectronico']; ?></td>
                                        <td><?php echo $fila['Telefonomovil']; ?></td>
                                        <td><?php echo $fila['Residencia']; ?></td>
                                        <td><?php echo $fila['Ciudad']; ?></td>
                                        <td><?php echo $fila['Estado_provincia']; ?></td>
                                        <td><?php echo $fila['Notas']; ?></td> 
                                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" name="mostrar" data-bs-target="#modal<?php echo $fila['ID']?>"><i class="bi bi-file-earmark"></i>ELIMIENAR</button></td>
                                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" name="mostrar" data-bs-target="#modal2<?php echo $fila['ID']?>"><i class="bi bi-file-earmark"></i>INFO</button></td>
                                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" name="mostrar" data-bs-target="#Modal3<?php echo $fila['ID']?>"><i class="bi bi-file-earmark"></i>DOC</button></td>
                                       
                                                
                                  <?php 
                                      include('modal.php');
                                      include('modal2.php');
                                      include('Modal3.php');
                                                                      
                                      }


                                    }else{
                                      echo "no hay resultados :(";
                                    }
                                  
                                    
                                    
                                    $conexion->close();
                                ?>
                                
            </tbody> 
          </table>  
    
   </div>

   
  
  </body>
</html>
        
    

      
          
   
  </body>
</html>
        

