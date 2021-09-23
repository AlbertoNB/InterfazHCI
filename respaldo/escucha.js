const say = text => speechSynthesis.speak(new SpeechSynthesisUtterance(text))

document.querySelector('.escuchar').addEventListener('mouseover', () => {
  say(document.querySelector(".escuchar").innerHTML)
})