const btnEscribir = document.querySelector('.bt-escr'); /* getElementById cambia a modo class*/
const btnNoEscribir = document.querySelector('.bt-nescr');
const btnEscuchar = document.querySelector('.bt-escu'); 
const texto = document.querySelector('.txt-escr');

let recognition = new webkitSpeechRecognition();
recognition.lang = 'es-ES';
recognition.continuous = true;
recognition.interimResults = false;

recognition.onresult = (event) => {
    const results = event.results;
    const frase = results[results.length - 1][0].transcript;
    texto.value += frase;
}
recognition.onend = (event) => {
    console.log('El micrófono dejo de escuchar');
}
recognition.onerror = (event) => {
    console.log(event.error);
}

btnEscribir.addEventListener('click', () => { /*keydown mientras tengs precionado el boton*/
    recognition.start();
});

btnNoEscribir.addEventListener('click', () => { /*keyup al dejar de precionar el boton*/
    recognition.abort();
});

btnEscuchar.addEventListener('click', () => {
    leerTexto(texto.value)
});

function leerTexto(texto){
     const speech =new SpeechSynthesisUtterance();
     speech.text = texto;
     speech.volume=1;
     speech.rate=1;
     speech.pitch=1;
     window.speechSynthesis.speak(speech);
}