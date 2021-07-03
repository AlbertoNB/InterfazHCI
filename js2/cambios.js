$('.sidebarCollapse').on('click', function () {
	$('.sidebar-left').toggleClass('active-sid');
	$('.sidebar-right').toggleClass('active-sid');
	$('.content-left').toggleClass('active-con');
	$('.content-right').toggleClass('active-con');
	$('.bt-sidebar-left').toggleClass('active-bt');
	$('.bt-sidebar-right').toggleClass('active-bt');
});