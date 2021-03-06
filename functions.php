<?php
/**
 * Custom Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom_Base_Theme
 */

include (get_theme_file_path('/inc/cbt_setup.php'));
add_action( 'after_setup_theme', 'cbt_setup' );

include (get_theme_file_path('/inc/cbt_content_width.php'));
add_action( 'after_setup_theme', 'cbt_content_width', 0 );

include (get_theme_file_path('/inc/cbt_widgets_init.php'));
add_action( 'widgets_init', 'cbt_widgets_init' );

include (get_theme_file_path('/inc/cbt_scripts.php'));
add_action( 'wp_enqueue_scripts', 'cbt_scripts' );

include (get_theme_file_path('/inc/cbt_customizer.php'));
add_action( 'customize_register', 'cbt_customizer' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
