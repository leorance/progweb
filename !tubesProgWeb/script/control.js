var audio = document.getElementById("audio");

    // next
    function nextAudio() {
            // value++;
            show();
            audio.play();
            pauseAudio();
            audio.currentTime = 0; 
    }
    // prev
    function prevAudio() {
            // value--;
            show();
            pauseAudio();
            audio.currentTime = 0;
    }
    // play
    function playAudio() {
        if (!audio.paused) {
            audio.pause();
            $(document).ready(function () {
                $("#ty").removeClass("xyz");
            });
        } else {
            $(document).ready(function () {
                    $("#ty").addClass("xyz");
            });
            audio.play();
        }
    }