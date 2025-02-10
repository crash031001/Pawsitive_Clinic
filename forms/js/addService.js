const aceptarbtn = document.getElementById('aceptarbtn')
const create = document.getElementById('create')
const fecha = document.getElementById('fecha')
create.addEventListener('submit',(e)=>{
    e.preventDefault()
})
aceptarbtn.addEventListener('click', () => {

create.submit()

});