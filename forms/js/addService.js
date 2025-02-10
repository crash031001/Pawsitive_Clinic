const aceptar = document.getElementById('aceptarbtn')
const cancelar = document.getElementById('cancelarbtn')
const errTags = document.getElementById('errors')
const create = document.getElementById('create')
const inputNombre = document.getElementById('nombre')
const inputFecha = document.getElementById('fecha')
const inputCosto = document.getElementById('costo')
const inputDetalles = document.getElementById('detalles')

create.addEventListener('submit',(e)=>{
    e.preventDefault()
})
aceptar.addEventListener('click', () => {
    let err = []
    errTags.innerHTML = ''
    const nombre = inputNombre.value.trim()
    const fecha = inputFecha.value.trim()
    const costo = inputCosto.value.trim()
    const detalles = inputDetalles.value.trim()
    const nombreRegex = /^[A-Za-zÁÉÍÓÚáéíóúÜüÑñ\s]+$/ 
    const fechaRegex = /^\d{4}-\d{2}-\d{2}$/
    const anho = parseInt(fecha.substring(0, 4))
    const mes = parseInt(fecha.substring(5, 7))
    const dia = parseInt(fecha.substring(8, 10))
    const diasEnMes = [31, (anho % 4 === 0 && anho % 100 !== 0) || anho % 400 === 0 ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
    const palabras = detalles.trim().split(/\s+/)
    if (nombre === '' || 
        fecha === '' || 
        costo === '' || 
        detalles === '') {
        err.push('Debe rellenar todos los campos')
    }else {
    if (!nombreRegex.test(nombre) || nombre.length < 6) {
        err.push('El nombre debe contener solo letras, al menos 6 caracteres')
    }
    if (costo < 1 ){
        err.push('El valor del costo debe ser mayor que 0')
    }
    if (!fechaRegex.test(fecha)) {
        err.push('La fecha debe tener el formato AAAA-MM-DD')
    }
    if (anho > 2025) {
        err.push('El año no puede ser mayor a 2025')
    }
    if (mes > 12 || mes < 1) {
        err.push('El mes debe estar entre 1 y 12')
    }
    if (dia < 1 || dia > diasEnMes[mes - 1]) {
        err.push(`El día debe estar entre 1 y ${diasEnMes[mes - 1]} para el mes ${mes}`);
    }
    if (palabras.length < 2) {
        err.push('Los detalles deben contener al menos 2 palabras.')
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