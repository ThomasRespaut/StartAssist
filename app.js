let toggle = document.querySelector('.toggle');
let body = document.querySelector('body'); 
let liens = document.getElementsByClassName('menu_link')


for (let i = 0; i < liens.length; i++) {
    liens[i].addEventListener('click', function(){
        body.classList.toggle('open'); 
    })
}


toggle.addEventListener('click', function () {
    body.classList.toggle('open'); 
})

let tl = gsap.timeline(); 

tl.from('.accueil', {
    duration: 0.75,
    filter : "blur(10px)"
})

tl.from('.navbar',{
    duration: 1.25,
    x : '-100%'
})


tl.from('.logo, .menu, .toggle', {
    duration: 0.75,
    opacity: 0
}); 

tl.from('.accueil_text_top, .accueil_text_mid, .accueil_text_bot', {
    duration: 0.75,
    opacity: 0
}); 

tl.from('.accueil_text_top .sep' , {
    duration: 0.75,
    width : '0px'
}); 



