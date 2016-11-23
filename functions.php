<?php



if (!function_exists('swiftboot_setup')) :

add_theme_support( 'post-thumbnails' ); 

function swiftboot_setup() {

}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 


endif;




add_action('wp_head','hook_css', 0);

function hook_css() {

	$output="<style> .wp_head_example { background-color : #f1f1f1; } </style>";

	echo $output;

}
/*



set_post_thumbnail_size(50, 50);


add_image_size('single-post-thumbnail', 590, 180 );

add_image_size('home-post-thumbnail', 100, 200 );



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


*/
// add_filter( 'wp_list_categories', function( $html ) {
//     return str_replace('cat-item', 'nav-item', $html);
// });