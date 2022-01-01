let nameInput = document.getElementsByName("name1")[0]
let loginInput = document.getElementsByName("login")[0]
let addresInput = document.getElementsByName("addres")[0]
let passInput = document.getElementsByName("pass")[0]
let btn = document.querySelector("#regBtn")
let form = document.querySelector(".def__form")

let countName = false
let countLogin = false
let countAddres = false
let countPass = false



nameInput.addEventListener("change",()=>{
    let nameValue = nameInput.value
    nameValue = nameValue.split("")
    if(nameValue.length > 0){
        countName = true
    }else if(nameValue.length == 0){
        countName = false
    }
})
loginInput.addEventListener("change",()=>{
    let loginValue = loginInput.value
    loginValue = loginValue.split("")
    if(loginValue.length > 0){
        countLogin = true
    }else if(loginValue.length == 0){
        countLogin = false
    }
})
addresInput.addEventListener("change",()=>{
    let addresValue = addresInput.value
    addresValue = addresValue.split("")
    if(addresValue.length > 0){
        countAddres = true
    }else if(addres.length == 0){
        countAddres = false
    }
})
passInput.addEventListener("change",()=>{
    let passValue = passInput.value
    passValue = passValue.split("")
    if(passValue.length > 0){
        countPass = true
    }else if(passValue.length == 0){
        countPass = false
    }
})
function checkVisibility(){
    let check1 = setInterval(() => {
        if(countName == true && countLogin == true && countAddres == true && countPass == true){
            btn.classList.remove("no-show")
            let cookie = document.cookie
            console.log(cookie, "1")
        }
    }, 1000);
}
function checkNoVisibility(){
    let check2 = setInterval(() => {
        if(countName != true || countLogin != true || countAddres != true || countPass != true){
            btn.classList.add("no-show")
        }
    }, 1000);
}

checkVisibility()
checkNoVisibility()

form.addEventListener("submit",()=>{
    document.cookie = `login=${loginInput.value}; path="/";max-age=120 `
    window.open("http://zabolotivkkp/login/")
})

