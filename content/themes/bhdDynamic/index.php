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
	<h3>01</h2.2>
	<h1>In the <span>Heart</span> of Houston</h1>
	<p>Buffalo Heights is a high quality, mixed-use district ideally located in the proximity to Houston's Buffalo Bayou Park, Memorial Park, the Heights, Washington Avenue Corridor and Downtown.</p>
  <div>Seal</div>
	<img class="" id="" src="<?php echo $GLOBALS['url']."/assets/img-02-mobile.png"; ?>" alt="" />
	<img class="" id="" src="<?php echo $GLOBALS['url']."/assets/img-01-mobile.png"; ?>" alt="" />
	<h1><span>1500</span><span>+</span> Acres of urban parkland</h1>
	<p>This innovative real estate development will offer a complete lifestye built around outdoor activity, healthy local food, and signature greenspace in the region's most desirable and accessible urban infill location. New development and upgrades to existing buildings will enhance proximity to the trails and bayou, and more than 1,500 acres of parkland in the urban core of the city</p>
	<h1>There is no location like this one in Houston</h1>
	<h2>Russel Gordy Owner of BKR Memorial II, LLC</h2>
  <img class="" id="" src="<?php echo $GLOBALS['url']."/assets/img-04-mobile.png"; ?>" alt="" />
  <h1>Buffalo Heights <span>Phase I</span></h1>
</section>

<!-- ====  Section: Info  ==== -->
<section id="info"></section>

<!-- ====  Section: Footer  ==== -->
<section id="Footer"></section>


<?php

  /**
  *  Console Logs
  * 
  * echo "<script>console.log('".get_field('feed_selection').", outputs feed_selection');</script>";
  */  
?>

<?php get_footer();
