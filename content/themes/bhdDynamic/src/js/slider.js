/**
* Slider
* 
* Functions related to image sliders
*/
var counter = 1;

var aboutSlider = function(time, count) {

  var totalImages = $j( '#about-slider-01' ).children().length
  var currentSlide = $j( '#about-0' + count );
  var currentPosition = currentSlide.position();
  
  console.log('data: ', totalImages, count)

  if ( count < totalImages ) {
  	$j( ''#about-slider-01'' ).animate({
  		scrollLeft: currentPosition.left
  		console.log('position is at: ', currentPosition);
  	}, time / 2);
  } else {
  	counter = 1;
  }
}

$j( '#next' ).on( 'click', function(){
	counter += 1;
	console.log('count is at: ', counter);
  aboutSlider(5000, counter);
});