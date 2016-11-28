<?php



if (!function_exists('swiftboot_setup')) :


function swiftboot_setup() {


add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 825, 510, true );

register_nav_menus( array(
    'primary' => __( 'Primary Menu',      'swiftboot' ),
    'social'  => __( 'Social Links Menu', 'swiftboot' ),
) );



}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 


endif;



add_action( 'after_setup_theme', 'swiftboot_setup' );



add_action('wp_enqueue_scripts', 'add_css');


function add_css() {
    wp_enqueue_style('my-script-slug',  get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('my-ssscript-slug',  get_stylesheet_directory_uri() . '/style.css');
}



/*

add_action('wp_head','hook_css', 0);

function hook_css() {

	$output="<style> .wp_head_example { background-color : #f1f1f1; } </style>";

	echo $output;

}
*/

function get_the_categories($parent = 0) {
    $categories = get_categories("hide_empty=0");
    if ($categories) {
        echo '<ul class="nav navbar-nav">';
        foreach ( $categories as $category ) {
            if ( $category->category_parent == $parent ) {
            	echo '<li class="nav-item">';
                echo '<a class="nav-link" href="' . get_category_link( $category->term_id ) . '" >' . $category->name . '</a>';
                echo '</li>';
            }
        }
        echo '</ul>';
    }
}




function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

/*



set_post_thumbnail_size(50, 50);


add_image_size('single-post-thumbnail', 590, 180 );







*/
// add_filter( 'wp_list_categories', function( $html ) {
//     return str_replace('cat-item', 'nav-item', $html);
// });




// function get_top_menu() {

    


    
// }



// add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// function special_nav_class ($classes, $item) {
//     if (in_array('current-menu-item', $classes) ){
//         $classes[] = 'active ';
//     }
//     return $classes;
// }








