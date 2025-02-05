const aceptar = document.getElementById('aceptarbtn')
const cancelar = document.getElementById('cancelarbtn')
const inputNombre = document.getElementById('nombre')
const inputTelefono = document.getElementById('telefono')
const inputDireccion = document.getElementById('direccion')
const inputCargo = document.getElementById('cargo')


aceptar.addEventListener('click', () => {
    const nombre = inputNombre.value.trim()
    const telefono = inputTelefono.value.trim()
    const direccion = inputDireccion.value.trim()
    const cargo = inputCargo.value.trim();
    if (nombre === '' || 
        telefono === '' || 
        direccion === '' || 
        cargo === '') {
        alert('Debe rellenar todos los campos')
    }else {
    if (nombre.length < 3) {
        alert('Debe ingresar un nombre y apellido válido')
    }if (telefono.length !== 8 || isNaN(telefono)) {
        alert('El teléfono debe tener 8 dígitos numéricos')
    }if (direccion.length < 5) {
        alert('La dirección debe tener al menos 5 caracteres y contener un número')
    }if (cargo.split(' ').length < 2 || cargo.length < 3) {
       alert('Debe ingresar una cargo válido')
   }else{
    alert('Se ha registrado correctamente') //Arreglar esto y subir cliente a la BD 
   }
}
});