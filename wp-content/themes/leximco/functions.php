<?php
/**
 * All functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since 1.0
 */
/**
 * Global variables
 */
$TemplateUrl = get_bloginfo('template_url');
$pageId = array(
	// company
	"departments" => 58,
		"accounting" => 60,
		"back-office" => 73,
		"human-resources" => 84,
		"labor-management" => 90,
		"sales-admin" => 94,
		"sales" => 101,
	"activities" => 107,
	"greeting" => 110,
	"overview" => 114,
	"philosophy" => 118,
	"consulting01" => 121,
	"consulting02" => 125,
	"consulting03" => 130,
	"index" => 133,
	"job" => 138,
	"company" => 143,
		"service01" => 149,
		"service02" => 153,
		"service03" => 156,
		"service04" => 182,

		"orientation" => 159,
		"reason" => 9,
		"strength01" => 34,
		"strength02" => 164,
		"strength03" => 167,
	"faq" => 171,
	"info" => 17,
	"contact" => 175,
);
/**
 * Implement the Customimzer.
 */
function themes_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'page-template' );
	add_theme_support( 'post-formats', array( 'aside' ) );
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'leximco' ),
	));
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_image_size('service_thumb',798,329,true);
	add_image_size('block_thumb',570,330,true);
	add_image_size('business_thumb',370,240,true);
	add_image_size('small_thumb',90,90,true);
	add_image_size('tiny_thumb',70,44,true);
	add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', 'themes_setup' );

function mytheme_add_wp_block_class( $block_content, $block ) {
    if ( empty( $block_content ) ) {
        return $block_content;
    }

    // Nếu đã có class="..." thì append thêm wp-block
    if ( preg_match( '/(<\w+)([^>]*class=")([^"]*)(")/i', $block_content ) ) {
        $block_content = preg_replace(
            '/(<\w+)([^>]*class=")([^"]*)(")/i',
            '$1$2$3 wp-block$4',
            $block_content,
            1
        );
    } else {
        // Nếu chưa có class thì thêm mới class="wp-block"
        $block_content = preg_replace(
            '/(<\w+)([^>]*)(>)/i',
            '$1$2 class="wp-block"$3',
            $block_content,
            1
        );
    }

    error_log( 'render_block called for: ' . ( $block['blockName'] ?? 'unknown' ) );
    return $block_content;
}
add_filter( 'render_block', 'mytheme_add_wp_block_class', 10, 3 );


require get_parent_theme_file_path( '/func/core/custom_post_type.php' );
require get_parent_theme_file_path( '/func/core/assets.php' );
require get_parent_theme_file_path( '/func/core/misc.php' );

require get_parent_theme_file_path( '/func/view/info_header.php' );
require get_parent_theme_file_path( '/func/view/info_content.php' );
require get_parent_theme_file_path( '/func/view/info_side.php' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
function custom_excerpt_length( $length ) {
	return 5;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter( 'show_admin_bar', '__return_false' );

// create custom plugin settings menu
add_action('admin_menu', 'site_setting_create_menu');

function site_setting_create_menu() {

	//create new top-level menu
	add_menu_page('Site Settings', 'Site Settings', 'administrator', __FILE__, 'site_setting_settings_page' , get_theme_file_uri('/favicon.ico', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_site_setting_settings' );
}


function register_site_setting_settings() {
	//register our settings
	register_setting( 'site-settings-group', 'telephone_number_option' );
	register_setting( 'site-settings-group', 'email_option' );
	register_setting( 'site-settings-group', 'address_option' );
}

function site_setting_settings_page() {
?>
<div class="wrap">
<h1>Site Settings</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'site-settings-group' ); ?>
    <?php do_settings_sections( 'site-settings-group' ); ?>
    <table class="form-table">
		<tr valign="top">
			<th scope="row">Address</th>
			<td><input type="text" name="address_option" value="<?php echo esc_attr( get_option('address_option') ); ?>" size="100" /></td>
        </tr>
        <tr valign="top">
			<th scope="row">Telephone number</th>
			<td><input type="text" name="telephone_number_option" value="<?php echo esc_attr( get_option('telephone_number_option') ); ?>" /></td>
        </tr>
        <tr valign="top">
			<th scope="row">Email</th>
			<td><input type="text" name="email_option" value="<?php echo esc_attr( get_option('email_option') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>