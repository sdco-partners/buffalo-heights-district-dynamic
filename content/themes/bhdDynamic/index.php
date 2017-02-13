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
  <?php get_template_part('components/about'); ?>
</section>

<!-- ====  Section: Pres  ==== -->
<section id="press">
  <div class="chapter">02<div class="dash"></div></div>
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
