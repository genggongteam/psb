<?php

/**
 * ============================================
 * --- Metabox Form
 * ============================================
 * */
add_filter('rwmb_meta_boxes', 'mb_go_live_projects');

function mb_go_live_projects($meta_boxes) {
    $prefix = 'pj_';
    $meta_boxes[] = array(
        'id' => 'primary_form',
        'title' => 'Ready to Live Document',
        'post_types' => 'projects',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'type' => 'custom_html',
                'std' => '<h4><strong>General Information</strong> <cite class="tc-blue"> ~filled by Spotzer</cite></h4><hr class="cool">',
            ),
            array(
                'id' => $prefix . 'gi_date_req_live',
                'name' => 'Request to Live(date)',
                'type' => 'date',
                'js_options' => array(
                    'autoSize' => true,
                    'showButtonPanel' => true,
                    'changeMonth' => true,
                )
            ),
            array(
                'id' => $prefix . 'gi_hosting_location',
                'name' => 'Hosting Responsibilty',
                'type' => 'taxonomy',
                'taxonomy' => 'hosting',
                'field_type' => 'select_advanced',
            ),
            array(
                'id' => $prefix . 'gi_3rd_hosting',
                'name' => 'If 3rd party, give info here',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'gi_main_web_mail',
                'name' => 'Confirm Main website e-mail',
                'type' => 'text',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<h4><strong>Project Information</strong> <cite class="tc-blue"> ~filled by SS Project Manager</cite></h4><hr class="cool">',
            ),
            array(
                'id' => $prefix . 'pj_req_live',
                'name' => 'Demo Site URL',
                'type' => 'url',
            ),
            array(
                'id' => $prefix . 'pj_last_qa',
                'name' => 'Last QA Date on Demo',
                'type' => 'date',
                'js_options' => array(
                    'autoSize' => true,
                    'showButtonPanel' => true,
                    'changeMonth' => true,
                )
            ),
            array(
                'id' => $prefix . 'pj_live_url',
                'name' => 'Live URL',
                'type' => 'url',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<h4><strong>Hosting Information</strong> <cite class="tc-blue"> ~filled by SS SysAdmin</cite></h4><hr class="cool">',
            ),
            array(
                'id' => $prefix . 'host_cpanel_url',
                'name' => 'Cpanel URL',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_cpanel_uname',
                'name' => 'Cpanel Username',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_cpanel_pwd',
                'name' => 'Cpanel Password',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_ftp_addr',
                'name' => 'FTP/SSH Host Address',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_ftp_uname',
                'name' => 'FTP/SSH Username',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_ftp_pwd',
                'name' => 'FTP/SSH Password',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_ip_addr',
                'name' => 'IP Address',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_email_hosting',
                'name' => 'Main Email - hosting',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_mandril',
                'name' => 'Mandrill/Mailchimp Email',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_mandril_pwd',
                'name' => 'Mandrill/Mailchimp Password',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'host_mx',
                'name' => 'MX Record/DNS',
                'type' => 'textarea',
                'desc' => 'new line for new value, Value separated with commas (ex: Name,TTL,Class,Type,Record)<br>softwareseni.or.id. , 14400,A,216.12.197.180',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<h4><strong>Database Information</strong> <cite class="tc-blue"> ~filled by SS SysAdmin</cite></h4><hr class="cool">',
            ),
            array(
                'id' => $prefix . 'db_uname',
                'name' => 'DB Username',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'db_pwd',
                'name' => 'DB Password',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'db_name',
                'name' => 'DB Name',
                'type' => 'text',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<h4><strong>Website Information</strong> <cite class="tc-blue"> ~filled by SS SysAdmin</cite></h4><hr class="cool">',
            ),
            array(
                'id' => $prefix . 'wp_uname',
                'name' => 'WP Username',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'wp_pwd',
                'name' => 'WP Password',
                'type' => 'text',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<h4><strong>SEO</strong> <cite class="tc-blue"> ~filled by Spotzer</cite></h4><hr class="cool">',
            ),
            array(
                'id' => $prefix . 'seo_meta_data',
                'name' => 'Meta Data',
                'type' => 'textarea',
            ),
            array(
                'id' => $prefix . 'seo_ganalytics',
                'name' => 'Google Analytics',
                'type' => 'textarea',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<h4><strong>Extra Documentation</strong> <cite class="tc-blue"> ~filled by Spotzer</cite></h4><hr class="cool">',
            ),
            array(
                'id' => $prefix . 'doc_qa_demo_test',
                'name' => 'QA Demo test document',
                'type' => 'url',
            ),
            array(
                'id' => $prefix . 'doc_qa_live_test',
                'name' => 'QA Live test document',
                'type' => 'url',
            ),
            array(
                'id' => $prefix . 'doc_launch_wf',
                'name' => 'Launching Workflow',
                'type' => 'url',
            ),
            array(
                'id' => $prefix . 'doc_seni_host',
                'name' => 'Seni Hosting Spec',
                'type' => 'url',
            ),
            array(
                'type' => 'custom_html',
                'std' => '<h4><strong>Time in Melbourne ( +4 hours )</strong> <cite class="tc-blue"> ~filled by SS SysAdmin & QA, Spotzer Tech.</cite></h4><hr class="cool">',
            ),
          array(
                'id' => $prefix . 'ts_copy_complete',
                'name' => 'Copy complete',
                'type' => 'datetime',
                'js_options' => array(
                    'stepMinute' => 15,
                    'showTimepicker' => true,
                ),
            ),
            array(
                'id' => $prefix . 'ts_conf_complete',
                'name' => 'Configuration completed',
                'type' => 'datetime',
                'js_options' => array(
                    'stepMinute' => 15,
                    'showTimepicker' => true,
                ),
            ),
            array(
                'id' => $prefix . 'ts_record_pointed',
                'name' => 'A Record Pointed',
                'type' => 'datetime',
                'js_options' => array(
                    'stepMinute' => 15,
                    'showTimepicker' => true,
                ),
            ),
            array(
                'id' => $prefix . 'ts_post_launch',
                'name' => 'Post launch QA completed',
                'type' => 'datetime',
                'js_options' => array(
                    'stepMinute' => 15,
                    'showTimepicker' => true,
                ),
            ),
            array(
                'id' => $prefix . 'ts_live_conf',
                'name' => 'Spotzer Live Confirmation',
                'type' => 'datetime',
                'js_options' => array(
                    'stepMinute' => 15,
                    'showTimepicker' => true,
                ),
            ),
        ),
    );






    /** Project Notes * */
    $meta_boxes[] = array(
        'title' => 'Notes',
        'post_types' => 'projects',
        'fields' => array(
            array(
                'id' => $prefix . 'n_ss_note',
                'name' => 'SoftwareSeni',
                'type' => 'textarea',
            ),
            array(
                'id' => $prefix . 'n_spotzer_note',
                'name' => 'Spotzer',
                'type' => 'textarea',
            ),
        ),
    );
	
    /** Project Status * */
    $meta_boxes[] = array(
        'title' => 'Project Status',
        'post_types' => 'projects',
        'fields' => array(
            array(
                'id' => $prefix . 'env_status',
                'name' => '',
                'type' => 'select_advanced',
                'options' => array(
                    'pending' => 'Pending',
                    'cancelled' => 'Cancelled',
                    'rtl' => 'Ready to Live',
                    'wip' => 'WIP',
                    'done' => 'done',
                    'setup' => 'Setup',
                    'ci' => 'CI',
                    'be' => 'In Backend Dev',
                    'last_qa' => 'Last QA Check Up',
                    'in_qa' => 'In QA',
                    'link' => 'Link',
                    'fe' => 'In Frontend Dev',
                    'closed' => 'Closed',
                    'in_spz' => 'In Progress Spotzer',
										'in_aw_spz' => 'Awaiting Spotzer(Live)',
                    'kick-off' => 'Kick Off',
                    'migration' => 'Migration',
										'a_record' => 'A Record',
										'live' => 'Live',
                ),
            ),
        ),
    );

    /** Project Details * */
    $meta_boxes[] = array(
        'title' => 'Project Details',
        'post_types' => 'projects',
        'fields' => array(
            array(
                'id' => $prefix . 'gi_pid',
                'name' => 'PID',
                'type' => 'text',
            ),
            array(
                'id' => $prefix . 'gi_customer',
                'name' => 'Customer',
                'type' => 'select_advanced',
                'options' => array(
                    'Yellow Pages' => 'Yellow Pages',
                    'YP UK' => 'YP UK',
                    'YP NZ' => 'YP NZ',
										'YP US' => 'YP US',
									  'ARM' => 'ARM',
                    'SoftwareSeni' => 'SoftwareSeni',
                ),
            ),
            array(
                'id' => $prefix . 'gi_cat_dev',
                'name' => 'Type',
                'type' => 'select_advanced',
                'options' => array(
                    'wp' => 'WordPress',
                    'joomla' => 'Joomla',
                    'new_pro' => 'New Production',
                    'pro_feedback' => 'In Production Feedback',
                    'maintenance' => 'Maintenance / Revision',
                    'jo2wp' => 'Joomla to Wordpress',
                ),
            ),
					 	array(
                'id' => $prefix . 'gi_priority',
                'name' => 'Priority',
                'type' => 'select_advanced',
                'options' => array(
                    'Low' => 'Low',
                    'Normal' => 'Normal',
                    'Medium' => 'Medium',
                    'High' => 'High',
                ),
            ),
        ),
    );

    
    return $meta_boxes;
}

/**
 * ============================================
 * --- ACF
 * ============================================
 **/

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5704698d713c1',
	'title' => 'Extra Work',
	'fields' => array (
		array (
			'key' => 'field_57046c23e792f',
			'label' => 'Extra Work',
			'name' => 'ew_container',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Extra Work',
			'sub_fields' => array (
				array (
					'key' => 'field_57046c52e7930',
					'label' => 'Category',
					'name' => 'ew_category',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => 'tab_cat',
						'id' => '',
					),
					'choices' => array (
						'N/A' => 'N/A',
						'Live Revision' => 'Live Revision',
						'Out of Scope' => 'Out of Scope',
						'In production Add-ons' => 'In production Add-ons',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_57046d81e7931',
					'label' => 'Work Details',
					'name' => 'ew_work_details',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_57046da9e7932',
					'label' => 'Ticket Link',
					'name' => 'ew_ticket_link',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_57046dbfe7933',
					'label' => 'Starting Date',
					'name' => 'ew_starting_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'd/m/Y',
					'return_format' => 'd/m/Y',
					'first_day' => 1,
				),
				array (
					'key' => 'field_57046de8e7934',
					'label' => 'Delivery Date',
					'name' => 'ew_delivery_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'd/m/Y',
					'return_format' => 'd/m/Y',
					'first_day' => 1,
				),
				array (
					'key' => 'field_57046e36e7935',
					'label' => 'Duration',
					'name' => 'ew_duration',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_57046e49e7936',
					'label' => 'Invoice Month',
					'name' => 'ew_invoice_month',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'January' => 'January',
						'February' => 'February',
						'March' => 'March',
						'April' => 'April',
						'May' => 'May',
						'June' => 'June',
						'July' => 'July',
						'August' => 'August',
						'September' => 'September',
						'October' => 'October',
						'November' => 'November',
						'December' => 'December',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_57046f4ae7938',
					'label' => 'Billed',
					'name' => 'ew_billed',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'N/A' => 'N/A',
						'Yes' => 'Yes',
						'No' => 'No',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'projects',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;