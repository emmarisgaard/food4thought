    <?php 
function f4t_post_types(){

    //  Recipe post type
     register_post_type('recipe', array(
        'capability_type'=>'recipe',
        'map_meta_cap'=>true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'recipes'),
        'public'=> true,
         'has_archive' => true,
        'show_in_rest' => true,
        'labels'=> array(
            'name'=>'Recipes',
            'add_new_item'=>'Add new recipe',
            'edit_item'=>'Edit recipe',
            'all_items'=>'All recipes',
            'singular_name'=>'recipe'

        ),
        'menu_icon'=>'dashicons-book'
    ));

    //  Tools & recommendation post type
     register_post_type('tool', array(
        'capability_type'=>'tool',
        'map_meta_cap'=>true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'tools'),
        'public'=> true,
         'has_archive' => true,
        'show_in_rest' => true,
        'labels'=> array(
            'name'=>'Tools',
            'add_new_item'=>'Add new tool',
            'edit_item'=>'Edit tool',
            'all_items'=>'All tools',
            'singular_name'=>'tool'

        ),
        'menu_icon'=>'dashicons-food'
    ));

    //  Food stories & tips post type
     register_post_type('story', array(
        'capability_type'=>'story',
        'map_meta_cap'=>true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'stories'),
        'public'=> true,
         'has_archive' => true,
        'show_in_rest' => true,
        'labels'=> array(
            'name'=>'Stories',
            'add_new_item'=>'Add new story',
            'edit_item'=>'Edit story',
            'all_items'=>'All stories',
            'singular_name'=>'story'

        ),
        'menu_icon'=>'dashicons-welcome-write-blog'
    ));
    }

add_action('init', 'f4t_post_types');