<?php
/*
Plugin Name: X-UA-Compatible
Description: Adds X-UA-Compatible HTTP header
Version: 0.1
Plugin URI: https://github.com/shtrihstr/wp-compatible-header
Author: Oleksandr Strikha
Author URI: https://github.com/shtrihstr
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter( 'wp_headers', function( $headers ) {

    if ( ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) && ! ( defined( 'REST_REQUEST' ) && REST_REQUEST ) ) {
        if ( ! is_array( $headers ) ) {
            $headers = [];
        }
        $headers['X-UA-Compatible'] = 'IE=edge,chrome=1';
    }

    return $headers;
} );