<?php
	$recommendedPlugins = [
		[
			'name'               => 'All 404 Redirect to Homepage',
			'slug'               => 'all-404-redirect-to-homepage',
			'source'             => 'https://wordpress.internet-erfolg.de/_plugins/404-redirect.zip',
			'required'           => true,
			// Version 1.20
		]
	];

	supernova_register_required_plugins($recommendedPlugins);
?>
