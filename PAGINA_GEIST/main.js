// MENU
function toggleMenu(){
    var menuToggle = document.querySelector('.toggle');
    var menu = document.querySelector('.menu');
    menuToggle.classList.toggle('active');
    menu.classList.toggle('active');
}



// SLIDER

var contador = 1;
setInterval(function(){
    document.getElementById('radio' + contador).checked = true;
    contador++;
    if(contador > 4){
        contador = 1;
    }
}, 7000);

