/**
* Menu
* 
* For mobile menu popup. See scroll for scrolling functionality
*/



/**
* Trigger Mobile Menu
* 
* Fades in/out mobile menu
*/

$j( '#hamburger' ).on( 'click', function(e){
  e.preventDefault()
  $j( '#fullmenu' ).fadeIn(500, function(){
  })
});

$j( '#close-menu' ).on( 'click', function(){
  $j( '#fullmenu' ).fadeOut(500, function(){
  })
});

$j( '.fullmenu' ).on( 'click', function(){
  $j( '#fullmenu' ).fadeOut(1000, function(){
  })
});