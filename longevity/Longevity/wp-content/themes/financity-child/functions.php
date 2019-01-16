<?php

	// start your child theme code here
	
	// custom function to disable the trim excerpt
	// add_filter('wp_trim_excerpt', 'custom_disable_trim_excerpt', 11, 2);
	// function custom_disable_trim_excerpt( $excerpt, $original ){
	// 	if( !empty($original) ){
	// 		return $original;
	// 	}
	// 	return $excerpt;
	// }	

	// set 1 process for image importer
	// add_filter('gdlr_core_importer_image_per_process', 'custom_importer_image_per_process');
	// if( !function_exists('custom_importer_image_per_process') ){
	// 	function custom_importer_image_per_process(){
	// 		return 1000;
	// 	}
	// }
	// 
	// 
	