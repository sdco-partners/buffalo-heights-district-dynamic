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
	// $j('#video-box').html("<video id='video-2' autoplay mute src='<?php echo $GLOBALS['url'].'/assets/video-02.mp4'; ?>'></video>");
  $j( '#popup-video' ).fadeIn(500, function(){
  })
});

$j( '#close-popup' ).on( 'click', function(){
  $j( '#popup-video' ).fadeOut(500, function(){
  	// $j('#video-2').remove();
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

