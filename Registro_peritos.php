
<?php
    $nombre = "";
    $Curp = "";
    $apellido = "";
    $correo = "";
    $telefono_particular = "";
    $telefono_movil = "";
    $ciudad = "";
    $registros = "";
    $municipio = "";
    $estado = "";
    $notas = "";
    $datos_adjuntos;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if(!empty($_POST["CURP"])){
            $Curp = $_POST["CURP"];
        }else{
            $Curp = "";
        }

        if(!empty($_POST["nombre"])){
            $nombre = $_POST["nombre"];
        }else{
            $nombre = "";
        }
       
        if(!empty($_POST["apellidos"])){
            $apellido = $_POST["apellidos"];
        }else{
            $apellido = "";
        }
            
        if(!empty($_POST["correo"])){
            $correo = $_POST["correo"];
        }else{
            $correo = "";
        }
        
        if(!empty($_POST["telefonoparticular"])){
            $telefono_particular = $_POST["telefonoparticular"];
        }else{
            $telefono_particular = "";
        }
                    
        if(!empty($_POST["telefonomovil"])){
            $telefono_movil = $_POST["telefonomovil"];
        }else{
            $telefono_particular = "";
        }
            
        
        if(!empty($_POST["registro"])){
            $registros = $_POST["registro"];
        }else{
            $registros = $_POST["registro"];
        }

        if(!empty($_POST["municipio"])){
            $municipio = $_POST["municipio"];
        }else{
            $municipio = "";
        }
                
        if(!empty($_POST["estado"])){
            $estado = $_POST["estado"];
        }else{
            $estado = "";
        }
        if(!empty($_POST["notas"])){     
            $notas = $_POST["notas"];
        }else{
            $notas = "";
        }

        $archivo=$_FILES['archivo']['name'];
        $archivo_tamaño=$_FILES['archivo']['size'];
        $archivo_tipo=$_FILES['archivo']['type'];

        if($archivo_tamaño < 4000000){ //4 megabytes
            if($archivo_tipo == "image/jpeg" || $archivo_tipo == "image/jpg" || $archivo_tipo == "image/png" || $archivo_tipo == "application/pdf"){
                $carpeta_destino = $_SERVER['DOCUMENT_ROOT']."/documentos/";
                move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$archivo);
            }
        } else {
            echo "No se puede subir el archivo >:V";
        }

        include('conexion.php');     
        $conexion = new mysqli($servername, $username, $password,$database);
        if (!$conexion) {
            die("Conexion fallida: " . mysqli_connect_error());
        }

        $verificar_sql = "SELECT * FROM contactos WHERE CURP = '$CURP'";
        $resultado = mysqli_query($conexion, $verificar_sql);

        if(mysqli_num_rows($resultado) > 0) {
            echo "<script>alert('Ya hay un perito existente.')</script>";
        } else {
            // comparar por la curp añadir un campo curp
            $sql = "INSERT INTO  contactos (Nombre, Apellidos, Correoelectronico, Telefonoparticular, Telefonomovil, Registros, Ciudad, Estado, Notas, Datos_adjuntos)
            VALUES ('$nombre', '$apellido', '$correo', '$telefono_particular', '$telefono_movil', '$registros', '$municipio', '$estado', '$notas', '$archivo');";

            if (mysqli_multi_query($conexion, $sql)) {
                header("Location: Administrador.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
        }
        
        mysqli_close($conexion);
    }
?>
