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
aboutSlider.slideFxn = function(time, count) {

  // Define vocab
  var totalImages = $j( '#about-slider-01' ).children().length
  var firstPosition = $j( '#about-01' ).position().left;

  // If count is within image range, account for indent image and use to move left
  if ( aboutSlider.counter <= totalImages && aboutSlider.counter > 0 ) {
    
    console.log("triggers on normal: ", aboutSlider.counter);
    var nextSlide = $j( '#about-0' + aboutSlider.counter );
    var nextPosition = nextSlide.position().left;
    var moveTo = nextPosition - firstPosition
    
    $j( '#about-slider-01' ).animate({
      scrollLeft: moveTo
    }, time / 2 );
  
  // If going in reverse and the count falls below 0
  } else if ( aboutSlider.counter < 1 ){
    
    aboutSlider.counter = totalImages;
    console.log("triggers on 0: ", aboutSlider.counter);
    var nextSlide = $j( '#about-0' + aboutSlider.counter );
    var nextPosition = nextSlide.position().left; 
    var moveTo = nextPosition - firstPosition

    $j( '#about-slider-01' ).animate({
      scrollLeft: moveTo 
    }, time );
    
  // Else it's end of slider, r eset to initial
  } else {
    aboutSlider.counter = 1;
    console.log("triggers on else: ", aboutSlider.counter);
    $j( '#about-slider-01' ).animate({
      scrollLeft: 0 
    }, time );
  }
}

$j( '#next' ).on( 'click', function(){
  aboutSlider.counter++;
  aboutSlider.slideFxn(2000);
});

$j( '#prev' ).on( 'click', function(){
  aboutSlider.counter--;
  aboutSlider.slideFxn(2000);
});

