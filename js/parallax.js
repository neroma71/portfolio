let body = document.querySelector('body');
let accueil = document.querySelector('.accueil');
let nav = document.querySelector('nav ul');
let headBand = document.querySelector('#headband');
let langage = document.querySelectorAll('.langage');
let cat = document.querySelector('.category');
let right = document.querySelectorAll('.right');
let scrollBar = document.querySelector('.scrollbar');
let scrollBar2 = document.querySelector('.scrollbar2');

let hauteur = accueil.clientHeight;

    window.addEventListener('scroll', ()=>{
        let scroll = window.scrollY / (body.clientHeight - window.innerHeight);
        let scrollPercent = Math.round(scroll * 100);
        scrollBar.style.width = scrollPercent + "%";
        scrollBar2.style.height = scrollPercent + "%";
        
        accueil.style.backgroundPositionY = -window.scrollY / 2 + "px";
        headBand.style.backgroundPositionY = window.scrollY / 4 + "px";

        for(let rgt of right){
            rgt.style.backgroundSize = window.scrollY * 1.5 + "px";
        }
        if(window.scrollY > 40){
            nav.style.marginTop = "0px";
            nav.style.backgroundColor = "rgba(80, 6, 200, 0.5)"
        }
        else{
            nav.style.marginTop = "40px";
            nav.style.backgroundColor = "transparent";
        }
        if(window.scrollY > hauteur * 1.1){
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
console.log (screen.width + "*" + screen.height + "\n");

   