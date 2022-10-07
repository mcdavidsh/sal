<?php

define( 'SAL_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
define( 'SAL_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

// Include the ACF plugin.
include_once( SAL_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
	return SAL_ACF_URL;
}
// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
	return true;
}

if ( ! function_exists( 'sal_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function sal_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'sal_support' );
//
if ( ! function_exists( 'sal_styles' ) ) :

	function sal_styles() {
		wp_enqueue_style( 'tailwindcss',get_template_directory_uri(). '/assets/css/tailwind.min.css');
		wp_enqueue_style( 'globalcss',get_template_directory_uri(). '/assets/css/global.min.css');
	}

endif;
add_action( 'wp_enqueue_scripts', 'sal_styles' );
if (!function_exists('sal_scripts')){
	function sal_scripts(){
		wp_enqueue_script('sal-main-js',get_template_directory_uri().'/assets/js/main.js',array(),'1.0',true);
	}
}
add_action('wp_enqueue_scripts','sal_scripts');
//


//Create Static pages
function create_page($title_of_the_page,$content,$parent_id = NULL )
{
	$objPage = get_page_by_title($title_of_the_page, 'OBJECT', 'page');
	if( ! empty( $objPage ) )
	{
		return false;
	}

	$page_id = wp_insert_post(
		array(
			'comment_status' => 'close',
			'ping_status'    => 'close',
			'post_author'    => 1,
			'post_title'     => ucwords($title_of_the_page),
			'post_name'      => strtolower(str_replace(' ', '-', trim($title_of_the_page))),
			'post_status'    => 'publish',
			'post_content'   => $content,
			'post_type'      => 'page',
			'post_parent'    =>  $parent_id //'id_of_the_parent_page_if_it_available'
		)
	);
	return $page_id;
}
$theme = wp_get_theme(); // gets the current theme
if ( 'Social Ads Limited' == $theme->name || 'Twenty Twelve' == $theme->parent_theme ) {
	create_page("Home", "");
	$home = get_page_by_title( 'Home' );
	update_option( 'page_on_front', $home->ID );
	update_option( 'show_on_front', 'page' );
	create_page("Careers", "");
	create_page("About", "");
}
add_action( 'admin_notices', 'sal_dependencies' );

function sal_dependencies() {

	if( ! class_exists('ACF') )
		$response = '<div class="error"><p>' . __( 'Warning: Social Ads Limited theme requires <a href="https://www.advancedcustomfields.com/pro/"> Advanced Custom Fields Pro Plugin</a> to function.', 'my-theme' ) . '</p></div>';

	elseif (!class_exists('Classic_Editor'))
		$response = '<div class="error"><p>' . __( 'Warning: Social Ads Limited theme requires <a href="http://localhost:8000/wp-admin/plugins.php?_wpnonce=68958442b1&action=activate&plugin=classic-editor/classic-editor.php">Classic Editor Plugin</a> to function.', 'my-theme' ) . '</p></div>';


	echo $response;
}
if (function_exists("acf_add_options_page")) {
	acf_add_options_page([
		'page_title'=>'Website Options',
		'menu_title'=>'Website Options',
		'menu_slug'=>'website-options',
		'capability'=>'edit_posts',
		'icon_url'=>'dashicons-admin-tools',
	]);
}