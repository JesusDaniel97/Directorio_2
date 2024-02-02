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



function añadir_cobertura(){
     
    let estados=["AGUASCALIENTES","BAJA CALIFORNIA","BAJA CALIFORNIA SUR","CAMPECHE","CAMPECHE",];
    
    var cobertura = document.createElement("select");
    var nombre = document.createElement("option");
    let option1Texto = document.createTextNode("ESTADOS");
    nombre.appendChild(option1Texto);

    for(let estado = 0; estado < estados.length;estado++){
          opciones = document.createElement("option");
          let option3Texto = document.createTextNode(estados[estado]);
          opciones.appendChild(option3Texto);
          cobertura.appendChild(opciones);
    }
    
    cobertura.appendChild(nombre);
    document.body.appendChild(cobertura);
    

}

function añadir_cobertura() {
    let estados = ["AGUASCALIENTES", "BAJA CALIFORNIA", "BAJA CALIFORNIA SUR", "CHIHUAHUA", "OAXACA"];

    var cobertura = document.createElement("select");
    var nombre = document.createElement("option");
    let option1Texto = document.createTextNode("Seleccionar Estado");
    nombre.appendChild(option1Texto);
    cobertura.appendChild(nombre);

    for (let estado = 0; estado < estados.length; estado++) {
        let opciones = document.createElement("option");
        let option3Texto = document.createTextNode(estados[estado]);
        opciones.appendChild(option3Texto);
        cobertura.appendChild(opciones);
    }

    // Añadir el evento onChange para manejar la selección del estado
    cobertura.addEventListener("change", function() {
        // Obtener el valor del estado seleccionado
        let selectedEstado = cobertura.value;

        // Llamar a la función para agregar el select de municipios
        agregarMunicipios(selectedEstado);
    });

    document.body.appendChild(cobertura);
}

function agregarMunicipios(estado) {
    // Define un objeto con los municipios para cada estado
    let municipiosPorEstado = {
        "AGUASCALIENTES": ["Aguascalientes Municipio 1", "Aguascalientes Municipio 2"],
        "BAJA CALIFORNIA": ["Baja California Municipio 1", "Baja California Municipio 2"],
        "BAJA CALIFORNIA SUR": ["Baja California Sur Municipio 1", "Baja California Sur Municipio 2"],
        "CHIHUAHUA": ["Chihuahua Municipio 1", "Chihuahua Municipio 2"],
        "OAXACA": ["Oaxaca Municipio 1", "Oaxaca Municipio 2"]
        // Agrega más estados y sus respectivos municipios según sea necesario
    };

    // Verificar si el estado tiene municipios definidos
    if (municipiosPorEstado.hasOwnProperty(estado)) {
        // Crear el select de municipios
        var municipiosSelect = document.createElement("select");
        var municipiosOption = document.createElement("option");
        let optionTexto = document.createTextNode("Seleccionar Municipio");
        municipiosOption.appendChild(optionTexto);
        municipiosSelect.appendChild(municipiosOption);

        // Agregar los municipios al select
        municipiosPorEstado[estado].forEach(function(municipio) {
            let municipioOption = document.createElement("option");
            let optionTexto = document.createTextNode(municipio);
            municipioOption.appendChild(optionTexto);
            municipiosSelect.appendChild(municipioOption);
        });

        // Añadir el select de municipios al body
        document.body.appendChild(municipiosSelect);
    }
}

// Llama a la función para agregar la cobertura con estados
añadir_cobertura();

