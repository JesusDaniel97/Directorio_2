<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
    <div class="row">
    <div class="col-sm-6 offset-sm-3">
    <div class="alert alert-danger text-center">
    <p>¿Desea confirmar la eliminacion del Perito </p>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form action="Acciones.php" method="POST">
                <input type="hidden" name="accion" value="eliminar_registro">
                <input type="hidden" name="nombre" value="<?php echo $_GET['nombre']; ?>">
                <input type="submit" name="" value="Eliminar" class= " btn btn-danger">
                <a href="Administrador.php" class="btn btn-success">Cancelar</a>
                               
        </div>
    </div>
    


</body>
</html>
