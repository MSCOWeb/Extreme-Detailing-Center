<?php

// FIX ADMIN MENU IN CHROME
add_action('admin_enqueue_scripts','chrome_fix');
function chrome_fix(){
	if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome') !== false) wp_add_inline_style('wp-admin','#adminmenu{transform:translateZ(0);}');
}

// INCLUDE JQUERY PROPERLY - IN THE FOOTER
function loadJqueezy(){
	if(!is_admin()){
		wp_deregister_script('jquery');

		// load the local copy of jQuery in the footer
		wp_register_script('jquery','/wp-includes/js/jquery/jquery.js',false,'1.11.3',true);

		// or load the Google API copy in the footer
		//wp_register_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',false,'1.11.3',true);

		wp_enqueue_script('jquery');
	}
}
add_action('init','loadJqueezy');

// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a> 
	<?php
	
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div id="primary"><div class="container woocommerce"><div class="content" id="content">';
}

function my_theme_wrapper_end() {
  echo '</div></div></div>';
}

add_action('after_setup_theme','woocommerce_support');
function woocommerce_support(){
    add_theme_support('woocommerce');
}

remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
add_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_price',10);

add_theme_support('post-thumbnails');

show_admin_bar(false);

function mayer_wp_title($title,$sep){
	global $paged,$page;

	if (is_feed()){
		return $title;
	}

	$title .= get_bloginfo('name');

	$site_description = get_bloginfo('description','display');
	if ($site_description && (is_home() || is_front_page())){
		$title = "$title $sep $site_description";
	}

	if ($paged >= 2 || $page >= 2){
		$title = sprintf(__('Page %s','mayer'),max($paged,$page)) . " $sep $title";
	}

	return $title;

}
add_filter('wp_title','mayer_wp_title',10,2);

add_action('init','prowp_register_my_post_types');
function prowp_register_my_post_types(){
	register_post_type('testimonials',
		array(
			'labels' => array(
				'name' => 'Testimonials',
				'singular_name' => 'Testimonial',
				'add_new' => 'Add New Testimonial',
				'add_new_item' => 'Add New Testimonial',
				'edit_item' => 'Edit Testimonial',
				'new_item' => 'New Testimonial',
				'all_items' => 'All Testimonials',
				'menu_name' => 'Testimonials'
			),
			'public' => true,
			'menu_icon'   => 'dashicons-format-quote',
			'supports' => array('title','editor')
		)
	);
	register_post_type('services',
		array(
			'labels' => array(
				'name' => 'Services',
				'singular_name' => 'Service',
				'add_new' => 'Add New Service',
				'add_new_item' => 'Add New Service',
				'edit_item' => 'Edit Service',
				'new_item' => 'New Service',
				'all_items' => 'All Services',
				'menu_name' => 'Services'
			),
			'public' => true,
			'menu_icon'   => 'dashicons-awards',
			'supports' => array('title','editor','thumbnail')
		)
	);
}

//----SECURITY----//

// Make login error ambiguous
function wrong_login() {
 	return 'Wrong username and/or password.';
}
add_filter('login_errors', 'wrong_login');

// Disable file editor
define('DISALLOW_FILE_EDIT', true);

// Remove WordPress version from page metadata
function remove_version() {
  return '';
}
add_filter('the_generator', 'remove_version');

?>