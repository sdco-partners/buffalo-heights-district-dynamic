<?php
  /** 
  * Section => Press
  */ 

  // Variables
  $press_loop = new WP_Query( array( 'post_type' => 'press', 'order' => 'ASC') );
  $count_press = wp_count_posts( 'press' );
  $published = $count_press->publish;

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
        <h2><?php echo get_field('publication'); ?><br>
        <?php echo get_field('press_date'); ?></h2>
        <div class="linkout">
          <a href="<?php echo get_field('press_link'); ?>" 
            target="_blank" alt="press">
            Read More 
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
  src="<?php echo $GLOBALS['url']."/assets/img-05-mobile.png"; ?>" alt="" />
<img class="desktop" id="press-img" 
  src="<?php echo $GLOBALS['url']."/assets/img-05-desktop.png"; ?>" alt="" />