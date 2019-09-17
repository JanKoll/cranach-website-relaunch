<script>


  var isPlaying = false;

  var backupid = null;

  function textToSpeech(id = null) {

    console.log(backupid);


  	// get all voices that browser offers
  	var available_voices = window.speechSynthesis.getVoices();

  	// this will hold an english voice
  	var english_voice = '';

  	// find voice by language locale "en-US"
  	// if not then select the first voice
  	for(var i=0; i<available_voices.length; i++) {
  		if(available_voices[i].lang === 'de-DE') {
  			english_voice = available_voices[i];
  			break;
  		}
  	}
  	if(english_voice === '')
  		english_voice = available_voices[0];

  	// new SpeechSynthesisUtterance object
  	var utter = new SpeechSynthesisUtterance();
  	utter.rate = 1;
  	utter.pitch = 0.5;
  	utter.text = document.getElementById(id).innerText;
  	utter.voice = english_voice;


    if (id == null || id == backupid || backupid == null ) {
      console.log("Test");
      backupid = id;

      var player = document.getElementsByClassName(id);

    	// event after text has been spoken
    	utter.onend = function() {
        isPlaying = false;
        player[0].classList.remove("playing");
    	}


      if (!isPlaying) {
      	// speak
      	window.speechSynthesis.speak(utter);
        isPlaying = true;
        player[0].classList.add("playing");
      } else {
        // stop
        window.speechSynthesis.cancel();
        isPlaying = false;
        player[0].classList.remove("playing");
      }

    } else {

      var player = document.getElementsByClassName(backupid);

      // stop
      window.speechSynthesis.cancel();
      isPlaying = false;
      player[0].classList.remove("playing");

      backupid = id;

      textToSpeech(id);
    }



        console.log(isPlaying);

  }
</script>
