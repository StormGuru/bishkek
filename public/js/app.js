let offset = 0;
const slide = document.querySelector('.slide');
document.querySelector('.next').addEventListener('click', function(){
    offset = offset + 750;
    if(offset > 1500){
        offset = 0;
    }
    slide.style.left = -offset + 'px';
})
document.querySelector('.prev').addEventListener('click', function(){
    offset = offset - 750;
    if(offset < 0){
        offset = 1500;
    }
    slide.style.left = -offset + 'px';
})