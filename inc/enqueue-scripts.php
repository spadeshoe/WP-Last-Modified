<?php
use wp_last_modified\inc\LastModified;
/**
 * Enqueue Editor assets.
 */
function example_project_enqueue_editor_assets() {
    $last_modified = new LastModified(get_the_ID());
    $asset_file = include WPLM_DIRECTORY_PATH  . 'build/index.asset.php';

    wp_enqueue_script(
        'wplm-editor-scripts',
        WPLM_DIRECTORY_URL . 'build/index.js',
        
        $asset_file['dependencies'],
        $asset_file['version']
    );

    wp_add_inline_script('wplm-editor-scripts', 'const lastModified = ' . json_encode($last_modified->get_last_modified_object()), 'before');
}
add_action( 'enqueue_block_editor_assets', 'example_project_enqueue_editor_assets' );

