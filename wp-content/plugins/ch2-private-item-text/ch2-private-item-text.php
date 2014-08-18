<?php

/*
    Plugin Name:    Chapter 2 – Private Item Text.
    Plugin URI:
    Description:    Declares a plugin that will be visible in the
    WordPress admin interface
    Version:
    Author: Mahder Neway
    Author URI:
    License:
    1.0
    Yannick Lefebvre
    http://ylefebvre.ca
    GPLv2
*/

add_shortcode( 'private', 'ch2pit_private_shortcode' );

function ch2pit_private_shortcode( $atts, $content = null ) {
    if ( is_user_logged_in() ){//if the session shows that the user is still logged in...
        return '<div class="private">' . $content . '</div>';
    }else{
        return '';
    }    
}//end function

add_action('wp_enqueue_scripts', 'ch2pit_queue_stylesheet');

function ch2pit_queue_stylesheet() {
    wp_enqueue_style( 'privateshortcodestyle',plugins_url( 'stylesheet.css', __FILE__ ) );
}//end function

?>
