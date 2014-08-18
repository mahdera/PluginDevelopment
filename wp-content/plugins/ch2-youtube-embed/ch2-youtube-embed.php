<?php

/*
    Plugin Name:    Chapter 2 – YouTube Embed.
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

add_shortcode( 'youtubevid', 'ch2ye_youtube_embed_shortcode' );


function ch2ye_youtube_embed_shortcode( $atts ) {
    extract( shortcode_atts( array('id' => ''), $atts ) );
    
    $output = '<iframe width="560" height="315" src="http://www.youtube.com/embed/' . $id . '"
    frameborder="0" allowfullscreen></iframe>';
    return $output;
}//end function

?>