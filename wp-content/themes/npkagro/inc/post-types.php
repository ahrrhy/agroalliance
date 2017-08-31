<?php
/**
 * Create custom post type
 */

add_action('init', 'register_post_types');

function register_post_types() {
    register_post_type('products', array(
        'labels' => array(
            'name' => esc_html__('Продукция', 'npkagro'),
            'singular_name' => esc_html__('Продукция', 'npkagro'),
            'add_new' => esc_html__('Добавить новый', 'npkagro'),
            'add_new_item' => esc_html__('Добавить новый продукт', 'npkagro'),
            'edit_item' => esc_html__('Редактировать продукт', 'npkagro'),
            'new_item' => esc_html__('Новий продукт', 'npkagro'),
            'view_item' => '',
        ),
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'excerpt', 'thumbnail', 'title', 'editor', 'author', 'excerpt', 'trackbacks', 'custom-fields',  'revisions', 'page-attributes', 'post-formats'), //'comments', 'title','editor','author',,'excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'         => array('providers'),
        'menu_icon'           => 'dashicons-carrot',
        'has_archive' => true
    ));
   }

    add_action('init', 'create_taxonomy');
    function create_taxonomy()
    {

// Labels
// list: http://wp-kama.ru/function/get_taxonomy_labels
        $labels = array(
            'name' => esc_html__( 'Поставщики Продукции', 'npkagro' ),
            'singular_name' => esc_html__( 'Поставщик', 'npkagro' ),
            'search_items' => esc_html__( 'Искать поставщика ', 'npkagro' ),
            'all_items' => esc_html__( 'Все поставщики', 'npkagro' ),
            'edit_item' => esc_html__( 'Редактировать поставщика', 'npkagro' ),
            'update_item' => esc_html__( 'Обновить поставщика', 'npkagro' ),
            'add_new_item' => esc_html__( 'Добавить нового поставщика', 'npkagro' ),
            'new_item_name' => esc_html__( 'Новое имя поставщика', 'npkagro' ),
            'menu_name' => esc_html__( 'Поставщики', 'npkagro' ),
            'parent_item' => null,
            'parent_item_colon' => null,
        );
// parameters
        $args = array(
            'labels'                => $labels,
            'public'                => true,
            'show_tagcloud'         => false, // равен аргументу show_ui
            'hierarchical'          => true,
            'update_count_callback' => '',
            'capabilities'          => array(),
            'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
            '_builtin'              => false,
            'query_var'             => true, // название параметра запроса
            'rewrite'               => true,
            'has_archive' => true,

        );
        register_taxonomy('providers', array('products'), $args);
    }


