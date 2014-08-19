<?php

/*
    Plugin Name:    Chapter 3 – Individual Options.
    Plugin URI:
    Description:    This plugin deals with managing default users in WordPress...
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

register_activation_hook( __FILE__ , 'ch3io_set_default_options' );


    
function ch3io_set_default_options() {
    
    if ( get_option( 'ch3io_version' ) === false ) {
        add_option( 'ch3io_ga_account_name', 'UA-000000-0' );
        add_option( 'ch3io_track_outgoing_links', 'false' );
        add_option( 'ch3io_version', '1.1' );
    } elseif ( get_option( 'ch3io_version' ) < 1.1 ) {
        add_option( 'ch3io_track_outgoing_links', 'false' );
        update_option( 'ch3io_version', '1.1' );
    }
 
}//end function

?>