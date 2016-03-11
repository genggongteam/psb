<?php
/**
 * Meta Box Updater Settings
 *
 * This class handles plugin settings, including adding settings page, show fields, save settings
 *
 * @package    Meta Box
 * @subpackage Meta Box Updater
 *
 * @since      0.1.0
 * @author     Tran Ngoc Tuan Anh <rilwis@gmail.com>
 */

/**
 * Meta Box Updater Settings class
 *
 * @package    Meta Box
 * @subpackage Meta Box Updater
 *
 * @since      0.1.0
 * @author     Tran Ngoc Tuan Anh <rilwis@gmail.com>
 */
class MB_Updater_Settings
{
	/**
	 * Store settings page hook
	 * @var string
	 */
	public $hook;

	/**
	 * Constructor
	 * Add hooks
	 */
	public function __construct()
	{
		// Register plugin setting
		add_action( 'admin_init', array( $this, 'register_setting' ) );

		// Add plugin menu
		add_action( 'admin_menu', array( $this, 'add_plugin_menu' ) );
	}

	/**
	 * Register plugin setting, settings section and fields using Settings API
	 *
	 * @return void
	 */
	public function register_setting()
	{
		register_setting( 'meta_box_updater', 'meta_box_updater', array( $this, 'sanitize' ) );

		add_settings_section( 'default', '', array( $this, 'section_description' ), 'meta-box-updater' );
		add_settings_field(
			'api_key',
			__( 'API Key', 'meta-box-updater' ),
			array( $this, 'api_field' ),
			'meta-box-updater',
			'default',
			'api_key'
		);
	}

	/**
	 * Add plugin menu under Settings WordPress menu
	 *
	 * @return void
	 */
	public function add_plugin_menu()
	{
		$this->hook = add_options_page( __( 'Meta Box Updater', 'meta-box-updater' ), __( 'Meta Box Updater', 'meta-box-updater' ), 'manage_options', 'meta-box-updater', array( $this, 'show_page' ) );
	}

	/**
	 * Show content of settings page
	 * Content is added via Settings API
	 *
	 * @return void
	 */
	public function show_page()
	{
		?>
		<div class="wrap">
			<h2><?php _e( 'Meta Box Updater' ); ?></h2>

			<form action="options.php" method="post">

				<?php settings_fields( 'meta_box_updater' ); ?>

				<?php do_settings_sections( 'meta-box-updater' ); ?>

				<?php submit_button( __( 'Save Changes', 'meta-box-updater' ) ); ?>

			</form>
		</div>
		<?php
	}

	/**
	 * Display section description
	 *
	 * @return void
	 */
	public function section_description()
	{
		echo '<p>' . __( 'Please enter your API key to receives updates for Meta Box extensions.', 'meta-box-updater' ) . '</p>';
		echo '<p>' . sprintf( __( 'To get API key, please visit your profile page at <a href="%s" target="_blank">support forum</a>.', 'meta-box-updater' ), 'https://metabox.io/support/' ) . '</p>';
	}

	/**
	 * Show text field
	 *
	 * @param string $id Field ID, used as option name
	 *
	 * @return void
	 */
	public function api_field( $id )
	{
		$option = get_option( 'meta_box_updater' );
		$value  = isset( $option[$id] ) ? $option[$id] : '';

		echo '<input type="password" required class="regular-text" name="meta_box_updater[' . $id . ']" value="' . esc_attr( $value ) . '">';
	}

	/**
	 * Verify user license when saving plugin options
	 *
	 * @param array $option Plugin optio
	 *
	 * @return array
	 */
	public function sanitize( $option )
	{
		if ( $message = MB_Updater::request( 'action=check_license' ) )
		{
			add_settings_error( 'meta-box-updater', 'invalid', $message );
		}

		return $option;
	}
}
