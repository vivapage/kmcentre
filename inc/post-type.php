<?php
// Register Custom Post Type


function custom_post_type_services()
{

	$labels = array(
		'name'                  => _x('Services', 'Post Type General Name', 'kmcentre'),
		'singular_name'         => _x('Service', 'Post Type Singular Name', 'kmcentre'),
		'menu_name'             => __('Services', 'kmcentre'),
		'name_admin_bar'        => __('Services', 'kmcentre'),
		'archives'              => __('Item Archives', 'kmcentre'),
		'attributes'            => __('Item Attributes', 'kmcentre'),
		'parent_item_colon'     => __('Parent Item:', 'kmcentre'),
		'all_items'             => __('All Items', 'kmcentre'),
		'add_new_item'          => __('Add New Item', 'kmcentre'),
		'add_new'               => __('Add New', 'kmcentre'),
		'new_item'              => __('New Item', 'kmcentre'),
		'edit_item'             => __('Edit Item', 'kmcentre'),
		'update_item'           => __('Update Item', 'kmcentre'),
		'view_item'             => __('View Item', 'kmcentre'),
		'view_items'            => __('View Items', 'kmcentre'),
		'search_items'          => __('Search Item', 'kmcentre'),
		'not_found'             => __('Not found', 'kmcentre'),
		'not_found_in_trash'    => __('Not found in Trash', 'kmcentre'),
		'featured_image'        => __('Featured Image', 'kmcentre'),
		'set_featured_image'    => __('Set featured image', 'kmcentre'),
		'remove_featured_image' => __('Remove featured image', 'kmcentre'),
		'use_featured_image'    => __('Use as featured image', 'kmcentre'),
		'insert_into_item'      => __('Insert into item', 'kmcentre'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'kmcentre'),
		'items_list'            => __('Items list', 'kmcentre'),
		'items_list_navigation' => __('Items list navigation', 'kmcentre'),
		'filter_items_list'     => __('Filter items list', 'kmcentre'),
	);
	$args = array(
		'label'                 => __('Service', 'kmcentre'),
		'description'           => __('Services Description', 'kmcentre'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'taxonomies'            => array('service_category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'   => 'dashicons-products',
	);
	register_post_type('services', $args);
}
add_action('init', 'custom_post_type_services', 0);

function custom_post_type_testimonials()
{

	$labels = array(
		'name'                  => _x('Testimonials', 'Post Type General Name', 'kmcentre'),
		'singular_name'         => _x('Testimonial', 'Post Type Singular Name', 'kmcentre'),
		'menu_name'             => __('Testimonials', 'kmcentre'),
		'name_admin_bar'        => __('Testimonial', 'kmcentre'),
		'archives'              => __('Item Archives', 'kmcentre'),
		'attributes'            => __('Item Attributes', 'kmcentre'),
		'parent_item_colon'     => __('Parent Item:', 'kmcentre'),
		'all_items'             => __('All Items', 'kmcentre'),
		'add_new_item'          => __('Add New Item', 'kmcentre'),
		'add_new'               => __('Add New', 'kmcentre'),
		'new_item'              => __('New Item', 'kmcentre'),
		'edit_item'             => __('Edit Item', 'kmcentre'),
		'update_item'           => __('Update Item', 'kmcentre'),
		'view_item'             => __('View Item', 'kmcentre'),
		'view_items'            => __('View Items', 'kmcentre'),
		'search_items'          => __('Search Item', 'kmcentre'),
		'not_found'             => __('Not found', 'kmcentre'),
		'not_found_in_trash'    => __('Not found in Trash', 'kmcentre'),
		'featured_image'        => __('Featured Image', 'kmcentre'),
		'set_featured_image'    => __('Set featured image', 'kmcentre'),
		'remove_featured_image' => __('Remove featured image', 'kmcentre'),
		'use_featured_image'    => __('Use as featured image', 'kmcentre'),
		'insert_into_item'      => __('Insert into item', 'kmcentre'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'kmcentre'),
		'items_list'            => __('Items list', 'kmcentre'),
		'items_list_navigation' => __('Items list navigation', 'kmcentre'),
		'filter_items_list'     => __('Filter items list', 'kmcentre'),
	);
	$args = array(
		'label'                 => __('Testimonial', 'kmcentre'),
		'description'           => __('Testimonials Description', 'kmcentre'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'   => 'dashicons-money',
	);
	register_post_type('testimonials', $args);
}
add_action('init', 'custom_post_type_testimonials', 0);


/// Register Custom Taxonomy
function custom_taxonomy_service_category()
{

	$labels = array(
		'name'                       => _x('Service сategories', 'Taxonomy General Name', 'kmcentre'),
		'singular_name'              => _x('Service category', 'Taxonomy Singular Name', 'kmcentre'),
		'menu_name'                  => __('Service category', 'kmcentre'),
		'all_items'                  => __('All Items', 'kmcentre'),
		'parent_item'                => __('Parent Item', 'kmcentre'),
		'parent_item_colon'          => __('Parent Item:', 'kmcentre'),
		'new_item_name'              => __('New Item Name', 'kmcentre'),
		'add_new_item'               => __('Add New Item', 'kmcentre'),
		'edit_item'                  => __('Edit Item', 'kmcentre'),
		'update_item'                => __('Update Item', 'kmcentre'),
		'view_item'                  => __('View Item', 'kmcentre'),
		'separate_items_with_commas' => __('Separate items with commas', 'kmcentre'),
		'add_or_remove_items'        => __('Add or remove items', 'kmcentre'),
		'choose_from_most_used'      => __('Choose from the most used', 'kmcentre'),
		'popular_items'              => __('Popular Items', 'kmcentre'),
		'search_items'               => __('Search Items', 'kmcentre'),
		'not_found'                  => __('Not Found', 'kmcentre'),
		'no_terms'                   => __('No items', 'kmcentre'),
		'items_list'                 => __('Items list', 'kmcentre'),
		'items_list_navigation'      => __('Items list navigation', 'kmcentre'),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy('service_category', array('services'), $args);
}
add_action('init', 'custom_taxonomy_service_category', 0);


/// Register Custom Fields