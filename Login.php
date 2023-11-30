<?php
 try{
    $base = new PDO("mysql:host=localhost;dbname=directorio","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="SELECT*FROM registro WHERE Usuario=:usuario AND Contrasenia=:contrasenia AND permiso=:permiso";
    $resultado = $base->prepare($sql);
    $usuario=htmlentities(addslashes($_POST["usuario"]));
    $contraseña=htmlentities(addslashes($_POST["contrasenia"]));
    $permiso=htmlentities(addslashes($_POST["permiso"]));
    $resultado->bindValue("usuario",$usuario);
    $resultado->bindValue("contrasenia",$contraseña);
    $resultado->bindValue("permiso",$permiso);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){
        if($permiso == "lector"){
            session_start();
            $_SESSION["usuario"] = $_POST["usuario"];
            header("Location:Sesion.php");
        }
        if($permiso == "administrador"){
            session_start();
            $_SESSION["usuario"] = $_POST["usuario"];
            header("Location:Administrador.php");
        }    
    
    }else{
        header("Location:index.html");
    }
 }catch(Exception $e){
     die("Error:". $e -> getMessage());
 }

?>
