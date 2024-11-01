<?php
/**
 * Plugin Name: URL Parameter Shortcode
 * Plugin URI: http://joehall.me/url-parameter-wordpress-shortcode-plugin/21/
 * Description: A shortcode to display the value of a parameter in a URL query string.
 * Version: 1
 * Author: Joe Hall
 * Author URI: http://joehall.me/
 * License: GPL2
 */



function parameters_func( $atts ) {
    $a = shortcode_atts( array(
        'parameter' => '',
    ), $atts );



$q = $a['q'];

return $_GET[$q];


}
add_shortcode( 'parameters', 'parameters_func' );

?>
