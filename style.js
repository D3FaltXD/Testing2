/* add some css */

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style', get_template_directory_uri() . '/style.css' );
}