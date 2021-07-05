/*------------parte para el sidebar-----------*/
$('.sidebarCollapse').on('click', function () {
	$('.sidebar-left').toggleClass('active-sid');
	$('.sidebar-right').toggleClass('active-sid');
	$('.content-left').toggleClass('active-con');
	$('.content-right').toggleClass('active-con');
	$('.bt-sidebar-left').toggleClass('active-bt');
	$('.bt-sidebar-right').toggleClass('active-bt');
});
/*----------parte de boton/switch black white------------*/
const btnSwitch = document.querySelector('.switch');
btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');

//Guardar el modo en localstorage
    if (document.body.classList.contains('dark')) {
        localStorage.setItem('dark-mode', 'true');
    } else {
        localStorage.setItem('dark-mode', 'false');
    }

});
// Obtener el modo actual.
if (localStorage.getItem('dark-mode') === 'true') {
    document.body.classList.add('dark');
    btnSwitch.classList.add('active');

} else {
    document.body.classList.remove('dark');
    btnSwitch.classList.remove('active');
}