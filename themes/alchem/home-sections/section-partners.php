<?php 
  // section news 
  
   global $allowedposttags;
   $section_hide    = absint(alchem_option('section_9_hide',0));
   $content_model   = absint(alchem_option('section_9_model',0));
   $section_id      = esc_attr(sanitize_title(alchem_option('section_9_id')));
   $section_content = wp_kses(alchem_option('section_9_content'), $allowedposttags);
  
 ?> 
 <?php if( $section_hide != '1' ):?> 
 <section class="section magee-section parallax-scrolling alchem-home-section-9" id="<?php echo $section_id;?>">
  <div class="section-content container">
  <?php if( $content_model == 0 ):?>
    <div class="alchem-animated" data-animationduration="1.2" data-animationtype="fadeInLeft" data-imageanimation="no">
     <?php
	$partners = array();
	$html     = '';
    for( $i=0;$i<6;$i++){
		$image = alchem_option('section_9_partner_'.$i);
     if( $image != '' ){
      $partners[] = $image;
	 }
	}
  $num = count($partners);
  if( $num > 0 ){
  if( $num == 5 )
  $col = '1_5';
  else
  $col = 12/$num;
  foreach( $partners as $partner ){
	  $html .= '<div class="col-md-1_5"><img src="'.esc_url($partner).'" alt=""></div>';
	  }
  }

echo '<div class="row">'.$html.'</div>';

	  ?>      
    </div>
    <?php else:?>
 <?php echo do_shortcode($section_content);?>
 <?php endif;?>
  </div>
</section>
<?php endif;?> 