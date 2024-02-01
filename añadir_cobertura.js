function añadir_cobertura(){

    
   
    var cobertura = document.createElement("select");
    var nombre = document.createElement("option");
    var opcion1 = document.createElement("option");
    let option1Texto = document.createTextNode("ESTADOS");
    let option3Texto = document.createTextNode("AGUASCALIENTES");
    nombre.appendChild(option1Texto);
    opcion1.appendChild(option3Texto);

    var municipio = document.createElement("select");
    var nombre2 = document.createElement("option");
    let option2Texto = document.createTextNode("municipios");
    nombre2.appendChild(option2Texto);

    cobertura.appendChild(nombre);
    municipio.appendChild(nombre2);
    cobertura.appendChild(opcion1);
    document.body.appendChild(cobertura);
    document.body.appendChild(municipio);

}
