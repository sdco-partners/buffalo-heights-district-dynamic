<?php
  /** 
  * Section => Connect
  */ 
?>

<div class="chapter">04<div class="dash"></div></div>
<h1>Connect</h1>
<address>
  <a href="tel:<?php echo get_field('phone', 2, false); ?>">
    <?php echo get_field('phone', 2, false); ?>
  </a><br>
  <span id="address-email">
    <a href="mailto:<?php echo get_field('email', 2, false); ?>"><?php echo get_field('email', 2, false); ?></a>
  </span><br>
</address>