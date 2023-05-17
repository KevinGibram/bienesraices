document.addEventListener('DOMContentLoaded', function(){

    eventListener();
});


function eventListener(){
    const barraMenu = document.querySelector('.barra-menu');

    barraMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive(){
    console.log('dando click');
}