<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <input type="submit" name="añadir" value="añadir">
    </form>
    
     <?php 
        /*if(isset($_POST['añadir'])){
             echo "boton1";
         }*/
         while(isset($_POST['añadir'])){
               echo "boton1";
             
         }
         
     ?>

</body>
</html>