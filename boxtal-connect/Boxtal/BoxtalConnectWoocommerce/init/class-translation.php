<?php
/**
 * Contains code for the translation class.
 *
 * @package     Boxtal\BoxtalConnectWoocommerce\Init
 */

namespace Boxtal\BoxtalConnectWoocommerce\Init;

/**
 * Translation class.
 *
 * Inits translation for WP < 4.6.
 */
class Translation {

	/**
	 * Plugin path.
	 *
	 * @var string
	 */
	private $path;

	/**
	 * Construct function.
	 *
	 * @param array $plugin plugin array.
	 * @void
	 */
	public function __construct( $plugin ) {
		$this->path = $plugin['path'];
	}

	/**
	 * Run class.
	 *
	 * @void
	 */
	public function run() {
		add_action( 'init', array( $this, 'load_textdomain' ) );
	}

	/**
	 * Loads plugin textdomain.
	 *
	 * @void
	 */
	public function load_textdomain() {
		$translation_folder_path = plugin_basename( $this['path'] . DIRECTORY_SEPARATOR . 'Boxtal' . DIRECTORY_SEPARATOR . 'BoxtalConnectWoocommerce' . DIRECTORY_SEPARATOR . 'translation' );
		load_plugin_textdomain( 'boxtal-connect', false, $translation_folder_path );
	}
}
