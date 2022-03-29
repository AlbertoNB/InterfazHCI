/*=======================Parte del sidebar=========================*/
$('.sidebarCollapse').on('click', function () {
	$('.sidebar-left').toggleClass('active-sid');
	$('.sidebar-right').toggleClass('active-sid');
	$('.content-left').toggleClass('active-con');
	$('.content-right').toggleClass('active-con');
	$('.bt-sidebar-left').toggleClass('active-bt');
	$('.bt-sidebar-right').toggleClass('active-bt');
});

/*=======================Boton/switch black white==============================*/
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

/*============================Cursor mas grande============================*/
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

/*===================Tipografia para disléxicos=======================*/
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

/*=====================Interfaz en blanco y negro===================*/
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

/*=============0=====Control de tamaño de tipografia=====================*/
// Función para disminuir el tamaño del texto (fuente)
$(".disminuir").on("click", function () {
    if (document.body.classList.contains('text-la-sm')) {
      $("h1, h2, h3, h4, h5, h6, p, label, input, textarea, a, button, small").css("font-size", "-=2");
    } else {
      $(".la-sm").css("font-size", "-=2");
    }
  });
  
  // Función para aumentar el tamaño del texto (fuente) 
  $(".aumentar").on("click", function () {
    if (document.body.classList.contains('text-la-sm')) {
      $("h1, h2, h3, h4, h5, h6, p, label, input, textarea, a, button, small").css("font-size", "+=2");
    } else {
      $(".la-sm").css("font-size", "+=2");
    }
  });
  
  // Función para restablecer el tamaño del texto (fuente) al tamaño inicial 
  $(".restablecer").on("click", function () {
    $("h1, .h1").css("font-size", "2.5rem");
    $("h2, .h2").css("font-size", "2rem");
    $("h3, .h3").css("font-size", "1.75rem");
    $("h4, .h4").css("font-size", "1.5rem");
    $("h5, .h5").css("font-size", "1.25rem");
    $("h6, .h6").css("font-size", "1rem");
    $("p, label, input, textarea, a, button").css("font-size", "16px");
    $(".btn-sm").css("font-size", "0.875rem");
    $("small, .small, .blockquote-footer").css("font-size", "80%");
    $(".bt-sidebar-right, .bt-sidebar-left").css("font-size", "3.5rem");
  });
