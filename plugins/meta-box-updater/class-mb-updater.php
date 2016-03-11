<?php

/**
 * The updater class for Meta Box extensions
 *
 * @package    Meta Box
 * @subpackage Meta Box Updater
 *
 * @since      0.1.0
 * @author     Tran Ngoc Tuan Anh <rilwis@gmail.com>
 */
class MB_Updater
{
	/**
	 * API URL for checking update information
	 * @var string
	 */
	public static $api_url = 'https://metabox.io/index.php';

	/**
	 * Constructor
	 *
	 * @return MB_Updater
	 */
	public function __construct()
	{
		add_action( 'admin_init', array( $this, 'init' ) );
	}

	/**
	 * Add hook for checking updates
	 *
	 * @return MB_Updater
	 */
	public function init()
	{
		if ( ! current_user_can( 'update_core' ) )
			return;

		add_filter( 'pre_set_site_transient_update_plugins', array( $this, 'check_updates' ) );
		add_filter( 'plugins_api', array( $this, 'get_info' ), 10, 3 );
	}

	/**
	 * Check plugin for updates
	 *
	 * @param $data
	 *
	 * @return mixed
	 */
	public function check_updates( $data )
	{
		if ( empty( $data->checked ) )
			return $data;

		$updates = $this->request( 'action=check_updates' );
		$plugins = array();

		foreach ( $updates as $update )
		{
			if ( isset( $data->checked[$update->plugin] ) && version_compare( $data->checked[$update->plugin], $update->new_version, '<' ) )
			{
				$data->response[$update->plugin] = $update;

				$plugins[] = $update->slug;
			}
		}

		$option            = get_option( 'meta_box_updater', array() );
		$option['plugins'] = $plugins;
		update_option( 'meta_box_updater', $option );

		return $data;
	}

	/**
	 * Get plugin information
	 *
	 * @param bool   $false
	 * @param string $action
	 * @param object $args
	 *
	 * @return mixed
	 */
	public function get_info( $false, $action, $args )
	{
		$option  = get_option( 'meta_box_updater', array() );
		$plugins = isset( $option['plugins'] ) ? $option['plugins'] : array();
		if ( ! isset( $args->slug ) || ! in_array( $args->slug, $plugins ) )
			return $false;

		$info = $this->request( array(
			'action'  => 'get_info',
			'product' => $args->slug,
		) );

		return $info;
	}

	/**
	 * Send request to remote host
	 *
	 * @param array|string $args Query arguments
	 *
	 * @return bool|mixed
	 */
	public static function request( $args = '' )
	{
		// Add email and API key to the request params
		$option = get_option( 'meta_box_updater', array() );
		$args   = wp_parse_args( $args, $option );
		$args   = array_filter( $args );

		$request = wp_remote_post( self::$api_url, array(
			'body' => $args,
		) );

		if ( $response = wp_remote_retrieve_body( $request ) )
		{
			$data = @unserialize( $response );
			return $data;
		}

		return false;
	}
}
