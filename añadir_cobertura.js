function añadir_cobertura(){

    var cobertura = document.createElement("select");
    var nombre = document.createElement("option");
    let option1Texto = document.createTextNode("estados");
    nombre.appendChild(option1Texto);

    var municipio = document.createElement("select");
    var nombre2 = document.createElement("option");
    let option2Texto = document.createTextNode("municipios");
    nombre2.appendChild(option2Texto);

    cobertura.appendChild(nombre);
    municipio.appendChild(nombre2);
    document.body.appendChild(cobertura);
    document.body.appendChild(municipio);
}