<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <form action="" method="post">
         <div class="input-field col s12 m12 l6">
                <select id="municipios_cobertura" name="municipios_cobertura" class="form-select" aria-label="Default select example"></select>
                <label for="municipios_cobertura">Municipio</label>
         </div>

            <select id="cobertura" name="cobertura" class="form-select" aria-label="Default select example"></select>
            <label for="cobertura">Estado</label>
        </form>
    </div>
   
    <input type="submit" value="añadir cobertura">

    <button onclick="añadir_cobertura()">Añadir mas coberturas</button>
    <script src="añadir_cobertura.js"></script> 
    <script src="cobertura.js"></script>
 
</body>
</html>
