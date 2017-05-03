<?php
  /** 
  * Section => Press
  */ 

  // Variables
  $press_loop = new WP_Query( array( 'post_type' => 'press', 'order' => 'ASC') );
  $count_press = wp_count_posts( 'press' );
  $published = $count_press->publish;
  $info = get_field('info_link', 2)

  // Determin Press logic
  

?>

<div class="chapter">02<div class="dash"></div></div>

<?php 
// Custom Post Type Loop for 1st item
if ( $press_loop -> have_posts() ) { 
  $count = 0; 
  while ( $press_loop->have_posts() ) : $press_loop->the_post();
    if ( $count < 1 ) { ?>

      <blockquote>
        <h1><?php echo get_field('press_quote'); ?></h1>
        <h2><?php echo get_field('press_attr'); ?><br>
        <?php echo get_field('publication'); ?></h2>
        <div class="linkout">
          <a href="<?php echo get_field('press_link'); ?>" 
            target="_blank" alt="press">
            Read More 
          </a>
        </div>

        <div class="linkout" id="press-pdf">
          <a href="<?php echo $info['url']; ?>" 
            target="_blank" alt="press">
            Download Media Kit
          </a>
        </div>
      </blockquote> 

<?php 
    }
  $count++;
  endwhile; 
} ?>

<div id="press-section">

  <?php 
  // Custom Post Type Loop for remaining items
  if ( $press_loop -> have_posts() ) { 
    $count = 0;
    while ( $press_loop->have_posts() ) : $press_loop->the_post(); 
      
      if ( $count >= 1 ) { ?>

        <article class="press-box">
          <h1>
            <?php echo get_field('publication'); ?><br>
            <?php echo get_field('press_date'); ?>
          </h1>
          <div class="linkout">
            <a href="<?php echo get_field('press_link'); ?>" 
              target="_blank" alt="press">
              Read More 
            </a>
          </div>
        </article>

  <?php 
      }
    $count++;
    endwhile; 
  }?>

</div>
<img class="mobile" id="press-img" 
  src="http://50.28.54.252/~bhddynamic/content/uploads/2017/02/img-05-mobile-1.png" alt="" />
<img class="desktop" id="press-img" 
  src="http://50.28.54.252/~bhddynamic/content/uploads/2017/02/img-05-desktop.png" alt="" />
<!-- <div id="stamp-overlay">
  <?php //echo file_get_contents($GLOBALS['url'].'/assets/bhd-logo-stamp.svg') ?>
</div> -->