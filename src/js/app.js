document.addEventListener('DOMContentLoaded', function(){

    eventListener();

    imgDar();
});

function imgDar(){ //dark_mode
    const dark = window.matchMedia('(prefer-color-schene: dark)');

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

const darkBoton = document.querySelector('.dark-mode-boton');

    darkBoton.addEventListener('click', function(){
        
        document.body.classList.toggle('darkMode');

        if(document.body.classList.contains('darkMode')){
            localStorage.setItem('modo-oscuro','true');
        } else {
            localStorage.setItem('modo-oscuro','false');
        }
    });

    if (localStorage.getItem('modo-oscuro') === 'true') {
        document.body.classList.add('darkMode');
    } else {
        document.body.classList.remove('darkMode');
    }




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