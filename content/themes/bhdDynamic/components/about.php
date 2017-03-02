<?php
  /** 
  * Section => About
  */ 

  // Variables 
  $image_a_desk = get_field('01_image_a_desktop', 2);
  $image_a_mobl = get_field('01_image_a_mobile', 2);
  $image_b = get_field('01_image_b', 2);
  $slider_a = get_field('01_image_slider_a', 2); 
?>

	<div class="chapter">01<div class="dash"></div></div>

	<article id="sub-01">
		<h1>In the <span class="fits">Heart</span> of Houston</h1>
		<p><?php echo get_field('01_copy_a', 2, false); ?></p>
	</article>

  <div id="hear-houston">
	  <?php echo file_get_contents($GLOBALS['url']."/assets/heart-houston.svg"); ?>
  </div>
  
  <div id="about-slider-nav">
    <button id="prev">Previous</button>
    <button id="next">Next</button>
  </div>

  <div id="about-slider-01" class="">
    <?php if ( $slider_a ) {
    	$count = 0;
    	foreach ($slider_a as $slide ){ ?>
			  <img class="about-slider-img" id="about-0<?php echo ++$count ?>" 
			    src="<?php echo $slide['url']; ?>" 
			    alt="<?php echo $slide['alt']; ?>" />
			<?php }
		} ?>
	</div>

	<article id="sub-02">
		<img class="indented-img mobile" id="" 
		  src="<?php echo $image_a_mobl['url']; ?>" 
		  alt="<?php echo $image_a_mobl['alt']; ?>" />
		<img class="indented-img desktop" id="" 
		  src="<?php echo $image_a_desk['url']; ?>" 
		  alt="<?php echo $image_a_desk['alt']; ?>" />
		<h1><span class="fits">50<sup>+</sup></span> Acre Mixed- Use District</h1>
		<p><?php echo get_field('01_copy_b', 2, false); ?></p>
  </article>

	<blockquote>
		<h1><?php echo get_field('01_quote_a_quote', 2, false); ?></h1>
		<h2><?php echo get_field('01_quote_a_attr_a', 2, false); ?>
		  <br><?php echo get_field('01_quote_a_attr_b', 2, false); ?></h2>
	</blockquote>

	<article id="sub-03">
	  <img class="indents-at-desktop" 
	    src="<?php echo $image_b['url']; ?>"
	    alt="<?php echo $image_b['alt']; ?>" />
	  <h1>Buffalo Heights <span class="too-long">Phase I</span></h1>
	  <p><?php echo get_field('01_copy_c', 2, false); ?></p>
  </article>