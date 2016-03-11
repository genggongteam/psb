<?php 
  // section slogan 
  
   global $allowedposttags;
   $section_hide    = absint(alchem_option('section_10_hide',0));
   $content_model   = absint(alchem_option('section_10_model',0));
   $section_id      = esc_attr(sanitize_title(alchem_option('section_10_id')));
   $section_title   = wp_kses(alchem_option('section_10_title'), $allowedposttags);
   $section_content = wp_kses(alchem_option('section_10_content'), $allowedposttags);
   $button_text     = esc_attr(alchem_option('section_10_button_text'));
   $button_link     = esc_attr(alchem_option('section_10_button_link'));
   $button_target   = esc_attr(alchem_option('section_10_button_target'),'_blank');
 ?> 
 <?php if( $section_hide != '1' ):?> 
 <section class="section magee-section parallax-scrolling alchem-home-section-10" id="<?php echo $section_id;?>">
  <div class="section-content container">
  <?php if( $content_model == 0 ):?>
   <div class="alchem-animated" data-animationduration="1.2" data-animationtype="fadeInDown" data-imageanimation="no">
  <?php if( $section_title != '' ):?>
    <h2 style="text-align: center"><span style="color: #ffffff"><?php echo $section_title;?></span></h2>
    <div class="divider divider-border center" style="margin-top: 30px;margin-bottom:50px;width:80px;">
      <div class="divider-inner light" style="border-bottom-width:3px; "></div>
    </div>
    <?php endif;?>
    <div style="text-align: center">
    <a href="<?php echo $button_link;?>" target="<?php echo $button_target;?>" style="" class=" magee-btn-normal btn-md btn-line btn-light"><?php echo $button_text;?></a>
    </div>
    </div>
    <?php else:?>
 <?php echo do_shortcode($section_content);?>
 <?php endif;?>
  </div>
</section>
<?php endif;?>