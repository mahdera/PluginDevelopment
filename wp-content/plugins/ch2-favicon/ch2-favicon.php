<?php
   /*
    Plugin Name:    Chapter 2 – Favicon
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


    add_action('wp_head' , 'ch2fi_page_header_output');
    
    function ch2fi_page_header_output() {
        $icon_url = plugins_url( 'favicon.jpeg', __FILE__ );
    ?>
       <link rel="shortcut icon" href="<?php echo $icon_url; ?>" />
    <?php     
    }//end function


?>