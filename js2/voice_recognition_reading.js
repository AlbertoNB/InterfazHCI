/*===================RECONOCIMIENTO DE VOZ Y LECTURA AUTOMÁTICA DE TEXTO=================*/
//(respaldo/hablar5.js)
var texto = document.querySelector('.es-txt');
var btnEscribir = document.querySelector('.bt-escr');
var btnNoEscribir = document.querySelector('.bt-nescr');
var btnEscOnOff = document.querySelector('.besc-on-off')
var btnPlay = document.querySelector('.b-play');
var btnPause = document.querySelector('.b-pause');
var btnStop = document.querySelector('.b-stop');
var flag = false;

////////////////////////////////////////////////////////////////////////////
                        /*Reconocimiento de voz*/
////////////////////////////////////////////////////////////////////////////
let recognition = new webkitSpeechRecognition();
/*lang: idioma en formato locale, ya que tiene importancia el acento 
del locutor, que puede ser distinto dependiendo del país o región */
recognition.lang = 'es-MX';
/*continuous: indica si el reconocimiento se hace de forma continuada o no. Es decir, 
si se detiene cuando el usuario deje de hablar. Por defecto, su valor es false, 
de forma que si deseamos que el reconocimiento se haga continuado, debemos inicializarla a true. */
recognition.continuous = true;
/*interimResults: valor booleano que señala si se desean mostrar los valores provisionales
 o no sobre el texto reconocido. Hay que tener en cuenta, que el resultado puede cambiar. */
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
/*descomentar las funciones "btnEscribir, btnNoEscribir" si pretende que un boton prenda y otro boton apagar el microfono(dos botones). codigo refenencia: 7711*/
/* se prende con un boton */
/*btnEscribir.addEventListener('click', () => {
    if (!('webkitSpeechRecognition' in window)) {
        alert("No se puede usar el reconocimiento de voz en este navegador");
    } else {
        recognition.start();
    }
});*/
/*se apaga con un boton */
/*btnNoEscribir.addEventListener('click', () => {
    recognition.stop();
    alert("He dejado de escucharte")
});*/

/*comentar las dos funcones "btnEscOnOff" si pretende que un boton prenda y otro boton apagar el microfono(dos botones). codigo refenencia: 7711*/
/*se prende y apaga con un solo boton*/
btnEscOnOff.addEventListener('mousedown', () => { 
    if (!('webkitSpeechRecognition' in window)) {
        alert("No se puede usar el reconocimiento de voz en este navegador");
    } else {
        recognition.start();
    }
});

btnEscOnOff.addEventListener('mouseup', () => { 
    recognition.stop();
});

////////////////////////////////////////////////////////////////////////////
                        /*Lectura de textos*/
////////////////////////////////////////////////////////////////////////////

window.onload = function () {
    if ('speechSynthesis' in window) with (speechSynthesis) {
        /*var synth = window.speechSynthesis;*/
        function onClickPlay() {

            if (!('speechSynthesis' in window)) {
                alert("No se puede reproducir la lectura en este navegador");
            } else {
                if (!flag) {
                    flag = true;
                    recognition = new SpeechSynthesisUtterance(texto.value);
                    recognition.lang = 'es-MX';
                    recognition.volume = 1;
                    recognition.pitch = 1;
                    recognition.rate = 1;

                    recognition.voice = getVoices()[0];
                    recognition.onend = function () {
                        flag = false; btnPlay.className = btnPause.className = ''; btnStop.className = 'stopped';
                    };
                    btnPlay.className = 'played';
                    btnStop.className = '';
                    speak(recognition);

                }
                if (paused) { /* unpause/resume narration */
                    btnPlay.className = 'played';
                    btnPause.className = '';
                    resume();
                }
            }
        }

        function onClickPause() {
            if (speaking && !paused) { /* pause narration */
                btnPause.className = 'paused';
                btnPlay.className = '';
                pause();
            }
        }

        function onClickStop() {
            if (speaking) { /* stop narration */
                /* for safari */
                btnStop.className = 'stopped';
                btnPlay.className = btnPause.className = '';
                flag = false;
                cancel();

            }
        }
        btnPlay.addEventListener('click', onClickPlay);
        btnPause.addEventListener('click', onClickPause);
        btnStop.addEventListener('click', onClickStop);
    }
}