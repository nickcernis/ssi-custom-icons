<?php
/**
 * Custom icons you would like to add.
 *
 * Each icon array must have these values:
 *
 * label:        The label for front end HTML. Used by screen readers and search engines.
 * widget_label: The label that appears above the admin widget field.
 * short_name:   Used in icon attributes.
 * path:         The path to your icon file. # denotes the ID.
 * default:      The default text in the widget field. Usually blank.
 *
 * @package SSICustom
 */

return [
	[
		'label'        => __( 'Spotify', 'ssi-custom-icons' ),
		'widget_label' => __( 'Spotify URI', 'ssi-custom-icons' ),
		'short_name'   => 'spotify',
		'path'         => esc_url( plugin_dir_url( __FILE__ ) . 'icons/custom.svg#social-spotify' ),
		'default'      => '',
	],
	[
		'label'        => __( 'Etsy', 'ssi-custom-icons' ),
		'widget_label' => __( 'Etsy URI', 'ssi-custom-icons' ),
		'short_name'   => 'etsy',
		'path'         => esc_url( plugin_dir_url( __FILE__ ) . 'icons/custom.svg#social-etsy' ),
		'default'      => '',
	],
	[
		'label'        => __( 'Codepen', 'ssi-custom-icons' ),
		'widget_label' => __( 'Codepen URI', 'ssi-custom-icons' ),
		'short_name'   => 'codepen',
		'path'         => esc_url( plugin_dir_url( __FILE__ ) . 'icons/custom.svg#social-codepen' ),
		'default'      => '',
	],
	[
		'label'        => __( 'Goodreads', 'ssi-custom-icons' ),
		'widget_label' => __( 'Goodreads URI', 'ssi-custom-icons' ),
		'short_name'   => 'goodreads',
		'path'         => esc_url( plugin_dir_url( __FILE__ ) . 'icons/custom.svg#social-goodreads' ),
		'default'      => '',
	],
];
