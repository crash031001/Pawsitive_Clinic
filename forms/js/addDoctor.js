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
    if (nombre === '' || 
        telefono === '' || 
        direccion === '' || 
        cargo === '') {
        err.push('Debe rellenar todos los campos')
    }else {
    if (nombre.split(' ').length < 2 || nombre.length < 3) {
        err.push('Debe ingresar un nombre y apellido válido')
    }if (telefono.length !== 8 || isNaN(telefono)) {
        err.push('El teléfono debe tener 8 dígitos numéricos')
    }if (direccion.length < 5) {
        err.push('La dirección debe tener al menos 5 caracteres')
    }if (cargo.length < 5) {
        err.push('El cargo debe tener al menos 5 caracteres')
    }
}
if (err.length != 0) {
    err.forEach(elem=>{
        const tag = document.createElement('li')
        tag.textContent = elem
        tag.classList.add('text-danger')
        tag.classList.add('mb-2')
        tag.classList.add('m-0')
        errTags.appendChild(tag)
    })
}else{
create.submit()
}
});