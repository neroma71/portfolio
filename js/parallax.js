let accueil = document.querySelector('.accueil');
let nav = document.querySelector('nav ul');
let headBand = document.querySelector('#headband');
let langage = document.querySelectorAll('.langage');
let cat = document.querySelector('.category');
let right = document.querySelectorAll('.right');
let hauteur = accueil.clientHeight;

    window.addEventListener('scroll', ()=>{
        accueil.style.backgroundPositionY = window.scrollY / 2 + "px";
        headBand.style.backgroundPositionY = window.scrollY / 4 + "px";

        for(let rgt of right){
            rgt.style.backgroundSize = window.scrollY * 1.5 + "px";
        }

        if(window.scrollY > 40){
            nav.style.height = "40px";
            nav.style.backgroundColor = "#6431b5"
        }
        else{
            nav.style.height = "70px";
            nav.style.backgroundColor = "transparent";
        }

        if(window.scrollY > hauteur * 1.23){
            for(let lang of langage){
                lang.style.opacity = 1;
            }
        }else{
            for(let lang of langage){
                lang.style.opacity = 0;
            }
        }
    })
let open = document.querySelector('.open');
let menu = document.querySelector('.menu2');
open.addEventListener('click',()=>{
    menu.classList.toggle('menubis');
    open.classList.toggle('close');
})



   