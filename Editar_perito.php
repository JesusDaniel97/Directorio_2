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
    <link rel="stylesheet" href="Editar_perito.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="formulario-2">
        <form class="row g-3 needs-validation" novalidate method="POST" action="">
            <div >
              <label for="validationTooltip01" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="validationTooltip01" name="nombre" required>
    
            </div>
            <br>
            <div>
              <label for="validationTooltip02" class="form-label">Apellidos</label>
              <input type="text" class="form-control" id="validationTooltip02" name="apellidos" required>
              <br>
             
            </div>
            <div>
              <label for="validationTooltipUsername" class="form-label">Correo</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="correo" required>
            
              </div>
            </div>
            <br>

            <div id="Telefonoparticular">
                <label>Telefono particular</label>
                <input type="tel" id="telefono_particular" class="form-control" name="telefonoparticular" required>
            </div><br>

            <div id="Telefonomovil">
                <label>Telefono movil</label>
                <input type="tel"  id="telefono_movil" class="form-control" name="telefonomovil" required> 
            </div><br>
            
            <div id="Registros">
                <label>Registros</label>
                <input type="text"  id="Registro" class="form-control" name="registro" required>
            </div><br>

            <div id="Residencia">
                <label>Residencia</label>
                <input type="text" name="Residencia" class="form-control" id="Residencia" name="Residencia" required>
            </div><br>
                
            <div class="col-md-3 position-relative">
              <label for="validationTooltip04" class="form-label">Estado o provincia</label>
              <select class="form-select" id="validationTooltip04" name="estado" required>
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
              </select>
              <div class="invalid-tooltip">
                Please select a valid state.
              </div>
            </div><br>
            <label >Notas</label>
            <textarea name="notas" id="" cols="30" rows="10">Notas</textarea>
            <br>
              
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="con viaticos"  id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    con viaticos
                </label>
              </div>
              <br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="sin viaticos" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    sin viaticos
                </label>
              </div><br>

              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Archivo adjunto</label>
                <a href=""></a><input type="file" class="form-control" id="inputGroupFile01" name="archivo">
              </div>
              <br>

            <div class="col-12">
              <center><input type="submit" name="editar" value="Editar" class="btn btn-primary"></center>
            </div>
          </form>

          <?php
               $nombre = "";
               $apellido = "";
               $correo = "";
               $telefono_particular = "";
               $telefono_movil = "";
               $ciudad = "";
               $registros = "";
               $residencia = "";
               $estado = "";
               $notas = "";
               $datos_adjuntos;

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
                    
                    if(empty($_POST["telefonoparticular"])){
                        echo "el telefono particular es requerido ";
                    }else{
                        $telefono_particular = $_POST["telefonoparticular"];
                    }
        
                    if(empty($_POST["telefonomovil"])){
                        echo "el telefono movil es requerido ";
                    }else{
                        $telefono_movil = $_POST["telefonomovil"];
                    }
        
                    if(empty($_POST["registro"])){
                        echo "el registro es requerido ";
                    }else{
                        $registros = $_POST["registro"];
                    }
        
                    if(empty($_POST["Residencia"])){
                        echo "la residencia es requerda ";
                    }else{
                        $residencia = $_POST["Residencia"];
                    }
        
                    if(empty($_POST["estado"])){
                        echo "el estado es requerido ";
                    }else{
                        $estado = $_POST["estado"];
                    }
                    if(empty($_POST["notas"])){
                        echo "la nota es requerida ";
                    }else{
                        $notas = $_POST["notas"];
                    }
                    if(empty($_POST["archivo"])){
                        echo "el archivo es requerido ";
                    }else{
                        $datos_adjuntos = $_POST["archivo"];
                        
                    }
                 }

               
              if(isset($_POST["actualizar"])){
                  require("conexion.php");
                  $conexion = mysqli_connect("localhost","root","","directorio");
                  $nombre_perito = $_GET['nombre'];
                  $consulta = "UPDATE contactos SET Nombre='$nombre',Apellidos='$apellido', Correoelectronico='$correo',Telefonoparticular='$telefono_particular',
                  Telefonomovil='$telefono_movil',Registros='$registros',Residencia='$residencia',Ciudad='$ciudad',Estado_provincia='$estado',Notas='$notas',Datos_adjuntos='$datos_adjuntos' WHERE Nombre='$nombre_perito'";
                  mysqli_query($conexion,$consulta);                   
              }
              
          
          ?>
    </div>
</body>
</html>
