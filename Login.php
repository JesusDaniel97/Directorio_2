<?php
 try{
    $base = new PDO("mysql:host=localhost;dbname=directorio","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="SELECT*FROM registro WHERE Usuario=:usuario AND Contrasenia=:contrasenia";
    $resultado = $base->prepare($sql);
    $usuario=htmlentities(addslashes($_POST["usuario"]));
    $contraseña=htmlentities(addslashes($_POST["contrasenia"]));
    $resultado->bindValue("usuario",$usuario);
    $resultado->bindValue("contrasenia",$contraseña);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){
        session_start();
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location:Sesion.php");
    
    }else{
        header("Location:index.html");
    }
 }catch(Exception $e){
     die("Error:". $e -> getMessage());
 }

?>