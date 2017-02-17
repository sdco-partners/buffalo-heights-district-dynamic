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
  	console.log("load video");
  })
});

$j( '#close-popup' ).on( 'click', function(){
  $j( '#popup-video' ).fadeOut(500, function(){
  	console.log("load video");
  })
});