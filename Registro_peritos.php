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
         
     
    require('conexion.php');
    $conexion = new mysqli($servername, $username, $password,$database);
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO  contactos (Nombre, Apellidos ,Correoelectronico, Telefonoparticular,Telefonomovil,Registros,Residencia,Ciudad, Estado_provincia,Notas,Datos_adjuntos)
    VALUES ('$nombre', '$apellido', '$correo','$telefono_particular','$telefono_movil','$registros','$residencia','$ciudad','$estado','$notas','$datos_adjuntos');";

    if (mysqli_multi_query($conexion, $sql)) {
        echo "<script src='prueba.js'></script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
        
    mysqli_close($conexion);
    //echo "<img src=$datos_adjuntos>";
     

?>