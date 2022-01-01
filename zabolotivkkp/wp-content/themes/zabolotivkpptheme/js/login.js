let loginInput = document.getElementsByName("login")[0]
let passInput = document.getElementsByName("pass")[0]
let form = document.querySelector(".def__form")

form.addEventListener("submit",()=>{
    document.cookie = `login=${loginInput.value}; path="/";max-age=120 `
    document.cookie = `pass=${passInput.value}; path="/";max-age=120 `
    window.open("http://zabolotivkkp/")
})

window.addEventListener("click",()=>{
    console.log(document.cookie)
})