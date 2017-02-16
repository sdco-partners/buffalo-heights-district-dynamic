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

var aboutSlider = function(){

var counter = 1;

  var slide = function(time, count) {
    // Define vocab
    var totalImages = $j( '#about-slider-01' ).children().length
    var firstPosition = $j( '#about-01' ).position().left;

    // If count is within image range, account for indent image and use to move left
    if ( count <= totalImages ) {

      var currentSlide = $j( '#about-0' + count );
      var currentPosition = currentSlide.position().left;
      var currentWidth = currentSlide.width()
      
      var moveTo = currentPosition - firstPosition
      
      $j( '#about-slider-01' ).animate({
        scrollLeft: moveTo
      }, time / 2 );
    
    // Else it's end of slider, reset to initial
    } else {
      counter = 1;
      $j( '#about-slider-01' ).animate({
        scrollLeft: 0 
      }, time );
    }

  }

  $j( '#next' ).on( 'click', function(){
    counter += 1;
    console.log('count is at: ', counter);
    slide(2000, counter);
  });

  $j( '#prev' ).on( 'click', function(){
    counter -= 1;
    console.log('count is at: ', counter);
    slide(2000, counter);
  });
}