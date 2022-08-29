<?php
function supernova_register_required_plugins($pluginArray) {
    $action = 'install-plugin';

    foreach ($pluginArray as $recommendedPlugin) {
        $name = $recommendedPlugin['name'];
        $slug = $recommendedPlugin['slug'];
        $file = $recommendedPlugin['file'];

        $link = wp_nonce_url(
            add_query_arg([
                'action' => $action,
                'plugin' => $slug
            ],
            admin_url('update.php')),
            $action . '_' . $slug
        );

        $status = ' (not installed)';
        $buttonStatus = '';
        if (file_exists(WP_PLUGIN_DIR . '/' . $file)) {
            $status = (is_plugin_active($file)) ? ' (active)' : ' (inactive)';
            $buttonStatus = (is_plugin_active($file)) ? 'button-active' : 'button-inactive';
        }

        echo '<a href="' . $link . '" class="button button-secondary ' . $buttonStatus . '">' . $name . $status . '</a> ';
    }
}
?>