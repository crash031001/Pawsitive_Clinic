const aceptar = document.getElementById('aceptarbtn')
const cancelar = document.getElementById('cancelarbtn')
const inputNombre = document.getElementById('nombre')
const inputTipo = document.getElementById('tipo')
const inputColor = document.getElementById('color')
const inputEdad = document.getElementById('edad')
const create = document.getElementById('create')
const errTags = document.getElementById('errors')
create.addEventListener('submit',(e)=>{
    e.preventDefault()
})
aceptar.addEventListener('click', () => {
    let err = []
    errTags.innerHTML = ''
    const nombre = inputNombre.value.trim()
    const tipo = inputTipo.value.trim()
    const color = inputColor.value.trim()
    const edad = inputEdad.value.trim();
    if (nombre === '' || 
        tipo === '' || 
        color === '' || 
        edad === '') {
        err.push('Debe rellenar todos los campos')
    }else {
    if (nombre.length < 3) {
        err.push('Debe ingresar un nombre válido')
    }
    if (edad.length > 2 ){
        err.push('La edad debe tener 2 dígitos numéricos como máximo')
    }
    if (color.length < 4) {
        err.push('El color debe tener al menos 4 caracteres')
    }
    if (tipo.length < 4) {
        err.push('El tipo debe tener al menos 4 caracteres')
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
})