$('.sidebarCollapse').on('click', function () {
	$('.sidebar-left').toggleClass('active-sid');
	$('.sidebar-right').toggleClass('active-sid');
});

$('.sidebarCollapse').on('click', function () {
	$('.content-left').toggleClass('active-con');
	$('.content-right').toggleClass('active-con');
});

$('.sidebarCollapse').on('click', function () {
	$('.bt-sidebar-left').toggleClass('active-bt');
	$('.bt-sidebar-right').toggleClass('active-bt');
});