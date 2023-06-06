//creation des variable
const menuHamburger = document.querySelector(".menu-hamburger")
const navLinks = document.querySelector(".nav-links")
const footer = document.querySelector("footer")
const h1 = document.querySelector("h1")
const asside = document.querySelector("aside")
const form = document.querySelector(".form")

// ecoute le click sur l'hamburger et ajoute la class mobile-menu ou l'enleve
menuHamburger.addEventListener('click',()=>{
navLinks.classList.toggle('mobile-menu')
footer.classList.toggle('mobile-menu')
h1.classList.toggle('mobile-menu')
asside.classList.toggle('mobile-menu')
form.classList.toggle('mobile-menu')
})