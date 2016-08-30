<?php
/**
 * Example Code: Settings Page - Broken Implementation v2.
 *
 * This code is part of the article "Using A Config To Write Reusable Code"
 * as published on https://www.alainschlesser.com/.
 *
 * @see       https://www.alainschlesser.com/config-files-for-reusable-code/
 *
 * @package   AlainSchlesser\BrokenSettings2
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      https://www.alainschlesser.com/
 * @copyright 2016 Alain Schlesser
 */

namespace AlainSchlesser\BrokenSettings2;

/**
 * Class SettingsPage.
 *
 * This class registers a settings page via the WordPress Settings API.
 *
 * @package AlainSchlesser\BrokenSettings2
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class SettingsPage {

	/**
	 * Register the settings page hooks with WordPress.
	 */
	public function register() {
		add_action( 'admin_menu', [ $this, 'add_admin_menu' ] );
		add_action( 'admin_init', [ $this, 'settings_init' ] );
	}

	/**
	 * Add a subpage to the Options menu.
	 */
	public function add_admin_menu() {
		add_options_page(
			'as-settings-broken-v2',
			'as-settings-broken-v2',
			'manage_options',
			'as-settings-broken-v2',
			[ $this, 'options_page' ] );
	}

	/**
	 * Initialize the settings data.
	 */
	public function settings_init() {
		register_setting( 'pluginPage', 'assb1_settings' );

		add_settings_section(
			'assb1_pluginPage_section',
			__( 'Useless Name Settings', 'as-settings-broken-v2' ),
			[ $this, 'settings_section_callback' ],
			'pluginPage'
		);

		add_settings_field(
			'assb1_text_field_first_name',
			__( 'First Name', 'as-settings-broken-v2' ),
			[ $this, 'text_field_first_name_render' ],
			'pluginPage',
			'assb1_pluginPage_section'
		);

		add_settings_field(
			'assb1_text_field_last_name',
			__( 'Last Name', 'as-settings-broken-v2' ),
			[ $this, 'text_field_last_name_render' ],
			'pluginPage',
			'assb1_pluginPage_section'
		);
	}

	/**
	 * Render the text field accepting the first name.
	 */
	public function text_field_first_name_render() {
		$options = get_option( 'assb1_settings' );
		$view    = new View( AS_BROKEN_SETTINGS_2_DIR . 'views/first-name-field.php' );
		echo $view->render( [ 'options' => $options ] );
	}

	/**
	 * Render the text field accepting the last name.
	 */
	public function text_field_last_name_render() {
		$options = get_option( 'assb1_settings' );
		$view    = new View( AS_BROKEN_SETTINGS_2_DIR . 'views/last-name-field.php' );
		echo $view->render( [ 'options' => $options ] );
	}

	/**
	 * Render callback for the section description.
	 */
	public function settings_section_callback() {
		$view = new View( AS_BROKEN_SETTINGS_2_DIR . 'views/section-description.php' );
		echo $view->render();
	}

	/**
	 * Render callback for the Options menu subpage.
	 */
	public function options_page() {
		$elements = [];

		ob_start();
		settings_fields( 'pluginPage' );
		$elements['fields'] = ob_get_clean();

		ob_start();
		do_settings_sections( 'pluginPage' );
		$elements['sections'] = ob_get_clean();

		ob_start();
		submit_button();
		$elements['submit'] = ob_get_clean();

		$view = new View( AS_BROKEN_SETTINGS_2_DIR . 'views/options-page.php' );
		echo $view->render( [ 'elements' => $elements ] );
	}
}
