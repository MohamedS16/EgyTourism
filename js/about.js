var navlinks = document.getElementById("navlinks");
function showMenu() {
    navlinks.style.right= "0";
    navlinks.style.display="block";
}
function hideMenu() {
    navlinks.style.right ="-200px";
    navlinks.style.display = "none"
}

/* About us Page*/
var remove = document.querySelector('.remove');
var one = document.querySelector('.no-1');
var two = document.querySelector('.no-2');
var three = document.querySelector('.no-3');
var about = document.querySelector('.about-us');
var vision = document.querySelector('.vision');
var mission = document.querySelector('.mission');
one.addEventListener('click',function(){
    about.classList.remove('remove');
    vision.classList.add('remove');
    mission.classList.add('remove')
})
two.addEventListener('click',function(){
    about.classList.add('remove');
    vision.classList.remove('remove');
    mission.classList.add('remove')
})
three.addEventListener('click',function(){
    about.classList.add('remove');
    vision.classList.add('remove');
    mission.classList.remove('remove')
})