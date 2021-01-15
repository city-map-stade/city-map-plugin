<?php
/**
 * Plugin Name: Schnellinstallation Plugins
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: A plugin to get all plugins you need, to turn a website online.
 * Version: 1.0.3
 * Author: Maurice Seir
 * Author URI: https://internet-erfolg.de
 */

// Plugins die wir installieren, für Seiten von Kunden
// Name ist immer der Name des Plugins
// Slug ist der Ordnername, der nach dem entpacken der Datei gezeigt wird
// Source ist die Quelle des Plugins, i.d.R. liegt dies immer auf wordpress.internet-erfolg.de --> _plugins
// required ist ein Boolean-Wert, ob das Plugin installiert werden muss oder nur empfohlen wird, Standardmäßig true eingestelt

require_once dirname( __FILE__ ) . '/function.php';

add_action( 'tgmpa_register', 'city_map_register_required_plugins' );

function city_map_register_required_plugins() {
	$plugins = array(

		array(
			'name'               => 'All 404 Redirect to Homepage',
			'slug'               => 'all-404-redirect-to-homepage',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/404-redirect.zip',
			'required'           => true,
			// Version 1.20
		),
		
		array(
			'name'               => 'Attachment Pages Redirect',
			'slug'               => 'attachment-pages-redirect',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/pages-redirect.zip',
			'required'           => true,
			// Version 1.1.1
		),
		
		array(
			'name'               => 'Borlabs Cookie',
			'slug'               => 'borlabs-cookie',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/borlabs.zip',
			'required'           => true,
			// Version 2.2.13
		),
		
		array(
			'name'               => 'Custom CSS & JS',
			'slug'               => 'custom-css-js',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/custom-css.zip',
			'required'           => true,
			// Version 3.34
		),
		
		array(
			'name'               => 'Disable Gutenberg',
			'slug'               => 'disable-gutenberg',
			'source'             => 'http://wordpress.internet-erfolg.de/_plugins/disable-gutenberg.zip',
			'required'           => true,
			// Version 2.3
		),
		
		array(
			'name'               => 'Elementor',
			'slug'               => 'elementor',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/elementor.zip',
			'required'           => true,
			// Version 3.0.13
		),
		
		array(
			'name'               => 'Elementor Pro',
			'slug'               => 'elementor-pro',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/elementor-pro.zip',
			'required'           => true,
			// Version 3.0.6
		),
		
		array(
			'name'               => 'eRecht24',
			'slug'               => 'erecht24',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/erecht24.zip',
			'required'           => true,
			// Version 3.0.0
		),
		
		array(
			'name'               => 'HT Mega',
			'slug'               => 'ht-mega-for-elementor',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/ht-mega-for-elementor.zip',
			'required'           => true,
			// Version 1.4.7
		),
		
		array(
			'name'               => 'Wordfence',
			'slug'               => 'wordfence',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/wordfence.zip',
			'required'           => true,
			// Version 7.4.12
		),
		
		array(
			'name'               => 'WP Mail SMTP',
			'slug'               => 'wp-mail-smtp.2.4.0',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/wp-mail-smtp.zip',
			'required'           => true,
			// Version 2.5.1
		),
		
		array(
			'name'               => 'WP Mail SMTP',
			'slug'               => 'wp-mail-smtp.2.4.0',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/wp-mail-smtp.zip',
			'required'           => true,
			// Version 2.5.1
		),

		array(
			'name'               => 'WP Mail SMTP',
			'slug'               => 'wp-mail-smtp.2.4.0',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/wp-mail-smtp.zip',
			'required'           => true,
			// Version 2.5.1
		),
		
		array(
			'name'               => 'REAL MEDIA LIBARY',
			'slug'               => 'real-media-library-lite',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/real-media-library-lite.zip',
			'required'           => true,
			// Version 2.5.1
		),
		
		array(
			'name'               => 'YOAST SEO',
			'slug'               => 'wordpress-seo',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/yoast.zip',
			'required'           => true,
			// Version 2.5.1
		)


	);
	
	$config = array(
		'id'           => 'city-map',
		'dismissable'  => false, 
		'has_notices'  => true,	
	);

	tgmpa( $plugins, $config );
}