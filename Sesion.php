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
    <title>Document</title>
    <link rel="stylesheet" href="sesion2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>
  <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
    <div class="bg-dark p-4">
      <?php echo "<li><h3 style='color:white;'>".$_SESSION["usuario"]."</i></h3>";?>
      <span class="text-body-secondary"><a href="Cerrar_Sesion.php">Cerrar Sesion</a></span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>      
  </nav> 
  <div>
      <center><h2>BUSQUEDA DE PERITOS </h2></center>
  </div> 
  <div id="formulario">
    <form class="row g-3 needs-validation" novalidate method="get">
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombre" required><br>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellidos"  required><br>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Registro</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="registro" required><br>
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Busqueda por estado</label>
        <select class="form-select" id="validationCustom04" name="estado"  required>
          <option selected disabled value="">Estado...</option>
          <option value="AGUACALIENTES">AGUACALIENTES</option>
          <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
          <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
          <option value="CAMPECHE">CAMPECHE</option>
          <option value="CHIAPAS">CHIAPAS</option>
          <option value="CHIHUAHUA">CHIHAHUA</option>
          <option value="CIUDAD DE MEXICO">CIUDAD DE MEXICO</option>
          <option value="COAHUILA">COAHUILA</option>
          <option value="COLIMA">COLIMA</option>
          <option value="DURANGO">DURANGO</option>
          <option value="ESTADO DE MEXICO">ESTADO DE MEXICO</option>
          <option value="GUANAJUATO">GUANAJUATO</option>
          <option value="GUERRERO">GUERRERO</option>
          <option value="HIDALGO">HIDALGO</option>
          <option value="JALISCO">JALISCO</option>
          <option value="MICHOACAN">MICHOACAN</option>
          <option value="MORELOS">MORELOS</option>
          <option value="NARAYIT">NAYARIT</option>
          <option value="NUEVO LEON">NUEVO LEON</option>
          <option value="OAXACA">OAXACA</option>
          <option value="PUEBLA">PUEBLA</option>
          <option value="QUERETARO">QUERETARO</option>
          <option value="QUINTANA ROO">QUINTANA ROO</option>
          <option value="SAN LUIS POTOSI">SAN LUIS POTOSI</option>
          <option value="SINALOA">SINALOA</option>
          <option value="SONORA">SONORA</option>
          <option value="TABASCO">TABASCO</option>
          <option value="TAMAULIPAS">TAMAULIPAS</option>
          <option value="TLAXCALA">TLAXCALA</option>
          <option value="VERACRUZ">VERACRUZ</option>
          <option value="YUCATAN">YUCATAN</option>
          <option value="ZACATECAS">ZACATECAS</option>
        </select><br>
        <div class="invalid-feedback">
          Selecciona un estado valido.
        </div>
      </div>
        <center>
          <div class="col-12">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" name="buscar"><i class="fa fa-search"></i>BUSCAR</button>
            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" name="buscar"><i class="fa fa-search"></i>BUSCAR</button>
           </div>
        </center>
    </form>

  </div>
  <div id="Peritos">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Perito</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <?php
                    require("conexion.php");
                    $nombre = "";
                    $apellido = "";
                    $estado = "";
                    $registro = "";
                    if(!empty($_GET["nombre"])){
                       $nombre = $_GET["nombre"];
                    }
                    if(!empty($_GET["apellidos"])){
                       $apellido = $_GET["apellidos"];
                    }
                 
                    if(!empty($_GET["estado"])){
                       $estado = $_GET["estado"];
                    }
                 
                    if(!empty($_GET["estado"])){
                       $estado = $_GET["estado"];
                    }
                 
                    if(!empty($_GET["registro"])){
                       $registro = $_GET["registro"];
                    }
                    
                    
                    if(isset($_GET["buscar"])){
                      $conexion = new mysqli($servername, $username, $password,$database);
                      $consulta = "SELECT * FROM contactos WHERE Nombre = '$nombre' OR Apellidos = '$apellido' OR Estado_provincia='$estado' OR Registros='$registro'";
                      
                      $resultado = $conexion->query($consulta);
                      if($resultado -> num_rows > 0){
                        while($fila = $resultado->fetch_assoc()){
                           echo "<p>".$fila["Nombre"]."</p>";
                           echo "<p>".$fila["Apellidos"]."</p>";
                           echo "<p>".$fila["Correoelectronico"]."</p>"; 
                           echo "<p>".$fila["Telefonoparticular"]."</p>";  
                           echo "<p>".$fila["Telefonomovil"]."</p>";  
                           echo "<p>".$fila["Registros"]."</p>";  
                           echo "<p>".$fila["Estado_provincia"]."</p>";
                           echo "<p>".$fila["Notas"]."</p>";
                           echo "<p>".$fila["Sin_viaticos"]."</p>";       
                        }
                      }
                    }
              ?>
              <p>pruebaaaaaaa</p>
              <p>nombre</p>
              <p>apellido</p>
              <p>ciudad</p>
              <p>telefono</p>
              <p>registro</p>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Send message</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  
</body>
</html>
