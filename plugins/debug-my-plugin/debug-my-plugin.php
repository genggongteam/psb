<?php
/*
Plugin Name: Debug My Plugin
Plugin URI: http://www.charlestonsw.com/product/debug-my-plugin/
Description: Debug your plugin with the help of Debug Bar.  Puts debugging messages in the drop down Debug Bar interface.
Version: 1.0.0
Author: Charleston Software Associates
Author URI: http://www.charlestonsw.com
License: GPL3

Text Domain: csa-dmp
Domain Path: /languages/

Copyright 2014  Charleston Software Associates (info@charlestonsw.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

// Direct access?  Get out.
if ( ! defined( 'ABSPATH' ) ) exit;

// No Debug Bar? Get out...
//
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( !function_exists('is_plugin_active') ||  !is_plugin_active( 'debug-bar/debug-bar.php')) {
    return;
}

/**
 * Debug My Plugin
 *
 * Requires the Debug Bar plugin and assumes it is active (it is checked above).
 *
 * @package DebugMyPlugin
 * @author Lance Cleveland <lance@charlestonsw.com>
 * @copyright 2013 - 2014 Charleston Software Associates, LLC
 */
class DebugMyPlugin {

    //------------------------------------------------------
    // Properties
    //------------------------------------------------------

    /**
     * A global execution counter.
     * 
     * @var int $counter
     */
    static $counter = null;

    /**
     * The panels we are managing.
     *
     * @var mixed[] $panels
     */
    public $panels;


    //-------------------------------------
    // Properties
    //-------------------------------------


    /**
     * The directory we live in.
     *
     * @var string $dir
     */
    private $dir;

    /**
     * The plugin settings page hook.
     *
     * @var string $menuHook
     */
    private $menuHook;

    /**
     * Our plugin options.
     *
     * @var string[]
     */
    private $options = array(
        'init_with_request'     => '0' ,
        'init_with_server'      => '0' ,
        'use_counter'           => '0' ,
    );

    /**
     * Option meta data stdClass objects.
     *
     * @var \stdClass[] $optionMeta
     */
    private $optionMeta;

    /**
     * Our slug.
     *
     * @var string $slug
     */
    private $slug                   = null;

    /**
     * The admin style handle.
     *
     * @var string $styleHandle
     */
    private $styleHandle            = 'dmpAdminCSS';

    /**
     * The url to this plugin admin features.
     *
     * @var string $url
     */
    private $url;

    //------------------------------------------------------
    // METHODS
    //------------------------------------------------------

    /**
     * Invoke the Debug My Plugin plugin.
     *
     * @static
     */
    public static function init() {
        static $instance = false;
        if ( !$instance ) {
            load_plugin_textdomain( 'csa-dmp', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
            $instance = new DebugMyPlugin;
        }
        $GLOBALS['DebugMyPlugin'] = $instance;
        return $instance;
    }

    /**
     * Constructor
     */
    function DebugMyPlugin() {
        // Set properties for this plugin.
        //
        $this->url  = plugins_url('',__FILE__);
        $this->dir  = plugin_dir_path(__FILE__);
        $this->slug = plugin_basename(__FILE__);

        // Initialize the options meta data
        //
        $this->initOptions();

        // WordPress Admin Menu Augmentation
        //
        add_action('admin_menu'       ,array($this,'init_for_AdminUI'));

        // Add our panels
        //
        add_filter( 'debug_bar_panels', array($this,'addMyPanel'));
    }

    /**
     * Stuff we want available when in the Admin UI.
     *
     * @return null
     */
    function init_for_AdminUI() {

        // Plugin Menu Hook
        //
        $this->menuHook = add_management_page('DebugMP','DebugMP','install_plugins','debugmp',array($this,'render_SettingsPage'));

        // Admin CSS
        // attach to the settings page.
        //
        if (file_exists($this->dir.'/admin.css')) {
            wp_register_style($this->styleHandle, $this->url .'/admin.css');
        }
        add_action('admin_enqueue_scripts',array($this,'enqueue_admin_stylesheet'));

        // Admin Init
        //
        add_action('admin_init',array($this,'register_Settings'));
    }

    /**
     * Setup the options meta data.
     */
    function initOptions() {
        $this->optionMeta['init_with_request'] =
            $this->create_OptionMeta(
                    'init_with_request',
                    __('Show REQUEST','csa-dmp'),
                    __('Show REQUEST dump on start of main Debug My Plugin Panel.', 'csa-dmp'),
                    'slider'
                    );
        $this->optionMeta['init_with_server'] =
            $this->create_OptionMeta(
                    'init_with_server',
                    __('Show SERVER','csa-dmp'),
                    __('Show SERVER dump on start of main Debug My Plugin Panel.', 'csa-dmp'),
                    'slider'
                    );
        $this->optionMeta['use_counter'] =
            $this->create_OptionMeta(
                    'use_counter',
                    __('Use Counter','csa-dmp'),
                    __('Display an auto-incrementing static counter before message headers.', 'csa-dmp'),
                    'slider'
                    );
    }

    /**
     * Start the main panel with a $_REQUEST dump.
     *
     * @param \DebugMyPluginPanel $panelObj
     */
    function action_StartWithRequestVars($panelObj) {
        $panelObj->addPR('$_REQUEST',$_REQUEST,null,null,true);
    }

    /**
     * Start the main panel with a $_SERVER dump.
     *
     * @param \DebugMyPluginPanel $panelObj
     */
    function action_StartWithServerVars($panelObj) {
        $panelObj->addPR('$_SERVER',$_SERVER,null,null,true);
    }

    /**
     * Add a new panel to the Debug Bar UI.
     *
     * @param object[] $panels
     * @return \DebugMyPluginPanel
     */
    function addMyPanel($panels) {

        require_once 'class.debugmyplugin_panel.php';
        $this->load_Options();

        // Add the $_REQUEST dump if desired.
        //
        if ($this->options['init_with_request'] == 1) { 
            add_action('dmp_panelinit_DebugMyPluginPanel', array($this,'action_StartWithRequestVars'));
        }

        // Add the $_SERVER dump if desired.
        //
        if ($this->options['init_with_server'] == 1) {
            add_action('dmp_panelinit_DebugMyPluginPanel', array($this,'action_StartWithServerVars'));
        }
        
        // Setup your main panel
        //
        $this->panels['main'] = new DebugMyPluginPanel();
        do_action('dmp_addpanel');

        // Attach each of the panels to the Debug Bar
        //
        foreach ($this->panels as $slug=>$panelObj) {
            $panels[] = $panelObj;
        }
        
        return $panels;
    }


    /**
     * Create a new option meta object.
     *
     * $type can be
     *    'text'   - simple text input
     *    'slider' - checkbox rendered as a slider
     *
     * @param string $slug
     * @param string $label
     * @param string $desc
     * @param string $type
     * @param int    $order
     * @return \stdClass
     */
    function create_OptionMeta($slug,$label,$desc,$type='text',$order=10) {
        $optionMeta = new stdClass();
        $optionMeta->slug           = $slug;
        $optionMeta->label          = $label;
        $optionMeta->description    = $desc;
        $optionMeta->type           = $type;
        $optionMeta->order          = $order;
        return $optionMeta;
    }

    /**
     * Enqueue the admin stylesheet when needed.
     *
     * Currently only on the plugin-install.php pages.
     *
     * @var string $hook
     */
    function enqueue_admin_stylesheet($hook) {
        switch ($hook) {
            case 'tools_page_debugmp':
                wp_enqueue_style($this->styleHandle);
                break;

            default:
                break;
        }
    }

    /**
     * Render the settings page.
     */
    function render_SettingsPage() {
        print
            '<div class="wrap">' .
                screen_icon() .
                '<h2>Debug My Plugin '.__('Settings','csa-dmp').'</h2>'.
                '<form method="post" action="options.php">'
                ;
        settings_fields('dmp_options');
        do_settings_sections('dmp');
        submit_button();
        print
                '</form>'.
            '</div>'
            ;
    }


    /**
     * Render the main settings panel inputs.
     */
    function render_MainSettings() {
        print '<p>'.
              __('Use these settings to set behavior of the default Debug My Plugin panel.','csa-dmp').
             '</p>';
    }

    /**
     * Figure out which type of input to render.
     *
     * @param mixed[] $args
     */
    function render_Input($args) {
        switch ($args['type']) {
            case 'text':
                $this->render_TextInput($args);
                break;
            case 'slider':
                $this->render_SliderInput($args);
                break;
            default:
                break;
        }
    }

    /**
     * Render the slider input.
     *
     * @param mixed[] $args
     */
    function render_SliderInput($args) {
        $checked = (($this->options[$args['id']]==1)?'checked':'');
        $onClick = 'onClick="'.
            "jQuery('input[id={$args['id']}]').prop('checked',".
                "!jQuery('input[id={$args['id']}]').prop('checked')" .
                ");".
            '" ';

        echo
            "<input type='checkbox' id='{$args['id']}' name='dmp_options[{$args['id']}]' value='1' style='display:none;' $checked>" .
            "<div id='{$args['id']}_div' class='onoffswitch-block'>" .
            "<div class='onoffswitch'>" .
            "<input type='checkbox' name='onoffswitch' class='onoffswitch-checkbox' value='1' id='{$args['id']}-checkbox' $checked>" .
            "<label class='onoffswitch-label' for='{$args['id']}-checkbox'  $onClick>" .
            '<div class="onoffswitch-inner"></div>'.
            "<div class='onoffswitch-switch'></div>".
            '</label>'.
            '</div>' .
            '</div>'
            ;

        if (!empty($args['description'])) {
            print "<p class='description'>{$args['description']}</p>";
        }
    }

    /**
     * Load options from DB, initializes the options property.
     *
     * Load options from WPDB, default values to the array at the top of this class.
     *
     * loading the options this way (2 steps with array_merge) ensures that the serialized data
     * from the database does not obliterate defaults when new options are added.  Those new options
     * would be blank in the database.   Using get_option('plugintel_options',$this->options) does
     * not have the desired effect with serialized data as it is loaded as a single blob, thus the
     * original parameter will have data and the second parameter is ignored.
     *
     */
    function load_Options() {
        $optionsFromDB = get_option('dmp_options');
        if (!is_array($optionsFromDB)) { $optionsFromDB = array(); }
        $this->options = array_merge($this->options,$optionsFromDB);
        if ($this->options['use_counter']) { DebugMyPlugin::$counter = 0; }
    }

    /**
     * Register the settings.
     *
     */
    function register_Settings() {
        $this->load_Options();
        register_setting('dmp_options','dmp_options',array($this,'validate_Options'));

        // Main Settings Section
        //
        add_settings_section('dmp_main',__('Settings','csa-dmp'),array($this,'render_MainSettings') ,'dmp'        );

        // Show all options from the option meta array.
        //
        foreach ($this->optionMeta as $option) {
            add_settings_field($option->slug ,
                    $option->label,
                    array($this,'render_Input')    ,'dmp', 'dmp_main',
                    array(
                        'id'            => $option->slug,
                        'description'   => $option->description,
                        'type'          => $option->type,
                        )
                    );
        }
    }

    /**
     * Validate the options we get.
     *
     * @param mixed[] $option
     */
    function validate_Options($optionsRcvd) {
        if (!is_array($optionsRcvd)) { return; }

        $validOptions = array();
        foreach ($optionsRcvd as $optionName=>$optionValue) {

            // Option exists in our properties array, let it in.
            //
            if (isset($this->options[$optionName])) {
                $validOptions[$optionName]=$optionValue;
            }
        }

        // Check for empty checkboxes
        //
        foreach ($this->optionMeta as $option) {
            if (isset($validOptions[$option->slug])) { continue; }
            if (($option->type == 'checkbox') || ($option->type == 'slider')) {
                $validOptions[$option->slug] = '0';
            }
        }

        return $validOptions;
    }
}


// Super ugly... would prefer to do this with a custom Debug Bar action.
//
add_action('init',array('DebugMyPlugin','init'));

// Dad. Husband. Rum Lover. Code Geek. Not necessarily in that order.