const aceptarbtn = document.getElementById('aceptarbtn')
const cancelarbtn = document.getElementById('cancelarbtn')
const inputNombre = document.getElementById('inputNombre')
const inputTelefono = document.getElementById('inputTelefono')
const inputDireccion = document.getElementById('inputDireccion')
const inputZona = document.getElementById('inputZona')


aceptarbtn.addEventListener('click', () => {
    const nombre = inputNombre.value.trim()
    const telefono = inputTelefono.value.trim()
    const direccion = inputDireccion.value.trim()
    const zona = inputZona.value.trim();
    if (nombre === '' || 
        telefono === '' || 
        direccion === '' || 
        zona === '') {
        alert('Debe rellenar todos los campos')
    }else {
    if (nombre.length < 3) {
        alert('Debe ingresar un nombre y apellido válido')
    }if (telefono.length !== 8 || isNaN(telefono)) {
        alert('El teléfono debe tener 8 dígitos numéricos')
    }if (direccion.length < 5) {
        alert('La dirección debe tener al menos 5 caracteres y contener un número')
    }if (zona.split(' ').length < 2 || zona.length < 3) {
       alert('Debe ingresar una zona válida')
   }else{
    alert('Se ha registrado correctamente') //Arreglar esto y subir cliente a la BD 
   }
}
});