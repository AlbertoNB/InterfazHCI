const BigCursor = document.querySelector('.bt-big-cursor');
BigCursor.addEventListener('click', () => {
    document.body.classList.toggle('big-cursor');

    //Guardar el modo en localstorage
    if (document.body.classList.contains('big-cursor')) {
        localStorage.setItem('cursor-mode', 'true');
    } else {
        localStorage.setItem('cursor-mode', 'false');
    }
});

// Obtener el modo actual.
if (localStorage.getItem('cursor-mode') === 'true') {
    document.body.classList.add('big-cursor');
} else {
    document.body.classList.remove('big-cursor');
}