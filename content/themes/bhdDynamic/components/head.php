<?php
  /**
  * Section =>  Head
  */ 
?>


 
<header>
	<p>In the <span>Heart</span> of <span>Houston</span></p>
</header>

<div id="popup-video">
  <a id="close-popup" href="#"><?php echo file_get_contents($GLOBALS['url']."/assets/close-bttn.svg"); ?></a>
	<iframe 
	  id="ytplayer" 
	  type="text/html" 
	  width="100%" 
	  height="860px"
    src="https://www.youtube.com/embed/NDQCxIrADZc?autoplay=1&controls=0&enablejsapi=1&fs=0&loop=1&modestbranding=1&rel=0&start=2&iv_load_policy=3"
    frameborder="0" 
    allowfullscreen>
	 </iframe>


</div>

<div id="head-seal"><a href="#"><?php echo file_get_contents($GLOBALS['url']."/assets/bhd-logo-seal.svg"); ?></a></div>
<h1>Buffalo Heights</h1>
<div class="underbar"></div>
<h2>In the heart of Houston</h2>
<button id="watch">Watch Video</button>