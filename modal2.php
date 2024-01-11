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
  <?php
   /* require('conexion.php');
    $conexion = new mysqli($servername, $username, $password,$database);
    $nombre = $_GET['perito'];
    $consulta = "SELECT * FROM contactos WHERE Nombre='$nombre'";
    $resultado = $conexion->query($consulta);
                if($resultado->num_rows>0){
                while($fila = $resultado->fetch_assoc()){
                        echo "<H5> ARCHIVOS GENERALES </H5>";
                        $archivo = $fila['Datos_adjuntos'];
                        
                        
                   }
              }
              */
              $tipo=substr($archivo,-4);
  ?>

  
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                ARCHIVO PDF
            </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                
               <?php
                  if($tipo == ".pdf"){  
                    echo $archivo;
               ?>
                <a href="/documentos/<?php echo $archivo?>"><img src="imagenes/pdf.png" width="100" height="100"></a>

              <?php
                  }
              ?>  
             
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                ARCHIVO CURSO
            </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                ARCHIVO IMAGENES
            </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <!--foto-->
               


                <?php
      
    

                        if($tipo == ".jpg" || $tipo == ".JPG"){  
                            echo $archivo;
                        ?>
                            <!--<img src="/documentos/<?php echo $archivo?>" width="400" height="400">-->
                            <a href="/documentos/<?php echo $archivo?>"><img src="imagenes/imagen.jpg" width="100" height="100"></a>
                             
                        <?php

                        }

                        if($tipo == ".jpeg" || $tipo == ".JPEG"){
                            echo $archivo;
                        ?> 

                            <!--<img src="/documentos/<?php echo $archivo?>" width="400" height="400">-->
                            <a href="/documentos/<?php echo $archivo?>"><img src="imagenes/imagen.jpg" width="100" height="100"></a>
                        

                        <?php

                        }

                        if($tipo == ".png" || $tipo == ".PNG"){
                            echo $archivo;
                        ?>
                        <!--<img src="/documentos/<?php echo $archivo?>" width="400" height="400">-->
                        <a href="/documentos/<?php echo $archivo?>"><img src="imagenes/imagen.jpg" width="100" height="100"></a>

                        <?php

                        }
                        ?>
            
               
            </div>
        </div>
</div>
</body>
</html>