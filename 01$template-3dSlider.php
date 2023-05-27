<?php 
/*
 * Plugin Name:       01dollartemplate 3dSlider
 * Plugin URI:        https://github.com/ashrafbd1496/01dollartemplate-3dSlider
 * Description:       Awesome 3D Slider Plugin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md Ashraf Uddin
 * Author URI:        https://ashrafbd.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/ashrafbd1496/01dollartemplate-3dSlider
 * Text Domain:       01$3dslider
 * Domain Path:       /languages
 */

// Register Custom Post Type
function register_onedollar_tempalte_cpt() {
    $labels = array(
        'name'               => 'Sliders',
        'singular_name'      => 'Slider',
        'menu_name'          => 'Sliders',
        'name_admin_bar'     => 'Slider',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Slider',
        'edit_item'          => 'Edit Slider',
        'new_item'           => 'New Slider',
        'view_item'          => 'View Slider',
        'search_items'       => 'Search Sliders',
        'not_found'          => 'No sliders found',
        'not_found_in_trash' => 'No sliders found in trash',
        'parent_item_colon'  => 'Parent Slider:',
        'all_items'          => 'All Sliders',
        'archives'           => 'Slider Archives',
        'attributes'         => 'Slider Attributes',
        'insert_into_item'   => 'Insert into slider',
        'uploaded_to_this_item' => 'Uploaded to this slider',
        'featured_image'     => 'Featured Image',
        'set_featured_image' => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image' => 'Use as featured image',
        'filter_items_list'  => 'Filter sliders list',
        'items_list_navigation' => 'Sliders list navigation',
        'items_list'         => 'Sliders list'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-slides',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
    );

    register_post_type( 'slider', $args );
}
add_action( 'init', 'register_onedollar_tempalte_cpt');
