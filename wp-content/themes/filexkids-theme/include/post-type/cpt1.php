<?php 

function create_post_type_anounce()
{
    $labels = array(
        'name'              => _x( '全校公告分類', 'taxonomy general name' ),
        'singular_name'     => _x( '全校公告分類', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋分類' ),
        'all_items'         => __( '所有' ),
        'parent_item'       => __( '選擇上層分類' ),
        'parent_item_colon' => __( '選擇上層分類:' ),
        'edit_item'         => __( '編輯上層分類' ), 
        'update_item'       => __( '更新上層分類' ),
        'add_new_item'      => __( '新增分類' ),
        'new_item_name'     => __( '新分類' ),
        'menu_name'         => __( '分類' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,  
        'label' => 'Themes store',  //Display name
        'query_var' => true,
        'rewrite' => array( 
            'with_front' =>false, 
            'hierarchical' => true 
        )
    );
    register_taxonomy( 'anounce', 'anounces', $args );// Register Taxonomies for Category
    register_taxonomy_for_object_type('category', 'anounce');
    register_post_type('anounces', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('全校公告', 'anounces'), // Rename these to suit
            'singular_name' => __('anounces', 'anounces'),
            'add_new' => __('新增', 'anounces'),
            'add_new_item' => __('新增', 'anounces'),
            'edit' => __('編輯', 'anounces'),
            'edit_item' => __('編輯', 'anounces'),
            'new_item' => __('新項目', 'anounces'),
            'view' => __('檢視', 'anounces'),
            'view_item' => __('編輯', 'anounces'),
            'search_items' => __('搜尋', 'anounces'),
            'not_found' => __('無結果', 'anounces'),
            'not_found_in_trash' => __('無結果', 'anounces')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            // 'post_tag',
            'anounce'
        ) // Add Category and Post Tags support
    ));
}
add_action('init', 'create_post_type_anounce');
?>