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
      <link rel="stylesheet" href="Agregar_Perito.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <title>Document</title>
  </head>
  <body>
      <div id="formulario-2">
          <form class="row g-3 needs-validation" novalidate method="post" action="Registro_peritos.php" enctype="multipart/form-data">
              <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationTooltip01" name="nombre" required>
      
              </div>
              <br>
              <div class="col-md-4 position-relative">
                <label for="validationTooltip02" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="validationTooltip02" name="apellidos" required>
                <br>
              
              </div>

              <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">CURP</label>
                <input type="text" class="form-control" id="validationTooltip03" name="curp" required>
                <br>
              
              </div>
              <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label">Correo</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                  <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="correo" required>
              
                </div>
              </div>
              <br>

              <div id="Telefonoparticular" class="col-md-4 position-relative">
                  <label >Telefono particular</label>
                  <input type="tel" id="telefono_particular" name="telefonoparticular" class="form-control"  required>
              </div><br>

              <div id="Telefonomovil" class="col-md-4 position-relative">
                  <label >Telefono movil</label>
                  <input type="tel"  id="telefono_movil" name="telefonomovil" class="form-control" required> 
              </div><br>
              
              <div id="Registros_" class="col-md-4 position-relative">
                  <label >Registros</label>
                  <input type="text"  id="Registro" name="registro" class="form-control" required>
              </div><br>

              <div id="Residencia_" class="col-md-4 position-relative">
                  <label>Residencia</label>
                  <input type="text" name="Residencia" id="residencia" class="form-control" required>
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
              <textarea name="notas" cols="30" rows="10">Notas</textarea>
              <br>  
              
              

                <div class="input-group mb-3">
                  <label class="input-group-text" for="archivo">Archivo adjunto</label>
                  <input type="file" class="form-control" id="archivo" name="archivo" size="20">
                </div>
                <br>

                <a href="cobertura.php" class="btn btn-primary"><label for="">Agregar coberturas</label></a>

              <div class="col-12">
                 <center><input type="submit" name="enviar" class="btn btn-primary" value="Registrar"/></center>
              </div>
            </form>
             
            
      </div>
  </body>
</html>
