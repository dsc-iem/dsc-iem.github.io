window.sr = ScrollReveal();
sr.reveal('.images:nth-child(4n+1)', {
    reset:true,
    origin: 'left',
    duration: 1000,
    distance: '25rem',
    delay: 300
});
sr.reveal('.images:nth-child(4n+3)', {
    reset:true,
    origin: 'right',
    duration: 1000,
    distance: '25rem',
    delay: 300
});
sr.reveal('.event-des:nth-child(4n+2)', {
    reset:true,
    origin: 'rigth',
    duration: 1000,
    distance: '25rem',
    delay: 300
});
sr.reveal('.event-des:nth-child(4n)', {
    reset:true,
    origin: 'left',
    duration: 1000,
    distance: '25rem',
    delay: 300
});
var credits = document.getElementById('footer-credits-body');
var creditsButton = document.getElementById('footer-credits-button');

creditsButton.addEventListener("click", function(){
    credits.id="footer-credits-body-active";
    creditsButton.id="footer-credits-button-clicked";
});


const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const navLogo = document.querySelector(".logo");
const navLinksOpen = document.querySelectorAll(".nav-links li a");
const hamLines = document.querySelectorAll(".lines");

hamburger.addEventListener("click", () =>{
    navLinks.classList.toggle("open");
    navLogo.classList.toggle("hid");
    navLinksOpen.forEach(link => {
        if(link.style.color === "white"){
            link.style.color = "rgba(0,0,0,.5)"
        }
        else{
        link.style.color = "white";
        }
    });
});