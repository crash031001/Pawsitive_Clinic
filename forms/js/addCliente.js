const aceptarbtn = document.getElementById('aceptarbtn')
const cancelarbtn = document.getElementById('cancelarbtn')
const inputNombre = document.getElementById('inputNombre')
const inputTelefono = document.getElementById('inputTelefono')
const inputDireccion = document.getElementById('inputDireccion')
const inputZona = document.getElementById('inputZona')
const create = document.getElementById('create')
const errTags = document.getElementById('errors')
create.addEventListener('submit',(e)=>{
    e.preventDefault()
})
aceptarbtn.addEventListener('click', () => {
    let err = []
    errTags.innerHTML = ''
    const nombre = inputNombre.value.trim()
    const telefono = inputTelefono.value.trim()
    const direccion = inputDireccion.value.trim()
    const zona = inputZona.value.trim();
    if (nombre === '' || 
        telefono === '' || 
        direccion === '' || 
        zona === '') {
        err.push('Debe rellenar todos los campos')
    }else {
    if (nombre.length < 3) {
        err.push('Debe ingresar un nombre y apellido válido')
    }if (telefono.length !== 8 || isNaN(telefono)) {
        err.push('El teléfono debe tener 8 dígitos numéricos')
    }if (direccion.length < 5) {
        err.push('La dirección debe tener al menos 5 caracteres y contener un número')
    }if (zona.split(' ').length < 2 || zona.length < 3) {
        err.push('Debe ingresar una zona válida')
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