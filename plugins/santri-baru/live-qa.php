<?php



    /** 1st QA * */
    $meta_boxes[] = array(
        'title' => '1st QA',
        'post_types' => 'projects',
        'fields' => array(
            array(
                'id' => $prefix . '1st_qaa',
                'name' => 'SoftwareSeni',
                'type' => 'textarea',
            ),
            array(
                'id' => $prefix . '1st_qab',
                'name' => 'Spotzer',
                'type' => 'textarea',
            ),
        ),
    );
    /** Live QA* */
    $meta_boxes[] = array(
        'title' => 'Live QA',
        'post_types' => 'projects',
        'fields' => array(
            //General Test
            array(
                'type' => 'custom_html',
                'std' => '<h4 class="qa-test"><i class="fa fa-laptop"></i> &nbsp;&nbsp;<strong>General Test</strong> <cite class="tc-blue"> 5  Mins</cite></h4><hr class="cool">',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>A</strong> &nbsp;&nbsp;Homepages</span>',
            ),
            array(
                'id' => $prefix . 'lq_gt_status_a',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_pass_a',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_scl_a',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lq_gt_note_a',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>B</strong> &nbsp;&nbsp;Click on all elements (Featured Listings, main image, video, etc) and make sure the elements are linked to the appropriate page.</span>',
            ),
            array(
                'id' => $prefix . 'lq_gt_status_b',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_pass_b',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_scl_b',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lq_gt_note_b',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>C</strong> &nbsp;&nbsp;Ensure that all the color is consitent and following mockup</span>',
            ),
            array(
                'id' => $prefix . 'lq_gt_status_c',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_pass_c',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_scl_c',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lq_gt_note_c',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>D</strong> &nbsp;&nbsp;Make sure Favicon appear in one theme as the clients logo. If client have the name as logo, add the initial to create</span>',
            ),
            array(
                'id' => $prefix . 'lq_gt_status_d',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_pass_d',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_scl_d',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lq_gt_note_d',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>E</strong> &nbsp;&nbsp;Hover on logo, make sure the tagline "Just Another Wordpress Site" is removed.</span>',
            ),
            array(
                'id' => $prefix . 'lq_gt_status_e',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_pass_e',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_scl_e',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lq_gt_note_e',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>F</strong> &nbsp;&nbsp;Click on all links across the page and confirm the target is correct.
(The link are not in staging)</span>',
            ),
            array(
                'id' => $prefix . 'lq_gt_status_f',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_pass_f',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_scl_f',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lq_gt_note_f',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>G</strong> &nbsp;&nbsp;All external links must open in a new tab</span>',
            ),
            array(
                'id' => $prefix . 'lq_gt_status_g',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_pass_g',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_scl_g',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lq_gt_note_g',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>H</strong> &nbsp;&nbsp;Make sure the padding are consistent.</span>',
            ),
            array(
                'id' => $prefix . 'lq_gt_status_h',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_pass_h',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lq_gt_scl_h',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lq_gt_note_h',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            //Page
            array(
                'type' => 'custom_html',
                'std' => '<h4 class="qa-test"><i class="fa fa-clone"></i> &nbsp;&nbsp;<strong>Page, check all pages and products outlined in the Project Brief</strong> <cite class="tc-blue"> 1  Min perPage</cite></h4><hr class="cool">',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>A</strong> &nbsp;&nbsp;Check the content across the page to make sure it is grammatically correct</span>',
            ),
            array(
                'id' => $prefix . 'lg_page_status_a',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_page_pass_a',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_page_scl_a',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_page_note_a',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>B</strong> &nbsp;&nbsp;Make sure the layout of content is consistent</span>',
            ),
            array(
                'id' => $prefix . 'lg_page_status_b',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_page_pass_b',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_page_scl_b',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_page_note_b',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            //Images
            array(
                'type' => 'custom_html',
                'std' => '<h4 class="qa-test"><i class="fa fa-photo"></i> &nbsp;&nbsp;<strong>Images, Check all image in all pages</strong> <cite class="tc-blue"> 5  Min perPage</cite></h4><hr class="cool">',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>A</strong> &nbsp;&nbsp;Confirm images are not broken/blurry and positioned correctly</span>',
            ),
            array(
                'id' => $prefix . 'lg_img_status_a',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_pass_a',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_scl_a',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_img_note_a',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>B</strong> &nbsp;&nbsp;Image link does not point to staging</span>',
            ),
            array(
                'id' => $prefix . 'lg_img_status_b',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_pass_b',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_scl_b',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_img_note_b',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>C</strong> &nbsp;&nbsp;Confirm the lightbox are not cropped.</span>',
            ),
            array(
                'id' => $prefix . 'lg_img_status_c',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_pass_c',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_scl_c',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_img_note_c',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>D</strong> &nbsp;&nbsp;Confirm the lightbox are working well (press the left and right arrow button)</span>',
            ),
            array(
                'id' => $prefix . 'lg_img_status_d',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_pass_d',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_scl_d',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_img_note_d',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>E</strong> &nbsp;&nbsp;Inspect the picture element, see the picture size/resolution and the original size/resolution.</span>',
            ),
            array(
                'id' => $prefix . 'lg_img_status_e',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_pass_e',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_scl_e',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_img_note_e',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>F</strong> &nbsp;&nbsp;Inspect the picture element, and make sure it located in live site.</span>',
            ),
            array(
                'id' => $prefix . 'lg_img_status_f',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_pass_f',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_img_scl_f',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_img_note_f',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            //Form
            array(
                'type' => 'custom_html',
                'std' => '<h4 class="qa-test"><i class="fa fa-list-alt"></i> &nbsp;&nbsp;<strong>Form (If page includes a form)</strong> <cite class="tc-blue"> 1  Min perForm</cite></h4><hr class="cool">',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>A</strong> &nbsp;&nbsp;Make sure all part and form is consistent in all pages.</span>',
            ),
            array(
                'id' => $prefix . 'lg_form_status_a',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form_pass_a',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form_scl_a',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form_note_a',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>B</strong> &nbsp;&nbsp;Make sure all text and form are alligned and no spill out issues.</span>',
            ),
            array(
                'id' => $prefix . 'lg_form_status_b',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form_pass_b',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form_scl_b',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form_note_b',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>C</strong> &nbsp;&nbsp;Every form with phone number should only allow these characters: 
digit, space, -, +, (, )   </span>',
            ),
            array(
                'id' => $prefix . 'lg_form_status_c',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form_pass_c',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form_scl_c',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form_note_c',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>D</strong> &nbsp;&nbsp;Phone number field is no longer Mandatory</span>',
            ),
            array(
                'id' => $prefix . 'lg_form_status_d',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form_pass_d',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form_scl_d',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form_note_d',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            //Form Two
            array(
                'type' => 'custom_html',
                'std' => '<h4 class="qa-test"><i class="fa fa-list-ul"></i> &nbsp;&nbsp;<strong>Do test case below</strong> <cite class="tc-blue"> 3  Min perForm</cite></h4><hr class="cool">',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>A</strong> &nbsp;&nbsp;Half complete form and press submit</span>',
            ),
            array(
                'id' => $prefix . 'lg_form2_status_a',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_pass_a',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_scl_a',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form2_note_a',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>B</strong> &nbsp;&nbsp;Check validation appears for compulsory fields</span>',
            ),
            array(
                'id' => $prefix . 'lg_form2_status_b',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_pass_b',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_scl_b',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form2_note_b',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>C</strong> &nbsp;&nbsp;Check data entered is not lost</span>',
            ),
            array(
                'id' => $prefix . 'lg_form2_status_c',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_pass_c',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_scl_c',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form2_note_c',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>D</strong> &nbsp;&nbsp;Check validation errors are styled correctly</span>',
            ),
            array(
                'id' => $prefix . 'lg_form2_status_d',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_pass_d',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_scl_d',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form2_note_d',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>E</strong> &nbsp;&nbsp;Check number only fields cant have non-numbers added</span>',
            ),
            array(
                'id' => $prefix . 'lg_form2_status_e',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_pass_e',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_scl_e',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form2_note_e',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>F</strong> &nbsp;&nbsp;Complete the form and test success message is correct and styled</span>',
            ),
            array(
                'id' => $prefix . 'lg_form2_status_f',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_pass_f',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_scl_f',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form2_note_f',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>G</strong> &nbsp;&nbsp;Make sure you receive the e-mail after submitting.</span>',
            ),
            array(
                'id' => $prefix . 'lg_form2_status_g',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_pass_g',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_scl_g',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form2_note_g',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>H</strong> &nbsp;&nbsp;Make sure the sender email are from the live site not demo</span>',
            ),
            array(
                'id' => $prefix . 'lg_form2_status_h',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_pass_h',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_scl_h',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form2_note_h',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>I</strong> &nbsp;&nbsp;Make sure to change back the recipient e-mail to original/client. If no e-mail is available in the Ready to Live doc, please inform your PM.</span>',
            ),
            array(
                'id' => $prefix . 'lg_form2_status_i',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_pass_i',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_form2_scl_i',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_form2_note_i',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            // BE Test
            array(
                'type' => 'custom_html',
                'std' => '<h4 class="qa-test"><i class="fa fa-cogs"></i> &nbsp;&nbsp;<strong>WP Backend, Login to wp-admin and make sure:</strong> <cite class="tc-blue"> 5  Mins</cite></h4><hr class="cool">',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>A</strong> &nbsp;&nbsp;Make sure that the email used for global email in setting are the client email. 
Check it in Ready to Live docs.</span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_a',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_a',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_a',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_a',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>B</strong> &nbsp;&nbsp;Make sure the site abbreviations from staging not appear in wp-admin</span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_b',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_b',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_b',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_b',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>C</strong> &nbsp;&nbsp;Make sure the search engine discourage are uncheck (go to Setting - Reading (image 1)) </span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_c',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_c',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_c',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_c',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>D</strong> &nbsp;&nbsp;Make sure the sender email are correct  </span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_d',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_d',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_d',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_d',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>E</strong> &nbsp;&nbsp;Check all emails sent to appropriate Address with Logo</span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_e',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_e',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_e',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_e',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>F</strong> &nbsp;&nbsp;Check the data (form submiting, comment, etc) are stored in database </span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_f',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_f',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_f',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_f',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>G</strong> &nbsp;&nbsp;Check the testing data (form submiting, comment, etc) are deleted from database. WP>Form>Entries  </span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_g',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_g',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_g',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_g',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>H</strong> &nbsp;&nbsp;Check there are no error on the form. WP>Form>Form Setting </span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_h',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_h',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_h',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_h',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            //Others

            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>I</strong> &nbsp;&nbsp;Make sure the site abbreviations from staging not appear in wp-admin</span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_i',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_i',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_i',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_i',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<span class="qa-detail">&nbsp;<i class="fa fa-caret-right"></i>&nbsp;<strong>J</strong> &nbsp;&nbsp;Make sure the search engine discourage are uncheck</span>',
            ),
            array(
                'id' => $prefix . 'lg_be_status_j',
                'name' => 'Status',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'In Test' => 'In Test',
                    'completed' => 'Completed',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_pass_j',
                'name' => 'Pass',
                'type' => 'select_advanced',
                'options' => array(
                    'N/A' => 'N/A',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ),
            ),
            array(
                'id' => $prefix . 'lg_be_scl_j',
                'name' => 'Screenshoot Link',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id' => $prefix . 'lg_be_note_j',
                'name' => 'Note/Bugs',
                'type' => 'textarea',
            ),

        ),
    );


?>