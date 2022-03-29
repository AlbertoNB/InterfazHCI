
/*==================CONTROL DE TAMAÑO DE TIPOGRAFÍA=====================*/
// Controla el tamaño de la tipografía (respaldo/text_mm_r2.js)
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