<?php 
// section ahout us
   global $allowedposttags;
   $section_hide    = absint(alchem_option('section_5_hide',0));
   $section_id      = esc_attr(sanitize_title(alchem_option('section_5_id')));
   $section_content = wp_kses(alchem_option('section_5_content'), $allowedposttags);

 ?> 
 <?php if( $section_hide != '1' ):?>
 <section class="section magee-section alchem-home-section-5 parallax-scrolling" id="<?php echo $section_id;?>">
 <div class="section-content container">
 <?php echo do_shortcode($section_content);?>
  </div>
</section>
 <?php endif;?>   