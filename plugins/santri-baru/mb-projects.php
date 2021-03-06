<?php

/**
 * ============================================
 * --- Metabox Form
 * ============================================
 * */

// Acf Generated

if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array (
	'key' => 'group_57268de6a758a',
	'title' => 'File Manager',
	'fields' => array (
		array (
			'key' => 'field_57268e0a6141a',
			'label' => 'Foto Santri',
			'name' => 'foto_santri',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_57268e876141c',
			'label' => 'Data Pendukung',
			'name' => 'data_pendukung',
			'type' => 'file',
			'instructions' => 'Seperti Berkas KTP, Kartu Keluarga atau lainnya',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'santri_baru',
			),
		),
		array (
			array (
				'param' => 'user_role',
				'operator' => '==',
				'value' => 'all',
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
acf_add_local_field_group(array (
	'key' => 'group_5725d1c11a1f3',
	'title' => 'Form Santri Baru',
	'fields' => array (
		array (
			'key' => 'field_5726101b9c5f2',
			'label' => 'Data Santri',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_574ekokdd78e',
			'label' => 'Tanggal Daftar',
			'name' => 'tgl_daftar',
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
		),		array (
			'key' => 'field_574ed579af78e',
			'label' => 'No Induk',
			'name' => 'no_induk_auto',
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
			'readonly' => 1,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57266d664d580',
			'label' => 'Tahun Masuk',
			'name' => 'tahun_masuk',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'angkatan',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'multiple' => 0,
		),
		array (
			'key' => 'field_572612efafa67',
			'label' => 'Nama Panggilan',
			'name' => 'nama_panggilan',
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
			'key' => 'field_57261341afa68',
			'label' => 'Jenis Kelamin',
			'name' => 'kelamin',
			'type' => 'radio',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'laki-laki' => 'Laki-laki',
				'perempuan' => 'Perempuan',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
		),
		array (
			'key' => 'field_572619ca9e8b1',
			'label' => 'Tempat Lahir',
			'name' => 'tempat_lahir',
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
			'key' => 'field_57261a3a9b56d',
			'label' => 'Tanggal Lahir',
			'name' => 'tanggal_lahir',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'j F Y',
			'return_format' => 'd/m/Y',
			'first_day' => 1,
		),
		array (
			'key' => 'field_57266e1e4b193',
			'label' => 'Kontak Santri',
			'name' => 'kontak_santri',
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
			'placeholder' => 'No Handphone Wali Santri Penanggung Jawab',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57261b029b56e',
			'label' => 'Alamat Lengkap',
			'name' => 'alamat_lengkap',
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
			'placeholder' => 'Dapat berisi nama jalan, nomer rumah. atau alamat lengkap berikut dengan kode pos.',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57263b4203962',
			'label' => 'Warga Negara',
			'name' => 'warga_negara',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Indonesia',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572639a981f64',
			'label' => 'Provinsi',
			'name' => 'provinsi',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'provinsi',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'multiple' => 0,
		),
		array (
			'key' => 'field_572621753fa39',
			'label' => 'Kota/Kabupaten',
			'name' => 'kota_kabupaten',
			'type' => 'taxonomy',
			'instructions' => 'Tambahkan Kota dahulu jika belum ada.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'kota',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'multiple' => 0,
		),
		array (
			'key' => 'field_57263297b9a62',
			'label' => 'Kecamatan/Distrik',
			'name' => 'kecamatandistrik',
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
			'key' => 'field_5726348e0f97c',
			'label' => 'RT dan RW',
			'name' => 'rt_rw',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'RT: 000 / RW: 000',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'Ubah 000 dengan data RT dan RW',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57264268ece38',
			'label' => 'Catatan Khusus',
			'name' => 'catatan_khusus',
			'type' => 'textarea',
			'instructions' => 'Riwayat Sakit, Obat-obatan, atau permasalahan lainnya.',
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
			'rows' => 2,
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5726652d3775f',
			'label' => 'Anak ke',
			'name' => 'anak_ke',
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
				1 => 1,
				2 => 2,
				3 => 3,
				4 => 4,
				5 => 5,
				6 => 6,
				7 => 7,
				8 => 8,
				9 => 9,
				10 => 10,
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
			'key' => 'field_5726662137760',
			'label' => 'Dari',
			'name' => 'jumlah_sodara',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'Bersaudara',
			'min' => '',
			'max' => '',
			'step' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_572610af589e9',
			'label' => 'Keluarga',
			'name' => 'data_keluarga',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_57270ad6a7a51',
			'label' => 'Perhatian',
			'name' => 'perhatian',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Data alamat dapat diisi Jika orang tua bercerai atau alasan lainnya sehingga santri yang bersangkutan tidak tinggal dengan orang tua kandung.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array (
			'key' => 'field_572708e8b3bc8',
			'label' => 'Nama Ayah',
			'name' => 'nama_ayah',
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
			'key' => 'field_57270913b3bc9',
			'label' => 'Pekerjaan Ayah',
			'name' => 'pekerjaan_ayah',
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
			'key' => 'field_57270929b3bca',
			'label' => 'Nomer Telpon',
			'name' => 'nomer_telpon_ayah',
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
			'key' => 'field_57270a963a817',
			'label' => 'Alamat Lengkap Ayah',
			'name' => 'alamat_lengkap_ayah',
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
			'rows' => 3,
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5727093fb3bcb',
			'label' => 'Nama Ibu',
			'name' => 'nama_ibu',
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
			'key' => 'field_57270957b3bcc',
			'label' => 'Pekerjaan Ibu',
			'name' => 'pekerjaan_ibu',
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
			'key' => 'field_57270967b3bcd',
			'label' => 'Nomer Telpon',
			'name' => 'nomer_telpon_ibu',
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
			'key' => 'field_57270999b3bce',
			'label' => 'Alamat Lengkap',
			'name' => 'alamat_lengkap_ibu',
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
			'rows' => 3,
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57263bc43c5d7',
			'label' => 'Mahram',
			'name' => 'mahram',
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
			'layout' => 'row',
			'button_label' => 'Tambah Data',
			'sub_fields' => array (
				array (
					'key' => 'field_57263beb3c5d8',
					'label' => 'Nama Lengkap',
					'name' => 'nama',
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
					'placeholder' => 'Sesuai KTP',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_57263c9f3c5da',
					'label' => 'Hubungan',
					'name' => 'hubungan',
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
						'Ayah Kandung' => 'Ayah Kandung',
						'Ibu Kandung' => 'Ibu Kandung',
						'Ayah Angkat/Tiri' => 'Ayah Angkat/Tiri',
						'Ibu Angkat/Tiri' => 'Ibu Angkat/Tiri',
						'Saudara' => 'Saudara',
						'Sepupu' => 'Sepupu',
						'Paman/Bibi' => 'Paman/Bibi',
						'Kakek/Nenek' => 'Kakek/Nenek',
						'Tetangga' => 'Tetangga',
						'Ipar' => 'Ipar',
						'Lainnya' => 'Lainnya',
					),
					'default_value' => array (
						0 => 'Ayah Kandung',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 1,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_57263dc16e4a7',
					'label' => 'Pekerjaan',
					'name' => 'pekerjaan',
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
					'key' => 'field_57263e536e4a9',
					'label' => 'Pendidikan Terakhir',
					'name' => 'pendidikan_terakhir',
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
					'key' => 'field_57263dee6e4a8',
					'label' => 'Nomer Telpon',
					'name' => 'nomer_telpon',
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
					'key' => 'field_572641dce79b9',
					'label' => 'Alamat Lengkap',
					'name' => 'alamat_lengkap',
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
					'rows' => 2,
					'new_lines' => 'wpautop',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
		array (
			'key' => 'field_572610e4589ea',
			'label' => 'Pendidikan',
			'name' => 'pendidikan',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_572667df4188e',
			'label' => 'Apakah Pernah Mondok',
			'name' => 'pernah_mondok',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'YA' => 'YA',
				'TIDAK' => 'TIDAK',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'TIDAK',
			'layout' => 'horizontal',
		),
		array (
			'key' => 'field_572668b04188f',
			'label' => 'Pesantren Asal',
			'name' => 'pesantren_asal',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_572667df4188e',
						'operator' => '==',
						'value' => 'YA',
					),
				),
			),
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
			'key' => 'field_572669d141890',
			'label' => 'Sekolah Sebelumnya',
			'name' => 'sekolah_sebelumnya',
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
			'key' => 'field_572669f741891',
			'label' => 'Masuk Lembaga',
			'name' => 'masuk_lembaga',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'lembaga',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'multiple' => 0,
		),
				array (
					'key' => 'field_57263pskkaa7',
					'label' => 'Di terima di kelas',
					'name' => 'scl_kelas_masuk',
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
					'placeholder' => 'Kosongkan jika bukan mutasi',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
						array (
			'key' => 'field_57266b0dc37a0',
			'label' => 'Pondok',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_57266ba54217f',
			'label' => 'Pondok / Daerah',
			'name' => 'pondok_daerah',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'pondok',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'multiple' => 0,
		),
				array (
					'key' => 'field_572pondoka7',
					'label' => 'Nomer Kamar',
					'name' => 'nomer_kamar',
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
			'key' => 'field_579921753fa99',
			'label' => 'Status',
			'name' => 'status',
			'type' => 'taxonomy',
			'instructions' => 'Tambah Status dahulu jika belum ada',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'status',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'multiple' => 0,
		),
		array (
			'key' => 'field_57270be8af548',
			'label' => 'Catatan dari Pengurus',
			'name' => 'catatan_dari_pengurus',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'full',
			'media_upload' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'santri_baru',
			),
		),
		array (
			array (
				'param' => 'user_role',
				'operator' => '==',
				'value' => 'all',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'discussion',
		2 => 'comments',
		3 => 'slug',
		4 => 'page_attributes',
		5 => 'featured_image',
		6 => 'categories',
		7 => 'tags',
		8 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;