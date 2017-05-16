<?php
  /** 
  * Section => Info
  */ 

?>

<div class="chapter">03<div class="dash"></div></div>
<div>
  <h1>Leasing Information</h1>
  <?php if ( have_rows('03_docs_fc', 2) ): while ( have_rows('03_docs_fc', 2) ) : the_row(); ?>
    <div class="linkout">
    <?php if ( get_row_layout() === '03_docs_fc-download' ) :
      $file = get_sub_field('03_doc-fc-download-file'); ?>
        <a href="<?php echo $file['file']; ?>" target="_blank">
          Download <?php echo get_sub_field('03_doc-fc-download-name'); ?>
        </a>
    <?php elseif ( get_row_layout() === '03_docs_fc-link' ) : ?>
        <a href="<?php echo get_sub_field('03_doc-fc-link-link'); ?>" target="_blank">
          View <?php echo get_sub_field('03_doc-fc-link-name'); ?>
        </a>
    <?php endif; ?>
    </div>
  <?php endwhile;endif; ?>
</div>