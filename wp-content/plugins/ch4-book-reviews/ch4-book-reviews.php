<?php
/*
    Plugin Name:    Chapter 4 – Book Reviews.
    Plugin URI:
    Description:    This plugin deals with creation of custom post types.
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

//this gets i.e., init hook executed every time WordPress generates a new page and loads it...
add_action( 'init', 'ch4_br_create_book_post_type' );


function ch4_br_create_book_post_type() {
       register_post_type( 'book_reviews',
           array(
               'labels' => array(
                   'name' => 'Book Reviews',
                   'singular_name' => 'Book Review',
                   'add_new' => 'Add New',
                   'add_new_item' => 'Add New Book Review',
                   'edit' => 'Edit',
                   'edit_item' => 'Edit Book Review',
                   'new_item' => 'New Book Review',
                   'view' => 'View',
                   'view_item' => 'View Book Review',
                   'search_items' => 'Search Book Reviews',
                   'not_found' => 'No Book Reviews found',
                   'not_found_in_trash' =>
                       'No Book Reviews found in Trash',
                   'parent' => 'Parent Book Review'
               ),
               'public' => true,
               'menu_position' => 20,
               'supports' => array( 'title', 'editor', 'comments', 'thumbnail' ),
               'taxonomies' => array( '' ),
               'menu_icon' => plugins_url( 'book-icon.png', __FILE__ ),
               'has_archive' => true
            )//end array 
        );//end register_post_type
}//end function

//call the ch4_br_admin_init function will be called when the admin page is visited.
add_action( 'admin_init', 'ch4_br_admin_init' );

function ch4_br_admin_init(){
    add_meta_box('ch4_br_review_details_meta_box', 'Book Review Details', 
            'ch4_br_display_review_details_meta_box', 'book_reviews', 'normal', 'high');
}//end function

function ch4_br_display_review_details_meta_box($book_review){
    $book_author = esc_html(get_post_meta($book_review->ID, 'book_author', true ) );
    
    $book_rating = intval( get_post_meta( $book_review->ID,  'book_rating', true ) );
    ?>
        <table>
               <tr>
                   <td style="width: 100%">Book Author</td>
                   <td><input type="text" size="80" name="book_review_author_name" value="<?php echo $book_author; ?>" /></td>
               </tr>
               <tr>
                   <td style="width: 150px">Book Rating</td>
                    <td>
                        <select style="width: 100px" name="book_review_rating">
                        <?php
                        // Generate all items of drop-down list
                        for ( $rating = 5; $rating >= 1; $rating -- ) {
                        ?>
                            <option value="<?php echo $rating; ?>"<?php echo selected( $rating,$book_rating ); ?>><?php echo $rating; ?> stars
                        <?php 
                           }//end function
                        ?>
                        </select>
                   </td>
               </tr>
           </table>
    <?php
}//end function

//register a function that will be called when posts are saved to the database.
add_action( 'save_post', 'ch4_br_add_book_review_fields', 10, 2 );

function ch4_br_add_book_review_fields($book_review_id, $book_review){
    if( isset($_POST['book_review_author_name']) && $_POST['book_review_author_name'] != '' ){
        update_post_meta($book_review_id, 'book_author' , $_POST['book_review_author_name'] );
    }
    
    if( isset($_POST['book_review_rating']) && $_POST['book_review_rating'] != '' ){
        update_post_meta($book_review_id, 'book_rating', $_POST['book_review_rating'] );
    }
}//end function


add_filter( 'template_include' , 'ch4_br_template_include', 1 );

function ch4_br_template_include($template_path){
    
    if ( get_post_type() == 'book_reviews' ) {//check if the post type is 'book_reviews'
        if ( is_single() ) {//checks if the post type is single post type...
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-book_reviews.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-book_reviews.php';                      
            }                   

         }
    }
    
    return $template_path;
    
}//end function

?>