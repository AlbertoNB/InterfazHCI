
// Función para disminuir el tamaño del texto (fuente) 
$(".disminuir").on("click", function () {
  $("h1, h2, h3, h4, h5, h6, p").css("font-size", "-=2");
});

// Función para aumentar el tamaño del texto (fuente) 
$(".aumentar").on("click", function () {
  $("h1, h2, h3, h4, h5, h6, p").css("font-size", "+=2");
});

// Función para restablecer el tamaño del texto (fuente) al tamaño inicial 
$(".restablecer").on("click", function () {
  $("h1").css("font-size", "2.5rem");
  $("h2").css("font-size", "2rem");
  $("h3").css("font-size", "1.75rem");
  $("h4").css("font-size", "1.5rem");
  $("h5").css("font-size", "1.25rem");
  $("h6").css("font-size", "1rem");
  $("p").css("font-size", "16px");
});