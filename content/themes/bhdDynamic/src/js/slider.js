/**
* Slider
* 
* Functions related to image sliders
*/



/**
* About Slider
* 
* Functionality of About Slider
*/

var aboutSlider = {}
aboutSlider.counter = 1;
aboutSlider.clicked = false;
aboutSlider.slideFxn = function(time, count) {

  // Define vocab
  var totalImages = $j( '#about-slider-01' ).children().length
  var firstPosition = $j( '#about-01' ).position().left;

  // If count is within image range, account for indent image and use to move left
  if ( aboutSlider.counter <= totalImages && aboutSlider.counter > 0 ) {
    
    var nextSlide = $j( '#about-0' + aboutSlider.counter );
    var nextPosition = nextSlide.position().left;
    var moveTo = nextPosition - firstPosition
    
    $j( '#about-slider-01' ).animate({
      scrollLeft: moveTo
    }, time / 2 );
  
  // If going in reverse and the count falls below 0
  } else if ( aboutSlider.counter < 1 ){
    
    aboutSlider.counter = totalImages;
    var nextSlide = $j( '#about-0' + aboutSlider.counter );
    var nextPosition = nextSlide.position().left; 
    var moveTo = nextPosition - firstPosition

    $j( '#about-slider-01' ).animate({
      scrollLeft: moveTo 
    }, time );
    
  // Else it's end of slider, reset to initial
  } else {
    aboutSlider.counter = 1;
    $j( '#about-slider-01' ).animate({
      scrollLeft: 0 
    }, time );
  }
}

// Trigger Function
$j( '#next' ).on( 'click', function(){
  aboutSlider.counter++;
  aboutSlider.clicked = true;

  // Call Slide function
  aboutSlider.slideFxn(2000);
  
  // Reset clicked in 4 secs
  setInterval(function(){
    aboutSlider.clicked = false;
  }, 4000);

});

$j( '#prev' ).on( 'click', function(){
  aboutSlider.counter--;
  aboutSlider.clicked = true;

  // Call Slide function
  aboutSlider.slideFxn(2000);
  
  // Reset clicked in 4 secs
  setInterval(function(){
    aboutSlider.clicked = false;
  }, 4000);

});


/**
* Autoplay Slider
* 
* Automatically moving slider 
*/

var autoSlide = function(){
  // If not clicked
  if ( !aboutSlider.clicked ) {
    // Call Slide function
    aboutSlider.counter++
    aboutSlider.slideFxn(2000);

    // Recursively call Autoplay
    setTimeout(autoSlide, 10000);

  // Else, check back in 10 seconds.  
  } else  {
    setTimeout(autoSlide, 10000);
  }
}

// Trigger Function
setTimeout(autoSlide, 4000);
