<?php


// Load Style Sheets
function load_css()
{

	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
	wp_enqueue_style('bootstrap');

	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
	wp_enqueue_style('main');



}
add_action('wp_enqueue_scripts', 'load_css');

// Load specific Style Sheet
function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'template-arbeiten.php' ) ) {
        wp_enqueue_style( 'template-texts', get_stylesheet_directory_uri() . '/css/arbeiten.css' );
    }

    if ( is_page_template( 'template-archiv.php' ) ) {
        wp_enqueue_style( 'template-texts', get_stylesheet_directory_uri() . '/css/archiv.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );

// Load Javascript
function load_js()
{
	wp_enqueue_script('jquery');

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Custom Image Sizes
add_image_size('medium', get_option( 'medium_size_w' ), get_option( 'medium_size_h' ), true );
add_image_size('medium-extra', 425, 250, array( 'center', 'center' ) );

/**
 * Remove the output of the first gallery
 *
 * @param string $output
 * @param array $attr
 * @return string $output
 */
function remove_the_first_gallery( $output, $attr )
{
    // Run only once
    remove_filter( current_filter(), __FUNCTION__ );

    // Override the first gallery output        
    return '<!-- gallery 1 was here -->';   // Must be non-empty.
}

add_filter( 'post_gallery', 'remove_the_first_gallery', 10, 2 );

/* Function to retrieve image information */
function wp_get_attachment( $attachment_id ) {

    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}