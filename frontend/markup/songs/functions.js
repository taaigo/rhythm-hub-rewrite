function play_song()
{
    let audio_player = document.getElementById('audio-player');
    let play_button = document.getElementById('play-button');

    audio_player.play();

    play_button.onclick = function() { pause_song() }
    play_button.innerHTML = 'Pause';
}

function pause_song()
{
    let audio_player = document.getElementById('audio-player');
    let play_button = document.getElementById('play-button');

    audio_player.pause();

    play_button.onclick = function() { play_song() }
    play_button.innerHTML = 'Play';
}