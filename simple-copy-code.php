<?php
/*
* Plugin Name: Simple Copy Code
*/

function register_copy_code()
{
    wp_enqueue_script('copy', plugins_url("/copy.js", __FILE__), array(), '0.1', true);
}

add_action('wp_enqueue_scripts', 'register_copy_code');

function register_copy_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('copy-style', plugins_url("/copy.css", __FILE__), array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'register_copy_styles');


// functions.php
function wporg_block_wrapper( $block_content, $block ) {
    if ( $block['blockName'] === 'core/code' ) {
        $content =  '<div class="copy-container">';
        $content .= '<button class="copy-button" onclick="copyCodeToClipboard(event)">Copy</button>';
        $content .= $block_content;
        $content .= '</div>';
        return $content;
    }
    return $block_content;
}
 
add_filter( 'render_block', 'wporg_block_wrapper', 10, 2 );
?>