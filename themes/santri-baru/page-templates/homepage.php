<?php
/**
 * Template Name: Homepage Santri Baru
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header();

// Get Data From DB

$all_rows=wp_count_posts( 'santri_baru' )->publish;





?>

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="title-iuf">
        <h2>Dashboard</h2>
    </div>
    <!-- End of Title -->
    <?php
    $ptypes = array('santri_baru','kota',''); //array with all of your post types
    $tags = get_tags( array('name__like' => "a", 'order' => 'ASC') );
    foreach ( (array) $tags as $tag ) { ?>
        <li>
            <a href="<?php echo get_tag_link( $tag->term_id ) ?>">
                <span class="name"><?php echo $tag->name ?></span>
                <span class="number">
            <?php
            $count = 1;
            foreach($ptypes as $t){
                echo get_term_post_count_by_type($tag,'post_tag',$t) . " " . $t;
                if (count($ptypes) != $count){
                    echo " | ";
                    $count = $count + 1;
                }
            }
            ?>
            </span>
            </a>
        </li>
    <?php } ?>
    <!-- Counter Wrap -->
    <div class="counter-iuf">
        <div class="registered-iuf counter-item-iuf">
            <div class="counter-wrap-iuf">
                <h1><?php echo $all_rows; ?></h1>
                <p>Semua Santri</p>
            </div>
        </div>
        <div class="attended-iuf counter-item-iuf">
            <div class="counter-wrap-iuf">
                <h1><?php echo countPostByTax('santri_baru','status','aktif'); ?></h1>
                <p>Santri</p>
            </div>
        </div>
        <div class="paid-iuf counter-item-iuf">
            <div class="counter-wrap-iuf">
                <h1><?php echo countPostByTax('santri_baru','status','calon-santri'); ?></h1>
                <p>Calon Santri</p>
            </div>
        </div>
        <div class="participant-iuf counter-item-iuf">
            <div class="counter-wrap-iuf">
                <h1><?php echo countPostByTax('santri_baru','status','memundurkan-diri'); ?></h1>
                <p>Memundurkan Diri</p>
            </div>
        </div>
        <div class="auth-iuf counter-item-iuf">
            <div class="counter-wrap-iuf">
                <h1><?php echo $author_t; ?></h1>
                <p>Author</p>
            </div>
        </div>
        <div class="unpaid-iuf counter-item-iuf">
            <div class="counter-wrap-iuf">
                <h1><?php echo $unpaid; ?></h1>
                <p>Unpaid Member</p>
            </div>
        </div>
    </div>
    <!-- End of Counter Wrap -->

    <!-- Add on facilities -->
    <div class="info-iuf">
        <h2>Add-on facilities</h2>
        <div class="trip-iuf">

            <div class="mid-trip-iuf">
                <h3>Mid Trip</h3>
                <!-- Mid Trip Item -->
                <div class="trip-item">
                    <div class="place-iuf">
                        <p>Gunung Kidul</p>
                    </div>
                    <div class="numb-iuf">
                        <p><?php echo $gkidul_rows; ?></p>
                    </div>
                </div>
                <!-- End of Mid Trip Item -->
                <!-- Mid Trip Item -->
                <div class="trip-item">
                    <div class="place-iuf">
                        <p>Klaten</p>
                    </div>
                    <div class="numb-iuf">
                        <p><?php echo $klaten_rows; ?></p>
                    </div>
                </div>
                <!-- End of Mid Trip Item -->
                <!-- Mid Trip Item -->
                <div class="trip-item">
                    <div class="place-iuf">
                        <p>Merapi</p>
                    </div>
                    <div class="numb-iuf">
                        <p><?php echo $merapi_rows; ?></p>
                    </div>
                </div>
                <!-- End of Mid Trip Item -->
            </div>

            <div class="post-trip-iuf">
                <h3>Post Trip</h3>
                <!-- Post Trip Item -->
                <div class="trip-item">
                    <div class="place-iuf">
                        <p>Pacitan</p>
                    </div>
                    <div class="numb-iuf">
                        <p><?php echo $pacitan_rows; ?></p>
                    </div>
                </div>
                <!-- End of Post Trip Item -->
                <!-- Post Trip Item -->
                <div class="trip-item">
                    <div class="place-iuf">
                        <p>Pekanbaru Shared</p>
                    </div>
                    <div class="numb-iuf">
                        <p><?php echo $pekanbaru_shared_rows; ?></p>
                    </div>
                </div>
                <!-- End of Post Trip Item -->
                <!-- Post Trip Item -->
                <div class="trip-item">
                    <div class="place-iuf">
                        <p>Pekanbaru Single</p>
                    </div>
                    <div class="numb-iuf">
                        <p><?php echo $pekanbaru_single_rows; ?></p>
                    </div>
                </div>
                <!-- End of Post Trip Item -->
            </div>
        </div>
    </div>
    <!-- End of Add on facilities -->
    <!-- Dinner -->
    <div class="dinner-wrap-iuf">
        <div class="dinner-iuf-item">
            <div class="dinner-iuf">
                <p>Dinner</p>
            </div>
            <div class="dinner-numb-iuf">
                <p><?php echo $dinner_rows; ?></p>
            </div>
        </div>
    </div>
    <!-- End of Dinner -->

    <!--             <div class="content-wrap-iuf">
                    <h3>Content Wrap</h3>
                    <a href="#" class="btn-admin-iuf btn-black-iuf">VIEW</a>
                </div>

                <div class="content-wrap-iuf">
                    <h3>Content Wrap</h3>
                    <a href="#" class="btn-admin-iuf btn-grey-iuf">VIEW</a>
                </div> -->

</div>
<!-- End of Container -->


<?php
get_footer();
?>
