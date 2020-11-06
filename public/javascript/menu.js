var nav = document.getElementById("nav");
var hamburgerIcon = document.getElementById("hamburgerIcon");
hamburgerIcon.addEventListener('click',toggleMenu);
function toggleMenu(){
    nav.classList.toggle('open');
}