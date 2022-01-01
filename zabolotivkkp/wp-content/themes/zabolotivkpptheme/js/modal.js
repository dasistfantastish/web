document.addEventListener("DOMContentLoaded",()=>{
    let btn = document.querySelectorAll(".contact__modal")
    let modal = document.querySelector(".modal")
    let closeBtn = modal.querySelector(".close__btn")
    
    btn.forEach((item)=>{
        item.addEventListener("click", (event)=>{
            event.preventDefault()
            modal.classList.add("modal--active")
        })
        closeBtn.addEventListener("click", (event)=>{
            event.preventDefault()
            modal.classList.remove("modal--active")
        })
        modal.addEventListener("click", (event)=>{
            target = event.target
            let modalContent = modal.querySelector(".modal__content")
            if(event.target.closest("." + modalContent.className) === null){
                modal.classList.remove("modal--active")
            }
        })
    })})