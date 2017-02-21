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

	if( $j( window ).scrollTop() > 900 ){
	  $j( '#nav' ).addClass( 'nav-sticky' );
	}
	if( $j( window ).scrollTop() <= 900 ){
		$j( '#nav' ).removeClass( 'nav-sticky' );
	}
  

   /**
	* Nav Section Fader
	*  
	* Fades the section number behind the link
  */

  if( $j( window ).scrollTop() > 296 && $j( window ).scrollTop() <= 3385 ){
		$j( '#menu-01' ).css("color", "rgba(193, 74, 54, 0.5)");
	}else{
		$j( '#menu-01' ).css("color", "#EC5A4F");
	}

  if( $j( window ).scrollTop() > 3385 && $j( window ).scrollTop() <= 5080 ){
		$j( '#menu-02' ).css("color", "rgba(193, 74, 54, 0.5)");
	}else{
		$j( '#menu-02' ).css("color", "#EC5A4F");
	}

  if( $j( window ).scrollTop() > 5080 && $j( window ).scrollTop() <= 5504 ){
		$j( '#menu-03' ).css("color", "rgba(193, 74, 54, 0.5)");
	}else{
		$j( '#menu-03' ).css("color", "#EC5A4F");
	}

  if( $j( window ).scrollTop() > 5504 ){
		$j( '#menu-04' ).css("color", "rgba(193, 74, 54, 0.5)");
	}else{
		$j( '#menu-04' ).css("color", "#EC5A4F");
	}

});


/**
* Smooth Section Scrolling
*  
* Scrolls down to section smoother
*/

$j( '#nav-about' ).on('click', function(e){
  e.preventDefault();
  $j( 'html,body' ).animate({"scrollTop": 900}, 'slow', 'swing');
}) 

$j( '#nav-press' ).on('click', function(e){
  e.preventDefault();
  $j( 'html,body' ).animate({"scrollTop": 3831}, 'slow', 'swing');
}) 

$j( '#nav-leasing' ).on('click', function(e){
  e.preventDefault();
  $j( 'html,body' ).animate({"scrollTop": 5350}, 'slow', 'swing');
}) 

$j( '#nav-connect' ).on('click', function(e){
  e.preventDefault();
  $j( 'html,body' ).animate({"scrollTop": 5777}, 'slow', 'swing');
}) 

