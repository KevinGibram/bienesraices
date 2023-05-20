document.addEventListener('DOMContentLoaded', function(){

    eventListener();

    imgDar();
});

function imgDar(){ //dark_mode segun preferencias de usuario
    const dark = window.matchMedia('(prefers-color-scheme: dark)');
    console.log(dark.matches);

    if(dark.matches){
        document.body.classList.add('darkMode');
    }else{
        document.body.classList.remove('darkMode')
    }

    dark.addEventListener('change', function(){
        if(dark.matches){
        document.body.classList.add('darkMode');
    }else{
        document.body.classList.remove('darkMode')
    }
    })
}

//agregar evento de dark-mode
const darkBoton = document.querySelector('.dark-mode-boton');

darkBoton.addEventListener('click', function(){
        
    document.body.classList.toggle('darkMode');

    if(document.body.classList.contains('darkMode')){
        localStorage.setItem('modo-oscuro','true');
    } else {
        localStorage.setItem('modo-oscuro','false');
    }
});


//agregando evento a barra de navegacion responsive
function eventListener(){
    const barraMenu = document.querySelector('.barra-menu');

    barraMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    if (navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    }
}