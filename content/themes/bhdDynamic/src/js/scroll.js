/**
* Scroll
* 
* Functions related to the scroll method.
*/



$j( window ).scroll(function(){

  // console.log( 'window scroll: ', $j( window ).scrollTop(), 'window width: ', $j( window ).width() );


  /**
	* Sticky Nav
	* 
	* Makes nav sticky after x scroll height
  */

	if( $j( window ).scrollTop() > 900 && $j( window ).width() > 850 ){
	  $j( '#nav' ).addClass( 'nav-sticky' );
	}
	if( $j( window ).scrollTop() <= 900 && $j( window ).width() > 850 ){
		$j( '#nav' ).removeClass( 'nav-sticky' );
	}
  if( $j( window ).scrollTop() > 653 && $j( window ).width() <= 850 ){
	  $j( '#nav' ).addClass( 'nav-sticky' );
	}
	if( $j( window ).scrollTop() <= 653 && $j( window ).width() <= 850 ){
		$j( '#nav' ).removeClass( 'nav-sticky' );
	}
  

   /**
	* Nav Section Fader
	*  
	* Fades the section number behind the link
  */

  if( $j( window ).scrollTop() > 296 && $j( window ).scrollTop() <= 3385 ){
		$j( '#menu-01' ).css("color", "rgba(193, 74, 54, 0.7)");
	}else{
		$j( '#menu-01' ).css("color", "#EC5A4F");
	}

  if( $j( window ).scrollTop() > 3385 && $j( window ).scrollTop() <= 5080 ){
		$j( '#menu-02' ).css("color", "rgba(193, 74, 54, 0.7)");
	}else{
		$j( '#menu-02' ).css("color", "#EC5A4F");
	}

  if( $j( window ).scrollTop() > 5080 && $j( window ).scrollTop() <= 5504 ){
		$j( '#menu-03' ).css("color", "rgba(193, 74, 54, 0.7)");
	}else{
		$j( '#menu-03' ).css("color", "#EC5A4F");
	}

  if( $j( window ).scrollTop() > 5504 ){
		$j( '#menu-04' ).css("color", "rgba(193, 74, 54, 0.7)");
	}else{
		$j( '#menu-04' ).css("color", "#EC5A4F");
	}

});


/**
* Smooth Section Scrolling
*  
* Scrolls down to section smoother
*/

// Variables



$j( '#nav-about' ).on('click', function(e){
  e.preventDefault();
  var about = $j( '#about' ).offset();
  scroller(about.top, -5);
}) 

$j( '#nav-press' ).on('click', function(e){
  e.preventDefault();
  var press = $j( '#press' ).offset();
  scroller(press.top, 280);
}) 

$j( '#nav-leasing' ).on('click', function(e){
  e.preventDefault();
  var info = $j( '#info' ).offset();
  scroller(info.top, 100);
}) 

$j( '#nav-connect' ).on('click', function(e){
  e.preventDefault();
  var connect = $j( '#connect' ).offset();
  scroller(connect.top, 0);
}) 

$j( '#back-to-top' ).on('click', function(e){
  e.preventDefault();
  scroller(0, 0);
}) 


// Scroller function takes in offset top value and 
// an adjusment value executes the change 

var scroller = function(top, adjustment) {

	// If desktop & smaller than 900 IE Nav NOT sticky
	if ( $j( window ).scrollTop() <= 900 && $j( window ).width() > 850 ) {
		adjustment = adjustment + 46;
    $j( 'html,body' ).animate({"scrollTop": top - adjustment }, 'slow', 'swing');

	// If desktop & larger than 900 IE Nav IS sticky	
	} else if( $j( window ).scrollTop() > 900 && $j( window ).width() > 850 ) {
    $j( 'html,body' ).animate({"scrollTop": top - adjustment }, 'slow', 'swing');
    
	// If mobile & larger than 653 IE Nav IS sticky	  
	} else if ( $j( window ).scrollTop() <= 653 && $j( window ).width() <= 850 ) {
		adjustment = adjustment + 65;
    $j( 'html,body' ).animate({"scrollTop": top - adjustment }, 'slow', 'swing');

  // If mobile & larger than 900 IE Nav IS sticky	
	} else if ( $j( window ).scrollTop() > 653 && $j( window ).width() <= 850 ) {
		$j( 'html,body' ).animate({"scrollTop": top - adjustment }, 'slow', 'swing');

	}

	// console.log('----', top - adjustment);
  // console.log( 'window scroll: ', $j( window ).scrollTop(), 'window width: ', $j( window ).width() );
}


