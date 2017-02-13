<?php
/** 
 * Index
 *
 * The main template file
 *
 * @link https://github.com/sdco-partners/buffalo-heights-district-dynamic/
 *
 * @package WordPress
 * @subpackage bhd
 * @since 1.0
 * @version 1.0
 */

  get_header(); ?>


<!-- ====  Section: Head  ==== -->
<section id="head">
  <?php get_template_part('components/main'); ?>
</section>

<!-- ====  Section: Navigation  ==== -->
<section id="nav">
	<?php get_template_part('components/nav'); ?>
</section>

<!-- ====  Section: About  ==== -->
<section id="about">
	<div class="chapter">01<div class="dash"></div></div>

	<article id="sub-01">
		<h1>In the <span>Heart</span> of Houston</h1>
		<p>Buffalo Heights is a high quality, mixed-use district ideally located in the proximity to Houston's Buffalo Bayou Park, Memorial Park, the Heights, Washington Avenue Corridor and Downtown.</p>
	</article>

  <div id="hear-houston">
	  <?php echo file_get_contents($GLOBALS['url']."/assets/heart-houston.svg"); ?>
  </div>

  <div id="about-slider-01">
		<img class="about-slider-img" id="" src="<?php echo $GLOBALS['url']."/assets/img-02-mobile.png"; ?>" alt="" />
		<img class="about-slider-img" id="" src="<?php echo $GLOBALS['url']."/assets/img-02-mobile.png"; ?>" alt="" />
		<img class="about-slider-img" id="" src="<?php echo $GLOBALS['url']."/assets/img-02-mobile.png"; ?>" alt="" />
	</div>

	<article id="sub-02">
		<img class="indented-img" id="" src="<?php echo $GLOBALS['url']."/assets/img-01-mobile.png"; ?>" alt="" />
		<h1><span>1500</span><sup>+</sup> Acres of urban parkland</h1>
		<p>This innovative real estate development will offer a complete lifestye built around outdoor activity, healthy local food, and signature greenspace in the region's most desirable and accessible urban infill location. New development and upgrades to existing buildings will enhance proximity to the trails and bayou, and more than 1,500 acres of parkland in the urban core of the city</p>
  </article>

	<blockquote>
		<h1>There is no location like this one in Houston</h1>
		<h2>Russel Gordy Owner of BKR Memorial II, LLC</h2>
	</blockquote>

	<article id="sub-03">
	  <img class="" id="" src="<?php echo $GLOBALS['url']."/assets/img-04-mobile.png"; ?>" alt="" />
	  <h1>Buffalo Heights <span>Phase I</span></h1>
	  <p>The First phaze of Buffalo Heights is a mixed-use Project on Approximately 4 acres at th intersectio of Washington Avenue and South Heights Blvd. The project includes a new urban prototype H-E-B, multi-family, offices and retail.</p>
  </article>
</section>

<!-- ====  Section: Pres  ==== -->
<section id="press">
  <div>02</div>
  <blockquote>
		<h1>Quote from article quote from Article</h1>
		<div>Houston Chronicle
		January 2017</div>
	</div>	
	<div>
	  <a href="#" alt="">Read More</a>
	</div>
  <div>
    <article>
      <div>
        Houston Chronicle
        January 2017
      </div>
      <div>
        <a href="#" alt="">Read More</a>
      </div>
    </article>>
    <article>
      <div>
        Houston Chronicle
        January 2017
      </div>
      <div>
        <a href="#" alt="">Read More</a>
      </div>
    </article>>
    <article>
      <div>
        Houston Chronicle
        January 2017
      </div>
      <div>
        <a href="#" alt="">Read More</a>
      </div>
    </article>>
    <article>
      <div>
        Houston Chronicle
        January 2017
      </div>
      <div>
        <a href="#" alt="">Read More</a>
      </div>
    </article>
  </div>
  <img class="" id="" src="<?php echo $GLOBALS['url']."/assets/img-05-mobile.png"; ?>" alt="" />
</section>

<!-- ====  Section: Info  ==== -->
<section id="info">
	<div>03</div>
	<div>
	  <h1>Leasing Information</h1>
	  <a href="#" alt="">Download Leasing PDF</a>
	  <a href="#" alt="">Download Floor Plans PDF</a>
	</div>
</section>

<!-- ====  Section: Connect  ==== -->
<section id="connect">
	<div>04</div>
	<div>
	  <h1>Connect</h1>
	  <address>
	    555 123 4567<br>
	    info@buffaloheights.com<br>
	  </address>
	</div>
</section>

<!-- ====  Section: Footer  ==== -->
<section id="footer">
	<div>
		<h1>In the <span>Heart</span> of Houston</h1>
	</div>
	<div>
	  <ul>
	    <li></li>
	    <li></li>
	    <li></li>
	  </ul>
	</div>
	<div>
	  Owner
	  BKR Memorial II, LLC
	</div>
	<div>
	  Developer
	  Midway
	</div>
	<div>
	  Copyright 2017 Buffalo Heights
    Site by SDCO. Partners
	</div>

</section>

<?php

  /**
  *  Console Logs
  * 
  * echo "<script>console.log('".get_field('feed_selection').", outputs feed_selection');</script>";
  */  
?>

<?php get_footer();
