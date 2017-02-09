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
	<header>
		<p>In the <span>Heart</span> of <span>Houston</span></p>
	</header>
	<div><a href="#">Logo</a></div>
	<h1>Buffalo Heights</h1>
	<h2>In the heart of Houston</h2>
	<button>Watch Video</button>
</section>

<!-- ====  Section: Navigation  ==== -->
<section id="nav">
	<h1>Buffalo Heights</h1>
	<div id="hamburger">Menu</div>
</section>

<!-- ====  Section: About  ==== -->
<section id="about">
	<div>01</div>
	<div>
		<h1>In the <span>Heart</span> of Houston</h1>
		<p>Buffalo Heights is a high quality, mixed-use district ideally located in the proximity to Houston's Buffalo Bayou Park, Memorial Park, the Heights, Washington Avenue Corridor and Downtown.</p>
	</div>
  <div>
	  <div>Seal</div>
		<img class="" id="" src="<?php echo $GLOBALS['url']."/assets/img-02-mobile.png"; ?>" alt="" />
	</div>
	<div>
		<img class="" id="" src="<?php echo $GLOBALS['url']."/assets/img-01-mobile.png"; ?>" alt="" />
		<h1><span>1500</span><span>+</span> Acres of urban parkland</h1>
		<p>This innovative real estate development will offer a complete lifestye built around outdoor activity, healthy local food, and signature greenspace in the region's most desirable and accessible urban infill location. New development and upgrades to existing buildings will enhance proximity to the trails and bayou, and more than 1,500 acres of parkland in the urban core of the city</p>
  </div>
	<div>
		<h1>There is no location like this one in Houston</h1>
		<h2>Russel Gordy Owner of BKR Memorial II, LLC</h2>
	</div>
	<div>
	  <img class="" id="" src="<?php echo $GLOBALS['url']."/assets/img-04-mobile.png"; ?>" alt="" />
	  <h1>Buffalo Heights <span>Phase I</span></h1>
	  <p>The First phaze of Buffalo Heights is a mixed-use Project on Approximately 4 acres at th intersectio of Washington Avenue and South Heights Blvd. The project includes a new urban prototype H-E-B, multi-family, offices and retail.</p>
  </div>
</section>

<!-- ====  Section: Pres  ==== -->
<section id="press">
  <div>02</div>
  <div>
		<h1>Quote from article quote from Article</h1>
		<div>Houston Chronicle
		January 2017</div>
	<div>
	  <a href="#" alt="">Read More</a>
	</div>
  <div>
    <div>
      <div>
        Houston Chronicle
        January 2017
      </div>
      <div>
        <a href="#" alt="">Read More</a>
      </div>
    </div>
        <div>
      <div>
        Houston Chronicle
        January 2017
      </div>
      <div>
        <a href="#" alt="">Read More</a>
      </div>
    </div>
    <div>
      <div>
        Houston Chronicle
        January 2017
      </div>
      <div>
        <a href="#" alt="">Read More</a>
      </div>
    </div>
    <div>
      <div>
        Houston Chronicle
        January 2017
      </div>
      <div>
        <a href="#" alt="">Read More</a>
      </div>
    </div>
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
	  <div>
	    555 123 4567
	    info@buffaloheights.com
	  </div>
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
