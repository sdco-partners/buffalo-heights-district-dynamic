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
<section id="about"></section>

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
