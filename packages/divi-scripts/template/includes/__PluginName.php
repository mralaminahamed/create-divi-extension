<?php


class __PREFIX___PluginName extends DiviExtension {

	/**
	 * The gettext domain for the extension's translations.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $gettext_domain = '<GETTEXT_DOMAIN>';

	/**
	 * The extension's WP Plugin name.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $name = '__plugin_name';

	/**
	 * __PREFIX___PluginName constructor.
	 *
	 * @param string $name
	 * @param array  $args
	 */
	public function __construct( $name = '__plugin_name', $args = array() ) {
		$this->plugin_dir = dirname( plugin_dir_path( __FILE__ ) );

		parent::__construct( $name, $args );
	}
}

new __PREFIX___PluginName;
