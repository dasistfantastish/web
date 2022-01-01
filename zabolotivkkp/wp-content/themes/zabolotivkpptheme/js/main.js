let headerName = document.querySelectorAll("#headerName")
let navLink = document.querySelectorAll("#navLogin")
let logout = document.querySelectorAll("#logout")

function cookieSearch(){
    let value = document.cookie.match().input.split(";")
    let res = value.filter(x => x.match(/username/))
    let userName = res.toString().split("=")[1]
    userName = decodeURI(userName).split("+").join(" ")
    if(userName == 'undefined'){
        headerName.forEach((element)=>{
            element.classList.add("no-show")
        })
        navLink.forEach((element)=>{
            element.classList.remove("active")
        })
    }else{
        headerName.forEach((element)=>{
            element.innerHTML = userName
        })
    } 
}
document.addEventListener("DOMContentLoaded",cookieSearch())

logout.forEach((element)=>{
    element.addEventListener("click", ()=>{
        let value = document.cookie.match().input.split(";")
        let res = value.filter(x => x.match(/username/))
        document.cookie = "username" + '=; Path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;'
    })
})



