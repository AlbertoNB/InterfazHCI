
// Función para disminuir el tamaño del texto (fuente) 
/*
if (document.body.classList.contains('text-la-sm')){
  $(".disminuir").on("click", function () {
    $("h1, h2, h3, h4, h5, h6, p, small").css("font-size", "-=2");
  });
}else{
  $(".disminuir").on("click", function () {
    $("h1.la-sm, h2.la-sm, h3.la-sm, h4.la-sm, h5.la-sm, h6.la-sm, p.la-sm, small.la-sm").css("font-size", "-=2");
  });
}
*/
$(".disminuir").on("click", function () {
  if (document.body.classList.contains('text-la-sm')) {
    $("h1, h2, h3, h4, h5, h6, p, label, input, small").css("font-size", "-=2");
  } else {
    $("h1.la-sm, h2.la-sm, h3.la-sm, h4.la-sm, h5.la-sm, h6.la-sm, p.la-sm, label.la-sm, input.la-sm, small.la-sm").css("font-size", "-=2");
  }
});

// Función para aumentar el tamaño del texto (fuente) 
$(".aumentar").on("click", function () {
  if (document.body.classList.contains('text-la-sm')) {
    $("h1, h2, h3, h4, h5, h6, p, label, input, small").css("font-size", "+=2");
  } else {
    $("h1.la-sm, h2.la-sm, h3.la-sm, h4.la-sm, h5.la-sm, h6.la-sm, p.la-sm, label.la-sm, input.la-sm, small.la-sm").css("font-size", "+=2");
  }
});

// Función para restablecer el tamaño del texto (fuente) al tamaño inicial 
$(".restablecer").on("click", function () {
  $("h1").css("font-size", "2.5rem");
  $("h2").css("font-size", "2rem");
  $("h3").css("font-size", "1.75rem");
  $("h4").css("font-size", "1.5rem");
  $("h5").css("font-size", "1.25rem");
  $("h6").css("font-size", "1rem");
  $("p, label, input").css("font-size", "16px");
  $("small").css("font-size", "80%");
});