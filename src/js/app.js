document.addEventListener('DOMContentLoaded', function(){

    eventListener();

    darkMode();
});

function imgDar(){
    const darkBoton = document.querySelector('.dark-mode-boton');

    darkBoton.addEventListener('click', darkMode);
}

function darkMode(){
    console.log('dark');
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