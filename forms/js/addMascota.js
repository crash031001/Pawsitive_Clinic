const aceptar = document.getElementById('aceptarbtn')
const cancelar = document.getElementById('cancelarbtn')
const inputNombre = document.getElementById('nombre')
const inputTipo = document.getElementById('tipo')
const inputColor = document.getElementById('color')
const inputEdad = document.getElementById('edad')


aceptar.addEventListener('click', () => {
    const nombre = inputNombre.value.trim()
    const tipo = inputTipo.value.trim()
    const color = inputColor.value.trim()
    const edad = inputEdad.value.trim();
    if (nombre === '' || 
        tipo === '' || 
        color === '' || 
        edad === '') {
        alert('Debe rellenar todos los campos')
    }else {
    if (nombre.length < 3) {
        alert('Debe ingresar un nombre válido')
    }if (edad.length > 2 )
        alert('La edad debe tener 2 dígitos numéricos como máximo')
    }if (color.length < 4) {
        alert('El color debe tener al menos 4 caracteres')
    }if (tipo.length < 4) {
        alert('El tipo debe tener al menos 4 caracteres')
   }else{
    alert('Se ha registrado correctamente') //Arreglar esto y subir cliente a la BD 
   }
})