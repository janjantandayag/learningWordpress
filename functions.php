<?php
function learningWordpress_resources(){
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','learningWordpress_resources');

// GET TOP ANCESTOR
function get_top_ancestor_id(){
	global $post; 
	if($post->post_parent){
		$ancestor = array_reverse(get_post_ancestors($post->ID));
		return $ancestor[0];
	}
	return $post->ID;
}

// GET CATEGORIES
function getCategories(){
	$categories = get_the_category(); 
	$separator = ', ';
	$output = '';
	foreach($categories as $category){
		$output .= '<a href=" '.get_category_link($category->term_id).'  ">'. $category->cat_name .'</a>'.$separator;
	}
	echo trim($output,$separator);
}
// FORMATLENGHT OF EXCERPT
function custom_excerpt_length() {
  return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length');

function learningWordpress_setup(){	
	// Navigation Menus
	register_nav_menus([
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu')
	]);
	// ADD FEATURED IMAGE SUPPORT 
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail',180,120,true);
	add_image_size('banner-image',920,210,true);
}

add_action('after_setup_theme','learningWordpress_setup');