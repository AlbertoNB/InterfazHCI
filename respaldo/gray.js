const pGrayScale = document.querySelector('.bt-grayscale');
pGrayScale.addEventListener('click', () => {
    document.body.classList.toggle('grayscale');

    //Guardar el modo en localstorage
    if (document.body.classList.contains('grayscale')) {
        localStorage.setItem('grayscale-mode', 'true');
    } else {
        localStorage.setItem('grayscale-mode', 'false');
    }
});

// Obtener el modo actual.
if (localStorage.getItem('grayscale-mode') === 'true') {
    document.body.classList.add('grayscale');
} else {
    document.body.classList.remove('grayscale');
}