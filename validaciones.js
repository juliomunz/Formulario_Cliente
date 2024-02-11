function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var rut = document.getElementById("rut").value;
    var direccion = document.getElementById("direccion").value;
    var telefono = document.getElementById("telefono").value;
    var email = document.getElementById("email").value;
    var fechaInicio = document.getElementById("fechaInicio").value;
    var fechaCierre = document.getElementById("fechaCierre").value;

    // Validar que los campos no estén vacíos
    if (nombre === "" || apellido === "" || rut === "" || direccion === "" || telefono === "" || email === "" || fechaInicio === "" || fechaCierre === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

    return true;
}