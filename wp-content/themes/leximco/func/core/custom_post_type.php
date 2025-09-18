<?php
function create_custom_post_type(){
	$label = array(
		'name' => '会社活動', 
		'singular_name' => '会社活動' 
	);
 
	$args = array(
		'labels' => $label,
		'description' => '会社活動',
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'show_in_rest',
			'custom-fields'
		),
		'show_in_rest' => true,
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_in_admin_bar' => false,
		'menu_position' => 5,
		'can_export' => true,
		'has_archive' => false,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post'
	);
 
	register_post_type('activities', $args);

}
function create_taxonomy() {
 
	/* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
	 */
	$labels = array(
		'name' => 'Activities Categories',
		'singular' => 'Activities Category',
		'menu_name' => 'Activities Categories'
	);

	/* Biến $args khai báo các tham số trong custom taxonomy cần tạo
	 */
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_in_rest'               => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => false,
			'show_tagcloud'              => false,
	);

	/* Hàm register_taxonomy để khởi tạo taxonomy
	 */
	register_taxonomy('activity-categories', 'activities', $args);
}
 
// Hook into the 'init' action
add_action( 'init', 'create_taxonomy', 0 );

add_action('init', 'create_custom_post_type');

?>