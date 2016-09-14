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

    <div id="content-santri" class="container">
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
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Daftar</th>
                <th>TTL</th>
                <th>Lembaga</th>
                <th>Pondok</th>
                <th>Status</th>
                <th>Alamat Lengkap</th>
                <th>Nomer HP</th>
                <th>Nama Ayah</th>
                <th>Pekerjaan</th>
                <th>Nomer HP Ayah</th>
                <th>Nama Ibu</th>
                <th>Pekerjaan Ibu</th>
                <th>Nomer HP Ibu</th>
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
                    <td><?php the_title(); ?></td>
                    <td><?php
                        the_date();
                        echo "&nbsp;";
                        the_time(); ?></td>
                    <td><?php the_field('tempat_lahir'); ?>, <?php the_field('tanggal_lahir'); ?></td>
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
                    <td><?php
                        $status = get_field('status');
                        if (get_field('status')) {
                            echo $status->name;
                        }
                        ?></td>
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
                    <td><?php the_field('nama_ayah'); ?></td>
                    <td><?php the_field('pekerjaan_ayah'); ?></td>
                    <td><?php the_field('nomer_telpon_ayah'); ?></td>
                    <td><?php the_field('nama_ibu'); ?></td>
                    <td><?php the_field('pekerjaan_ibu'); ?></td>
                    <td><?php the_field('nomer_telpon_ibu'); ?></td>
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
