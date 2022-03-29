/*=======================PARTE DEL SIDEBAR=========================*/
//Posición y activación del sidebar (respaldo/sidebar_ex3.3js)
$('.sidebarCollapse').on('click', function () {
	//Posición del sidebar (izquierda y derecha)
	$('.sidebar-left').toggleClass('active-sid');
	$('.sidebar-right').toggleClass('active-sid');
	//Posición del contenido contrario al sidebar (izquierda y derecha)
	$('.content-left').toggleClass('active-con');
	$('.content-right').toggleClass('active-con');
	//Posición del botón del sidebar (izquierda y derecha) 
	$('.bt-sidebar-left').toggleClass('active-bt');
	$('.bt-sidebar-right').toggleClass('active-bt');
});
