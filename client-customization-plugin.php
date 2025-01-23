<?php
/**
 * Plugin Name:     Client Customization
 * Plugin URI:      https://www.yogh.com.br/
 * Description:     Plugins with Project Customization
 * Author:          Yogh Soluções
 * Author URI:      https://www.yogh.com.br/
 * Text Domain:     client-customization
 * Domain Path:     /languages
 * Version:         0.1.2
 *
 * @package         Client_Customization
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die( 'not allowed' );
}

// Adiciona mensagem apenas em posts únicos
function add_message_to_single_posts( $content ) {
    if ( is_single() && get_post_type() === 'post' ) {
        $message = '<p><b>' . __( 'This content is created by:', 'client-customization' ) . ' ' . get_bloginfo( 'name' ) . ' (' . get_bloginfo( 'url' ) . ')</b></p>';
        return $content . $message;
    }
    return $content;
}
add_filter( 'the_content', 'add_message_to_single_posts', 10 );
