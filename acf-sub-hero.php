<div class="inner-width">
  <div class="container">

   <?php 
        // if it has the  field
   if( get_field('info') ): ?>
     <div class="info-acf-container info--text">
      <?php the_field('info'); ?>
    </div>
    <!--END ACF-->
  <?php endif; ?>

  <?php 
  $icon = get_field('icon');
  if( !empty( $icon ) ): ?>
    <div class="inner-icon">
      <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
    </div>
  <?php endif; ?>

</div>
</div>
