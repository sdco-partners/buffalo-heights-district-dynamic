/**
* Video
* 
* For embedded video player
*/



/**
* Trigger Video display
* 
* Fades the video player in/out
*/

$j( '#watch' ).on( 'click', function(){
  $j( '#popup-video' ).fadeIn(500, function(){
  	$j( '.head-text' ).fadeOut('fast', function(){
  		var video = document.getElementById("full-video"); 
      video.play();
  	})
  })
});

$j( '#close-popup' ).on( 'click', function(){
  $j( '#popup-video' ).fadeOut(500, function(){
  	$j( '.head-text' ).fadeIn('fast', function(){
  		var video = document.getElementById("full-video"); 
      video.pause();
  	})
  })
});


/**
* XX Video Player XX
* 
* Youtube video player .. non functional ...
*/

// var player;

// function onYouTubeIframeAPIReady() {
//     player = new YT.Player('ytplayer', {
//         events: {
//             'onReady': onPlayerReady
//         }
//     });
// }

// function onPlayerReady(event) {
//     player.mute();
//     player.playVideo();
// }

