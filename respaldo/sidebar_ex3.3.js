$('.sidebarCollapse').on('click', function () {
	$('.sidebar-left').toggleClass('active-sid');
	$('.sidebar-right').toggleClass('active-sid');
	$('.content-left').toggleClass('active-con');
	$('.content-right').toggleClass('active-con');
	$('.bt-sidebar-left').toggleClass('active-bt');
	$('.bt-sidebar-right').toggleClass('active-bt');
});
/*
const sidCollap = document.querySelector('.sidebarCollapse');
const sidebarLeft = document.querySelector('.sidebar-left');
const sidebarRight = document.querySelector('.sidebar-right');
const contentLeft = document.querySelector('.content-left');
const contentRight = document.querySelector('.content-right');
const btSidebarLeft = document.querySelector('.bt-sidebar-left');
const btSidebarRight = document.querySelector('.bt-sidebar-right');


sidCollap.addEventListener('click', ()=>{
	sidebarLeft.classList.toggle('active-sid');
	sidebarRight.classList.toggle('active-sid');
	contentLeft.classList.toggle('active-con');
	contentRight.classList.toggle('active-con');
	btSidebarLeft.classList.toggle('active-bt');
	btSidebarRight.classList.toggle('active-bt');
});*/