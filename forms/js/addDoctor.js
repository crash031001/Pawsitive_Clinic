const aceptar = document.getElementById('aceptarbtn')
const cancelar = document.getElementById('cancelarbtn')
const inputNombre = document.getElementById('nombre')
const inputTelefono = document.getElementById('telefono')
const inputDireccion = document.getElementById('direccion')
const inputCargo = document.getElementById('cargo')
const create = document.getElementById('create')
const errTags = document.getElementById('errors')
create.addEventListener('submit',(e)=>{
    e.preventDefault()
})
aceptar.addEventListener('click', () => {
    let err = []
    errTags.innerHTML = ''
    const nombre = inputNombre.value.trim()
    const telefono = inputTelefono.value.trim()
    const direccion = inputDireccion.value.trim()
    const cargo = inputCargo.value.trim();
    const nombreRegex = /^[A-Za-zÁÉÍÓÚáéíóúÜüÑñ]+\s[A-Za-zÁÉÍÓÚáéíóúÜüÑñ\s]+$/
    const telefonoRegex = /^[0-9]{8}$/
    const direccionRegex = /^[A-Za-z\s]+\s[A-Za-z\s]+.*[0-9]+/
    if (nombre === '' || 
        telefono === '' || 
        direccion === '' || 
        cargo === '') {
        err.push('Debe rellenar todos los campos')
    }else {
    if (!nombreRegex.test(nombre)) {
        err.push('El nombre debe contener solo letras y al menos dos palabras')
    }if (!telefonoRegex.test(telefono)) {
        err.push('El teléfono debe tener 8 dígitos numéricos')
    }if (!direccionRegex.test(direccion)) {
        err.push('La dirección debe contener al menos dos palabras y un número.')
    }if (cargo.length < 5) {
        err.push('El cargo debe tener al menos 5 caracteres')
    }
}
if (err.length != 0) {
    err.forEach(elem=>{
        const tag = document.createElement('li')
        tag.textContent = elem
        tag.classList.add('mb-2')
        tag.classList.add('err')
        tag.classList.add('fw-bold')
        errTags.appendChild(tag)
    })
}else{
create.submit()
}
});