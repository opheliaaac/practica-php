window.onload = function () {

    let boton = document.getElementById("boton");
    boton.addEventListener('click',validar);

}

function validar(e) {
    let nombre = document.getElementById("nombre");
    let apellido = document.getElementById("apellido");

    let nombreCheck = validaCampo(nombre);
    let apellidoCheck = validaCampo(apellido);
    
    if (!nombreCheck || !apellidoCheck) {
        e.preventDefault();
    } 
}

/*
Función que valida que el usuario no haya introducido solo espacios en blanco
*/
function validaCampo(dato) {
    let recorte = dato.value.trim();
    if (recorte === "") {
        dato.className = dato.className + " error";
        return false;
    } else {
        if (dato.className.includes("error")){
            dato.className = dato.className.replace('error','');
        }
        return true;
    }
}