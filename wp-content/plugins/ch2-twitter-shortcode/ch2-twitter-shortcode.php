<?php
/*
    Plugin Name:    Chapter 2 – Short Code Twitter
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

add_shortcode( 'tf', 'ch2ts_twitter_feed_shortcode' );

function ch2ts_twitter_feed_shortcode( $atts ) {
    $output = '<a href="http://twitter.com/ylefebvre">Twitter Feed</a>';
    return $output;
}//end function


?>