<?php
include_once('libs/acf-repeater/acf-repeater.php');
include_once('libs/acf-field.php');

// Register Custom Post Type
function agt_register_posttype() {
	// Tour Package
	$labels = array(
		'name'                => _x( 'Tour Packages', 'Post Type General Name', 'angeltravel' ),
		'singular_name'       => _x( 'Tour Package', 'Post Type Singular Name', 'angeltravel' ),
		'menu_name'           => __( 'Tour Packages', 'angeltravel' ),
		'parent_item_colon'   => __( 'Parent Package:', 'angeltravel' ),
		'all_items'           => __( 'All Packages', 'angeltravel' ),
		'view_item'           => __( 'View Package', 'angeltravel' ),
		'add_new_item'        => __( 'Add New Package', 'angeltravel' ),
		'add_new'             => __( 'Add New', 'angeltravel' ),
		'edit_item'           => __( 'Edit Package', 'angeltravel' ),
		'update_item'         => __( 'Update Package', 'angeltravel' ),
		'search_items'        => __( 'Search Package', 'angeltravel' ),
		'not_found'           => __( 'Not found', 'angeltravel' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'angeltravel' ),
	);
	$rewrite = array(
		'slug'                => 'experience',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'package', 'angeltravel' ),
		'description'         => __( 'Tour Packages', 'angeltravel' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'package', $args );

	// Tour Order
	$labels = array(
		'name'                => _x( 'Tour Bookings', 'Post Type General Name', 'angeltravel' ),
		'singular_name'       => _x( 'Tour Booking', 'Post Type Singular Name', 'angeltravel' ),
		'menu_name'           => __( 'Tour Bookings', 'angeltravel' ),
		'parent_item_colon'   => __( 'Parent Booking:', 'angeltravel' ),
		'all_items'           => __( 'All Bookings', 'angeltravel' ),
		'view_item'           => __( 'View Booking', 'angeltravel' ),
		'add_new_item'        => __( 'Add New Booking', 'angeltravel' ),
		'add_new'             => __( 'Add New', 'angeltravel' ),
		'edit_item'           => __( 'Edit Booking', 'angeltravel' ),
		'update_item'         => __( 'Update Booking', 'angeltravel' ),
		'search_items'        => __( 'Search Booking', 'angeltravel' ),
		'not_found'           => __( 'Not found', 'angeltravel' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'angeltravel' ),
	);
	$rewrite = array(
		'slug'                => 'user/booking',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'booking', 'angeltravel' ),
		'description'         => __( 'Tour Booking', 'angeltravel' ),
		'labels'              => $labels,
		'supports'            => array( 'title'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'booking', $args );

}

function add_admin_css(){
	echo "<link rel='stylesheet' id='mn-admin-css'  href='".get_bloginfo("template_url")."/css/admin.css' type='text/css' media='all' />";
}

function change_default_title( $title ){
	$screen = get_current_screen();
	if ( 'package' == $screen->post_type ) {
		$title = 'Package Name';
	}
	return $title;
}

function mn_columns_head($columns) {
	$columns = array(
			'cb' => '<input type="checkbox" />',
			'order_id' => __('Order ID'),
			'title' => __( 'Title' ),
			'order_status' => __('Order Status'),
			'date' => __( 'Date' )
		);
	return $columns;
}

function mn_columns_render($column_name, $post_ID) {
	if ($column_name == 'order_id') {
		echo $post_ID;
	}

	if ($column_name == 'order_status') {
		$status = get_post_meta($post_ID, "status", true);
		if ($status) {
			echo $status;
		}
	}
}

function mn_columns_sortable($columns){
	$columns['order_id'] = __('Order ID');
	$columns['order_status'] = __('Order Status');
	return $columns;
}

function at_get_package_data(){
	$pid = $_GET['pid'];
	// $meta = get_post_custom($pid);
	$schedule = get_field('tour_schedule', $pid);
	$author = get_post_field( 'post_author', $pid );

	$data = array(
			'name' => get_the_title($pid),
			'author' => $author,
			'schedule' => $schedule,
		);

	echo json_encode($data);

	die();
}

function custom_theme_setup() {
	add_theme_support( 'post-thumbnails' );
}

function get_link_from_template($template){
	$return = get_transient("page-".$template);
	if($return !== false){
		$args = array(
				'post_type' => 'page',
				'meta_key' => '_wp_page_template',
				'meta_value' => $template
			);

		$pages = new WP_Query($args);
		if($pages->have_posts()) : $return = array(); while($pages->have_posts()) : $pages->the_post();
			$return[] = get_permalink(get_the_ID());
		endwhile; else:
			$return = "";
		endif;
		set_transient("page-".$template, $return, time()+3600);
	}

	return $return;
}

function render_user_nav(){
	if(is_user_logged_in()){
		get_template_part("template-parts/nav", "user");
	}else{
		get_template_part("template-parts/nav", "guest");
	}
}

function place_booking(){
	$pid = $_POST['pid'];
	$trip = $_POST['trip'];

	$name = "Jirayu Yingthawornsuk";

	$package = get_post($pid, OBJECT);

	if($package !== null){
		$pkName = $package->post_title;
		$custom = get_post_custom($pid);

		$args = array(
				'post_type' => 'booking',
				'post_status' => 'publish',
				'post_title' => $name." - ".$pkName." (".$custom['tour_schedule_'.$trip.'_tour_start'][0].")"
			);
		$post = wp_insert_post($args);
		if($post !== 0){
			add_post_meta($post, 'tour_package', $pid);
			add_post_meta($post, 'tour_start', $custom['tour_schedule_'.$trip.'_tour_start'][0]);
			add_post_meta($post, 'tour_end', $custom['tour_schedule_'.$trip.'_tour_end'][0]);
			add_post_meta($post, 'status', 'New');
			add_post_meta($post, 'total_amount', $custom['price'][0]);
			add_post_meta($post, 'paid_amount', 0);
			add_post_meta($post, 'full_name', $name);

			$return = $post;
		}
	}else{
		$return = false;
	}

	echo json_encode($return);
	die();
}

// image size
add_image_size("home-package-item", 284, 9999);

// filter
add_filter('enter_title_here', 'change_default_title');
add_filter('manage_booking_posts_columns', 'mn_columns_head');
add_filter('manage_edit-booking_sortable_columns', 'mn_columns_sortable');

// action
add_action('init', 'agt_register_posttype', 0);
add_action('admin_head', 'add_admin_css');
add_action('manage_booking_posts_custom_column', 'mn_columns_render', 10, 2);
add_action('wp_ajax_package_data', 'at_get_package_data');
add_action('wp_ajax_booking', 'place_booking');
add_action('after_setup_theme', 'custom_theme_setup');
?>