<?php 
   // section tagline
   global $allowedposttags;
   $section_hide    = absint(alchem_option('section_1_hide',0));
   $content_model   = absint(alchem_option('section_1_model',0));
   $section_id      = esc_attr(sanitize_title(alchem_option('section_1_id')));
   $slogan_title    = wp_kses(alchem_option('section_1_slogan_title'), $allowedposttags);
   $slogan_content  = wp_kses(alchem_option('section_1_slogan_content'), $allowedposttags);
   $button_text     = esc_attr(alchem_option('section_1_button_text'));
   $button_link     = esc_attr(alchem_option('section_1_button_link'));
   $button_target   = esc_attr(alchem_option('section_1_button_target'),'_blank');
   $content_align   = esc_attr(alchem_option('section_1_content_align'),'right');
   $section_content = wp_kses(alchem_option('section_1_content'), $allowedposttags);
 ?>  
  <?php if( $section_hide != '1' ):?>
<section class="section magee-section alchem-home-section-1" id="<?php echo $section_id;?>">
  <div class="section-content container">
  <?php if( $content_model == 0 ):?>
  <div class="alchem-animated" data-animationduration="0.9" data-animationtype="fadeInRight" data-imageanimation="no">
    <div class="magee-promo-box" id="">
      <div class="promo-info">
        <h4><?php echo $slogan_title;?></h4>
        <p><?php echo do_shortcode($slogan_content);?></p>
      </div>
       <?php if( $button_text != '' ){?>
      <div class="promo-action"> <a href="<?php echo $button_link;?>" target="<?php echo $button_target;?>" class="btn-normal btn-lg"><i class="fa "></i> <?php echo $button_text;?></a></div>
      <?php }?>
    </div>
    </div>
 <?php else:?>
 <?php echo do_shortcode($section_content);?>
 <?php endif;?>
  </div>
</section>
 <?php endif;?>