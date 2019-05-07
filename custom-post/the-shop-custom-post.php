<?php
/*
 * Plugin Name: ACP Plugin
 * Plugin URI:  https://theshoptd.com
 * Description: Advanced Custom Post WordPress Plugin. Advanced custom Post is a free plugin that enables you to add custom to your new custom post.
 * Version:     0.1.0
 * Author:      Monir
 * Author URI:  https://theshoptd.com/me
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /languages
*/

function m4_item_custom_post(){

    register_post_type( 'item_custom_post',
        array(
        'labels'=>array(
            'name'          =>  'Items',
            'singular_name' =>  'Item',
            'all_items'     =>  'All Items',
            'add_new'       =>  'Add New Item',
            'add_new_item'  =>  'Add Item Post',
        ),
        'public'    => true,
        // 'taxonomies'=> array('category', 'post_tag'),
        'supports'  => array( 'title', 'editor','custom-fields','post-formats', 'author', 'thumbnail', 'thumbnail', 'excerpt', 'comments' ),
    ));

}

add_action( 'init', 'm4_item_custom_post');

function m4_custom_taxonomy() {
 
//   $labels = array(
//     'name'          =>  'Types',
//     'singular_name' =>  'Type',
//     'all_items'     =>  'All Types',
//     'add_new_item'  =>  'Add New Type',
//     'new_item_name' =>  'New Type Name',
//   ); 	
 
  register_taxonomy('item_tax_post', 'item_custom_post',
  array(
    'label' => 'Item Category',
    'rewrite' => array( 'slug' => 'genre' ),
    'hierarchical' => true,
    )
);
}
add_action( 'init', 'm4_custom_taxonomy');