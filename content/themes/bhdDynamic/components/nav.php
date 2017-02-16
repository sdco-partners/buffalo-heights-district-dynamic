<?php
  /** 
  * Section => navigation
  */ 
?>

<h1>Buffalo Heights</h1>
<div id="fullmenu">
	<div class="fullmenu">
	  <div class="menu-bg">01</div>
	  <div class="menu-link"><a href="#about">About</a></div>
	</div>
	<div class="fullmenu">
	  <div class="menu-bg">02</div>
    <div class="menu-link"><a href="#press">Press</a></div>
	</div>
	<div class="fullmenu">
	  <div class="menu-bg">03</div>
	  <div class="menu-link"><a href="#info">Leasing</a></div>
	</div>
	<div class="fullmenu">
	  <div class="menu-bg">04</div>
	  <div class="menu-link"><a href="#connect">Connect</a></div>
	</div>
</div>
<div id="hamburger"><?php echo file_get_contents($GLOBALS['url']."/assets/hamburger.svg"); ?></div>