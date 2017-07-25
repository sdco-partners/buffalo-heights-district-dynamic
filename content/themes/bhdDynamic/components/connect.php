<?php
  /** 
  * Section => Connect
  */

  // Handles splitting up phone number with periods
  function print_phone($field) {
    $input = get_field($field, 2, false);
    $string = array();
    $is_one = $input[0] === '1';
    $string[0] = $is_one ? mb_substr($input, 0, 4) : mb_substr($input, 0, 3);
    $string[1] = $is_one ? mb_substr($input, 3, 3) : mb_substr($input, 3, 3);
    $string[2] = $is_one ? mb_substr($input, 7) : mb_substr($input, 6);
    $output = $string[0] . ' ' . $string[1] . ' ' . $string[2];
    return $output;
  } 
?>

<div class="chapter">04<div class="dash"></div></div>
<h1>Connect</h1>
<address>
  <a href="tel:<?php echo get_field('phone', 2, false); ?>">
    <?php echo print_phone('phone') ?>
  </a><br>
  <span id="address-email">
    <a href="mailto:<?php echo get_field('email', 2, false); ?>"><?php echo get_field('email', 2, false); ?></a>
  </span><br>
</address>
