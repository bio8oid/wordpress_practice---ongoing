<?php

add_action('init', 'lovetoeat_init_posttypes');

function lovetoeat_init_posttypes() {

        /*
         * Register Recipes Post Type
         */

        $recipies_args = array(
            'labels' => array(
                'name' => 'Recipies',
                'singular_name' => 'Recipies',
                'all_items' => 'All Recipies',
                'add_new' => 'Add new recipe',
                'add_new_item' => 'Add new recipe',
                'edit_item' => 'Edit recipe',
                'new_item' => 'New recipe',
                'view_item' => 'View recipe',
                'search_items' => 'Search recipe',
                'not_found' =>  'No recipies found',
                'not_found_in_trash' => 'No recipies found', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields'
            ),
            'has_archive' => true            
        );
        
        register_post_type('recipies', $recipies_args);


        
        /*
         * Register Restaurant Post Type
         */

        $restaurants_args = array(
            'labels' => array(
                'name' => 'Restaurants',
                'singular_name' => 'Restaurants',
                'all_items' => 'All Restaurants',
                'add_new' => 'Add Restaurants',
                'add_new_item' => 'Add Restaurant',
                'edit_item' => 'Edit Restaurant',
                'new_item' => 'New Restaurant',
                'view_item' => 'View Restaurant',
                'search_items' => 'Search Restaurant',
                'not_found' =>  'No Restaurants',
                'not_found_in_trash' => 'No Restaurants in trash', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats'
            ),
            'has_archive' => true
            
        );
        
        register_post_type('restaurants', $restaurants_args); 
        
        /*
         * Register Food Fight Post Type
         */

        $food_fights_args = array(
            'labels' => array(
                'name' => 'Food Fight',
                'singular_name' => 'Food Fight',
                'all_items' => 'All Fights',
                'add_new' => 'Add New Fight',
                'add_new_item' => 'Add New Fight',
                'edit_item' => 'Edit Fight',
                'new_item' => 'New Fight',
                'view_item' => 'View Fight',
                'search_items' => 'Search Fight',
                'not_found' => 'No Fights',
                'not_found_in_trash' => 'No Fights in trash', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','custom-fields'
            ),
            'has_archive' => true
            
        );
        
        register_post_type('foodfight', $food_fights_args);
    }

     add_action('init', 'lovetoeat_init_taxonomies');
    
    /* Register Taxionomies */
    
    function lovetoeat_init_taxonomies(){
        
        // Ingredients

        register_taxonomy(
            'ingredients',
            array('recipes'),
            array(

                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Ingredients',
                    'singular_name' => 'Ingredients',
                    'search_items' =>  'Search Ingredients',
                    'popular_items' => 'Popular Ingredients',
                    'all_items' => 'All Ingredients',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edit składnik', 
                    'update_item' => 'Update składnik',
                    'add_new_item' => 'Add new składnik',
                    'new_item_name' => 'Add new Ingredient',
                    'separate_items_with_commas' => 'Separate Ingredients with comma',
                    'add_or_remove_items' => 'Add or remove Ingredients',
                    'choose_from_most_used' => 'Choose from most used',
                    'menu_name' => 'Ingredients',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'ingredient' )
        ));
        
        
        // Meal Types

        register_taxonomy(
            'meal-type',
            array('recipes', 'restaurants'),
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Dish Type', 'taxonomy general name',
                    'singular_name' => 'Dish Type', 'taxonomy singular name',
                    'search_items' =>  'Search Dish Type',
                    'popular_items' => 'Popular Dish Type',
                    'all_items' => 'All Dish Type',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edit Dish Type', 
                    'update_item' => 'Update',
                    'add_new_item' => 'Add new Dish Type',
                    'new_item_name' => 'New Dish Name',
                    'separate_items_with_commas' => 'Seperate items with comma',
                    'add_or_remove_items' => 'Add or Remove Dish Type',
                    'choose_from_most_used' => 'Chose from most used',
                    'menu_name' => 'Dish Type',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'meal-type' )
        ));
        
        
        // Cousine Types

        register_taxonomy(
            'cousine-type',
            array('recipes', 'restaurants'),
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Couisine Type',
                    'singular_name' => 'Couisine Type',
                    'search_items' =>  'Search Couisine Type',
                    'popular_items' => 'Popular Couisine Types',
                    'all_items' => 'All Couisine Types',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edit Couisine Type', 
                    'update_item' => 'Update',
                    'add_new_item' => 'Add new Couisine Type',
                    'new_item_name' => 'New Couisine Type',
                    'separate_items_with_commas' => 'Seperate Types with Comma',
                    'add_or_remove_items' => 'Add or Remove Couisine Types',
                    'choose_from_most_used' => 'Chose from most used Couisine Types',
                    'menu_name' => 'Couisine Types',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'cousine-type' )
        ));
        
        
        // Cities

        register_taxonomy(
            'city',
            array('restaurants'),
            array(
                'hierarchical' => FALSE,
                'labels' => array(
                    'name' => 'City',
                    'singular_name' => 'City',
                    'search_items' =>  'Search City',
                    'popular_items' => 'Popular City',
                    'all_items' => 'All Cities',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edit City', 
                    'update_item' => 'Update',
                    'add_new_item' => 'Add new City',
                    'new_item_name' => 'New City Name',
                    'separate_items_with_commas' => 'Seperate Cities With Comma',
                    'add_or_remove_items' => 'Add or Remove City',
                    'choose_from_most_used' => 'Chose From Most Used Cities',
                    'menu_name' => 'City',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'city' )
        ));
        
    }


    add_action('admin_head', 'lte_admin_icons');
    function lte_admin_icons(){
        $ICON_URL = LOVETOEAT_THEME_URL.'img/admin/';
        
        ?>
<!-- <style>

    /* Admin Panel custom icons styles */
	
    #menu-posts-recipes .wp-menu-image,
    #menu-posts-restaurants .wp-menu-image,
    #menu-posts-foodfight .wp-menu-image{
        background-repeat: no-repeat;
        background-position: center -17px!important;
    }
    
    #menu-posts-recipes:hover .wp-menu-image,
    #menu-posts-restaurants:hover .wp-menu-image,
    #menu-posts-foodfight:hover .wp-menu-image,
    #menu-posts-recipes.wp-has-current-submenu .wp-menu-image,
    #menu-posts-restaurants.wp-has-current-submenu .wp-menu-image,
    #menu-posts-foodfight.wp-has-current-submenu .wp-menu-image{
        background-repeat: no-repeat;
        background-position: center 6px!important;
    }
    
    #menu-posts-recipies .wp-menu-image{
        background-image: url('<?php echo $ICON_URL.'icon-recipes-menu.png' ?>');
    }
    
    #menu-posts-restaurants .wp-menu-image{
        background-image: url('<?php echo $ICON_URL.'icon-restaurants-menu.png' ?>');
    }
    
    #menu-posts-foodfight .wp-menu-image{
        background-image: url('<?php echo $ICON_URL.'icon-foodfight-menu.png' ?>');
    }
    
    
    .icon32-posts-recipes,
    .icon32-posts-restaurants,
    .icon32-posts-foodfight{
        background-position: center center!important;
    }

    .icon32-posts-recipies{
        background-image: url('<?php echo $ICON_URL.'icon-recipes-header.png' ?>')!important;
    }
    
    .icon32-posts-restaurants{
        background-image: url('<?php echo $ICON_URL.'icon-restaurants-header.png' ?>')!important;
    }
    
    .icon32-posts-foodfight{
        background-image: url('<?php echo $ICON_URL.'icon-foodfight-header.png' ?>')!important;
    }
    
</style> -->
        <?php
    }

?>
