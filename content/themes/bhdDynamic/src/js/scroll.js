/**
* Sticky Nav
* 
* Makes nav sticky after x scroll height
*/

$j = jQuery.noConflict();


$j( window ).scroll(function(){
  

  /**
	* Sticky Nav
	* 
	* Makes nav sticky after x scroll height
  */

	if( $j( window ).scrollTop() > 900 ){
	  console.log('this is 900!');
	  $j( '#nav' ).addClass( 'nav-sticky' );
	}

	if( $j( window ).scrollTop() <= 900 ){
		$j( '#nav' ).removeClass( 'nav-sticky' );
	}

	
});


