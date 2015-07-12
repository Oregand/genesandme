<?php

	    function custom_report() {
		  $labels = array(
		    'name'               => _x( 'Reports' ),
		    'singular_name'      => _x( 'Report' ),
		    'add_new'            => _x( 'Add New', 'Report' ),
		    'add_new_item'       => __( 'Add New Report' ),
		    'edit_item'          => __( 'Edit Report' ),
		    'new_item'           => __( 'New Report' ),
		    'all_items'          => __( 'All Reports' ),
		    'view_item'          => __( 'View Report' ),
		    'search_items'       => __( 'Search Reports' ),
		    'not_found'          => __( 'No Reports found' ),
		    'not_found_in_trash' => __( 'No Reports found in the Trash' ),
		    'parent_item_colon'  => '',
		    'menu_name'          => 'Reports'
		  );
		  $args = array(
		    'labels'        => $labels,
		    'description'   => 'Repak Specific report',
		    'public'        => true,
		    'menu_position' => 5,
		    'supports'      => array( 'title', 'editor', 'thumbnail' ),
		    'has_archive'   => true,
		  );
		  register_post_type( 'report', $args );
		  flush_rewrite_rules();
		}
		add_action( 'init', 'custom_report' );


		function taxonomies_report() {
		  $labels = array(
		    'name'              => _x( 'Report Categories', 'taxonomy general name' ),
		    'singular_name'     => _x( 'Report Category', 'taxonomy singular name' ),
		    'search_items'      => __( 'Search Report Categories' ),
		    'all_items'         => __( 'All Report Categories' ),
		    'parent_item'       => __( 'Parent Report Category' ),
		    'parent_item_colon' => __( 'Parent Report Category:' ),
		    'edit_item'         => __( 'Edit Report Category' ),
		    'update_item'       => __( 'Update Report Category' ),
		    'add_new_item'      => __( 'Add New Report Category' ),
		    'new_item_name'     => __( 'New Report Category' ),
		    'menu_name'         => __( 'Report Categories' ),
		  );
		  $args = array(
		    'labels' => $labels,
		    'hierarchical' => true,
		  );
		  register_taxonomy( 'report_category', 'report', $args );
		  flush_rewrite_rules();
		}
		add_action( 'init', 'taxonomies_report', 0 );


?>
