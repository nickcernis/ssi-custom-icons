<?php
/**
 * Plugin Name: Simple Social Icons Custom
 * Description: Adds custom icons to Simple Social Icons.
 * Version:     0.1.0
 * Plugin URI:  https://github.com/nickcernis/ssi-custom-icons/
 * Author:      Nick Cernis
 * Author URI:  https://github.com/nickcernis/
 * Text Domain: ssi-custom-icons
 * License:     GPLv3
 *
 * @package SSICustom
 */

namespace SSICustom;

defined( 'ABSPATH' ) || die();

add_filter( 'simple_social_default_profiles', __NAMESPACE__ . '\add_new_icons' );
/**
 * Add new social icons.
 *
 * @param array $icons The existing array of icons.
 * @return array
 */
function add_new_icons( $icons ) {
	$new_icons = include 'config.php';

	foreach ( $new_icons as $icon ) {
		$icons[ $icon['short_name'] ] = [
			'label'   => $icon['widget_label'],
			'pattern' => '<li class="social-' . $icon['short_name'] . '"><a href="%s" %s><svg role="img" class="social-' . $icon['short_name'] . '-svg" aria-labelledby="social-' . $icon['short_name'] . '"><title id="social-' . $icon['short_name'] . '">' . $icon['label'] . '</title><use xlink:href="' . $icon['path'] . '"></use></svg></a></li>',
		];
	}

	return $icons;
}

add_filter( 'simple_social_default_styles', __NAMESPACE__ . '\set_icon_defaults' );
/**
 * Set the default icon value shown in the Simple Social Icons widget.
 *
 * @param array $defaults The array of icon defaults.
 * @return array
 */
function set_icon_defaults( $defaults ) {
	$new_icons = include 'config.php';

	foreach ( $new_icons as $icon ) {
		$defaults[ $icon['short_name'] ] = $icon['default'];
	}

	return $defaults;
}
