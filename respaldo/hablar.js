const btnEscribir = document.querySelector('.bt-escr'); /* getElementById cambia a modo class*/
const btnNoEscribir = document.querySelector('.bt-nescr');
const btnEscuchar = document.querySelector('.bt-escu'); 
const texto = document.querySelector('.txt-escr');

let recognition = new webkitSpeechRecognition();
recognition.lang = 'es-MX';
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

/*

var synth = window.speechSynthesis;
var inputForm = document.querySelector('form');

var btnEscribir = document.querySelector('.bt-escr'); 
var btnNoEscribir = document.querySelector('.bt-nescr');
var btnEscuchar = document.querySelector('.bt-escu'); 
var texto = document.querySelector('.txt-escr');

let recognition = new webkitSpeechRecognition();
recognition.lang = 'es-MX';
recognition.continuous = true;
recognition.interimResults = false;

recognition.onresult = (event) => {
    var results = event.results;
    var frase = results[results.length - 1][0].transcript;
    texto.value += frase;
}
recognition.onend = (event) => {
    console.log('El micrófono dejo de escuchar');
}
recognition.onerror = (event) => {
    console.log(event.error);
}

btnEscribir.addEventListener('click', () => { 
    recognition.start();
});

btnNoEscribir.addEventListener('click', () => { 
    recognition.abort();
});


function speak() {
    if (synth.speaking) {
        console.error('speechSynthesis.speaking');
        return;
    }
    if (texto.value !== '') {
        var utterThis = new SpeechSynthesisUtterance(texto.value);
        utterThis.lang = 'es-MX';
        utterThis.continuous = true;
        utterThis.interimResults = false;
        utterThis.volume = 1;
        utterThis.pitch = 1;
        utterThis.rate = 1;
        synth.speak(utterThis);
    }
}
inputForm.onsubmit = function (event) {
    event.preventDefault();
    speak();
    texto.blur();
}
btnEscuchar.onclick = function () {
    speak();
}
*/
