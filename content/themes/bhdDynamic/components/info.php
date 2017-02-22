<?php
  /** 
  * Section => Info
  */ 

  // Variables
  $documents = get_field( '03_documents', 2);
?>

<div class="chapter">03<div class="dash"></div></div>
<div>
  <h1>Leasing Information</h1>
  <?php if( $documents ){ 
  	foreach( $documents as $doc ){ 
  		$file_path = $doc['03_doc_link'];
  		$file_name = $doc['03_doc_name'];
  		?>
      <div class="linkout"><a href="<?php echo $file_path['url']; ?>" target="_blank" alt="<?php echo $file_name; ?>">Download <?php echo $file_name; ?></a></div>
    <?php	}
  } ?>
<!--   <div class="linkout"><a href="#" target="_blank" alt="Download Leasing Info">Download Leasing PDF</a></div>
  <div class="linkout"><a href="#" target="_blank" alt="Download Floor Plans">Download Floor Plans PDF</a></div> -->
</div>