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
	<div class="video-container-popup">
		<video id="full-video" muted controls src="<?php echo $GLOBALS['url']."/assets/video-02.mp4";?>">
		</video>
	</div>
	<div id="overlay-popup"></div> 
</div>

<div id="head-seal" class="head-text"><a href="#"><?php echo file_get_contents($GLOBALS['url']."/assets/bhd-logo-seal.svg"); ?></a></div>
<h1 class="head-text">Buffalo Heights</h1>
<div class="underbar head-text"></div>
<h2 class="head-text">In the heart of Houston</h2>
<button class="head-text" id="watch">Watch Video</button>

<div class="video-container">
  <div id="overlay"></div>
	<video autoplay loop muted src="<?php echo $GLOBALS['url']."/assets/video-01.mp4"; ?>">
	</video>
</div>

