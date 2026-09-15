    <?php 
function f4t_post_types(){
    //  Recipe post type
     register_post_type('recipe', array(
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
    }

add_action('init', 'f4t_post_types');