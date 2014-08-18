<?php
/*
    Plugin Name: Chapter 2 – Nav Menu Filter
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

add_filter( 'wp_nav_menu_objects', 'ch2nmf_new_nav_menu_items', 10, 2 );

function ch2nmf_new_nav_menu_items( $sorted_menu_items, $args ) {
    print_r( $sorted_menu_items );
    return $sorted_menu_items;
}//end function


?>