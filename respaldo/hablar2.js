var btnEscribir = document.querySelector('.bt-escr'); /* getElementById cambia a modo class*/
var btnNoEscribir = document.querySelector('.bt-nescr');
var btnPlay = document.querySelector('.b-play');
var texto = document.querySelector('.es-txt');


var pauseEle = document.querySelector('.b-pause');
var stopEle = document.querySelector('.b-stop');
var flag = false;

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

btnEscribir.addEventListener('click', () => { /*mousedown mientras tengas precionado el boton*/
    recognition.start();
});

btnNoEscribir.addEventListener('click', () => { /*mouseup al dejar de precionar el boton*/
    recognition.stop();
});

/*btnPlay.addEventListener('click', () => {
    leerTexto(texto.value)
});

function leerTexto(texto) {
    var speech = new SpeechSynthesisUtterance();
    speech.text = texto;
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;
    window.speechSynthesis.speak(speech);
}*/



window.onload = function () {
    if ('speechSynthesis' in window) with (speechSynthesis) {
        /*var synth = window.speechSynthesis;*/
        function onClickPlay() {
            if (!flag) {
                flag = true;
                utterance = new SpeechSynthesisUtterance(texto.value);


                utterance.lang = 'es-MX';
                /*   utterance.continuous = true;
                   utterance.interimResults = false;*/
                utterance.volume = 1;
                utterance.pitch = 1;
                utterance.rate = 1;

                utterance.voice = getVoices()[0];
                utterance.onend = function () {
                    flag = false; btnPlay.className = pauseEle.className = ''; stopEle.className = 'stopped';
                };
                btnPlay.className = 'played';
                stopEle.className = '';
                speak(utterance);

            }
            if (paused) { /* unpause/resume narration */
                btnPlay.className = 'played';
                pauseEle.className = '';
                resume();
            }
        }

        function onClickPause() {
            if (speaking && !paused) { /* pause narration */
                pauseEle.className = 'paused';
                btnPlay.className = '';
                pause();
            }
        }

        function onClickStop() {
            if (speaking) { /* stop narration */
                /* for safari */
                stopEle.className = 'stopped';
                btnPlay.className = pauseEle.className = '';
                flag = false;
                cancel();

            }
        }
        btnPlay.addEventListener('click', onClickPlay);
        pauseEle.addEventListener('click', onClickPause);
        stopEle.addEventListener('click', onClickStop);
    }

    else { /* speech synthesis not supported */
        msg = document.createElement('h5');
        msg.textContent = "No se detectó compatibilidad con la síntesis de voz";
        msg.style.textAlign = 'center';
        msg.style.backgroundColor = 'red';
        msg.style.color = 'white';
        msg.style.marginTop = msg.style.marginBottom = 0;
        document.body.insertBefore(msg, document.querySelector('div'));
    }

}