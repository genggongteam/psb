<?php 
        if (isset($_GET['ew_only'])) {
            $location = $_GET['ew_only'];
          if (have_posts()) :
          while (have_posts()) : the_post();
//           header("Content-type: application/vnd.ms-excel; name='excel'");
// header("Content-Disposition: attachment; filename=extrawork.xls");
// header("Pragma: no-cache");
// header("Expires: 0");
          ?>
<!--                   <table width="100%"> 
<thead>
<tr>
  <th width="5%">No</th> <th>Category</th> <th>Work Details</th> <th>Ticket Link</th> <th>Starting Date</th><th>Delivery Date</th>  <th>Duration</th>   <th>Invoice Month</th> <th>Billed</th>  
</tr>
</thead>
<tbody>  -->

  <?php

// // check if the repeater field has rows of data
// if( have_rows('extra_work_container') ):

//      // loop through the rows of data
//   $nomor=1;
//     while ( have_rows('extra_work_container') ) : the_row();
//   $no=$nomor++;
?>
<!--   <tr> 
    <th scope="row"><?php //echo $no; ?></th>
    <td><?php //the_sub_field('ew_category'); ?></td>
    <td><?php //the_sub_field('ew_work_details'); ?></td>
    <td><?php //the_sub_field('ew_ticket_link'); ?></td>
    <td><?php //the_sub_field('ew_starting_date'); ?></td>
    <td><?php //the_sub_field('ew_delivery_date'); ?></td>
    <td><?php //the_sub_field('ew_duration'); ?></td>
    <td><?php //the_sub_field('ew_invoice_month'); ?></td>
    <td><?php //the_sub_field('ew_billed'); ?></td>
  <tr> -->
        
<?php
//     endwhile;

// else :

//     // no rows found

// endif;

?>
  
<!-- </tbody> 
</table>
<br> -->

<?php
          endwhile;
          endif;
    } else {    


get_header();
global $current_user; // Use global
get_currentuserinfo();
if ( is_user_logged_in() &&  ! user_can( $current_user, "subscriber")  ) {
?>
    
    <div id="content" class="post">

        <div class="container">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>            
<br>
<div class="jumbotron">
  <h1><?php the_title(); ?> <small>&nbsp; Created by <?php the_author(); ?> on <?php the_time(); ?>&nbsp;&nbsp;<?php the_date(); ?></small></h1>
<br>
  <div class="well well-sm">
    This item was last modified by <?php the_modified_author(); ?> on <?php the_modified_time(); ?>&nbsp;&nbsp;<?php the_modified_date(); ?>
  </div>
</div>                  
                    
    
                  <hr>
                    
<div class="row">
<div class="col-md-6 col-sm-12">
  
<div class="panel panel-success">
  <div class="panel-heading" role="button" data-toggle="collapse" href="#rtl-doc" aria-expanded="false" aria-controls="rtl-doc">Ready to Live Documents <span class="badge pull-right">Click to Expand</span></div>
  <div class="panel-body collapse" id="rtl-doc">
<table class="table table-bordered"> 
<tbody> 
<tr>
  <th scope="row">PID</th>
  <td><?php echo rwmb_meta( 'pj_gi_pid'); ?></td>
</tr>
<tr>
  <th scope="row">Status</th>
  <td>
      <?php   $type=rwmb_meta( 'pj_env_status');
  if ( $type == 'done' ){
    echo "<span>DONE</span>";
  }elseif ( $type == 'live' ){
    echo "<span>LIVE</span>";
  }elseif ( $type == 'link' ){
    echo "<span>LINK</span>";
  }elseif ( $type == 'rtl' ){
    echo "<span>READY TO LIVE</span>";
  }elseif ( $type == 'a_record' ){
    echo "<span>A RECORD</span>";
  }elseif ( $type == 'cancelled' ){
    echo "<span>CANCELLED</span>";
  }elseif ( $type == 'ci' ){
    echo "<span>CI</span>";
  }elseif ( $type == 'fe' ){
    echo "<span>in FE</span>";
  }elseif ( $type == 'be' ){
    echo "<span>BE</span>";
  }elseif ( $type == 'in_qa' ){
    echo "<span>IN QA</span>";
  }elseif ( $type == 'last_qa' ){
    echo "<span>IN LAST QA</span>";
  }elseif ( $type == 'closed' ){
    echo "<span>CLOSED</span>";
  }elseif ( $type == 'setup' ){
    echo "<span>SETUP</span>";
  }elseif ( $type == 'migration' ){
    echo "<span>MIGRATION</span>";
  }elseif ( $type == 'in_spz' ){
    echo "<span>IN SPOTZER</span>";
  }elseif ( $type == 'in_aw_spz' ){
    echo "<span>IN AWAITING SPOTZER</span>";
  }elseif ( $type == 'kick-off' ){
    echo "<span>KICK OFF</span>";
  }elseif ( $type == 'wip' ){
    echo "<span>WIP</span>";
  }elseif ( $type == 'pending' ){
    echo "<span>PENDING HOLD</span>";
  }else{
  }; ?>  
  
  </td>
</tr>
<tr>
  <th scope="row">Request to Live</th>
  <td><?php echo rwmb_meta( 'pj_gi_date_req_live'); ?></td>
</tr>
<tr>
  <th scope="row">3rd Hosting</th>
  <td><?php echo rwmb_meta( 'pj_gi_3rd_hosting'); ?></td>
</tr>
<tr>
  <th scope="row">Hosting Location</th>
  <td><?php
    $args= array(
    'type'         => 'taxonomy',
    'taxonomy'        => 'hosting',
);                                                                      
    $terms = rwmb_meta( 'pj_gi_hosting_location', $args); 
if ( !empty( $terms ) ) {
    $content = '<ul>';
    foreach ( $terms as $term ) {
        $content .= sprintf(
            '<li><a href="%s" title="%s">%s</a></li>',
            get_term_link( $term, 'tax_slug' ),
            $term->name,
            $term->name
        );
    }
    $content .= '</ul>';
    echo $content;
}
    ?></td>
</tr>
<tr>
  <th scope="row">Confirm Main website e-mail</th>
  <td><?php echo rwmb_meta( 'pj_gi_main_web_mail'); ?></td>
</tr>
<tr>
  <th scope="row">Demo Site URL</th>
  <td> <a href="<?php echo rwmb_meta( 'pj_pj_req_live'); ?>" target="_blank"><?php echo rwmb_meta( 'pj_pj_req_live'); ?></a> </td>
</tr>
<tr>
  <th scope="row">Last QA Date on Demo</th>
  <td><?php echo rwmb_meta( 'pj_pj_last_qa'); ?></td>
</tr>
<tr>
  <th scope="row">Live URL</th>
  <td>  <a href="<?php echo rwmb_meta( 'pj_pj_live_url'); ?>" target="_blank"><?php echo rwmb_meta( 'pj_pj_live_url'); ?></a> </td>
</tr>
  
<tr>
  <th scope="row">Cpanel URL</th>
  <td> <a href="<?php echo rwmb_meta( 'pj_host_cpanel_url'); ?>" target="_blank"><?php echo rwmb_meta( 'pj_host_cpanel_url'); ?></a></td>
</tr>
<tr>
  <th scope="row">Cpanel Username</th>
  <td><?php echo rwmb_meta( 'pj_host_cpanel_uname'); ?></td>
</tr>
<tr>
  <th scope="row">Cpanel Password</th>
  <td><code><?php echo rwmb_meta( 'pj_host_cpanel_pwd'); ?></code></td>
</tr>
<tr>
  <th scope="row">FTP/FTPS Host Address</th>
  <td> <a href="<?php echo rwmb_meta( 'pj_host_ftp_addr'); ?>" target="_blank"><?php echo rwmb_meta( 'pj_host_ftp_addr'); ?></a> </td>
</tr>
<tr>
  <th scope="row">FTP/FTPS Username</th>
  <td><?php echo rwmb_meta( 'pj_host_ftp_uname'); ?></td>
</tr>
  
<tr>
  <th scope="row">FTP/FTPS Password</th>
  <td><code><?php echo rwmb_meta( 'pj_host_ftp_pwd'); ?></code></td>
</tr>
<tr>
  <th scope="row">IP Address</th>
  <td><?php echo rwmb_meta( 'pj_host_ip_addr'); ?></td>
</tr>
<tr>
  <th scope="row">Email Hosting</th>
  <td><?php echo rwmb_meta( 'pj_host_email_hosting'); ?></td>
</tr>
<tr>
  <th scope="row">Mandrill/Mailchimp Email</th>
  <td><?php echo rwmb_meta( 'pj_host_mandril'); ?></td>
</tr>
<tr>
  <th scope="row">Mandrill/Mailchimp Password</th>
  <td><code><?php echo rwmb_meta( 'pj_host_mandril_pwd'); ?></code></td>
</tr>
<tr>
  <th scope="row">MX Record/DNS</th>
  <td><?php echo rwmb_meta( 'pj_host_mx'); ?></td>
</tr>

</tbody> 
</table>
    
  </div><!-- panel body -->
  

  
</div><!-- end of panel -->  


  <!-- end of ready to live document -->


</div>

<div class="col-md-6 col-sm-12">
<div class="panel panel-success">
  <div class="panel-body">
    <?php echo rwmb_meta( 'pj_n_ss_note'); ?>
  </div>
  <div class="panel-footer">Note from <strong>SoftwareSeni</strong></div>
</div>
  <br>

<div class="panel panel-success">
  <div class="panel-body">
   <?php echo rwmb_meta( 'pj_n_spotzer_note'); ?>
  </div>
  <div class="panel-footer">Note from <strong><?php echo rwmb_meta( 'pj_gi_customer'); ?></strong></div>
</div>
  
  
  
  
<table id="the_tables" class="table table-bordered hidden"> 
<thead>
<tr>
<td colspan="2"><h3>Live QA</h3>
</td>
</tr>
<tr>
<td colspan="2" style="background-color: #DDDDDD">
<strong>General Test</strong><br>
&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>A</strong> &nbsp;&nbsp;Homepages
</td>
</tr>
</thead>
<tbody> 
<tr>
  <th scope="row">Status</th>
  <td>
<?php echo rwmb_meta( 'pj_lq_gt_status_a'); ?>
  </td>
</tr>
<tr>
  <th scope="row">Pass</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_pass_a'); ?></td>
</tr>
<tr>
  <th scope="row">Screenshot</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_scl_a'); ?></td>
</tr>
<tr>
  <th scope="row">Note</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_note_a'); ?></td>
</tr>
<tr>
<td colspan="2" style="background-color: #DDDDDD">
&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>B</strong> &nbsp;&nbsp;Click on all elements (Featured Listings, main image, video, etc) and make sure the elements are linked to the appropriate page.
</td>
</tr>
<tr>
  <th scope="row">Status</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_status_b'); ?></td>
</tr>
<tr>
  <th scope="row">Pass</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_pass_b'); ?></td>
</tr>
<tr>
  <th scope="row">Screenshot</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_scl_b'); ?></td>
</tr>
<tr>
  <th scope="row">Note</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_note_b'); ?></td>
</tr>
<tr>
<td colspan="2" style="background-color: #DDDDDD">
&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>C</strong> &nbsp;&nbsp;Ensure that all the color is consitent and following mockup
</td>
</tr>
</thead>
<tbody> 
<tr>
  <th scope="row">Status</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_status_c'); ?></td>
</tr>
<tr>
  <th scope="row">Pass</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_pass_c'); ?></td>
</tr>
<tr>
  <th scope="row">Screenshot</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_scl_c'); ?></td>
</tr>
<tr>
  <th scope="row">Note</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_note_c'); ?></td>
</tr>
<tr>
<td colspan="2" style="background-color: #DDDDDD">
&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>D</strong> &nbsp;&nbsp;Make sure Favicon appear in one theme as the clients logo. If client have the name as logo, add the initial to create
</td>
</tr>
<tr>
  <th scope="row">Status</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_status_d'); ?></td>
</tr>
<tr>
  <th scope="row">Pass</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_pass_d'); ?></td>
</tr>
<tr>
  <th scope="row">Screenshot</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_scl_d'); ?></td>
</tr>
<tr>
  <th scope="row">Note</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_note_d'); ?></td>
</tr>
<tr>
<td colspan="2" style="background-color: #DDDDDD">
&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>E</strong> &nbsp;&nbsp;Hover on logo, make sure the tagline "Just Another Wordpress Site" is removed.
</td>
</tr>
<tr>
  <th scope="row">Status</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_status_e'); ?></td>
</tr>
<tr>
  <th scope="row">Pass</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_pass_e'); ?></td>
</tr>
<tr>
  <th scope="row">Screenshot</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_scl_e'); ?></td>
</tr>
<tr>
  <th scope="row">Note</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_note_e'); ?></td>
</tr>
<tr>
<td colspan="2" style="background-color: #DDDDDD">
&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>F</strong> &nbsp;&nbsp;Click on all links across the page and confirm the target is correct.
(The link are not in staging)
</td>
</tr>
<tr>
  <th scope="row">Status</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_status_f'); ?></td>
</tr>
<tr>
  <th scope="row">Pass</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_pass_f'); ?></td>
</tr>
<tr>
  <th scope="row">Screenshot</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_scl_f'); ?></td>
</tr>
<tr>
  <th scope="row">Note</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_note_f'); ?></td>
</tr>
<tr>
<td colspan="2" style="background-color: #DDDDDD">
&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>G</strong> &nbsp;&nbsp;All external links must open in a new tab
</td>
</tr>
<tr>
  <th scope="row">Status</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_status_g'); ?></td>
</tr>
<tr>
  <th scope="row">Pass</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_pass_g'); ?></td>
</tr>
<tr>
  <th scope="row">Screenshot</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_scl_g'); ?></td>
</tr>
<tr>
  <th scope="row">Note</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_note_g'); ?></td>
</tr>
<tr>
<td colspan="2" style="background-color: #DDDDDD">
&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>H</strong> &nbsp;&nbsp;Make sure the padding are consistent.
</td>
</tr>
<tr>
  <th scope="row">Status</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_status_h'); ?></td>
</tr>
<tr>
  <th scope="row">Pass</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_pass_h'); ?></td>
</tr>
<tr>
  <th scope="row">Screenshot</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_scl_h'); ?></td>
</tr>
<tr>
  <th scope="row">Note</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_note_h'); ?></td>
</tr>
<tr>
<td colspan="2" style="background-color: #DDDDDD">
<strong>General Test&nbsp;~>&nbsp;Homepages<br></strong>
Click on all elements (Featured Listings, main image, video, etc) and make sure the elements are linked to the appropriate page.
</td>
</tr>
<tr>
  <th scope="row">Status</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_status_h'); ?></td>
</tr>
<tr>
  <th scope="row">Pass</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_pass_h'); ?></td>
</tr>
<tr>
  <th scope="row">Screenshot</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_scl_h'); ?></td>
</tr>
<tr>
  <th scope="row">Note</th>
  <td><?php echo rwmb_meta( 'pj_lq_gt_note_h'); ?></td>
</tr>
</tbody> 
</table>
  
</div>
</div>
<hr>
          <h3>
            Extra Work
          </h3>
<table class="table table-bordered table-hover"> 
<thead>
<tr>
  <th>Project Name</th> <th>ID</th> <th>Work Details</th> <th>FT Ticket</th> <th>Request Date</th><th>Duration</th>  <th>Category</th> <th>Starting Date</th>   <th>Invoice Month</th> <th>Billed</th>  
</tr>
</thead>
<tbody> 

  <?php

// check if the repeater field has rows of data
if( have_rows('ew_container') ):

    // loop through the rows of data
  $nomor=1;
    while ( have_rows('ew_container') ) : the_row();
  $no=$nomor++;
?>
  <tr> 
    <td><?php the_title(); ?></td>
    <td><?php echo rwmb_meta( 'pj_gi_pid'); ?></th>
    <td><?php the_sub_field('ew_work_details'); ?></td>
    <td><a href="<?php the_sub_field('ew_ticket_link'); ?>" target="_blank">Ticket Link</a></td>
    <td><?php the_sub_field('ew_delivery_date'); ?></td> 
    <td><?php the_sub_field('ew_duration'); ?></td>
    <td><?php the_sub_field('ew_category'); ?></td>
    <td><?php the_sub_field('ew_starting_date'); ?></td>
    <td><?php the_sub_field('ew_invoice_month'); ?></td>
    <td><?php the_sub_field('ew_billed'); ?></td>
  <tr>
        
<?php
    endwhile;

else :

    // no rows found

endif;

?>
      
</tbody> 
</table>
           
          
          
          
          
                </div>
 
            
            <?php endwhile; ?>
        <?php endif; ?>
        
        </div>

    </div>
        
<?php
} else {
    echo '<div class="container">
<br><br><br>
<div class="alert alert-danger">
    Access Denied.. You must be an administrative member to access this page !!!, <a href="'. home_url( "/wp-login.php" ) .'">Login Here</a>
</div>
<br><br>
    </div>';
}

                                                                          get_footer(); 
        }?>