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
<main id="main" class="site-main print-santri-baru" role="main">
<?php while ( have_posts() ) : the_post(); ?>
<!-- Content Santri -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">
<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
</header><!-- .entry-header -->
<div class="printonly">
<h4>FORMULIR PENDAFTARAN SANTRI BARU</h4>
<br>
<span class="pull-right">Nomer Induk: <strong><?php the_field('no_induk_auto'); ?></strong></span>
</div>
<table id="table-single-santri" style="width:100%">
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

  di <?php echo $pondk->name; ?><br>

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

$lbg = get_field('masuk_lembaga');

if( $lbg ): ?>

  <?php echo $lbg->name; ?><br>

<?php endif;

if(get_field('scl_kelas_masuk'))
{
  echo 'di terima di kelas: ' . get_field('scl_kelas_masuk');
}
 ?>


    </td>
  </tr>
  <tr>
  <td>No Handphone</td>
  <td>:</td>
  <td><?php the_field('kontak_santri'); ?></td>
  </tr>
  <tr>
    <td>Alamat Lengkap</td>
    <td>:</td> 
    <td><?php the_field('alamat_lengkap'); ?><p> <?php the_field('rt_rw'); ?> &nbsp;Kecamatan:&nbsp; <?php the_field('kecamatandistrik'); ?> <br>Kota/Kabupaten:&nbsp;<?php echo get_field('kota_kabupaten')->name;  ?> &nbsp;Propinsi:&nbsp;<?php echo get_field('provinsi')->name; ?> </br>Negara:&nbsp;<?php the_field('warga_negara'); ?></p>

    </td>
  </tr>
  <tr>
    <td><strong>Data Orang Tua</strong></td>
  </tr>
  <tr>
    <td>Nama Ayah</td>
    <td>:</td> 
    <td><?php the_field('nama_ayah'); ?></td>
  </tr>
  <tr>
    <td>Pekerjaan Ayah</td>
    <td>:</td> 
    <td><?php the_field('pekerjaan_ayah'); ?></td>
  </tr>
  <tr>
    <td>Nomer Telpon Ayah</td>
    <td>:</td> 
    <td><?php the_field('nomer_telpon_ayah'); ?></td>
  </tr>
  <tr>
    <td>Nama Ibu</td>
    <td>:</td> 
    <td><?php the_field('nama_ibu'); ?></td>
  </tr>
  <tr>
    <td>Pekerjaan Ibu</td>
    <td>:</td> 
    <td><?php the_field('pekerjaan_ibu'); ?></td>
  </tr>
  <tr>
    <td>Nomer Telpon Ibu</td>
    <td>:</td> 
    <td><?php the_field('nomer_telpon_ibu'); ?></td>
  </tr>
  <tr>
    <td>Alamat Lengkap</td>
    <td>:</td> 
    <td><?php the_field('alamat_lengkap'); ?></td>
  </tr>
</table>
<h4>Data Mahram</h4>
<h4>Janji Santri</h4>
<p>Saya sanggup menjadi santri yang tunduk terhadap segala peraturan yang dikeluarkan oleh Shohibul Bait dan Pengurus Pesantren Zainul Hasan Genggong.</p>
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
