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
	<div class="video-container">
		<video autoplay loop mute src="<?php echo $GLOBALS['url']."/assets/video-02.mp4"; ?>">
		</video>
	</div> 
</div>

<div id="head-seal"><a href="#"><?php echo file_get_contents($GLOBALS['url']."/assets/bhd-logo-seal.svg"); ?></a></div>
<h1>Buffalo Heights</h1>
<div class="underbar"></div>
<h2>In the heart of Houston</h2>
<button id="watch">Watch Video</button>

<div class="video-container">
	<video autoplay loop mute src="<?php echo $GLOBALS['url']."/assets/video-01.mp4"; ?>">
	</video>
</div>

