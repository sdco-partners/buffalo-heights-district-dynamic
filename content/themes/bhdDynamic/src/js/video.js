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
  watching = true; 
  // Stop overflow
  $j( 'body' ).css('overflow-y', 'hidden');
  
  // Fade in video, start video.
  $j( '#popup-video' ).fadeIn(500, function(){
  	$j( '.head-text' ).fadeOut('fast', function(){
  		var video = document.getElementById("full-video"); 
      video.play();
  	})
  })
});

$j( '#close-popup' ).on( 'click', function(){
  watching = false;
  // Reset overflow
  $j( 'body' ).css('overflow-y', 'scroll');
  // Fade out video, stop play.
  $j( '#popup-video' ).fadeOut(500, function(){
  	$j( '.head-text' ).fadeIn('fast', function(){
  		var video = document.getElementById("full-video"); 
      video.pause();
  	})
  })
});