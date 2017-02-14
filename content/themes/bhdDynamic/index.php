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
  <?php get_template_part('components/head'); ?>
</section>

<!-- ====  Section: Navigation  ==== -->
<section id="nav">
	<?php get_template_part('components/nav'); ?>
</section>

<!-- ====  Section: About  ==== -->
<section id="about">
  <?php get_template_part('components/about'); ?>
</section>

<!-- ====  Section: Press  ==== -->
<section id="press">
  <?php get_template_part('components/press'); ?>
</section>

<!-- ====  Section: Info  ==== -->
<section id="info">
  <?php get_template_part('components/info'); ?>
</section>

<!-- ====  Section: Connect  ==== -->
<section id="connect">
  <?php get_template_part('components/connect'); ?>
</section>

<!-- ====  Section: Footer  ==== -->
<section id="foot">
  <?php get_template_part('components/foot'); ?>
</section>

<?php

  /**
  *  Console Logs
  * 
  * echo "<script>console.log('".get_field('feed_selection').", outputs feed_selection');</script>";
  */  
?>

<?php get_footer();
