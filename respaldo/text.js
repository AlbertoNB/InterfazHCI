$(".disminuir").on("click", function() {
    $(".mitexto").css("font-size", "-=2");
});

// Función para aumentar el tamaño del texto (fuente) 
$(".aumentar").on("click", function() { 
    $(".mitexto").css("font-size", "+=2");
});

// Función para restablecer el tamaño del texto (fuente) al tamaño inicial 
$(".restablecer").on("click", function() {
  $(".mitexto").css("font-size", "initial");
});

/*const btnRest = document.querySelector('.restablecer');
btnRest.addEventListener('click', () => {
  document.body.classList.toggle('reset');
});*/