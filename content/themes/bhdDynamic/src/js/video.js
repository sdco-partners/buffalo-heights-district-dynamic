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
	$j('#video-box').html('<iframe id="ytplayer" type="text/html" width="1529px" height="860px" src="https://www.youtube.com/embed/NDQCxIrADZc?rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0&autoplay=1&enablejsapi=1" frameborder="0" allowfullscreen></iframe>');
  $j( '#popup-video' ).fadeIn(500, function(){
  	$j( '#loading' ).fadeOut(2200, function(){

  	})
  })
});

$j( '#close-popup' ).on( 'click', function(){
  $j( '#popup-video' ).fadeOut(500, function(){
  	$j('#ytplayer').remove();
  })
});


/**
* XX Video Player XX
* 
* Youtube video player .. non functional ...
*/

var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('ytplayer', {
        events: {
            'onReady': onPlayerReady
        }
    });
}

function onPlayerReady(event) {
    player.mute();
    player.playVideo();
}

