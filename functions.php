// <?php
    add_theme_support( 'post-thumbnails' );
// //Creates Custom Post Type for Medarbetare
// function teams_init(){
//     $args = array(
//         'public'            => true,
//         'has_archive'       => true,
//         'show_ui'           => true,
//         'capability_type'   => 'post',
//         'hierarchical'      => false,
//         'rewrite'           => array('slug' => 'teams'),
//         'query_var'         => true,
//         'menu_icon'         => 'dashicons-admin-users',
//         'label'             => 'Teams',
//         'supports'          => array(
//                                 'title',
//                                 'editor',
//                                 'excerpt',
//                                 //'custom-fields',
//                                 'thumbnail',
//                                 'page-attributes',)
//         );
//     register_post_type('teams', $args);


// }
// add_action('init', 'teams_init');

// ?>