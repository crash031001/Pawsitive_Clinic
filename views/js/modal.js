const btnAccept = document.getElementById('accept')
const eliminar = document.querySelectorAll('.eliminar')
const modal = document.querySelector('.mod')
const wind = document.querySelector('.window')
const prevId = document.getElementById('prevId')
const deleteId = document.getElementById('delete_id')
const cancelBtn = document.getElementById('cancel')

eliminar.forEach(e => {
    e.addEventListener('click',()=>{
        const id = e.getAttribute("data-id")
        console.log(id)
        modal.style.display = 'flex'
        setTimeout(()=>{
            wind.classList.add('show')
        },200)
        deleteId.value = id
    })
})
btnAccept.addEventListener('click',()=>{
    modal.style.display = 'none'
    wind.classList.remove('show')
})
cancelBtn.addEventListener('click',()=>{

    wind.classList.remove('show')
    setTimeout(()=>{
    modal.style.display = 'none'
    },300)
})
