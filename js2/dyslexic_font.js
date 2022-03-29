/*===================TIPOGRAFÍA PARA DISLÉXICOS=======================*/
//Activación de una tipografía diferente en toda la interfaz (Tipografía utilizada para disléxicos: OpenDyslexic) 
const DyslexicFont = document.querySelector('.bt-dyslexic-font');
DyslexicFont.addEventListener('click', () => {
    document.body.classList.toggle('open-dyslexic');

    //Guardar el modo en localstorage
    if (document.body.classList.contains('open-dyslexic')) {
        localStorage.setItem('dyslexic-mode', 'true');
    } else {
        localStorage.setItem('dyslexic-mode', 'false');
    }
});

// Obtener el modo actual.
if (localStorage.getItem('dyslexic-mode') === 'true') {
    document.body.classList.add('open-dyslexic');
} else {
    document.body.classList.remove('open-dyslexic');
}