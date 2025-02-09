const aceptarbtn = document.getElementById('aceptarbtn')
const create = document.getElementById('create')
create.addEventListener('submit',(e)=>{
    e.preventDefault()
})
aceptarbtn.addEventListener('click', () => {

create.submit()

});