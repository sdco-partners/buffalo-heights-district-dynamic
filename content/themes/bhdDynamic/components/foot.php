<?php
  /** 
  * Section => Foot
  */ 
  
  // Variables
  $info = get_field('info_link', 2)
?>

<div id="footer-social">
  <header>
    <p>In the <span>Heart of</span> Houston</p>
    <div class="underbar"></div>
  </header>
  <ul id="footer-links">
    <li class="links">
      <a href="<?php echo get_field('vimeo_link', 2, false); ?>" alt="" target="_blank">
        <?php echo file_get_contents($GLOBALS['url']."/assets/vimeo.svg"); ?>     
      </a>
    </li>
    <li class="links">
      <a href="mailto:<?php echo get_field('mail_link', 2); ?>" alt="" target="_blank">
        <?php echo file_get_contents($GLOBALS['url']."/assets/mail.svg"); ?>
      </a>
    </li>
    <li class="links">
      <a href="<?php echo $info['url']; ?>" alt="" target="_blank">
        <?php echo file_get_contents($GLOBALS['url']."/assets/info.svg"); ?>
      </a>
    </li> 
  </ul>
</div>
<div id="footer-info">
  <div>
    <h2>Owner</h2>
    <h1>BKR Memorial, LLC</h1>
  </div>
  <div>
    <h2>Developer</h2>
    <h1><a id="midway-link" href="http://midwaycompanies.com/" alt="Midway" target="_blank">Midway</a></h1>
  </div>
  <div>
    <h2>Copyright 2017 Buffalo Heights</h2>
    <h2><a href="http://SDCOPartners.com" alt="SDCO Partners" target="_blank">Site by SDCO. Partners</a></h2>
  </div>
</div>