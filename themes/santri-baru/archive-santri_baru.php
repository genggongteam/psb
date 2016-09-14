<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="archive-santri">
    
    <div  id="content-santri" class="container">
<h3>
  Santri Baru
  <small class="text-muted">
<button type="button" class="btn btn-primary-outline">Primary</button>
<button type="button" class="btn btn-secondary-outline">Secondary</button>
<button type="button" class="btn btn-success-outline">Success</button>
<button type="button" class="btn btn-info-outline">Info</button>
<button type="button" class="btn btn-warning-outline">Warning</button>
<button type="button" class="btn btn-danger-outline">Danger</button>
</small>
</h3>
<table class="table table-striped">
  <thead class="thead-inverse">
    <tr>
      <th>No</th>
      <th>Nama Lengkap</th>
      <th>Tanggal Daftar</th>
      <th>Lembaga</th>
      <th>Pondok</th>
      <th>Status</th>
      <th>##</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rio Bahtiar</td>
      <td>21/22/2008</td>
      <td>SMA Unggulan Hafshawaty</td>
      <td>Daerah C Kamar 3</td>
      <td>Lengkap</td>
      <td>Lihat</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Fathur</td>
      <td>21/22/2008</td>
      <td>SMA Unggulan Hafshawaty</td>
      <td>Daerah A Kamar 3</td>
      <td>Lengkap</td>
      <td>Lihat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Helly</td>
      <td>21/22/2008</td>
      <td>SMA Unggulan Hafshawaty</td>
      <td>Daerah A Kamar 3</td>
      <td>Belum Lengkap</td>
      <td>Lihat</td>
    </tr>
  </tbody>
</table>

        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
