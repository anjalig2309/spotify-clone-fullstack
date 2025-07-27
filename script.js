let audio = document.getElementById('audioPlayer');
function playSong(btn) {
  let file = btn.parentElement.getAttribute('data-file');
  audio.src = file;
  audio.play();
}
