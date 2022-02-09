<?php
/*
Plugin Name: Allow iframe Tags in Editor
Description: Allows use of iframe tags in Custom HTML block for non-super-admins.
Author: Joshua Woehlke
*/

function allow_iframes( $allowedposttags ){

	$allowedposttags['iframe'] = array(
		'align' => true,
		'allow' => true,
		'allowfullscreen' => true,
		'class' => true,
		'frameborder' => true,
		'height' => true,
		'id' => true,
		'marginheight' => true,
		'marginwidth' => true,
		'name' => true,
		'scrolling' => true,
		'src' => true,
		'style' => true,
		'width' => true,
		'allowFullScreen' => true,
		'class' => true,
		'frameborder' => true,
		'height' => true,
		'mozallowfullscreen' => true,
		'src' => true,
		'title' => true,
		'webkitAllowFullScreen' => true,
		'width' => true
	);

	return $allowedposttags;
}

add_filter( 'wp_kses_allowed_html', 'allow_iframes', 1 );

?>
