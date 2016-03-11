<?php
  // section testimonials 
  
   global $allowedposttags;
   $section_hide    = absint(alchem_option('section_7_hide',0));
   $content_model   = absint(alchem_option('section_7_model',0));
   $section_id      = esc_attr(sanitize_title(alchem_option('section_7_id')));
   $section_title   = wp_kses(alchem_option('section_7_title'), $allowedposttags);
   $section_content = wp_kses(alchem_option('section_7_content'), $allowedposttags);
   $columns         = absint(alchem_option('section_7_columns',3));
   $col             = $columns>0?12/$columns:4;
 ?> 
 <?php if( $section_hide != '1' ):?> 
 <section class="section magee-section parallax-scrolling alchem-home-section-7" id="<?php echo $section_id;?>">
  <div class="section-content container">
  <?php if( $content_model == 0 ):?>
  <?php if( $section_title != '' ):?>
    <h2 style="text-align: center"><span style="color: #ffffff"><?php echo $section_title;?></span></h2>
    <div class=" divider divider-border center" style="margin-top: 30px;margin-bottom:50px;width:80px;">
      <div class="divider-inner light" style="border-bottom-width:3px;"></div>
    </div>
    <?php endif;?>
    <div style="color:#fff;">
    
     <?php
	 $testimonial   = '';
	 $testimonials  = '';
	 $animationtype = array('fadeInLeft','fadeInDown','fadeInRight','fadeInLeft','fadeInUp','fadeInRight');
	 for( $j=0; $j<6; $j++ ){
	   
	  $avatar      =  esc_url(alchem_option('section_7_avatar_'.$j));
	  $name        =  esc_attr(alchem_option('section_7_name_'.$j));
	  $byline      =  esc_attr(alchem_option('section_7_byline_'.$j));
	  $description = wp_kses(alchem_option('section_7_desc_'.$j), $allowedposttags);
	  
	  if( $description != '' ):
	  $image = '';
	  if( $avatar != '' )
	  $image = '<img src="'.$avatar.'" class="img-circle">';
	  
	  $testimonial   .= '<div class="col-md-'.$col.'">
	  <div class="alchem-animated" data-animationduration="0.9" data-animationtype="'.$animationtype[$j].'" data-imageanimation="no">
          <div class="magee-testimonial-box">
            <div class="testimonial-content">
              <div class="testimonial-quote">'.do_shortcode($description).'</div>
            </div>
            <div class="testimonial-vcard style1">
              <div class="testimonial-avatar">'.$image.'</div>
              <div class="testimonial-author">
                <h4 class="name" style="text-transform: uppercase;">'.$name.'</h4>
                <div class="title">'.$byline.'</div>
              </div>
			  </div>
            </div>
          </div>
        </div>';
		
		$m = $j+1;
	  if( $m % $columns == 0 ){
	        $testimonials .= '<div class="row">'.$testimonial.'</div>';
	        $testimonial   = '';
	   }
	
	   endif;
	 }
	 if( $testimonial != '' ){
		    $testimonials .= '<div class="row">'.$testimonial.'</div>';
	      
		   }
		
	 echo $testimonials;
	  ?>      
    </div>
    <?php else:?>
 <?php echo do_shortcode($section_content);?>
 <?php endif;?>
  </div>
</section>
<?php endif;?>