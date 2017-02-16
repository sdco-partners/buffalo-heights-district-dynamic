<?php
  /** 
  * Section => navigation
  */ 
?>

<h1>Buffalo Heights</h1>
<div id="fullmenu">
	<div class="fullmenu">
	  <div class="menu-bg" id="menu-01">01</div>
	  <div class="menu-link"><a href="#about">About</a></div>
	</div>
	<div class="fullmenu">
	  <div class="menu-bg" id="menu-02">02</div>
    <div class="menu-link"><a href="#press">Press</a></div>
	</div>
	<div class="fullmenu">
	  <div class="menu-bg" id="menu-03">03</div>
	  <div class="menu-link"><a href="#info">Leasing</a></div>
	</div>
	<div class="fullmenu">
	  <div class="menu-bg" id="menu-04">04</div>
	  <div class="menu-link"><a href="#connect">Connect</a></div>
	</div>
</div>
<div id="hamburger"><?php echo file_get_contents($GLOBALS['url']."/assets/hamburger.svg"); ?></div>