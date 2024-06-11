const cslider = document.querySelector('.swrr');
const slideimg = document.querySelectorAll('.sora');

const prev = document.querySelector('.prev');
const nxt = document.querySelector('.nxt');

let counter = 1;
const size = slideimg[0].clientWidth;

cslider.style.transform = 'translateX(' + (-size * counter) + 'px)';

nxt.addEventListener('click', ()=>{
    cslider.style.transition = "transform 0.4s ease-in-out";
    counter++;
    cslider.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prev.addEventListener('click', ()=>{
    cslider.style.transition = "transform 0.4s ease-in-out";
    counter--;
    cslider.style.transform = 'translateX(' + (-size * counter) + 'px)';
});