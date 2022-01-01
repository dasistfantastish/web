let value = document.querySelectorAll("#tablevalue")

value.forEach(function(item){
    if(item.outerText == ""){
        item.innerHTML = "Немає данних"
    }
})