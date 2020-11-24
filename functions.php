<?php
/**
 * Plugin Name: Schnellinstallation Plugins
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: A plugin to get all plugins you need, to turn a website online.
 * Version: 1.0
 * Author: Maurice Seir
 * Author URI: https://internet-erfolg.de
 */

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'city_map_register_required_plugins' );

function city_map_register_required_plugins() {
	$plugins = array(
		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'All 404 Redirect to Homepage', // The plugin name.
			'slug'               => 'all-404-redirect-to-homepage', // The plugin slug (typically the folder name).
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/404-redirect.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		
		array(
			'name'               => 'Attachment Pages Redirect', // The plugin name.
			'slug'               => 'attachment-pages-redirect', // The plugin slug (typically the folder name).
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/pages-redirect.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		
		array(
			'name'               => 'Custom CSS & JS', // The plugin name.
			'slug'               => 'custom-css-js', // The plugin slug (typically the folder name).
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/custom-css.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		
		array(
			'name'               => 'Disable Gutenberg', // The plugin name.
			'slug'               => 'disable-gutenberg', // The plugin slug (typically the folder name).
			'source'             => 'http://wordpress.internet-erfolg.de/_plugins/disable-gutenberg.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		
		array(
			'name'               => 'Elementor Pro', // The plugin name.
			'slug'               => 'elementor-pro', // The plugin slug (typically the folder name).
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/elementor-pro.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		
		array(
			'name'               => 'eRecht24', // The plugin name.
			'slug'               => 'erecht24', // The plugin slug (typically the folder name).
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/erecht24.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		
		array(
			'name'               => 'HT Mega', // The plugin name.
			'slug'               => 'ht-mega-for-elementor', // The plugin slug (typically the folder name).
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/ht-mega-for-elementor.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		
		array(
			'name'               => 'Wordfence', // The plugin name.
			'slug'               => 'wordfence', // The plugin slug (typically the folder name).
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/wordfence.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
		
		array(
			'name'               => 'WP Mail SMTP', // The plugin name.
			'slug'               => 'wp-mail-smtp.2.4.0', // The plugin slug (typically the folder name).
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/wp-mail-smtp.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		)
	);
	
	$config = array(
		'id'           => 'city-map',
		'dismissable'  => false, 
		'has_notices'  => true,	
	);

	tgmpa( $plugins, $config );
}