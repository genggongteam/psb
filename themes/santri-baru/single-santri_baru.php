<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>
<div class="santri-view wrapper" id="single-wrapper">
    <div id="content" class="container">
        <div class="row">
            <div id="primary" class="col-md-12 content-area">
                <main id="main" class="site-main print-santri-baru" role="main">
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- Content Santri -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '<small class="text-muted">&nbsp;' . get_field("no_induk_auto") . '</small></a></h2>'); ?>
                            </header><!-- .entry-header -->
                            <div class="printonly">
                                <img class="onlyprint logo-print"
                                     src="<?php echo get_template_directory_uri() . '/img/logo-pzhweb.png'; ?>">
                                <h4 class="onlyprint title-formulir">FORMULIR PENDAFTARAN SANTRI</h4>
                                <hr>
                                <span
                                    class="pull-xs-right onlyprint">Nomer Induk: <strong><?php the_field('no_induk_auto'); ?></strong></span>
                            </div>

                            <table id="table-single-santri" style="width:100%" class="table-single-santri">
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

                                        if ($pondk): ?>

                                            di <?php echo $pondk->name; ?>&nbsp;

                                        <?php endif; ?>
                                        <?php

                                        if (get_field('nomer_kamar')) {
                                            echo 'Kamar:&nbsp;' . get_field('nomer_kamar') . ' ';
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

                                        if ($lbg): ?>

                                            <?php echo $lbg->name; ?><br>

                                        <?php endif;

                                        if (get_field('scl_kelas_masuk')) {
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
                                    <td><?php the_field('alamat_lengkap'); ?><p> <?php the_field('rt_rw'); ?> &nbsp;Kecamatan:&nbsp; <?php the_field('kecamatandistrik'); ?>
                                            <br>Kota/Kabupaten:&nbsp;<?php echo get_field('kota_kabupaten')->name; ?>
                                            &nbsp;Propinsi:&nbsp;<?php echo get_field('provinsi')->name; ?>
                                            -&nbsp;<?php the_field('warga_negara'); ?></p>

                                    </td>
                                </tr>
                            </table>
                            <hr class="onlyprint">
                            <table id="table-single-santri" style="width:100%" class="table-single-santri">
                                <tr>
                                    <td style="width:30%"></td>
                                    <td style="width:2%"></td>
                                    <td style="width:68%"></td>
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
                            <hr class="onlyprint">
                            <h5 class="onlyprint">Janji Santri</h5>
                            <p class="onlyprint">Saya sanggup menjadi santri yang tunduk terhadap segala peraturan yang
                                dikeluarkan oleh Shohibul Bait dan Pengurus Pesantren Zainul Hasan Genggong.</p>
                            <div class="row onlyprint">
                                <div class="col-xs-6 text-xs-center">
                                    <strong>Mengetahui,<br>Wali Santri</strong><br><br><br><br><br>
                                    <small class="text-muted">................................<br>Nama Lengkap Wali
                                        Santri
                                    </small>
                                </div>
                                <div class="col-xs-6 text-xs-center">
                                    <strong>Genggong,<?php todayID(); ?><br></strong><br><br><br><br><br>
                                    <small class="text-muted">................................<br>Nama Lengkap Santri
                                    </small>
                                </div>
                            </div>
                            <br class="hidden-print">
                            <h5 class="hidden-print">Mahram</h5>
                            <table class="table table-striped hidden-print">
                                <thead class="thead-inverse">
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Hubungan</th>
                                    <th>Pekerjaan</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Nomer Telpon</th>
                                    <th>Alamat Lengkap</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                // check if the repeater field has rows of data
                                if (have_rows('mahram')):

                                    // loop through the rows of data
                                    while (have_rows('mahram')) : the_row();
                                        ?>

                                        <tr>
                                            <th scope="row"><?php the_sub_field('nama'); ?></th>
                                            <td><?php the_sub_field('hubungan'); ?></td>
                                            <td><?php the_sub_field('pekerjaan'); ?></td>
                                            <td><?php the_sub_field('pendidikan_terakhir'); ?></td>
                                            <td><?php the_sub_field('nomer_telpon'); ?></td>
                                            <td><?php the_sub_field('alamat_lengkap'); ?></td>
                                        </tr>


                                        <?php


                                    endwhile;

                                else :

                                    // no rows found

                                endif;

                                ?>
                                </tbody>
                            </table>
                            <div class="entry-content">

                                <?php
                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
                                    'after' => '</div>',
                                ));
                                ?>

                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->                        <!-- end Content Santri -->


                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->

            </div><!-- #primary -->


        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
