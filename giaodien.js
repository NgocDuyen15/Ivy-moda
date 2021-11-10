const header = document.querySelector("header")
window.addEventListener("scroll", function(){
    x = window.pageYOffset
    if (x > 0){
        header.classList.add("sticky")
    }else{
        header.classList.remove("sticky")
    }
})
const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContenr = document.querySelector(".aspect-ratio-169")
const dotItem = document.querySelectorAll(".dot")
let imgNuber = imgPosition.length
let index = 0
imgPosition.forEach(function(image, index){
     image.style.left = index*100 + "%"
     dotItem[index].addEventListener("click", function (){
        slide (index)
     })
})
function imgSlide (){
    index++
    if ( index >= imgNuber ) {index=0}
    slide (index)
}
function slide (index){
    imgContenr.style.left = '-' + index*100 + '%'
    const dotActive = document.querySelector(".active")
    dotActive.classList.remove('active')
    dotItem[index].classList.add('active')
}
setInterval(imgSlide, 5000)
// cartegory
const itemliderbar = document.querySelectorAll(".cartegory-left-li")
itemliderbar.forEach(function(menu, index){
    menu.addEventListener("click", function(){
        menu.classList.toggle("block")
    }) 
})