<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>
<link rel="stylesheet" type="text/css"
      href="https://cdn.datatables.net/v/dt/jqc-1.12.3/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/sc-1.4.2/datatables.min.css"/>

<script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jqc-1.12.3/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/sc-1.4.2/datatables.min.js"></script>
<div class="wrapper" id="archive-santri">

    <div id="content-santri the-index-santri" class="container-fluid">
        <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header><!-- .page-header -->
        <div class="dtbl-btn"></div>

        <table id="santri-baru" class="table table-stripped">
            <thead>
            <tr>
                <th style="min-width: 30px">No</th>
                <th style="min-width: 60px">NIS</th>
                <th style="min-width: 140px">Status</th>
                <th style="min-width: 190px">Nama Lengkap</th>
                <th style="min-width: 180px">Tanggal Daftar</th>
                <th style="min-width: 180px">TTL</th>
                <th style="min-width: 170px">Asal Lembaga</th>
                <th style="min-width: 170px">Masuk Lembaga</th>
                <th style="min-width: 140px">Pondok Daerah</th>
                <th style="min-width: 140px">Nomer HP</th>
                <th style="min-width: 190px">Alamat Lengkap</th>
                <th style="min-width: 140px">Sodara</th>
                <th style="min-width: 140px">Nama Ayah</th>
                <th style="min-width: 140px">Pekerjaan</th>
                <th style="min-width: 140px">Nomer HP Ayah</th>
                <th style="min-width: 140px">Nama Ibu</th>
                <th style="min-width: 140px">Pekerjaan Ibu</th>
                <th style="min-width: 140px">Nomer HP Ibu</th>
                <th style="min-width: 200px">Keterangan Lainnya</th>
            </tr>
            </thead>
            <tbody>


            <?php
            $no = 0;
            while (have_posts()) : the_post();
                $no++; ?>

                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php the_field('no_induk_auto'); ?></td>
                    <td><?php
                        $status = get_field('status');
                        if (get_field('status')) {
                            echo $status->name;
                        }
                        ?>
                    </td>
                    <td><?php the_title(); ?></td>
                    <td><?php
                        the_date();
                        echo "&nbsp;";
                        the_time(); ?></td>
                    <td><?php the_field('tempat_lahir'); ?>, <?php the_field('tanggal_lahir'); ?></td>
                    <td><?php the_field('sekolah_sebelumnya'); ?>
                        <?php
                        if (get_field('pesantren_asal')) {
                            echo ', &nbsp;Pernah Mondok di : ' . get_field('pesantren_asal');
                        }
                        ?>
                    </td>
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
                    <td>
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
                    <td><?php the_field('kontak_santri'); ?></td>
                    <td><?php the_field('alamat_lengkap'); ?><p> <?php the_field('rt_rw'); ?>
                            &nbsp;Kecamatan:&nbsp; <?php the_field('kecamatandistrik'); ?>
                            <br>Kota/Kabupaten:&nbsp;<?php if (get_field('kota_kabupaten')) {
                                echo get_field('kota_kabupaten')->name;
                            } ?>
                            &nbsp;Propinsi:&nbsp;<?php if (get_field('provinsi')) {
                                echo get_field('provinsi')->name;
                            } ?>
                            -&nbsp;<?php the_field('warga_negara'); ?></p></td>
                    <td>Anak ke <?php the_field('anak_ke'); ?> dari <?php the_field('jumlah_sodara'); ?></td>
                    <td><?php the_field('nama_ayah'); ?></td>
                    <td><?php the_field('pekerjaan_ayah'); ?></td>
                    <td><?php the_field('nomer_telpon_ayah'); ?></td>
                    <td><?php the_field('nama_ibu'); ?></td>
                    <td><?php the_field('pekerjaan_ibu'); ?></td>
                    <td><?php the_field('nomer_telpon_ibu'); ?></td>
                    <td><?php the_field('catatan_dari_pengurus'); ?></td>
                </tr>

            <?php endwhile; ?>
            </tbody>
        </table>


    </div><!-- Container end -->

</div><!-- Wrapper end -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        var table = jQuery('#santri-baru').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'colvis', 'print'],
            scrollX: true
        });

        table.buttons().container()
            .appendTo('.dtbl-btn');
    });
</script>
<?php get_footer(); ?>
