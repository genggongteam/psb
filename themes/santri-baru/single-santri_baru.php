<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>
<div class="santri-view wrapper" id="single-wrapper">
    
    <div  id="content" class="container">

        <div class="row">
        
            <div id="primary" class="col-md-12 content-area">
                
                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <!-- Content Santri -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
  <header class="entry-header">
        
    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        
  </header><!-- .entry-header -->
<table style="width:100%">
  <tr>
    <td style="width:30%">Nama Lengkap</td>
    <td style="width:2%">:</td> 
    <td style="width:68%"><?php the_title() ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td> 
    <td><?php the_field('kelamin'); ?></td>
  </tr>
  <tr>
    <td>Tempat, Tgl Lahir</td>
    <td>:</td> 
    <td><?php the_field('tempat_lahir'); ?>, <?php the_field('tanggal_lahir'); ?></td>
  </tr>
  <tr>
    <td>Masuk Pesantren</td>
    <td>:</td> 
    <td>Pada tanggal: <?php the_field('tgl_daftar'); ?><br>
<?php 

$pondk = get_field('pondok_daerah');

if( $pondk ): ?>

  di Pondok/Daerah: <?php echo $pondk->name; ?><br>

<?php endif; ?>
    <?php

if(get_field('nomer_kamar'))
{
  echo 'di Kamar:' . get_field('nomer_kamar') . ' ';
}

?>
      
    </td>
  </tr>
  <tr>
    <td>Masuk Lembaga</td>
    <td>:</td> 
    <td>
<?php 

$lemabaga = get_field('masuk_lembaga');

if( $lemabaga ): ?>

  <?php echo $lemabaga->name; ?><br>

<?php endif;

if(get_field('scl_kelas_masuk'))
{
  echo 'di terima di kelas: ' . get_field('scl_kelas_masuk');
}
 ?>


    </td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td> 
    <td>94</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td> 
    <td>94</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td> 
    <td>94</td>
  </tr>
</table>





    
    <div class="entry-content">

      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
          'after'  => '</div>',
        ) );
      ?>
          
    </div><!-- .entry-content -->


    
</article><!-- #post-## -->                        <!-- end Content Santri -->

                        <?php understrap_post_nav(); ?>

                        
                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
                
            </div><!-- #primary -->
        

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
