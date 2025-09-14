<?php
function modify_jquery_version() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '1.11.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery_version');

function basic_style(){
	global $pageId;
	if (is_single()){
		wp_enqueue_style('core-css', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
	};
	// Reset CSS
    wp_enqueue_style(
        'wp-block-library-reset',
        includes_url( 'css/dist/block-library/reset.min.css' ),
        array(),
        get_bloginfo( 'version' )
    );

    // Block core styles
    wp_enqueue_style(
        'wp-block-library',
        includes_url( 'css/dist/block-library/style.min.css' ),
        array('wp-block-library-reset'),
        get_bloginfo( 'version' )
    );
	
	wp_enqueue_script( 'public-script', get_theme_file_uri( '/public.js' ), array( 'jquery' ), '1.0', false );
	// Theme stylesheet.
	wp_enqueue_style( 'view-style', get_bloginfo('template_url').'/library/css/view.css' );
	wp_enqueue_style( 'style-style', get_bloginfo('template_url').'/library/css/style.css' );
	wp_enqueue_style( 'swiper-min-style', get_bloginfo('template_url').'/library/css/swiper.min.css' );
	wp_enqueue_style( 'meanmenu-style', get_bloginfo('template_url').'/library/css/meanmenu.css' );
	wp_enqueue_style( 'swiper-style', get_bloginfo('template_url').'/library/css/swiper.css' );

	wp_enqueue_style( 'fontawesome-style', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
	wp_enqueue_style( 'roboto-style', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap' );
	wp_enqueue_style( 'montserrat-style', 'https://fonts.googleapis.com/css?family=Montserrat' );
	
	wp_enqueue_script( 'scrollsmoothly-script', get_theme_file_uri( '/library/js/scrollsmoothly.js' ), array( 'jquery' ), '1.0', false );
	wp_enqueue_script( 'setting-script', get_theme_file_uri( '/library/js/setting.js' ), array( 'jquery' ), '1.0', false );
	wp_enqueue_script( 'parallax-script', get_theme_file_uri( '/library/js/parallax.min.js' ), array( 'jquery' ), '1.0', false );

	if (is_page(array($pageId["index"], $pageId["job"], $pageId["company"]))){
		wp_enqueue_style( 'base-dev-style', get_bloginfo('template_url').'/library/css/base_vn_dev.css' );
	}else{
		wp_enqueue_style( 'base-dev-style', get_bloginfo('template_url').'/library/css/base_dev.css' );
	}

	wp_enqueue_style( 'publis-style', get_bloginfo('template_url').'/library/css/publis.css' );
	wp_enqueue_style( 'basic-style', get_stylesheet_uri(),array(),'5.0.0','all');

	wp_enqueue_script( 'publis-script', get_theme_file_uri( '/library/js/publis.js' ), array( 'jquery' ), '1.0', false );

	if (is_page(array($pageId["accounting"], $pageId["back-office"], $pageId["human-resources"], $pageId["labor-management"], $pageId["sales-admin"], $pageId["sales"]))){
		wp_enqueue_style( 'people-style', get_bloginfo('template_url').'/library/css/people.css' );
		wp_enqueue_script( 'slick-slider-script', get_theme_file_uri( '/library/js/slick_slider.js' ), array( 'jquery' ), '1.0', false );
		wp_enqueue_style( 'slick-theme-style', get_bloginfo('template_url').'/library/css/slick_theme.css' );
		wp_enqueue_style( 'slick-slider-style', get_bloginfo('template_url').'/library/css/slick_slider.css' );
		wp_enqueue_style( 'reason-style', get_bloginfo('template_url').'/library/css/reason.css' );
	}
	if (is_page($pageId["departments"])){
		wp_enqueue_style( 'people-style', get_bloginfo('template_url').'/library/css/people.css' );
	}
	if (is_page($pageId["reason"])){
		wp_enqueue_style( 'reason-style', get_bloginfo('template_url').'/library/css/reason.css' );
	}

	// Footer script
	wp_enqueue_script( 'meanmenu-main-script', get_theme_file_uri( '/library/js/jquery.meanmenu_main.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'meanmenu-script', get_theme_file_uri( '/library/js/meanmenu_main.js' ), array( 'jquery' ), '1.0', true );
	// Home script
	if (is_home() || is_front_page() || is_page($pageId["index"])){
		wp_enqueue_script( 'swiper-script', get_theme_file_uri( '/library/js/swiper.min.js' ), array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'swiper-home-script', get_theme_file_uri( '/library/js/home_swiper.js' ), array( 'jquery' ), '1.0', true );
		wp_enqueue_style( 'home-style', get_bloginfo('template_url').'/library/css/home.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'basic_style' );

add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style(
        'theme-editor-style',
        get_template_directory_uri() . '/library/css/people.css',
        [],
        filemtime( get_template_directory() . '/library/css/people.css' ) // cache busting
    );
});

add_action( 'wp_head', 'my_custom_js_globals' );
function my_custom_js_globals() {
    echo '<script>';
    echo 'window.siteUrl = "'.get_template_directory_uri().'";';
    echo '</script>';
}
// function load_admin_style(){
// 	// Theme stylesheet.
// 	wp_enqueue_style( 'custom-admin-style', get_bloginfo('template_url').'/admin_style.css' );
// }
// add_action( 'admin_enqueue_scripts', 'load_admin_style' );
?>